@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Subject</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subjects.update', $subject) }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Subject Name</label>
            <input type="text" name="name" value="{{ old('name', $subject->name) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Subject Code</label>
            <input type="text" name="code" value="{{ old('code', $subject->code) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update Subject</button>
    </form>
@endsection
