<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Render the create user form

    // show the register form
    public function create()
    {
        return view('users.register');
    }
    public function login()
    {
        return view('users.login');
    }
    public function store(CreateUserRequest $request)
    {
        $newUser = $request->validated();

        User::create($newUser);

        return redirect(route('listings.index'))->with('message', 'The user has been created successfully');

    }
}
