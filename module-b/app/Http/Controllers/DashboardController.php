<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Dashboard main route handler
     */
    public function index()
    {
        // if the user has a restaurant
        if (auth()->user()->restaurant_id) {
            return view('restaurant.index');
        }

        // admin users
        return view('admin.index', ['restaurants' => Restaurant::all()]);
    }

    /**
     * Route that handles the functionality of selecting a restaurant by an admin.
     */
    public function jumpIn(Restaurant $restaurant)
    {
        // find and update the user
        $user = User::find(auth()->user()->getAuthIdentifier());
        $user->update(['restaurant_id' => $restaurant->id]);

        return redirect('/');
    }

    /**
     * Route that handles the functionality of returning to the admin dashboard.
     */
    public function jumpBack()
    {
        // find and update the user
        $user = User::find(auth()->user()->getAuthIdentifier());
        $user->update(['restaurant_id' => null]);

        return redirect('/');
    }
}
