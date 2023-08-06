<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        $listings = Listing::latest()->filter(request(['tag', 'search']))->get();
        return view('listings.index', compact('listings'));
    }
    // Show a single listing
    public function show(Listing $listing)
    {
        return view('listings.show', compact('listing'));
    }
    // Create a job listing
    public function create()
    {
        return view('listings.create');
    }
    // Store a new listing to the database
    public function store(StoreListingRequest $request)
    {
        $validatedFormFields = $request->validated();

        // Insert into the database
        Listing::create($validatedFormFields);

        return redirect('/')->with('message', 'The listing has been created successfully');
    }
}
