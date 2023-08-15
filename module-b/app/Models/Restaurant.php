<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "cusine", "location", "rating"
    ];

    public function user() {
        return $this->hasOne(User::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

    public function menus() {
        return $this->hasMany(Menu::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
