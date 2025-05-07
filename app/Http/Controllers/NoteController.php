<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\CoachUser;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachUserIds = CoachUser::where("coach_id" , Auth::id())->orWhere("student_id" , Auth::id())->pluck('id');
        $notes=Note::whereIn("coach_user_id" , $coachUserIds)
                ->with([
                    "coach_user"=>[
                        "coach"
                    ]
                ])->get();
        Auth::user()->load("notes");
        return Inertia::render("Notes/NotesIndex",[
            "notes"=>$notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {
        $request->validated();

        Note::create([
            "note" => $request->note,
            "coach_user_id" => $request->coach_user_id,
            "user_id" =>Auth::id(),
        ]);

        return back()->with("success" , "Note Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
