<?php

namespace App\Helpers;


use App\Models\Assessment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AssessmentHelper
{

    public static function get_total_assessments()
    {
        return Cache::remember("total_assessment", 86400,  function (){
            return DB::table("assessments")
                ->join("users" ,"assessments.user_id" , "=" , "users.id")
                ->selectRaw('role_id , count(assessments.id) as total_assessments')
                ->groupBy('role_id')
                ->pluck('total_assessments', 'role_id' );
        });
    }
}
