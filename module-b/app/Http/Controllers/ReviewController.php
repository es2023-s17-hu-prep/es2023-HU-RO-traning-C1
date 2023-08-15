<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // List reviews
    public function index() {
        $reviews = Review::all();
        return view('reviews', ["reviews" => $reviews]);
    }
}
