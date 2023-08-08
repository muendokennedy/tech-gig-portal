<?php
use App\Http\Controllers\UserController;

// User authentication route page

// Render the user or the create form page
Route::get('/register', [UserController::class, 'create'])->name('user.create');
// Render the login form
Route::get('/login', [UserController::class, 'login'])->name('user.login');
// Create the user in the database
Route::post('/register', [UserController::class, 'store'])->name('user.store');
// Login the user
Route::post('/login', [UserController::class, 'loginUser'])->name('login.user');
// Logout the user
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

