{{--
@extends('layouts.app')

@section('title', 'Add New Subject')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 p-8 bg-base-200 rounded-2xl shadow-2xl">
        <h1 class="text-4xl font-extrabold text-primary mb-6 flex items-center gap-2">
            📘 Add New Subject
        </h1>

        --}}
{{-- Show validation errors --}}{{--

        @if ($errors->any())
            <div class="alert alert-error shadow-lg mb-6">
                <div>
                    <span class="font-semibold">Please fix the following errors:</span>
                    <ul class="mt-2 list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form action="{{ route('subjects.store') }}" method="POST" class="space-y-6">
            @csrf

            --}}
{{-- Subject Name --}}{{--

            <div class="form-control">
                <label class="label">
                    <span class="label-text font-semibold">Subject Name</span>
                </label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="input input-bordered input-primary"
                    placeholder="e.g., Mathematics"
                    required
                >
            </div>

            --}}
{{-- Subject Code --}}{{--

            <div class="form-control">
                <label class="label">
                    <span class="label-text font-semibold">Subject Code</span>
                </label>
                <input
                    type="text"
                    name="code"
                    value="{{ old('code') }}"
                    class="input input-bordered input-primary"
                    placeholder="e.g., MATH101"
                    required
                >
            </div>

            --}}
{{-- Description --}}{{--

            <div class="form-control">
                <label class="label">
                    <span class="label-text font-semibold">Description</span>
                </label>
                <textarea
                    name="description"
                    class="textarea textarea-bordered textarea-primary"
                    placeholder="Short description..."
                    rows="4"
                >{{ old('description') }}</textarea>
            </div>

            --}}
{{-- Buttons --}}{{--

            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('subjects.index') }}" class="btn btn-outline btn-sm">
                    ← Back to List
                </a>
                <button type="submit" class="btn btn-primary btn-sm">
                    ➕ Create Subject
                </button>
            </div>
        </form>
    </div>
@endsection
--}}

@extends('layouts.app')

@section('title', 'Add New Subject')

@section('content')
    <h1 class="text-2xl font-bold mb-4">📘 Add New Subject</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subjects.store') }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-2xl">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Subject Name</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full p-2 border border-gray-300 rounded"
                placeholder="e.g., Mathematics"
                required
            >
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Subject Code</label>
            <input
                type="text"
                name="code"
                value="{{ old('code') }}"
                class="w-full p-2 border border-gray-300 rounded"
                placeholder="e.g., MATH101"
                required
            >
        </div>


        <div class="flex justify-between items-center">
            <a href="{{ route('subjects.index') }}" class="text-gray-600 hover:text-blue-600 text-sm">
                ← Back to List
            </a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                ➕ Create Subject
            </button>
        </div>
    </form>
@endsection

