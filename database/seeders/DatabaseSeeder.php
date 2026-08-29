<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Web Administrator',
            'email' => 'admin@southendtech.co.ke',
        ]);

        $this->call([
            ServiceSeeder::class,
            SolutionSeeder::class,
            IndustrySeeder::class,
            BlogSeeder::class,
            TeamMemberSeeder::class,
            TestimonialSeeder::class,
            WebinarSeeder::class,
            CaseStudySeeder::class,
            JobOpeningSeeder::class,
            ConsultationSeeder::class,
            PartnerSeeder::class,
        ]);
    }
}
