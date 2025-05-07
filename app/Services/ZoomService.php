<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class ZoomService
{
    protected $client;
    protected $clientId;
    protected $clientSecret;
    protected $accountId;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://zoom.us/oauth/',
        ]);

        $this->clientId = config('zoom.client_id');
        $this->clientSecret = config('zoom.client_secret');
        $this->accountId = config('zoom.account_id');
    }

    protected function getAccessToken()
    {
        if (Cache::has('zoom_access_token')) {
            return Cache::get('zoom_access_token');
        }

        $response = $this->client->post('token', [
            'auth' => [$this->clientId, $this->clientSecret],
            'form_params' => [
                'grant_type' => 'account_credentials',
                'account_id' => $this->accountId,
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        $accessToken = $data['access_token'];
        $expiresIn = $data['expires_in'];

        Cache::put('zoom_access_token', $accessToken, $expiresIn - 60);

        return $accessToken;
    }

    public function createMeeting($topic, $startTime, $duration, $password)
    {
        $accessToken = $this->getAccessToken();

        $response = $this->client->post('https://api.zoom.us/v2/users/me/meetings', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'topic' => $topic,
                'type' => 2, // Scheduled meeting
                'start_time' => $startTime,
                'duration' => $duration,
                'password' => $password,
                'settings' => [
                    'join_before_host' => true, // Allow participants to join before host
                    'waiting_room' => false,    // Disable waiting room
                ],
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
