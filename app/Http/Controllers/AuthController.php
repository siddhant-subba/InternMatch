<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // 1. Show the frontend login page
    public function showLogin()
    {
        return view('auth.login');
    }

    // 2. Process the login form submission
    public function login(Request $request)
    {
        // Validate input formatting
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to match credentials against the users table records
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Prevents session fixation attacks

            return redirect('/')->with('success', 'Logged in successfully! Welcome back.');
        }

        // If credentials fail, bounce back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // 3. Destruct the logged-in user session
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully.');
    }
    public function showRegister()
{
    return view('auth.register');
}

// Handle processing incoming new user registration documents
public function register(Request $request)
{
    $credentials = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    // Create the new standard user (is_admin defaults to false)
    $user = User::create([
        'name' => $credentials['name'],
        'email' => $credentials['email'],
        'password' => Hash::make($credentials['password']),
    ]);

    // Automatically log the new user in right after registration
    Auth::login($user);

    // Redirect to home dashboard with a success banner message
    return redirect('/')->with('success', 'Account registered successfully! Welcome aboard.');
}
}
