<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MenuItem;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(Filesystem $filesystem): void
    {
        // Import CSVs

        $menus = $this->readCsv("menus.csv", $filesystem);
        $reservations = $this->readCsv("reservations.csv", $filesystem);
        $restaurants = $this->readCsv("restaurants.csv", $filesystem);
        $reviews = $this->readCsv("reviews.csv", $filesystem);

        DB::table('menu_items')->insert($menus->map(fn($m) => ["id" => $m[0], "restaurantId" => $m[1], "name" => $m[2], "price" => $m[3]])->toArray());
        //reservation_id,restaurant_id,user_name,date,time,party_size
        DB::table('reservations')->insert($reservations->map(fn($r) => ["id" => $r[0], "restaurantId" => $r[1], "name" => $r[2], "date" => $r[3], "time" => $r[4], "size" => $r[5]])->toArray());
        //restaurant_id,name,location,cuisine,rating
        DB::table('restaurants')->insert($restaurants->map(fn($m) => ["id" => $m[0], "name" => $m[1], "location" => $m[2], "cuisine" => $m[3], "rating" => $m[4]])->toArray());
        // review_id,restaurant_id,user_name,rating,comment
        DB::table('reviews')->insert($reviews->map(fn($m) => ["id" => $m[0], "restaurantId" => $m[1], "userName" => $m[2], "rating" => $m[3], "comment" => $m[4]])->toArray());

        // Create users

        User::create(['email' => 'ferenc.kis@sze.hu', 'name' => 'Ferenc Kis', 'role' => 'restaurantAdmin', 'restaurantId' => 1, 'password' => bcrypt('12345678')]);
        User::create(['email' => 'laszlo.nagy@dineeasy.com', 'name' => 'Laszlo Nagy', 'role' => 'dineEasyAdmin', 'restaurantId' => null, 'password' => bcrypt('12345678')]);
    }

    /**
     * Reads a CSV into a collection
     * @param string $filename
     * @param Filesystem $filesystem
     * @return \Illuminate\Support\Collection
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    private function readCsv(string $filename, Filesystem $filesystem): \Illuminate\Support\Collection
    {
        // 1. read file
        $contents = (string)$filesystem->get(sprintf("%s/%s", __DIR__, $filename));

        // 2. get header columns
        $columns = explode(',', mb_split('\r\n', $contents)[0]);

        // 3. split by lines, remove empty lines and split lines by ','
        $lines = collect(mb_split('\r\n', $contents))->filter(fn($r) => $r !== "")->map(fn($r) => explode(',', $r, count($columns)));

        // 4. remove header line
        $lines->shift();

        return $lines;
    }
}
