@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Task</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="POST" class="bg-white p-6 rounded shadow-md w-full">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Title</label>
            <input type="text" name="title" value="{{ old('title', $task->title) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Subject</label>
            <select name="subject_id" class="w-full p-2 border border-gray-300 rounded" required>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $task->subject_id == $subject->id ? 'selected' : '' }}>
                        {{ $subject->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Due Date</label>
            <input type="date" name="due_date" value="{{ old('due_date', $task->due_date) }}" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Description</label>
            <textarea name="description" class="w-full p-2 border border-gray-300 rounded" rows="3">{{ old('description', $task->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Status</label>
            <select name="status" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update Task</button>
    </form>
@endsection
