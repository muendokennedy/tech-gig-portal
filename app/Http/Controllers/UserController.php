<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    // Render the create user form

    // show the register form
    public function create(): View
    {
        return view('users.register');
    }
    public function login(): View
    {
        return view('users.login');
    }
    public function store(CreateUserRequest $request): RedirectResponse
    {
        $newUser = $request->validated();

        // Create the user
        $user = User::create($newUser);

        // start user session
        auth()->login($user);

        return redirect(route('listings.index'))->with('message', 'The user has been created successfully');

    }
    public function loginUser(LoginUserRequest $request)
    {
        $user = $request->validated();

        // attempt to login the user using the incoming credintials

        if(auth()->attempt($user)){

            $request->session()->regenerate();

            return redirect(route('listings.index'))->with('message', 'You logged in successfully');
        }

        return back()->withErrors(['email' => 'Invalid log in credentials']);

    }
    // Logout the user from the current session
    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('listings.index'))->with('message', 'You have been logged out!');
    }
}
