<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Public Routes
 */
Route::middleware('guest')->group(function () {
    // login
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [UserController::class, 'login']);

    // register
    Route::view('/register', 'auth.register');
    Route::post('/register', [UserController::class, 'register']);
});

/**
 * Protected routes
 */
Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    // logout
    Route::post('/logout', [UserController::class, 'logout']);

    // admin routes
    Route::middleware('admin')->group(function () {
        Route::post('/jump-in/{restaurant}', [DashboardController::class, 'jumpIn']);
        Route::post('/jump-back', [DashboardController::class, 'jumpBack']);
    });

    // restaurant admin routes
    Route::middleware('restaurant')->group(function () {
        // edit
        Route::view('/edit', 'restaurant.edit');
        Route::put('/restaurant', [RestaurantController::class, 'update']);

        // reviews
        Route::view('/reviews', 'reviews.index');

        // menu
        Route::prefix('/menu')->group(function () {
            Route::view('/', 'menu.index');
            Route::view('/new', 'menu.create');
            Route::post('/', [MenuController::class, 'store']);
            Route::get('/{menu}', [MenuController::class, 'edit']);
            Route::put('/{menu}', [MenuController::class, 'update']);
            Route::delete('/{menu}', [MenuController::class, 'destroy']);
        });

        // reservations
        Route::prefix('/reservations')->group(function () {
            Route::view('/', 'reservations.index');
            Route::patch('/{reservation}', [ReservationController::class, 'changeConfirmStatus']);
        });
    });
});
