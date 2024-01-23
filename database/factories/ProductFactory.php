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
            'category_id' => rand(1,5),
            'title' => fake()->title(),
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(200,200,'png'),
            'quantity' => fake()->numberBetween(4,5),
            'price' => fake()->numberBetween(10,2),
            'discount_price' => fake()->numberBetween(5,2),
        ];
    }
}
