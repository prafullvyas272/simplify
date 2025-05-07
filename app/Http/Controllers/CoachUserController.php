<?php

namespace App\Http\Controllers;

use App\Enums\PaymentsStatusEnum;
use App\Enums\PaymentTypeEnum;
use App\Enums\StatusEnum;
use App\Helpers\UserHelper;
use App\Http\Requests\StoreSessionRequest;
use App\Mail\NewSessionCoach;
use App\Models\CoachUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Laravel\Cashier\Cashier;
use App\Services\ZoomService;
use App\Models\ZoomInviteLog;
use Illuminate\Support\Facades\Log;

class CoachUserController extends Controller
{

    public function index()
    {

        $all_sessions= match (Auth::user()->role_id) {
            3 => CoachUser::where("student_id",Auth::id())
                ->orderByDesc("from_date")
                ->with([
                    "coach"
                ])->paginate(8)
                ->withQueryString(),

            2 => CoachUser::where("coach_id",Auth::id())
                ->where("status" , StatusEnum::Completed)
                ->orderByDesc("from_date")
                ->with([
                    "student"
                ])->paginate(8)
                ->withQueryString(),


            1 => CoachUser::where("status" , StatusEnum::Completed)
                ->orderByDesc("from_date")
                ->with([
                    "student"
                ])->paginate(8)
                ->withQueryString(),


        };




        return Inertia::render("CoachUsers/CoachUsersIndex", [
            "coach_users" => $all_sessions->items(),
            "current_page"=>$all_sessions->currentPage(),
            "last_page"=>$all_sessions->lastPage(),
        ]);


    }

    public function show(CoachUser $session)
    {
        $session->load([
            "goals"=>[
                "tasks"
            ],
            "notes"
            ]);

        return Inertia::render("CoachUsers/CoachUsersSingle", [
            "coach_user" => $session
        ]);
    }

    public function index_for_note()
    {
        $sessions=CoachUser::where("coach_id" , Auth::id())->orWhere("student_id" , Auth::id())
//            ->where("status" , StatusEnum::Accepted)
            ->with("coach:id,name")
            ->with("student:id,name")
            ->get();

        return $sessions;
    }


    public function store( StoreSessionRequest $request , User $coach)
    {
        $request->validated();
        try {

            $coach_user=CoachUser::create([
                "student_id" => Auth::id(),
                "coach_id" => $coach->id,
                "from_date"=> $request->from_date,
                "to_date"=> $request->to_date,
                "status"=> StatusEnum::Requested
            ]);

            Mail::send(new NewSessionCoach($coach_user));
            return back()->with("success" , "Session Request Submitted Successfully");

        }catch (\Exception $e){
            return back()->with("error" , "Couldn't Submit The request, we will investigate the issue");

        }
    }

    public function accept(CoachUser $session)
    {
        if ($session->coach_id != Auth::id())
            return back()->with("error" , "Can't Accept a Session That doesn't belongs to you");

        if ($session->status != StatusEnum::Requested)
            return back()->with("error" , "Session Expired, Please Tell User To Submit Again");

        $session->update([
            "status" => StatusEnum::Accepted
        ]);

        UserHelper::send_session_response_email($session);

        return back()->with("success" , "Session Accepted Successfully");


    }
    public function reject(CoachUser $session)
    {
        if ($session->coach_id != Auth::id())
            return back()->with("error" , "Can't Reject a Session That doesn't belongs to you");

        if ($session->status != StatusEnum::Requested)
            return back()->with("error" , "Session Expired, Please Tell User To Submit Again");

        $session->update([
            "status" => StatusEnum::Declined
        ]);
        UserHelper::send_session_response_email($session);

        return back()->with("success" , "Session Rejected Successfully");
    }


    public function calendar(User $coach)
    {

        $sessions=CoachUser::where("coach_id",$coach->id)
                    ->whereIn("status" , [StatusEnum::Accepted , StatusEnum::PaidSuccessfully])
                    ->where("from_date",">=",today())
                    ->where("to_date","<=",today()->addDays(100))
                    ->get([
                        "from_date",
                        "to_date",
                    ]);



        return Inertia::render("CoachUsers/CoachUsersCalendar", [
                "sessions" => $sessions,
                "coach_id"=>$coach->id,
        ]);
    }


    public function pay(CoachUser $session)
    {
        if ($session->status != StatusEnum::Accepted){
            \Illuminate\Support\Facades\Session::flash("error" , "Can't Pay For a session that is not accepted");
            return redirect()->route("dashboard");
        }


        $session->load("coach");

        $start_session= new Carbon($session->from_date);
        $end_session= new Carbon($session->to_date);


        $payment= \App\Models\Payment::create([
            "status" => PaymentsStatusEnum::Pending,
            "type" =>PaymentTypeEnum::Session,
            "user_id" =>Auth::id(),
            "paid_to"=>$session->coach_id,
            "units" => $start_session->diffInHours($end_session) ,
            "unit_price" => $session->coach->data["rate"],
            "total_amount"=> $session->coach->data["rate"] * $start_session->diffInHours($end_session),
            "coach_user_id"=>$session->id,
        ]);



        return \Illuminate\Support\Facades\Auth::user()
            ->checkoutCharge(($session->coach->data["rate"] * $start_session->diffInHours($end_session)) * 100,
                "price_1P13NUAhCbZ50RE69e9BfJ4t" ,
                1,
                [
                    'success_url' => route('sessions.success') .'?session_id={CHECKOUT_SESSION_ID}' ,
                    'cancel_url' => route('sessions.cancel') ,
                    'metadata' => ['order_id' => $payment->id,],
                ]
            );
    }


    public function success( Request $request )
    {

        $session = Cashier::stripe()->checkout->sessions->retrieve($request->get("session_id"));

        if ($session->payment_status !== 'paid')
            return to_route("dashboard")->with("error" , "Payment Was UnSuccessful, Please try again");


        $payment_id = $session['metadata']['order_id'] ?? null;

        $payment= \App\Models\Payment::findOrfail($payment_id);

        $payment->update([
            "status" => PaymentsStatusEnum::Successful
        ]);

        CoachUser::where("id" , $payment->coach_user_id)->update(["status" => StatusEnum::PaidSuccessfully]);
        $getCoachUserDetails = CoachUser::find($payment->coach_user_id);

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
        
        \Illuminate\Support\Facades\Session::flash("success" , "Payment Has Been Successful");
        return \Illuminate\Support\Facades\Redirect::route("dashboard")->with("success" , "Payment Has Been Successful");

    }

    public function cancel( Request $request )
    {

        $session = Cashier::stripe()->checkout->sessions->retrieve($request->get("session_id"));

        $payment_id = $session['metadata']['order_id'] ?? null;

        $payment= \App\Models\Payment::findOrfail($payment_id);

        $payment->update([
            "status" => PaymentsStatusEnum::Failed
        ]);

        CoachUser::where("id" , $payment->coach_user_id)->update(["status" => StatusEnum::PaymentFailed]);

        return \Illuminate\Support\Facades\Redirect::route("dashboard")->with("error" , "Payment Has Been Cancelled");

    }

    public function complateCoachUser(){
        $users = CoachUser::where('status', 's')->where('from_date','<',now()->format('Y-m-d H:i:s'))->get();
        foreach ($users as $user) {
            $user->status = 'c';
            $user->save();
        }

        Log::info('Updated ' . $users->count() . ' records.');
        return true;
    }
}
