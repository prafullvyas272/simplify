<?php

namespace App\Http\Controllers;

use App\Models\SimplifyChildDetail;
use App\Models\simplifyParentDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Response;
use Illuminate\Support\Facades\Log;
use App\Models\Timezones;

class SimplifyController extends Controller
{
    public function storeParentDetail(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'country_id' => 'required',
            'timezone_id'=> 'required',
            'phone_number' => 'required|numeric',
            'date_of_birth'=> 'required',
            'country_code' => 'required',
            'city' => 'required|string|min:2|max:255',

        ]);

        $phoneNumber = $request->input('country_code') . $request->input('phone_number');

        $user = simplifyParentDetail::create([
            'user_id' => Auth::user()->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'country_id'=>$request->country_id,
            'timezone_id' => $request->timezone_id,
            'phone_number' => $phoneNumber,
            'date_of_birth' => $request->date_of_birth,
            'partner_first_name' => $request->partner_first_name,
            'partner_last_name' => $request->partner_last_name,
            'partner_email'=>$request->partner_email,
            'country_code' => $request->country_code,
            'city' => $request->city,
        ]);

        //return Inertia::location(route('simplify.activate.FamilyPersonalization'));
        return response()->json([
            'message' => 'Parent details saved successfully!',
            'redirect_url' => route('simplify.activate.FamilyPersonalization'),
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $parentDetail = simplifyParentDetail::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:simplify_parent_details,email,' . $id,
            'country_id' => 'required|integer',
            'timezone_id' => 'required|integer',
            'phone_number' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'country_code' => 'required',
            'city' => 'required|string|min:2|max:255',
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'country_id'=>$request->country_id,
            'timezone_id' => $request->timezone_id,
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'partner_first_name' => $request->partner_first_name,
            'partner_last_name' => $request->partner_last_name,
            'partner_email'=>$request->partner_email,
            'country_code' => $request->country_code,
            'city' => $request->city,
        ];

        $parentDetail->update($data);

        return response()->json([
            'message' => 'Parent detail updated successfully!',
            'data' => $parentDetail,
            'redirect_url' => route('simplify.activate.FamilyPersonalization'),
        ]);
    }

    public function storeChildDetail(Request $request)
    {
        $request->validate([
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'relationship_to_child' => 'required',
            'date_of_birth'=> 'required',
            'school_name' => '',
            'gender' => 'required',
        ]);

        $parentDetail = simplifyParentDetail::where('user_id',Auth::user()->id)->first();
        $user = SimplifyChildDetail::create([
            'user_id' => Auth::user()->id,
            'simplify_parent_id' => $parentDetail->id,
            'child_first_name' => $request->child_first_name,
            'child_last_name' => $request->child_last_name,
            'relationship_to_child' => $request->relationship_to_child,
            'date_of_birth' => $request->date_of_birth,
            'school_name'=>$request->school_name,
            'other_school' => $request->other_school,
            'grade' => $request->grade,
            'gender' => $request->gender,
            'key_interests' => $request->key_interests,
            'learning_goals' => $request->learning_goals,
        ]);

        $relationship = $request->relationship_to_child;
        // default gender male
        $gender = 'male';
        if ($relationship == 'mother') {
            $gender = 'female';
        }
        if ($relationship) {
            Auth::user()->update([
                'gender' => $gender
            ]);
        }

        return response()->json([
            'message' => 'Child details saved successfully!',
            'redirect_url' => route('simplify.activate.FamilyPersonalizationPartTwo'),
        ], 201);

    }


    public function updateChildDetail(Request $request, $id)
    {

        $childDetail = SimplifyChildDetail::findOrFail($id);

        $request->validate([
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'relationship_to_child' => 'required',
            'date_of_birth'=> 'required',
            'school_name' => 'required',
            'gender' => 'required',
        ]);

        $data = [
            'child_first_name' => $request->child_first_name,
            'child_last_name' => $request->child_last_name,
            'relationship_to_child' => $request->relationship_to_child,
            'date_of_birth' => $request->date_of_birth,
            'school_name'=>$request->school_name,
            'other_school' => $request->other_school,
            'grade' => $request->grade,
            'gender' => $request->gender,
            'key_interests' => $request->key_interests,
            'learning_goals' => $request->learning_goals,
        ];

        $childDetail->update($data);

        return response()->json([
            'message' => 'Child details saved successfully!',
            'redirect_url' => route('simplify.activate.FamilyPersonalizationPartTwo'),
        ], 201);

    }

    public function WhatsNext(){
        $user = User::find(Auth::user()->id);
        $user->simplify_status = 1;
        $user->save();
        return Inertia::render('Simplify/WhatsNext', [
            "user"=>Auth::user()
        ]);
    }


    /**
     * Method to cancel subscription
     */
    public function cancelSubscription(){

        try {
            $user = Auth::user();

            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $subscriptionId = $user->subscriptions[0]['stripe_id'];

            $stripe->subscriptions->cancel($subscriptionId, []);
            $user->subscriptions[0]->update([
                'stripe_status' => 0
            ]);

            return response()->json([
                'message' => 'Subscription cancelled successfully!',
                'status' => 200,
            ], 200);
        } catch (\Throwable $exception) {
            Log::error('Subscription cancellation failed!' . $exception->getMessage());
            return response()->json([
                'message' => 'Subscription cancellation failed!',
                'status' => 400,
            ], 400);
        }


    }

    public function getSimplifySubscription() {
        $user = Auth::user();
        $subscription = $user->subscriptions[0];
        return response()->json([
            'message' => 'Subscription retrieved successfully!',
            'status' => 200,
            'subscription' => $subscription,
        ], 200);
    }

    public function getTimezones(Request $request) {
        $timezones = Timezones::where('country_code', $request->country_code)->get();





        return response()->json([
            'message' => 'Timezones retrieved successfully!',
            'status' => 200,
            'timezones' => $timezones,
        ], 200);
    }

    public function showAddSimplifyPage()
    {
        $authUser = Auth::user();
        return Inertia::render(
            'Simplify/AddSimplify', [
                'authUserId' => $authUser['id'],
                'pakageId' => 3  //for simplify
            ]
        );
    }

}
