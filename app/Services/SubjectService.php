<?php

// app/Services/SubjectService.php
namespace App\Services;

use App\Models\Subject;

class SubjectService
{
    public function create(array $data)
    {
        $subjectData = [
            'name' => $data['name'],
            'code' => $data['code'],
        ];

        Subject::create($subjectData);
    }

    public function getAll()
    {
        return Subject::all();
    }

    public function findById($id)
    {
        return Subject::find($id);
    }

    public function update(array $data)
    {
        $subject = Subject::find($data['id']);
        $subject->name = $data['name'];
        $subject->code = $data['code'];
        $subject->save();
    }

    public function delete($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
    }
}

