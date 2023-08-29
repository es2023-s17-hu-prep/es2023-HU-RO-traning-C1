<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed data
        \DB::unprepared(File::get(__DIR__ . '/dump.sql'));

        // Create restaurant admin
        User::create([
            'email' => 'ferenc.kis@sze.hu',
            'name' => 'Ferenc Kis',
            'role' => 'restaurantAdmin',
            'restaurant_id' => 1,
            'password' => bcrypt('12345678')
        ]);

        // Create dineEasy admin
        User::create([
            'email' => 'laszlo.nagy@dineeasy.com',
            'name' => 'Laszlo Nagy',
            'role' => 'dineEasyAdmin',
            'restaurant_id' => null,
            'password' => bcrypt('12345678')
        ]);
    }
}
