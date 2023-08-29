<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the dashboard for the user
     */
    public function __invoke()
    {
        // If the user is a super admin, must select restaurant
        if(Auth::user()->restaurant_id === null && Auth::user()->isSuperAdmin()){
            return redirect('restaurant_select');
        }

        return view('dashboard');
    }
}
