<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantSelectController extends Controller
{
    /**
     * Show the restaurant selector
     */
    public function show()
    {
        if(!Auth::user()->isSuperAdmin()){
            return redirect()->back();
        }
        $restaurants = Restaurant::all();
        return view('restaurant_select', compact('restaurants'));
    }

    /**
     * Select a new restaurant
     */
    public function select(Restaurant $restaurant)
    {
        if(!Auth::user()->isSuperAdmin()){
            return redirect()->back();
        }
        Auth::user()->update(['restaurant_id' => $restaurant->id]);
        return redirect('dashboard');
    }
}
