<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\AssessmentHelper;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\Country;
use App\Models\Industry;
use App\Models\Language;
use App\Models\Pakage;
use App\Models\Schools;
use App\Models\User;
use App\Models\UserAccess;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request,$id)
    {
        // dd($request->type);
        if (Auth::user() !== null ) {
            return redirect('profile-report');
        }

        $countries=Country::all(["code" , "name" ,"id"]);
        $schools=Schools::all(["name" ,"id"]);

        $pakage = Pakage::where('id',$id)->first();
        //echo $pakage->using_type;exit;
        // echo "<pre>";
        // print_r($pakage->using_type);
        // echo "</pre>";exit;

        return Inertia::render('Auth/Register',[
            "countries"=>$countries,
            "schools"=>$schools,
            "payment"=> $request->payment,
            "type" => $pakage->using_type,
            "pakage_id" => $pakage->id,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Delete the user if his email already exist in DB
        $user = User::whereEmail($request->input('email'))->first();

        if ($user) {
            $user->delete();
        }

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id'=>["integer" , "numeric" , "min:2" , "max:3"],
        ]);


        $pakageDetail = Pakage::where('id', $request->pakage_id)->first();
        if(empty($pakageDetail)){
            return redirect()->route('homepage');
        }

        $user = User::create([
            "name" => $request->name,
            'parent_last_name' => $request->parent_last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'school_id' => $request->school_id,
            'grade' => $request->grade,
            'other_school_name' => $request->other_school,
            'role_id' => $request->role_id,
            'image'=>'/users-avatar/placeholder.png',
            'gender'=>$request->gender,
            //'birthday'=>$request->dob,
            'country_id'=>$request->country_id,
            'data'=>[
                "current_status"=>$request->current_status
            ]
        ]);


        $child = Child::create([
            "user_id" => $user->id,
            'child_name' => $request->first_name .' '.$request->last_name,
            'school_id' => $request->school_id,
            'grade' => $request->grade,
            'other_school_name' => $request->other_school,
            'birth_date'=>$request->dob,
            'gender'=>$request->gender,
            'child_type'=>$request->child_type,
        ]);
        //Enter blank data for User Access data
        $accessDetail = [
            "user_id" => $user->id,
            "my_report" => '0',
            "ask_ai" => '0',
            "simplify" => '0',
        ];

        UserAccess::create($accessDetail);

        event(new Registered($user));

        // Auth::login($user);

        return Inertia::location(route('assessments.pay', ['id' => $child->id, 'user_id' => $user->id, 'pakage_id' => $request->pakage_id]));


    }


    public function dashboard()
    {

       return redirect()->route("profile.report");

        if (Auth::user()->role_id != 1) {
            Auth::user()->load([
                "assessment:id,type,assessments.user_id",
                "country:id,name",
            ]);

            if (Auth::user()->role_id==2){
                Auth::user()->load(["languages"])
                    ->loadCount("students");

                return Inertia::render("Coaches/CoachesSingle",[
                    "coach"=>Auth::user()->setHidden(["email" , "created_at" ,"updated_at"]),
                ]);
            }

            $best_coaches=DB::table("users")
                    ->where("role_id" , 2)
                    ->join("assessments" , "assessments.user_id" , "=" , "users.id")
                    ->where("assessments.type" , "="   , '"' . Auth::user()->assessment->type . '"')
                    ->limit(4)
                    ->select([
                        "users.id as coach_id",
                        "users.image as coach_image",
                    ])->get();

            return Inertia::render("Users/UsersSingle" , [
                'user'=> Auth::user(),
                "best_coaches"=>$best_coaches,
            ]);
        }

        if (Auth::user()->is_admin()) {
            return Inertia::render("Profile/AdminDashboard" , [
                "total_users"=>UserHelper::get_total_users_role(),
                'total_assessments'=>AssessmentHelper::get_total_assessments(),
                'total_users_gender'=>UserHelper::get_total_users_gender(),
                'active_coaches'=>User::where("active_status" ,1)->get(),
                'total_hours'=>UserHelper::get_total_hours_coached(),
            ]);
        }

    }

    public function index()
    {
        //todo check for admin
        $coaches=User::where("role_id" , "2")->get();

        return Inertia::render('Coaches/CoachesIndex' ,$coaches );
    }

    public function coaches()
    {
        return Inertia::render('Users/UsersCoaches');
    }
    public function all_coaches()
    {
        $coaches=User::where("role_id" , "2")
            ->whereHas("assessments")

            ->paginate(8)
            ->withQueryString();

        return Inertia::render('Coaches/CoachesIndex' ,[
            "coaches"=>$coaches->items(),
            "current_page"=>$coaches->currentPage(),
            "last_page"=>$coaches->lastPage(),
        ] );

    }

    public function show_coach(User $user)
    {



        if ($user->role_id!=2)
            return to_route("dashboard");

        $user->load(["languages:id,code","country:id,name" , "assessment:id,type,assessments.user_id"]);
        $user->loadCount("students");

        return Inertia::render("Coaches/CoachesSingle",[
            "coach"=>$user->setHidden(["email" , "created_at" ,"updated_at"]),
        ]);
    }

    public function reports()
    {
        return Inertia::render("Users/UsersReport");
    }

    public function student(User $student)
    {
        if ($student->role_id==3)
            return Inertia::render("Users/UsersSingle" , [
                'user'=>$student
                    ->load(["country"])
            ]);

        return to_route("dashboard");
    }


    public function create_information()
    {
        return Inertia::render('Profile/Information',[
            "user"=>Auth::user(),
            "industries"=>Industry::get(["id", "name"]),
            "countries"=>Country::get(["id", "name"]),
            "languages"=>Language::get(["id", "name"])
        ]);
    }

    /**
     * Method to show initial register page for assessments + simplify
     */
    public function showRegisterPage()
    {
        $kidsUrl = config('app.url') . 'register/4';
        $teensUrl = config('app.url') . 'register/5';

        return Inertia::render('Auth/InitialRegisterPage',[
            'kidsUrl' => $kidsUrl,
            'teensUrl' => $teensUrl,
        ]);
    }


     /**
     * Method to show initial register page for assessments only
     */
    public function showRegisterAssessmentPage()
    {
        $kidsUrl = config('app.url') . 'register/1';
        $teensUrl = config('app.url') . 'register/2';

        return Inertia::render('Auth/InitialRegisterPage',[
            'kidsUrl' => $kidsUrl,
            'teensUrl' => $teensUrl,
        ]);
    }
}
