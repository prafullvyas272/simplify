<?php

namespace App\Http\Controllers;

use App\Enums\UserCurrentStatusEnum;
use App\Helpers\CountriesHelper;
use App\Helpers\LanguageHelper;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Child;
use App\Models\Country;
use App\Models\Goal;
use App\Models\Industry;
use App\Models\Pakage;
use App\Models\Payment;
use App\Models\Schools;
use App\Models\SimplifyChildDetail;
use App\Models\simplifyParentDetail;
use App\Models\Timezones;
use App\Models\User;
use App\Models\UserAccess;
use App\Models\UserReport;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function information(): Response
    {
        $countries=CountriesHelper::get_countries();
        $languages=LanguageHelper::get_languages();
        $industries=Industry::all();

        return Inertia::render('SimplifyForm', [
            "user"=>Auth::user()->makeVisible(["data" , "country_id","birthday" ])->load([
                "languages:id",
                "industries:id",
            ]),
            "countries"=>$countries,
            "languages"=>$languages,
            "industries"=>$industries,
        ]);
    }

    public function store_information(Request $request)
    {
        if(Auth::user()->role_id == 2){
            $request->validate([

                //first section
                "image"=>[ "image" , "file" , "nullable" ],
                "birthday"=>[ "date" , "nullable" ],
                "country_id"=>["integer" , "numeric" , "exists:countries,id"],
                "languages"=>["array" , "nullable"],
                "languages.*"=>["integer" , "numeric" , "exists:languages,id"],

                //second section
                "qualification"=>["string" , "nullable" ],
                // "graduating_date"=>["string" , "nullable"],
                // "subject"=>["string" , "nullable" ],
                //"professional_certificate"=>["file" , "nullable" ],


                //third part
                "current_exp"=>["string" , "nullable"],
                "work_experiences"=>["array" , "nullable"],
                "work_experiences.*.form"=>[ "date" , "nullable"],
                "work_experiences.*.to"=>[  "date", "nullable"],
                "work_experiences.*.title"=>["string" , "nullable"],
                "work_experiences.*.description"=>["string" , "nullable"],
                "work_experiences.*.company_name"=>["string" , "nullable"],
                "work_experiences.*.country_id"=>["integer" , "numeric" , "exists:countries,id" , "nullable"],

                //fourth part
                "what_to_do"=>["array" , "nullable"]


            ]);
        }else{
            $request->validate([

                //first section
                "image"=>[ "image" , "file" , "nullable" ],
                "birthday"=>[ "date" , "nullable" ],
                "country_id"=>["integer" , "numeric" , "exists:countries,id"],
                "languages"=>["array" , "nullable"],
                "languages.*"=>["integer" , "numeric" , "exists:languages,id"],

                //second section
                // "qualification"=>["string" , "nullable" ],
                // "graduating_date"=>["string" , "nullable"],
                // "subject"=>["string" , "nullable" ],
                // "professional_certificate"=>["file" , "nullable" ],

                "qualifications"=>["array" , "nullable"],
                "qualifications.*.qualification"=>["string" , "nullable"],
                "qualifications.*.graduating_date"=>["string" , "nullable"],
                "qualifications.*.subject"=>["string" , "nullable"],
                "qualifications.*.professional_certificate"=>["file" , "nullable"],
                "qualifications.*.other_qualification"=>["string" , "nullable"],

                //third part
                "current_exp"=>["string" , "nullable"],
                "work_experiences"=>["array" , "nullable"],
                "work_experiences.*.form"=>[ "date" , "nullable"],
                "work_experiences.*.to"=>[  "date", "nullable"],
                "work_experiences.*.title"=>["string" , "nullable"],
                "work_experiences.*.description"=>["string" , "nullable"],
                "work_experiences.*.company_name"=>["string" , "nullable"],
                "work_experiences.*.country_id"=>["integer" , "numeric" , "exists:countries,id" , "nullable"],

                //fourth part
                "what_to_do"=>["array" , "nullable"]


            ]);
        }


        $total_qualification=[];
        if(!empty($request->qualifications)){
            foreach ($request->qualifications as $qualification){
                if ($qualification["qualification"]){
                    $total_qualification[]=$qualification;
                }
            }
        }

        $total_experience=[];
        if(!empty($request->work_experiences)){
            foreach ($request->work_experiences as $experience){
                if ($experience["company_name"]){
                    $total_experience[]=$experience;
                }
            }
        }

        $final_image=null;

        if ($request->image)
            $final_image=Storage::disk("public")->put("users-avatar" , $request->image);
        elseif  (Auth::user()->image)
            $final_image=Auth::user()->image;
        else
            $final_image="users-avatar/placeholder.png";



        try {
            Auth::user()->update(([
                //first part
                "image"=>$final_image,
                "birthday" => $request->birthday,
                "data->country_id" => $request->country_id,

                //second part
                "data->qualifications" => $total_qualification,
                "data->other_qualification" =>  ($request->otherQualification) ? $request->otherQualification : "",
                "data->graduating_date" => $request->graduating_date,
                "data->subject" => $request->subject,
                "data->professional_certificate"=>($request->professional_certificate) ?  Storage::disk("public")->put("certificates" , $request->professional_certificate) : null,

                //third part
                "data->current_exp"=>$request->current_exp,
                "data->work_experiences" => $total_experience,

                //fourth part
                "data->what_to_do"=>$request->what_to_do,
                "data->about"=>$request->about,
                "data->personal_goals"=>$request->personal_goals,
                "data->rate"=>$request->rate,
                "data->profile_completed"=>1
            ]));

            Auth::user()->industries()->sync($request->interested_in_industries);
            Auth::user()->languages()->sync($request->input("languages"));




//            return to_route("profile.me");
            //return back()->with("success" , "Profile Updated Successfully");
            return Redirect::route('assessments.mine')->with("success" , "Profile Updated Successfully");

        }catch (\Exception $e){
            Context::add("input" , $request->all());
            Log::error($e);
            return back()->with("error" , "Couldn't Save The information, please make sure all fields are filled");

        }
    }


    public function me()
    {

        return Inertia::render("Profile/ProfileMe",[
            "user"=>Auth::user()->makeVisible(["birthday","data","gender"])->load([
                "languages:id,name",
                "assessment:id,type,assessments.user_id",
                "country:id,name",
                "industries:id,name",
            ]),
            "goals"=>Goal::where("user_id",Auth::user()->id)->limit(3)->orderBy("created_at","DESC")->get(),
        ]);
    }

    public function welcome($id): Response
    {
        $childDetail = Child::where('id', $id)->first();
        $countries=CountriesHelper::get_countries();
        $languages=LanguageHelper::get_languages();
        $industries=Industry::all();

        return Inertia::render('Welcome', [
            "user"=>Auth::user()->makeVisible(["data" , "country_id","birthday" ])->load([
                "languages:id",
                "industries:id",
            ]),
            "countries"=>$countries,
            "languages"=>$languages,
            "industries"=>$industries,
            "childDetail" => $childDetail,
        ]);
    }

    public function discAssessment($id): Response|RedirectResponse
    {
        //echo "test";exit;
        $childDetail = Child::where('id', $id)->where('payment_status','paid')->first();
        if(empty($childDetail)){
            return redirect()->route('homepage');
        }
        $countries=CountriesHelper::get_countries();
        $languages=LanguageHelper::get_languages();
        $industries=Industry::all();

        return Inertia::render('DiscAssessmentComplete', [
            "user"=>Auth::user()->makeVisible(["data" , "country_id","birthday" ])->load([
                "languages:id",
                "industries:id",
            ]),
            "countries"=>$countries,
            "languages"=>$languages,
            "industries"=>$industries,
            "childId" => $id,
            "childDetail" => $childDetail,
        ]);
    }

    public function downloadReport(): Response
    {
        $countries=CountriesHelper::get_countries();
        $languages=LanguageHelper::get_languages();
        $industries=Industry::all();
        $disc_report_url = UserReport::where('user_id',Auth::user()->id)->where('type',1)->latest()->first();
        $learn_report_url = UserReport::where('user_id',Auth::user()->id)->where('type',2)->latest()->first();

        $disc_payment_status = Payment::where('user_id',Auth::user()->id)->where('type',"d")->where('status',"s")->first();
        $learn_payment_status = Payment::where('user_id',Auth::user()->id)->where('type',"l")->where('status',"s")->first();
        return Inertia::render('DownloadReport', [
            "user"=>Auth::user()->makeVisible(["data" , "country_id","birthday" ])->load([
                "languages:id",
                "industries:id",
            ]),
            "countries"=>$countries,
            "languages"=>$languages,
            "industries"=>$industries,
            "disc_report_url"=> isset($disc_report_url->report_link) ? $disc_report_url->report_link:"",
            "learn_report_url"=> isset($learn_report_url->report_link) ? $learn_report_url->report_link :"",
            "learn_payment_status" => !empty($learn_payment_status) ? 1 :0 ,
            "disc_payment_status" => !empty($disc_payment_status) ? 1:0,
        ]);
    }

    public function activateUser(){

        $countries=Country::all(["code" , "name" ,"id", "country_code"]);
        $parentDetail = simplifyParentDetail::where('user_id',Auth::user()->id)->first();
        $timezones=Timezones::all(["name" , "identifier","offset","id"]);
        $countryCodes = Country::where('country_code', '!=' , null)->orderBy('name')->get(['name', 'id', 'country_code']);

        // echo "<pre>";
        // print_r(Auth::user());
        // echo "</pre>";exit;


        return Inertia::render('Simplify/FillProfileSimplify', [
            "user"=>Auth::user(),
            "countries"=>$countries,
            "parentDetail" =>$parentDetail,
            "timezones" => $timezones,
            'countryCodes' => $countryCodes,
        ]);
    }

    public function FamilyPersonalization(){
        $parentDetail = simplifyParentDetail::where('user_id',Auth::user()->id)->first();

        $childDetail = SimplifyChildDetail::where('simplify_parent_id', $parentDetail->id)->latest()->first();
        $child = Child::where('user_id', Auth::user()->id)->first();

        $schools=Schools::all(["name" ,"id"]);
        return Inertia::render('Simplify/FamilyPersonalization', [
            "user"=>Auth::user(),
            "child"=>$child,
            "childDetail" => $childDetail,
            "schools" => $schools,
        ]);
    }


    public function addFamilyPersonalization($newChild = 0){
        if($newChild == 0){
            $user = Auth::user();
        }else{
            $user = "";
        }
        $schools=Schools::all(["name" ,"id"]);
        $user = Auth::user();
        $child = SimplifyChildDetail::whereUserId($user['id'])->first();
        $relationshipType = null;
        if ($child) {
            $relationshipType = $child['relationship_to_child'];
        }
        return Inertia::render('Simplify/FamilyPersonalization', [
            "user"=>$user,
            "schools" => $schools,
            'relationshipType' => $relationshipType
        ]);
    }

    public function FamilyPersonalizationPartTwo(){
        $parentDetail = simplifyParentDetail::where('user_id',Auth::user()->id)->first();
        $childDetail = SimplifyChildDetail::where('simplify_parent_id', $parentDetail->id)->get();


        return Inertia::render('Simplify/FamilyPersonalizationPartTwo', [
            "user"=>Auth::user(),
            "parentDetail" => $parentDetail,
            "childDetail" => $childDetail,
        ]);
    }


    public function MyReportWelcome(){
        $childDetail = Child::where('user_id',Auth::user()->id)->get();
    //    dd(Auth::user()->id);
        $pakage = Payment::whereUserId(Auth::user()->id)->first();
        return Inertia::render('ProfileV2/WelcomeReport', [
            "user"=>Auth::user(),
            "childDetail"=>$childDetail,
            "pakageId" => $pakage['pakage_id'],
        ]);
    }

    public function getChildrens(){
        $childrens = Child::whereHas('userReport')->where('user_id',Auth::user()->id)->where('payment_status', 'paid')->where('child_type', '!=', null)->get()->toArray();
        return response()->json(['childrens'=>$childrens], 200);

    }

    public function MyAdultReportWelcome(){
        $user = User::where('id',Auth::user()->id)->first();

        return Inertia::render('ProfileV2/WelcomeAdultReport', [
            "userDetail"=> $user
        ]);
    }

    public function MyAdultReportEdit(){
        $user = User::where('id',Auth::user()->id)->first();
        $countries=Country::all(["code" , "name" ,"id"]);
        $timezones=Timezones::all(["name" , "identifier","offset","id"]);
        return Inertia::render('ProfileV2/ParentProfileEdit', [
            "user"=> $user,
            "countries"=>$countries,
            "timezones" => $timezones,
        ]);
    }

    public function addAnotherChild(){
        $schools=Schools::all(["name" ,"id"]);

        $child = SimplifyChildDetail::whereUserId(Auth::id())->first();
        $relationshipType = null;
        if ($child) {
            $relationshipType = $child['relationship_to_child'];
        }
        return Inertia::render('ProfileV2/AddAnotherChild', [
            "user"=>Auth::user(),
            "schools" => $schools,
            'relationshipType' => $relationshipType,
        ]);
    }

    public function editChild($id){
        $childDetail = Child::where('id', $id)->first();
        // $learningStyle = UserReport::whereChildId($id)->first()['learn_style'];

        $schools=Schools::all(["name" ,"id"]);
        return Inertia::render('ProfileV2/EditChild', [
            "user"=>Auth::user(),
            "childDetail" => $childDetail,
            "schools" => $schools,
        ]);
    }

    public function showChild($id){
        $childDetail = Child::where('id', $id)->first();
        //dd($childDetail);
        $pricings = Pakage::where('using_type',$childDetail->child_type)->where('type',"one_time")->first();
        //dd($childDetail);
        $schools=Schools::all(["name" ,"id"]);
        $children_school = "";
        if($childDetail->school_id){
            $child_school_details = Schools::select('name')->where('id',$childDetail->school_id)->first();
            $children_school = $child_school_details->name;
        }
        return Inertia::render('ProfileV2/ShowChildInformation', [
            "user"=>Auth::user(),
            "childDetail" => $childDetail,
            "schools" => $schools,
            "childrenSchool" => $children_school,
            "id" => $id,
            "pricings" => $pricings
        ]);
    }



    public function updateParentProfile(Request $request, $id)
    {
        $userDetail = User::findOrFail($id);

        $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'country_id' => 'required|integer',
            'timezone_id' => 'required|integer',
            'phone_number' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
        ]);

        $data = [
            'name' => $request->first_name,
            'email' => $request->email,
            'country_id' => $request->country_id,
            'timezone_id' => $request->timezone_id,
            'phone_number' => $request->phone_number,
            'birthday' => $request->date_of_birth,
        ];

        $userDetail->update($data);

        return response()->json([
            'message' => 'User detail updated successfully!',
            'data' => $userDetail,
            'redirect_url' => route('profile.adult.report'),
        ]);
    }

    public function storeChildDetail(Request $request)
    {
        $request->validate([
            'child_name' => 'required|string|max:255',
            'date_of_birth'=> 'required',
            'relationship_to_child' => 'required',
            'gender' => 'required',
            'child_type' => 'required',
            'style_type' => 'nullable',

        ]);

      //  dd($request->all());

        $pricings = Pakage::where('using_type',$request->child_type)->where('type',"one_time")->first();
        // dd($pricings);
        $user = Child::create([
            'user_id' => Auth::user()->id,
            'child_name' => $request->child_name,
            'relationship_to_child' => $request->relationship_to_child,
            'child_type' => $request->child_type,
            'birth_date' => $request->date_of_birth,
            'school_id'=>$request->school_id,
            'other_school' => $request->other_school,
            'grade' => $request->grade,
            'gender' => $request->gender,
            'key_interests' => $request->key_interests,
            'learning_goals' => $request->learning_goals,
            'style_type' => $request->style_type,

        ]);

        $parentDetail = simplifyParentDetail::where('user_id',Auth::user()->id)->first();

        // add data to simplify child details table too
        SimplifyChildDetail::create([
            'user_id' => Auth::user()->id,
            'simplify_parent_id' => $parentDetail->id,
            'child_first_name' => $request->child_name,
            // 'child_last_name' => $request->child_last_name,
            'relationship_to_child' => $request->relationship_to_child,
            'date_of_birth' => $request->date_of_birth,
            // 'school_name'=>$request->school_name,
            'other_school' => $request->other_school,
            'grade' => $request->grade,
            'gender' => $request->gender,
            'key_interests' => $request->key_interests,
            'learning_goals' => $request->learning_goals,
        ]);

        // $relationship = $request->relationship_to_child;
        // // default gender male
        // $gender = 'male';
        // if ($relationship == 'mother') {
        //     $gender = 'female';
        // }
        // if ($relationship) {
        //     Auth::user()->update([
        //         'gender' => $gender
        //     ]);
        // }

        return response()->json([
            'message' => 'Child details saved successfully!',
            // 'redirect_url' => route('profile.report'),
            'redirect_url' => route('assessments.pay', ['id' => $user->id, 'user_id' => $user->user_id,'pakage_id' => $pricings->id]),
        ], 201);

    }

    public function updateChildDetail(Request $request, $id)
    {
        $childDetail = Child::findOrFail($id);
        $request->validate([
            'child_name' => 'required|string|max:255',
            'relationship_to_child' => 'required',
            'date_of_birth'=> 'required',
            'gender' => 'required',
            'child_type' => 'required',
            'style_type' => 'nullable|string'

        ]);

        $data = [
            'child_name' => $request->child_name,
            'relationship_to_child' => $request->relationship_to_child,
            'child_type' => $request->child_type,
            'birth_date' => $request->date_of_birth,
            'school_id'=>$request->school_id,
            'other_school_name' => $request->other_school,
            'grade' => $request->grade,
            'gender' => $request->gender,
            'key_interests' => $request->key_interests,
            'learning_goals' => $request->learning_goals,
            'style_type' => $request->style_type,
        ];

        $childDetail->update($data);

        return response()->json([
            'message' => 'Child details saved successfully!',
            'redirect_url' => route('profile.report'),
        ], 201);

    }

    public function checkUsersAccess()
    {
        $accessData = UserAccess::where('user_id',Auth::user()->id)->first();
        $childType = Child::whereUserId(Auth::user()->id)->first();
        $pakage = Payment::whereUserId(Auth::user()->id)->first();
        $subscriptions = Auth::user()->subscriptions;
        $hasActiveSubscription = !empty($subscriptions->toArray()) ? Auth::user()->subscriptions[0]->trial_ends_at->gt(\Carbon\Carbon::now()) : true;  //Assign true if subscriptions table is empty for that user (i.e. user has opted for pakage 1 or 2)

        return response()->json(['message' => 'Get user access data successfully.','status'=>'Success','accessData'=>$accessData, 'childType' => $childType, 'pakage' => $pakage, 'hasActiveSubscription' => $hasActiveSubscription], 201);
    }



}
