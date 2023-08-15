<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Show dashboard
    public function index(){
        if(Auth::user()->restaurantId === null){
            // If there is no restaurant selected, redirect the admin
            return redirect('select-restaurant');
        }
        return view('dashboard');
    }
}
