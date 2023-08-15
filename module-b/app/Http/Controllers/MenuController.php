<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Restaurant $restaurant)
    {
        return view("menus.index", ["menus" => $restaurant->menus()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Restaurant $restaurant)
    {
        return view("menus.create", ["restaurant" => $restaurant]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Restaurant $restaurant)
    {
        $data = $request->validate([
            "name" => "required|min:1|max:255|unique:menus,dish_name",
            "price" => "required|numeric"
        ]);
        $menu = new Menu();
        $menu->dish_name = $data["name"];
        $menu->price = $data["price"];
        $menu->restaurant_id = $restaurant->id;
        $menu->save();
        return to_route("restaurants.menus.index", ["restaurant" => $restaurant]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("menus.edit", ["menu" => Menu::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Menu::findOrFail($id);
        $data = $request->validate([
            "name" => "required|min:1|max:255|unique:menus,dish_name",
            "price" => "required|numeric"
        ]);

        $menu->dish_name = $data["name"];
        $menu->price = $data["price"];
        $menu->save();
        return to_route("restaurants.menus.index", ["restaurant" => $menu->restaurant_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);
        $restaurant_id = $menu->restaurant_id;
        $menu->delete();
        return to_route("restaurants.menus.index", ["restaurant" => $restaurant_id]);
    }
}
