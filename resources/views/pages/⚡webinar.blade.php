<?php

use Livewire\Component;
use App\Models\Webinar;

new class extends Component
{
    public Webinar $webinar;

    public function mount($slug)
    {
        $this->webinar = Webinar::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function render()
    {
        return $this->view()
            ->title($this->webinar->title);
    }
};
?>

<div class="bg-slate-50 dark:bg-slate-950 min-h-screen">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-blue-950 text-white">

        {{-- Decorative background --}}
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-16 lg:py-24">

            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-blue-200 mb-8">
                <a href="{{  route('home') }}" wire:navigate class="hover:text-amber-400 transition">
                    Home
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <a href="{{ route('webinars.index') }}" wire:navigate class="hover:text-amber-400 transition">
                    Webinars
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="text-white truncate">
                    {{ $webinar->title }}
                </span>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- Content --}}
                <div data-aos="fade-up">

                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                                bg-amber-500/15 border border-amber-400/30
                                text-amber-300 font-semibold text-sm mb-6">

                        <ion-icon name="videocam-outline"></ion-icon>

                        Webinar
                    </div>

                    <h1 class="text-4xl md:text-5xl xl:text-6xl font-extrabold
                               leading-tight tracking-tight">
                        {{ $webinar->title }}
                    </h1>

                    @if ($webinar->excerpt)
                    <p class="mt-6 text-lg lg:text-xl text-blue-100 leading-8 max-w-2xl">
                        {{ $webinar->excerpt }}
                    </p>
                    @endif

                    {{-- Webinar details --}}
                    <div class="mt-8 grid sm:grid-cols-2 gap-4">

                        @if ($webinar->starts_at)
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
                                <ion-icon name="calendar-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>

                            <div>
                                <p class="text-xs uppercase tracking-wide text-blue-300">
                                    Date
                                </p>

                                <p class="font-semibold">
                                    {{ $webinar->starts_at->format('M d, Y') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
                                <ion-icon name="time-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>

                            <div>
                                <p class="text-xs uppercase tracking-wide text-blue-300">
                                    Time
                                </p>

                                <p class="font-semibold">
                                    {{ $webinar->starts_at->format('g:i A') }}
                                </p>
                            </div>
                        </div>
                        @endif

                    </div>

                    {{-- CTA --}}
                    @if ($webinar->registration_url)
                    <div class="mt-10">
                        <a href="{{ route('webinar.register', $webinar->slug) }}" target="_blank"
                            rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2
                                      px-7 py-4 rounded-xl
                                      bg-amber-500 hover:bg-amber-400
                                      text-slate-950 font-bold
                                      shadow-lg shadow-amber-500/20
                                      transition">

                            <ion-icon name="person-add-outline" class="text-xl"></ion-icon>

                            Register For This Webinar

                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                    @elseif ($webinar->meeting_url)
                    <div class="mt-10">
                        <a href="{{ $webinar->meeting_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2
                                      px-7 py-4 rounded-xl
                                      bg-amber-500 hover:bg-amber-400
                                      text-slate-950 font-bold
                                      shadow-lg shadow-amber-500/20
                                      transition">

                            <ion-icon name="videocam-outline" class="text-xl"></ion-icon>

                            Join Webinar

                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                    @endif

                </div>

                {{-- Image --}}
                <div data-aos="zoom-in" class="relative">

                    @if ($webinar->image)

                    <div class="relative rounded-3xl overflow-hidden
                                    border border-white/10 shadow-2xl">

                        <img src="{{ asset('storage/' . $webinar->image) }}" alt="{{ $webinar->title }}"
                            class="w-full aspect-[16/10] object-cover">

                        <div class="absolute inset-0
                                        bg-linear-to-t
                                        from-blue-950/60
                                        via-transparent
                                        to-transparent">
                        </div>

                        <div class="absolute bottom-5 left-5 right-5">

                            <div class="inline-flex items-center gap-2
                                            px-3 py-2 rounded-lg
                                            bg-black/40 backdrop-blur-sm
                                            text-sm font-medium">

                                <span class="w-2 h-2 rounded-full bg-red-400"></span>

                                South-End Tech Webinar

                            </div>

                        </div>

                    </div>

                    @else

                    <div class="aspect-[16/10] rounded-3xl
                                    bg-white/5 border border-white/10
                                    flex items-center justify-center">

                        <ion-icon name="videocam-outline" class="text-8xl text-blue-300/40">
                        </ion-icon>

                    </div>

                    @endif

                </div>

            </div>
        </div>
    </section>


    {{-- MAIN CONTENT --}}
    <section class="py-16 lg:py-20">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-3 gap-10 lg:gap-16">

                {{-- Description --}}
                <article class="lg:col-span-2">

                    <div class="bg-white dark:bg-slate-900
                                rounded-3xl border border-slate-200
                                dark:border-slate-800
                                p-7 md:p-10 shadow-sm">

                        <div class="flex items-center gap-3 mb-8">

                            <div class="w-11 h-11 rounded-xl
                                        bg-blue-100 dark:bg-blue-500/10
                                        flex items-center justify-center">

                                <ion-icon name="document-text-outline" class="text-xl text-blue-600 dark:text-blue-400">
                                </ion-icon>

                            </div>

                            <h2 class="text-2xl md:text-3xl font-bold
                                       text-slate-900 dark:text-white">
                                About This Webinar
                            </h2>

                        </div>

                        <div class="prose prose-slate dark:prose-invert
                                    max-w-none leading-8">

                            {!! $webinar->description !!}

                        </div>

                    </div>

                </article>


                {{-- SIDEBAR --}}
                <aside class="space-y-6">

                    {{-- Webinar information --}}
                    <div class="bg-white dark:bg-slate-900
                                rounded-3xl
                                border border-slate-200 dark:border-slate-800
                                p-6 shadow-sm">

                        <h3 class="text-lg font-bold
                                   text-slate-900 dark:text-white mb-6">
                            Webinar Details
                        </h3>

                        <div class="space-y-5">

                            @if ($webinar->starts_at)
                            <div class="flex gap-3">

                                <ion-icon name="calendar-outline" class="text-xl text-amber-500 shrink-0">
                                </ion-icon>

                                <div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">
                                        Date
                                    </p>

                                    <p class="font-semibold text-slate-800 dark:text-white">
                                        {{ $webinar->starts_at->format('l, F d, Y') }}
                                    </p>
                                </div>

                            </div>

                            <div class="flex gap-3">

                                <ion-icon name="time-outline" class="text-xl text-amber-500 shrink-0">
                                </ion-icon>

                                <div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">
                                        Time
                                    </p>

                                    <p class="font-semibold text-slate-800 dark:text-white">
                                        {{ $webinar->starts_at->format('g:i A') }}
                                    </p>
                                </div>

                            </div>
                            @endif

                            @if ($webinar->duration)
                            <div class="flex gap-3">

                                <ion-icon name="hourglass-outline" class="text-xl text-amber-500 shrink-0">
                                </ion-icon>

                                <div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">
                                        Duration
                                    </p>

                                    <p class="font-semibold text-slate-800 dark:text-white">
                                        {{ $webinar->duration }}
                                    </p>
                                </div>

                            </div>
                            @endif

                        </div>

                        {{-- CTA --}}
                        @if ($webinar->registration_url)
                        <a href="{{ $webinar->registration_url }}" target="_blank" rel="noopener noreferrer" class="mt-7 w-full inline-flex items-center
                                      justify-center gap-2 px-5 py-3.5
                                      rounded-xl bg-amber-500
                                      hover:bg-amber-400
                                      text-slate-950 font-bold transition">

                            <ion-icon name="person-add-outline"></ion-icon>

                            Register Now
                        </a>
                        @elseif ($webinar->meeting_url)
                        <a href="{{ $webinar->meeting_url }}" target="_blank" rel="noopener noreferrer" class="mt-7 w-full inline-flex items-center
                                      justify-center gap-2 px-5 py-3.5
                                      rounded-xl bg-amber-500
                                      hover:bg-amber-400
                                      text-slate-950 font-bold transition">

                            <ion-icon name="videocam-outline"></ion-icon>

                            Join Webinar
                        </a>
                        @endif

                    </div>


                    {{-- Speaker --}}
                    @if ($webinar->speaker)

                    <div class="bg-blue-950 text-white
                                    rounded-3xl p-6">

                        <div class="flex items-center gap-3 mb-5">

                            <div class="w-11 h-11 rounded-xl
                                            bg-amber-500
                                            flex items-center justify-center">

                                <ion-icon name="person-outline" class="text-xl text-white">
                                </ion-icon>

                            </div>

                            <div>
                                <p class="text-xs text-blue-300 uppercase tracking-wide">
                                    Speaker
                                </p>

                                <h3 class="font-bold">
                                    {{ $webinar->speaker }}
                                </h3>
                            </div>

                        </div>

                        @if ($webinar->speaker_role)
                        <p class="text-sm text-blue-200 leading-6">
                            {{ $webinar->speaker_role }}
                        </p>
                        @endif

                    </div>

                    @endif


                    {{-- Back to webinars --}}
                    <a href="/webinars" wire:navigate class="flex items-center justify-center gap-2
                              w-full px-5 py-3.5 rounded-xl
                              border border-slate-300
                              dark:border-slate-700
                              text-slate-700 dark:text-slate-200
                              hover:bg-slate-100 dark:hover:bg-slate-800
                              font-semibold transition">

                        <ion-icon name="arrow-back-outline"></ion-icon>

                        Back to Webinars
                    </a>

                </aside>

            </div>

        </div>

    </section>


    {{-- FINAL CTA --}}
    <section class="pb-20">

        <div class="max-w-7xl mx-auto px-6">

            <div class="relative overflow-hidden
                        rounded-3xl bg-blue-950
                        px-8 py-12 md:px-12 md:py-16
                        text-center text-white">

                <div class="absolute -top-24 -right-24
                            w-72 h-72 rounded-full
                            bg-blue-500/20 blur-3xl">
                </div>

                <div class="absolute -bottom-24 -left-24
                            w-72 h-72 rounded-full
                            bg-amber-500/10 blur-3xl">
                </div>

                <div class="relative">

                    <div class="w-14 h-14 mx-auto rounded-2xl
                                bg-amber-500
                                flex items-center justify-center mb-6">

                        <ion-icon name="chatbubbles-outline" class="text-2xl text-white">
                        </ion-icon>

                    </div>

                    <h2 class="text-3xl md:text-4xl font-extrabold">
                        Have Questions About This Topic?
                    </h2>

                    <p class="mt-4 max-w-2xl mx-auto
                              text-blue-100 leading-7">
                        Our team can help you understand how cybersecurity,
                        data protection, compliance, and digital transformation
                        can support your organization.
                    </p>

                    <div class="mt-8 flex flex-wrap justify-center gap-4">

                        <a href="/contact" wire:navigate class="inline-flex items-center gap-2
                                  px-6 py-3.5 rounded-xl
                                  bg-amber-500 hover:bg-amber-400
                                  text-slate-950 font-bold transition">

                            Contact Our Team

                            <ion-icon name="arrow-forward-outline"></ion-icon>

                        </a>

                        <a href="/webinars" wire:navigate class="inline-flex items-center gap-2
                                  px-6 py-3.5 rounded-xl
                                  border border-white/20
                                  hover:bg-white/10
                                  font-semibold transition">

                            Explore More Webinars

                            <ion-icon name="videocam-outline"></ion-icon>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>