<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        $listings = Listing::all();
        return view('listings', compact('listings'));
    }
    // Show a single listing
    public function show(Listing $listing)
    {
        return view('listing', compact('listing'));
    }
}