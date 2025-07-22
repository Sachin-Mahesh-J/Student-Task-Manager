<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSubjects = Subject::count();
        $totalTasks = Task::count();
        $pendingTasks = Task::where('status', 'pending')->count();
        $completedTasks = Task::where('status', 'completed')->count();
        $latestTasks = Task::latest()->take(5)->with('subject')->get();

        return view('dashboard', compact(
            'totalSubjects',
            'totalTasks',
            'pendingTasks',
            'completedTasks',
            'latestTasks'
        ));
    }
}
