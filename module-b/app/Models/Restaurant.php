<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
