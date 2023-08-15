<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/**
 * Routes that only available for non authenticated users.
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/reg', [AuthController::class, 'regForm']);
    Route::post('/register', [AuthController::class, 'register']);
});

/**
 * Routes that only available for authenticated users.
 */
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Routes for only dineEase admins
    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::post('/backToAdmin', [AdminController::class, 'backToAdmin']);
        Route::patch('/updateRestaurantId', [AdminController::class, 'actAsARestaurantOwner']);
    });

    // Routes for restaurant admins
    Route::middleware('owner')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);

        Route::get('/edit', [RestaurantController::class, 'edit']);
        Route::put('/restaurant', [RestaurantController::class, 'update']);

        Route::get('/reviews', [ReviewController::class, 'index']);

        Route::resource('/menu', MenuController::class)->except(['edit', 'update']);
        Route::get('/menu/update/{menuId}', [MenuController::class, 'edit']);
        Route::put('/menu', [MenuController::class, 'update']);
    });

    // Redirect based on their role
    Route::get('/', function () {
        return redirect(auth()->user()->role === 'restaurantAdmin' ? '/dashboard' : '/admin');
    });
});
