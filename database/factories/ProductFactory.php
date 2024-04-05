<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "product_name" =>fake()->name(),
            "product_code" =>fake()->name(),
            "buying_price" =>fake()->numberBetween(1000,100000),
            "selling_price" =>fake()->numberBetween(1000,100000),
            "stock" =>fake()->numberBetween(200,10000),
        ];
    }
}
