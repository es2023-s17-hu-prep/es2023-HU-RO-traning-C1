<?php

namespace App\Console\Commands;

use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Console\Command;

class LoadCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:load-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $stream = fopen("restaurants.csv", "r");
        $csv = fgetcsv($stream);
        while (($csv = fgetcsv($stream)) !== false) {
            if (count($csv) === 5) {
                $restaurant = new Restaurant();
                $restaurant->name = $csv[1];
                $restaurant->location = $csv[2];
                $restaurant->cusine = $csv[3];
                $restaurant->rating = $csv[4];
                $restaurant->save();
            }
        }

        $stream = fopen("menus.csv", "r");
        $csv = fgetcsv($stream);
        while (($csv = fgetcsv($stream)) !== false) {
            if (count($csv) === 4) {
                $menu = new Menu();
                $menu->restaurant_id = $csv[1];
                $menu->dish_name = $csv[2];
                $menu->price = $csv[3];
                $menu->save();
            }
        }

        $stream = fopen("reviews.csv", "r");
        $csv = fgetcsv($stream);
        while (($csv = fgetcsv($stream)) !== false) {
            if (count($csv) === 5) {
                $review = new Review();
                $review->restaurant_id = $csv[1];
                $review->user_name = $csv[2];
                $review->rating = $csv[3];
                $review->comment = $csv[4];
                $review->save();
            }
        }

        $stream = fopen("reservations.csv", "r");
        $csv = fgetcsv($stream);
        while (($csv = fgetcsv($stream)) !== false) {
            if (count($csv) === 5) {
                $reservation = new Reservation();
                $reservation->restaurant_id = $csv[1];
                $reservation->user_name = $csv[2];
                $reservation->when = $csv[3] . " " . $csv[4];
                $reservation->party_size = $csv[4];
                $reservation->save();
            }
        }
    }
}
