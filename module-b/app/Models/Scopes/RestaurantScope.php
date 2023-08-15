<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class RestaurantScope implements Scope
{
    // Filter for the current restaurant
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('restaurantId', Auth::user()->restaurantId);
    }
}
