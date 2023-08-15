<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Display the select restaurant page for super admins
    public function index(){
        if(!Auth::user()->isSuperAdmin()){
            return redirect('home');
        }
        $restaurants = Restaurant::all();
        return view('select-restaurant', ['restaurants' => $restaurants]);
    }

    // Set selected restaurant
    public function selectRestaurant(Restaurant $restaurant){
        if(!Auth::user()->isSuperAdmin()){
            return redirect('home');
        }

        Auth::user()->update(['restaurantId' => $restaurant->id]);
        return redirect("home");
    }
}
