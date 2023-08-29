<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the menu items.
     */
    public function index()
    {
        $menuItems = Auth::user()->restaurant->menuItems;
        return view('menu-item.index', compact('menuItems'));
    }

    /**
     * Show the form for creating a new menu item.
     */
    public function create()
    {
        return view('menu-item.create');
    }

    /**
     * Store a newly created menu item in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);

        MenuItem::create([...$valid, 'restaurant_id' => Auth::user()->restaurant_id]);

        return redirect('menu')->with('message', 'Menu item created');
    }

    /**
     * Show the form for editing the specified menu item.
     */
    public function edit(MenuItem $menu)
    {
        if($menu->restaurant_id != Auth::user()->restaurant_id){
            return redirect('dashboard');
        }
        return view('menu-item.edit', compact('menu'));
    }

    /**
     * Update the specified menu item in storage.
     */
    public function update(Request $request, MenuItem $menu)
    {
        $valid = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);
        if($menu->restaurant_id != Auth::user()->restaurant_id){
            return redirect('dashboard');
        }
        $menu->update($valid);

        return redirect('menu')->with('message', 'Menu item saved');
    }

    /**
     * Remove the specified menu item from storage.
     */
    public function destroy(MenuItem $menu)
    {
        if($menu->restaurant_id != Auth::user()->restaurant_id){
            return redirect('dashboard');
        }
        $menu->delete();
        return redirect('menu')->with('message', 'Menu item removed');
    }
}
