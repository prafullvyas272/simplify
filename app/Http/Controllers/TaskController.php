<?php

namespace App\Http\Controllers;

use App\Enums\GoalStatusEnum;
use App\Enums\StatusEnum;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks= Auth::user()->tasks()->where("status" , GoalStatusEnum::Upcoming)->get();

        return Inertia::render("Tasks/TasksIndex", [
            "tasks" => $tasks
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
    public function store(StoreTaskRequest $request)
    {
        $request->validated();

        try {

            if ( $request->goal_id && !Auth::user()->goals()->where("id" , $request->goal_id)->exists())
                return back()->with("error" , "Can't add to this goal");


            Auth::user()->tasks()->create([
                'name' => $request->name,
                'description' => $request->description,
                'due_at' => $request->due_at,
                'status' => GoalStatusEnum::InProgress,
                'assigned_by' => Auth::id(),
                "goal_id" => $request->goal_id
            ]);

            return back()->with("success" , "Task created successfully");

        }catch (\Exception $e){
            \Illuminate\Support\Facades\Log::error($e);
            return back()->with("error" , "Something Wrong Happened, Couldn't create the task");

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }


    public function upcoming()
    {
        return  Auth::user()->tasks()->whereDate('due_at' , ">" , Carbon::today())
                ->with("assigned_by")
                ->orderBy("due_at")
                ->limit(4)
                ->get();

    }
    public function in_progress()
    {
        return  Auth::user()->tasks()->whereDate('due_at' , ">" , Carbon::today())
                ->where("status" , GoalStatusEnum::InProgress)
                ->with("assigned_by")
                ->orderBy("due_at")
                ->limit(4)
                ->get();

    }
}

