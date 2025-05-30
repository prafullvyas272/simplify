<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Webhook\WebhookController;
use App\Models\BrevoListId;
use App\Models\Child;
use App\Models\ChildAnswers;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\UserReport;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UserReportController extends Controller
{
    public function store(Request $request)
    {

        try {
            $validated = $request->validate([
                'disc_report_url' => 'nullable|url',
                'learn_report_url' => 'nullable|url',
                'style' => 'nullable|string',
                'child_id' => 'numeric',
                'disc_scores' => 'nullable',
                'learn_scores' => 'nullable',
                'learn_style' => 'nullable|string'
            ]);

            $user_id = Auth::user()->id;

            $userReport = null;
            if (!empty($validated['disc_report_url'])) {
                $userReport = UserReport::create([
                    'user_id' => $user_id,
                    'child_id' => $request->child_id,
                    'type' => 1,
                    'report_link' => $validated['disc_report_url'],
                    'style' => $request->input('style'),
                    'learn_style' => $request->input('learn_style'),
                    'disc_scores' => json_encode($request->input('disc_scores')),
                    'learn_scores' => json_encode($request->input('learn_scores')),
                ]);
            }

            // Create the Learning Styles Report record if the URL is provided
            if (!empty($validated['learn_report_url'])) {
                $userReport = UserReport::create([
                    'user_id' => $user_id,
                    'child_id' => $request->child_id,
                    'type' => 2,
                    'report_link' => $validated['learn_report_url'],
                    'style' => $request->input('style'),
                    'learn_style' => $request->input('learn_style'),
                    'disc_scores' => json_encode($request->input('disc_scores')),
                    'learn_scores' => json_encode($request->input('learn_scores')),
                ]);
            }
            Child::whereId($request->child_id)->update([
                'style_type' => $request->input('learn_style')
            ]);
            //send emal to user
            $this->sendEmail($user_id, $request->child_id);

            $authUser = Auth::user();
            if ($authUser['is_invited_from_lesson_planner']) {
                $webhookController = new WebhookController();
                $webhookController->updateLearningStyleDataInLessonPlanner($authUser['email'], $userReport);
            }

            return response()->json(['message' => 'Reports created successfully.'], 201);
        } catch (\Throwable $exception) {
            return response()->json(['message' => 'Something went wrong.'], 201);
        }
    }


    public function storeReportData(Request $request)
    {
        ChildAnswers::create([
            'child_id' => $request->child_id,
            'type' => $request->type,
            'answere' => json_encode($request->ansData),
        ]);

        return response()->json(['message' => 'Reports created successfully.', 'status' => 'Success'], 201);
    }

    public function storeDiscReportData(Request $request)
    {
        ChildAnswers::create([
            'child_id' => $request->child_id,
            'type' => $request->type,
            'answere' => json_encode($request->ansData),
        ]);

        $learn = ChildAnswers::where('child_id', $request->child_id)->where('type', 'learn')->first();
        $disc = $request->ansData;
        $learn = json_decode($learn->answere);
        return response()->json(['message' => 'Reports created successfully.', 'status' => 'Success', 'disc' => $disc, 'learn' => $learn], 201);
    }

    public function sendEmail($userId, $childId)
    {
        try {
            // Validate the input
            $childDetail = Child::where('id', $childId)->first();

            $paymentDetail = Payment::with('pakage')->where('user_id', $userId)->where('status', 's')->latest('updated_at')->first();

            $childName = $childDetail->child_name;
            $recipientEmail = Auth::user()->email;
            $user = Auth::user();
            $firstName = $user->name;
            $lastName = $user->parent_last_name;
            $brevoListData = BrevoListId::whereId($paymentDetail->pakage->id)->first();
            $apiHeaders = [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'api-key' => env('BREVO_API_KEY'),
            ];
            // dd($apiHeaders, env('VIDEO_API_TOKEN'));
            Http::withHeaders($apiHeaders)->post('https://api.brevo.com/v3/smtp/email', [
                'to' => [
                    [
                        'email' => $recipientEmail,
                    ],
                ],
                'templateId' => $brevoListData['assessment_complete_template_id'],
                'listIds' => [$brevoListData['list_id']],
                'params' => [
                    'child_name' => $childName,
                ],
            ]);

            $brevoController = new BrevoAPIController();
            $brevoController->subscribeForm($recipientEmail, $brevoListData['list_id'], $firstName, $lastName);

            return response()->json([
                'message' => 'Data sent to brevo.'
            ], 200);
        } catch (\Throwable $exception) {
            Log::error('Something went wrong when sending data to brevo. ' .  $exception);
            return response()->json([
                'message' => 'Something went wrong when sending data to brevo.'
            ], 500);
        }
    }
}
