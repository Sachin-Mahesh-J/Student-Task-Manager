@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tasks</h1>

    <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Task</a>

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
        <tr>
            <th class="p-2 text-left">Title</th>
            <th class="p-2 text-left">Subject</th>
            <th class="p-2 text-left">Due Date</th>
            <th class="p-2 text-left">Status</th>
            <th class="p-2 text-left">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td class="p-2">{{ $task->title }}</td>
                <td class="p-2">{{ $task->subject->name }}</td>
                <td class="p-2">{{ \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') }}</td>
                <td class="p-2">
                <span class="px-2 py-1 rounded text-sm
                    {{ $task->status == 'completed' ? 'bg-green-200 text-green-800' : 'bg-yellow-200 text-yellow-800' }}">
                    {{ ucfirst($task->status) }}
                </span>
                </td>
                <td class="p-2">
                    <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="text-red-500 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
