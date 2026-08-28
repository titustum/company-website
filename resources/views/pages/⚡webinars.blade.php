<?php

use App\Models\Webinar;
use Livewire\Component;

new class extends Component
{
    public string $search = '';

    public string $filter = 'all';

    public function getWebinarsProperty()
    {
        $query = Webinar::query()
            ->published()
            ->orderBy('starts_at');

        if ($this->search !== '') {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('subtitle', 'like', '%' . $this->search . '%')
                    ->orWhere('short_description', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->filter === 'upcoming') {
            $query->where('starts_at', '>=', now());
        }

        if ($this->filter === 'past') {
            $query->where('starts_at', '<', now())
                ->orderByDesc('starts_at');
        }

        return $query->get();
    }

    public function render()
    {
        return $this->view()
            ->title('Webinars | South-End Tech');
    }
};
?>

<div class="bg-slate-50 dark:bg-slate-950 min-h-screen">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-blue-600 dark:bg-blue-950 text-white">

        {{-- Decorative background --}}
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-amber-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-32 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24">

            <div class="max-w-3xl" data-aos="fade-up">

                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-amber-300 font-semibold text-sm">
                    <ion-icon name="videocam-outline" class="text-lg"></ion-icon>
                    Webinars & Events
                </div>

                <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                    Learn.
                    <span class="text-amber-400">Connect.</span>
                    Grow.
                </h1>

                <p class="mt-6 text-lg lg:text-xl text-blue-100 leading-8 max-w-2xl">
                    Join practical webinars and expert-led sessions covering cybersecurity,
                    data protection, artificial intelligence, data governance, and digital
                    transformation.
                </p>

            </div>

        </div>
    </section>


    {{-- WEBINARS --}}
    <section class="relative py-20">

        <div class="max-w-7xl mx-auto px-6">

            {{-- HEADER --}}
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-10">

                <div>
                    <p class="text-sm font-bold uppercase tracking-wider text-amber-600">
                        Knowledge Center
                    </p>

                    <h2 class="mt-2 text-3xl lg:text-4xl font-extrabold text-slate-900 dark:text-white">
                        Upcoming & Past Webinars
                    </h2>

                    <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-2xl">
                        Explore upcoming learning sessions or revisit webinars and insights
                        from previous events.
                    </p>
                </div>

            </div>


            {{-- SEARCH + FILTER --}}
            <div class="mb-10 flex flex-col md:flex-row gap-4 md:items-center md:justify-between">

                {{-- Search --}}
                <div class="relative w-full md:max-w-md">

                    <ion-icon name="search-outline"
                        class="absolute left-4 top-1/2 -translate-y-1/2 text-xl text-slate-400">
                    </ion-icon>

                    <input type="search" wire:model.live.debounce.300ms="search" placeholder="Search webinars..." class="w-full pl-12 pr-4 py-3.5 rounded-xl
                               border border-slate-200 dark:border-slate-700
                               bg-white dark:bg-slate-900
                               text-slate-800 dark:text-white
                               placeholder:text-slate-400
                               focus:outline-none focus:ring-2 focus:ring-amber-500
                               transition">
                </div>


                {{-- Filters --}}
                <div class="flex items-center gap-2 p-1 bg-white dark:bg-slate-900
                           border border-slate-200 dark:border-slate-800
                           rounded-xl">

                    <button wire:click="$set('filter', 'all')" class="px-4 py-2.5 rounded-lg text-sm font-semibold transition
                        {{ $filter === 'all'
                            ? 'bg-blue-600 text-white'
                            : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                        All
                    </button>

                    <button wire:click="$set('filter', 'upcoming')" class="px-4 py-2.5 rounded-lg text-sm font-semibold transition
                        {{ $filter === 'upcoming'
                            ? 'bg-blue-600 text-white'
                            : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                        Upcoming
                    </button>

                    <button wire:click="$set('filter', 'past')" class="px-4 py-2.5 rounded-lg text-sm font-semibold transition
                        {{ $filter === 'past'
                            ? 'bg-blue-600 text-white'
                            : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                        Past
                    </button>

                </div>

            </div>


            {{-- RESULTS --}}
            @if ($this->webinars->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

                @foreach ($this->webinars as $webinar)

                @php
                $isUpcoming = $webinar->starts_at?->isFuture();
                $isLive = $webinar->is_live;
                @endphp

                <article class="group flex flex-col overflow-hidden rounded-2xl
                                   bg-white dark:bg-slate-900
                                   border border-slate-200 dark:border-slate-800
                                   shadow-sm hover:shadow-xl
                                   hover:-translate-y-1
                                   transition-all duration-300" data-aos="fade-up">

                    {{-- IMAGE --}}
                    <div class="relative h-56 overflow-hidden bg-blue-950">

                        @if ($webinar->image)

                        <img src="{{ asset('storage/' . $webinar->image) }}" alt="{{ $webinar->title }}" class="w-full h-full object-cover
                                               group-hover:scale-105 transition duration-500">

                        @else

                        <div class="w-full h-full flex items-center justify-center
                                               bg-linear-to-br from-blue-700 to-blue-950">

                            <div class="absolute inset-0 opacity-20"
                                style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;">
                            </div>

                            <ion-icon name="videocam-outline" class="relative text-7xl text-white/30">
                            </ion-icon>

                        </div>

                        @endif


                        {{-- Status --}}
                        <div class="absolute top-4 left-4">

                            @if ($isLive)

                            <span class="inline-flex items-center gap-2 px-3 py-1.5
                                                   rounded-full bg-red-500 text-white
                                                   text-xs font-bold shadow-lg">

                                <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                                Live Now

                            </span>

                            @elseif ($isUpcoming)

                            <span class="inline-flex items-center gap-2 px-3 py-1.5
                                                   rounded-full bg-amber-500 text-slate-900
                                                   text-xs font-bold shadow-lg">

                                <ion-icon name="calendar-outline"></ion-icon>
                                Upcoming

                            </span>

                            @else

                            <span class="inline-flex items-center gap-2 px-3 py-1.5
                                                   rounded-full bg-slate-800/90 text-white
                                                   text-xs font-semibold">

                                <ion-icon name="checkmark-circle-outline"></ion-icon>
                                Recorded

                            </span>

                            @endif

                        </div>

                    </div>


                    {{-- CONTENT --}}
                    <div class="flex flex-col flex-1 p-6">

                        {{-- Date --}}
                        <div class="flex items-center gap-2 text-sm
                                           text-blue-600 dark:text-blue-400 font-semibold">

                            <ion-icon name="calendar-outline"></ion-icon>

                            <span>
                                {{ $webinar->starts_at?->format('M d, Y') }}
                            </span>

                            <span class="text-slate-300 dark:text-slate-700">
                                •
                            </span>

                            <span>
                                {{ $webinar->starts_at?->format('g:i A') }}
                            </span>

                        </div>


                        {{-- Title --}}
                        <h3 class="mt-4 text-xl font-bold leading-snug
                                           text-slate-900 dark:text-white
                                           group-hover:text-blue-600
                                           dark:group-hover:text-blue-400
                                           transition">

                            {{ $webinar->title }}

                        </h3>


                        {{-- Subtitle --}}
                        @if ($webinar->subtitle)

                        <p class="mt-2 text-sm font-medium
                                               text-slate-500 dark:text-slate-400">

                            {{ $webinar->subtitle }}

                        </p>

                        @endif


                        {{-- Description --}}
                        <p class="mt-4 text-sm leading-6
                                           text-slate-600 dark:text-slate-400 line-clamp-3">

                            {{ $webinar->short_description }}

                        </p>


                        {{-- Speaker --}}
                        @if ($webinar->speaker_name)

                        <div class="mt-5 flex items-center gap-3">

                            @if ($webinar->speaker_photo)

                            <img src="{{ asset('storage/' . $webinar->speaker_photo) }}"
                                alt="{{ $webinar->speaker_name }}" class="w-9 h-9 rounded-full object-cover">

                            @else

                            <div class="w-9 h-9 rounded-full bg-blue-100
                                                       dark:bg-blue-900/40
                                                       flex items-center justify-center">

                                <ion-icon name="person-outline" class="text-blue-600 dark:text-blue-400">
                                </ion-icon>

                            </div>

                            @endif

                            <div>
                                <p class="text-sm font-semibold
                                                       text-slate-800 dark:text-slate-200">

                                    {{ $webinar->speaker_name }}

                                </p>

                                @if ($webinar->speaker_role)
                                <p class="text-xs text-slate-500 dark:text-slate-500">

                                    {{ $webinar->speaker_role }}

                                </p>
                                @endif
                            </div>

                        </div>

                        @endif


                        {{-- Topics --}}
                        @if (!empty($webinar->topics))

                        <div class="mt-5 flex flex-wrap gap-2">

                            @foreach (array_slice($webinar->topics, 0, 3) as $topic)

                            <span class="px-2.5 py-1 rounded-full
                                                       bg-slate-100 dark:bg-slate-800
                                                       text-slate-600 dark:text-slate-300
                                                       text-xs font-medium">

                                {{ $topic }}

                            </span>

                            @endforeach

                        </div>

                        @endif


                        {{-- CTA --}}
                        {{-- CTA --}}

                        <div class="mt-auto pt-6 flex flex-col sm:flex-row gap-3">
                            {{-- Register CTA --}}
                            @if ($isUpcoming || $isLive)

                            <a href="{{ route('webinar.register', $webinar->slug) }}" wire:navigate class="inline-flex flex-1 items-center justify-center gap-2
               px-4 py-3 rounded-xl
               bg-amber-500 hover:bg-amber-400
               text-slate-900 text-sm font-bold
               shadow-sm hover:shadow-md
               transition-all duration-300">

                                <ion-icon name="person-add-outline" class="text-lg"></ion-icon>

                                Register

                            </a>

                            @elseif ($webinar->recording_url)

                            <a href="{{ $webinar->recording_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex flex-1 items-center justify-center gap-2
               px-4 py-3 rounded-xl
               bg-blue-600 hover:bg-blue-700
               text-white text-sm font-bold
               shadow-sm hover:shadow-md
               transition-all duration-300">

                                <ion-icon name="play-circle-outline" class="text-lg"></ion-icon>

                                Watch Recording

                            </a>

                            @endif


                            {{-- View Details CTA --}}
                            <a href="{{ route('webinar.show', $webinar->slug) }}" wire:navigate class="inline-flex flex-1 items-center justify-center gap-2
           px-4 py-3 rounded-xl
           border border-slate-300 dark:border-slate-700
           bg-white dark:bg-slate-800
           text-slate-700 dark:text-slate-200
           hover:border-blue-500 hover:text-blue-600
           dark:hover:border-blue-400 dark:hover:text-blue-400
           text-sm font-bold
           transition-all duration-300">

                                View Details

                                <ion-icon name="arrow-forward-outline"
                                    class="text-lg transition-transform group-hover:translate-x-1">
                                </ion-icon>

                            </a>

                        </div>

                    </div>

                </article>

                @endforeach

            </div>

            @else

            {{-- EMPTY STATE --}}
            <div class="py-20 text-center rounded-2xl
                           bg-white dark:bg-slate-900
                           border border-slate-200 dark:border-slate-800">

                <div class="mx-auto w-16 h-16 rounded-2xl
                               bg-blue-100 dark:bg-blue-900/30
                               flex items-center justify-center">

                    <ion-icon name="search-outline" class="text-3xl text-blue-600 dark:text-blue-400">
                    </ion-icon>

                </div>

                <h3 class="mt-5 text-xl font-bold text-slate-900 dark:text-white">

                    No webinars found

                </h3>

                <p class="mt-2 text-slate-500 dark:text-slate-400">

                    Try changing your search or filter.

                </p>

                @if ($search !== '' || $filter !== 'all')

                <button wire:click="$set('search', ''); $set('filter', 'all')" class="mt-5 inline-flex items-center gap-2
                                   px-5 py-2.5 rounded-lg
                                   bg-blue-600 hover:bg-blue-700
                                   text-white font-semibold transition">

                    <ion-icon name="refresh-outline"></ion-icon>
                    Clear Filters

                </button>

                @endif

            </div>

            @endif

        </div>

    </section>


    {{-- CTA --}}
    <section class="bg-blue-950 text-white">

        <div class="max-w-7xl mx-auto px-6 py-16">

            <div class="flex flex-col lg:flex-row lg:items-center
                       justify-between gap-8">

                <div class="max-w-2xl">

                    <div class="flex items-center gap-2 text-amber-400
                               font-semibold text-sm">

                        <ion-icon name="notifications-outline"></ion-icon>
                        Stay Informed

                    </div>

                    <h2 class="mt-3 text-3xl font-extrabold">

                        Don't Miss Our Next Webinar

                    </h2>

                    <p class="mt-3 text-blue-200 leading-7">

                        Get monthly, practical insights on
                        cybersecurity, data protection, AI, and digital transformation.

                    </p>

                </div>

                <div class="w-full lg:max-w-md shrink-0">

                    <div class="flex bg-white/10 rounded-xl overflow-hidden
                               border border-white/20
                               focus-within:border-amber-400 transition">

                        <input type="email" placeholder="Your business email"
                            class="flex-1 bg-transparent px-4 py-3.5
                                outline-none text-white
                                placeholder:text-blue-200">

                        <button type="submit" class="bg-amber-500
                            hover:bg-amber-400
                            px-5 text-blue-950 font-bold
                            whitespace-nowrap transition">

                            Get Tech Insights
                        </button>

                    </div>

                    <p class="mt-3 flex items-start gap-1.5
                        text-xs text-blue-200 leading-5">

                        <ion-icon name="lock-closed-outline"
                            class="mt-0.5 shrink-0 text-amber-400"></ion-icon>

                        <span>
                            We respect your privacy. Your data is protected
                            in accordance with the Kenya Data Protection Act.
                        </span>

                    </p>

                </div>

            </div>

        </div>

    </section>

</div>