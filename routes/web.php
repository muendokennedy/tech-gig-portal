<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Show all the listings
Route::get('/', [ListingController::class, 'index'])->name('listings.index');
// Show a particular lising
Route::get('/listings/{listing}/show', [ListingController::class, 'show'])->name('listing.show');
// Create a listing
Route::get('/listings/create', [ListingController::class, 'create'])->name('listing.create');
// Store a listing to the DB
Route::post('/listings/store', [ListingController::class, 'store'])->name('listing.store');
// Edit a single listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit');
// Update a single listing to the database
Route::put('/listings/{listing}/update', [ListingController::class, 'update'])->name('listing.update');
// Delete a single listing
Route::delete('/listings/{listing}/delete', [ListingController::class, 'destroy'])->name('listing.destroy');
// Logged in user can manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->name('listings.manage');

require_once __DIR__ . '/auth.php';



