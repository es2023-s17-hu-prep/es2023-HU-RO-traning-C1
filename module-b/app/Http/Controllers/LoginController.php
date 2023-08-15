<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm() {
        if (Auth::check())
            return to_route("restaurants.show", ["restaurant" => Auth::user()->restaurant_id]);
        return view("auth.login");
    }

    public function login(Request $request) {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required|min:8|max:255"
        ]);

        if (!Auth::attempt($data))
            return back()->withErrors(["email" => "Invalid email or password"]);
        if (Auth::user()->role)
            return to_route("restaurants.index");
        return to_route("restaurants.show", ["restaurant" => Auth::user()->restaurant_id]);
    }

    public function logout() {
        if (!Auth::check())
            return to_route("login");
        Auth::logout();
        session()->regenerateToken();
        return to_route("login");
    }
}
