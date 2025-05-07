<?php

namespace App\Helpers;

use App\Models\CoachUser;
use App\Models\Room;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class RoomHelper
{
//    private $API_TOKEN=env("VIDEO_API_TOKEN");

    private PendingRequest $client;


    public function __construct()
    {
        $this->client=Http::withHeaders([
            "Content-Type"=>"application/json",
        "x-api-key"=>env("VIDEO_API_TOKEN")
        ])->baseUrl("https://video.altegon.com/");
    }

    public function create_room(int $coach_user_id): bool
    {
        $response=$this->client->post("room",[
            "name"=>"Room $coach_user_id",
            "type"=>"conference",
            "p2p"=>true
        ])->json();

        if ($response["success"]==true){
            Room::create([
                "coach_user_id"=>$coach_user_id,
                "external_room_id"=>$response["data"]["id"]
            ]);
            return true;
        }

        return false;

    }
}
