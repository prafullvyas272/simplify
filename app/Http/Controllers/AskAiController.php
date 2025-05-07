<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\Uri\Http;

class AskAiController extends Controller
{
    public function send_message(Request $request)
    {
        $request->validate([
            "message" => ["required"],
        ]);

        $response=\Illuminate\Support\Facades\Http::post(env("AI_SERVER") . "ai-chat",[
            "user"=> Auth::user()->email,
            "message"=>$request->message,
        ]);

        return $response->body();

    }
    public function history()
    {
      $response=\Illuminate\Support\Facades\Http::get(env("AI_SERVER") . "chat-history",[
            "user"=>Auth::user()->email,
        ]);

        return $response->body();

    }
}
