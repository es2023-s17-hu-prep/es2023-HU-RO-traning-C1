<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

class UserController extends Controller
{
    /**
     * Login route handler
     */
    public function login(Request $request)
    {
        // try getting the user from the db
        $user = User::where('email', $request->get('email'))->first();
        if (!$user) {
            return back()->withErrors(['authError' => 'Invalid credentials']);
        }

        // create a throttle key
        $throttleKey = strtolower($request->get('email') . '-' . $request->ip());

        // if the rate limiter hits the threshold
        if (RateLimiter::tooManyAttempts($throttleKey, 3)) {
            $availableIn = RateLimiter::availableIn($throttleKey);
            return back()
                ->withInput()
                ->withErrors(['authError' => 'Too many login attempts. Wait ' . $availableIn . ' seconds']);
        }

        // check the password
        if (!Hash::check($request->get('password'), $user->password)) {
            // hit the rate limiter on failed login attempt
            RateLimiter::hit($throttleKey, 30);

            // return errors
            return back()
                ->withInput()
                ->withErrors(['authError' => 'Email or password is incorrect.']);
        }

        // clear the rate limiter because of successful login
        RateLimiter::clear($throttleKey);

        // issue the login
        auth()->login($user);

        // success, redirect to /
        return redirect('/');
    }

    /**
     * Logout route handler
     */
    public function logout()
    {
        // logout the user, then redirect
        auth()->logout();
        return redirect('/login');
    }

    /**
     * Register request
     */
    public function register(StoreUserRequest $request)
    {
        // check if the email has been already registered
        $foundUser = User::where('email', $request->get('email'))->first();
        if ($foundUser) {
            return back()
                ->withInput()
                ->withErrors(['regError' => 'User with this email already exists,']);
        }

        // store the file if exists
        $path = null;
        if ($request->file('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
        }

        // create the restaurant
        $restaurant = Restaurant::create([
            'name' => $request->get('restaurantName'),
            'cuisine' => $request->get('cuisine'),
            'location' => $request->get('location'),
            'logo' => $path
        ]);

        // create the user
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'restaurant_id' => $restaurant->id
        ]);

        // issue the login
        auth()->login($user);

        // redirect to the main
        return redirect('/');
    }
}
