<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where("id", Auth::user()->id)->with("class")->first();
        $tasks = Task::query()
            ->where("class_id", $user->class->id)
            ->orderByRaw('CASE WHEN deadline < ? THEN 1 ELSE 0 END', [now()])
            ->orderBy("deadline", "asc")
            ->get();

        return view("pages.tasks", compact("tasks", "user"));
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, Task $task)
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
}
