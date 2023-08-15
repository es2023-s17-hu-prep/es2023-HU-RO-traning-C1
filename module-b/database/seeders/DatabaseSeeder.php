<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Restaurant::factory()->create();
        
        \App\Models\User::factory()->create([
            "name" => "Ferenc Kis",
            "email" => "ferenc.kis@sze.hu",
            "password" => Hash::make("12345678"),
            "restaurant_id" => 1,
            "role" => false
        ]);

        \App\Models\User::factory()->create([
            "name" => "Laszlo Nagy",
            "email" => "laszlo.nagy@dineeasy.com",
            "password" => Hash::make("12345678"),
            "role" => true
        ]);
    }
}
