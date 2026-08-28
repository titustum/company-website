<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <!-- ===== HERO ===== -->
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-gray-900 border-b border-slate-200 dark:border-gray-800 transition-colors duration-300">
        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h1 data-aos="fade-up"
                        class="mt-8 text-4xl md:text-5xl xl:text-6xl font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white">
                        Protect Your Data.
                        <br>
                        <span class="text-blue-600 dark:text-blue-400">Secure Your Business.</span>
                        <br>
                        Transform With Technology.
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="100"
                        class="mt-8 text-lg text-slate-600 dark:text-gray-300 leading-8 max-w-2xl">
                        South-End Tech helps organizations protect data, strengthen cybersecurity, meet data protection
                        requirements, and turn technology and AI into measurable business value.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="mt-10 grid text-center items-center md:flex flex-wrap gap-4">
                        <a href="/book" wire:navigate
                            class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-accent-yellow hover:bg-amber-400 text-slate-900 font-bold shadow-lg transition">
                            <ion-icon name="calendar-outline" class="text-xl"></ion-icon>
                            Book a Consultation
                        </a>
                        <a href="#solutions"
                            class="inline-flex items-center gap-2 px-8 py-4 rounded-xl border border-slate-300 dark:border-gray-700 bg-white dark:bg-gray-800 hover:bg-slate-100 dark:hover:bg-gray-700 text-slate-700 dark:text-gray-200 font-semibold shadow-sm transition">
                            Explore Our Solutions
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300"
                        class="mt-10 flex text-sm flex-wrap gap-5 text-slate-700 dark:text-gray-300">
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                            <span>Data Protection</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                            <span>Cyber Security</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                            <span>Data & AI</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                            <span>Digital Transformation</span>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div
                        class="relative rounded-3xl overflow-hidden border border-slate-200 dark:border-gray-700 shadow-2xl bg-white dark:bg-gray-800">
                        <img src="{{ asset('images/heropic.webp') }}" alt="Digital Transformation"
                            class="w-full h-140 object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-blue-900/20 via-transparent to-transparent">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PARTNERS MARQUEE ===== -->
    <section class="py-10 dark:bg-slate-950 border-b border-slate-100 dark:border-slate-800 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 mb-8">
            <div class="text-center" data-aos="fade-up">
                <p class="text-sm font-semibold tracking-[0.25em] uppercase text-amber-600">Trusted Technology
                    Partners</p>
                <h2 class="mt-2 text-2xl md:text-3xl font-bold text-slate-900 dark:text-white">Powered by
                    Industry-Leading Technology</h2>
                <p class="mt-3 max-w-2xl mx-auto text-slate-600 dark:text-slate-400">We collaborate with globally
                    recognized technology vendors and institutions to deliver secure, reliable, and enterprise-grade
                    solutions.</p>
            </div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div
                class="absolute left-0 top-0 h-full w-24 bg-linear-to-r from-white dark:from-slate-950 to-transparent z-10">
            </div>
            <div
                class="absolute right-0 top-0 h-full w-24 bg-linear-to-l from-white dark:from-slate-950 to-transparent z-10">
            </div>
            <div class="marquee">
                <div class="marquee-content">
                    <div class="partner" title="ICT Authority"><img
                            src="https://southendtech.co.ke/media/partner/ictalogo3_xaEKsaX.png" alt="ICT Authority">
                    </div>
                    <div class="partner" title="Kaspersky"><img
                            src="https://southendtech.co.ke/media/partner/kasperky-managed_PTWyPIQ.png" alt="Kaspersky">
                    </div>
                    <div class="partner" title="Bitdefender"><img
                            src="https://southendtech.co.ke/media/partner/bitdefender-blue-logo-png_5sOzGcb.webp"
                            alt="Bitdefender"></div>
                    <div class="partner" title="K7 Security"><img
                            src="https://southendtech.co.ke/media/partner/K7_Security_Rectangle_Logo_boxpQoP.png"
                            alt="K7 Security"></div>
                    <div class="partner" title="Ndovu"><img
                            src="https://southendtech.co.ke/media/partner/ndovu-logo_0CsMugn.png" alt="Ndovu"></div>
                    <div class="partner" title="Fortinet"><img
                            src="https://southendtech.co.ke/media/partner/fortigate-firewall_YZ6tSWN.webp"
                            alt="Fortinet"></div>
                    <!-- duplicate for seamless scroll -->
                    <div class="partner" title="ICT Authority"><img
                            src="https://southendtech.co.ke/media/partner/ictalogo3_xaEKsaX.png"></div>
                    <div class="partner" title="Kaspersky"><img
                            src="https://southendtech.co.ke/media/partner/kasperky-managed_PTWyPIQ.png"></div>
                    <div class="partner" title="Bitdefender"><img
                            src="https://southendtech.co.ke/media/partner/bitdefender-blue-logo-png_5sOzGcb.webp">
                    </div>
                    <div class="partner" title="K7 Security"><img
                            src="https://southendtech.co.ke/media/partner/K7_Security_Rectangle_Logo_boxpQoP.png">
                    </div>
                    <div class="partner" title="Ndovu"><img
                            src="https://southendtech.co.ke/media/partner/ndovu-logo_0CsMugn.png"></div>
                    <div class="partner" title="Fortinet"><img
                            src="https://southendtech.co.ke/media/partner/fortigate-firewall_YZ6tSWN.webp"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== DIGITAL CHALLENGE ===== -->
    <section
        class="relative py-24 border-y border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-700 dark:text-amber-400 text-sm font-semibold">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                    The Digital Challenge
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900 dark:text-white">
                    The Digital World Creates
                    <span class="text-amber-500">New Opportunities</span>
                    — And New Risks
                </h2>
                <p class="mt-6 text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                    Technology has transformed how organizations operate,
                    but it has also introduced new security, compliance,
                    and operational challenges. Businesses need a trusted
                    technology partner to navigate this changing landscape.
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-8">Organizations today face:</h3>
                    <div class="space-y-5">
                        <div data-aos="fade-right"
                            class="flex gap-5 items-start p-5 rounded-2xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 hover:border-amber-400 transition">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-red-50 dark:bg-red-500/10 flex items-center justify-center">
                                <ion-icon name="bug-outline" class="text-2xl text-red-500"></ion-icon>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Increasing Cyber Threats</h4>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Cyber attacks,
                                    ransomware, fraud, and unauthorized access threaten business continuity and
                                    customer trust.</p>
                            </div>
                        </div>
                        <div data-aos="fade-right" data-aos-delay="100"
                            class="flex gap-5 items-start p-5 rounded-2xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 hover:border-amber-400 transition">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-amber-50 dark:bg-amber-500/10 flex items-center justify-center">
                                <ion-icon name="document-text-outline" class="text-2xl text-amber-600"></ion-icon>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Regulatory Compliance Pressure</h4>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Data protection laws and
                                    industry regulations require organizations to manage information responsibly.
                                </p>
                            </div>
                        </div>
                        <div data-aos="fade-right" data-aos-delay="200"
                            class="flex gap-5 items-start p-5 rounded-2xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 hover:border-amber-400 transition">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center">
                                <ion-icon name="eye-outline" class="text-2xl text-blue-900 dark:text-blue-400">
                                </ion-icon>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Limited Data Visibility</h4>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Valuable business
                                    insights remain hidden when organizations lack proper data management and
                                    analytics capabilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-3xl bg-blue-950 text-white p-10 overflow-hidden" data-aos="fade-left">
                    <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-amber-400/20 blur-3xl"></div>
                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-amber-500 flex items-center justify-center mb-8">
                            <ion-icon name="shield-checkmark-outline" class="text-4xl text-white"></ion-icon>
                        </div>
                        <h3 class="text-3xl font-bold mb-5">Navigate The Digital Future With Confidence</h3>
                        <p class="text-slate-300 leading-relaxed mb-8">South-End Tech combines cybersecurity
                            expertise, data protection knowledge, and digital innovation to help organizations
                            reduce risks, comply with regulations, and unlock technology-driven growth.</p>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <ion-icon name="checkmark-circle" class="text-amber-400 text-xl"></ion-icon>
                                <span>Practical security solutions</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <ion-icon name="checkmark-circle" class="text-amber-400 text-xl"></ion-icon>
                                <span>Data compliance expertise</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <ion-icon name="checkmark-circle" class="text-amber-400 text-xl"></ion-icon>
                                <span>Scalable technology solutions</span>
                            </div>
                        </div>
                        <a href="/about" wire:navigate
                            class="mt-10 bg-amber-500 hover:bg-amber-600 px-7 py-3 rounded-xl font-semibold flex items-center gap-2 transition w-fit">
                            Discover How We Help
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SOLUTIONS ===== -->
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-20" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="layers-outline"></ion-icon>
                    Our Solutions
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight">
                    Technology Solutions Built Around Your
                    <span class="text-amber-500">Business Needs</span>
                </h2>
                <p class="mt-6 text-lg text-slate-600 dark:text-slate-300">From protecting critical information to
                    enabling digital innovation, South-End Tech delivers secure and scalable solutions designed for
                    modern organizations.</p>
            </div>

            <!-- Data Protection -->
            <div class="grid lg:grid-cols-12 gap-12 items-center mb-24" data-aos="fade-up">
                <div class="lg:col-span-5" data-aos="fade-right">
                    <div class="group relative rounded-3xl overflow-hidden min-h-105">
                        <img src="{{ asset('images/solutions/data-protection.webp') }}"
                            alt="Data protection and privacy"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-linear-to-t from-blue-950 via-blue-950/70 to-blue-950/10">
                        </div>
                        <div class="relative min-h-105 p-10 flex flex-col justify-end text-white">
                            <div
                                class="w-20 h-20 rounded-2xl bg-white/15 backdrop-blur-sm border border-white/20 flex items-center justify-center mb-8">
                                <ion-icon name="shield-checkmark-outline" class="text-5xl"></ion-icon>
                            </div>
                            <h3 class="text-4xl font-extrabold">Data Protection<br>& Privacy</h3>
                            <p class="mt-5 text-white/90">Protect personal data and achieve regulatory compliance
                                while building customer trust.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7" data-aos="fade-left">
                    <h4 class="text-3xl font-bold dark:text-white">Protect Your Data. Stay Compliant.</h4>
                    <div class="mt-6 grid sm:grid-cols-2 gap-4">
                        <div class="service-item">Data Protection Officer as a Service</div>
                        <div class="service-item">ODPC Registration Support</div>
                        <div class="service-item">Data Mapping & Assessment</div>
                        <div class="service-item">Privacy Audits</div>
                        <div class="service-item">Data Protection Impact Assessments</div>
                    </div>
                    <a href="/book" wire:navigate class="solution-btn">Explore Data Protection Solutions <ion-icon
                            name="arrow-forward-outline"></ion-icon></a>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="grid lg:grid-cols-12 gap-12 items-center mb-24">
                <div class="lg:col-span-7 lg:order-1" data-aos="fade-right">
                    <h4 class="text-3xl font-bold dark:text-white">Defend Your Organization Against Evolving Cyber
                        Threats</h4>
                    <div class="mt-6 grid sm:grid-cols-2 gap-4">
                        <div class="service-item">Endpoint Security</div>
                        <div class="service-item">Email Security</div>
                        <div class="service-item">Microsoft 365 Security</div>
                        <div class="service-item">Fraud Prevention</div>
                        <div class="service-item">Network Security</div>
                        <div class="service-item">Backup & Disaster Recovery</div>
                    </div>
                    <a href="/book" wire:navigate class="solution-btn">Secure Your Business <ion-icon
                            name="arrow-forward-outline">
                        </ion-icon></a>
                </div>
                <div class="lg:col-span-5 lg:order-2" data-aos="fade-left">
                    <div class="group relative rounded-3xl overflow-hidden min-h-105">
                        <img src="{{ asset('images/solutions/cybersecurity-solutions.webp') }}"
                            alt="Cybersecurity operations"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-linear-to-t from-blue-950 via-blue-950/70 to-blue-950/10">
                        </div>
                        <div class="relative min-h-105 p-10 flex flex-col justify-end text-white">
                            <div
                                class="w-20 h-20 rounded-2xl bg-white/15 backdrop-blur-sm border border-white/20 flex items-center justify-center mb-8">
                                <ion-icon name="lock-closed-outline" class="text-5xl"></ion-icon>
                            </div>
                            <h3 class="text-4xl font-extrabold">Cybersecurity<br>Solutions</h3>
                            <p class="mt-5 text-blue-100">Strengthen your security posture with proactive protection
                                against modern threats.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data AI -->
            <div class="grid lg:grid-cols-12 gap-12 items-center mb-24">
                <div class="lg:col-span-5" data-aos="fade-right">
                    <div class="group relative rounded-3xl overflow-hidden min-h-105">
                        <img src="{{ asset('images/solutions/data-and-ai.webp') }}" alt="Data analytics dashboard"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-linear-to-t from-blue-950 via-blue-950/70 to-blue-950/10">
                        </div>
                        <div class="relative min-h-105 p-10 flex flex-col justify-end text-white">
                            <div
                                class="w-20 h-20 rounded-2xl bg-white/15 backdrop-blur-sm border border-white/20 flex items-center justify-center mb-8">
                                <ion-icon name="analytics-outline" class="text-5xl"></ion-icon>
                            </div>
                            <h3 class="text-4xl font-extrabold">Data,<br>AI & Analytics</h3>
                            <p class="mt-5 text-white/90">Turn your data into insights that drive better decisions.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7" data-aos="fade-left">
                    <h4 class="text-3xl font-bold dark:text-white">Unlock The Value Hidden In Your Data</h4>
                    <div class="mt-6 grid sm:grid-cols-2 gap-4">
                        <div class="service-item">Data Governance</div>
                        <div class="service-item">Data Management</div>
                        <div class="service-item">Data Visualization</div>
                        <div class="service-item">AI Solutions</div>
                        <div class="service-item">Analytics Consulting</div>
                    </div>
                    <a href="/book" wire:navigate class="solution-btn">Unlock Your Data Potential <ion-icon
                            name="arrow-forward-outline">
                        </ion-icon></a>
                </div>
            </div>

            <!-- Digital Transformation -->
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7" data-aos="fade-right">
                    <h4 class="text-3xl font-bold dark:text-white">Modernize Operations Through Smart Technology
                    </h4>
                    <div class="mt-6 grid sm:grid-cols-2 gap-4">
                        <div class="service-item">IT Consulting</div>
                        <div class="service-item">Managed IT Services</div>
                        <div class="service-item">Website & Network Monitoring</div>
                        <div class="service-item">E-Government Solutions</div>
                        <div class="service-item">Software Development</div>
                    </div>
                    <a href="/book" wire:navigate class="solution-btn">Transform Your Business <ion-icon
                            name="arrow-forward-outline">
                        </ion-icon></a>
                </div>

                <div class="lg:col-span-5" data-aos="fade-left">
                    <div class="group relative rounded-3xl overflow-hidden min-h-105">
                        <img src="{{ asset('images/heropic.webp') }}" alt="Digital transformation network"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-linear-to-t from-blue-950 via-blue-950/70 to-blue-950/10">
                        </div>
                        <div class="relative min-h-105 p-10 flex flex-col justify-end text-white">
                            <div
                                class="w-20 h-20 rounded-2xl bg-white/15 backdrop-blur-sm border border-white/20 flex items-center justify-center mb-8">
                                <ion-icon name="rocket-outline" class="text-5xl"></ion-icon>
                            </div>
                            <h3 class="text-4xl font-extrabold">Digital<br>Transformation</h3>
                            <p class="mt-5 text-blue-100">Modernize operations through innovative technology and digital
                                solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="relative py-24 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-900/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5" data-aos="fade-right">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                        <ion-icon name="star-outline"></ion-icon>
                        Why Choose Us
                    </div>
                    <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight dark:text-white">
                        A Technology Partner Built Around Your
                        <span class="text-amber-500">Success</span>
                    </h2>
                    <p class="mt-6 text-lg text-slate-600 dark:text-slate-300 leading-relaxed">At South-End Tech, we
                        do more than provide technology solutions. We partner with organizations to strengthen
                        security, achieve compliance, and confidently navigate digital transformation.</p>
                    <div class="mt-8 flex items-center gap-4">
                        <div class="w-14 h-14 px- rounded-xl bg-amber-500 flex items-center justify-center">
                            <x-icon-handshake class="w-10 h-10 text-white" />
                        </div>
                        <div>
                            <p class="font-bold text-xl dark:text-white">Trusted Technology Partner</p>
                            <p class="text-sm text-slate-500">Security • Compliance • Innovation</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7" data-aos="fade-left">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="why-card" data-aos="fade-up">
                            <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                                <ion-icon name="globe-outline" class="text-amber-600"></ion-icon>
                            </div>
                            <h3>Deep Local Expertise</h3>
                            <p>Understanding East Africa's technology, business, and compliance environment.</p>
                        </div>
                        <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="why-icon bg-blue-100 dark:bg-blue-900/40">
                                <ion-icon name="shield-checkmark-outline" class="text-blue-900 dark:text-blue-400">
                                </ion-icon>
                            </div>
                            <h3>Security-First Approach</h3>
                            <p>Solutions designed to reduce risk and protect critical business assets.</p>
                        </div>
                        <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                                <ion-icon name="document-text-outline" class="text-amber-600"></ion-icon>
                            </div>
                            <h3>Regulatory Knowledge</h3>
                            <p>Helping organizations navigate Kenya's Data Protection Act and compliance needs.</p>
                        </div>
                        <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="why-icon bg-blue-100 dark:bg-blue-900/40">
                                <ion-icon name="business-outline" class="text-blue-900 dark:text-blue-400">
                                </ion-icon>
                            </div>
                            <h3>Enterprise Solutions, Accessible Support</h3>
                            <p>Powerful technology solutions designed for organizations of every size.</p>
                        </div>
                        <div class="why-card sm:col-span-2" data-aos="fade-up" data-aos-delay="400">
                            <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                                <ion-icon name="people-outline" class="text-amber-600"></ion-icon>
                            </div>
                            <h3>Long-Term Partnership</h3>
                            <p>We work alongside your team as a trusted technology partner, not just a service
                                vendor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== INDUSTRY SOLUTIONS ===== -->
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">
        <div class="absolute top-20 left-0 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-900/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="business-outline"></ion-icon>
                    Industry Solutions
                </div>

                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight dark:text-white">
                    Solutions Designed For
                    <span class="text-amber-500">Your Industry</span>
                </h2>

                <p class="mt-6 text-lg text-slate-600 dark:text-slate-300">
                    Every industry faces unique technology, security, and compliance challenges.
                    South-End Tech delivers solutions tailored to the realities of your organization.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Financial -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 transition duration-300 hover:border-amber-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(245,158,11,0.12)]"
                    data-aos="fade-up">

                    <div
                        class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="card-outline" class="text-amber-600"></ion-icon>
                    </div>

                    <h3 class="text-[1.35rem] font-bold mb-3 text-slate-900 dark:text-white">
                        Financial Services
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        Protect customer information, strengthen security controls, and maintain compliance.
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Cybersecurity
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Compliance
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Fraud Prevention
                        </span>
                    </div>
                </div>

                <!-- NGOs -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 transition duration-300 hover:border-amber-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(245,158,11,0.12)]"
                    data-aos="fade-up" data-aos-delay="100">

                    <div
                        class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 bg-blue-100 dark:bg-blue-900/40">
                        <ion-icon name="people-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                    </div>

                    <h3 class="text-[1.35rem] font-bold mb-3 text-slate-900 dark:text-white">
                        NGOs & Development Organizations
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        Secure sensitive program data while improving governance and operational efficiency.
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Data Privacy
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Governance
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Secure Operations
                        </span>
                    </div>
                </div>

                <!-- Healthcare -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 transition duration-300 hover:border-amber-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(245,158,11,0.12)]"
                    data-aos="fade-up" data-aos-delay="200">

                    <div
                        class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="medkit-outline" class="text-amber-600"></ion-icon>
                    </div>

                    <h3 class="text-[1.35rem] font-bold mb-3 text-slate-900 dark:text-white">
                        Healthcare
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        Protect patient information and enable secure digital healthcare transformation.
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Patient Data Protection
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Compliance
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Digital Health
                        </span>
                    </div>
                </div>

                <!-- Government -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 transition duration-300 hover:border-amber-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(245,158,11,0.12)]"
                    data-aos="fade-up" data-aos-delay="300">

                    <div
                        class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 bg-blue-100 dark:bg-blue-900/40">
                        <ion-icon name="flag-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                    </div>

                    <h3 class="text-[1.35rem] font-bold mb-3 text-slate-900 dark:text-white">
                        Government
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        Support secure public services through responsible data management and digital innovation.
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Citizen Data Protection
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Digital Transformation
                        </span>
                    </div>
                </div>

                <!-- SMEs -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 transition duration-300 hover:border-amber-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(245,158,11,0.12)]"
                    data-aos="fade-up" data-aos-delay="400">

                    <div
                        class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="storefront-outline" class="text-amber-600"></ion-icon>
                    </div>

                    <h3 class="text-[1.35rem] font-bold mb-3 text-slate-900 dark:text-white">
                        Small & Medium Businesses
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        Access practical technology solutions that protect your business and support growth.
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Affordable Security
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            IT Support
                        </span>
                        <span
                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                            Business Continuity
                        </span>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="p-8 rounded-3xl bg-blue-950 text-white border border-blue-950 transition duration-300 hover:border-amber-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(245,158,11,0.12)]"
                    data-aos="zoom-in" data-aos-delay="500">

                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 bg-amber-500">
                        <ion-icon name="arrow-forward-outline" class="text-white"></ion-icon>
                    </div>

                    <h3 class="text-[1.35rem] font-bold mb-3 !text-white">
                        Need A Custom Solution?
                    </h3>

                    <p class="text-blue-100 leading-relaxed mb-6">
                        Our specialists work with organizations across sectors to design
                        solutions aligned with their goals.
                    </p>

                    <a href="/contact" wire:navigate
                        class="mt-5 inline-flex items-center gap-2 bg-amber-500 px-5 py-3 rounded-xl font-semibold text-slate-950 hover:bg-amber-400 transition">
                        Talk To Our Experts
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- ===== APPROACH ===== -->
    <section class="relative py-24 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-6 relative">
            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="git-branch-outline"></ion-icon>
                    Our Approach
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold dark:text-white">
                    How We Work With
                    <span class="text-amber-500">Your Organization</span>
                </h2>
                <p class="mt-6 text-lg text-slate-600 dark:text-slate-300">We follow a structured approach that
                    ensures every solution is aligned with your business goals, security requirements, and
                    operational needs.</p>
            </div>
            <div class="hidden lg:grid grid-cols-4 gap-8 relative">
                <div
                    class="absolute top-12 left-[12%] right-[12%] h-1 bg-linear-to-r from-amber-400 via-blue-900 to-amber-400">
                </div>
                <div class="process-card" data-aos="zoom-in">
                    <div class="step-number">01</div>
                    <h3>Understand</h3>
                    <p>We assess your current technology, security, and compliance environment to understand your
                        challenges.</p>
                </div>
                <div class="process-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="step-number">02</div>
                    <h3>Recommend</h3>
                    <p>We design practical solutions aligned with your business objectives, risks, and budget.</p>
                </div>
                <div class="process-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="step-number">03</div>
                    <h3>Implement</h3>
                    <p>Our experts deploy, configure, and integrate the required technology solutions.</p>
                </div>
                <div class="process-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="step-number">04</div>
                    <h3>Support</h3>
                    <p>We continuously monitor, improve, and protect your environment as your technology partner.
                    </p>
                </div>
            </div>
            <div class="lg:hidden space-y-6">
                <div class="mobile-process">
                    <div class="step-number">01</div>
                    <div>
                        <h3>Understand</h3>
                        <p>We assess your technology, security, and compliance environment.</p>
                    </div>
                </div>
                <div class="mobile-process" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">02</div>
                    <div>
                        <h3>Recommend</h3>
                        <p>We design solutions aligned with your business needs.</p>
                    </div>
                </div>
                <div class="mobile-process" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">03</div>
                    <div>
                        <h3>Implement</h3>
                        <p>Our experts deploy and integrate the required solutions.</p>
                    </div>
                </div>
                <div class="mobile-process" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">04</div>
                    <div>
                        <h3>Support</h3>
                        <p>We continuously monitor, improve, and protect your environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">
        <div class="absolute top-0 left-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="ribbon-outline"></ion-icon>
                    Client Success Stories
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight dark:text-white">
                    Trusted By Organizations
                    <span class="text-amber-500">Across East Africa</span>
                </h2>
                <p class="mt-6 text-lg text-slate-600 dark:text-slate-300">Organizations trust South-End Tech to
                    strengthen cybersecurity, improve data protection practices, and navigate complex technology
                    challenges.</p>
            </div>
            <div class="grid lg:grid-cols-3 gap-8">
                <article class="testimonial-card" data-aos="fade-up">
                    <div class="flex items-center justify-between mb-8">
                        <div
                            class="w-14 h-14 rounded-xl bg-amber-50 dark:bg-amber-500/10 flex items-center justify-center">
                            <ion-icon name="business-outline" class="text-3xl text-amber-500"></ion-icon>
                        </div>
                        <span class="text-xs font-semibold text-slate-400">NGO</span>
                    </div>
                    <div class="flex gap-1 mb-5">
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                    </div>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed italic">"South-End Tech Limited is
                        content with the services provided."</p>
                    <div class="mt-8">
                        <h3 class="font-bold text-lg dark:text-white">World Vision Kenya</h3>
                        <p class="text-sm text-slate-500">Data Protection Services</p>
                    </div>
                </article>
                <article class="testimonial-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-center justify-between mb-8">
                        <div
                            class="w-14 h-14 rounded-xl bg-blue-100 dark:bg-blue-900/40 flex items-center justify-center">
                            <ion-icon name="shield-checkmark-outline" class="text-3xl text-blue-900 dark:text-blue-400">
                            </ion-icon>
                        </div>
                        <span class="text-xs font-semibold text-slate-400">Consulting</span>
                    </div>
                    <div class="flex gap-1 mb-5">
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                    </div>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed italic">"South-End Tech has
                        provided Data Protection Consultancy services including support for registration with the
                        Office of the Data Protection Commissioner."</p>
                    <div class="mt-8">
                        <h3 class="font-bold text-lg dark:text-white">Dalberg</h3>
                        <p class="text-sm text-slate-500">Data Protection Partner</p>
                    </div>
                </article>
                <article class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center justify-between mb-8">
                        <div
                            class="w-14 h-14 rounded-xl bg-amber-50 dark:bg-amber-500/10 flex items-center justify-center">
                            <ion-icon name="lock-closed-outline" class="text-3xl text-amber-500"></ion-icon>
                        </div>
                        <span class="text-xs font-semibold text-slate-400">Aviation</span>
                    </div>
                    <div class="flex gap-1 mb-5">
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                        <ion-icon name="star" class="text-amber-500"></ion-icon>
                    </div>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed italic">"Outstanding cybersecurity
                        service provision. They took their time and ensured the solution was specifically catered
                        for our company."</p>
                    <div class="mt-8">
                        <h3 class="font-bold text-lg dark:text-white">Aero Club of East Africa</h3>
                        <p class="text-sm text-slate-500">Cybersecurity Solutions</p>
                    </div>
                </article>
            </div>
            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('testimonials') }}" wire:navigate
                    class="inline-flex items-center gap-3 bg-blue-950 hover:bg-accent-yellow text-white hover:text-slate-900 px-8 py-4 rounded-xl font-semibold transition">
                    View More Success Stories
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== KNOWLEDGE CENTER ===== -->
    <section class="relative py-24 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="absolute top-0 right-0 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-14">
                <div class="max-w-3xl" data-aos="fade-up">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-amber-600 font-semibold text-sm">
                        <ion-icon name="book-outline"></ion-icon>
                        Knowledge Center
                    </div>
                    <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold dark:text-white">
                        Insights & <span class="text-amber-500">Resources</span>
                    </h2>
                    <p class="mt-5 text-lg text-slate-600 dark:text-slate-300">Explore practical insights on
                        cybersecurity, compliance, artificial intelligence, and data protection to help your
                        organization make informed technology decisions.</p>
                </div>
                <a href="/contact" wire:navigate
                    class="inline-flex items-center gap-2 bg-blue-950 hover:bg-amber-500 text-white px-7 py-3 rounded-xl font-semibold transition">
                    View All Resources
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="resource-card" data-aos="fade-up">
                    <div class="resource-icon bg-blue-100 dark:bg-blue-900/40">
                        <ion-icon name="shield-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                    </div>
                    <h3>Cybersecurity Guides</h3>
                    <p>Practical guidance on protecting your organization against evolving cyber threats.</p>
                    <a href="#" class="resource-link">Explore Articles <ion-icon name="arrow-forward-outline">
                        </ion-icon></a>
                </div>
                <div class="resource-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="resource-icon bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="document-text-outline" class="text-amber-600"></ion-icon>
                    </div>
                    <h3>Compliance Updates</h3>
                    <p>Stay informed about data protection laws, regulations, and governance requirements.</p>
                    <a href="#" class="resource-link">Explore Articles <ion-icon name="arrow-forward-outline">
                        </ion-icon></a>
                </div>
                <div class="resource-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="resource-icon bg-blue-100 dark:bg-blue-900/40">
                        <ion-icon name="sparkles-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                    </div>
                    <h3>AI Trends</h3>
                    <p>Discover how artificial intelligence is transforming organizations and industries.</p>
                    <a href="#" class="resource-link">Explore Articles <ion-icon name="arrow-forward-outline">
                        </ion-icon></a>
                </div>
                <div class="resource-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="resource-icon bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="lock-closed-outline" class="text-amber-600"></ion-icon>
                    </div>
                    <h3>Data Protection Insights</h3>
                    <p>Learn best practices for privacy, responsible data use, and security.</p>
                    <a href="#" class="resource-link">Explore Articles <ion-icon name="arrow-forward-outline">
                        </ion-icon></a>
                </div>
            </div>
            <div class="mt-16 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 p-8"
                data-aos="fade-up">
                <div class="flex items-center gap-3 mb-6">
                    <ion-icon name="newspaper-outline" class="text-amber-500 text-2xl"></ion-icon>
                    <h3 class="text-xl font-bold dark:text-white">Featured Insights</h3>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <article>
                        <p class="text-xs text-amber-500 font-semibold">CYBERSECURITY</p>
                        <h4 class="mt-2 font-bold dark:text-white">How Organizations Can Prevent Modern Cyber
                            Threats</h4>
                    </article>
                    <article>
                        <p class="text-xs text-amber-500 font-semibold">COMPLIANCE</p>
                        <h4 class="mt-2 font-bold dark:text-white">Understanding Data Protection Requirements</h4>
                    </article>
                    <article>
                        <p class="text-xs text-amber-500 font-semibold">ARTIFICIAL INTELLIGENCE</p>
                        <h4 class="mt-2 font-bold dark:text-white">Using AI To Improve Business Decision Making</h4>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-blue-950"></div>
        <div class="absolute top-0 right-0 w-125 h-125 bg-amber-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-87.5 h-87.5 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="relative max-w-5xl mx-auto px-6 text-center">
            <div class="mx-auto w-20 h-20 rounded-2xl bg-amber-500 flex items-center justify-center mb-8"
                data-aos="zoom-in">
                <ion-icon name="rocket-outline" class="text-5xl text-white"></ion-icon>
            </div>
            <h2 data-aos="fade-up" class="text-4xl lg:text-6xl font-extrabold text-white leading-tight">
                Ready to Secure and
                <span class="text-amber-400">Transform</span>
                Your Organization?
            </h2>
            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-6 max-w-3xl mx-auto text-lg lg:text-xl text-blue-100 leading-relaxed">Whether you need
                cybersecurity protection, data compliance support, AI solutions, or digital transformation
                consulting, our experts are ready to help you build a safer and smarter future.</p>
            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="/book" wire:navigate
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-amber-500 hover:bg-amber-400 text-blue-950 font-bold transition shadow-lg shadow-amber-500/30">
                    Schedule a Consultation
                    <ion-icon name="calendar-outline"></ion-icon>
                </a>
                <a href="/contact" wire:navigate
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl border border-white/30 hover:bg-white/10 text-white font-semibold transition">
                    Contact Our Team
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </a>
            </div>
            <div class="mt-14 pt-8 border-t border-white/10 grid sm:grid-cols-3 gap-6" data-aos="fade-up"
                data-aos-delay="300">
                <div>
                    <p class="text-3xl font-extrabold text-amber-400">100+</p>
                    <p class="text-sm text-blue-200">Organizations Supported</p>
                </div>
                <div>
                    <p class="text-3xl font-extrabold text-amber-400">4</p>
                    <p class="text-sm text-blue-200">Core Technology Solutions</p>
                </div>
                <div>
                    <p class="text-3xl font-extrabold text-amber-400">East Africa</p>
                    <p class="text-sm text-blue-200">Regional Expertise</p>
                </div>
            </div>
        </div>
    </section>
</div>