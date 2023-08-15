<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [LoginController::class, "loginForm"])
    ->name("login");
Route::post("/login", [LoginController::class, "login"])
    ->name("login.submit");
Route::get("/logout", [LoginController::class, "logout"])
    ->name("login.logout");
Route::view("/register", "auth.register")->name("register");
Route::post("/register", function (Request $request) {
    $data = $request->validate([
        "restaurant_name" => "required|min:1|max:255",
        "cusine" => "required|min:1|max:255",
        "location" => "required|min:1|max:255",
        "name" => "required|min:1|max:255",
        "email" => "required|email|min:1|max:255|unique:users,email",
        "password" => "required|min:8|max:255"
    ]);

    $restaurant = new Restaurant();
    $restaurant->name = $data["restaurant_name"];
    $restaurant->cusine = $data["cusine"];
    $restaurant->location = $data["location"];
    $restaurant->rating = 1;
    $restaurant->save();

    $user = new User();
    $user->name = $data["name"];
    $user->email = $data["email"];
    $user->password = Hash::make($data["password"]);
    $user->restaurant_id = $restaurant->id;
    $user->role = false;
    $user->save();

    return to_route("restaurants.show", ["restaurant" => $restaurant->id]);
})->name("register.submit");


Route::middleware("auth")->group(function () {
    Route::resource("restaurants", RestaurantController::class);
    Route::resource("restaurants.menus", MenuController::class);
    Route::resource("restaurants.reviews", ReviewController::class);
});