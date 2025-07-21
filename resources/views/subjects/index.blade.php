@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Subjects</h1>

    <a href="{{ route('subjects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Subject</a>

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
        <tr>
            <th class="p-2 text-left">Name</th>
            <th class="p-2 text-left">Code</th>
            <th class="p-2 text-left">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td class="p-2">{{ $subject->name }}</td>
                <td class="p-2">{{ $subject->code }}</td>
                <td class="p-2">
                    <a href="{{ route('subjects.edit', $subject) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('subjects.destroy', $subject) }}" method="POST" class="inline">
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
