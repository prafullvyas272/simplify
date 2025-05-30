<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\User;
use App\Models\UserReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;
use Symfony\Component\HttpFoundation\Response;

class WebhookController extends Controller
{
    /**
     * Method to create the invited user
     */
    public function createInvitedUser(Request $request)
    {
        try {
            DB::beginTransaction();
            $this->logIncomingRequestForWebhooks('Creating Invited User', '/api/create-user', $request->all());

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'is_invited_from_lesson_planner' => true,
                'role_id' => 3,
                "data->profile_completed" => 1,
                "active_status" => 1
            ]);

            $child = Child::create([
                'child_name' => $request->input('name'),
                'user_id' => $user['id'],
                'child_type' => $request->input('child_type'),
            ]);

            DB::commit();

            return response()->json([
                'message' => 'User created.',
                'status' => Response::HTTP_CREATED,
                'data' => [
                    'user' => $user,
                    'child' => $child
                ],
            ], Response::HTTP_CREATED);
        } catch (Throwable $exception) {
            Log::error('Something went wrong when creating invited user.' . $exception);
            return response()->json([
                'message' => 'Something went wrong when creating invited user.',
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Method to get the user data by email
     */
    public function getUserByEmail(Request $request)
    {
        try {
            $this->logIncomingRequestForWebhooks('Fetching user data by email', '/api/children', $request->all());

            $email = $request->input('email');
            $childName = $request->input('name');



            $user = User::whereEmail($email)->first();
            $userId = $user ? $user['id'] : null;
            $child = Child::whereChildName($childName)->whereUserId($userId)->first();
            $data = null;

            if ($user && $child) {
                $userChildReport = UserReport::whereChildId($child['id'])->first();
                if ($userChildReport) {
                    $data = [
                        'learningStyle' => $userChildReport['learn_style'],
                        'discStyle' => $userChildReport['style'],
                        'discScores' => $userChildReport['disc_scores'],
                        'learnScores' => $userChildReport['learn_scores'],
                    ];
                }
            }

            return response()->json([
                'message' => 'Data fetched.',
                'status' => Response::HTTP_OK,
                'data' => [
                    'user' => $data,
                    'child' => $child,
                    'parent' => $user,
                ],
            ], Response::HTTP_OK);

        } catch (Throwable $exception) {
            Log::error('Something went wrong when creating invited user.' . $exception);
            return response()->json([
                'message' => 'Something went wrong when creating invited user.',
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Method to send the learning style and disc style using webhook
     */
    public function updateLearningStyleDataInLessonPlanner($email, $userReport)
    {
        try {
            $learningStyle = $userReport['learn_style'];
            $discStyle = $userReport['style'];
            $discScores = $userReport['disc_scores'];
            $learnScores = $userReport['learn_scores'];


            $apiUrl = config('app.lesson_planner_url') . 'api/students/update-learning-styles';

            $res = Http::put($apiUrl, [
                'email' => $email,
                'learning_style' => $learningStyle,
                'disc_style' => $discStyle,
                'disc_scores' => $discScores,
                'learn_scores' => $learnScores,
            ]);

            return response()->json([
                'message' => 'Data sent to lesson planner.',
                'status' => Response::HTTP_OK,
            ], Response::HTTP_OK);

        } catch (Throwable $exception) {
            Log::error('Something went wrong when sending data to lesson planner.' . $exception);
            return response()->json([
                'message' => 'Something went wrong when sending data to lesson planner.',
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Method to log the incoming request payload in log file
     */
    public function logIncomingRequestForWebhooks($message, $apiUrl, $payload)
    {
        Log::channel('webhooks')->info('Message ===================>' . $message);
        Log::channel('webhooks')->info('Api Url ===================>' . $apiUrl);
        Log::channel('webhooks')->info('Payload ===================>');
        Log::channel('webhooks')->info($payload);
    }
}
