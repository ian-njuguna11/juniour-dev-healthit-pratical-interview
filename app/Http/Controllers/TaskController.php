<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   
    public function reports()
    {
       return view('task.reports');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Task::create([
        'tracking_date' => request()->input('tracking_date'),
        'task' => request()->input('task'),
        'priority' => request()->input('priority-radio'),
        'status' => request()->input('status-radio'),
       ]);

       return back()->with('task created succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function orderByDate()
    {
        $tasks = Task::query()->orderBy('tracking_date', 'desc')->get();
       return view('question-three', ['tasks' => $tasks]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
       return view('task.update', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
       $task->update([
        'tracking_date' => request()->input('tracking_date'),
        'task' => request()->input('task'),
        'priority' => request()->input('priority-radio'),
        'status' => request()->input('status-radio'),
       ]);
       
       return view('dashboardquestion-one');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return back()->with('message', 'item deleted successfully');
    }
}
