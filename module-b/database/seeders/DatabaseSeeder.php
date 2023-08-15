<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Review;
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
        /**
         * Create the restaurants
         * restaurant_id,name,location,cuisine
         */
        $this->readFile('/restaurants.csv')->each(function($r) {
            $split = explode(',', $r);

            Restaurant::create([
                'id' => $split[0],
                'name' => $split[1],
                'location' => $split[2],
                'cuisine' => $split[3],
            ]);
        });

        /**
         * Create the reviews
         * review_id,restaurant_id,user_name,rating,comment
         */
        $this->readFile('/reviews.csv')->each(function($r) {
            $split = explode(',', $r);

            Review::create([
                'id' => $split[0],
                'restaurant_id' => $split[1],
                'user_name' => $split[2],
                'rating' => $split[3],
                'comment' => $split[4],
            ]);
        });

        /**
         * Create the reservations
         * reservation_id,restaurant_id,user_name,date,time,party_size
         */
        $this->readFile('/reservations.csv')->each(function($r) {
            $split = explode(',', $r);

            Reservation::create([
                'id' => $split[0],
                'restaurant_id' => $split[1],
                'user_name' => $split[2],
                'date' => $split[3],
                'time' => $split[4],
                'party_size' => $split[5],
            ]);
        });

        /**
         * Create the menu items
         * menu_id,restaurant_id,dish_name,price
         */
        $this->readFile('/menus.csv')->each(function($r) {
            $split = explode(',', $r);

            Menu::create([
                'id' => $split[0],
                'restaurant_id' => $split[1],
                'dish_name' => $split[2],
                'price' => $split[3],
            ]);
        });
        
        /**
         * Create two users
         */
        User::create([
            'name' => 'Ferenc Kis',
            'email' => 'ferenc.kis@sze.hu',
            'password' => '12345678',
            'restaurant_id' => 1,
        ]);
        User::create([
            'name' => 'Laszlo Nagy',
            'email' => 'laszlo.nagy@dineeasy.com',
            'password' => '12345678',
            'role' => 'dineEasyAdmin',
        ]);
    }

    /**
     * Function to read file easily
     */
    public function readFile(string $fileName) {
        return File::lines(__DIR__ . $fileName)->collect()->skip(1)->filter(fn($i) => strlen($i) > 1);
    }
}
