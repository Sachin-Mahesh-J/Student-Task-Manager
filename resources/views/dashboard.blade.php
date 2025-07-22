
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="p-6">
        <h1 class="text-3xl font-bold mb-6 text-primary">📊 Dashboard</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-base-200 rounded-xl p-4 shadow">
                <h2 class="text-xl font-semibold">Subjects</h2>
                <p class="text-3xl font-bold text-primary">{{ $totalSubjects }}</p>
            </div>
            <div class="bg-base-200 rounded-xl p-4 shadow">
                <h2 class="text-xl font-semibold">Total Tasks</h2>
                <p class="text-3xl font-bold text-primary">{{ $totalTasks }}</p>
            </div>
            <div class="bg-base-200 rounded-xl p-4 shadow">
                <h2 class="text-xl font-semibold">Pending Tasks</h2>
                <p class="text-3xl font-bold text-warning">{{ $pendingTasks }}</p>
            </div>
            <div class="bg-base-200 rounded-xl p-4 shadow">
                <h2 class="text-xl font-semibold">Completed Tasks</h2>
                <p class="text-3xl font-bold text-success">{{ $completedTasks }}</p>
            </div>
        </div>

        <div class="bg-base-200 rounded-xl shadow p-4">
            <h2 class="text-xl font-semibold mb-4">🕒 Latest Tasks</h2>
            <ul class="space-y-2">
                @forelse ($latestTasks as $task)
                    <li class="p-3 bg-base-100 rounded-lg shadow-sm">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-medium">{{ $task->title }}</h3>
                                <p class="text-sm text-gray-500">
                                    {{ $task->subject->name ?? 'No Subject' }} • {{ $task->due_date }}
                                </p>
                            </div>
                            <span class="badge {{ $task->status === 'completed' ? 'badge-success' : 'badge-warning' }}">
                            {{ ucfirst($task->status) }}
                        </span>
                        </div>
                    </li>
                @empty
                    <li>No tasks found.</li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
