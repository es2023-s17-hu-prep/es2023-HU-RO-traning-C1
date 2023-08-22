<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Shows the edit form
     */
    public function edit()
    {
        return view('restaurant.edit');
    }

    /**
     * Updates a restaurant
     */
    public function update(RestaurantRequest $request)
    {
        // update the restaurant
        auth()->user()->restaurant->update($request->validated());

        return redirect('/dashboard');
    }
}
