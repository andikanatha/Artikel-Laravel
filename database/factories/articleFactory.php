<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article>
 */
class articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'publisher_id' => mt_rand(1,20),
            'tittle' => fake()->sentence(3),
            'abstract' => fake()->paragraph(1, false),
            'description' => fake()->paragraph(),
            'author' => fake()->name(),
            'views' => mt_rand(1,10000),
            'article_date' => fake()->date(),
        ];
    }
}
