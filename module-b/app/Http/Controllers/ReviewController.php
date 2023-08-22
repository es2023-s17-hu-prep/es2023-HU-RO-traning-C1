<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Shows the reviews
     */
    public function index()
    {
        return view('reviews.index');
    }
}
