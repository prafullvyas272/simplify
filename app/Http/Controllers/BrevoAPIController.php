<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
            "listIds" => [ (int) $listId], // Replace with your actual list ID
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
}
