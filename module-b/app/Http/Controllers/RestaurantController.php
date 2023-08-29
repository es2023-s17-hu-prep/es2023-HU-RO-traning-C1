<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Update restaurant
     */
    public function update(UpdateRestaurantRequest $request)
    {
        auth()->user()->restaurant->update($request->all());
        return redirect('/');
    }
}
