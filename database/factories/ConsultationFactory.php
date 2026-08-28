<?php

namespace Database\Factories;

use App\Enums\ConsultationStatus;
use App\Models\Consultation;
use App\Models\Solution;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'solution_id' => Solution::factory(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->numerify('+2547########'),
            'company' => fake()->company(),
            'preferred_date' => fake()->dateTimeBetween('+1 day', '+2 weeks')->format('Y-m-d'),
            'preferred_slot' => 'Morning (9:00am – 12:00pm)',
            'notes' => fake()->sentence(),
            'status' => ConsultationStatus::Pending,
        ];
    }
}
