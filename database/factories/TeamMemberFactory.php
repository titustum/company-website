<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'role' => fake()->jobTitle(),
            'bio' => fake()->paragraph(),
            'photo' => 'team-members/'.Str::slug(fake()->unique()->name()).'.png',
            'is_published' => true,
            'sort_order' => fake()->numberBetween(0, 10),
        ];
    }
}
