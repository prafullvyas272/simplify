<?php

namespace App\Http\Controllers;

use App\Enums\GoalStatusEnum;
use App\Http\Requests\StoreGoalRequest;
use App\Http\Requests\UpdateGoalRequest;
use App\Models\Goal;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Laravel\Reverb\Loggers\Log;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goals=Auth::user()->goals()->with("tasks")->get();
        $tasks=Auth::user()->tasks()->get();


        return Inertia::render("Goals/GoalsIndex", [
            "goals" => $goals,
            "tasks" => $tasks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoalRequest $request)
    {
        $request->validated();

        try {
            Auth::user()->goals()->create([
                "name" => $request->name,
                "description" => $request->description,
                "due_at" => $request->due_at,
                "status" => GoalStatusEnum::InProgress,
            ]);

            return back()->with("success" , 'Goal Created Successfully');
        }catch (\Exception $e){
            \Illuminate\Support\Facades\Log::error($e);
            return back()->with("error" , "Something Wrong Happened, Couldn't create the goal");

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Goal $goal)
    {
        $goal->load("tasks");

        return Inertia::render("Goals/GoalsSingle", [
            "tasks" => $goal->tasks,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoalRequest $request, Goal $goal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goal $goal)
    {
        //
    }

    public function index_json()
    {
        return Auth::user()->goals()->get(["id","name"]);
    }
}
