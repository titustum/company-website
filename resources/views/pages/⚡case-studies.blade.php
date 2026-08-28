<?php

use Livewire\Component;
use App\Models\CaseStudy;
use Livewire\Attributes\Computed;

new class extends Component
{
    public string $search = '';

    #[Computed]
    public function caseStudies()
    {
        return CaseStudy::query()
            ->published()
            ->when($this->search, function ($query) {
                $search = '%' . $this->search . '%';

                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', $search)
                        ->orWhere('client_name', 'like', $search)
                        ->orWhere('industry', 'like', $search)
                        ->orWhere('category', 'like', $search)
                        ->orWhere('service', 'like', $search)
                        ->orWhere('short_description', 'like', $search);
                });
            })
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->latest()
            ->get();
    }

    public function clearSearch(): void
    {
        $this->search = '';
    }
};
?>

<div class="bg-slate-50 dark:bg-slate-950 min-h-screen">

    {{-- =========================================================
    HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-blue-950 text-white border-b border-blue-900">

        {{-- Background glow --}}
        <div class="absolute -top-32 -right-32
                   w-[500px] h-[500px]
                   bg-amber-500/10
                   rounded-full blur-3xl">
        </div>

        <div class="absolute -bottom-40 -left-20
                   w-[420px] h-[420px]
                   bg-blue-500/10
                   rounded-full blur-3xl">
        </div>

        {{-- Plus symbols --}}
        <div class="absolute top-20 right-[12%]
                   text-amber-400/20
                   text-6xl font-light select-none">
            +
        </div>

        <div class="absolute top-40 right-[27%]
                   text-white/10
                   text-3xl select-none">
            +
        </div>

        <div class="absolute bottom-16 left-[12%]
                   text-amber-400/10
                   text-7xl font-light select-none">
            +
        </div>

        <div class="absolute bottom-32 left-[28%]
                   text-white/10
                   text-4xl select-none">
            +
        </div>


        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28">

            <div class="max-w-4xl" data-aos="fade-up">

                {{-- Eyebrow --}}
                <div class="inline-flex items-center gap-2
                           px-4 py-2 rounded-full
                           bg-amber-500/10
                           border border-amber-400/20
                           text-amber-400
                           font-semibold text-sm">

                    <ion-icon name="briefcase-outline"></ion-icon>

                    Case Studies

                </div>


                {{-- Heading --}}
                <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl
                           font-extrabold leading-tight
                           tracking-tight">

                    Real Problems.
                    <span class="text-amber-400">
                        Practical Solutions.
                    </span>

                </h1>


                {{-- Description --}}
                <p class="mt-6 max-w-3xl
                           text-lg md:text-xl
                           text-blue-100
                           leading-8">

                    Explore how South-End Tech helps organizations solve
                    cybersecurity, data protection, compliance, and digital
                    transformation challenges through practical technology solutions.

                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
    CASE STUDIES
    ========================================================== --}}
    <section class="relative py-20 lg:py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">


            {{-- SECTION HEADER --}}
            <div class="flex flex-col lg:flex-row
                       lg:items-end justify-between
                       gap-8 mb-12" data-aos="fade-up">

                <div class="max-w-2xl">

                    <div class="inline-flex items-center gap-2
                               text-sm font-bold uppercase
                               tracking-wider
                               text-blue-600 dark:text-blue-400">

                        <span class="w-8 h-px bg-blue-600 dark:bg-blue-400"></span>

                        Our Work

                    </div>

                    <h2 class="mt-3 text-3xl md:text-4xl
                               font-extrabold
                               text-slate-900
                               dark:text-white">

                        How We Help Organizations
                        <span class="text-amber-500">
                            Move Forward
                        </span>

                    </h2>

                    <p class="mt-4 text-slate-600
                               dark:text-slate-400
                               leading-7">

                        Discover selected engagements where our team has helped
                        organizations strengthen security, improve compliance,
                        and use technology more effectively.

                    </p>

                </div>


                {{-- SEARCH --}}
                <div class="w-full lg:w-96">

                    <label class="sr-only">
                        Search case studies
                    </label>

                    <div class="relative">

                        <ion-icon name="search-outline" class="absolute left-4 top-1/2
                                   -translate-y-1/2
                                   text-xl text-slate-400">
                        </ion-icon>

                        <input type="search" wire:model.live.debounce.300ms="search"
                            placeholder="Search case studies..." class="w-full pl-12 pr-12 py-3.5
                                   rounded-xl
                                   bg-white dark:bg-slate-900
                                   border border-slate-200
                                   dark:border-slate-800
                                   text-slate-800 dark:text-white
                                   placeholder:text-slate-400
                                   focus:ring-2
                                   focus:ring-blue-500
                                   focus:border-blue-500
                                   outline-none transition">

                        @if ($search)

                        <button type="button" wire:click="clearSearch" class="absolute right-4 top-1/2
                                       -translate-y-1/2
                                       text-slate-400
                                       hover:text-slate-700
                                       dark:hover:text-white">

                            <ion-icon name="close-circle-outline" class="text-xl">
                            </ion-icon>

                        </button>

                        @endif

                    </div>

                </div>

            </div>


            {{-- =====================================================
            RESULTS
            ====================================================== --}}
            @if ($this->caseStudies->count())

            <div class="grid md:grid-cols-2
                           lg:grid-cols-3 gap-7">

                @foreach ($this->caseStudies as $caseStudy)

                <article class="group flex flex-col
                                   overflow-hidden
                                   rounded-2xl
                                   bg-white dark:bg-slate-900
                                   border border-slate-200
                                   dark:border-slate-800
                                   shadow-sm
                                   hover:shadow-xl
                                   hover:-translate-y-1
                                   transition-all duration-300" data-aos="fade-up">

                    {{-- =================================================
                    IMAGE
                    ================================================== --}}
                    <div class="relative h-56
                                       overflow-hidden
                                       bg-blue-950">

                        @if ($caseStudy->hero_image)

                        <img src="{{ asset('storage/' . $caseStudy->hero_image) }}" alt="{{ $caseStudy->title }}" class="w-full h-full
                                               object-cover
                                               group-hover:scale-105
                                               transition duration-500">

                        <div class="absolute inset-0
                                               bg-linear-to-t
                                               from-blue-950/80
                                               via-blue-950/10
                                               to-transparent">
                        </div>

                        @else

                        <div class="w-full h-full
                                               flex items-center
                                               justify-center
                                               bg-linear-to-br
                                               from-blue-700
                                               to-blue-950">

                            <div class="absolute inset-0 opacity-20" style="
                                                background-image:
                                                radial-gradient(
                                                    #fff 1px,
                                                    transparent 1px
                                                );
                                                background-size: 20px 20px;
                                            ">
                            </div>

                            <ion-icon name="briefcase-outline" class="relative
                                                   text-7xl
                                                   text-white/20">
                            </ion-icon>

                        </div>

                        @endif


                        {{-- Featured --}}
                        @if ($caseStudy->is_featured)

                        <div class="absolute top-4 left-4
                                               inline-flex items-center
                                               gap-1.5 px-3 py-1.5
                                               rounded-full
                                               bg-amber-500
                                               text-slate-900
                                               text-xs font-bold
                                               shadow-lg">

                            <ion-icon name="star">
                            </ion-icon>

                            Featured

                        </div>

                        @endif


                        {{-- Category --}}
                        @if ($caseStudy->category)

                        <div class="absolute bottom-4 left-4">

                            <span class="inline-flex
                                                   items-center
                                                   px-3 py-1.5
                                                   rounded-full
                                                   bg-white/95
                                                   text-blue-950
                                                   text-xs font-bold">

                                {{ $caseStudy->category }}

                            </span>

                        </div>

                        @endif

                    </div>


                    {{-- =================================================
                    CONTENT
                    ================================================== --}}
                    <div class="flex flex-col
                                       flex-1 p-6">

                        {{-- Client / Industry --}}
                        <div class="flex items-center
                                           justify-between gap-3">

                            <div class="flex items-center
                                               gap-2 text-sm
                                               font-semibold
                                               text-blue-600
                                               dark:text-blue-400">

                                <ion-icon name="business-outline">
                                </ion-icon>

                                <span>
                                    {{ $caseStudy->client_name }}
                                </span>

                            </div>

                            @if ($caseStudy->industry)

                            <span class="text-xs
                                                   font-medium
                                                   text-slate-400
                                                   whitespace-nowrap">

                                {{ $caseStudy->industry }}

                            </span>

                            @endif

                        </div>


                        {{-- Title --}}
                        <h3 class="mt-4 text-xl
                                           font-bold leading-snug
                                           text-slate-900
                                           dark:text-white
                                           group-hover:text-blue-600
                                           dark:group-hover:text-blue-400
                                           transition">

                            {{ $caseStudy->title }}

                        </h3>


                        {{-- Subtitle --}}
                        @if ($caseStudy->subtitle)

                        <p class="mt-2 text-sm
                                               font-medium
                                               text-slate-500
                                               dark:text-slate-400">

                            {{ $caseStudy->subtitle }}

                        </p>

                        @endif


                        {{-- Description --}}
                        <p class="mt-4 text-sm
                                           leading-6
                                           text-slate-600
                                           dark:text-slate-400
                                           line-clamp-3">

                            {{ $caseStudy->short_description }}

                        </p>


                        {{-- Service --}}
                        @if ($caseStudy->service)

                        <div class="mt-5 flex items-center
                                               gap-2 text-sm
                                               text-slate-600
                                               dark:text-slate-300">

                            <span class="w-8 h-8
                                                   rounded-lg
                                                   bg-amber-50
                                                   dark:bg-amber-500/10
                                                   flex items-center
                                                   justify-center">

                                <ion-icon name="shield-checkmark-outline" class="text-amber-500">
                                </ion-icon>

                            </span>

                            <span class="font-medium">
                                {{ $caseStudy->service }}
                            </span>

                        </div>

                        @endif


                        {{-- Results --}}
                        @if (!empty($caseStudy->results))

                        <div class="mt-5">

                            <p class="text-xs uppercase
                                                   tracking-wider
                                                   font-bold
                                                   text-slate-400">

                                Key Outcomes

                            </p>

                            <div class="mt-2 space-y-1.5">

                                @foreach (array_slice($caseStudy->results, 0, 2) as $result)

                                <div class="flex items-start
                                                           gap-2 text-sm
                                                           text-slate-600
                                                           dark:text-slate-400">

                                    <ion-icon name="checkmark-circle" class="mt-0.5
                                                               shrink-0
                                                               text-green-500">
                                    </ion-icon>

                                    <span>
                                        {{ $result }}
                                    </span>

                                </div>

                                @endforeach

                            </div>

                        </div>

                        @endif


                        {{-- CTA --}}
                        <div class="mt-auto pt-7">

                            <a href="{{ route('case-study.show', $caseStudy->slug) }}" wire:navigate class="inline-flex
                                               items-center
                                               justify-center
                                               gap-2
                                               w-full
                                               px-5 py-3
                                               rounded-xl
                                               bg-blue-950
                                               hover:bg-blue-900
                                               dark:bg-blue-800
                                               dark:hover:bg-blue-700
                                               text-white
                                               font-semibold
                                               transition">

                                View Case Study

                                <ion-icon name="arrow-forward-outline" class="text-lg
                                                   transition-transform
                                                   group-hover:translate-x-1">
                                </ion-icon>

                            </a>

                        </div>

                    </div>

                </article>

                @endforeach

            </div>


            {{-- RESULT COUNT --}}
            <div class="mt-10 text-center
                           text-sm
                           text-slate-500
                           dark:text-slate-400">

                Showing
                <span class="font-semibold
                               text-slate-700
                               dark:text-slate-200">

                    {{ $this->caseStudies->count() }}

                </span>

                {{ $this->caseStudies->count() === 1
                ? 'case study'
                : 'case studies' }}

            </div>

            @else

            {{-- =================================================
            EMPTY STATE
            ================================================== --}}
            <div class="py-20 text-center" data-aos="fade-up">

                <div class="mx-auto w-20 h-20
                               rounded-2xl
                               bg-blue-50
                               dark:bg-blue-900/30
                               flex items-center
                               justify-center">

                    <ion-icon name="briefcase-outline" class="text-4xl
                                   text-blue-600
                                   dark:text-blue-400">
                    </ion-icon>

                </div>

                <h3 class="mt-6 text-2xl
                               font-bold
                               text-slate-900
                               dark:text-white">

                    No Case Studies Found

                </h3>

                <p class="mt-3
                               text-slate-500
                               dark:text-slate-400">

                    We couldn't find any case studies
                    matching your search.

                </p>

                @if ($search)

                <button type="button" wire:click="clearSearch" class="mt-6 inline-flex
                                   items-center gap-2
                                   px-5 py-3
                                   rounded-xl
                                   bg-blue-600
                                   hover:bg-blue-700
                                   text-white
                                   font-semibold
                                   transition">

                    <ion-icon name="refresh-outline">
                    </ion-icon>

                    Clear Search

                </button>

                @endif

            </div>

            @endif

        </div>

    </section>


    {{-- =========================================================
    CTA
    ========================================================== --}}
    <section class="relative py-20
               bg-blue-950
               text-white overflow-hidden">

        <div class="absolute top-0 right-0
                   w-96 h-96
                   bg-amber-500/10
                   rounded-full blur-3xl">
        </div>

        <div class="absolute bottom-0 left-0
                   w-72 h-72
                   bg-blue-500/10
                   rounded-full blur-3xl">
        </div>


        <div class="relative max-w-4xl mx-auto
                   px-6 text-center" data-aos="fade-up">

            <div class="mx-auto w-16 h-16
                       rounded-2xl
                       bg-amber-500
                       flex items-center
                       justify-center">

                <ion-icon name="rocket-outline" class="text-3xl text-slate-900">
                </ion-icon>

            </div>


            <h2 class="mt-7 text-3xl md:text-4xl
                       font-extrabold">

                Have a Technology Challenge
                <span class="text-amber-400">
                    We Can Solve?
                </span>

            </h2>


            <p class="mt-5 text-blue-100
                       leading-7 max-w-2xl mx-auto">

                Every organization has different requirements.
                Let's discuss your cybersecurity, data protection,
                compliance, or digital transformation needs.

            </p>


            <div class="mt-8 flex flex-col sm:flex-row
                       justify-center gap-4">

                <a href="{{ route('book') }}" wire:navigate class="inline-flex
                           items-center
                           justify-center
                           gap-2
                           px-7 py-3.5
                           rounded-xl
                           bg-amber-500
                           hover:bg-amber-400
                           text-slate-900
                           font-bold
                           transition">

                    Book a Consultation

                    <ion-icon name="arrow-forward-outline">
                    </ion-icon>

                </a>


                <a href="{{ route('contact') }}" wire:navigate class="inline-flex
                           items-center
                           justify-center
                           gap-2
                           px-7 py-3.5
                           rounded-xl
                           border border-blue-700
                           hover:bg-blue-900
                           text-white
                           font-semibold
                           transition">

                    Contact Our Team

                    <ion-icon name="call-outline">
                    </ion-icon>

                </a>

            </div>

        </div>

    </section>

</div>