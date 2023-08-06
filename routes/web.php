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
Route::get('/', [ListingController::class, 'index']);
// Create a listing
Route::get('/listings/create', [ListingController::class, 'create']);
// Store a listing to the DB
Route::post('/listings', [ListingController::class, 'store']);
// Show a particular lising
Route::get('/listings/{listing}', [ListingController::class, 'show']);



