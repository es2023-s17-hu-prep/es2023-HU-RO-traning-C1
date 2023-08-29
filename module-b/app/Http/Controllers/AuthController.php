<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display the login form
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Logs the user out
     */
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Display the registration form
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Logs users in by email and password
     */
    public function login(Request $request)
    {
        // Validate form fields
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Find user by email
        $user = User::where('email', $request->get('email'))->first();

        // Check the username and password hash
        if(!$user || !Hash::check($request->get('password'), $user->password)){
            $tries = $user->tries + 1;
            $user->update(['tries' => $tries]);
            if($tries > User::MAX_TRIES) {
                $lockedOutUntil = Carbon::now()->addSeconds(User::LOCK_DURATION);
                $user->update(['locked_out_until' => $lockedOutUntil]);
                return redirect()->back()->with('error', 'You are locked out until ' . $lockedOutUntil);
            }
            return redirect()->back()->with('error', 'Wrong username or password');
        }

        // Check if the user is locked out
        if($user->locked_out_until && Carbon::now()->gt($user->locked_out_until)){
            return redirect()->back()->with('error', 'You are locked out until ' . $user->locked_out_until->format('Y-m-d H:i:s'));
        }

        Auth::login($user);
        return redirect('dashboard');
    }

    /**
     * Creates a new restaurant and user
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'cuisine' => 'required|string',
            'location' => 'required|string',
            'file' => 'required|file',
            'email' => 'required|email|unique:users,email',
            'user_name' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Upload the logo
        $path = $request->file('file')->store('public');

        // Create the restaurant
        $restaurant = Restaurant::create([
            'name' => $request->get('name'),
            'cuisine' => $request->get('cuisine'),
            'location' => $request->get('location'),
            'logo_path' => $path
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->get('user_name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'restaurant_id' => $restaurant->id
        ]);

        Auth::login($user);
        return redirect('dashboard');
    }
}
