<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'ferenc.kis@sze.hu',
            'email' => 'Ferenc Kis  ',
            'role' => 'restaurantAdmin',
            'restaurant_id' => 1,
            'password' => '12345678'
        ]);

        User::factory()->create([
            'name' => 'laszlo.nagy@dineeasy.com ',
            'email' => 'Laszlo Nagy',
            'role' => 'dineEasyAdmin',
            'password' => '12345678'
        ]);

    }
}
