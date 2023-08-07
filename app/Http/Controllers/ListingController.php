<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        $listings = Listing::latest()->filter(request(['tag', 'search']))->paginate(6);
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
    //Render a form to edit a single listing
    public function edit(Listing $listing)
    {
        return view('listings.edit', compact('listing'));
    }
    // Update a single listing in the database
    public function update(UpdateListingRequest $request, Listing $listing)
    {
        $validatedFormFields = $request->validated();

        // if there is a log update as well

        if($request->hasFile('logo')){
            $validatedFormFields['logo'] = $request->file('logo')->store('logo', 'public');
        }

        // Then update
        $listing->update($validatedFormFields);

        return redirect(route('listing.show', $listing->id))->with('message', 'The listing has been updated successfully');
    }
    // Store a new listing to the database
    public function store(StoreListingRequest $request)
    {
        $validatedFormFields = $request->validated();

        // if there is a logo submitted insert it into the database

        if($request->hasFile('logo')){
            $validatedFormFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        // Insert into the database
        Listing::create($validatedFormFields);


        return redirect(route('listings.index'))->with('message', 'The listing has been created successfully');
    }
    // Delete a single listing

    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect(route('listings.index'))->with('message', 'The listing has been deleted successfully');
    }
}
