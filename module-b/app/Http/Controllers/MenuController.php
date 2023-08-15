<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($index)
    {
        $restaurant = Restaurant::find($index);

        if (is_null($restaurant)) {
            return redirect('/dashboard');
        }
        $items = $restaurant->items;

        return view('admin.menu', [ "items"=> $items , "index" => $index]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($index)
    {
        return view('admin.createitem', [ "index" => $index, ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $index)
    {
        $input = $request->validate([
            "name" => ["required"],
            "price" => ['required', "numeric"]
        ]);
        if (is_null($index)) {
            return redirect('/dashboard');
        }

        MenuItem::create([
            "name" => $request->name,
            "price" => $request->price,
            "restaurant_id" => $index,
        ]);
        return redirect('manage-menu/'.$index);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
