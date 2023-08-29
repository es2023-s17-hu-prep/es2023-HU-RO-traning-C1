<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Creates a new menu item
     */
    public function store(MenuRequest $request)
    {
        // create the menu item
        $request->merge(['restaurant_id' => auth()->user()->restaurant->id]);
        Menu::create($request->all());

        return redirect('/menu');
    }

    /**
     * Returns the menu edit form
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', ['menu' => $menu]);
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        // update the menu
        $menu->update($request->validated());
        return redirect('/menu');
    }

    /**
     * Deletes a menu
     */
    public function destroy(Menu $menu)
    {
        // delete the menu
        $menu->delete();
        return redirect('/menu');
    }
}
