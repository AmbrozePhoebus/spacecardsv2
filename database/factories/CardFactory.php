<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->words(2,true),
            'category'=> fake()->randomElement(['Spaceships','Planets','Space Events']),
            'description'=> fake()->sentence(),
        ];
    }
}
