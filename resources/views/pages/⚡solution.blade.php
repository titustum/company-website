<?php

use App\Models\Solution;
use Livewire\Component;

new class extends Component
{
    public Solution $solution;

    public function mount($slug)
    {
        $this->solution = Solution::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function render()
    {
        return $this->view()
            ->title($this->solution->title . ' | South-End Tech');
    }
};
?>

<div class="bg-white dark:bg-slate-950 text-slate-800 dark:text-slate-100">

    {{-- ========================================================= --}}
    {{-- HERO --}}
    {{-- ========================================================= --}}
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">

        {{-- Decorative background --}}
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -left-32 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>

        {{-- Plus pattern --}}
        <div class="absolute top-16 right-[12%] text-blue-600/10 dark:text-blue-400/10 text-6xl font-light select-none">
            +
        </div>

        <div class="absolute bottom-16 left-[8%] text-amber-500/10 text-7xl font-light select-none">
            +
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28">

            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-8">
                <a href="/" wire:navigate class="hover:text-blue-600 transition">
                    Home
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <a href="/#solutions" class="hover:text-blue-600 transition">
                    Solutions
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="text-slate-700 dark:text-slate-200">
                    {{ $solution->title }}
                </span>
            </div>

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                {{-- Content --}}
                <div data-aos="fade-up">

                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                        bg-blue-50 dark:bg-blue-500/10
                        border border-blue-200 dark:border-blue-500/20
                        text-blue-700 dark:text-blue-400
                        text-sm font-semibold">

                        <ion-icon name="{{ $solution->icon ?? 'shield-check-outline' }}"></ion-icon>

                        South-End Tech Solution
                    </div>

                    <h1 class="mt-6 text-4xl md:text-5xl xl:text-6xl
                        font-extrabold leading-tight tracking-tight
                        text-slate-900 dark:text-white">

                        {{ $solution->title }}
                    </h1>

                    @if ($solution->subtitle)
                    <p class="mt-6 text-xl lg:text-2xl font-semibold
                            text-blue-600 dark:text-blue-400 leading-relaxed">
                        {{ $solution->subtitle }}
                    </p>
                    @endif

                    @if ($solution->short_description)
                    <p class="mt-6 text-lg leading-8
                            text-slate-600 dark:text-slate-300 max-w-2xl">
                        {{ $solution->short_description }}
                    </p>
                    @endif

                    <div class="mt-9 flex flex-wrap gap-4">

                        <a href="/book" wire:navigate class="inline-flex items-center justify-center gap-2
                            px-7 py-4 rounded-xl
                            bg-amber-500 hover:bg-amber-400
                            text-slate-950 font-bold
                            shadow-lg shadow-amber-500/20
                            transition">

                            <ion-icon name="calendar-outline" class="text-xl"></ion-icon>

                            Book a Consultation
                        </a>

                        <a href="/contact" wire:navigate class="inline-flex items-center justify-center gap-2
                            px-7 py-4 rounded-xl
                            border border-slate-300 dark:border-slate-700
                            bg-white dark:bg-slate-900
                            hover:bg-slate-100 dark:hover:bg-slate-800
                            font-semibold transition">

                            Talk To Our Experts

                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>

                    </div>
                </div>

                {{-- Visual --}}
                <div data-aos="zoom-in" data-aos-duration="900">

                    <div class="relative">

                        <div class="absolute -inset-4
                            bg-blue-600/10 dark:bg-blue-500/10
                            rounded-[2rem] blur-2xl">
                        </div>

                        <div class="relative overflow-hidden
                            rounded-3xl
                            border border-slate-200 dark:border-slate-700
                            bg-white dark:bg-slate-900
                            shadow-2xl">

                            @if ($solution->hero_image)
                            <img src="{{ asset('storage/' . $solution->hero_image) }}" alt="{{ $solution->title }}"
                                class="w-full h-[420px] object-cover">
                            @else
                            <div class="h-[420px]
                                    bg-gradient-to-br from-blue-700 via-blue-800 to-slate-950
                                    flex items-center justify-center">

                                <div class="text-center">

                                    <div class="mx-auto w-28 h-28 rounded-3xl
                                            bg-amber-500
                                            flex items-center justify-center
                                            shadow-2xl shadow-amber-500/30">

                                        <ion-icon name="{{ $solution->icon ?? 'shield-check-outline' }}"
                                            class="text-6xl text-white">
                                        </ion-icon>

                                    </div>

                                    <p class="mt-6 text-white text-xl font-bold">
                                        Secure. Compliant. Future-Ready.
                                    </p>

                                </div>
                            </div>
                            @endif

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ========================================================= --}}
    {{-- OVERVIEW --}}
    {{-- ========================================================= --}}
    @if ($solution->description)
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-950">

        <div class="max-w-5xl mx-auto px-6">

            <div class="max-w-3xl" data-aos="fade-up">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-600">
                    Overview
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold
                        text-slate-900 dark:text-white">
                    Technology Solutions Built Around Your Business
                </h2>

            </div>

            <div class="mt-10 prose prose-lg max-w-none
                    prose-slate
                    dark:prose-invert
                    prose-headings:font-bold
                    prose-a:text-blue-600
                    prose-strong:text-slate-900
                    dark:prose-strong:text-white" data-aos="fade-up" data-aos-delay="100">

                {!! $solution->description !!}

            </div>

        </div>

    </section>
    @endif


    {{-- ========================================================= --}}
    {{-- FEATURES --}}
    {{-- ========================================================= --}}
    @if (!empty($solution->features))
    <section class="relative py-20 lg:py-24
            bg-slate-50 dark:bg-slate-900/60
            overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96
                bg-blue-600/5 rounded-full blur-3xl">
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mb-14" data-aos="fade-up">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-600">
                    What We Deliver
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold
                        text-slate-900 dark:text-white">
                    Comprehensive {{ $solution->title }}
                </h2>

                <p class="mt-5 text-lg leading-8
                        text-slate-600 dark:text-slate-300">
                    Practical capabilities designed to address your organization's
                    technology, security, compliance, and operational requirements.
                </p>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($solution->features as $index => $feature)

                <div data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}" class="group p-7 rounded-2xl
                            bg-white dark:bg-slate-950
                            border border-slate-200 dark:border-slate-800
                            hover:border-blue-500/50
                            hover:-translate-y-1
                            shadow-sm hover:shadow-xl
                            transition-all duration-300">

                    <div class="w-14 h-14 rounded-xl
                                bg-blue-50 dark:bg-blue-500/10
                                text-blue-600 dark:text-blue-400
                                flex items-center justify-center
                                group-hover:bg-blue-600
                                group-hover:text-white
                                transition">

                        <ion-icon name="{{ $feature['icon'] ?? 'checkmark-circle-outline' }}" class="text-2xl">
                        </ion-icon>

                    </div>

                    <h3 class="mt-6 text-xl font-bold
                                text-slate-900 dark:text-white">
                        {{ $feature['title'] }}
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400 leading-7">
                        {{ $feature['description'] }}
                    </p>

                </div>

                @endforeach

            </div>

        </div>
    </section>
    @endif


    {{-- ========================================================= --}}
    {{-- BENEFITS --}}
    {{-- ========================================================= --}}
    @if (!empty($solution->benefits))
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-950">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-[0.8fr_1.2fr] gap-16 items-start">

                <div data-aos="fade-right">

                    <span class="text-sm font-bold uppercase tracking-widest text-amber-600">
                        Why It Matters
                    </span>

                    <h2 class="mt-3 text-3xl md:text-4xl font-extrabold
                            text-slate-900 dark:text-white">
                        Benefits For Your Organization
                    </h2>

                    <p class="mt-6 text-lg leading-8
                            text-slate-600 dark:text-slate-300">
                        We focus on measurable improvements that help organizations
                        reduce risk, improve efficiency, and create long-term value.
                    </p>

                    <a href="/contact" wire:navigate class="mt-8 inline-flex items-center gap-2
                            text-blue-600 dark:text-blue-400
                            font-bold hover:gap-3 transition-all">

                        Discuss Your Requirements

                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>

                <div class="grid sm:grid-cols-2 gap-5">

                    @foreach ($solution->benefits as $index => $benefit)

                    <div data-aos="fade-up" data-aos-delay="{{ ($index % 2) * 100 }}" class="p-6 rounded-2xl
                                bg-slate-50 dark:bg-slate-900
                                border border-slate-200 dark:border-slate-800">

                        <div class="flex items-start gap-4">

                            <div class="shrink-0 w-11 h-11 rounded-xl
                                        bg-amber-500
                                        text-white
                                        flex items-center justify-center">

                                <ion-icon name="{{ $benefit['icon'] ?? 'checkmark-outline' }}" class="text-xl">
                                </ion-icon>

                            </div>

                            <div>
                                <h3 class="font-bold text-lg
                                            text-slate-900 dark:text-white">
                                    {{ $benefit['title'] }}
                                </h3>

                                <p class="mt-2 text-sm leading-6
                                            text-slate-600 dark:text-slate-400">
                                    {{ $benefit['description'] }}
                                </p>
                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </div>

    </section>
    @endif


    {{-- ========================================================= --}}
    {{-- PROCESS --}}
    {{-- ========================================================= --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-900/60">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-600">
                    Our Approach
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold
                    text-slate-900 dark:text-white">
                    How We Work With Your Organization
                </h2>

                <p class="mt-5 text-lg text-slate-600 dark:text-slate-300">
                    A structured approach designed to ensure every engagement
                    is aligned with your goals, risks, and operational requirements.
                </p>

            </div>

            <div class="grid md:grid-cols-4 gap-6 mt-14">

                @php
                $steps = [
                [
                'number' => '01',
                'title' => 'Understand',
                'description' => 'We assess your current technology, security, data, and compliance environment.',
                'icon' => 'search-outline',
                ],
                [
                'number' => '02',
                'title' => 'Recommend',
                'description' => 'We design practical recommendations aligned with your objectives, risks, and budget.',
                'icon' => 'bulb-outline',
                ],
                [
                'number' => '03',
                'title' => 'Implement',
                'description' => 'Our specialists deploy, configure, integrate, and optimize the required solutions.',
                'icon' => 'construct-outline',
                ],
                [
                'number' => '04',
                'title' => 'Support',
                'description' => 'We continuously monitor, improve, and support your environment as your technology
                partner.',
                'icon' => 'headset-outline',
                ],
                ];
                @endphp

                @foreach ($steps as $index => $step)

                <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" class="relative p-7 rounded-2xl
                        bg-white dark:bg-slate-950
                        border border-slate-200 dark:border-slate-800
                        text-center">

                    <div class="mx-auto w-14 h-14 rounded-full
                            bg-blue-600 text-white
                            flex items-center justify-center
                            text-lg font-extrabold">

                        {{ $step['number'] }}

                    </div>

                    <div class="mt-5 text-blue-600 dark:text-blue-400">
                        <ion-icon name="{{ $step['icon'] }}" class="text-2xl">
                        </ion-icon>
                    </div>

                    <h3 class="mt-3 text-xl font-bold
                            text-slate-900 dark:text-white">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6
                            text-slate-600 dark:text-slate-400">
                        {{ $step['description'] }}
                    </p>

                </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- ========================================================= --}}
    {{-- FAQ --}}
    {{-- ========================================================= --}}
    @if (!empty($solution->faqs))
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-950">

        <div class="max-w-4xl mx-auto px-6">

            <div class="text-center mb-12" data-aos="fade-up">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-600">
                    Frequently Asked Questions
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold
                        text-slate-900 dark:text-white">
                    Questions About {{ $solution->title }}
                </h2>

            </div>

            <div class="space-y-4">

                @foreach ($solution->faqs as $index => $faq)

                <details class="group rounded-2xl
                            border border-slate-200 dark:border-slate-800
                            bg-slate-50 dark:bg-slate-900
                            overflow-hidden">

                    <summary class="flex items-center justify-between gap-5
                                cursor-pointer p-6
                                font-bold text-lg
                                text-slate-900 dark:text-white
                                list-none">

                        <span>
                            {{ $faq['question'] }}
                        </span>

                        <span class="shrink-0 w-8 h-8 rounded-full
                                    bg-white dark:bg-slate-800
                                    border border-slate-200 dark:border-slate-700
                                    flex items-center justify-center">

                            <ion-icon name="add-outline" class="text-xl transition-transform duration-300
                                        group-open:rotate-45">
                            </ion-icon>

                        </span>

                    </summary>

                    <div class="px-6 pb-6
                                text-slate-600 dark:text-slate-400
                                leading-7">

                        {{ $faq['answer'] }}

                    </div>

                </details>

                @endforeach

            </div>

        </div>

    </section>
    @endif


    {{-- ========================================================= --}}
    {{-- CTA --}}
    {{-- ========================================================= --}}
    <section class="relative overflow-hidden
        bg-blue-950 text-white">

        <div class="absolute inset-0">

            <div class="absolute -top-24 -right-24
                w-96 h-96 rounded-full
                bg-blue-500/20 blur-3xl">
            </div>

            <div class="absolute -bottom-32 -left-20
                w-96 h-96 rounded-full
                bg-amber-500/10 blur-3xl">
            </div>

            {{-- Plus symbols --}}
            <div class="absolute top-10 left-[15%] text-white/5 text-7xl">
                +
            </div>

            <div class="absolute bottom-10 right-[12%] text-amber-400/10 text-8xl">
                +
            </div>

        </div>

        <div class="relative max-w-5xl mx-auto px-6 py-20 lg:py-24 text-center" data-aos="fade-up">

            <div class="mx-auto w-16 h-16 rounded-2xl
                bg-amber-500
                flex items-center justify-center">

                <ion-icon name="{{ $solution->icon ?? 'arrow-forward-outline' }}" class="text-3xl text-white">
                </ion-icon>

            </div>

            <h2 class="mt-7 text-3xl md:text-4xl lg:text-5xl
                font-extrabold">
                Ready To Strengthen Your Organization?
            </h2>

            <p class="mt-5 max-w-2xl mx-auto
                text-lg leading-8 text-blue-100">
                Whether you are looking to reduce risk, improve compliance,
                unlock your data, or modernize your operations, our specialists
                are ready to help.
            </p>

            <div class="mt-9 flex flex-wrap justify-center gap-4">

                <a href="/book" wire:navigate class="inline-flex items-center gap-2
                    px-8 py-4 rounded-xl
                    bg-amber-500 hover:bg-amber-400
                    text-slate-950 font-bold
                    transition">

                    Book a Consultation

                    <ion-icon name="arrow-forward-outline"></ion-icon>

                </a>

                <a href="/contact" wire:navigate class="inline-flex items-center gap-2
                    px-8 py-4 rounded-xl
                    border border-white/20
                    bg-white/10 hover:bg-white/20
                    text-white font-semibold
                    transition">

                    Contact Our Team

                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                </a>

            </div>

        </div>

    </section>

</div>