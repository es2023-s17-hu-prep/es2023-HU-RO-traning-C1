<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    /**
     * Show the login form
     */
    public function loginForm()
    {
        return view('auth.login');
    }

    /**
     * Login POST method
     */
    public function login(LoginRequest $request)
    {
        // Try getting the user from the db
        $user = User::where('email', $request->get('email'))->first();
        if (!$user) {
            return back()->withErrors(['authError' => 'Email or password is incorrect.']);
        }

        // Create a throttle key
        $throttleKey = strtolower($request->get('email') . '-' . $request->ip());

        // if the rate limiter hits the threshold, we should not let the user to log in
        if (RateLimiter::tooManyAttempts($throttleKey, 3)) {
            $availableIn = RateLimiter::availableIn($throttleKey);
            return back()
                ->withInput()
                ->withErrors(['authError' => 'Too many login attempts. Wait ' . $availableIn . ' seconds.']);
        }

        // Check the password
        if (!Hash::check($request->get('password'), $user->password)) {
            // hit the rate limiter on failed login attempt
            RateLimiter::hit($throttleKey, 30);

            return back()
                ->withInput()
                ->withErrors(['authError' => 'Email or password is incorrect.']);
        }

        // Clear the rate limiter
        RateLimiter::clear($throttleKey);

        // check if the user is locked
        if ($user->locked) {
            return back()->withInput()->withErrors(['authError' => 'This user is locked.']);
        }

        // Login
        return $this->issueLogin($user);
    }

    /**
     * Show the registration form
     */
    public function registerForm()
    {
        return view('auth.reg');
    }

    /**
     * Login POST method
     */
    public function register(RegisterRequest $request)
    {
        // Try getting the user from the db
        $user = User::where('email', $request->get('email'))->first();
        if ($user) {
            return back()
                ->withInput()
                ->withErrors(['regError' => 'User with this email already exists.']);
        }

        // upload the logo if exists
        $path = null;
        if ($request->file('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
        }

        // create the restaurant
        $restaurant = Restaurant::create([
            'name' => $request->get('restaurantName'),
            'cuisine' => $request->get('cuisine'),
            'location' => $request->get('location'),
            'logo_url' => $path,
        ]);

        // create the user
        $created = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'restaurant_id' => $restaurant->id
        ]);

        // login
        return $this->issueLogin($created);
    }

    /**
     * Logout
     */
    public function logout()
    {
        // make the restaurant_id null on admin
        if (auth()->user()->role == 'dineEasyAdmin') {
            $user = User::find(auth()->user()->id);
            $user->update(['restaurant_id' => null]);
        }

        auth()->logout();
        return redirect('/login');
    }

    /**
     * Login utility function
     */
    public function issueLogin(User $user)
    {
        auth()->login($user);
        return redirect($user->role === 'restaurantAdmin' ? '/dashboard' : '/admin');
    }
}
