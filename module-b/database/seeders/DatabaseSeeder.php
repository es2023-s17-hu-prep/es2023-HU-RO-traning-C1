<?php

namespace Database\Seeders;

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
         */
        $this->readFile('/restaurants.csv')->each(function ($r) {
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
         */
        $this->readFile('/reviews.csv')->each(function ($r) {
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
         */
        $this->readFile('/reservations.csv')->each(function ($r) {
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
         */
        $this->readFile('/menus.csv')->each(function ($r) {
            $split = explode(',', $r);

            Menu::create([
                'id' => $split[0],
                'restaurant_id' => $split[1],
                'dish_name' => $split[2],
                'price' => $split[3],
            ]);
        });

        /**
         * Create the two users
         */
        User::create([
            'name' => 'Laszlo Nagy',
            'email' => 'laszlo.nagy@dineeasy.com',
            'password' => '12345678',
            'role' => 'dineEasyAdmin',
        ]);
        User::create([
            'name' => 'Ferenc Kis',
            'email' => 'ferenc.kis@sze.hu',
            'password' => '12345678',
            'restaurant_id' => 1,
        ]);
    }

    /**
     * Function to read file easily
     */
    public function readFile(string $fileName)
    {
        return File::lines(__DIR__ . $fileName)
            ->collect()
            ->skip(1) // skip the headers
            ->filter(fn ($i) => strlen($i) > 1); // filter the empty lines
    }
}
