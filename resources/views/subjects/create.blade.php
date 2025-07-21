@extends('layouts.app')

@section('title', 'Add New Subject')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 p-8 bg-base-200 rounded-2xl shadow-2xl">
        <h1 class="text-4xl font-extrabold text-primary mb-6 flex items-center gap-2">
            📘 Add New Subject
        </h1>

        {{-- Show validation errors --}}
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

            {{-- Subject Name --}}
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

            {{-- Subject Code --}}
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

            {{-- Description --}}
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

            {{-- Buttons --}}
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
