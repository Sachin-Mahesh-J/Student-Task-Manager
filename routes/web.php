<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('subjects', SubjectController::class);
Route::resource('tasks', TaskController::class);
