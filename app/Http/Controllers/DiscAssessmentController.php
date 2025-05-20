<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\PaymentsStatusEnum;
use App\Enums\PaymentTypeEnum;
use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;
use App\Models\Child;
use App\Models\User;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DiscAssessmentController extends Controller
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
    public function create($id)
    {
        $childDetail = Child::where('id', $id)->first();
        if(empty($childDetail)){
            return redirect()->route('homepage');
        }
        return Inertia::render('DiscAssessments/DiscAssessmentQuestions', [
            "childId" => $id,
            "childDetail" => $childDetail,
        ]);

        // return Inertia::render("DiscAssessments/DiscAssessmentQuestions");
    }


    /**
     * Show the form for taking second term disc assessment.
     */
    public function showSecondTermAssessmentForm($id)
    {
        $childDetail = Child::where('id', $id)->first();
        if(empty($childDetail)){
            return redirect()->route('homepage');
        }
        $assessmentApiUrl = config('app.assessment_api_url');
        return Inertia::render('DiscAssessments/SecondTermDiscAssessmentQuestions', [
            "childId" => $id,
            "childDetail" => $childDetail,
            'assessmentApiUrl' => $assessmentApiUrl,
        ]);
    }







    public function mine()
    {
//        return Inertia::render("Assessments/AssessmentsSingle");
        return to_route("assessments.single",[
            "type"=>"introduction",
            "user_id" => Auth::id(),
        ]);
    }

    public function pay()
    {

        return view('Payment', [
            'intent' => Auth::user()->createSetupIntent(),
        ]);

    }

    public function single(string $type)
    {

        try {

            $assessment = Auth::user()->assessments()->latest()->first();
            return match ($type) {
                "introduction" => Inertia::render("Assessments/AssessmentIntroduction"),
                "overview"=> Inertia::render("Assessments/AssessmentOverview"),
                "what" => Inertia::render("Assessments/AssessmentWhat"),
                "intro" => Inertia::render("Assessments/AssessmentIntro" ,[
                    "assessment"=>$assessment->self["intro"],
                    "type"=>$assessment->type
                ]),
                "desc" => Inertia::render("Assessments/AssessmentDescriptive" ,[
                    "assessment"=>$assessment->self["descriptive"],
                ]),

                "team" => Inertia::render("Assessments/AssessmentTeam" ,[
                    "assessment"=>$assessment->team["me"]
                ]),
                "working" => Inertia::render("Assessments/AssessmentWorking" ,[
                    "assessment"=>$assessment->team["me"]["working"],
                    "type"=>$assessment->type
                ]),
                "strength" => Inertia::render("Assessments/AssessmentStrength" ,[
                    "assessment"=>$assessment->self["strength"]
                ]),
                "excel" => Inertia::render("Assessments/AssessmentExcel" ,[
                    "assessment"=>$assessment->growth["excel"]
                ]),
                "motivation-style" => Inertia::render("Assessments/AssessmentMotivationStyle" ,[
                    "assessment"=>$assessment->communication["motivation_style"],
                    "type"=>$assessment->type
                ]),
                "com-style" => Inertia::render("Assessments/AssessmentCommunicationStyle" ,[
                    "assessment"=>$assessment->communication["style"],
                    "type"=>$assessment->type,
                ]),
                "priorities" => Inertia::render("Assessments/AssessmentPriorities" ,[
                    "assessment"=>$assessment->communication["priorities"],
                    "type"=>$assessment->type

                ]),
                "growth" => Inertia::render("Assessments/AssessmentGrowth" ,[
                    "assessment"=>$assessment->growth["insights"],
                    "type"=>$assessment->type
                ]),
                "long-growth" => Inertia::render("Assessments/AssessmentLongGrowth" ,[
                    "assessment"=>$assessment->growth["long_growth"],
                    "type"=>$assessment->type

                ]),
                "com-tips" => Inertia::render("Assessments/AssessmentComTips" ,[
                    "assessment"=>$assessment->communication["tips"],
                    "type"=>$assessment->type
                ]),

                "perception" => Inertia::render("Assessments/AssessmentPerception"),
                "relationship-insights" => Inertia::render("Assessments/AssessmentRelationship",[
                    "assessment"=>$assessment->team["other"]
                ]),
                "relating-manager" => Inertia::render("Assessments/AssessmentRelateManager",[
                    "assessment"=>$assessment->leadership["manager"]
                ]),
                "leadership" => Inertia::render("Assessments/AssessmentLeadershipInsight",[
                    "assessment"=>$assessment->leadership["relation"]

                ]),
                "communication-with-different-styles" => Inertia::render("Assessments/AssessmentCommunicationWithDifferentStyle",[
                    "assessment"=>$assessment->communication["tips"]
                ]),
                "keys-to-manage-you" => Inertia::render("Assessments/AssessmentKeysManage",[
                    "assessment"=>$assessment->team["me"]["manage"]
                ]),
                "keys-to-motivate" => Inertia::render("Assessments/AssessmentKeysMotivate",[
                    "assessment"=>$assessment->team["me"]["motivation"]
                ]),
                "misunderstanding" => Inertia::render("Assessments/AssessmentMisunderstanding" ,[
                    "assessment"=>$assessment->team["misunderstand"]
                ]),

                "pressure" => Inertia::render("Assessments/AssessmentPressure",[
                    "assessment"=>$assessment->self["pressure"]
                ]),
                "ideal-environment" => Inertia::render("Assessments/AssessmentIdealEnvironment",[
                    "assessment"=>$assessment->self["ideal_work"]
                ]),
                "talent" => Inertia::render("Assessments/AssessmentIndividualTalent",[
                    "assessment"=>$assessment->self["talent"]
                ]),


                "disc" => Inertia::render("Assessments/AssessmentDisc"),


                "continuum" => Inertia::render("Assessments/AssessmentTraitContinuum" ,[
                    "assessment"=>$assessment->self["trait"],
                    "type"=>$assessment->type

                ]),





                "emphasize" => Inertia::render("Assessments/AssessmentEmphasize"),
                "sales" => Inertia::render("Assessments/AssessmentSales"),
                "reading" => Inertia::render("Assessments/AssessmentReading"),




                "other" => Inertia::render("Assessments/AssessmentOther" ,[
                    "assessment"=>$assessment->team["other"],
                    "type"=>$assessment->type

                ]),

                "graph" => Inertia::render("Assessments/AssessmentGraph" ,[
                    "type"=>$assessment->type,
                    "graph"=>json_decode(DB::table("disc_result")->where("user" , Auth::user()->email)->first()->category_result),
                ]),
                "tips" => Inertia::render("Assessments/AssessmentTipsRemember"),


            };

        }catch (\Error $exception){
            abort(404);
        }


    }


    public function data(Request $request)
    {
        $validated=$request->validate([
            "email"=>["string" , "email" , "required"],
            "blend"=>["string" , "required"],
            "reportlink"=>["url"]
        ]);

        User::whereEmail($validated["email"])->first()->assessments()->create([
            "type" => $validated["blend"],
            "report_url"=>$validated["reportlink"],
        ]);
    }
}
