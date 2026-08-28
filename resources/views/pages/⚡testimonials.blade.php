<?php

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\Attributes\Computed;

new class extends Component
{
    public string $search = '';

    #[Computed]
    public function testimonials()
    {
        return Testimonial::query()
            ->where('is_published', true)
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('client_name', 'like', '%' . $this->search . '%')
                        ->orWhere('industry', 'like', '%' . $this->search . '%')
                        ->orWhere('service', 'like', '%' . $this->search . '%')
                        ->orWhere('testimonial', 'like', '%' . $this->search . '%');
                });
            })
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

        {{-- Background decorations --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>

        {{-- Plus symbols --}}
        <div class="absolute top-16 right-[12%] text-amber-400/20 text-5xl font-light select-none">
            +
        </div>

        <div class="absolute top-32 right-[25%] text-white/10 text-3xl select-none">
            +
        </div>

        <div class="absolute bottom-20 left-[10%] text-amber-400/10 text-6xl font-light select-none">
            +
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28">

            <div class="max-w-3xl" data-aos="fade-up">

                {{-- Eyebrow --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                           bg-amber-500/10 border border-amber-400/20
                           text-amber-400 font-semibold text-sm">

                    <ion-icon name="ribbon-outline"></ion-icon>

                    Client Success Stories
                </div>

                {{-- Heading --}}
                <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl
                           font-extrabold leading-tight tracking-tight">

                    Trusted By Organizations
                    <span class="text-amber-400">
                        Across East Africa
                    </span>
                </h1>

                {{-- Description --}}
                <p class="mt-6 text-lg md:text-xl
                           text-blue-100 leading-8 max-w-2xl">

                    See what organizations say about working with South-End Tech
                    to strengthen cybersecurity, improve data protection,
                    and navigate their digital transformation journey.

                </p>

            </div>

        </div>
    </section>


    {{-- =========================================================
    MAIN CONTENT
    ========================================================== --}}
    <section class="relative py-20 lg:py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            {{-- HEADER / SEARCH --}}
            <div class="flex flex-col lg:flex-row lg:items-end
                       justify-between gap-8 mb-12" data-aos="fade-up">

                <div class="max-w-2xl">

                    <div class="inline-flex items-center gap-2
                               text-sm font-bold uppercase tracking-wider
                               text-blue-600 dark:text-blue-400">

                        <span class="w-8 h-px bg-blue-600 dark:bg-blue-400"></span>

                        What Our Clients Say

                    </div>

                    <h2 class="mt-3 text-3xl md:text-4xl
                               font-extrabold text-slate-900
                               dark:text-white">

                        Experiences That
                        <span class="text-amber-500">
                            Build Trust
                        </span>

                    </h2>

                    <p class="mt-4 text-slate-600
                               dark:text-slate-400 leading-7">

                        Our clients work with us to solve important technology,
                        security, compliance, and digital transformation challenges.

                    </p>

                </div>


                {{-- SEARCH --}}
                <div class="w-full lg:w-96">

                    <label class="sr-only">
                        Search testimonials
                    </label>

                    <div class="relative">

                        <ion-icon name="search-outline" class="absolute left-4 top-1/2 -translate-y-1/2
                                   text-xl text-slate-400">
                        </ion-icon>

                        <input type="search" wire:model.live.debounce.300ms="search"
                            placeholder="Search client stories..." class="w-full pl-12 pr-12 py-3.5
                                   rounded-xl
                                   bg-white dark:bg-slate-900
                                   border border-slate-200
                                   dark:border-slate-800
                                   text-slate-800 dark:text-white
                                   placeholder:text-slate-400
                                   focus:ring-2 focus:ring-blue-500
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


            {{-- RESULTS --}}
            @if ($this->testimonials->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

                @foreach ($this->testimonials as $testimonial)

                <article class="group relative flex flex-col
                                   bg-white dark:bg-slate-900
                                   rounded-2xl
                                   border border-slate-200
                                   dark:border-slate-800
                                   p-7
                                   shadow-sm
                                   hover:shadow-xl
                                   hover:-translate-y-1
                                   transition-all duration-300" data-aos="fade-up">

                    {{-- Decorative quote --}}
                    <div class="absolute top-5 right-6
                                       text-7xl leading-none
                                       font-serif
                                       text-blue-50
                                       dark:text-blue-950
                                       select-none">

                        &ldquo;

                    </div>


                    {{-- Top --}}
                    <div class="relative flex items-center
                                       justify-between mb-7">

                        <div class="w-14 h-14 rounded-xl
                                           bg-amber-50
                                           dark:bg-amber-500/10
                                           flex items-center justify-center">

                            <ion-icon name="{{ $testimonial->icon ?? 'business-outline' }}"
                                class="text-3xl text-amber-500">
                            </ion-icon>

                        </div>

                        @if ($testimonial->industry)

                        <span class="px-3 py-1 rounded-full
                                               bg-slate-100
                                               dark:bg-slate-800
                                               text-xs font-semibold
                                               text-slate-500
                                               dark:text-slate-400">

                            {{ $testimonial->industry }}

                        </span>

                        @endif

                    </div>


                    {{-- Rating --}}
                    <div class="flex gap-1 mb-5">

                        @for ($i = 1; $i <= 5; $i++) <ion-icon name="star" class="text-amber-500">
                            </ion-icon>

                            @endfor

                    </div>


                    {{-- Testimonial --}}
                    <blockquote class="relative flex-1">

                        <p class="text-slate-600
                                           dark:text-slate-300
                                           leading-7 italic">

                            "{{ $testimonial->quote }}"

                        </p>

                    </blockquote>


                    {{-- Service --}}
                    @if ($testimonial->service)

                    <div class="mt-6 inline-flex items-center
                                           gap-2 text-sm
                                           font-semibold
                                           text-blue-600
                                           dark:text-blue-400">

                        <ion-icon name="shield-checkmark-outline">
                        </ion-icon>

                        {{ $testimonial->service }}

                    </div>

                    @endif


                    {{-- Client --}}
                    <div class="mt-7 pt-6
                                       border-t
                                       border-slate-100
                                       dark:border-slate-800
                                       flex items-center gap-4">

                        @if ($testimonial->client_logo)

                        <div class="w-12 h-12 rounded-xl
                                               bg-slate-50
                                               dark:bg-slate-800
                                               flex items-center
                                               justify-center
                                               overflow-hidden">

                            <img src="{{ asset('storage/' . $testimonial->client_logo) }}"
                                alt="{{ $testimonial->client_name }}" class="max-w-full max-h-full
                                                   object-contain">

                        </div>

                        @else

                        <div class="w-12 h-12 rounded-xl
                                               bg-blue-50
                                               dark:bg-blue-900/30
                                               flex items-center
                                               justify-center">

                            <ion-icon name="business-outline" class="text-xl
                                                   text-blue-600
                                                   dark:text-blue-400">
                            </ion-icon>

                        </div>

                        @endif


                        <div>

                            <h3 class="font-bold text-slate-900
                                               dark:text-white">

                                {{ $testimonial->client_name }}

                            </h3>

                            @if ($testimonial->client_role)

                            <p class="text-sm text-slate-500
                                                   dark:text-slate-400">

                                {{ $testimonial->client_role }}

                            </p>

                            @endif

                        </div>

                    </div>

                </article>

                @endforeach

            </div>


            {{-- Result count --}}
            <div class="mt-10 text-center text-sm
                           text-slate-500 dark:text-slate-400">

                Showing
                <span class="font-semibold text-slate-700 dark:text-slate-200">
                    {{ $this->testimonials->count() }}
                </span>
                client {{ $this->testimonials->count() === 1 ? 'testimonial' : 'testimonials' }}

            </div>

            @else

            {{-- EMPTY STATE --}}
            <div class="py-20 text-center" data-aos="fade-up">

                <div class="mx-auto w-20 h-20 rounded-2xl
                               bg-blue-50 dark:bg-blue-900/30
                               flex items-center justify-center">

                    <ion-icon name="chatbubble-ellipses-outline" class="text-4xl text-blue-600
                                   dark:text-blue-400">
                    </ion-icon>

                </div>

                <h3 class="mt-6 text-2xl font-bold
                               text-slate-900 dark:text-white">

                    No Client Stories Found

                </h3>

                <p class="mt-3 text-slate-500
                               dark:text-slate-400">

                    We couldn't find any testimonials matching your search.

                </p>

                @if ($search)

                <button type="button" wire:click="clearSearch" class="mt-6 inline-flex items-center gap-2
                                   px-5 py-3 rounded-xl
                                   bg-blue-600 hover:bg-blue-700
                                   text-white font-semibold transition">

                    <ion-icon name="refresh-outline"></ion-icon>

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
    <section class="relative py-20 bg-blue-950 text-white overflow-hidden">

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

            <div class="mx-auto w-16 h-16 rounded-2xl
                       bg-amber-500
                       flex items-center justify-center">

                <ion-icon name="chatbubbles-outline" class="text-3xl text-slate-900">
                </ion-icon>

            </div>

            <h2 class="mt-7 text-3xl md:text-4xl
                       font-extrabold">

                Ready to Start Your
                <span class="text-amber-400">
                    Success Story?
                </span>

            </h2>

            <p class="mt-5 text-blue-100
                       leading-7 max-w-2xl mx-auto">

                Whether you need stronger cybersecurity, data protection,
                compliance support, or digital transformation expertise,
                our team is ready to help.

            </p>

            <div class="mt-8 flex flex-col sm:flex-row
                       justify-center gap-4">

                <a href="{{ route('book') }}" wire:navigate class="inline-flex items-center
                           justify-center gap-2
                           px-7 py-3.5
                           rounded-xl
                           bg-amber-500
                           hover:bg-amber-400
                           text-slate-900
                           font-bold transition">

                    Book a Consultation

                    <ion-icon name="arrow-forward-outline">
                    </ion-icon>

                </a>

                <a href="{{ route('contact') }}" wire:navigate class="inline-flex items-center
                           justify-center gap-2
                           px-7 py-3.5
                           rounded-xl
                           border border-blue-700
                           hover:bg-blue-900
                           text-white
                           font-semibold transition">

                    Contact Our Team

                    <ion-icon name="call-outline">
                    </ion-icon>

                </a>

            </div>

        </div>

    </section>

</div>