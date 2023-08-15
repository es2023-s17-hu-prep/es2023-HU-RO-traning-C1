<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RegistrationController;

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
Route::get('/login', [LoginController::class, "index"]);
Route::get('/register', [RegistrationController::class, "index"]);

Route::post('/login', [LoginController::class, "login"]);
Route::post('/register', [RegistrationController::class, "register"]);

Route::post('/logout', [LoginController::class, "logout"]);


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [RestaurantController::class, "index"]);

    Route::get('/manage-menu/{id}', [MenuController::class, "index"]);
    Route::get('/manage-menu/{id}/create', [MenuController::class, "create"]);
    Route::post('/manage-menu/{id}', [MenuController::class, "store"]);
});

Route::get('/', function () {
    return redirect('/dashboard');

});


/// pma.localhost