<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('subject')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('tasks.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'subject_id' => 'required|exists:subjects,id',
            'status' => 'required|in:pending,completed',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'subject_id' => $request->subject_id,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }


    public function edit(Task $task)
    {
        $subjects = Subject::all();
        return view('tasks.edit', compact('task', 'subjects'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'subject_id' => 'required|exists:subjects,id',
            'status' => 'required|in:pending,completed',
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'subject_id' => $request->subject_id,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated!');
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted!');
    }
}
