<?php

use App\Http\Middleware\Restaurant;
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

Route::middleware('guest')->group(function () {
    // Guest routes

    Route::redirect('/login', '/');

    Route::get('/', [\App\Http\Controllers\AuthController::class, 'showLoginForm']);
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'authenticate']);

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm']);
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
});

Route::middleware(['auth', Restaurant::class])->group(function () {
    // Authenticated routes
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::get('/home', [\App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/select-restaurant', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/select-restaurant/{restaurant}', [\App\Http\Controllers\AdminController::class, 'selectRestaurant']);

    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index']);
    Route::post('/profile', [\App\Http\Controllers\ProfileController::class, 'update']);

    Route::resource('menu', \App\Http\Controllers\MenuController::class);

    Route::get('/reviews', [\App\Http\Controllers\ReviewController::class, 'index']);

});
