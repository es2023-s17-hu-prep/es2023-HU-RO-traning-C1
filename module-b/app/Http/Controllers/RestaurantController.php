<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Policies\RestaurantPolicy;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function __construct() {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("restaurants.index", ["restaurants" => Restaurant::all()]);
    }
    

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $this->authorizeResource(RestaurantPolicy::class, $restaurant);
        return view("restaurants.show", ["restaurant" => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        $this->authorizeResource(RestaurantPolicy::class, $restaurant);
        return view("restaurants.edit", ["restaurant" => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        return to_route("restaurants.show", [
            "restaurant" => $restaurant->update($request->validate([
                "name" => "required|min:1|max:255",
                "cusine" => "required|min:1|max:255",
                "location" => "required|min:1|max:255",
            ]))
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
