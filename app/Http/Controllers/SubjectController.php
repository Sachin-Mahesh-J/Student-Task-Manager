<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Services\SubjectService;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private SubjectService $subject;

    public function __construct(SubjectService $subject){
        $this->subject = $subject;
    }
    public function index()
    {
        $subjects =$this-> subject->getAll();
        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:20',
        ]);

        $this->subject->create($validated);

        return redirect(url('/subjects'))->with('success', 'Subject created successfully');
    }

    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $subject->update([
            'name' => $request->name,
        ]);

        return redirect()->route('subjects.index')->with('success', 'Subject updated!');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index')->with('success', 'Subject deleted!');
    }
}
