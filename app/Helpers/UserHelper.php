<?php

namespace App\Helpers;


use App\Mail\NewProposalCoach;
use App\Mail\ProposalResponse;
use App\Mail\SessionResponse;
use App\Models\CoachUser;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserHelper
{

    public static function get_total_users_role()
    {
        return Cache::remember("total_users", 86400 ,function (){
        return  DB::table("users")
                ->selectRaw('role_id , count(users.id) as total_users')
                ->groupBy('role_id')
                ->pluck('total_users', 'role_id' );
        });
    }

    public static function get_total_users_gender()
    {

        return Cache::remember("total_users_gender", 86400 ,function (){
            return  DB::table("users")
                ->selectRaw('gender , count(users.id) as total_users')
                ->groupBy('gender')
                ->pluck('total_users', 'gender' );
        });
    }
    public static function get_total_hours_coached()
    {
        return Cache::remember("total_hours_coached", 86400 ,function (){
            $total_hours["today"]= CoachUser::whereDate("created_at" , today())
                ->selectRaw("sum(TIMESTAMPDIFF(HOUR, to_date, from_date)) as total")
                ->get()[0]->total;


            $total_hours["week"]= CoachUser::whereDate("created_at" ,">=" , today()->subDays(7))
                ->whereDate("created_at" , "<=", today())
                ->selectRaw("sum(TIMESTAMPDIFF(HOUR, to_date, from_date)) as total")
                ->get()[0]->total;

            $total_hours["month"]= CoachUser::whereDate("created_at" ,">=" , today()->subDays(30))
                ->whereDate("created_at" , "<=", today())
                ->selectRaw("sum(TIMESTAMPDIFF(HOUR, to_date, from_date)) as total")
                ->get()[0]->total;


            return $total_hours;

        });
    }


    public static function send_proposal_response_email($proposal)
    {
        Mail::send(new ProposalResponse($proposal));
    }
    public static function send_session_response_email($session)
    {
        Mail::send(new SessionResponse($session));
    }

    public static function send_new_proposal_email($proposal)
    {
        Mail::send(new NewProposalCoach($proposal));
    }

}
