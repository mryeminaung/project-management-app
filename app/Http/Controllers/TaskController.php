<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Inertia\Inertia;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::inRandomOrder()->take(5)->get();

        return Inertia::render('Task/Index', [
            'tasks' => TaskResource::collection($tasks)
        ]);
    }

    public function progress()
    {
        $inProgressTasks = Task::inProgress();
        return Inertia::render('Task/InProgressTasks', [
            'tasks' => TaskResource::collection($inProgressTasks->paginate(5))
        ]);
    }

    public function pending()
    {
        $pendingTasks = Task::pending();
        return Inertia::render('Task/PendingTasks', [
            'tasks' => TaskResource::collection($pendingTasks->paginate(5))
        ]);
    }

    public function complete()
    {
        $completedTasks = Task::complete();
        return Inertia::render('Task/CompletedTasks', [
            'tasks' => TaskResource::collection($completedTasks->paginate(5))
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
}
