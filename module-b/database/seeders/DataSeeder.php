<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'name' =>"Szép Étterem",
            'location' =>"Budapest",
            'cuisine' =>"Hungarian",
            'rating' =>4.6,
            ]);
Restaurant::create([
            'name' =>"La Piața",
            'location' =>"Bucharest",
            'cuisine' =>"Romanian",
            'rating' =>4.3,
            ]);
Restaurant::create([
            'name' =>"Gospoda Krakowska",
            'location' =>"Warsaw",
            'cuisine' =>"Polish",
            'rating' =>4.8,
            ]);
Restaurant::create([
            'name' =>"Fisherman's Hut",
            'location' =>"Budapest",
            'cuisine' =>"Seafood",
            'rating' =>4.2,
            ]);
Restaurant::create([
            'name' =>"Casa del Gusto",
            'location' =>"Bucharest",
            'cuisine' =>"Italian",
            'rating' =>4.4,
            ]);
Restaurant::create([
            'name' =>"Kék Duna Étterem",
            'location' =>"Budapest",
            'cuisine' =>"Hungarian",
            'rating' =>4.5,
            ]);
Restaurant::create([
'name' => "Brânza și Mămăligă",
'location' => "Cluj-Napoca",
'cuisine' => "Romanian",
'rating' => 4.2,
]);
Restaurant::create([
'name' =>"Czerwona Karczma",
'location' =>"Krakow",
'cuisine' =>"Polish",
'rating' =>4.6,
]);
Restaurant::create([
'name' =>"Móló Rózsa Étterem",
'location' =>"Budapest",
'cuisine' =>"Seafood",
'rating' =>4.7,
]);
Restaurant::create([
'name' =>"Trattoria Bella",
'location' =>"Varna",
'cuisine' =>"Italian",
'rating' =>4.1,
]);
Restaurant::create([
'name' =>"Paradicsom Étterem",
'location' =>"Szeged",
'cuisine' =>"Hungarian",
'rating' =>4.3,
]);
Restaurant::create([
'name' =>"Sarmale Bistro",
'location' =>"Timisoara",
'cuisine' =>"Romanian",
'rating' =>4.7,
]);
Restaurant::create([
'name' =>"Smaczne Pierogi",
'location' =>"Wroclaw",
'cuisine' =>"Polish",
'rating' =>4.5,
]);
Restaurant::create([
'name' =>"Halász Fogadó",
'location' =>"Székesfehérvár",
'cuisine' =>"Seafood",
'rating' =>4.4,
]);
Restaurant::create([
'name' => "Vivace Ristorante",
'location' => "Bucharest",
'cuisine' => "Italian",
'rating' => 4.8,
]);

 
    }
}
// restaurant_id,name,location,cuisine,rating
