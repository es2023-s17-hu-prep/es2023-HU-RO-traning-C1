<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Show the menus page.
     */
    public function index()
    {
        return view('menu.index');
    }

    /**
     * Shows the create form
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Creates a new menu item
     */
    public function store(MenuRequest $request)
    {
        $request->merge(['restaurant_id' => auth()->user()->restaurant->id]);
        Menu::create($request->all());
        return redirect('/menu');
    }

    /**
     * Shows the edit form
     */
    public function edit(int $menuId)
    {
        return view('menu.edit', ['item' => Menu::find($menuId)]);
    }

    /**
     * Updates a menu item
     */
    public function update(MenuRequest $request)
    {
        $menu = Menu::find($request->id);
        $menu->update($request->all());
        return redirect('/menu');
    }

    /**
     * Removes a menu
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect('/menu');
    }
}
