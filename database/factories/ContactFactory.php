<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->numerify('+2547########'),
            'subject' => fake()->randomElement([
                'General Inquiry',
                'Data Protection',
                'Cybersecurity',
                'Data & AI',
                'Digital Consulting',
                'Partnership',
                'Careers',
            ]),
            'message' => fake()->paragraph(),
        ];
    }
}
