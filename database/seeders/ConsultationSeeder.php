<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Solution;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Seed a few example consultation requests for development.
     */
    public function run(): void
    {
        if (! Solution::query()->exists()) {
            Solution::factory()->count(4)->create();
        }

        Consultation::factory()->count(6)->create();
    }
}
