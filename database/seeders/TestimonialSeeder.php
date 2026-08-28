<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /** * Run the database seeds. */ public function run(): void
    {
        Testimonial::create([
            "client_name" => "World Vision Kenya",
            "client_role" => null,
            "organization" => "World Vision Kenya",
            "organization_logo" => null,
            "client_photo" => null,
            "quote" =>
                "South-End Tech Limited is content with the services provided.",
            "service" => "Data Protection Services",
            "industry" => "NGO & Development",
            "is_featured" => true,
            "is_published" => true,
            "sort_order" => 1,
        ]);
        Testimonial::create([
            "client_name" => "Dalberg",
            "client_role" => null,
            "organization" => "Dalberg",
            "organization_logo" => null,
            "client_photo" => null,
            "quote" =>
                "South-End Tech has provided Data Protection Consultancy services including support for registration with the Office of the Data Protection Commissioner.",
            "service" => "Data Protection Partner",
            "industry" => "Consulting",
            "is_featured" => true,
            "is_published" => true,
            "sort_order" => 2,
        ]);
        Testimonial::create([
            "client_name" => "Aero Club of East Africa",
            "client_role" => null,
            "organization" => "Aero Club of East Africa",
            "organization_logo" => null,
            "client_photo" => null,
            "quote" =>
                "Outstanding cybersecurity service provision. They took their time and ensured the solution was specifically catered for our company.",
            "service" => "Cybersecurity Solutions",
            "industry" => "Aviation",
            "is_featured" => true,
            "is_published" => true,
            "sort_order" => 3,
        ]);
    }
}
