<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->sentence(3),
            "location" => fake()->sentence(3),
            "cusine" => fake()->sentence(),
            "rating" => fake()->randomFloat($min = 1, $max = 5),
            "created_at" => fake()->dateTimeBetween("-20 days", "now"),
            "updated_at" => fake()->dateTimeBetween("-20 days", "now")
        ];
    }
}
