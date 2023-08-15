<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    // Shows the login form
    public function showLoginForm()
    {
        return view("auth.login");
    }

    // Shows the register form
    public function showRegisterForm()
    {
        return view("auth.register");
    }

    // Register a new user and restaurant
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email|email',
            'userName' => 'required|string',
            'password' => 'required|min:8',

            'cuisine' => "required|string",
            'location' => "required|string",
            'name' => "required|string",
            'logo' => 'required|file'
        ]);

        // Upload logo
        $logoUrl = $request->file('logo')->storePublicly();

        // Create restaurant
        $restaurant = Restaurant::create([
            'name' => $request->get('name'),
            'cuisine' => $request->get('cuisine'),
            'location' => $request->get('location'),
            'logoUrl' => $logoUrl,
        ]);

        // Create user
        $user = User::create([
            'name' => $request->get('userName'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'restaurantId' => $restaurant->id,
        ]);

        // Log in the user
        Auth::loginUsingId($user->id);
        return redirect('/home');
    }

    // Authenticates the user
    public function authenticate(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required']);

        $user = User::where('email', $request->get('email'))->first();

        if (!$user) {
            // User not found
            return back()->with('message', 'Wrong email or password');
        }

        if ($user->lockedOutUntil && $user->lockedOutUntil->gte(Carbon::now())) {
            // User already locked out
            return back()->with('message', 'You are locked out until ' . $user->lockedOutUntil);
        }

        if (!Hash::check($request->get('password'), $user->password)) {
            // Login failed, increase attempts and check for lock out
            $failedAttempts = $user->failedAttempts + 1;
            $user->update(['failedAttempts' => $failedAttempts]);
            if ($failedAttempts >= User::MAX_LOGIN_ATTEMPTS) {
                // User got locked out
                $user->update(['lockedOutUntil' => Carbon::now()->add('seconds', User::LOCK_DURATION_SECONDS)]);
                return back()->with('message', 'You are locked out until ' . $user->lockedOutUntil);
            }
            return back()->with('message', 'Wrong email or password');
        }

        // Successful login, clear attempts
        Auth::loginUsingId($user->id);
        $user->update(['failedAttempts' => 0]);
        return redirect('/home');
    }

    // Terminate session
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
