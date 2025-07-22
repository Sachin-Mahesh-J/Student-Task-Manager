<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;




Route::resource('subjects', SubjectController::class);
Route::resource('tasks', TaskController::class);
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
