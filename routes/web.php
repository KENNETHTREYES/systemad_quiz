<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Import the TaskController

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class); // Use TaskController::class
});