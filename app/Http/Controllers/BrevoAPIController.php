<?php

namespace App\Http\Controllers;

use App\Enums\BrevoEmailTemplate;
use App\Http\Requests\WhatsappSignupRequest;
use App\Models\SimplifyWhatsappSignup;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Throwable;

class BrevoAPIController extends Controller
{
    //

    public function subscribeForm($email, $listId, $firstName, $lastName)
    {
        $client = new Client();
        $apiKey = env('BREVO_API_KEY');

        // Define the data you want to send
        $data = [
            "email" => $email,
            "attributes" => [
                "FIRSTNAME" => $firstName,
                "LASTNAME" => $lastName,
            ],
            "listIds" => [(int) $listId], // Replace with your actual list ID
        ];

        try {
            $response = $client->post('https://api.brevo.com/v3/contacts', [
                'headers' => [
                    'api-key' => $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => $data,
            ]);

            return response()->json([
                'status' => 'success',
                'data' => json_decode($response->getBody(), true),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function contactUsForm(Request $request)
    {
        $client = new Client();
        $apiKey = env('BREVO_API_KEY');
        // echo $apiKey;exit;

        // Define the data you want to send
        $data = [
            "email" => $request->input('email'),
            "name" => $request->input('name'),
            "description" => $request->input('field'),
            "listIds" => [20], // Replace with your actual list ID
            "updateEnabled" => true
        ];

        try {
            $response = $client->post('https://api.brevo.com/v3/contacts', [
                'headers' => [
                    'api-key' => $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => $data,
            ]);

            return response()->json([
                'status' => 'success',
                'data' => json_decode($response->getBody(), true),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Methot to send simplify whatsapp signup data to brevo
     */
    public function sendSimplifyWhatsappSignupDataToBrevo(WhatsappSignupRequest $request)
    {
        $client = new Client();
        $apiKey = config('app.brevo_api_key');
        $listId = config('app.simplify_whatsapp_signup_list_id_in_brevo');   // For sending

        $data = [
            "email" => $request->input('email'),
            "attributes" => [
                "NAME" => $request->input('first_name') . ' ' .  $request->input('last_name'),
                "FIRSTNAME" => $request->input('first_name'),
                "LASTNAME" => $request->input('last_name'),
                "PHONE" => $request->input('phone'),
            ],
            "listIds" => [(int) $listId],
        ];

        try {
            $apiUrl = config('app.brevo_api_url') . 'contacts';
            $apiHeaders = [
                'api-key' => $apiKey,
                'Content-Type' => 'application/json',
            ];
            $response = $client->post($apiUrl, [
                'headers' => $apiHeaders,
                'json' => $data,
            ]);

            if ($response->getStatusCode() === 201) {
                return response()->json([
                    'status' => 'success',
                    'data' => 'Data sent to brevo successfully',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'data' => 'Something went wrong when sending data to brevo.',
                ], 200);
            }
        } catch (\Exception $e) {
            Log::error('Something went wrong when sending data to brevo.' . $e);
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Method to send the new term assessment link to user
     */
    public function sendNewTermAssessmentLink($userId)
    {
        try {
            $user = User::whereId($userId)->first();
            if (!$user) {
                return;
            }
            $child = $user->chlidrens->first();
            $apiHeaders = $this->getApiHeaders();
            $apiUrl = config('app.brevo_api_url') . 'smtp/email';
            $data =  [
                'to' => [
                    [
                        'email' => $user['email'],
                    ],
                ],
                'templateId' => BrevoEmailTemplate::NEW_TERM_ASSESSMENT_LINK,
                'params' => [
                    'assessment_link' => config('app.url') . 'second-term/thank-you-message/' . $child['id'],
                ],
            ];

            $response = Http::withHeaders($apiHeaders)->post($apiUrl, $data);

            if ($response->getStatusCode() === 201) {
                return response()->json([
                    'status' => 'success',
                    'data' => 'New term invitation link sent successfully',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'data' => 'Something went wrong when sending invitation link.',
                ], 500);
            }
        } catch (Throwable $exception) {
            Log::error('Something went wrong when sending data to brevo.' . $exception);
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ], 500);
        }
    }

    /**
     * Method to get the api headers to send mail using brevo
     */
    public function getApiHeaders()
    {
        return  [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'api-key' => env('BREVO_API_KEY'),
        ];
    }
}
