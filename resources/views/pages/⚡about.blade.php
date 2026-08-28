<?php

use Livewire\Component;

new
#[\Livewire\Attributes\Title('About Us | South-End Tech Limited')]
class extends Component
{
    public function milestones(): array
    {
        return [
            [
                'year' => '2016',
                'title' => 'South-End Tech Is Founded',
                'text' => 'We begin as a small IT consulting firm in Nairobi with a simple goal: make world-class technology accessible to local organizations.',
            ],
            [
                'year' => '2018',
                'title' => 'Cybersecurity Practice Launched',
                'text' => 'Strategic partnerships with Kaspersky, Bitdefender, Fortinet, and K7 Security position us as a regional security provider.',
            ],
            [
                'year' => '2020',
                'title' => 'Data Protection Leadership',
                'text' => 'Following the enactment of the Kenya Data Protection Act, we become one of the first consultancies offering full ODPC registration support.',
            ],
            [
                'year' => '2022',
                'title' => 'SETLAB & Data Science',
                'text' => 'Our innovation lab opens, bringing data science, annotation, and AI development services to East African enterprises.',
            ],
            [
                'year' => 'Today',
                'title' => '100+ Organizations And Counting',
                'text' => 'From NGOs and banks to hospitals and government agencies, trusted teams across East Africa rely on South-End Tech every day.',
            ],
        ];
    }

    public function pillars(): array
    {
        return [
            ['icon' => 'shield-checkmark-outline', 'title' => 'Data Protection & Privacy', 'text' => 'ODPC registration, DPO as a Service, privacy audits, and compliance training.'],
            ['icon' => 'lock-closed-outline', 'title' => 'Cybersecurity', 'text' => 'Endpoint, email, network, and cloud security backed by global vendors.'],
            ['icon' => 'analytics-outline', 'title' => 'Data, AI & Analytics', 'text' => 'Governance, visualization, annotation, and AI solutions that unlock insight.'],
            ['icon' => 'rocket-outline', 'title' => 'Digital Transformation', 'text' => 'IT consulting, audits, software development, and e-government solutions.'],
        ];
    }
};
?>

<div>
    <!-- ===== PAGE HERO ===== -->
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-slate-900 border-b border-slate-200 dark:border-gray-800 transition-colors duration-300">
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28 text-center">
            <div data-aos="fade-down"
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 shadow-sm">
                <span class="w-2.5 h-2.5 rounded-full bg-accent-yellow animate-pulse"></span>
                <span class="text-sm font-semibold text-blue-700 dark:text-blue-400">About South-End Tech</span>
            </div>
            <h1 data-aos="fade-up"
                class="mt-8 text-4xl md:text-5xl xl:text-6xl font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white max-w-4xl mx-auto">
                Driving Secure Digital Transformation Across
                <span class="text-blue-600 dark:text-blue-400">East Africa</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-8 text-lg text-slate-600 dark:text-gray-300 leading-8 max-w-3xl mx-auto">
                South-End Tech Limited is a technology consulting company helping organizations protect their
                information, achieve compliance, and unlock growth through cybersecurity, data protection, AI, and
                digital innovation.
            </p>
        </div>
    </section>

    <!-- ===== WHO WE ARE ===== -->
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="zoom-in">
                    <div
                        class="relative rounded-3xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80"
                            alt="The South-End Tech team collaborating" class="w-full h-140 object-cover">
                    </div>
                    <div
                        class="absolute -bottom-6 -right-6 hidden sm:flex items-center gap-4 bg-blue-950 text-white rounded-2xl p-5 shadow-xl">
                        <div class="w-14 h-14 rounded-xl bg-amber-500 flex items-center justify-center shrink-0">
                            <ion-icon name="shield-checkmark-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div>
                            <p class="font-extrabold text-2xl leading-none">100+</p>
                            <p class="text-sm text-blue-200">Organizations Protected</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div data-aos="fade-right"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                        <ion-icon name="business-outline"></ion-icon>
                        Who We Are
                    </div>
                    <h2 data-aos="fade-up"
                        class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900 dark:text-white">
                        A Trusted Technology Partner,
                        <span class="text-amber-500">Not Just A Vendor</span>
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="100"
                        class="mt-6 text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                        Headquartered at NML Towers in Nairobi, we combine deep local expertise with globally
                        recognized technology partnerships to serve businesses, NGOs, government institutions, and
                        SMEs across the region.
                    </p>
                    <div class="mt-10 space-y-6">
                        <div data-aos="fade-left"
                            class="flex gap-5 items-start p-6 rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
                            <div
                                class="shrink-0 w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-500/20 flex items-center justify-center">
                                <ion-icon name="flag-outline" class="text-2xl text-amber-600"></ion-icon>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-slate-900 dark:text-white">Our Mission</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Supporting your business
                                    as a data solutions provider of choice for all in a safe digital world.</p>
                            </div>
                        </div>
                        <div data-aos="fade-left" data-aos-delay="100"
                            class="flex gap-5 items-start p-6 rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
                            <div
                                class="shrink-0 w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/40 flex items-center justify-center">
                                <ion-icon name="eye-outline" class="text-2xl text-blue-900 dark:text-blue-400">
                                </ion-icon>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-slate-900 dark:text-white">Our Vision</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">A Cyber safe Data-Centric
                                    World ready for the future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CORE VALUES ===== -->
    <section class="relative py-24 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-900/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="ribbon-outline"></ion-icon>
                    Our Values
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white">
                    The Principles Behind
                    <span class="text-amber-500">Everything We Do</span>
                </h2>
                <p class="mt-6 text-lg text-slate-600 dark:text-slate-300">Our values shape how we work with our
                    clients, our partners, and each other â€” every single day.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="why-card" data-aos="fade-up">
                    <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="shield-checkmark-outline" class="text-amber-600"></ion-icon>
                    </div>
                    <h3>Integrity First</h3>
                    <p>We do the right thing even when no one is watching â€” especially when handling your most
                        sensitive information.</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-icon bg-blue-100 dark:bg-blue-900/40">
                        <ion-icon name="lock-closed-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                    </div>
                    <h3>Security-First Mindset</h3>
                    <p>Every solution we design starts with one question: how do we keep your organization safe?</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="medal-outline" class="text-amber-600"></ion-icon>
                    </div>
                    <h3>Excellence</h3>
                    <p>We hold ourselves to international standards and deliver work we are proud to put our name
                        on.</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-icon bg-blue-100 dark:bg-blue-900/40">
                        <ion-icon name="bulb-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                    </div>
                    <h3>Innovation</h3>
                    <p>Through SETLAB, our innovation lab, we explore emerging technologies to solve real African
                        business challenges.</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                        <x-icon-handshake class="w-10 h-10 text-amber-600" />
                    </div>
                    <h3>Long-Term Partnership</h3>
                    <p>We measure success by our clients' growth, not by project sign-offs. We stay for the long
                        haul.</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="why-icon bg-blue-100 dark:bg-blue-900/40">
                        <ion-icon name="school-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                    </div>
                    <h3>Continuous Learning</h3>
                    <p>Technology never stands still â€” and neither do we. Our team trains, certifies, and evolves
                        constantly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR JOURNEY ===== -->
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="git-branch-outline"></ion-icon>
                    Our Journey
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900 dark:text-white">
                    From Nairobi Startup To
                    <span class="text-amber-500">Regional Leader</span>
                </h2>
            </div>
            <div class="relative max-w-3xl mx-auto">
                <div
                    class="absolute left-6 top-2 bottom-2 w-px bg-linear-to-b from-amber-400 via-blue-700 to-amber-400 hidden sm:block">
                </div>
                <div class="space-y-10">
                    @foreach ($this->milestones() as $milestone)
                    <div class="flex gap-6 items-start relative" data-aos="fade-left">
                        <div
                            class="hidden sm:flex shrink-0 w-12 h-12 rounded-full bg-amber-500 text-white font-bold items-center justify-center text-[10px] z-10 shadow-lg shadow-amber-500/30">
                            {{ $milestone['year'] }}
                        </div>
                        <div
                            class="flex-1 p-6 rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:border-amber-400 transition">
                            <p class="text-xs font-bold tracking-widest uppercase text-amber-500 sm:hidden mb-1">
                                {{ $milestone['year'] }}</p>
                            <h3 class="font-bold text-lg text-slate-900 dark:text-white">{{ $milestone['title'] }}
                            </h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">{{ $milestone['text'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHAT WE DO ===== -->
    <section class="relative py-24 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="layers-outline"></ion-icon>
                    What We Do
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white">
                    Four Pillars Of
                    <span class="text-amber-500">Technology Excellence</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($this->pillars() as $pillar)
                <div class="industry-card" data-aos="fade-up">
                    <div class="industry-icon bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="{{ $pillar['icon'] }}" class="text-amber-600"></ion-icon>
                    </div>
                    <h3>{{ $pillar['title'] }}</h3>
                    <p>{{ $pillar['text'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-blue-950"></div>
        <div class="absolute top-0 right-0 w-125 h-125 bg-amber-500/20 rounded-full blur-3xl"></div>
        <div class="relative max-w-5xl mx-auto px-6 text-center">
            <div class="mx-auto w-20 h-20 rounded-2xl bg-amber-500 flex items-center justify-center mb-8"
                data-aos="zoom-in">
                <ion-icon name="handshake-outline" class="text-5xl text-white"></ion-icon>
            </div>
            <h2 data-aos="fade-up" class="text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                Let's Build Something Secure
                <span class="text-amber-400">Together</span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-6 max-w-2xl mx-auto text-lg text-blue-100 leading-relaxed">Whether you want to work with us
                or join us, we would love to hear from you.</p>
            <div data-aos="fade-up" data-aos-delay="200" class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                <a href="/book" wire:navigate
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-amber-500 hover:bg-amber-400 text-blue-950 font-bold transition shadow-lg shadow-amber-500/30">
                    Book a Consultation
                    <ion-icon name="calendar-outline"></ion-icon>
                </a>
                <a href="/careers" wire:navigate
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl border border-white/30 hover:bg-white/10 text-white font-semibold transition">
                    Explore Careers
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-delay="300"
                class="mt-14 pt-8 border-t border-white/10 grid grid-cols-2 sm:grid-cols-4 gap-6">
                <div>
                    <p class="text-3xl font-extrabold text-amber-400">100+</p>
                    <p class="text-sm text-blue-200 mt-1">Organizations Supported</p>
                </div>
                <div>
                    <p class="text-3xl font-extrabold text-amber-400">15+</p>
                    <p class="text-sm text-blue-200 mt-1">Global Tech Partners</p>
                </div>
                <div>
                    <p class="text-3xl font-extrabold text-amber-400">4</p>
                    <p class="text-sm text-blue-200 mt-1">Core Solutions</p>
                </div>
                <div>
                    <p class="text-3xl font-extrabold text-amber-400">East Africa</p>
                    <p class="text-sm text-blue-200 mt-1">Regional Expertise</p>
                </div>
            </div>
        </div>
    </section>
</div>