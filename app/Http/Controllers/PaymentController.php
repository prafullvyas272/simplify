<?php

namespace App\Http\Controllers;

use App\Enums\PaymentsStatusEnum;
use App\Enums\PaymentTypeEnum;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Child;
use App\Models\Pakage;
use App\Models\Payment;
use App\Models\User;
use App\Models\user_access;
use App\Models\UserAccess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Cashier\Cashier;
use App\Models\Subscription;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\BrevoListId;
use App\Enums\BrevoEmailTemplate;

class PaymentController extends Controller
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
    public function create($childId, $userId, $pakageId)
    {
        $pakageDetail = Pakage::where('id', $pakageId)->first();
        //dd($pakageDetail);
        if (empty($pakageDetail)) {
            return redirect()->route('homepage');
        }
        $giveSimplify = ($pakageId == 3) ? 1 : 0;

        $payment = \App\Models\Payment::create([
            "status" => PaymentsStatusEnum::Pending,
            "type" => PaymentTypeEnum::Assessment,
            "child_id" => $childId,
            // "user_id" => Auth::id(),
            "user_id" => $userId,
            "pakage_id" => $pakageId,
            "paid_to" => 0,
            "units" => 1,
            "unit_price" => $pakageDetail->price,
            "total_amount" => $pakageDetail->price
        ]);

        $getUsers = User::where('id', $userId)->first();
        // dd($getUsers);
        User::where('id', $userId)->update(['simplify_status' => $giveSimplify]);  // update simplify status for user if they signup for simplify only

        // dd($getUsers, $giveSimplify);
        $getChild = Child::where('id', $childId)->first();

        $checkoutMode = ($pakageDetail->slug == "simplify-one-time" || $pakageDetail->slug == "kids-assessments" || $pakageDetail->slug == "teen-assessments") ? 'subscription' : 'payment';


        return $getUsers->checkout(
            $pakageDetail->strip_price_key,
            [
                'mode' =>  $checkoutMode,
                'success_url' => route('assessments.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('users.register', ['id' => $pakageId]),
                'metadata' => ['order_id' => $payment->id, 'childId' => $childId, 'pakageId' => $pakageId, 'simplify' => $giveSimplify],
                'allow_promotion_codes' => true
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }

    /**
     * Payment success the specified resource from storage.
     */
    public function paymentSuccess(Request $request)
    {

        $session = Cashier::stripe()->checkout->sessions->retrieve($request->get("session_id"));


        if ($session->payment_status != 'paid')
            return redirect()->route('assessments.pay', ['id' => $session['metadata']['childId']]);

        $payment_id = $session['metadata']['order_id'] ?? null;
        $pakage_id = $session['metadata']['pakageId'] ?? null;
        $pakageDetail = Pakage::where('id', $pakage_id)->first();
        //dd($pakageDetail);

        $payment = Payment::findOrfail($payment_id);

        $payment->update([
            "status" => PaymentsStatusEnum::Successful
        ]);


        $childPayment = Child::where('id', $session['metadata']['childId'])->first();

        if (!empty($childPayment)) {
            $childPayment->update([
                "payment_status" => 'paid'
            ]);
        }

        $userId = $payment->user_id;
        $payment = User::findOrfail($userId);

        $users = User::where('id', $userId)->first();
        $users->update([
            "data->profile_completed" => 1,
            "active_status" => 1
        ]);

        // Create a subscription for subscriptions plans
        if (in_array($pakage_id, [3, 4, 5])) {
            $this->storeSubscription($session, $userId, $pakage_id);
        }

        $accessDetail = [];

        switch ($pakageDetail->slug) {
            case "kids-one-time":
            case "teen-one-time":
                $accessDetail['my_report'] = '1';
                $accessDetail['ask_ai'] = '1';
                break;

            case "simplify-one-time":
                $accessDetail['simplify'] = '1';
                // $accessDetail['my_report'] = '1';
                // $accessDetail['ask_ai'] = '1';
                // $accessDetail['simplify'] = '1';
                break;

            case "kids-assessments":
            case "teen-assessments":
                $accessDetail['my_report'] = '1';
                $accessDetail['ask_ai'] = '1';
                $accessDetail['simplify'] = '1';
                break;
            case "simplify-one-time":
                $accessDetail['simplify'] = '1';
        }

        $payment = UserAccess::where('user_id', $userId)->update($accessDetail);


        Auth::login($users);
        // Code to send brevo email for assesment
        $this->sendAssesmentLink($pakage_id);

        if (isset($session['metadata']['simplify']) && $session['metadata']['simplify'] == 1) {
            $this->sendSimplifyDataToBrevo();

            return redirect()->route('simplify.activate.user');
        } else {
            return redirect()->route('thanks.you', ['id' => $session['metadata']['childId']]);
        }



        //return \Illuminate\Support\Facades\Redirect::route("disc-assessments.before");
    }

    public function sendAssesmentLink($pakageId)
    {
        try {
            $recipientEmail = Auth::user()->email;

            $apiHeaders = [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'api-key' => env('BREVO_API_KEY'),
            ];

            $template = $this->getTemplateByPackageId($pakageId);
            $templateId = (int) $template->value;

            Http::withHeaders($apiHeaders)->post('https://api.brevo.com/v3/smtp/email', [
                'to' => [
                    [
                        'email' => $recipientEmail,
                    ],
                ],
                'templateId' => $templateId,
                'params' => [
                    'assesmentLink' => env('ASSESMENT_URL'),
                ],
            ]);

            return response()->json([
                'message' => 'Assesment link sent.'
            ], 200);
        } catch (\Throwable $exception) {
            Log::error('Something went wrong when sending assesment link mail to brevo. ' .  $exception);
            return response()->json([
                'message' => 'Something went wrong when sending assesment link mail to brevo.'
            ], 500);
        }
    }

    public function getTemplateByPackageId($packageId)
    {
        $packages = [
            1 => BrevoEmailTemplate::KIDS_SINGLE_ASSESMENT,
            2 => BrevoEmailTemplate::TEENS_SINGLE_ASSESMENT,
            3 => BrevoEmailTemplate::SIMPLIFY_ONLY,
            4 => BrevoEmailTemplate::KIDS_999_PACKAGE,
            5 => BrevoEmailTemplate::TEENS_999_PACKAGE,
        ];

        // Return the template if package ID exists, otherwise return null (or a default value)
        return $packages[$packageId] ?? null;
    }


    /**
     * Method to send simplify data to brevo
     */
    public function sendSimplifyDataToBrevo()
    {
        try {
            $recipientEmail = Auth::user()->email;

            $user = Auth::user();
            $firstName = $user->name;
            $lastName = $user->parent_last_name;

            $brevoListData = BrevoListId::whereId(3)->first();
            $apiHeaders = [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'api-key' => env('BREVO_API_KEY'),
            ];
            Http::withHeaders($apiHeaders)->post('https://api.brevo.com/v3/smtp/email', [
                'to' => [
                    [
                        'email' => $recipientEmail,
                    ],
                ],
                'templateId' => $brevoListData['template_id'],
                'listIds' => [$brevoListData['list_id']],
                'params' => [
                    'testing' => 'testing',
                ],
            ]);

            // Send data to brevo list
            $brevoController = new BrevoAPIController();
            $brevoController->subscribeForm($recipientEmail, $brevoListData['list_id'], $firstName, $lastName);


            return response()->json([
                'message' => 'Data sent to brevo.'
            ], 200);
        } catch (\Throwable $exception) {
            Log::error('Something went wrong when sending data to brevo. ' .  $exception);
            return response()->json([
                'message' => 'Something went wrong when sending data to brevo.'
            ], 500);
        }
    }

    public function storeSubscription($data, $userId, $pakageId)
    {

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $subscriptionDataFromStripe = $stripe->subscriptions->retrieve($data['subscription'], []);
        $subscriptionEndDate = \Carbon\Carbon::createFromTimestamp($subscriptionDataFromStripe['current_period_end'])->format('Y-m-d H:i:s');
        $subscription = Subscription::create([
            'user_id' => $userId,
            'stripe_id' => $data['subscription'],
            'type' => 'subscription',
            'stripe_price' => $data['amount_total'],
            // 'quantity' => $data['quantity'],
            'stripe_status' => 1,
            'trial_ends_at' => $subscriptionEndDate,
            'ends_at' => $subscriptionEndDate,
            'pakage_id' => $pakageId,
        ]);

        return $subscription;
    }

    public function paymentCancel(Request $request)
    {
        return Inertia::render("AssessmentPay", [
            'user' => Auth::user(),
        ]);
    }

    public function discAssessmentBefore($id)
    {
        $childDetail = Child::where('id', $id)->first();
        // dd($childDetail);
        if (empty($childDetail)) {
            return redirect()->route('homepage');
        }
        return Inertia::render('DiscAssessmentBefore', [
            "childId" => $id,
            "childDetail" => $childDetail,
        ]);
    }

    public function noteForParents($id)
    {
        $childDetail = Child::where('id', $id)->first();
        if (empty($childDetail)) {
            return redirect()->route('homepage');
        }
        return Inertia::render('NoteForParents', [
            "childId" => $id,
        ]);
    }


    public function readyToDiscover($id)
    {
        $childDetail = Child::where('id', $id)->first();
        if (empty($childDetail)) {
            return redirect()->route('homepage');
        }
        return Inertia::render('ReadyToDiscover', [
            "childId" => $id,
            "childDetail" => $childDetail,
        ]);
    }

    public function thankYou($id)
    {
        return Inertia::render('ThankYouMessage', [
            "childId" => $id,
        ]);
    }

    // public function SimplifyPay($pakageType)
    // {
    //     $pakageDetail = Pakage::where('slug', $pakageType)->first();
    //     if(empty($pakageDetail)){
    //         return redirect()->route('homepage');
    //     }

    //     $payment= \App\Models\Payment::create([
    //         "status" => PaymentsStatusEnum::Pending,
    //         "type" =>PaymentTypeEnum::Assessment,
    //         //"child_id" => $childId,
    //         "user_id" => Auth::id(),
    //         "pakage_id" => $pakageDetail->id,
    //         "paid_to" => 0,
    //         "units" => 1,
    //         "unit_price" => $pakageDetail->price,
    //         "total_amount"=> $pakageDetail->price
    //     ]);
    //     $getUsers = User::where('id',Auth::id())->first();

    //     $getChild = Child::where('user_id',$getUsers->id)->first();

    //     return $getUsers->checkout($pakageDetail->strip_price_key ,
    //             [
    //                 'success_url' => route('assessments.success') .'?session_id={CHECKOUT_SESSION_ID}' ,
    //                 'cancel_url' => route('assessments.cancel') ,
    //                 'metadata' => ['order_id' => $payment->id,'childId' => $getChild->id,'pakageId' => $pakageDetail->id,'simplify' => 1],
    //                 'allow_promotion_codes' => true
    //             ]
    //         );
    // }


    public function SimplifyPay($pakageType)
    {
        $pakageDetail = Pakage::where('slug', $pakageType)->first();
        if (empty($pakageDetail)) {
            return redirect()->route('homepage');
        }
        $getUsers = User::where('id', Auth::id())->first();
        $getChild = Child::where('user_id', $getUsers->id)->first();

        // Create payment record
        $payment = \App\Models\Payment::create([
            "status" => PaymentsStatusEnum::Pending,
            "type" => PaymentTypeEnum::Assessment,
            "child_id" => $getChild->id,
            "user_id" => Auth::id(),
            "pakage_id" => $pakageDetail->id,
            "paid_to" => 0,
            "units" => 1,
            "unit_price" => $pakageDetail->price,
            "total_amount" => $pakageDetail->price
        ]);

        // Determine the checkout mode
        $checkoutMode = $pakageDetail->slug == "simplify-one-time" ? 'subscription' : 'payment';

        return $getUsers->checkout(
            $pakageDetail->strip_price_key,
            [
                'mode' => $checkoutMode, // Dynamically set mode
                'success_url' => route('assessments.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('assessments.cancel'),
                'metadata' => [
                    'order_id' => $payment->id,
                    'childId' => $getChild->id,
                    'pakageId' => $pakageDetail->id,
                    'simplify' => 1
                ],
                'allow_promotion_codes' => true
            ]
        );
    }
}
