<?php

namespace Database\Seeders;

use App\Models\JobOpening;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JobOpeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Cybersecurity Analyst',
                'department' => 'Cybersecurity',
                'employment_type' => 'Full-time',
                'location' => 'Nairobi, Kenya',
                'work_arrangement' => 'Hybrid',

                'summary' => 'Monitor, detect, and respond to security events across client environments using enterprise security and monitoring technologies.',

                'description' => '
                    <p>South-End Tech is looking for a motivated Cybersecurity Analyst to join our cybersecurity team.</p>

                    <p>The successful candidate will help monitor client environments, investigate security alerts, support incident response, and contribute to improving the security posture of organizations across East Africa.</p>

                    <p>This is an opportunity to work with modern cybersecurity technologies while supporting organizations across financial services, healthcare, government, NGOs, and other sectors.</p>
                ',

                'responsibilities' => [
                    'Monitor security events, alerts, and incidents across client environments.',
                    'Investigate suspicious activities and potential security incidents.',
                    'Support incident response, containment, and recovery activities.',
                    'Perform vulnerability assessments and security reviews.',
                    'Assist with endpoint, network, email, and cloud security operations.',
                    'Prepare security reports and communicate findings to clients.',
                    'Support security awareness and cybersecurity improvement initiatives.',
                    'Stay informed about emerging cyber threats and attack techniques.',
                ],

                'requirements' => [
                    'Bachelor’s degree in Computer Science, Information Technology, Cybersecurity, or a related field.',
                    'Understanding of cybersecurity principles and information security controls.',
                    'Knowledge of networking, operating systems, and common security technologies.',
                    'Familiarity with SIEM, endpoint security, vulnerability management, or related tools.',
                    'Strong analytical and problem-solving skills.',
                    'Good written and verbal communication skills.',
                    'Relevant cybersecurity certifications are an advantage.',
                ],

                'qualifications' => [
                    'Cybersecurity, Computer Science, IT, or related academic background.',
                    'Security certifications such as Security+, CEH, or equivalent are an advantage.',
                    'Practical experience with security monitoring tools is desirable.',
                ],

                'benefits' => [
                    'Professional training and certification support.',
                    'Exposure to enterprise cybersecurity projects.',
                    'Hybrid working environment.',
                    'Career growth and mentorship opportunities.',
                    'Collaborative and supportive technology team.',
                ],

                'application_email' => 'careers@southendtech.co.ke',
                'application_url' => null,
                'application_deadline' => null,

                'is_published' => true,
                'is_featured' => true,
                'sort_order' => 1,

                'meta_title' => 'Cybersecurity Analyst Jobs | South-End Tech',
                'meta_description' => 'Join South-End Tech as a Cybersecurity Analyst and help organizations across East Africa strengthen their cybersecurity posture.',
            ],

            [
                'title' => 'Data Protection Associate',
                'department' => 'Data Protection',
                'employment_type' => 'Full-time',
                'location' => 'Nairobi, Kenya',
                'work_arrangement' => 'On-site',

                'summary' => 'Support clients with data protection compliance, ODPC registration, privacy assessments, DPIAs, and ongoing privacy advisory services.',

                'description' => '
                    <p>South-End Tech is seeking a Data Protection Associate to support organizations in strengthening their privacy and data protection practices.</p>

                    <p>The role involves supporting clients with regulatory compliance, privacy assessments, data mapping, documentation, and engagement with data protection requirements in Kenya.</p>

                    <p>The successful candidate should have a strong interest in privacy, governance, compliance, and responsible data management.</p>
                ',

                'responsibilities' => [
                    'Support clients with data protection compliance assessments.',
                    'Assist with ODPC registration and compliance activities.',
                    'Conduct data mapping and processing activity assessments.',
                    'Support Data Protection Impact Assessments (DPIAs).',
                    'Assist with privacy audits and gap assessments.',
                    'Develop and review privacy policies, procedures, and documentation.',
                    'Support data protection training and awareness programs.',
                    'Research emerging privacy regulations and compliance requirements.',
                    'Prepare client reports, recommendations, and compliance documentation.',
                ],

                'requirements' => [
                    'Bachelor’s degree in Law, Information Technology, Business, Compliance, or a related field.',
                    'Strong interest in data protection, privacy, governance, or compliance.',
                    'Good understanding of data protection principles.',
                    'Excellent research, documentation, and analytical skills.',
                    'Strong communication and report-writing abilities.',
                    'Ability to work with clients professionally and confidently.',
                    'Knowledge of Kenya’s Data Protection Act is an advantage.',
                ],

                'qualifications' => [
                    'Background in law, compliance, governance, IT, or data management.',
                    'Privacy or data protection certification is an advantage.',
                    'Experience supporting compliance or consulting projects is desirable.',
                ],

                'benefits' => [
                    'Exposure to real-world privacy and compliance projects.',
                    'Professional training and development.',
                    'Mentorship from experienced consultants.',
                    'Career progression opportunities.',
                    'Collaborative professional environment.',
                ],

                'application_email' => 'careers@southendtech.co.ke',
                'application_url' => null,
                'application_deadline' => null,

                'is_published' => true,
                'is_featured' => true,
                'sort_order' => 2,

                'meta_title' => 'Data Protection Associate Jobs | South-End Tech',
                'meta_description' => 'Join South-End Tech as a Data Protection Associate and help organizations strengthen privacy and regulatory compliance.',
            ],

            [
                'title' => 'Data Scientist',
                'department' => 'Data & AI',
                'employment_type' => 'Full-time',
                'location' => 'Kenya',
                'work_arrangement' => 'Remote',

                'summary' => 'Design analytics pipelines and AI models that turn client data into practical business insights and better decisions.',

                'description' => '
                    <p>South-End Tech is looking for a Data Scientist who can transform complex datasets into meaningful insights and practical business solutions.</p>

                    <p>You will work across data analytics, visualization, machine learning, and artificial intelligence projects for organizations seeking to improve decision-making and operational efficiency.</p>
                ',

                'responsibilities' => [
                    'Analyze structured and unstructured datasets to identify useful insights.',
                    'Build predictive and analytical models.',
                    'Develop data pipelines and data processing workflows.',
                    'Create dashboards and data visualizations.',
                    'Support AI and machine learning solution development.',
                    'Work with clients to understand business questions and data requirements.',
                    'Clean, transform, and validate datasets.',
                    'Present analytical findings to technical and non-technical stakeholders.',
                    'Document analytical methodologies and solutions.',
                ],

                'requirements' => [
                    'Bachelor’s degree in Data Science, Statistics, Computer Science, Mathematics, or a related field.',
                    'Strong Python or equivalent programming skills.',
                    'Experience with data analysis and visualization.',
                    'Understanding of statistics and machine learning concepts.',
                    'Knowledge of SQL and relational databases.',
                    'Strong analytical and problem-solving abilities.',
                    'Ability to communicate technical findings clearly.',
                ],

                'qualifications' => [
                    'Experience with Python, Pandas, NumPy, Scikit-learn, or similar tools.',
                    'Experience with Power BI, Tableau, or other visualization platforms is an advantage.',
                    'Machine learning or AI project experience is desirable.',
                ],

                'benefits' => [
                    'Opportunity to work on practical AI and analytics projects.',
                    'Access to modern data technologies.',
                    'Flexible remote working.',
                    'Training and professional development.',
                    'Opportunity to work with organizations across multiple industries.',
                ],

                'application_email' => 'careers@southendtech.co.ke',
                'application_url' => null,
                'application_deadline' => null,

                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 3,

                'meta_title' => 'Data Scientist Jobs | South-End Tech',
                'meta_description' => 'Join South-End Tech as a Data Scientist and build analytics and AI solutions that create measurable business value.',
            ],

            [
                'title' => 'IT Audit Consultant',
                'department' => 'Consulting',
                'employment_type' => 'Contract',
                'location' => 'Nairobi, Kenya',
                'work_arrangement' => 'Hybrid',

                'summary' => 'Lead IT systems and specialized audits for financial services, NGO, government, and business clients across East Africa.',

                'description' => '
                    <p>South-End Tech is seeking an IT Audit Consultant to support technology risk, systems audit, governance, and compliance engagements.</p>

                    <p>The consultant will work with organizations to assess technology environments, identify risks, evaluate controls, and provide practical recommendations for improvement.</p>
                ',

                'responsibilities' => [
                    'Plan and execute IT systems audits.',
                    'Assess technology controls, processes, and governance frameworks.',
                    'Identify technology and information security risks.',
                    'Review access controls, change management, backup, and business continuity controls.',
                    'Conduct specialized technology audits.',
                    'Prepare audit findings and recommendations.',
                    'Present findings to client stakeholders.',
                    'Support remediation and follow-up activities.',
                    'Travel to client sites where required.',
                ],

                'requirements' => [
                    'Bachelor’s degree in IT, Computer Science, Information Systems, Accounting, or a related field.',
                    'Experience in IT audit, technology risk, information security, or consulting.',
                    'Understanding of IT governance and internal controls.',
                    'Strong report-writing and analytical skills.',
                    'Ability to engage confidently with client stakeholders.',
                    'Willingness to travel within East Africa when required.',
                ],

                'qualifications' => [
                    'CISA, CISM, CRISC, CIA, or related certification is an advantage.',
                    'Experience with audit frameworks and standards is desirable.',
                    'Consulting experience is an added advantage.',
                ],

                'benefits' => [
                    'Exposure to diverse industries and organizations.',
                    'Professional development opportunities.',
                    'Opportunity to work on regional consulting engagements.',
                    'Mentorship and knowledge sharing.',
                    'Flexible working arrangements.',
                ],

                'application_email' => 'careers@southendtech.co.ke',
                'application_url' => null,
                'application_deadline' => null,

                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 4,

                'meta_title' => 'IT Audit Consultant Jobs | South-End Tech',
                'meta_description' => 'Join South-End Tech as an IT Audit Consultant supporting technology risk, governance, compliance, and systems audit engagements.',
            ],

            [
                'title' => 'Software Engineer — SETLAB',
                'department' => 'Engineering',
                'employment_type' => 'Full-time',
                'location' => 'Nairobi, Kenya',
                'work_arrangement' => 'Hybrid',

                'summary' => 'Build secure web platforms and internal tools powering South-End Tech managed services and digital transformation solutions.',

                'description' => '
                    <p>SETLAB is South-End Tech’s development and innovation environment focused on building practical technology solutions.</p>

                    <p>We are looking for a Software Engineer who enjoys building secure, scalable, and user-focused applications.</p>

                    <p>You will work closely with consultants and clients to translate business requirements into reliable software products and digital platforms.</p>
                ',

                'responsibilities' => [
                    'Design and develop secure web applications.',
                    'Build APIs and integrations.',
                    'Develop and maintain internal business platforms.',
                    'Work with Laravel, PHP, JavaScript, and modern web technologies.',
                    'Write clean, maintainable, and well-tested code.',
                    'Implement authentication, authorization, and security controls.',
                    'Troubleshoot application issues and improve system performance.',
                    'Collaborate with designers, consultants, and other developers.',
                    'Participate in code reviews and technical planning.',
                ],

                'requirements' => [
                    'Bachelor’s degree in Computer Science, Software Engineering, IT, or related field.',
                    'Strong programming and software development fundamentals.',
                    'Experience with PHP and Laravel is highly desirable.',
                    'Knowledge of HTML, CSS, JavaScript, and modern frontend development.',
                    'Understanding of databases and API development.',
                    'Knowledge of software security principles.',
                    'Strong problem-solving and debugging skills.',
                ],

                'qualifications' => [
                    'Experience building Laravel applications is an advantage.',
                    'Git and collaborative development experience.',
                    'Experience with Tailwind CSS, Livewire, or similar technologies is desirable.',
                    'Cloud or DevOps experience is an advantage.',
                ],

                'benefits' => [
                    'Work on real-world technology products.',
                    'Exposure to cybersecurity and data protection projects.',
                    'Professional development opportunities.',
                    'Hybrid working environment.',
                    'Mentorship and collaborative engineering culture.',
                ],

                'application_email' => 'careers@southendtech.co.ke',
                'application_url' => null,
                'application_deadline' => null,

                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 5,

                'meta_title' => 'Software Engineer Jobs | SETLAB | South-End Tech',
                'meta_description' => 'Join SETLAB as a Software Engineer and build secure web platforms and technology solutions with South-End Tech.',
            ],

            [
                'title' => 'Client Success Executive',
                'department' => 'Business Development',
                'employment_type' => 'Full-time',
                'location' => 'Nairobi, Kenya',
                'work_arrangement' => 'On-site',

                'summary' => 'Own client relationships, renewals, and growth across our managed security, data protection, and technology solutions portfolio.',

                'description' => '
                    <p>South-End Tech is looking for a Client Success Executive to strengthen relationships with existing and prospective clients.</p>

                    <p>The role combines relationship management, customer success, business development, and technology consulting coordination.</p>

                    <p>The successful candidate will help ensure clients receive value from our services while identifying opportunities to support their evolving technology needs.</p>
                ',

                'responsibilities' => [
                    'Build and maintain strong relationships with clients.',
                    'Understand client needs and coordinate appropriate solutions.',
                    'Manage client onboarding and ongoing engagement.',
                    'Monitor client satisfaction and identify areas for improvement.',
                    'Support contract renewals and account growth.',
                    'Identify opportunities for additional services.',
                    'Coordinate with technical and consulting teams to deliver client requirements.',
                    'Prepare proposals, presentations, and client communications.',
                    'Maintain accurate client and opportunity records.',
                ],

                'requirements' => [
                    'Bachelor’s degree in Business, Marketing, IT, Communications, or a related field.',
                    'Experience in client success, account management, sales, consulting, or business development.',
                    'Strong communication and relationship-building skills.',
                    'Ability to understand and communicate technology solutions.',
                    'Strong presentation and negotiation skills.',
                    'Customer-focused mindset.',
                    'Ability to manage multiple client relationships and priorities.',
                ],

                'qualifications' => [
                    'Experience in B2B technology sales or consulting is an advantage.',
                    'Knowledge of cybersecurity, data protection, or IT services is desirable.',
                    'CRM experience is an advantage.',
                ],

                'benefits' => [
                    'Performance and career growth opportunities.',
                    'Exposure to technology consulting and enterprise clients.',
                    'Professional training and development.',
                    'Collaborative working environment.',
                    'Opportunity to contribute directly to company growth.',
                ],

                'application_email' => 'careers@southendtech.co.ke',
                'application_url' => null,
                'application_deadline' => null,

                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 6,

                'meta_title' => 'Client Success Executive Jobs | South-End Tech',
                'meta_description' => 'Join South-End Tech as a Client Success Executive and help organizations get more value from cybersecurity, data, and technology solutions.',
            ],
        ];

        foreach ($jobs as $job) {
            JobOpening::updateOrCreate(
                ['slug' => Str::slug($job['title'])],
                array_merge($job, [
                    'slug' => Str::slug($job['title']),
                ])
            );
        }
    }
}
