<?php

use App\Models\JobOpening;
use Livewire\Component;

new
#[\Livewire\Attributes\Title('Careers | South-End Tech Limited')]
class extends Component
{
    public string $filter = 'All';

    public function departments(): array
    {
        return JobOpening::query()
            ->where('is_published', true)
            ->where(function ($query) {
                $query->whereNull('application_deadline')
                    ->orWhereDate('application_deadline', '>=', now());
            })
            ->whereNotNull('department')
            ->distinct()
            ->orderBy('department')
            ->pluck('department')
            ->values()
            ->all();
    }

    public function filteredJobs()
    {
        return JobOpening::query()
            ->where('is_published', true)
            ->where(function ($query) {
                $query->whereNull('application_deadline')
                    ->orWhereDate('application_deadline', '>=', now());
            })
            ->when(
                $this->filter !== 'All',
                fn ($query) => $query->where('department', $this->filter)
            )
            ->orderByRaw('CASE WHEN application_deadline IS NULL THEN 1 ELSE 0 END')
            ->orderBy('application_deadline')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function hiringStages(): array
    {
        return [
            [
                'step' => '01',
                'title' => 'Apply',
                'text' => 'Send your application for a role that fits your skills and ambitions.',
            ],
            [
                'step' => '02',
                'title' => 'Screening Call',
                'text' => 'A friendly conversation with our team about your experience and expectations.',
            ],
            [
                'step' => '03',
                'title' => 'Technical Interview',
                'text' => 'Show us how you think and solve practical challenges relevant to the role.',
            ],
            [
                'step' => '04',
                'title' => 'Offer & Onboarding',
                'text' => 'Welcome aboard — structured onboarding gets you delivering with confidence.',
            ],
        ];
    }
};
?>

<div>

    {{-- =========================================================
    PAGE HERO
    ========================================================== --}}
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-slate-900 border-b border-slate-200 dark:border-gray-800 transition-colors duration-300">

        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28 text-center">

            <div data-aos="fade-down"
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 shadow-sm">

                <span class="w-2.5 h-2.5 rounded-full bg-accent-yellow animate-pulse"></span>

                <span class="text-sm font-semibold text-blue-700 dark:text-blue-400">
                    Join Our Team
                </span>

            </div>

            <h1 data-aos="fade-up"
                class="mt-8 text-4xl md:text-5xl xl:text-6xl font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white max-w-4xl mx-auto">

                Build A Career That
                <span class="text-blue-600 dark:text-blue-400">
                    Protects & Powers
                </span>
                Africa's Digital Future

            </h1>

            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-8 text-lg text-slate-600 dark:text-gray-300 leading-8 max-w-3xl mx-auto">

                At South-End Tech you'll work on meaningful security, data, and
                transformation projects for leading organizations — with a team
                that invests in your growth.

            </p>

            <div data-aos="fade-up" data-aos-delay="200" class="mt-10 flex flex-col sm:flex-row justify-center gap-4">

                <a href="#open-positions"
                    class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-blue-950 hover:bg-accent-yellow text-white hover:text-slate-900 font-bold transition">

                    View Open Positions

                    <ion-icon name="arrow-down-outline"></ion-icon>

                </a>

                <a href="mailto:careers@southendtech.co.ke?subject=General Application"
                    class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl border border-slate-300 dark:border-slate-700 hover:border-amber-400 text-slate-700 dark:text-white font-semibold transition">

                    Send General Application

                    <ion-icon name="mail-outline"></ion-icon>

                </a>

            </div>

        </div>
    </section>


    {{-- =========================================================
    WHY WORK WITH US
    ========================================================== --}}
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">

        <div class="relative max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">

                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">

                    <ion-icon name="heart-outline"></ion-icon>

                    Why South-End Tech

                </div>

                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white">

                    More Than
                    <span class="text-amber-500">
                        Just A Job
                    </span>

                </h2>

                <p class="mt-6 text-lg text-slate-600 dark:text-slate-400 leading-8">
                    Join a growing technology team working at the intersection
                    of cybersecurity, data, privacy, and digital transformation.
                </p>

            </div>


            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Learning --}}
                <div class="why-card" data-aos="fade-up">

                    <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                        <ion-icon name="school-outline" class="text-amber-600">
                        </ion-icon>
                    </div>

                    <h3>
                        Learning & Certifications
                    </h3>

                    <p>
                        Build your expertise through practical projects,
                        professional training, and globally recognized
                        certifications.
                    </p>

                </div>


                {{-- Growth --}}
                <div class="why-card" data-aos="fade-up" data-aos-delay="100">

                    <div class="why-icon bg-blue-100 dark:bg-blue-900/40">

                        <ion-icon name="trending-up-outline" class="text-blue-900 dark:text-blue-400">
                        </ion-icon>

                    </div>

                    <h3>
                        Real Career Growth
                    </h3>

                    <p>
                        Take on increasing responsibility and grow alongside
                        experienced consultants and technology professionals.
                    </p>

                </div>


                {{-- Hybrid --}}
                <div class="why-card" data-aos="fade-up" data-aos-delay="200">

                    <div class="why-icon bg-amber-100 dark:bg-amber-500/20">

                        <ion-icon name="laptop-outline" class="text-amber-600">
                        </ion-icon>

                    </div>

                    <h3>
                        Flexible Hybrid Work
                    </h3>

                    <p>
                        Collaborate in person while maintaining the flexibility
                        to focus remotely where the role allows.
                    </p>

                </div>


                {{-- Health --}}
                <div class="why-card" data-aos="fade-up" data-aos-delay="300">

                    <div class="why-icon bg-blue-100 dark:bg-blue-900/40">

                        <ion-icon name="medkit-outline" class="text-blue-900 dark:text-blue-400">
                        </ion-icon>

                    </div>

                    <h3>
                        Employee Wellbeing
                    </h3>

                    <p>
                        We value the wellbeing, sustainability, and professional
                        development of our people.
                    </p>

                </div>


                {{-- Impact --}}
                <div class="why-card" data-aos="fade-up" data-aos-delay="400">

                    <div class="why-icon bg-amber-100 dark:bg-amber-500/20">

                        <ion-icon name="rocket-outline" class="text-amber-600">
                        </ion-icon>

                    </div>

                    <h3>
                        Impactful Projects
                    </h3>

                    <p>
                        Work on projects that help protect businesses,
                        institutions, and critical services across Africa.
                    </p>

                </div>


                {{-- Team --}}
                <div class="why-card" data-aos="fade-up" data-aos-delay="500">

                    <div class="why-icon bg-blue-100 dark:bg-blue-900/40">

                        <ion-icon name="people-outline" class="text-blue-900 dark:text-blue-400">
                        </ion-icon>

                    </div>

                    <h3>
                        A Team That Has Your Back
                    </h3>

                    <p>
                        Collaboration over egos. We support each other,
                        celebrate wins, and learn from challenges together.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    OPEN POSITIONS
    ========================================================== --}}
    <section id="open-positions" class="relative py-24 bg-slate-50 dark:bg-slate-900 overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mb-10" data-aos="fade-up">

                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">

                    <ion-icon name="briefcase-outline"></ion-icon>

                    Open Positions

                </div>

                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900 dark:text-white">

                    Find Your
                    <span class="text-amber-500">
                        Next Role
                    </span>

                </h2>

                <p class="mt-5 text-lg text-slate-600 dark:text-slate-400">
                    Explore current opportunities and find where your skills
                    can make an impact.
                </p>

            </div>


            {{-- FILTERS --}}
            <div class="flex flex-wrap gap-3 mb-10" data-aos="fade-up">

                <button wire:click="$set('filter', 'All')"
                    class="px-5 py-2.5 rounded-full text-sm font-semibold border transition
                    {{ $filter === 'All'
                        ? 'bg-accent-yellow border-accent-yellow text-slate-900'
                        : 'bg-white dark:bg-slate-950 border-slate-300 dark:border-slate-700 text-slate-600 dark:text-gray-300 hover:border-amber-400' }}">

                    All

                </button>


                @foreach ($this->departments() as $department)

                <button wire:key="department-{{ $department }}" wire:click="$set('filter', @js($department))"
                    class="px-5 py-2.5 rounded-full text-sm font-semibold border transition
                        {{ $filter === $department
                            ? 'bg-accent-yellow border-accent-yellow text-slate-900'
                            : 'bg-white dark:bg-slate-950 border-slate-300 dark:border-slate-700 text-slate-600 dark:text-gray-300 hover:border-amber-400' }}">

                    {{ $department }}

                </button>

                @endforeach

            </div>


            {{-- JOBS --}}
            <div class="space-y-5">

                @forelse ($this->filteredJobs() as $job)

                <article wire:key="job-{{ $job->id }}" data-aos="fade-up"
                    class="group flex flex-col md:flex-row md:items-center gap-5 p-6 lg:p-8 rounded-2xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 hover:border-amber-400 hover:shadow-lg transition">

                    {{-- ICON --}}
                    <div
                        class="hidden md:flex flex-shrink-0 w-14 h-14 rounded-xl bg-amber-100 dark:bg-amber-500/20 items-center justify-center">

                        <ion-icon name="briefcase-outline" class="text-2xl text-amber-600">
                        </ion-icon>

                    </div>


                    {{-- CONTENT --}}
                    <div class="flex-1">

                        <div class="flex flex-wrap items-center gap-3 mb-2">

                            <h3 class="font-bold text-lg text-slate-900 dark:text-white">

                                {{ $job->title }}

                            </h3>


                            @if ($job->department)

                            <span
                                class="text-xs font-semibold px-2.5 py-1 rounded-full bg-blue-50 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300">

                                {{ $job->department }}

                            </span>

                            @endif

                        </div>


                        @if ($job->summary)

                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">

                            {{ $job->summary }}

                        </p>

                        @endif


                        <div class="flex flex-wrap gap-x-5 gap-y-2 text-xs text-slate-500 dark:text-slate-400">

                            @if ($job->location)

                            <span class="flex items-center gap-1.5">

                                <ion-icon name="location-outline"></ion-icon>

                                {{ $job->location }}

                            </span>

                            @endif


                            @if ($job->type)

                            <span class="flex items-center gap-1.5">

                                <ion-icon name="time-outline"></ion-icon>

                                {{ $job->type }}

                            </span>

                            @endif


                            @if ($job->application_deadline)

                            <span class="flex items-center gap-1.5 text-amber-600 dark:text-amber-400">

                                <ion-icon name="calendar-outline"></ion-icon>

                                Apply by
                                {{ \Illuminate\Support\Carbon::parse($job->application_deadline)->format('M d, Y') }}

                            </span>

                            @endif

                        </div>

                    </div>


                    {{-- CTA --}}
                    <div class="flex shrink-0">

                        <a href="{{ route('job.show', $job->slug) }}"
                            class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-blue-950 hover:bg-accent-yellow text-white hover:text-slate-900 font-semibold transition">

                            View Details

                            <ion-icon name="arrow-forward-outline"></ion-icon>

                        </a>

                    </div>

                </article>

                @empty

                <div class="p-12 rounded-2xl bg-white dark:bg-slate-950 border border-dashed border-slate-300 dark:border-slate-700 text-center"
                    data-aos="fade-up">

                    <div
                        class="mx-auto w-16 h-16 rounded-2xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center">

                        <ion-icon name="search-outline" class="text-3xl text-slate-400">
                        </ion-icon>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-slate-900 dark:text-white">

                        No Open Positions

                    </h3>

                    <p class="mt-2 max-w-xl mx-auto text-slate-600 dark:text-slate-400">

                        There are no open roles in this department right now.
                        You can still send us your CV for future opportunities.

                    </p>

                    <a href="mailto:careers@southendtech.co.ke?subject=General Application"
                        class="inline-flex items-center gap-2 mt-6 px-6 py-3 rounded-xl bg-blue-950 text-white hover:bg-accent-yellow hover:text-slate-900 font-semibold transition">

                        Send General Application

                        <ion-icon name="mail-outline"></ion-icon>

                    </a>

                </div>

                @endforelse

            </div>


            {{-- GENERAL APPLICATION --}}
            <div class="mt-10 p-6 lg:p-8 rounded-2xl bg-blue-950 text-white flex flex-col md:flex-row items-center justify-between gap-5"
                data-aos="zoom-in">

                <div class="flex items-center gap-4">

                    <div
                        class="hidden sm:flex w-14 h-14 rounded-xl bg-white/10 border border-white/10 items-center justify-center shrink-0">

                        <ion-icon name="person-add-outline" class="text-2xl">
                        </ion-icon>

                    </div>

                    <div>

                        <h3 class="font-bold text-lg">
                            Don't See Your Role?
                        </h3>

                        <p class="text-sm text-blue-200">
                            We're always interested in exceptional talent.
                            Send us your CV and introduce yourself.
                        </p>

                    </div>

                </div>


                <a href="mailto:careers@southendtech.co.ke?subject=General Application"
                    class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-accent-yellow hover:bg-amber-400 text-slate-900 font-bold transition shrink-0">

                    General Application

                    <ion-icon name="arrow-forward-outline"></ion-icon>

                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
    HIRING PROCESS
    ========================================================== --}}
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">

        <div class="relative max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">

                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">

                    <ion-icon name="git-branch-outline"></ion-icon>

                    Our Hiring Process

                </div>

                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white">

                    Four Steps To
                    <span class="text-amber-500">
                        Joining The Team
                    </span>

                </h2>

            </div>


            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">

                <div
                    class="absolute top-12 left-[12%] right-[12%] h-1 bg-linear-to-r from-amber-400 via-blue-900 to-amber-400 hidden lg:block opacity-30">
                </div>


                @foreach ($this->hiringStages() as $stage)

                <div class="process-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">

                    <div class="step-number">
                        {{ $stage['step'] }}
                    </div>

                    <h3>
                        {{ $stage['title'] }}
                    </h3>

                    <p>
                        {{ $stage['text'] }}
                    </p>

                </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =========================================================
    CTA
    ========================================================== --}}
    <section class="relative py-24 overflow-hidden">

        <div class="absolute inset-0 bg-blue-950"></div>

        <div class="absolute bottom-0 left-0 w-125 h-125 bg-blue-500/20 rounded-full blur-3xl">
        </div>

        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl">
        </div>


        <div class="relative max-w-5xl mx-auto px-6 text-center">

            <div class="mx-auto w-20 h-20 rounded-2xl bg-amber-500 flex items-center justify-center mb-8"
                data-aos="zoom-in">

                <ion-icon name="sparkles-outline" class="text-5xl text-white">
                </ion-icon>

            </div>


            <h2 data-aos="fade-up" class="text-4xl lg:text-5xl font-extrabold text-white leading-tight">

                Ready To Build The
                <span class="text-amber-400">
                    Future With Us?
                </span>

            </h2>


            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-6 max-w-2xl mx-auto text-lg text-blue-100 leading-relaxed">

                Whether you see an open role or simply believe you can make
                a difference, we'd love to hear from you.

            </p>


            <div data-aos="fade-up" data-aos-delay="200" class="mt-10 flex flex-col sm:flex-row justify-center gap-4">

                <a href="mailto:careers@southendtech.co.ke?subject=General Application"
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-amber-500 hover:bg-amber-400 text-blue-950 font-bold transition shadow-lg shadow-amber-500/30">

                    Send Your CV

                    <ion-icon name="paper-plane-outline"></ion-icon>

                </a>

                <a href="{{ route('contact') }}" wire:navigate
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl border border-white/30 hover:bg-white/10 text-white font-semibold transition">

                    Get In Touch

                    <ion-icon name="arrow-forward-outline"></ion-icon>

                </a>

            </div>

        </div>

    </section>

</div>