<?php

use Livewire\Component;
use App\Models\CaseStudy;

new class extends Component
{
    public CaseStudy $caseStudy;

    public function mount($slug)
    {
        $this->caseStudy = CaseStudy::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function render()
    {
        return $this->view()
            ->title($this->caseStudy->title);
    }
};
?>

<div class="bg-slate-50 dark:bg-slate-950 text-slate-800 dark:text-slate-100">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-blue-950 text-white">

        {{-- Background decorations --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28">

            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-blue-200 mb-8" data-aos="fade-up">
                <a href="/" wire:navigate class="hover:text-amber-400 transition">
                    Home
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <a href="/case-studies" wire:navigate class="hover:text-amber-400 transition">
                    Case Studies
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="text-white">
                    {{ $caseStudy->title }}
                </span>
            </div>

            <div class="grid lg:grid-cols-2 gap-14 items-center">

                {{-- Hero content --}}
                <div data-aos="fade-up">

                    @if ($caseStudy->industry)
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                                    bg-amber-500/10 border border-amber-400/30
                                    text-amber-400 font-semibold text-sm">

                        <ion-icon name="business-outline"></ion-icon>

                        {{ $caseStudy->industry }}

                    </div>
                    @endif

                    <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl
                               font-extrabold leading-tight">

                        {{ $caseStudy->title }}

                    </h1>

                    @if ($caseStudy->short_description)
                    <p class="mt-6 text-lg md:text-xl text-blue-100 leading-8 max-w-2xl">

                        {{ $caseStudy->short_description }}

                    </p>
                    @endif

                    @if ($caseStudy->client_name)
                    <div class="mt-8 flex items-center gap-3 text-sm text-blue-200">

                        <div class="w-10 h-10 rounded-lg bg-white/10
                                        flex items-center justify-center">

                            <ion-icon name="business-outline" class="text-xl text-amber-400"></ion-icon>

                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wider text-blue-300">
                                Client
                            </p>

                            <p class="font-semibold text-white">
                                {{ $caseStudy->client_name }}
                            </p>
                        </div>

                    </div>
                    @endif

                </div>

                {{-- Hero image --}}
                <div data-aos="zoom-in">

                    @if ($caseStudy->image)

                    <div class="relative rounded-3xl overflow-hidden
                                    border border-white/10 shadow-2xl">

                        <img src="{{ asset('storage/' . $caseStudy->image) }}" alt="{{ $caseStudy->title }}"
                            class="w-full h-[420px] object-cover">

                        <div class="absolute inset-0
                                        bg-linear-to-t from-blue-950/50
                                        via-transparent to-transparent">
                        </div>

                    </div>

                    @else

                    <div class="h-[420px] rounded-3xl
                                    bg-linear-to-br from-blue-800 to-blue-950
                                    border border-white/10
                                    flex items-center justify-center">

                        <div class="absolute opacity-20" style="background-image: radial-gradient(#fff 1px, transparent 1px);
                                       background-size: 20px 20px;
                                       width: 100%;
                                       height: 100%;">
                        </div>

                        <ion-icon name="analytics-outline" class="relative text-8xl text-white/20">
                        </ion-icon>

                    </div>

                    @endif

                </div>

            </div>

        </div>

    </section>


    {{-- CASE STUDY OVERVIEW --}}
    <section class="py-20 bg-white dark:bg-slate-950">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-3 gap-10">

                {{-- Main content --}}
                <div class="lg:col-span-2 space-y-12">

                    {{-- Challenge --}}
                    @if ($caseStudy->challenge)

                    <div data-aos="fade-up">

                        <div class="flex items-center gap-4 mb-5">

                            <div class="w-12 h-12 rounded-xl
                                            bg-red-50 dark:bg-red-500/10
                                            flex items-center justify-center">

                                <ion-icon name="alert-circle-outline" class="text-2xl text-red-500">
                                </ion-icon>

                            </div>

                            <h2 class="text-3xl font-extrabold
                                           text-slate-900 dark:text-white">

                                The Challenge

                            </h2>

                        </div>

                        <div class="prose prose-slate dark:prose-invert
                                        max-w-none leading-8">

                            {!! $caseStudy->challenge !!}

                        </div>

                    </div>

                    @endif


                    {{-- Solution --}}
                    @if ($caseStudy->solution)

                    <div data-aos="fade-up">

                        <div class="flex items-center gap-4 mb-5">

                            <div class="w-12 h-12 rounded-xl
                                            bg-blue-50 dark:bg-blue-500/10
                                            flex items-center justify-center">

                                <ion-icon name="construct-outline" class="text-2xl text-blue-600 dark:text-blue-400">
                                </ion-icon>

                            </div>

                            <h2 class="text-3xl font-extrabold
                                           text-slate-900 dark:text-white">

                                Our Solution

                            </h2>

                        </div>

                        <div class="prose prose-slate dark:prose-invert
                                        max-w-none leading-8">

                            {!! $caseStudy->solution !!}

                        </div>

                    </div>

                    @endif


                    {{-- Results --}}
                    @if (!empty($caseStudy->results))
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($caseStudy->results as $result)
                        <div class="rounded-2xl bg-slate-50 dark:bg-slate-900
                        border border-slate-200 dark:border-slate-800 p-6">

                            <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-500/10
                            flex items-center justify-center mb-5">
                                <ion-icon name="trending-up-outline" class="text-2xl text-amber-500">
                                </ion-icon>
                            </div>
                            <p class="leading-6 text-slate-600 dark:text-slate-400">
                                {{ $result }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                    @endif



                </div>


                {{-- SIDEBAR --}}
                <aside class="lg:col-span-1">

                    <div class="sticky top-28 space-y-6">

                        {{-- Project details --}}
                        <div class="rounded-2xl bg-slate-50 dark:bg-slate-900
                                    border border-slate-200 dark:border-slate-800
                                    p-6">

                            <h3 class="text-lg font-bold
                                       text-slate-900 dark:text-white mb-6">

                                Case Study Details

                            </h3>

                            <div class="space-y-5">

                                @if ($caseStudy->client_name)

                                <div>
                                    <p class="text-xs uppercase tracking-wider
                                                  text-slate-400 font-semibold">
                                        Client
                                    </p>

                                    <p class="mt-1 font-semibold
                                                  text-slate-800 dark:text-slate-200">

                                        {{ $caseStudy->client_name }}

                                    </p>
                                </div>

                                @endif


                                @if ($caseStudy->industry)

                                <div>
                                    <p class="text-xs uppercase tracking-wider
                                                  text-slate-400 font-semibold">
                                        Industry
                                    </p>

                                    <p class="mt-1 font-semibold
                                                  text-slate-800 dark:text-slate-200">

                                        {{ $caseStudy->industry }}

                                    </p>
                                </div>

                                @endif

                            </div>

                        </div>


                        {{-- Testimonial --}}
                        @if ($caseStudy->testimonial)

                        <div class="rounded-2xl bg-blue-950 text-white p-7">

                            <div class="w-12 h-12 rounded-xl
                                            bg-amber-500
                                            flex items-center justify-center mb-5">

                                <ion-icon name="chatbubble-ellipses-outline" class="text-2xl text-white">
                                </ion-icon>

                            </div>

                            <p class="text-blue-100 leading-7 italic">

                                "{{ $caseStudy->testimonial }}"

                            </p>

                            @if ($caseStudy->testimonial_author)

                            <div class="mt-6 pt-5 border-t border-white/10">

                                <p class="font-bold">
                                    {{ $caseStudy->testimonial_author }}
                                </p>

                                @if ($caseStudy->testimonial_role)
                                <p class="text-sm text-blue-300 mt-1">
                                    {{ $caseStudy->testimonial_role }}
                                </p>
                                @endif

                            </div>

                            @endif

                        </div>

                        @endif


                        {{-- CTA --}}
                        <div class="rounded-2xl bg-amber-500 p-7">

                            <div class="w-12 h-12 rounded-xl bg-white/20
                                        flex items-center justify-center mb-5">

                                <ion-icon name="chatbubbles-outline" class="text-2xl text-slate-900">
                                </ion-icon>

                            </div>

                            <h3 class="text-xl font-extrabold text-slate-900">
                                Facing A Similar Challenge?
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-slate-800">
                                Let our specialists help you design a practical
                                technology solution for your organization.
                            </p>

                            <a href="/book" wire:navigate class="mt-6 inline-flex items-center justify-center
                                       gap-2 w-full px-5 py-3 rounded-xl
                                       bg-blue-950 hover:bg-blue-900
                                       text-white font-bold transition">

                                Talk To Our Experts

                                <ion-icon name="arrow-forward-outline"></ion-icon>

                            </a>

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </section>


    {{-- BOTTOM NAVIGATION --}}
    <section class="py-16 bg-slate-100 dark:bg-slate-900
                    border-t border-slate-200 dark:border-slate-800">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row
                        items-center justify-between gap-6">

                <div>
                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        Want to explore more?
                    </p>

                    <h2 class="mt-1 text-2xl font-bold
                               text-slate-900 dark:text-white">

                        More Case Studies

                    </h2>
                </div>

                <a href="/case-studies" wire:navigate class="inline-flex items-center gap-2
                           px-6 py-3 rounded-xl
                           bg-blue-950 hover:bg-amber-500
                           text-white hover:text-slate-900
                           font-semibold transition">

                    View All Case Studies

                    <ion-icon name="arrow-forward-outline"></ion-icon>

                </a>

            </div>

        </div>

    </section>

</div>