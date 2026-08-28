<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMember::create([
            'name' => 'Joash Kosiba',
            'role' => 'CEO',
            'bio' => null,
            'photo' => null,
            'is_published' => true,
            'sort_order' => 1,
        ]);

        TeamMember::create([
            'name' => 'Florence Jelagat',
            'role' => 'Admin and Data Analyst',
            'bio' => null,
            'photo' => null,
            'is_published' => true,
            'sort_order' => 2,
        ]);

        TeamMember::create([
            'name' => 'Tom Abuta',
            'role' => 'Cybersecurity and IT Risk Analyst',
            'bio' => null,
            'photo' => null,
            'is_published' => true,
            'sort_order' => 3,
        ]);
    }
}
