<?php

use App\Models\JobOpening;
use Livewire\Component;

new #[\Livewire\Attributes\Title('Job Opening | South-End Tech Limited')] class extends Component
{
    public JobOpening $job;

    public function mount(string $slug): void
    {
        $this->job = JobOpening::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function getPageTitleProperty(): string
    {
        return $this->job->title . ' | Careers | South-End Tech Limited';
    }

    public function getApplicationOpenProperty(): bool
    {
        if (!$this->job->application_dateline) {
            return true;
        }

        return $this->job->application_dateline->isToday()
            || $this->job->application_dateline->isFuture();
    }

    public function render()
    {
        return $this->view()
            ->title($this->job->title . ' | Careers | South-End Tech');
    }
};
?>


<div>

    {{-- =========================================================
    HERO
    ========================================================== --}}
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">

        <div class="absolute top-0 right-0 w-125 h-125 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-16 lg:py-24">

            {{-- Breadcrumb --}}
            <div data-aos="fade-down"
                class="flex flex-wrap items-center gap-2 text-sm text-slate-500 dark:text-slate-400">

                <a href="{{ route('careers') }}" wire:navigate
                    class="hover:text-blue-600 dark:hover:text-blue-400 transition">

                    Careers

                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="text-slate-700 dark:text-slate-200">
                    {{ $job->title }}
                </span>

            </div>


            <div class="mt-10 max-w-4xl">

                {{-- Department --}}
                @if ($job->department)

                <div data-aos="fade-up"
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-700 dark:text-amber-400 font-semibold text-sm">

                    <ion-icon name="briefcase-outline"></ion-icon>

                    {{ $job->department }}

                </div>

                @endif


                {{-- Title --}}
                <h1 data-aos="fade-up" data-aos-delay="50"
                    class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight text-slate-900 dark:text-white">

                    {{ $job->title }}

                </h1>


                {{-- Summary --}}
                @if ($job->summary)

                <p data-aos="fade-up" data-aos-delay="100"
                    class="mt-6 text-lg lg:text-xl leading-8 text-slate-600 dark:text-slate-300 max-w-3xl">

                    {{ $job->summary }}

                </p>

                @endif


                {{-- Job metadata --}}
                <div data-aos="fade-up" data-aos-delay="150" class="mt-8 flex flex-wrap gap-3">

                    @if ($job->location)

                    <span
                        class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-sm font-semibold text-slate-700 dark:text-slate-200 shadow-sm">

                        <ion-icon name="location-outline" class="text-lg text-amber-500">
                        </ion-icon>

                        {{ $job->location }}

                    </span>

                    @endif


                    @if ($job->type)

                    <span
                        class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-sm font-semibold text-slate-700 dark:text-slate-200 shadow-sm">

                        <ion-icon name="time-outline" class="text-lg text-blue-600 dark:text-blue-400">
                        </ion-icon>

                        {{ $job->type }}

                    </span>

                    @endif


                    @if ($job->application_dateline)

                    <span
                        class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-sm font-semibold text-slate-700 dark:text-slate-200 shadow-sm">

                        <ion-icon name="calendar-outline" class="text-lg text-amber-500">
                        </ion-icon>

                        Apply by
                        {{ $job->application_dateline->format('M d, Y') }}

                    </span>

                    @endif

                </div>


                {{-- Hero CTA --}}
                <div data-aos="fade-up" data-aos-delay="200" class="mt-10 flex flex-col sm:flex-row gap-4">

                    <a href="mailto:careers@southendtech.co.ke?subject={{ urlencode('Application: '.$job->title) }}"
                        class="inline-flex items-center justify-center gap-3 px-7 py-4 rounded-xl bg-blue-950 hover:bg-accent-yellow text-white hover:text-slate-900 font-bold transition shadow-lg">

                        Apply For This Position

                        <ion-icon name="arrow-forward-outline"></ion-icon>

                    </a>


                    <a href="#job-details"
                        class="inline-flex items-center justify-center gap-3 px-7 py-4 rounded-xl border border-slate-300 dark:border-slate-700 hover:border-amber-400 text-slate-700 dark:text-white font-semibold transition">

                        View Job Details

                        <ion-icon name="arrow-down-outline"></ion-icon>

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    JOB DETAILS
    ========================================================== --}}
    <section id="job-details" class="relative py-20 lg:py-24 bg-white dark:bg-slate-950">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-3 gap-12 lg:gap-16">


                {{-- =================================================
                MAIN CONTENT
                ================================================== --}}
                <main class="lg:col-span-2 space-y-12">


                    {{-- DESCRIPTION --}}
                    @if ($job->description)

                    <section data-aos="fade-up">

                        <div class="flex items-center gap-3 mb-6">

                            <div
                                class="w-11 h-11 rounded-xl bg-blue-100 dark:bg-blue-900/40 flex items-center justify-center">

                                <ion-icon name="document-text-outline" class="text-xl text-blue-700 dark:text-blue-400">
                                </ion-icon>

                            </div>

                            <h2 class="text-2xl lg:text-3xl font-extrabold text-slate-900 dark:text-white">

                                About The Role

                            </h2>

                        </div>


                        <div
                            class="prose prose-slate dark:prose-invert max-w-none prose-p:leading-8 prose-li:leading-7">

                            {!! $job->description !!}

                        </div>

                    </section>

                    @endif


                    {{-- RESPONSIBILITIES --}}
                    @if (!empty($job->responsibilities))

                    <section data-aos="fade-up">

                        <div class="flex items-center gap-3 mb-6">

                            <div
                                class="w-11 h-11 rounded-xl bg-amber-100 dark:bg-amber-500/20 flex items-center justify-center">

                                <ion-icon name="checkmark-done-outline" class="text-xl text-amber-600">
                                </ion-icon>

                            </div>

                            <h2 class="text-2xl lg:text-3xl font-extrabold text-slate-900 dark:text-white">

                                Key Responsibilities

                            </h2>

                        </div>


                        <div class="space-y-4">

                            @foreach ($job->responsibilities as $responsibility)

                            <div class="flex gap-4">

                                <div
                                    class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/40 flex items-center justify-center">

                                    <ion-icon name="checkmark-outline" class="text-sm text-blue-700 dark:text-blue-400">
                                    </ion-icon>

                                </div>

                                <p class="text-slate-600 dark:text-slate-300 leading-7">

                                    {{ $responsibility }}

                                </p>

                            </div>

                            @endforeach

                        </div>

                    </section>

                    @endif


                    {{-- REQUIREMENTS --}}
                    @if (!empty($job->requirements))

                    <section data-aos="fade-up">

                        <div class="flex items-center gap-3 mb-6">

                            <div
                                class="w-11 h-11 rounded-xl bg-blue-100 dark:bg-blue-900/40 flex items-center justify-center">

                                <ion-icon name="school-outline" class="text-xl text-blue-700 dark:text-blue-400">
                                </ion-icon>

                            </div>

                            <h2 class="text-2xl lg:text-3xl font-extrabold text-slate-900 dark:text-white">

                                Requirements

                            </h2>

                        </div>


                        <div class="space-y-4">

                            @foreach ($job->requirements as $requirement)

                            <div
                                class="flex gap-4 p-4 rounded-xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800">

                                <ion-icon name="checkmark-circle-outline"
                                    class="mt-0.5 flex-shrink-0 text-xl text-amber-500">
                                </ion-icon>

                                <p class="text-slate-600 dark:text-slate-300 leading-7">

                                    {{ $requirement }}

                                </p>

                            </div>

                            @endforeach

                        </div>

                    </section>

                    @endif


                    {{-- BENEFITS --}}
                    @if (!empty($job->benefits))

                    <section data-aos="fade-up">

                        <div class="flex items-center gap-3 mb-6">

                            <div
                                class="w-11 h-11 rounded-xl bg-amber-100 dark:bg-amber-500/20 flex items-center justify-center">

                                <ion-icon name="gift-outline" class="text-xl text-amber-600">
                                </ion-icon>

                            </div>

                            <h2 class="text-2xl lg:text-3xl font-extrabold text-slate-900 dark:text-white">

                                What We Offer

                            </h2>

                        </div>


                        <div class="grid sm:grid-cols-2 gap-4">

                            @foreach ($job->benefits as $benefit)

                            <div
                                class="p-5 rounded-xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800">

                                <div
                                    class="w-9 h-9 rounded-lg bg-white dark:bg-slate-800 flex items-center justify-center mb-3">

                                    <ion-icon name="sparkles-outline" class="text-lg text-amber-500">
                                    </ion-icon>

                                </div>

                                <p class="font-semibold text-slate-800 dark:text-slate-200">

                                    {{ $benefit }}

                                </p>

                            </div>

                            @endforeach

                        </div>

                    </section>

                    @endif


                    {{-- EQUAL OPPORTUNITY --}}
                    <section data-aos="fade-up" class="p-6 lg:p-8 rounded-2xl bg-blue-950 text-white">

                        <div class="flex gap-5">

                            <div
                                class="hidden sm:flex w-12 h-12 rounded-xl bg-white/10 items-center justify-center flex-shrink-0">

                                <ion-icon name="people-outline" class="text-2xl text-amber-400">
                                </ion-icon>

                            </div>

                            <div>

                                <h3 class="font-bold text-lg">
                                    Join A Growing Technology Team
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-blue-100">

                                    South-End Tech is committed to building a
                                    collaborative environment where talented
                                    professionals can learn, contribute, and grow.

                                </p>

                            </div>

                        </div>

                    </section>

                </main>


                {{-- =================================================
                SIDEBAR
                ================================================== --}}
                <aside class="lg:col-span-1">

                    <div class="lg:sticky lg:top-28 space-y-6">


                        {{-- APPLY CARD --}}
                        <div data-aos="fade-left" class="rounded-2xl bg-blue-950 p-7 text-white shadow-xl">

                            <div class="w-12 h-12 rounded-xl bg-amber-500 flex items-center justify-center">

                                <ion-icon name="paper-plane-outline" class="text-2xl text-white">
                                </ion-icon>

                            </div>


                            <h3 class="mt-6 text-xl font-bold">
                                Interested In This Role?
                            </h3>


                            <p class="mt-3 text-sm leading-6 text-blue-100">

                                Send your CV and application to our recruitment
                                team. Please include the position title in your
                                email subject.

                            </p>


                            <a href="mailto:careers@southendtech.co.ke?subject={{ urlencode('Application: '.$job->title) }}"
                                class="mt-6 w-full inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl bg-accent-yellow hover:bg-amber-400 text-slate-900 font-bold transition">

                                Apply Now

                                <ion-icon name="arrow-forward-outline"></ion-icon>

                            </a>


                            @if ($job->application_dateline)

                            <p class="mt-4 text-xs text-center text-blue-200">

                                Applications close
                                {{ $job->application_dateline->format('F d, Y') }}

                            </p>

                            @endif

                        </div>


                        {{-- JOB SUMMARY --}}
                        <div data-aos="fade-left" data-aos-delay="100"
                            class="rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-6">

                            <h3 class="font-bold text-lg text-slate-900 dark:text-white">

                                Job Overview

                            </h3>


                            <div class="mt-5 divide-y divide-slate-200 dark:divide-slate-800">


                                @if ($job->department)

                                <div class="py-4 flex items-start gap-3">

                                    <ion-icon name="business-outline" class="mt-0.5 text-xl text-amber-500">
                                    </ion-icon>

                                    <div>

                                        <p class="text-xs text-slate-500">
                                            Department
                                        </p>

                                        <p class="mt-1 font-semibold text-slate-800 dark:text-slate-200">

                                            {{ $job->department }}

                                        </p>

                                    </div>

                                </div>

                                @endif


                                @if ($job->type)

                                <div class="py-4 flex items-start gap-3">

                                    <ion-icon name="time-outline"
                                        class="mt-0.5 text-xl text-blue-600 dark:text-blue-400">
                                    </ion-icon>

                                    <div>

                                        <p class="text-xs text-slate-500">
                                            Employment Type
                                        </p>

                                        <p class="mt-1 font-semibold text-slate-800 dark:text-slate-200">

                                            {{ $job->type }}

                                        </p>

                                    </div>

                                </div>

                                @endif


                                @if ($job->location)

                                <div class="py-4 flex items-start gap-3">

                                    <ion-icon name="location-outline" class="mt-0.5 text-xl text-amber-500">
                                    </ion-icon>

                                    <div>

                                        <p class="text-xs text-slate-500">
                                            Location
                                        </p>

                                        <p class="mt-1 font-semibold text-slate-800 dark:text-slate-200">

                                            {{ $job->location }}

                                        </p>

                                    </div>

                                </div>

                                @endif


                                @if ($job->application_dateline)

                                <div class="py-4 flex items-start gap-3">

                                    <ion-icon name="calendar-outline"
                                        class="mt-0.5 text-xl text-blue-600 dark:text-blue-400">
                                    </ion-icon>

                                    <div>

                                        <p class="text-xs text-slate-500">
                                            Application Deadline
                                        </p>

                                        <p class="mt-1 font-semibold text-slate-800 dark:text-slate-200">

                                            {{ $job->application_dateline->format('M d, Y') }}

                                        </p>

                                    </div>

                                </div>

                                @endif

                            </div>

                        </div>


                        {{-- BACK TO CAREERS --}}
                        <a href="{{ route('careers') }}" wire:navigate
                            class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl border border-slate-300 dark:border-slate-700 hover:border-amber-400 text-slate-700 dark:text-slate-300 hover:text-amber-600 dark:hover:text-amber-400 font-semibold transition">

                            <ion-icon name="arrow-back-outline"></ion-icon>

                            Back To Careers

                        </a>

                    </div>

                </aside>

            </div>

        </div>

    </section>


    {{-- =========================================================
    BOTTOM CTA
    ========================================================== --}}
    <section class="relative py-20 overflow-hidden">

        <div class="absolute inset-0 bg-slate-50 dark:bg-slate-900"></div>

        <div class="absolute top-0 left-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-5xl mx-auto px-6 text-center">

            <div class="mx-auto w-16 h-16 rounded-2xl bg-amber-500 flex items-center justify-center" data-aos="zoom-in">

                <ion-icon name="people-outline" class="text-3xl text-white">
                </ion-icon>

            </div>


            <h2 data-aos="fade-up" class="mt-7 text-3xl lg:text-4xl font-extrabold text-slate-900 dark:text-white">

                Don't See The Right Role?

            </h2>


            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-4 max-w-2xl mx-auto text-slate-600 dark:text-slate-400 leading-7">

                We're always interested in meeting talented people.
                Send us your CV and tell us how you could contribute to
                South-End Tech.

            </p>


            <a data-aos="fade-up" data-aos-delay="150"
                href="mailto:careers@southendtech.co.ke?subject=General Application"
                class="mt-7 inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-blue-950 hover:bg-accent-yellow text-white hover:text-slate-900 font-bold transition">

                Send General Application

                <ion-icon name="mail-outline"></ion-icon>

            </a>

        </div>

    </section>

</div>