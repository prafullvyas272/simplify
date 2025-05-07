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

class LearningAssessmentController extends Controller
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
        return Inertia::render('LearningAssessments/LearningAssessmentQuestions', [
            "childId" => $id,
            "childDetail" => $childDetail,
        ]);
        // return Inertia::render("LearningAssessments/LearningAssessmentQuestions");
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
        return to_route("assessments.single",[
            "type"=>"introduction",

        ]);
    }

    public function pay()
    {

        return view('Payment', [
            'intent' => Auth::user()->createSetupIntent(),
        ]);

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
