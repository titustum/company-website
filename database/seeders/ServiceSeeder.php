<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Data Protection & Compliance',
                'slug' => 'data-protection-compliance',
                'subtitle' => 'Protect Data. Build Trust. Stay Compliant.',
                'short_description' => 'Practical data protection and compliance services that help organizations responsibly manage personal data and meet regulatory requirements.',
                'description' => <<<'HTML'
                    <p>Organizations collect and process more personal information than ever before. Without the right controls, this creates privacy, regulatory, and reputational risks.</p>

                    <p>South-End Tech helps organizations establish practical data protection frameworks that align with their operations, regulatory obligations, and business objectives.</p>

                    <p>From registration and compliance assessments to privacy audits and ongoing advisory support, we help organizations understand their responsibilities and build sustainable data protection practices.</p>
                HTML,
                'hero_image' => null,
                'icon' => 'shield-check-outline',
                'meta_title' => 'Data Protection & Compliance Services | South-End Tech',
                'meta_description' => 'Protect personal data and meet regulatory requirements with practical data protection and compliance services from South-End Tech.',
                'is_published' => true,
                'sort_order' => 1,
            ],

            [
                'title' => 'Data Governance & Management',
                'slug' => 'data-governance-management',
                'subtitle' => 'Turn Data Into a Trusted Business Asset.',
                'short_description' => 'Build reliable data governance and management practices that improve data quality, visibility, accountability, and decision-making.',
                'description' => <<<'HTML'
                    <p>Good decisions depend on reliable data. Yet many organizations struggle with fragmented information, inconsistent data standards, unclear ownership, and limited visibility.</p>

                    <p>South-End Tech helps organizations establish effective data governance and management frameworks that improve the way data is collected, organized, protected, shared, and used.</p>

                    <p>We combine governance principles, practical processes, technology, and organizational accountability to help transform data into a trusted business asset.</p>
                HTML,
                'hero_image' => null,
                'icon' => 'server-outline',
                'meta_title' => 'Data Governance & Management Services | South-End Tech',
                'meta_description' => 'Improve data quality, governance, management, and visibility with practical data solutions from South-End Tech.',
                'is_published' => true,
                'sort_order' => 2,
            ],

            [
                'title' => 'Cybersecurity Services',
                'slug' => 'cybersecurity-services',
                'subtitle' => 'Defend Your Organization Against Evolving Threats.',
                'short_description' => 'Proactive cybersecurity services designed to protect systems, users, networks, endpoints, and critical business information.',
                'description' => <<<'HTML'
                    <p>Cyber threats continue to evolve, targeting organizations of every size through ransomware, phishing, fraud, unauthorized access, malware, and other attack techniques.</p>

                    <p>South-End Tech helps organizations strengthen their security posture through practical cybersecurity solutions designed around their risk profile, technology environment, and operational requirements.</p>

                    <p>Our approach combines prevention, detection, response, resilience, and continuous improvement to help organizations reduce cyber risk and maintain business continuity.</p>
                HTML,
                'hero_image' => null,
                'icon' => 'shield-half-outline',
                'meta_title' => 'Cybersecurity Services | South-End Tech',
                'meta_description' => 'Strengthen your organization against modern cyber threats with cybersecurity services from South-End Tech.',
                'is_published' => true,
                'sort_order' => 3,
            ],

            [
                'title' => 'Data Science & Analytics',
                'slug' => 'data-science-analytics',
                'subtitle' => 'Unlock the Value Hidden in Your Data.',
                'short_description' => 'Use data analytics, visualization, and artificial intelligence to uncover insights and support better business decisions.',
                'description' => <<<'HTML'
                    <p>Organizations generate enormous amounts of data, but raw data only creates value when it can be understood and applied to real business decisions.</p>

                    <p>South-End Tech helps organizations transform data into actionable insights through analytics, visualization, data science, and artificial intelligence.</p>

                    <p>We help teams understand their data, identify trends, monitor performance, automate analysis, and develop data-driven strategies that support measurable outcomes.</p>
                HTML,
                'hero_image' => null,
                'icon' => 'analytics-outline',
                'meta_title' => 'Data Science & Analytics Services | South-End Tech',
                'meta_description' => 'Transform organizational data into actionable insights through analytics, visualization, data science, and AI.',
                'is_published' => true,
                'sort_order' => 4,
            ],

            [
                'title' => 'Digital Consulting',
                'slug' => 'digital-consulting',
                'subtitle' => 'Modernize Operations Through Smart Technology.',
                'short_description' => 'Technology consulting that helps organizations assess, modernize, and improve their digital systems and operations.',
                'description' => <<<'HTML'
                    <p>Technology should support your organization's objectives rather than become a source of unnecessary complexity.</p>

                    <p>South-End Tech provides digital consulting services that help organizations assess their current technology environment, identify opportunities for improvement, and develop practical digital transformation strategies.</p>

                    <p>We work with organizations to align technology investments with business objectives, security requirements, operational needs, and available resources.</p>
                HTML,
                'hero_image' => null,
                'icon' => 'bulb-outline',
                'meta_title' => 'Digital Consulting Services | South-End Tech',
                'meta_description' => 'Modernize your organization with practical digital consulting and technology transformation services.',
                'is_published' => true,
                'sort_order' => 5,
            ],

            [
                'title' => 'IT Managed Services',
                'slug' => 'it-managed-services',
                'subtitle' => 'Reliable Technology. Continuous Support.',
                'short_description' => 'Managed IT services that keep your systems secure, available, monitored, and aligned with your organization’s needs.',
                'description' => <<<'HTML'
                    <p>Reliable IT infrastructure is essential for organizations that depend on technology every day. Downtime, outdated systems, and unresolved technical issues can quickly affect productivity and business continuity.</p>

                    <p>South-End Tech provides managed IT services that help organizations maintain reliable, secure, and well-managed technology environments.</p>

                    <p>Our services can include infrastructure monitoring, technical support, system maintenance, network monitoring, security management, backup management, and technology advisory.</p>
                HTML,
                'hero_image' => null,
                'icon' => 'hardware-chip-outline',
                'meta_title' => 'Managed IT Services | South-End Tech',
                'meta_description' => 'Keep your technology secure, reliable, and available with managed IT services from South-End Tech.',
                'is_published' => true,
                'sort_order' => 6,
            ],

            [
                'title' => 'Software & Website Development',
                'slug' => 'software-website-development',
                'subtitle' => 'Build Digital Experiences That Work for Your Organization.',
                'short_description' => 'Custom software and website development services designed around organizational requirements, users, and business goals.',
                'description' => <<<'HTML'
                    <p>Organizations need digital platforms that are reliable, secure, easy to use, and aligned with how their teams and customers actually work.</p>

                    <p>South-End Tech develops websites and software solutions that address specific organizational requirements rather than forcing businesses into one-size-fits-all technology.</p>

                    <p>From corporate websites and internal systems to custom business applications and digital platforms, we focus on usability, security, scalability, and maintainability.</p>
                HTML,
                'hero_image' => null,
                'icon' => 'code-slash-outline',
                'meta_title' => 'Software & Website Development | South-End Tech',
                'meta_description' => 'Build secure, scalable websites and custom software solutions with South-End Tech.',
                'is_published' => true,
                'sort_order' => 7,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}
