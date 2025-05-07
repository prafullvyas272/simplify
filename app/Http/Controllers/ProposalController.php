<?php

namespace App\Http\Controllers;

use App\Enums\ProposalStatusEnum;
use App\Helpers\UserHelper;
use App\Http\Requests\StoreProposalRequest;
use App\Http\Requests\UpdateProposalRequest;
use App\Mail\NewProposalCoach;
use App\Mail\ProposalResponse;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $available_proposals= Proposal::where("coach_id" , Auth::id())
            ->where("status" , ProposalStatusEnum::Requested)
            ->with("student")
            ->orderBy("created_at")
            ->paginate(16)
            ->withQueryString();

        return Inertia::render('Proposals/ProposalsIndex' ,[
            "proposals"=>$available_proposals->items(),
            "current_page"=>$available_proposals->currentPage(),
            "last_page"=>$available_proposals->lastPage(),
        ] );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $coach)
    {
//        || Auth::user()->role_id !=3
        if ($coach->role_id!=2 )
            return to_route('dashboard');

        return Inertia::render("Proposals/ProposalsCreate", [
            "coach" => $coach,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProposalRequest $request , User $coach)
    {
        $request->validated();

        $proposal=Proposal::updateOrCreate(
            [
                "student_id" => Auth::id(),
                "coach_id" => $coach->id,
                "status" => ProposalStatusEnum::Requested
            ],
            [
            "cover_letter" => $request->cover_letter,
            "hours" => $request->number_of_sessions,
        ]);

        Mail::send(new NewProposalCoach($proposal));
        return to_route("users.show_coach" , $coach->id)->with("success", "Proposal Submitted Successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Proposal $proposal)
    {
        if ($proposal->coach_id!=Auth::id())
            return back()->with("error" , "Can't Access a proposal that doesn't belongs to you");

        $proposal->load("student");

        return Inertia::render("Proposals/ProposalsSingle", [
            "proposal" => $proposal,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProposalRequest $request, Proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proposal $proposal)
    {
        //
    }


    public function accept( Proposal $proposal)
    {
        if ($proposal->coach_id != Auth::id())
            return back()->with("error" , "Can't Accept a Proposal That doesn't belongs to you");

        if ($proposal->status != ProposalStatusEnum::Requested)
            return back()->with("error" , "Proposal Expired, Please Tell User To Submit Again");

        $proposal->update([
            "status" => ProposalStatusEnum::Accepted
        ]);

        UserHelper::send_proposal_response_email($proposal);

        return back()->with("success" , "Proposal Accepted Successfully");


        //todo notify user with link to chat with the user
    }

    public function reject( Proposal $proposal)
    {
        if ($proposal->coach_id != Auth::id())
            return back()->with("error" , "Can't Reject a Proposal That doesn't belongs to you");

        if ($proposal->status != ProposalStatusEnum::Requested)
            return back()->with("error" , "Proposal Expired, Please Tell User To Submit Again");

        $proposal->update([
            "status" => ProposalStatusEnum::Declined
        ]);

        return back()->with("success" , "Proposal Rejected Successfully");


        //todo notify user with link to chat with the user
    }
}
