<?php

use Illuminate\Support\Facades\Route;

// Public routes for authentication
Route::get('login', [\App\Http\Controllers\AuthController::class, 'showLoginForm']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::get('register', [\App\Http\Controllers\AuthController::class, 'showRegistrationForm']);
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);

// Authenticated (guarded) paths
Route::middleware('auth')->group(function () {
    // Logout
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);

    // Dashboard
    Route::get('dashboard', \App\Http\Controllers\DashboardController::class);

    // Restaurant select
    Route::get('restaurant_select/{restaurant}', [\App\Http\Controllers\RestaurantSelectController::class, 'select']);
    Route::get('restaurant_select', [\App\Http\Controllers\RestaurantSelectController::class, 'show']);

    // Profile
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show']);
    Route::post('profile', [\App\Http\Controllers\ProfileController::class, 'update']);

    // Menu CRUD
    Route::resource('menu', \App\Http\Controllers\MenuItemController::class)->except('show');

    // Reviews
    Route::get('reviews', [\App\Http\Controllers\ReviewController::class, 'index']);

    // Reservations
    Route::get('reservations', [\App\Http\Controllers\ReservationController::class, 'index']);
    Route::post('reservations/{reservation}/confirm', [\App\Http\Controllers\ReservationController::class, 'confirm']);
    Route::post('reservations/{reservation}/cancel', [\App\Http\Controllers\ReservationController::class, 'cancel']);
});
