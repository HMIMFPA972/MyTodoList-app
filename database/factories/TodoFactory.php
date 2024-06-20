<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->text(15),
            "description" => fake()->realText(150),
            // "price" => fake()->randomFloat(2, 0.5, 100)
            "status" => fake()->boolean(),
        ];
    }
}
