<?php

namespace Database\Factories;

use App\Models\Candy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Candy>
 */
class CandyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Gummy Bear', 'Sour Worm', 'Lollipop', 'Chocolate Truffle', 'Caramel Chew', 'Mint Drop', 'Marshmallow', 'Licorice Twist']),
            'taste' => fake()->randomElement(['choclate', 'fruit']),
            'diet' => fake()->randomElement(['lactosfree', 'vegan']),
        ];
    }
}
