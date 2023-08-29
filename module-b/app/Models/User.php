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

    // Max tries before lock out
    const MAX_TRIES = 3;

    // Duration of the lock in seconds
    const LOCK_DURATION = 30;

    protected $guarded = [];

    protected $casts = [
        'locked_out_until' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Checks if a user is a super admin
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->role === 'dineEasyAdmin';
    }

    /**
     * Restaurant relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
