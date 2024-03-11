<?php

namespace Database\Factories;

use App\Models\Meow;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Meow>
 */
class MeowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->name(),
            'meowContents' => fake()->unique()->text(35),
        ];
    }
}
