<?php

namespace Database\Seeders;

use App\Models\Consultation;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Seed a few example consultation requests for development.
     */
    public function run(): void
    {
        Consultation::factory()->count(6)->create();
    }
}
