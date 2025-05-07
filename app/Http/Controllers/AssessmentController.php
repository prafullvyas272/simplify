<?php

namespace App\Http\Controllers;

use App\Enums\PaymentsStatusEnum;
use App\Enums\PaymentTypeEnum;
use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;
use App\Models\User;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Models\Child;
use App\Models\UserReport;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $payment = Auth::user()->payments()->where("type", PaymentTypeEnum::Assessment)
            ->where("status", PaymentsStatusEnum::Successful)
            ->count();

        $assessment = Auth::user()->assessments()->count();

        if (!$payment || $assessment)
            return to_route("dashboard");

        return Inertia::render("Assessments/AssessmentQuestions");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssessmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssessmentRequest $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assessment $assessment)
    {
        //
    }

    public function mine()
    {
        //        return Inertia::render("Assessments/AssessmentsSingle");
        return to_route("assessments.single", [
            "type" => "introduction",
            "user_id" => Auth::id(),
        ]);
    }

    public function pay()
    {

        return view('Payment', [
            'intent' => Auth::user()->createSetupIntent(),
        ]);
    }

    public function single(string $type, string $user)
    {

        try {

            $assessment = Auth::user()->assessments()->latest()->first();
            $authUser = Auth::user();
            // $childName = $authUser->first_name . ' ' . $authUser->last_name;
            $userReport = UserReport::whereChildId($user)->first();

            if (!$userReport) {
                return redirect()->route('thanks.you', ['id' => $user]);
            }
            $childId = $userReport['child_id'];
            $child = Child::whereId($childId)->first();
            $childName = $child ? $child['child_name'] : "";


            $style = $userReport['style'];

            $discScores = $userReport['disc_scores'];
            // if user is teen return teen components

            //Working:
            /**
             * 1. image integrations for kids learning style
             * 2. teens disc reports setup reports flow with some reports
             * 3. teens learning reports setup reports flow with some reports
             */

            return match ($type) {

                // "introduction" => Inertia::render("Assessments/AssessmentIntroduction"),
                "overview" => Inertia::render("Assessments/AssessmentOverview"),
                "what" => Inertia::render("Assessments/AssessmentWhat"),
                "intro" => Inertia::render("Assessments/AssessmentIntro", [
                    "assessment" => $assessment->self["intro"],
                    "type" => $assessment->type
                ]),
                "desc" => Inertia::render("Assessments/AssessmentDescriptive", [
                    "assessment" => $assessment->self["descriptive"],
                ]),

                "team" => Inertia::render("Assessments/AssessmentTeam", [
                    "assessment" => $assessment->team["me"]
                ]),
                "working" => Inertia::render("Assessments/AssessmentWorking", [
                    "assessment" => $assessment->team["me"]["working"],
                    "type" => $assessment->type
                ]),
                "strength" => Inertia::render("Assessments/AssessmentStrength", [
                    "assessment" => $assessment->self["strength"]
                ]),
                "excel" => Inertia::render("Assessments/AssessmentExcel", [
                    "assessment" => $assessment->growth["excel"]
                ]),
                "motivation-style" => Inertia::render("Assessments/AssessmentMotivationStyle", [
                    "assessment" => $assessment->communication["motivation_style"],
                    "type" => $assessment->type
                ]),
                "com-style" => Inertia::render("Assessments/AssessmentCommunicationStyle", [
                    "assessment" => $assessment->communication["style"],
                    "type" => $assessment->type,
                ]),
                "priorities" => Inertia::render("Assessments/AssessmentPriorities", [
                    "assessment" => $assessment->communication["priorities"],
                    "type" => $assessment->type

                ]),
                "growth" => Inertia::render("Assessments/AssessmentGrowth", [
                    "assessment" => $assessment->growth["insights"],
                    "type" => $assessment->type
                ]),
                "long-growth" => Inertia::render("Assessments/AssessmentLongGrowth", [
                    "assessment" => $assessment->growth["long_growth"],
                    "type" => $assessment->type

                ]),
                "com-tips" => Inertia::render("Assessments/AssessmentComTips", [
                    "assessment" => $assessment->communication["tips"],
                    "type" => $assessment->type
                ]),

                "perception" => Inertia::render("Assessments/AssessmentPerception"),
                "relationship-insights" => Inertia::render("Assessments/AssessmentRelationship", [
                    "assessment" => $assessment->team["other"]
                ]),
                "relating-manager" => Inertia::render("Assessments/AssessmentRelateManager", [
                    "assessment" => $assessment->leadership["manager"]
                ]),
                "leadership" => Inertia::render("Assessments/AssessmentLeadershipInsight", [
                    "assessment" => $assessment->leadership["relation"]

                ]),
                "communication-with-different-styles" => Inertia::render("Assessments/AssessmentCommunicationWithDifferentStyle", [
                    "assessment" => $assessment->communication["tips"]
                ]),
                "keys-to-manage-you" => Inertia::render("Assessments/AssessmentKeysManage", [
                    "assessment" => $assessment->team["me"]["manage"]
                ]),
                "keys-to-motivate" => Inertia::render("Assessments/AssessmentKeysMotivate", [
                    "assessment" => $assessment->team["me"]["motivation"]
                ]),
                "misunderstanding" => Inertia::render("Assessments/AssessmentMisunderstanding", [
                    "assessment" => $assessment->team["misunderstand"]
                ]),

                "pressure" => Inertia::render("Assessments/AssessmentPressure", [
                    "assessment" => $assessment->self["pressure"]
                ]),
                "ideal-environment" => Inertia::render("Assessments/AssessmentIdealEnvironment", [
                    "assessment" => $assessment->self["ideal_work"]
                ]),
                "talent" => Inertia::render("Assessments/AssessmentIndividualTalent", [
                    "assessment" => $assessment->self["talent"]
                ]),


                "disc" => Inertia::render("Assessments/AssessmentDisc"),


                "continuum" => Inertia::render("Assessments/AssessmentTraitContinuum", [
                    "assessment" => $assessment->self["trait"],
                    "type" => $assessment->type

                ]),





                "emphasize" => Inertia::render("Assessments/AssessmentEmphasize"),
                "sales" => Inertia::render("Assessments/AssessmentSales"),
                "reading" => Inertia::render("Assessments/AssessmentReading"),




                "other" => Inertia::render("Assessments/AssessmentOther", [
                    "assessment" => $assessment->team["other"],
                    "type" => $assessment->type

                ]),

                "graph" => Inertia::render("Assessments/AssessmentGraph", [
                    "type" => $assessment->type,
                    "graph" => json_decode(DB::table("disc_result")->where("user", Auth::user()->email)->first()->category_result),
                ]),
                "tips" => Inertia::render("Assessments/AssessmentTipsRemember"),


                # Inertia routes for C Style
                "introduction" => Inertia::render("Kids/Discs/Introduction", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,
                ]),
                "note-for-child" => Inertia::render("Kids/Discs/NoteForChild" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "your-disc-style-summary" => Inertia::render("Kids/Discs/YourDiscStyleSummary" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "child-disc-profile" => Inertia::render("Kids/Discs/ChildDiscProfile", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "detailed-analysis" => Inertia::render("Kids/Discs/DetailedAnalysis", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "child-style" => Inertia::render("Kids/Discs/ChildStyle", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "guidance-for-parents" => Inertia::render("Kids/Discs/ParentGuidance", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "guidance-for-teachers" => Inertia::render("Kids/Discs/TeacherGuidance", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "recommendations" => Inertia::render("Kids/Discs/Recommendation", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "parental-insights" => Inertia::render("Kids/Discs/ParentalInsight", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "teaching-insights" => Inertia::render("Kids/Discs/TeachingInsight", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "conclusion" => Inertia::render("Kids/Discs/Conclusion", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "appendices" => Inertia::render("Kids/Discs/Appendices", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $discScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
            };
        } catch (\Error $exception) {
            abort(404);
        }
    }

    public function teensDiscStyle(string $type, string $user)
    {

        try {


            $assessment = Auth::user()->assessments()->latest()->first();
            $authUser = Auth::user();
            // $childName = $authUser->first_name . ' ' . $authUser->last_name;
            $userReport = UserReport::whereChildId($user)->first();
            $style = $userReport['style'];

            $discScores = $userReport['disc_scores'];
            $childId = $userReport['child_id'];
            $child = Child::whereId($childId)->first();
            $childName = $child ? $child['child_name'] : "";

            return match ($type) {
                "introduction" => Inertia::render("Teens/Discs/Introduction", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,
                ]),

                "how-to-use-your-report" => Inertia::render("Teens/Discs/HowToUseReports", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                ]),

                "your-disc-profile" => Inertia::render("Teens/Discs/DiscProfileSummary" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "strengths-and-areas-for-growth" => Inertia::render("Teens/Discs/StrengthArea" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "social-interactions-and-communication-style" => Inertia::render("Teens/Discs/SocialInteraction" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "decision-making-and-motivation" => Inertia::render("Teens/Discs/DecisionMaking" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "learning-style-insights" => Inertia::render("Teens/Discs/LearningStyleInsight" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "stress-management-and-coping-strategies" => Inertia::render("Teens/Discs/StressManagement" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "environment-preferences" => Inertia::render("Teens/Discs/EnvironmentPreference" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "working-with-others" => Inertia::render("Teens/Discs/WorkingWithOther" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "parental-insights" => Inertia::render("Teens/Discs/ParentalInsight" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "teaching-tips" => Inertia::render("Teens/Discs/ParentalInsight" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "tips-for-parents-based-on-your-DISC-style" => Inertia::render("Teens/Discs/TipsForParents" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "teacher-insights" => Inertia::render("Teens/Discs/TeacherInsight" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "tips-for-teachers-based-on-your-DISC-style" => Inertia::render("Teens/Discs/TipsForTeacher" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "career-considerations" => Inertia::render("Teens/Discs/CareerConsiderations" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),
                "conclusion" => Inertia::render("Teens/Discs/Conclusion" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $discScores,

                ]),

            };
        } catch (\Error $exception) {
            abort(404);
        }
    }

    public function kidsLearningStyle(string $type, string $user)
    {

        try {

            $assessment = Auth::user()->assessments()->latest()->first();
            $authUser = Auth::user();
            // $childName = $authUser->first_name . ' ' . $authUser->last_name;
            $userReport = UserReport::whereChildId($user)->first();
            $style = $userReport['learn_style'];

            $learnScores = $userReport['learn_scores'];
            $childId = $userReport['child_id'];
            $child = Child::whereId($childId)->first();
            $childName = $child ? $child['child_name'] : "";
            return match ($type) {

                # Inertia routes for C Style
                "introduction" => Inertia::render("Kids/LearningStyles/Introduction", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                    'learnScores' => $learnScores,
                ]),
                "child-learning" => Inertia::render("Kids/LearningStyles/ChildLearningProfile" , [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'learnScores' => $learnScores,

                ]),
                "auditory-overview" => Inertia::render("Kids/LearningStyles/AuditoryOverview", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,

                ]),
                "home-support-strategies" => Inertia::render("Kids/LearningStyles/HomeSupportStrategies", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $learnScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "teaching-tips" => Inertia::render("Kids/LearningStyles/TeachingTips", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $learnScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "practical-exercises" => Inertia::render("Kids/LearningStyles/PracticalExercises", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $learnScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "communication" => Inertia::render("Kids/LearningStyles/Communication", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $learnScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),
                "conclusion" => Inertia::render("Kids/LearningStyles/Conclusion", [
                    'childName' => $childName,
                    'style' => $style,
                    'discScores' => $learnScores,
                    'image' => '/images/reports-images/' .$style . '.png',

                ]),

            };
        } catch (\Error $exception) {
            abort(404);
        }
    }


    public function teensLearningStyle(string $type, string $user)
    {

        try {
            $assessment = Auth::user()->assessments()->latest()->first();
            $authUser = Auth::user();
            // $childName = $authUser->first_name . ' ' . $authUser->last_name;
            $userReport = UserReport::whereChildId($user)->first();
            $style = $userReport['learn_style'];

            $learnScores = $userReport['learn_scores'];
            $childId = $userReport['child_id'];
            $child = Child::whereId($childId)->first();
            $childName = $child ? $child['child_name'] : "";
            return match ($type) {

                "your-learning-style" => Inertia::render("Teens/LearningStyles/LearningStyle", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'learnScores' => $learnScores,
                ]),

                "introduction" => Inertia::render("Teens/LearningStyles/Introduction", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                    'learnScores' => $learnScores,
                ]),

                "strenghts-and-growth-area" => Inertia::render("Teens/LearningStyles/StrengthAndGrowthArea", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),

                "learning-style-insights" => Inertia::render("Teens/LearningStyles/LearningStyleInsight", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),

                "environment-preferences" => Inertia::render("Teens/LearningStyles/EnvironmentPreference", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),

                "how-to-best-study-for-exams" => Inertia::render("Teens/LearningStyles/BestStudyForExams", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),

                "time-management-techniques" => Inertia::render("Teens/LearningStyles/TimeManagement", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),

                "parental-insights" => Inertia::render("Teens/LearningStyles/ParentalInsight", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),

                "teacher-insights" => Inertia::render("Teens/LearningStyles/TeacherInsight", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),

                "conclusion" => Inertia::render("Teens/LearningStyles/Conclusion", [
                    'childName' => $childName,
                    'style' => $style,
                    'image' => '/images/reports-images/' .$style . '.png',
                    'discScores' => $learnScores,
                ]),
            };

        } catch (\Error $exception) {
            abort(404);
        }
    }


    public function data(Request $request)
    {
        $validated = $request->validate([
            "email" => ["string", "email", "required"],
            "blend" => ["string", "required"],
            "reportlink" => ["url"]
        ]);

        User::whereEmail($validated["email"])->first()->assessments()->create([
            "type" => $validated["blend"],
            "report_url" => $validated["reportlink"],
        ]);
    }
}
