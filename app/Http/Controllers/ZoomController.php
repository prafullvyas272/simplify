<?php

namespace App\Http\Controllers;

use App\Models\CoachUser;
use App\Models\User;
use App\Models\ZoomInviteLog;
use App\Services\ZoomService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    protected $zoomService;

    public function __construct(ZoomService $zoomService)
    {
        $this->zoomService = $zoomService;
    }

    public function createMeeting(Request $request)
    {
        $getCoachUserDetails = CoachUser::find(21);

        $startDate = Carbon::parse($getCoachUserDetails->from_date, 'Asia/Dubai');
        $endDate = Carbon::parse($getCoachUserDetails->to_date);
        // Calculate the difference in hours
        $duration = $startDate->diffInMinutes($endDate);
        $formattedStartDate = $startDate->format('F j, Y, g:i a');
        $utcStartTime = $startDate->setTimezone('UTC');
        $formattedStartTime = $utcStartTime->format('Y-m-d\TH:i:s\Z');
        
        $zoomService = app()->make(\App\Services\ZoomService::class);
        $meeting = $zoomService->createMeeting(
            "Coaching call on unify",
            $formattedStartTime,
            $duration,
            '123456'
        );

        ZoomInviteLog::create([
            'sender_id' => $getCoachUserDetails->coach_id,
            'receiver_id' => $getCoachUserDetails->student_id,
            'meeting_time' => $startDate,
            'duration' => $duration,
            'meeting_link' => $meeting['join_url'], // Assuming $meeting contains 'join_url'
        ]);

        $getUsers = User::whereIn('id',[$getCoachUserDetails->coach_id,$getCoachUserDetails->student_id])->select('email','name')->get();


        \Mail::to($getUsers[0]->email)->send(new \App\Mail\ZoomInvitationMail($meeting,$formattedStartDate,$getUsers[1]->name));
        \Mail::to($getUsers[1]->email)->send(new \App\Mail\ZoomInvitationMail($meeting,$formattedStartDate,$getUsers[0]->name));
        return $meeting;
        exit;

        // $getCoachUserDetails = CoachUser::find(9);

        // $startDate = Carbon::parse($getCoachUserDetails->from_date);
        // $endDate = Carbon::parse($getCoachUserDetails->to_date);
        // //var_dump($endDate);
        // // Calculate the difference in hours
        // $duration = $startDate->diffInMinutes($endDate);
        // $formattedStartTime = $startDate->format('Y-m-d\TH:i:s\Z');
        // $zoomService = app()->make(\App\Services\ZoomService::class);
        // $meeting = $zoomService->createMeeting(
        //     "One to one meeting",
        //     $formattedStartTime,
        //     $duration,
        //     '123456'
        // );
        // return $meeting;
        // exit;
        // $getEmailIds = User::whereIn('id',[$getCoachUserDetails->coach_id,$getCoachUserDetails->student_id])->pluck('email')->toArray();
        // \Mail::to($getEmailIds)->send(new \App\Mail\ZoomInvitationMail($meeting));


        

        $request->validate([
            'topic' => 'required|string',
            'start_time' => 'required|date',
            'duration' => 'required|integer',
            'password' => 'nullable|string',
            'invitees' => 'required|array',
            'invitees.*.email' => 'required|email',
        ]);
        $startDate = Carbon::parse($request->start_time, 'Asia/Kolkata'); // Your local timezone
        $utcStartTime = $startDate->setTimezone('UTC');
        $formattedStartTime = $utcStartTime->format('Y-m-d\TH:i:s\Z');
        
        $meeting = $this->zoomService->createMeeting(
            $request->topic,
            $formattedStartTime,
            $request->duration,
            $request->password
        );
        return $meeting;
        // foreach ($request->invitees as $invitee) {
        //     \Mail::to($invitee['email'])->send(new \App\Mail\ZoomInvitationMail($meeting));
        // }

        return response()->json($meeting);
    }
}
