<?php

namespace Database\Seeders;

use App\Models\Webinar;
use Illuminate\Database\Seeder;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Webinar::create([
            'slug' => 'understanding-kenya-data-protection-requirements',
            'title' => 'Understanding Kenya Data Protection Requirements',
            'subtitle' => 'A practical guide to data protection compliance in Kenya',
            'short_description' => 'Learn how organizations can understand and meet their obligations under Kenya’s data protection framework.',
            'description' => '
                <p>Data protection is now a critical responsibility for organizations that collect, process, store, or share personal information.</p>

                <p>In this practical webinar, our experts will explain the key data protection obligations organizations need to understand and how to translate regulatory requirements into practical business processes.</p>

                <p>We will cover data protection governance, registration requirements, privacy notices, data subject rights, breach management, and practical compliance strategies.</p>
            ',
            'starts_at' => now()->addDays(14)->setTime(10, 0),
            'ends_at' => now()->addDays(14)->setTime(11, 30),
            'timezone' => 'Africa/Nairobi',
            'registration_url' => '#',
            'platform' => 'Microsoft Teams',
            'speaker_name' => 'Joash Kosiba',
            'speaker_role' => 'CEO',
            'speaker_photo' => null,
            'image' => null,
            'topics' => [
                'Kenya Data Protection Act',
                'Organizational compliance obligations',
                'Data protection governance',
                'Data subject rights',
                'Privacy notices and policies',
                'Data breach management',
            ],
            'faqs' => [
                [
                    'question' => 'Who should attend this webinar?',
                    'answer' => 'The webinar is suitable for business owners, managers, DPOs, compliance teams, IT professionals, and anyone responsible for handling personal data.',
                ],
                [
                    'question' => 'Is the webinar free?',
                    'answer' => 'Yes, registration for this webinar is free.',
                ],
                [
                    'question' => 'Will participants receive a recording?',
                    'answer' => 'Registered participants may receive access to the webinar recording and supporting resources.',
                ],
            ],
            'meta_title' => 'Understanding Kenya Data Protection Requirements | South-End Tech',
            'meta_description' => 'Join South-End Tech for a practical webinar on Kenya data protection requirements, compliance, privacy governance, and responsible data management.',
            'is_published' => true,
            'is_featured' => true,
            'sort_order' => 1,
        ]);

        Webinar::create([
            'slug' => 'protecting-your-business-from-modern-cyber-threats',
            'title' => 'Protecting Your Business From Modern Cyber Threats',
            'subtitle' => 'Practical cybersecurity strategies for modern organizations',
            'short_description' => 'Discover practical ways to protect your organization against ransomware, phishing, malware, fraud, and other evolving cyber threats.',
            'description' => '
                <p>Cyber threats continue to evolve, making it increasingly important for organizations to take a proactive approach to security.</p>

                <p>This webinar explores the most common threats facing organizations today and the practical controls businesses can implement to reduce their exposure.</p>

                <p>Participants will learn how endpoint protection, email security, network security, backups, monitoring, and security awareness can work together to strengthen organizational resilience.</p>
            ',
            'starts_at' => now()->addDays(28)->setTime(14, 0),
            'ends_at' => now()->addDays(28)->setTime(15, 30),
            'timezone' => 'Africa/Nairobi',
            'registration_url' => '#',
            'platform' => 'Zoom',
            'speaker_name' => 'Tom Abuta',
            'speaker_role' => 'Cybersecurity and IT Risk Analyst',
            'speaker_photo' => null,
            'image' => null,
            'topics' => [
                'Modern cyber threats',
                'Ransomware protection',
                'Phishing and email security',
                'Endpoint security',
                'Network security',
                'Backup and disaster recovery',
                'Security awareness',
            ],
            'faqs' => [
                [
                    'question' => 'Is this suitable for small businesses?',
                    'answer' => 'Yes. The webinar focuses on practical cybersecurity measures that organizations of different sizes can implement.',
                ],
                [
                    'question' => 'Do I need technical cybersecurity experience?',
                    'answer' => 'No. The session is designed to be useful for both technical and non-technical professionals.',
                ],
            ],
            'meta_title' => 'Protecting Your Business From Modern Cyber Threats | South-End Tech',
            'meta_description' => 'Learn practical cybersecurity strategies for protecting your organization from ransomware, phishing, malware, fraud, and other modern threats.',
            'is_published' => true,
            'is_featured' => true,
            'sort_order' => 2,
        ]);

        Webinar::create([
            'slug' => 'turning-business-data-into-actionable-insights',
            'title' => 'Turning Business Data Into Actionable Insights',
            'subtitle' => 'How organizations can unlock the value of their data',
            'short_description' => 'Learn how data governance, analytics, visualization, and AI can help organizations make better decisions.',
            'description' => '
                <p>Organizations generate large amounts of data every day, but data only creates value when it can be trusted, understood, and used effectively.</p>

                <p>This webinar introduces practical approaches to data management, governance, analytics, and visualization that can help organizations turn information into actionable business insights.</p>

                <p>We will also explore how artificial intelligence can complement existing data capabilities and support better decision-making.</p>
            ',
            'starts_at' => now()->addDays(42)->setTime(11, 0),
            'ends_at' => now()->addDays(42)->setTime(12, 30),
            'timezone' => 'Africa/Nairobi',
            'registration_url' => '#',
            'platform' => 'Microsoft Teams',
            'speaker_name' => 'Florence Jelagat',
            'speaker_role' => 'Admin and Data Analyst',
            'speaker_photo' => null,
            'image' => null,
            'topics' => [
                'Data governance',
                'Data quality',
                'Data management',
                'Business intelligence',
                'Data visualization',
                'Analytics',
                'Artificial intelligence',
            ],
            'faqs' => [
                [
                    'question' => 'What types of organizations can benefit from this webinar?',
                    'answer' => 'Any organization that collects and uses business or operational data can benefit from the session.',
                ],
                [
                    'question' => 'Will AI be covered?',
                    'answer' => 'Yes. The webinar includes an introduction to practical AI applications for business decision-making.',
                ],
            ],
            'meta_title' => 'Turning Business Data Into Actionable Insights | South-End Tech',
            'meta_description' => 'Discover how data governance, analytics, visualization, and AI can help organizations turn business data into actionable insights.',
            'is_published' => true,
            'is_featured' => false,
            'sort_order' => 3,
        ]);

        Webinar::create([
            'slug' => 'building-a-strong-data-governance-framework',
            'title' => 'Building a Strong Data Governance Framework',
            'subtitle' => 'Creating trustworthy, secure, and well-managed organizational data',
            'short_description' => 'Understand the foundations of effective data governance and how organizations can establish accountability around their data.',
            'description' => '
                <p>Effective data governance provides the foundation for responsible, secure, and valuable use of organizational information.</p>

                <p>In this webinar, we explore how organizations can establish clear ownership, accountability, policies, standards, and processes for managing data throughout its lifecycle.</p>

                <p>The session will also discuss the relationship between data governance, cybersecurity, privacy, compliance, and business decision-making.</p>
            ',
            'starts_at' => now()->addDays(56)->setTime(10, 0),
            'ends_at' => now()->addDays(56)->setTime(11, 30),
            'timezone' => 'Africa/Nairobi',
            'registration_url' => '#',
            'platform' => 'Google Meet',
            'speaker_name' => 'Florence Jelagat',
            'speaker_role' => 'Admin and Data Analyst',
            'speaker_photo' => null,
            'image' => null,
            'topics' => [
                'Data governance fundamentals',
                'Data ownership and accountability',
                'Data classification',
                'Data quality',
                'Data lifecycle management',
                'Privacy and compliance',
                'Data governance frameworks',
            ],
            'faqs' => [
                [
                    'question' => 'What is data governance?',
                    'answer' => 'Data governance is the framework of policies, roles, standards, and processes used to ensure organizational data is managed effectively and responsibly.',
                ],
                [
                    'question' => 'Is this webinar technical?',
                    'answer' => 'The session focuses primarily on practical organizational and governance considerations rather than technical implementation.',
                ],
            ],
            'meta_title' => 'Building a Strong Data Governance Framework | South-End Tech',
            'meta_description' => 'Learn how to establish an effective data governance framework covering data ownership, quality, security, privacy, and accountability.',
            'is_published' => true,
            'is_featured' => false,
            'sort_order' => 4,
        ]);

        Webinar::create([
            'slug' => 'digital-transformation-without-the-complexity',
            'title' => 'Digital Transformation Without The Complexity',
            'subtitle' => 'A practical approach to modernizing your organization',
            'short_description' => 'Explore practical strategies for using technology to improve operations, customer experiences, security, and organizational growth.',
            'description' => '
                <p>Digital transformation does not have to mean replacing every system or adopting technology for its own sake.</p>

                <p>This webinar explores how organizations can take a practical, business-focused approach to modernization by identifying the right opportunities, technologies, and processes.</p>

                <p>We will discuss IT modernization, managed services, software development, digital platforms, automation, cybersecurity, and how organizations can build a sustainable technology roadmap.</p>
            ',
            'starts_at' => now()->addDays(70)->setTime(14, 0),
            'ends_at' => now()->addDays(70)->setTime(15, 30),
            'timezone' => 'Africa/Nairobi',
            'registration_url' => '#',
            'platform' => 'Microsoft Teams',
            'speaker_name' => 'Joash Kosiba',
            'speaker_role' => 'CEO',
            'speaker_photo' => null,
            'image' => null,
            'topics' => [
                'Digital transformation strategy',
                'IT modernization',
                'Technology roadmaps',
                'Business process automation',
                'Software development',
                'Managed IT services',
                'Cybersecurity considerations',
            ],
            'faqs' => [
                [
                    'question' => 'Is digital transformation only for large organizations?',
                    'answer' => 'No. Organizations of every size can use technology strategically to improve efficiency, security, and customer experiences.',
                ],
                [
                    'question' => 'Will the webinar include practical examples?',
                    'answer' => 'Yes. The session will focus on practical approaches and examples that organizations can adapt to their own environments.',
                ],
            ],
            'meta_title' => 'Digital Transformation Without The Complexity | South-End Tech',
            'meta_description' => 'Learn how organizations can approach digital transformation practically through IT modernization, automation, software, and secure technology.',
            'is_published' => true,
            'is_featured' => false,
            'sort_order' => 5,
        ]);
    }
}
