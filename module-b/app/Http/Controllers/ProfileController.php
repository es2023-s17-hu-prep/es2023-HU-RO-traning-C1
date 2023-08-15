<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Show profile form
    public function index() {
        return view('edit-profile');
    }

    // Update profile details
    public function update(Request $request)
    {
        $request->validate(['name' => 'required|string', 'cuisine' => 'required|string', 'location' => 'required|string']);
        Restaurant::where('id', $request->user()->restaurantId)->update([
            'name' => $request->get('name'),
            'cuisine' => $request->get('cuisine'),
            'location' => $request->get('location'),
        ]);

        return redirect('home');
    }
}
