<?php

use App\Enums\PaymentsStatusEnum;
use App\Enums\PaymentTypeEnum;
use App\Http\Controllers\AskAiController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CoachUserController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\BrevoAPIController;
use App\Http\Controllers\DiscAssessmentController;
use App\Http\Controllers\LearningAssessmentController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SimplifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Cashier;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SecondTermAssessmentController;

require __DIR__.'/auth.php';



Route::get('/preview-reports/{baseCode}', [PDFController::class, 'newVersionToGeneratePDF']);


/*
 * public access routes
 */

//Route::get("/" , [RegisteredUserController::class , "create"])->name("homepage");
Route::get("/" , function(){
    return redirect('register/5');
    // return view('Homepage');
})->name("homepage");

Route::get("/kids" , function(){
    return view('kids');
})->name("kids");

Route::get("/teen" , function(){
    return view('teen');
})->name("teen");

// Route::get("/pricing" , function(){
//     return view('pricing');
// })->name("pricing");

Route::get('/pricing', [PricingController::class, 'index'])->name("pricing");



Route::get('/simplify-setup',function(){
    return view('simplify-landing');
});

Route::view("/about-us" , "AboutUs")->name("about-us");
Route::view("/why-choose-us" , "WhyChooseUs")->name("why-choose-us");
// Route::view("/pricing" , "Pricing")->name("pricing");
//Route::view("assessment" , "AssessmentPublic")->name("assessment.public");
Route::view("/contact-us" , "ContactUs")->name("contact-us");
Route::post('/subscribe-us', [BrevoAPIController::class, 'subscribeForm']);
Route::post('/contact-us-form', [BrevoAPIController::class, 'contactUsForm']);
Route::get("/complate-coach-user" , [CoachUserController::class , "complateCoachUser"])->name("complateCoachUser");
Route::view("/privacy" , "privacy")->name("privacy");
Route::view("/terms" , "terms")->name("terms");
Route::view("/cookies" , "cookies")->name("cookies");
Route::view("/learning-style" , "learningStyle")->name("learningStyle");
Route::get("/register/{id}" , [RegisteredUserController::class , "create"])->name("users.register");

Route::get("/assessments/pay/{id}/{user_id}/{pakage_id}" , [PaymentController::class , "create"])->name("assessments.pay");
Route::get("/assessments/success" , [PaymentController::class , "paymentSuccess"])->name("assessments.success");
Route::get("/sendlink/{id}" , [PaymentController::class , "sendAssesmentLink"]);

Route::middleware(["auth"])->group(function (){
    Route::get("/Simplify/pay/{pakage_type}" , [PaymentController::class , "SimplifyPay"])->name("simplify.pay");
    Route::get('/thank-you-message/{id}',[PaymentController::class , "thankYou"])->name('thanks.you');
    Route::get("/assessments/create" , [AssessmentController::class , "create"])->name("assessments.create");
    Route::get("/disc-assessments/create/{id}" , [DiscAssessmentController::class , "create"])->name("disc.assessments.create");
    // Route::get("/disc-assessments/create" , [DiscAssessmentController::class , "create"])->name("disc.assessments.create");

    Route::get("/learning-assessments/create/{id}" , [LearningAssessmentController::class , "create"])->name("learning.assessments.create");

    Route::get("/information/create" , [RegisteredUserController::class , "create_information"])->name("users.create_information");
    Route::inertia("processing" , "AssessmentWait")->name("assessments.wait");

    // Second term routes
    Route::prefix('second-term')->group(function () {
        Route::get('/thank-you-message/{id}',[PaymentController::class , "showSecondTermThankyouPage"])->name('showSecondTermThankyouPage');
        Route::get("/note-for-parents/{id}" ,[PaymentController::class, 'showSecondTermNoteForParentsPage'])->name("showSecondTermNoteForParentsPage");
        Route::get("/ready-to-discover/{id}" , [PaymentController::class, 'showSecondTermReadyToDiscoverPage'])->name("showSecondTermReadyToDiscoverPage");
        Route::get("/disc-assessments/create/{id}" , [DiscAssessmentController::class , "showSecondTermAssessmentForm"])->name("disc.showSecondTermAssessmentForm");
        Route::get("/learning-assessments/create/{id}" , [LearningAssessmentController::class , "showSecondTermAssessmentForm"])->name("learning.showSecondTermAssessmentForm");
        Route::get('/completed-disc-assessment/{id}', [ProfileController::class, 'showSecondTermCompletedAssessmentPage'])->name('showCompletedAssessmentPage');
        Route::get('/disc/assessments/{id}', [PaymentController::class, 'showSecondTermDiscAssessmentBefore'])->name('showSecondTermDiscAssessmentBefore');


        Route::get("reports/assessments/{type}/{user}" , [SecondTermAssessmentController::class , "showKidsDiscStyleReport"])->name("secondTerm.showKidsDiscStyleReport");
        // Route::get("kids/learning-style/reports/assessments/{type}/{user}" , [AssessmentController::class , "kidsLearningStyle"])->name("assessments.kidsLearningStyle");
        // Route::get("teens/reports/assessments/{type}/{user}" , [AssessmentController::class , "teensDiscStyle"])->name("assessments.teensDiscStyle");
        // Route::get("teens/learning-style/reports/assessments/{type}/{user}" , [AssessmentController::class , "teensLearningStyle"])->name("assessments.teensLearningStyle");
    });


    //assessments
    // Route::get("/assessments/pay", function (){
    //     $payment= \App\Models\Payment::create([
    //         "status" => PaymentsStatusEnum::Pending,
    //         "type" =>PaymentTypeEnum::DiscAssessment,
    //         "user_id" => Auth::id(),
    //         "paid_to"=>0,
    //         "units" => 1,
    //         "unit_price" => 89,
    //         "total_amount"=> 89,
    //     ]);

    //     return \Illuminate\Support\Facades\Auth::user()
    //         ->checkout(env('STRIPE_PRICE_ID', 'price_1QMOs6FT6ls29pru3h40FtJI') ,
    //             [
    //                 'success_url' => route('assessments.success') .'?session_id={CHECKOUT_SESSION_ID}' ,
    //                 'cancel_url' => route('assessments.cancel') ,
    //                 'metadata' => ['order_id' => $payment->id],
    //             ]
    //         );
    // })->name("assessments.pay");

    // Route::get("/assessments/success", function (Request $request){


    //     $session = Cashier::stripe()->checkout->sessions->retrieve($request->get("session_id"));

    //     if ($session->payment_status != 'paid')
    //         return redirect(\route("assessments.pay"));

    //     $payment_id = $session['metadata']['order_id'] ?? null;

    //     $payment= \App\Models\Payment::findOrfail($payment_id);

    //     $payment->update([
    //         "status" => PaymentsStatusEnum::Successful
    //     ]);

    //     return \Illuminate\Support\Facades\Redirect::route("disc-assessments.before");

    // })->name("assessments.success");

    //Learning Assessments
    Route::get("/learning-assessments/pay", function (){

        $payment= \App\Models\Payment::create([
            "status" => PaymentsStatusEnum::Pending,
            "type" =>PaymentTypeEnum::LearningAssessment,
            "user_id" =>Auth::id(),
            "paid_to"=>0,
            "units" => 1,
            "unit_price" => 89,
            "total_amount"=> 89,
        ]);

        return \Illuminate\Support\Facades\Auth::user()
            ->checkout(env('STRIPE_PRICE_ID', 'price_1QD0hUFT6ls29prud3lGDl47') ,
                [
                    'success_url' => route('learning-assessments.success') .'?session_id={CHECKOUT_SESSION_ID}' ,
                    'cancel_url' => route('assessments.cancel'),
                    'metadata' => ['order_id' => $payment->id],
                ]
            );
    })->name("learning.assessments.pay");


    Route::get("/learning-assessments/success", function (Request $request){


        $session = Cashier::stripe()->checkout->sessions->retrieve($request->get("session_id"));

        if ($session->payment_status != 'paid')
            return redirect(\route("learning.assessments.pay"));

        $payment_id = $session['metadata']['order_id'] ?? null;

        $payment= \App\Models\Payment::findOrfail($payment_id);

        $payment->update([
            "status" => PaymentsStatusEnum::Successful
        ]);

        return \Illuminate\Support\Facades\Redirect::route("learning-assessments.before");

    })->name("learning-assessments.success");

    Route::get("/assessments/cancel", function (Request $request){
        return \Inertia\Inertia::render("AssessmentPay");
    })->name("assessments.cancel");
    Route::inertia("/assessments/before" , "AssessmentBefore")->name("assessments.before");
    //Route::inertia("/disc/assessments" , "DiscAssessmentBefore")->name("disc-assessments.before");

    Route::get('/disc/assessments/{id}', [PaymentController::class, 'discAssessmentBefore'])->name('disc-assessments.before');
    // Route::inertia("/disc/assessments" , "DiscAssessmentBefore")->name("disc-assessments.before");
    Route::inertia("/learning/assessments" , "learningAssessmentBefore")->name("learning-assessments.before");

    // Route::inertia("/note-for-parents" , "NoteForParents")->name("note-for-parents");
    Route::get("/note-for-parents/{id}" ,[PaymentController::class, 'noteForParents'])->name("note-for-parents");
    // Route::inertia("/ready-to-discover" , "ReadyToDiscover")->name("ready-to-discover");
    Route::get("/ready-to-discover/{id}" , [PaymentController::class, 'readyToDiscover'])->name("ready-to-discover");
    Route::get('/profile/information', [ProfileController::class, 'information'])->name('profile.information');

   // Route::post('/profile/information', [ProfileController::class, 'store_information'])->name('profile.store_information');
    // Route::post("/goals" ,[GoalController::class, "store"])->name("goals.store");

});
Route::post('/create-meeting', [ZoomController::class, 'createMeeting']);
//,  \App\Http\Middleware\CheckAssessmentAvailableMiddleware::class
Route::middleware(["auth" ])->group(function (){
    Route::get('/welcome/{id}', [ProfileController::class, 'welcome'])->name('profile.welcome');
    Route::get('/completed-disc-assessment/{id}', [ProfileController::class, 'discAssessment'])->name('disc.assessment.completed');
    Route::get('/cehck-user-access', [ProfileController::class, 'checkUsersAccess'])->name('profile.check-user-access');
    // Route::get('/download_report', [ProfileController::class, 'downloadReport'])->name('profile.download_report');
    // Route::get('/profile/information', [ProfileController::class, 'information'])->name('profile.information');
    Route::post('/user-reports', [UserReportController::class, 'store'])->name('user-report.store');
    Route::post('/store-user-que-ans', [UserReportController::class, 'storeReportData'])->name('store.user-que-ans');
    Route::post('/store-user-que-ans', [UserReportController::class, 'storeDiscReportData'])->name('store.user-que-ans');

    // Route to show the welcome page to invited user from lessonplanner
    Route::get('/welcome-user', [ProfileController::class, 'showWelcomeUserPage'])->name('profile.showWelcomeUserPage');

    // Route to show the completed assessment page to invited user from lessonplanner
    Route::get('/welcome-user-assessment-completed/{id}', [ProfileController::class, 'showCompletedAssessmentPageToInvitedUSer'])->name('profile.showCompletedAssessmentPageToInvitedUSer');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::middleware([\App\Http\Middleware\CheckUserSimplifyRecords::class])->group(function(){
        Route::inertia("/simplify" , "Simplify/Simplify")->name("simplify.index");
        Route::inertia("/how-it-works" , "Simplify/HowItWorks")->name("simplify.how-it-works");

        Route::get('/simplify-activate-user',[ProfileController::class,'activateUser'])->name('simplify.activate.user');
        Route::get('/simplify-family-personalization',[ProfileController::class,'FamilyPersonalization'])->name('simplify.activate.FamilyPersonalization');
        Route::get('/simplify-add-family-personalization/{newChild}',[ProfileController::class,'addFamilyPersonalization'])->name('simplify.activate.AddFamilyPersonalization');


        Route::get('/simplify-family-personalization-part-two',[ProfileController::class,'FamilyPersonalizationPartTwo'])->name('simplify.activate.FamilyPersonalizationPartTwo');

        Route::post('/simplify-store_parent_detail', [SimplifyController::class, 'storeParentDetail'])->name('simplify.storeParentDetail');
        Route::put('/simplify-parent-details/{id}', [SimplifyController::class, 'update'])->name('simplify.updateParentDetail');

        Route::post('/simplify-store_child_detail', [SimplifyController::class, 'storeChildDetail'])->name('simplify.storeChildDetail');
        Route::put('/simplify-child-details/{id}', [SimplifyController::class, 'updateChildDetail'])->name('simplify.updateChildDetail');

        Route::post('/cancel-subscription',[SimplifyController::class,'cancelSubscription'])->name('simplify.cancel-subscription');
        Route::get('/simplify-subscription',[SimplifyController::class,'getSimplifySubscription'])->name('simplify.get-simplify-subscription');

        Route::get('/timezones',[SimplifyController::class,'getTimezones'])->name('simplify.get-timezones');



    });
    Route::get('/whats-next',[SimplifyController::class,'WhatsNext'])->name('simplify.whats-next');
    Route::inertia("/faq" , "Simplify/Faq")->name("simplify.faq");


    /**
     * My Reports routes
     */
    Route::get('/profile-report', [ProfileController::class, 'MyReportWelcome'])->name('profile.report');
    Route::get('/get-childrens', [ProfileController::class, 'getChildrens'])->name('profile.childrens');

    Route::get('/adult-report', [ProfileController::class, 'MyAdultReportWelcome'])->name('profile.adult.report');
    Route::get('/adult-report/edit',[ProfileController::class, 'MyAdultReportEdit'])->name('profile.adult.edit');
    Route::get('/add-another-child-step',[ProfileController::class, 'addAnotherChild'])->name('profile.child.addmore');
    Route::get('/edit-child/{id}',[ProfileController::class, 'editChild'])->name('profile.child.edit');
    Route::get('/show-child/{id}',[ProfileController::class, 'showChild'])->name('profile.child.show');

    Route::put('/profile-update/{id}',[ProfileController::class, 'updateParentProfile'])->name('profile.update');
    Route::put('/update-child-detail/{id}',[ProfileController::class, 'updateChildDetail'])->name('update.child.detail');

    Route::post('/store-child-detail', [ProfileController::class, 'storeChildDetail'])->name('store.child.detail');


    Route::inertia("/ask-ai" , "AskAI")->name("ask.ai");
    Route::post("/ai/history" , [\App\Http\Controllers\AskAiController::class , "history"])->name("ask_ai.history");
    Route::post("/ai/send_message" , [\App\Http\Controllers\AskAiController::class , "send_message"])->name("ask_ai.send_message");

    Route::get('add-simplify', [SimplifyController::class, 'showAddSimplifyPage'])->name('add.simplify');
    // Testing route
    // Route::get('/sendmail/{userid}/{childid}',[UserReportController::class, 'sendEmail'])->name('profile.child.edit');

});

//,
Route::middleware(["auth", \App\Http\Middleware\CheckAssessmentAvailableMiddleware::class , \App\Http\Middleware\CheckUserProfileCompletedMiddleware::class])->group(function () {

    Route::resource("/assessments" , AssessmentController::class)->except(["create"]);

    // Route::get("/coaches/all" , [RegisteredUserController::class , "all_coaches"])->name("users.all_coaches");
    Route::get("/dashboard" , [\App\Http\Controllers\Auth\RegisteredUserController::class , "dashboard"])->name("dashboard");
    // Route::get("/coaches/{user}", [RegisteredUserController::class , "show_coach"])->name("users.show_coach");
    // Route::get("proposals/{coach}" ,[ ProposalController::class, "create"])->name("proposals.create");
    // Route::post("proposals/{coach}" ,[ ProposalController::class, "store"])->name("proposals.store");
    // Route::get("proposals/{proposal}/show" , [ProposalController::class, "show"])->name("proposals.show");
    // Route::get("calendar" , [\App\Http\Controllers\CoachController::class, "calendar"])->name("calendar");
    // Route::get("session/success" , [CoachUserController::class , "success"])->name("sessions.success");
    // Route::get("session/cancel" , [CoachUserController::class , "cancel"])->name("sessions.cancel");
    // Route::get("session/{session}/pay" , [CoachUserController::class , "pay"])->name("sessions.pay");
    // Route::get("coaches/{coach}/calendar" , [CoachUserController::class, "calendar"])->name("coaches.calendar");
    // Route::get("session/{session}/accept" , [CoachUserController::class , "accept"])->name("sessions.accept");
    // Route::get("session/{session}/reject" , [CoachUserController::class , "reject"])->name("sessions.reject");
    // Route::get("proposals" , [ProposalController::class, "index"])->name("proposals.index");
    // Route::get("proposals/{proposal}/accept" , [ProposalController::class, "accept"])->name("proposals.accept");
    // Route::get("proposals/{proposal}/reject" , [ProposalController::class, "reject"])->name("proposals.reject");
    // Route::get("/coaches" , [RegisteredUserController::class , "coaches"])->name("users.coaches");
    // Route::inertia("/coaches/show" , "Coaches/CoachesSingle");
    Route::get("/reports/assessments/mine" , [AssessmentController::class , "mine"])->name("assessments.mine");
   // Route::inertia("/reports/ask_ai" , "AskAI")->name("assessments.ai");
    // Route::inertia("/reports/assessment" , "Assessment");
    // Route::get("students/{student}" , [RegisteredUserController::class , "student"])->name("students.show");
    Route::get("reports/assessments/{type}/{user}" , [AssessmentController::class , "single"])->name("assessments.single");
    Route::get("kids/learning-style/reports/assessments/{type}/{user}" , [AssessmentController::class , "kidsLearningStyle"])->name("assessments.kidsLearningStyle");
    Route::get("teens/reports/assessments/{type}/{user}" , [AssessmentController::class , "teensDiscStyle"])->name("assessments.teensDiscStyle");
    Route::get("teens/learning-style/reports/assessments/{type}/{user}" , [AssessmentController::class , "teensLearningStyle"])->name("assessments.teensLearningStyle");


    // Route::get("reports" , [RegisteredUserController::class , "reports"])->name("users.reports");
    // Route::get("reports/{section}" , [RegisteredUserController::class , "reports_section"])->name("users.reports-section");
    // Route::resource("sessions" , \App\Http\Controllers\CoachUserController::class);
    // Route::post("sessions/{coach}" , [CoachUserController::class , "store"])->name("sessions.store");
    // Route::get("/goals/index" , [GoalController::class , "index_json"])->name("goals.index_json");
    // Route::resource("goals" , GoalController::class)->only(["index" ,"create","show","edit"]);
    // Route::get("tasks/upcoming" ,[TaskController::class, "upcoming"] )->name("tasks.upcoming");
    // Route::get("tasks/in_progress" ,[TaskController::class, "in_progress"] )->name("tasks.in_progress");
    // Route::resource("tasks" , TaskController::class);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::post("/ai/send_message" , [\App\Http\Controllers\AskAiController::class , "send_message"])->name("ask_ai.send_message");
    // Route::post("/ai/history" , [\App\Http\Controllers\AskAiController::class , "history"])->name("ask_ai.history");
    // Route::post("/ai/career" , [ASKAiController::class , "career"])->name("ask_ai.career");
    // Route::get("notes/sessions" , [CoachUserController::class , "index_for_note"])->name("notes.sessions");
    // Route::resource("notes" , \App\Http\Controllers\NoteController::class);
    // Route::get("/me" , [ProfileController::class, 'me'])->name("profile.me");
    Route::get('add-calendly-token', [ProfileController::class, 'showAddCalendlyPage'])->name('profile.showAddCalendlyPage');
    Route::post('add-calendly-token', [ProfileController::class, 'updateCalendlyAccessToken'])->name('profile.updateCalendlyToken');
});


Route::get("/assessments/endpoints/data" , [AssessmentController::class , "data"])->name("assessments.data");

Route::get("/assessment" , [EventController::class , "index"])->name("assessment.public");
Route::get('/event/{id}', [EventController::class, 'show'])->name('events.show');


