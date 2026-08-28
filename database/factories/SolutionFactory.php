<?php

namespace Database\Factories;

use App\Models\Solution;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Solution>
 */
class SolutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->sentence(3),
            'slug' => fake()->unique()->slug(3),
            'subtitle' => fake()->sentence(),
            'short_description' => fake()->paragraph(),
            'description' => '<p>'.fake()->paragraph().'</p>',
            'is_published' => true,
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
