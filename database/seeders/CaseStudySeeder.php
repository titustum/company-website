<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseStudy::create([
            'slug' => 'strengthening-cybersecurity-for-aero-club-of-east-africa',

            'title' => 'Strengthening Cybersecurity for Aero Club of East Africa',

            'subtitle' => 'A tailored cybersecurity engagement designed around the organization\'s operational environment.',

            'client_name' => 'Aero Club of East Africa',

            'industry' => 'Aviation',

            'category' => 'Cybersecurity',

            'service' => 'Cybersecurity Solutions',

            'short_description' =>
                'South-End Tech helped Aero Club of East Africa strengthen its cybersecurity posture through a tailored security engagement designed around its specific operational requirements.',

            'description' => '
                <p>
                    Organizations operating in the aviation sector rely on technology,
                    connected systems, digital communication, and business-critical
                    information to maintain efficient and reliable operations.
                </p>

                <p>
                    Aero Club of East Africa engaged South-End Tech to strengthen its
                    cybersecurity posture and address security requirements within
                    its operational environment.
                </p>

                <p>
                    Rather than applying a generic security package, South-End Tech
                    took time to understand the organization, assess its requirements,
                    and recommend security measures aligned with its specific needs.
                </p>
            ',

            'challenge' => '
                <p>
                    Aero Club of East Africa needed to strengthen its cybersecurity
                    capabilities while ensuring that the security measures introduced
                    were appropriate for its organization and day-to-day operations.
                </p>

                <p>
                    The organization required a cybersecurity partner capable of
                    understanding its environment, identifying relevant risks, and
                    implementing practical security measures without unnecessarily
                    complicating its operations.
                </p>
            ',

            'approach' => '
                <p>
                    South-End Tech began by taking time to understand the organization,
                    its technology environment, operational requirements, and security
                    concerns.
                </p>

                <p>
                    Our team followed a practical, security-first approach focused on
                    identifying relevant risks and designing controls that addressed
                    the organization\'s actual requirements.
                </p>
            ',

            'solution' => '
                <p>
                    South-End Tech designed and provided a tailored cybersecurity
                    solution focused on improving the organization\'s overall security
                    posture.
                </p>

                <p>
                    The engagement incorporated appropriate cybersecurity controls,
                    security recommendations, and protection measures based on the
                    organization\'s operational environment.
                </p>

                <p>
                    The solution was deliberately tailored rather than treated as a
                    one-size-fits-all deployment.
                </p>
            ',

            'implementation' => '
                <p>
                    The implementation was carried out collaboratively with the
                    organization to ensure that the recommended security measures
                    aligned with its operational requirements.
                </p>

                <p>
                    South-End Tech provided guidance throughout the engagement and
                    ensured that the solution was configured and positioned to provide
                    practical value to the organization.
                </p>
            ',

            'outcome' => '
                <p>
                    Aero Club of East Africa strengthened its cybersecurity posture
                    with a solution specifically aligned to its organizational needs.
                </p>

                <p>
                    The engagement provided the organization with improved security
                    capabilities and a technology partner that understood its
                    requirements and priorities.
                </p>
            ',

            'objectives' => [
                'Strengthen the organization\'s cybersecurity posture',
                'Identify and address relevant cybersecurity risks',
                'Implement security measures aligned with operational requirements',
                'Improve protection of business-critical systems and information',
                'Establish a practical long-term approach to cybersecurity',
            ],

            'key_challenges' => [
                'Evolving cybersecurity threats',
                'Protecting business-critical systems and information',
                'Ensuring security measures fit the organization\'s operational environment',
                'Balancing security requirements with day-to-day operations',
                'Need for a cybersecurity solution tailored to the organization',
            ],

            'services' => [
                'Cybersecurity Assessment',
                'Security Advisory',
                'Cybersecurity Solutions',
                'Security Controls Implementation',
                'Cybersecurity Support',
            ],

            'technologies' => [
                'Endpoint Security',
                'Network Security',
                'Security Monitoring',
                'Threat Protection',
                'Security Controls',
            ],

            'results' => [
                'Strengthened cybersecurity posture',
                'Improved protection of business-critical systems',
                'Security measures aligned with operational requirements',
                'Improved understanding of cybersecurity risks',
                'A tailored security solution designed around the organization',
            ],

            'highlights' => [
                'Security-first engagement',
                'Tailored cybersecurity solution',
                'Organization-specific risk assessment',
                'Practical implementation approach',
                'Ongoing technology partnership',
            ],

            'testimonial' =>
                'Outstanding cybersecurity service provision. They took their time and ensured the solution was specifically catered for our company.',

            'testimonial_author' => 'Aero Club of East Africa',

            'testimonial_role' => 'Client',

            'hero_image' => null,

            'images' => [],

            'meta_title' =>
                'Aero Club of East Africa Cybersecurity Case Study | South-End Tech',

            'meta_description' =>
                'Discover how South-End Tech helped Aero Club of East Africa strengthen its cybersecurity posture with a tailored cybersecurity solution.',

            'is_published' => true,

            'is_featured' => true,

            'sort_order' => 1,

            'published_at' => now(),
        ]);
    }
}
