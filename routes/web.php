<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',  [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tasks',  [TaskController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('tasks');

Route::get('/taskcounts',  [TaskController::class, 'task_counts'])
    ->middleware(['auth', 'verified'])
    ->name('taskcounts');
require __DIR__.'/auth.php';
