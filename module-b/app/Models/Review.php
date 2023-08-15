<?php

namespace App\Models;

use App\Models\Scopes\RestaurantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected static function booted()
    {
        // Only list the current user's reviews
        static::addGlobalScope(new RestaurantScope());
    }
}
