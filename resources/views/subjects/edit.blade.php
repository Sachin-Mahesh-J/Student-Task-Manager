{{--
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
--}}
@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">✏️ Edit Subject</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded mb-6">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('subjects.update', $subject) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Subject Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $subject->name) }}"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <div>
                <label for="code" class="block text-sm font-semibold text-gray-700 mb-1">Subject Code</label>
                <input type="text" name="code" id="code" value="{{ old('code', $subject->code) }}"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-green-600 text-white px-5 py-2 rounded-md font-medium hover:bg-green-700 transition duration-200">
                    💾 Update Subject
                </button>
            </div>
        </form>
    </div>
@endsection
