<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\publisher>
 */
class publisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'name_publisher' => fake()->name(),
            'alamat' => fake()->city(),
            'email' => fake()->unique()->safeEmail(),
            'age' => mt_rand(1,100),
        ];
    }
}
