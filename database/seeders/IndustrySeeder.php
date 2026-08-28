<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
            [
                'slug' => 'financial-services',
                'title' => 'Financial Services',
                'subtitle' => 'Secure Finance. Protect Trust. Stay Compliant.',
                'short_description' => 'Protect customer information, strengthen security controls, and maintain compliance.',
                'description' => <<<'HTML'
                    <p>Financial institutions operate in an environment where security, privacy, compliance, and customer trust are critical.</p>
                    <p>South-End Tech helps financial organizations protect sensitive information, strengthen cybersecurity controls, and build resilient technology environments.</p>
                    <p>We combine cybersecurity, data protection, governance, and technology expertise to help financial organizations reduce risk while confidently embracing digital transformation.</p>
                HTML,
                'challenges' => [
                    'Increasing cybersecurity threats, fraud, and unauthorized access',
                    'Protection of sensitive customer and financial information',
                    'Regulatory and data protection compliance requirements',
                    'Limited visibility across organizational data',
                    'Business continuity and disaster recovery risks',
                ],
                'solutions' => [
                    'Cybersecurity Solutions',
                    'Data Protection & Privacy',
                    'Fraud Prevention',
                    'Data Governance & Management',
                    'Security Monitoring',
                    'Backup & Disaster Recovery',
                ],
                'benefits' => [
                    'Reduced cybersecurity and operational risk',
                    'Improved protection of customer information',
                    'Stronger regulatory compliance',
                    'Improved data visibility and governance',
                    'Greater business resilience and continuity',
                    'Secure foundation for digital transformation',
                ],
                'faqs' => [
                    [
                        'question' => 'How can South-End Tech help financial institutions?',
                        'answer' => 'We provide cybersecurity, data protection, governance, compliance, and technology solutions designed around the security and operational needs of financial organizations.',
                    ],
                    [
                        'question' => 'Can you help financial organizations improve data protection compliance?',
                        'answer' => 'Yes. We help organizations assess their privacy practices, identify compliance gaps, and implement practical controls for responsible handling of personal and sensitive information.',
                    ],
                    [
                        'question' => 'Can you help with cybersecurity and fraud prevention?',
                        'answer' => 'Yes. Our cybersecurity solutions can strengthen endpoint, network, email, and organizational security while supporting fraud prevention and improved security visibility.',
                    ],
                ],
                'icon' => 'card-outline',
                'hero_image' => 'images/industries/financial-services.webp',
                'meta_title' => 'Financial Services Technology Solutions | South-End Tech',
                'meta_description' => 'Cybersecurity, data protection, compliance, governance, and technology solutions designed for financial services organizations.',
                'is_published' => true,
                'sort_order' => 1,
            ],
            [
                'slug' => 'healthcare',
                'title' => 'Healthcare',
                'subtitle' => 'Protect Patient Data. Enable Secure Digital Health.',
                'short_description' => 'Protect patient information and enable secure digital healthcare transformation.',
                'description' => <<<'HTML'
                    <p>Healthcare organizations manage some of the most sensitive information entrusted to any institution. Patient records, medical information, employee data, and operational systems require strong protection and responsible management.</p>
                    <p>South-End Tech helps healthcare organizations strengthen data protection, cybersecurity, governance, and technology infrastructure while supporting secure digital transformation.</p>
                    <p>Our approach balances security and compliance with the practical need for healthcare professionals to access information and technology efficiently.</p>
                HTML,
                'challenges' => [
                    'Protection of sensitive patient and medical information',
                    'Cybersecurity threats against healthcare systems',
                    'Data privacy and regulatory compliance requirements',
                    'Legacy systems and fragmented technology environments',
                    'Unauthorized access to sensitive records',
                    'Business continuity and service availability risks',
                ],
                'solutions' => [
                    'Data Protection & Privacy',
                    'Cybersecurity Solutions',
                    'Data Governance & Management',
                    'Endpoint & Network Security',
                    'Backup & Disaster Recovery',
                    'IT Managed Services',
                    'Digital Health Solutions',
                ],
                'benefits' => [
                    'Improved protection of patient information',
                    'Reduced cybersecurity and data breach risks',
                    'Stronger privacy and compliance practices',
                    'Improved availability and resilience of critical systems',
                    'Better data governance and visibility',
                    'Secure foundation for digital healthcare transformation',
                ],
                'faqs' => [
                    [
                        'question' => 'How can South-End Tech help healthcare organizations?',
                        'answer' => 'We help healthcare organizations protect sensitive information, strengthen cybersecurity, improve data governance, and modernize their technology environments securely.',
                    ],
                    [
                        'question' => 'Can you help protect patient information?',
                        'answer' => 'Yes. We assess how sensitive patient information is collected, stored, accessed, and shared, then help implement appropriate privacy and security controls.',
                    ],
                    [
                        'question' => 'Can you support healthcare digital transformation?',
                        'answer' => 'Yes. We help organizations adopt modern technology while ensuring security, privacy, governance, and operational resilience are considered from the beginning.',
                    ],
                ],
                'icon' => 'medkit-outline',
                'hero_image' => 'images/industries/healthcare.webp',
                'meta_title' => 'Healthcare Technology & Cybersecurity Solutions | South-End Tech',
                'meta_description' => 'Secure data protection, cybersecurity, governance, and digital transformation solutions for healthcare organizations.',
                'is_published' => true,
                'sort_order' => 2,
            ],
            [
                'slug' => 'ngos-development-organizations',
                'title' => 'NGOs & Development Organizations',
                'subtitle' => 'Protect Program Data. Strengthen Responsible Operations.',
                'short_description' => 'Secure sensitive program data while improving governance and operational efficiency.',
                'description' => <<<'HTML'
                    <p>NGOs and development organizations manage sensitive information relating to beneficiaries, communities, donors, employees, partners, and development programs. Protecting this information is critical to maintaining trust and delivering programs responsibly.</p>
                    <p>South-End Tech helps NGOs and development organizations strengthen data protection, cybersecurity, governance, and technology operations while working within practical budget and resource constraints.</p>
                    <p>We provide scalable solutions that help organizations protect sensitive information, improve operational visibility, and build stronger technology foundations for sustainable development.</p>
                HTML,
                'challenges' => [
                    'Protection of beneficiary and program data',
                    'Data privacy and regulatory compliance requirements',
                    'Cybersecurity risks targeting nonprofit organizations',
                    'Limited internal IT and cybersecurity resources',
                    'Secure collaboration between distributed teams',
                    'Data governance across projects and partner organizations',
                ],
                'solutions' => [
                    'Data Protection & Privacy',
                    'Cybersecurity Solutions',
                    'Data Governance & Management',
                    'Microsoft 365 Security',
                    'Endpoint Security',
                    'Data Analytics & Visualization',
                    'IT Managed Services',
                    'Backup & Disaster Recovery',
                ],
                'benefits' => [
                    'Improved protection of sensitive beneficiary data',
                    'Reduced cybersecurity and data breach risks',
                    'Stronger privacy and governance practices',
                    'Improved visibility into organizational data',
                    'Secure collaboration across teams and locations',
                    'Scalable technology aligned with organizational budgets',
                    'Greater donor and stakeholder confidence',
                ],
                'faqs' => [
                    [
                        'question' => 'How can South-End Tech help NGOs?',
                        'answer' => 'We help NGOs strengthen data protection, cybersecurity, governance, IT operations, and analytics while designing solutions around their available resources and operational needs.',
                    ],
                    [
                        'question' => 'Can you help protect beneficiary information?',
                        'answer' => 'Yes. We assess how beneficiary and program information is collected, processed, stored, accessed, and shared, then recommend appropriate privacy and security controls.',
                    ],
                    [
                        'question' => 'Can you support organizations with limited IT resources?',
                        'answer' => 'Yes. Our solutions can be scaled to the size and maturity of an organization, including managed services and practical security improvements that do not require a large internal IT team.',
                    ],
                ],
                'icon' => 'people-outline',
                'hero_image' => 'images/industries/ngos-development.webp',
                'meta_title' => 'NGO & Development Organization Technology Solutions | South-End Tech',
                'meta_description' => 'Data protection, cybersecurity, governance, analytics, and IT solutions designed for NGOs and development organizations.',
                'is_published' => true,
                'sort_order' => 3,
            ],
            [
                'slug' => 'government-public-sector',
                'title' => 'Government & Public Sector',
                'subtitle' => 'Secure Public Services. Protect Citizen Data.',
                'short_description' => 'Support secure public services through responsible data management and digital innovation.',
                'description' => <<<'HTML'
                    <p>Government institutions manage large volumes of information that directly affect citizens, public services, and national development. Protecting this information is essential to maintaining public trust and delivering reliable digital services.</p>
                    <p>South-End Tech supports government and public-sector organizations with cybersecurity, data protection, governance, and digital transformation solutions designed around the realities of public institutions.</p>
                    <p>We help organizations modernize responsibly while strengthening the controls required to protect citizen information and critical systems.</p>
                HTML,
                'challenges' => [
                    'Protection of citizen and public-sector data',
                    'Increasing cybersecurity threats against government systems',
                    'Complex regulatory and governance requirements',
                    'Legacy systems and fragmented technology infrastructure',
                    'Growing demand for secure digital public services',
                    'Need for reliable and resilient public-sector systems',
                ],
                'solutions' => [
                    'Data Protection & Privacy',
                    'Cybersecurity Solutions',
                    'Data Governance & Management',
                    'E-Government Solutions',
                    'Digital Transformation',
                    'Software Development',
                    'IT Managed Services',
                    'Backup & Disaster Recovery',
                ],
                'benefits' => [
                    'Improved protection of citizen information',
                    'Stronger cybersecurity posture',
                    'Better data governance and accountability',
                    'More resilient public-sector technology infrastructure',
                    'Secure and accessible digital services',
                    'Improved operational efficiency',
                    'Responsible digital transformation',
                ],
                'faqs' => [
                    [
                        'question' => 'How does South-End Tech support government institutions?',
                        'answer' => 'We provide cybersecurity, data protection, governance, IT, software development, and digital transformation solutions designed to support secure and reliable public services.',
                    ],
                    [
                        'question' => 'Can you help government organizations protect citizen data?',
                        'answer' => 'Yes. We help institutions assess their data protection practices, identify risks, and implement appropriate technical and organizational controls for protecting citizen information.',
                    ],
                    [
                        'question' => 'Do you provide e-government solutions?',
                        'answer' => 'Yes. We support organizations with digital transformation and software solutions that help modernize public services while keeping security, privacy, and usability in focus.',
                    ],
                ],
                'icon' => 'flag-outline',
                'hero_image' => 'images/industries/government-public-sector.webp',
                'meta_title' => 'Government & Public Sector Technology Solutions | South-End Tech',
                'meta_description' => 'Cybersecurity, data protection, e-government, governance, and digital transformation solutions for government institutions and public-sector organizations.',
                'is_published' => true,
                'sort_order' => 4,
            ],
            [
                'slug' => 'education',
                'title' => 'Education',
                'subtitle' => 'Secure Learning. Protect Student Data.',
                'short_description' => 'Help educational institutions protect information, secure technology, and enable digital learning.',
                'description' => <<<'HTML'
                    <p>Educational institutions increasingly depend on digital platforms, connected devices, cloud services, and online learning environments. These systems create new opportunities for learning while introducing important cybersecurity, privacy, and operational risks.</p>
                    <p>South-End Tech helps schools, colleges, universities, and education-focused organizations protect student and staff information, strengthen cybersecurity, and build reliable technology environments.</p>
                    <p>Our solutions support institutions as they adopt digital learning and administrative technologies without compromising security, privacy, or operational continuity.</p>
                HTML,
                'challenges' => [
                    'Protection of student and staff information',
                    'Cybersecurity threats against education systems',
                    'Unauthorized access to learning platforms',
                    'Data privacy and compliance requirements',
                    'Limited IT resources and cybersecurity expertise',
                    'Reliability of online learning and administrative systems',
                ],
                'solutions' => [
                    'Data Protection & Privacy',
                    'Cybersecurity Solutions',
                    'Endpoint Security',
                    'Email & Microsoft 365 Security',
                    'Data Governance & Management',
                    'IT Managed Services',
                    'Website & Network Monitoring',
                    'Backup & Disaster Recovery',
                ],
                'benefits' => [
                    'Better protection of student and staff information',
                    'Reduced cybersecurity risks',
                    'More secure digital learning environments',
                    'Improved data governance and privacy practices',
                    'Greater reliability of critical technology systems',
                    'Improved business and learning continuity',
                    'A stronger foundation for digital education',
                ],
                'faqs' => [
                    [
                        'question' => 'How can South-End Tech support educational institutions?',
                        'answer' => 'We provide cybersecurity, data protection, IT management, governance, monitoring, and digital solutions that help educational institutions operate securely and reliably.',
                    ],
                    [
                        'question' => 'Can you secure online learning platforms?',
                        'answer' => 'Yes. We can assess the security of learning platforms, connected systems, user access, endpoints, and supporting infrastructure and recommend appropriate security controls.',
                    ],
                    [
                        'question' => 'Do you help schools and universities with data protection?',
                        'answer' => 'Yes. We help institutions understand their data protection responsibilities and establish practical controls for protecting student, staff, parent, and institutional information.',
                    ],
                ],
                'icon' => 'school-outline',
                'hero_image' => 'images/industries/education.webp',
                'meta_title' => 'Education Technology & Cybersecurity Solutions | South-End Tech',
                'meta_description' => 'Cybersecurity, data protection, IT management, governance, and digital solutions for schools, universities, and educational organizations.',
                'is_published' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($industries as $industry) {
            Industry::updateOrCreate(
                ['slug' => $industry['slug']],
                $industry
            );
        }
    }
}
