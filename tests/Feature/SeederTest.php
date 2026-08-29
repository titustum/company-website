<?php

namespace Tests\Feature;

use App\Models\Consultation;
use App\Models\Solution;
use Database\Seeders\ConsultationSeeder;
use Database\Seeders\SolutionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_solution_seeder_seeds_only_the_four_core_solutions(): void
    {
        $this->seed(SolutionSeeder::class);

        $this->assertCount(4, Solution::query()->pluck('slug')->all());
    }

    public function test_consultation_seeder_reuses_seeded_solutions_instead_of_creating_new_ones(): void
    {
        $this->seed([SolutionSeeder::class, ConsultationSeeder::class]);

        $this->assertCount(4, Solution::query()->pluck('slug')->all());
        $this->assertSame(6, Consultation::query()->count());

        $consultsToMissingSolutions = Consultation::query()
            ->whereNotIn('solution_id', Solution::query()->pluck('id'))
            ->count();

        $this->assertSame(0, $consultsToMissingSolutions);
    }
}
