<?php

use App\Http\Controllers\InternshipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
// Public Routes (Both Users and Admins can see listings)
Route::get('/', [InternshipController::class, 'index']);

// Protected Admin-Only Routes
Route::middleware(['auth', 'can:manage-internships'])->group(function () {
    Route::get('/internships/create', [InternshipController::class, 'create']);
    Route::post('/internships', [InternshipController::class, 'store']);
    Route::get('/internships/{internship}/edit', [InternshipController::class, 'edit']);
    Route::put('/internships/{internship}', [InternshipController::class, 'update']);
    Route::delete('/internships/{internship}', [InternshipController::class, 'destroy']);
});// Show the application form for a specific internship
Route::get('/internships/{internship}/apply', [App\Http\Controllers\InternshipController::class, 'applyForm']);

// Submit the application form to the database
Route::post('/internships/{internship}/apply', [App\Http\Controllers\InternshipController::class, 'submitApplication']);
// Place this outside any middleware groups at the bottom of web.php


// Guest Routes (Only accessible if NOT logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Logout Route (Only accessible if logged in)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/help', [PageController::class, 'help'])->name('help');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/', [InternshipController::class, 'index']);
Route::post('/internships/{id}/apply', [InternshipController::class, 'storeApplication']);

// This ensures your application endpoint routes accurately to the method above
Route::post('/internships/{internship}/apply', [InternshipController::class, 'submitApplication']);

// 1. GET route to display the application page form
Route::get('/internships/{internship}/apply', [InternshipController::class, 'applyForm']);

// 2. POST route to process the form submission (from our previous steps)
Route::post('/internships/{internship}/apply', [InternshipController::class, 'submitApplication']);