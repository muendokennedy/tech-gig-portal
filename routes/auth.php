<?php
use App\Http\Controllers\UserController;

// User authentication route page

Route::middleware('auth')->group(function(){
    // Logout the user
    Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

});
Route::middleware('guest')->group(function(){
    // Render the user or the create form page
    Route::get('/register', [UserController::class, 'create'])->name('user.create');
    // Create the user in the database
    Route::post('/register', [UserController::class, 'store'])->name('user.store');
    // Render the login form
    Route::get('/login', [UserController::class, 'login'])->name('user.login');
    // Login the user
    Route::post('/login', [UserController::class, 'loginUser'])->name('login.user');
});

