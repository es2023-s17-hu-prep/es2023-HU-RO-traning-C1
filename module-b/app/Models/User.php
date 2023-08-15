<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const MAX_LOGIN_ATTEMPTS = 3;
    const LOCK_DURATION_SECONDS = 30;

    protected $guarded = [];

    protected $casts = ['lockedOutUntil' => 'datetime'];

    public function isSuperAdmin(){
        return $this->role === 'dineEasyAdmin';
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
