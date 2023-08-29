<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the restaurant profile form
     */
    public function show()
    {
        return view('profile');
    }

    /**
     * Update restaurant profile
     */
    public function update(Request $request)
    {
        // Validate the request
        $data = $request->validate([
            'name' => 'required|string',
            'cuisine' => 'required|string',
            'location' => 'required|string',
            'file' => 'nullable|file',
        ]);

        // Update logo if needded
        if($request->file('file')){
            $data['logo_path'] = $request->file('file')->store('public');
            unset($data['file']);
        }

        Auth::user()->restaurant()->update($data);

        return redirect('dashboard')->with('message', 'Profile saved');
    }
}
