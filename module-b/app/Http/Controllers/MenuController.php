<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('menu.index', ['menuItems' => $menuItems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'string|required', 'price' => 'required|numeric']);
        MenuItem::create([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'restaurantId' => Auth::user()->restaurantId
        ]);
        return redirect('menu');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuItem $menu)
    {
        return view('menu.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuItem $menu)
    {
        $request->validate(['name' => 'string|required', 'price' => 'required|numeric']);
        $menu->update([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
        ]);
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuItem $menu)
    {
        $menu->delete();
        return redirect('menu');
    }
}
