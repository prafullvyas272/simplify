<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReport;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Child;
use Illuminate\Support\Facades\Log;

class SecondTermAssessmentController extends Controller
{
    /**
     * Method to show kids disc style report for second term
     */
    public function showKidsDiscStyleReport(string $type, string $childId)
    {
        try {
            $authUser = Auth::user();
            $assessment = $authUser->secondTermAssessment()->latest()->first();
            $userReport = $authUser->secondTermUserReports->where('child_id', $childId)->first();

            // if (!$userReport) {
            //     return redirect()->route('thanks.you', ['id' => $childId]);
            // }
            $child = Child::whereId($childId)->first();
            $childName = $child ? $child['child_name'] : "";
            $style = $userReport['style'] ?? 'SI';   //TODO: need to remove
            $discScores = $userReport['disc_scores'] ?? '{"C":4,"D":7,"I":6,"S":3}';
            $propsData = [
                'authUser' => $authUser,
                'childName' => $childName,
                'discStyle' => $style,
                'discScores' => $discScores,
            ];

            return match ($type) {
                "welcome" => Inertia::render("SecondTerm/Kids/Discs/Welcome", $propsData),
                "disc-personality-framework" => Inertia::render("SecondTerm/Kids/Discs/DiscPersonalityFramework", $propsData),
                "note-for-your-child" => Inertia::render("SecondTerm/Kids/Discs/NoteToChild", $propsData),
                "results" => Inertia::render("SecondTerm/Kids/Discs/Results", $propsData),
                "understanding-style" => Inertia::render("SecondTerm/Kids/Discs/UnderstandingStyle", $propsData),
                "thinking-and-decisions" => Inertia::render("SecondTerm/Kids/Discs/HowTheyThink", $propsData),
                "motivation" => Inertia::render("SecondTerm/Kids/Discs/WhatMotivates", $propsData),
                "how-they-express-themselves" => Inertia::render("SecondTerm/Kids/Discs/HowTheyExpress", $propsData),
                "emotions-and-reactions" => Inertia::render("SecondTerm/Kids/Discs/EmotionsAndReactions", $propsData),
                "tackle-problems" => Inertia::render("SecondTerm/Kids/Discs/HowTheyTackle", $propsData),
                "independence-and-responsibility" => Inertia::render("SecondTerm/Kids/Discs/BuildingIndependence", $propsData),
                "energy-and-focus" => Inertia::render("SecondTerm/Kids/Discs/EnergyAndFocus", $propsData),
                "set-and-stick-to-goals" => Inertia::render("SecondTerm/Kids/Discs/KeepAnEye", $propsData),
                "working-and-playing" => Inertia::render("SecondTerm/Kids/Discs/WorkingAndPlaying", $propsData),
                "helping-at-home" => Inertia::render("SecondTerm/Kids/Discs/HelpingAtHome", $propsData),
                "supporting-them-in-classroom" => Inertia::render("SecondTerm/Kids/Discs/SupportingThem", $propsData),
                "fun-ways-for-building-skills" => Inertia::render("SecondTerm/Kids/Discs/FunWays", $propsData),
                "helpful-words" => Inertia::render("SecondTerm/Kids/Discs/HelpfulWords", $propsData),
                "keep-an-eye" => Inertia::render("SecondTerm/Kids/Discs/KeepAnEye", $propsData),
                "glossary" => Inertia::render("SecondTerm/Kids/Discs/Glossary", $propsData),
                default => abort(404),
            };


        } catch (\Error $exception) {
            Log::error('Something went wrong when showing report.' . $exception);
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ], 500);
        }
    }
}
