<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $solutions = [
            [
                'title' => 'Data Protection & Privacy',
                'slug' => 'data-protection-privacy',
                'subtitle' => 'Protect Your Data. Stay Compliant.',
                'short_description' => 'Protect personal data and achieve regulatory compliance while building customer trust.',
                'description' => <<<'HTML'
                    <p>Organizations collect and process personal information every day. Without effective privacy controls, this can expose organizations to regulatory, operational, financial, and reputational risks.</p>

                    <p>South-End Tech helps organizations establish practical data protection and privacy frameworks that support compliance while fitting into everyday business operations.</p>

                    <p>We combine regulatory knowledge, privacy expertise, data governance, and technology to help organizations understand their data, manage their obligations, and build a culture of responsible data use.</p>
                HTML,

                'features' => [
                    [
                        'title' => 'Data Protection Officer as a Service',
                        'description' => 'Access experienced privacy professionals without the cost of maintaining a full-time internal DPO function.',
                        'icon' => 'shield-check-outline',
                    ],
                    [
                        'title' => 'ODPC Registration Support',
                        'description' => 'Practical guidance and support for organizations navigating data controller and processor registration requirements.',
                        'icon' => 'document-text-outline',
                    ],
                    [
                        'title' => 'Data Mapping & Assessment',
                        'description' => 'Identify what personal data you collect, where it is stored, how it is processed, and who has access to it.',
                        'icon' => 'git-network-outline',
                    ],
                    [
                        'title' => 'Privacy Audits',
                        'description' => 'Assess existing privacy practices and identify gaps that require corrective action.',
                        'icon' => 'search-outline',
                    ],
                    [
                        'title' => 'Data Protection Impact Assessments',
                        'description' => 'Identify and manage privacy risks associated with new technologies, systems, projects, and processing activities.',
                        'icon' => 'warning-outline',
                    ],
                ],

                'benefits' => [
                    [
                        'title' => 'Reduced Compliance Risk',
                        'description' => 'Identify privacy gaps and implement appropriate controls before they become costly regulatory or operational problems.',
                        'icon' => 'shield-check-outline',
                    ],
                    [
                        'title' => 'Greater Customer Trust',
                        'description' => 'Demonstrate that personal information is handled responsibly, securely, and transparently.',
                        'icon' => 'people-outline',
                    ],
                    [
                        'title' => 'Better Data Visibility',
                        'description' => 'Understand how personal information moves throughout your organization and third-party ecosystem.',
                        'icon' => 'eye-outline',
                    ],
                    [
                        'title' => 'Stronger Governance',
                        'description' => 'Establish clear responsibilities, processes, policies, and controls for managing personal data.',
                        'icon' => 'business-outline',
                    ],
                ],

                'faqs' => [
                    [
                        'question' => 'Who needs data protection support?',
                        'answer' => 'Organizations that collect, store, use, share, or otherwise process personal data can benefit from structured data protection and privacy support.',
                    ],
                    [
                        'question' => 'Can South-End Tech help with ODPC registration?',
                        'answer' => 'Yes. We provide practical support to organizations preparing for and navigating the data controller and processor registration process.',
                    ],
                    [
                        'question' => 'What is a Data Protection Impact Assessment?',
                        'answer' => 'A Data Protection Impact Assessment helps identify and address privacy risks associated with processing activities, particularly where processing may present significant risks to individuals.',
                    ],
                    [
                        'question' => 'Can you provide ongoing privacy support?',
                        'answer' => 'Yes. Our services can be structured as ongoing advisory support, including privacy governance, compliance monitoring, assessments, and DPO as a Service.',
                    ],
                ],

                'icon' => 'shield-check-outline',
                'hero_image' => null,
                'meta_title' => 'Data Protection & Privacy Solutions | South-End Tech',
                'meta_description' => 'Protect personal data, strengthen privacy practices, and achieve regulatory compliance with South-End Tech data protection and privacy solutions.',
                'is_published' => true,
                'sort_order' => 1,
            ],

            [
                'title' => 'Cybersecurity Solutions',
                'slug' => 'cybersecurity-solutions',
                'subtitle' => 'Defend Your Organization Against Evolving Cyber Threats.',
                'short_description' => 'Strengthen your security posture with proactive protection against modern cyber threats.',
                'description' => <<<'HTML'
                    <p>Cyber threats are becoming more sophisticated, persistent, and costly. Ransomware, phishing, malware, fraud, credential theft, and unauthorized access can disrupt operations and damage customer trust.</p>

                    <p>South-End Tech helps organizations build stronger cybersecurity defenses through practical, scalable solutions tailored to their technology environment and risk profile.</p>

                    <p>Our security-first approach focuses on prevention, detection, response, recovery, and continuous improvement so organizations can operate confidently in an increasingly connected world.</p>
                HTML,

                'features' => [
                    [
                        'title' => 'Endpoint Security',
                        'description' => 'Protect laptops, desktops, servers, and other endpoints against malware, ransomware, and unauthorized activity.',
                        'icon' => 'laptop-outline',
                    ],
                    [
                        'title' => 'Email Security',
                        'description' => 'Reduce phishing, malicious attachments, impersonation, and other email-based threats targeting your organization.',
                        'icon' => 'mail-unread-outline',
                    ],
                    [
                        'title' => 'Microsoft 365 Security',
                        'description' => 'Strengthen the security of Microsoft 365 identities, applications, accounts, and organizational data.',
                        'icon' => 'cloud-outline',
                    ],
                    [
                        'title' => 'Fraud Prevention',
                        'description' => 'Identify security weaknesses and implement controls that help reduce fraud and unauthorized transactions.',
                        'icon' => 'card-outline',
                    ],
                    [
                        'title' => 'Network Security',
                        'description' => 'Protect network infrastructure and control access to critical systems, applications, and information.',
                        'icon' => 'git-network-outline',
                    ],
                    [
                        'title' => 'Backup & Disaster Recovery',
                        'description' => 'Build resilient backup and recovery capabilities that help organizations recover from disruption and cyber incidents.',
                        'icon' => 'cloud-upload-outline',
                    ],
                ],

                'benefits' => [
                    [
                        'title' => 'Reduced Cyber Risk',
                        'description' => 'Identify vulnerabilities and strengthen security controls before attackers can exploit them.',
                        'icon' => 'shield-check-outline',
                    ],
                    [
                        'title' => 'Improved Business Continuity',
                        'description' => 'Maintain critical operations and recover faster when security incidents or technology disruptions occur.',
                        'icon' => 'sync-outline',
                    ],
                    [
                        'title' => 'Stronger Security Posture',
                        'description' => 'Establish layered defenses across users, endpoints, networks, applications, and data.',
                        'icon' => 'lock-closed-outline',
                    ],
                    [
                        'title' => 'Better Visibility',
                        'description' => 'Gain greater awareness of security events, vulnerabilities, suspicious activity, and potential threats.',
                        'icon' => 'eye-outline',
                    ],
                ],

                'faqs' => [
                    [
                        'question' => 'What types of organizations need cybersecurity solutions?',
                        'answer' => 'Organizations of every size can benefit from cybersecurity. The appropriate controls depend on the organization\'s systems, data, users, regulatory obligations, and risk profile.',
                    ],
                    [
                        'question' => 'Can you secure Microsoft 365 environments?',
                        'answer' => 'Yes. We can help organizations strengthen Microsoft 365 security, identity protection, access controls, email security, and data protection.',
                    ],
                    [
                        'question' => 'Do you provide backup and disaster recovery solutions?',
                        'answer' => 'Yes. We help organizations design and implement appropriate backup and recovery strategies to improve resilience and reduce downtime.',
                    ],
                    [
                        'question' => 'Can cybersecurity services be tailored to our organization?',
                        'answer' => 'Yes. Our cybersecurity recommendations are based on your technology environment, business requirements, risk profile, budget, and regulatory obligations.',
                    ],
                ],

                'icon' => 'shield-half-outline',
                'hero_image' => null,
                'meta_title' => 'Cybersecurity Solutions | South-End Tech',
                'meta_description' => 'Protect your organization against evolving cyber threats with scalable cybersecurity solutions from South-End Tech.',
                'is_published' => true,
                'sort_order' => 2,
            ],

            [
                'title' => 'Data, AI & Analytics',
                'slug' => 'data-ai-analytics',
                'subtitle' => 'Unlock The Value Hidden In Your Data.',
                'short_description' => 'Turn your data into meaningful insights that support better decisions, improve operations, and create new opportunities.',
                'description' => <<<'HTML'
                    <p>Organizations generate more data than ever before, but having data does not automatically create value. Without proper governance, management, visualization, and analytics capabilities, valuable insights can remain hidden.</p>

                    <p>South-End Tech helps organizations build practical data capabilities that turn information into actionable business intelligence.</p>

                    <p>From data governance and management to visualization, analytics, and artificial intelligence, we help organizations make better use of their data while maintaining responsible and secure data practices.</p>
                HTML,

                'features' => [
                    [
                        'title' => 'Data Governance',
                        'description' => 'Establish policies, processes, roles, and controls that ensure data is managed consistently and responsibly.',
                        'icon' => 'shield-check-outline',
                    ],
                    [
                        'title' => 'Data Management',
                        'description' => 'Improve how organizational data is collected, organized, stored, maintained, and accessed.',
                        'icon' => 'server-outline',
                    ],
                    [
                        'title' => 'Data Visualization',
                        'description' => 'Transform complex datasets into clear dashboards, reports, and visual insights that support decision-making.',
                        'icon' => 'bar-chart-outline',
                    ],
                    [
                        'title' => 'AI Solutions',
                        'description' => 'Explore practical artificial intelligence solutions that automate processes and improve organizational capabilities.',
                        'icon' => 'sparkles-outline',
                    ],
                    [
                        'title' => 'Analytics Consulting',
                        'description' => 'Use advanced analytics to identify trends, measure performance, understand risks, and uncover opportunities.',
                        'icon' => 'analytics-outline',
                    ],
                ],

                'benefits' => [
                    [
                        'title' => 'Better Decision Making',
                        'description' => 'Give decision-makers reliable information and actionable insights when they need them.',
                        'icon' => 'trending-up-outline',
                    ],
                    [
                        'title' => 'Improved Data Quality',
                        'description' => 'Establish processes and controls that improve the accuracy, consistency, and reliability of organizational data.',
                        'icon' => 'checkmark-circle-outline',
                    ],
                    [
                        'title' => 'Operational Efficiency',
                        'description' => 'Identify opportunities to automate repetitive processes and improve how teams use information.',
                        'icon' => 'speedometer-outline',
                    ],
                    [
                        'title' => 'Discover New Opportunities',
                        'description' => 'Use analytics and AI to uncover patterns, trends, risks, and opportunities hidden within your data.',
                        'icon' => 'bulb-outline',
                    ],
                ],

                'faqs' => [
                    [
                        'question' => 'What can data analytics do for our organization?',
                        'answer' => 'Data analytics can help organizations understand performance, identify trends, detect risks, improve operations, and make more informed strategic decisions.',
                    ],
                    [
                        'question' => 'Do we need a large amount of data to benefit from analytics?',
                        'answer' => 'Not necessarily. The right approach depends on the type, quality, availability, and business purpose of your data. We help organizations identify practical opportunities based on their existing environment.',
                    ],
                    [
                        'question' => 'Can you help us build data dashboards?',
                        'answer' => 'Yes. We can help organizations transform relevant data into dashboards and visual reports that provide useful insights for operational and management decision-making.',
                    ],
                    [
                        'question' => 'How can AI improve our business?',
                        'answer' => 'AI can support areas such as automation, analysis, forecasting, knowledge management, customer service, and decision support. We focus on practical use cases aligned with organizational goals.',
                    ],
                ],

                'icon' => 'analytics-outline',
                'hero_image' => null,
                'meta_title' => 'Data, AI & Analytics Solutions | South-End Tech',
                'meta_description' => 'Turn organizational data into actionable insights with data governance, analytics, visualization, and AI solutions from South-End Tech.',
                'is_published' => true,
                'sort_order' => 3,
            ],

            [
                'title' => 'Digital Transformation',
                'slug' => 'digital-transformation',
                'subtitle' => 'Modernize Operations Through Smart Technology.',
                'short_description' => 'Modernize your organization through practical technology, digital consulting, managed IT services, software development, and e-government solutions.',
                'description' => <<<'HTML'
                    <p>Digital transformation is more than adopting new technology. Organizations need technology that improves how people work, strengthens service delivery, reduces operational friction, and creates sustainable value.</p>

                    <p>South-End Tech helps organizations assess their technology environment, identify opportunities for improvement, and implement digital solutions aligned with their strategic objectives.</p>

                    <p>Whether you need IT consulting, managed services, software development, monitoring, or e-government solutions, we provide practical technology capabilities that help organizations operate more effectively.</p>
                HTML,

                'features' => [
                    [
                        'title' => 'IT Consulting',
                        'description' => 'Assess your technology environment and develop practical strategies aligned with business priorities and future growth.',
                        'icon' => 'construct-outline',
                    ],
                    [
                        'title' => 'Managed IT Services',
                        'description' => 'Keep your technology environment reliable, secure, and supported through proactive IT management.',
                        'icon' => 'settings-outline',
                    ],
                    [
                        'title' => 'Website & Network Monitoring',
                        'description' => 'Monitor critical websites, systems, and networks to identify availability and performance issues early.',
                        'icon' => 'pulse-outline',
                    ],
                    [
                        'title' => 'E-Government Solutions',
                        'description' => 'Support public institutions with digital solutions that improve service delivery, accessibility, and operational efficiency.',
                        'icon' => 'globe-outline',
                    ],
                    [
                        'title' => 'Software Development',
                        'description' => 'Design and develop tailored software applications that address specific organizational workflows and business requirements.',
                        'icon' => 'code-slash-outline',
                    ],
                ],

                'benefits' => [
                    [
                        'title' => 'Modernized Operations',
                        'description' => 'Replace inefficient manual processes with technology-enabled workflows that improve productivity and service delivery.',
                        'icon' => 'rocket-outline',
                    ],
                    [
                        'title' => 'Improved Efficiency',
                        'description' => 'Use technology to reduce repetitive work, simplify processes, and help teams focus on higher-value activities.',
                        'icon' => 'speedometer-outline',
                    ],
                    [
                        'title' => 'Scalable Technology',
                        'description' => 'Build technology capabilities that can evolve as your organization grows and its requirements change.',
                        'icon' => 'expand-outline',
                    ],
                    [
                        'title' => 'Better Digital Experiences',
                        'description' => 'Create more accessible, reliable, and user-friendly digital experiences for employees, customers, and citizens.',
                        'icon' => 'phone-portrait-outline',
                    ],
                ],

                'faqs' => [
                    [
                        'question' => 'What is digital transformation?',
                        'answer' => 'Digital transformation is the process of using technology to improve how an organization operates, delivers services, engages users, and creates value.',
                    ],
                    [
                        'question' => 'Can you help us develop custom software?',
                        'answer' => 'Yes. We can design and develop software solutions around your organization\'s specific workflows, requirements, users, and operational goals.',
                    ],
                    [
                        'question' => 'Do you provide ongoing IT support?',
                        'answer' => 'Yes. Our managed IT services can provide ongoing technical support, monitoring, maintenance, and technology management based on your organization\'s needs.',
                    ],
                    [
                        'question' => 'Can you support government digital transformation?',
                        'answer' => 'Yes. We provide technology solutions designed to help public institutions modernize operations, improve service delivery, and responsibly manage digital information.',
                    ],
                ],

                'icon' => 'rocket-outline',
                'hero_image' => null,
                'meta_title' => 'Digital Transformation Solutions | South-End Tech',
                'meta_description' => 'Modernize operations with IT consulting, managed IT services, software development, monitoring, and e-government solutions from South-End Tech.',
                'is_published' => true,
                'sort_order' => 4,
            ],

            [
                'title' => 'Data Protection & Compliance',
                'slug' => 'data-protection-compliance',
                'subtitle' => 'Build Trust Through Responsible Data Practices.',
                'short_description' => 'Help your organization understand, manage, and meet its data protection and privacy obligations.',
                'description' => <<<'HTML'
                    <p>Responsible data handling is essential for organizations that collect and process personal information. Effective compliance requires more than policies — it requires practical processes, accountability, awareness, and continuous improvement.</p>

                    <p>South-End Tech helps organizations establish and maintain data protection programs aligned with their operational needs and applicable regulatory requirements.</p>

                    <p>We work with organizations to identify compliance gaps, improve privacy practices, strengthen accountability, and establish sustainable data protection processes.</p>
                HTML,

                'features' => [
                    [
                        'title' => 'Data Protection Compliance',
                        'description' => 'Assess your current practices and establish controls that support compliance with applicable data protection requirements.',
                        'icon' => 'shield-check-outline',
                    ],
                    [
                        'title' => 'Privacy Compliance Audits',
                        'description' => 'Review policies, processes, systems, and practices to identify privacy and compliance gaps.',
                        'icon' => 'clipboard-outline',
                    ],
                    [
                        'title' => 'Privacy Policies & Documentation',
                        'description' => 'Develop practical privacy documentation and governance materials suited to your organization.',
                        'icon' => 'document-text-outline',
                    ],
                    [
                        'title' => 'Data Protection Training',
                        'description' => 'Equip employees and teams with practical knowledge for handling personal and sensitive information responsibly.',
                        'icon' => 'school-outline',
                    ],
                    [
                        'title' => 'Breach Management',
                        'description' => 'Establish processes for identifying, assessing, managing, and responding to personal data breaches.',
                        'icon' => 'warning-outline',
                    ],
                ],

                'benefits' => [
                    [
                        'title' => 'Stronger Compliance',
                        'description' => 'Build structured processes that help your organization meet its data protection obligations.',
                        'icon' => 'checkmark-done-outline',
                    ],
                    [
                        'title' => 'Reduced Regulatory Exposure',
                        'description' => 'Identify and address compliance gaps before they result in significant operational or regulatory consequences.',
                        'icon' => 'shield-outline',
                    ],
                    [
                        'title' => 'Employee Awareness',
                        'description' => 'Help employees understand their responsibilities when collecting, using, storing, and sharing personal information.',
                        'icon' => 'people-outline',
                    ],
                    [
                        'title' => 'Responsible Data Culture',
                        'description' => 'Create organizational practices that treat privacy and responsible data handling as ongoing priorities.',
                        'icon' => 'heart-outline',
                    ],
                ],

                'faqs' => [
                    [
                        'question' => 'Why is data protection compliance important?',
                        'answer' => 'Data protection compliance helps organizations manage personal information responsibly, reduce risk, meet legal obligations, and maintain the trust of customers, employees, partners, and other stakeholders.',
                    ],
                    [
                        'question' => 'Can you review our existing privacy policies?',
                        'answer' => 'Yes. We can review existing policies and documentation, identify gaps, and recommend practical improvements based on your organization\'s activities and requirements.',
                    ],
                    [
                        'question' => 'Do you provide staff data protection training?',
                        'answer' => 'Yes. We provide practical awareness and training programs designed to help employees understand privacy responsibilities and secure data-handling practices.',
                    ],
                    [
                        'question' => 'What happens if our organization experiences a data breach?',
                        'answer' => 'We can help organizations establish and improve breach response procedures, including assessment, documentation, response coordination, and appropriate regulatory and stakeholder processes.',
                    ],
                ],

                'icon' => 'document-lock-outline',
                'hero_image' => null,
                'meta_title' => 'Data Protection & Compliance Services | South-End Tech',
                'meta_description' => 'Strengthen data protection compliance, privacy governance, employee awareness, and breach management with South-End Tech.',
                'is_published' => true,
                'sort_order' => 5,
            ],

            [
                'title' => 'Data Governance & Management',
                'slug' => 'data-governance-management',
                'subtitle' => 'Turn Data Into A Trusted Organizational Asset.',
                'short_description' => 'Establish the governance, processes, and controls needed to manage organizational data effectively.',
                'description' => <<<'HTML'
                    <p>Data is one of an organization\'s most valuable assets, but poor data management can create inefficiencies, unreliable reporting, security risks, and poor decision-making.</p>

                    <p>South-End Tech helps organizations establish clear frameworks for managing data throughout its lifecycle.</p>

                    <p>Our approach combines governance, data management, quality, security, accountability, and practical processes to help organizations make their information more reliable and useful.</p>
                HTML,

                'features' => [
                    [
                        'title' => 'Data Governance Frameworks',
                        'description' => 'Define the policies, roles, responsibilities, and processes required to manage organizational data effectively.',
                        'icon' => 'git-network-outline',
                    ],
                    [
                        'title' => 'Data Quality Management',
                        'description' => 'Identify and address issues affecting the accuracy, completeness, consistency, and reliability of organizational data.',
                        'icon' => 'checkmark-circle-outline',
                    ],
                    [
                        'title' => 'Data Lifecycle Management',
                        'description' => 'Establish processes for managing data from creation and collection through use, retention, archiving, and disposal.',
                        'icon' => 'sync-outline',
                    ],
                    [
                        'title' => 'Data Classification',
                        'description' => 'Categorize organizational information according to sensitivity, business value, regulatory requirements, and risk.',
                        'icon' => 'layers-outline',
                    ],
                    [
                        'title' => 'Data Management Strategy',
                        'description' => 'Develop practical strategies that align data capabilities with organizational objectives and decision-making needs.',
                        'icon' => 'map-outline',
                    ],
                ],

                'benefits' => [
                    [
                        'title' => 'Reliable Information',
                        'description' => 'Improve the quality and consistency of the information used across your organization.',
                        'icon' => 'checkmark-done-outline',
                    ],
                    [
                        'title' => 'Clear Accountability',
                        'description' => 'Define ownership and responsibilities for critical organizational data and information assets.',
                        'icon' => 'person-outline',
                    ],
                    [
                        'title' => 'Improved Decision Making',
                        'description' => 'Give teams greater confidence in the data used for reporting, analysis, and strategic decisions.',
                        'icon' => 'analytics-outline',
                    ],
                    [
                        'title' => 'Reduced Data Risk',
                        'description' => 'Improve control over sensitive and critical information throughout its lifecycle.',
                        'icon' => 'shield-check-outline',
                    ],
                ],

                'faqs' => [
                    [
                        'question' => 'What is data governance?',
                        'answer' => 'Data governance is the framework of policies, roles, responsibilities, standards, and processes used to ensure that organizational data is managed effectively and responsibly.',
                    ],
                    [
                        'question' => 'Why does data quality matter?',
                        'answer' => 'Poor-quality data can result in inaccurate reports, inefficient operations, poor decisions, and increased business risk. Data quality management helps ensure information is reliable and fit for purpose.',
                    ],
                    [
                        'question' => 'Can you help us create a data governance framework?',
                        'answer' => 'Yes. We can help assess your current environment and establish practical governance structures, policies, responsibilities, processes, and controls.',
                    ],
                    [
                        'question' => 'Does data governance support data protection?',
                        'answer' => 'Yes. Effective governance provides greater visibility and accountability around organizational data and can support privacy, security, retention, access, and compliance requirements.',
                    ],
                ],

                'icon' => 'server-outline',
                'hero_image' => null,
                'meta_title' => 'Data Governance & Management | South-End Tech',
                'meta_description' => 'Improve data quality, accountability, governance, and management with practical data solutions from South-End Tech.',
                'is_published' => true,
                'sort_order' => 6,
            ],

            [
                'title' => 'Cybersecurity Services',
                'slug' => 'cybersecurity-services',
                'subtitle' => 'Strengthen Your Security. Reduce Your Risk.',
                'short_description' => 'Practical cybersecurity services that help organizations identify weaknesses, strengthen defenses, and respond to evolving threats.',
                'description' => <<<'HTML'
                    <p>Cybersecurity requires continuous attention. New vulnerabilities, evolving attack techniques, changing technology environments, and increasingly sophisticated threat actors mean that organizations must continually assess and improve their defenses.</p>

                    <p>South-End Tech provides practical cybersecurity services designed to help organizations understand their security risks and implement appropriate controls.</p>

                    <p>From security assessments and vulnerability management to incident readiness and security advisory services, we help organizations build a stronger and more resilient security posture.</p>
                HTML,

                'features' => [
                    [
                        'title' => 'Cybersecurity Assessments',
                        'description' => 'Evaluate your security environment, identify weaknesses, and prioritize improvements based on risk.',
                        'icon' => 'search-outline',
                    ],
                    [
                        'title' => 'Vulnerability Management',
                        'description' => 'Identify, assess, prioritize, and address vulnerabilities across systems and technology environments.',
                        'icon' => 'bug-outline',
                    ],
                    [
                        'title' => 'Security Advisory',
                        'description' => 'Receive practical guidance on security architecture, controls, policies, technologies, and risk management.',
                        'icon' => 'chatbubbles-outline',
                    ],
                    [
                        'title' => 'Incident Readiness',
                        'description' => 'Prepare your organization to detect, contain, respond to, and recover from cybersecurity incidents.',
                        'icon' => 'alert-circle-outline',
                    ],
                    [
                        'title' => 'Security Awareness',
                        'description' => 'Help employees recognize common threats and adopt safer technology and information-handling practices.',
                        'icon' => 'people-outline',
                    ],
                    [
                        'title' => 'Security Monitoring',
                        'description' => 'Improve visibility into security events and suspicious activity across critical technology environments.',
                        'icon' => 'pulse-outline',
                    ],
                ],

                'benefits' => [
                    [
                        'title' => 'Identify Security Weaknesses',
                        'description' => 'Gain a clearer understanding of vulnerabilities and weaknesses that could expose your organization to cyber threats.',
                        'icon' => 'search-outline',
                    ],
                    [
                        'title' => 'Proactive Risk Reduction',
                        'description' => 'Prioritize security improvements before weaknesses become costly incidents.',
                        'icon' => 'shield-check-outline',
                    ],
                    [
                        'title' => 'Faster Incident Response',
                        'description' => 'Improve organizational readiness and establish processes for responding effectively to security incidents.',
                        'icon' => 'flash-outline',
                    ],
                    [
                        'title' => 'Security-Aware Teams',
                        'description' => 'Build employee awareness and reduce risks associated with phishing, social engineering, and unsafe technology practices.',
                        'icon' => 'people-circle-outline',
                    ],
                ],

                'faqs' => [
                    [
                        'question' => 'What is the difference between cybersecurity solutions and cybersecurity services?',
                        'answer' => 'Cybersecurity solutions typically involve technology platforms and controls, while cybersecurity services focus on the expertise, assessment, advisory, implementation, monitoring, and ongoing support required to manage security effectively.',
                    ],
                    [
                        'question' => 'How often should an organization perform a cybersecurity assessment?',
                        'answer' => 'The appropriate frequency depends on the organization\'s risk profile, technology environment, regulatory requirements, and rate of change. Regular assessments combined with ongoing monitoring provide stronger protection.',
                    ],
                    [
                        'question' => 'Can you help us prepare for a cyber incident?',
                        'answer' => 'Yes. We can help organizations improve incident readiness through risk assessments, response planning, security controls, awareness, and recovery planning.',
                    ],
                    [
                        'question' => 'Do cybersecurity services work for small businesses?',
                        'answer' => 'Yes. Cybersecurity services can be scaled according to the size, technology environment, risk profile, and budget of an organization.',
                    ],
                ],

                'icon' => 'shield-half-outline',
                'hero_image' => null,
                'meta_title' => 'Cybersecurity Services | South-End Tech',
                'meta_description' => 'Strengthen your organization\'s security posture with cybersecurity assessments, advisory, vulnerability management, monitoring, and incident readiness services.',
                'is_published' => true,
                'sort_order' => 7,
            ],
        ];

        foreach ($solutions as $solution) {
            Solution::updateOrCreate(
                ['slug' => $solution['slug']],
                $solution
            );
        }
    }
}
