<?php

// app/Models/Subject.php

// app/Models/Subject.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'name',
        'code',
        'description',
    ];

    public $timestamps = true;
}
