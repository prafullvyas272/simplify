<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Models\CoachUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CoachController extends Controller
{
    public function calendar()
    {
        $available_sessions=CoachUser::where("coach_id" , Auth::id())
                ->with("student:id,first_name,last_name,image")
                ->whereNot("status" , StatusEnum::Declined)
                ->where("from_date",">=",today())
                ->where("to_date","<",today()->addDays(100))
                ->get([
                    "id",
                    "status",
                    "from_date",
                    "to_date",
                    "created_at",
                    "student_id",
                ]);


      return Inertia::render("Coaches/CoachesCalendar", [
            "sessions" => $available_sessions,
        ]);

    }
}
