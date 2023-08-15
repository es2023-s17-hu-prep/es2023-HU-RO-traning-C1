<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index(){
        return view("auth.register");
    }

    public function register(Request $request) {
        $values = $request->validate([
            'name' => ['required'],
            'cuisine' => ['required'],
            'location' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ]);

        $restaurant = Restaurant::create([
            'name' => $request->name,
            'location' => $request->location,
            'cuisine' => $request->cuisine,
            'rating' => 0,
        ]);

        $user = User::factory()->create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'restaurantAdmin',
            'password' => $request->password,
            'restaurant_id' => $restaurant->id,
        ]);  
       

        if (Auth::attempt( ["email" => $request->email, "password" => $request->password, ])) {
            

            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
 
        return back();
    }
}
