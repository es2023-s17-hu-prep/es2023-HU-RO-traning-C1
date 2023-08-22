<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Returns the admin view with the restaurants.
     */
    public function index()
    {
        return view('admin.admin', ['restaurants' => Restaurant::all()]);
    }

    /**
     * Act as a restaurant owner
     */
    public function actAsARestaurantOwner(Request $request)
    {
        // update the restaurant_id field of the admin
        $user = User::find(auth()->user()->id);
        $user->update(['restaurant_id' => $request->get('restaurantId')]);

        return redirect('dashboard');
    }

    /**
     * Sets the restaurant_id null and returns to the admin
     */
    public function backToAdmin()
    {
        // update the restaurant_id field of the admin
        $user = User::find(auth()->user()->id);
        $user->update(['restaurant_id' => null]);

        return redirect('admin');
    }
}
