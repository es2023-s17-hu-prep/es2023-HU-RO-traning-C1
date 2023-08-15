<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class Restaurant
{
    // Provide the current restaurant for all the views
    public function handle(Request $request, Closure $next): Response
    {
        $restaurant = \App\Models\Restaurant::find($request->user()->restaurantId);
        View::share('restaurant', $restaurant);
        return $next($request);
    }
}
