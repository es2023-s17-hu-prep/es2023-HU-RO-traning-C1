<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function menu(){
        return $this->hasMany(MenuItem::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
