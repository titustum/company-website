<?php

use Livewire\Component;
use App\Models\Service;

new class extends Component
{
    public Service $service;

    public function mount($slug)
    {
        $this->service = Service::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return $this->view()
            ->title($this->service->title);
    }
};
?>

<div class="bg-white dark:bg-slate-950 text-slate-800 dark:text-slate-100">

    {{-- =========================
    HERO
    ========================== --}}
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">

        {{-- Background decoration --}}
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-600/10 dark:bg-blue-500/10 rounded-full blur-3xl">
        </div>
        <div class="absolute -bottom-40 -left-32 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-16 lg:py-24">

            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-10">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-blue-600 dark:hover:text-blue-400 transition">
                    Home
                </a>

                <ion-icon name="chevron-forward-outline" class="text-xs"></ion-icon>

                <a href="/services" wire:navigate class="hover:text-blue-600 dark:hover:text-blue-400 transition">
                    Services
                </a>

                <ion-icon name="chevron-forward-outline" class="text-xs"></ion-icon>

                <span class="text-slate-700 dark:text-slate-200 font-medium">
                    {{ $service->title }}
                </span>
            </nav>

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                {{-- Content --}}
                <div data-aos="fade-up">

                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                                bg-amber-50 dark:bg-amber-500/10
                                border border-amber-200 dark:border-amber-500/30
                                text-amber-600 dark:text-amber-400
                                text-sm font-semibold">

                        <ion-icon name="shield-checkmark-outline"></ion-icon>

                        South-End Tech Services
                    </div>

                    <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extrabold
                               tracking-tight leading-tight text-slate-900 dark:text-white">
                        {{ $service->title }}
                    </h1>

                    @if ($service->subtitle)
                    <p class="mt-6 text-xl md:text-2xl font-semibold text-blue-600 dark:text-blue-400">
                        {{ $service->subtitle }}
                    </p>
                    @endif

                    @if ($service->short_description)
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
                        {{ $service->short_description }}
                    </p>
                    @endif

                    <div class="mt-9 flex flex-wrap gap-4">

                        <a href="{{ route('book') }}" wire:navigate class="inline-flex items-center justify-center gap-2
                                   px-7 py-4 rounded-xl
                                   bg-amber-500 hover:bg-amber-400
                                   text-slate-950 font-bold
                                   shadow-lg shadow-amber-500/20
                                   transition">

                            <ion-icon name="calendar-outline" class="text-xl"></ion-icon>

                            Book a Consultation
                        </a>

                        <a href="{{ route('contact') }}" wire:navigate class="inline-flex items-center justify-center gap-2
                                   px-7 py-4 rounded-xl
                                   border border-slate-300 dark:border-slate-700
                                   bg-white dark:bg-slate-800
                                   hover:bg-slate-100 dark:hover:bg-slate-700
                                   font-semibold
                                   transition">

                            Contact Our Team

                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>

                    </div>
                </div>

                {{-- Hero image --}}
                <div class="relative" data-aos="zoom-in">

                    @if ($service->hero_image)

                    <div class="relative rounded-3xl overflow-hidden
                                    border border-slate-200 dark:border-slate-700
                                    shadow-2xl">

                        <img src="{{ Storage::url($service->hero_image) }}" alt="{{ $service->title }}"
                            class="w-full aspect-[4/3] object-cover">

                        <div class="absolute inset-0
                                        bg-gradient-to-t
                                        from-blue-950/30
                                        via-transparent
                                        to-transparent">
                        </div>

                    </div>

                    @else

                    <div class="aspect-[4/3] rounded-3xl
                                    bg-gradient-to-br from-blue-700 to-blue-950
                                    flex items-center justify-center
                                    shadow-2xl">

                        <ion-icon name="construct-outline" class="text-[9rem] text-white/20">
                        </ion-icon>

                    </div>

                    @endif

                </div>

            </div>
        </div>
    </section>


    {{-- =========================
    INTRODUCTION
    ========================== --}}
    <section class="py-20 lg:py-24">
        <div class="max-w-4xl mx-auto px-6">

            <div class="text-center mb-12">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-500">
                    Our Expertise
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">
                    {{ $service->title }}
                </h2>

            </div>

            @if ($service->description)
            <div class="prose prose-lg max-w-none
                            prose-slate
                            dark:prose-invert
                            prose-headings:font-bold
                            prose-a:text-blue-600
                            prose-strong:text-slate-900
                            dark:prose-strong:text-white">

                {!! $service->description !!}

            </div>
            @endif

        </div>
    </section>


    {{-- =========================
    WHY THIS SERVICE
    ========================== --}}
    <section class="py-20 bg-slate-50 dark:bg-slate-900/60">
        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mb-14">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-500">
                    Why It Matters
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">
                    Technology That Supports Your Business
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600 dark:text-slate-300">
                    The right technology should reduce risk, improve efficiency,
                    and give your organization the confidence to focus on its
                    core objectives.
                </p>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Card --}}
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-950
                            border border-slate-200 dark:border-slate-800
                            hover:border-amber-400
                            hover:-translate-y-1
                            transition">

                    <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-500/10
                                flex items-center justify-center mb-5">

                        <ion-icon name="shield-checkmark-outline" class="text-2xl text-blue-600 dark:text-blue-400">
                        </ion-icon>

                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        Reduce Risk
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400 leading-7">
                        Identify vulnerabilities and implement practical controls
                        that help protect your organization and its critical assets.
                    </p>

                </div>

                {{-- Card --}}
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-950
                            border border-slate-200 dark:border-slate-800
                            hover:border-amber-400
                            hover:-translate-y-1
                            transition">

                    <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-500/10
                                flex items-center justify-center mb-5">

                        <ion-icon name="trending-up-outline" class="text-2xl text-amber-600 dark:text-amber-400">
                        </ion-icon>

                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        Improve Efficiency
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400 leading-7">
                        Use technology strategically to streamline operations,
                        improve visibility, and support better decision making.
                    </p>

                </div>

                {{-- Card --}}
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-950
                            border border-slate-200 dark:border-slate-800
                            hover:border-amber-400
                            hover:-translate-y-1
                            transition">

                    <div class="w-12 h-12 rounded-xl bg-green-100 dark:bg-green-500/10
                                flex items-center justify-center mb-5">

                        <ion-icon name="checkmark-circle-outline" class="text-2xl text-green-600 dark:text-green-400">
                        </ion-icon>

                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        Build Confidence
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400 leading-7">
                        Establish reliable technology foundations that allow your
                        organization to operate and grow with confidence.
                    </p>

                </div>

            </div>
        </div>
    </section>


    {{-- =========================
    OUR APPROACH
    ========================== --}}
    <section class="py-20 lg:py-24">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto mb-16">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-500">
                    Our Approach
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">
                    A Practical Approach To Technology
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600 dark:text-slate-300">
                    We work alongside your organization to understand your needs,
                    recommend the right solution, and provide ongoing support.
                </p>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ([
                ['01', 'Understand', 'We assess your environment, objectives, challenges, and requirements.',
                'search-outline'],
                ['02', 'Recommend', 'We design practical solutions aligned with your goals, risks, and budget.',
                'bulb-outline'],
                ['03', 'Implement', 'Our specialists deploy, configure, and integrate the required solutions.',
                'construct-outline'],
                ['04', 'Support', 'We continuously monitor, improve, and support your technology environment.',
                'headset-outline'],
                ] as [$number, $title, $text, $icon])

                <div class="relative p-7 rounded-2xl
                                bg-white dark:bg-slate-900
                                border border-slate-200 dark:border-slate-800
                                hover:border-amber-400
                                transition">

                    <div class="flex items-center justify-between mb-7">

                        <span class="text-4xl font-black text-slate-100 dark:text-slate-800">
                            {{ $number }}
                        </span>

                        <div class="w-11 h-11 rounded-xl bg-amber-500
                                        flex items-center justify-center">

                            <ion-icon name="{{ $icon }}" class="text-xl text-white">
                            </ion-icon>

                        </div>

                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        {{ $title }}
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400 leading-7">
                        {{ $text }}
                    </p>

                </div>

                @endforeach

            </div>
        </div>
    </section>


    {{-- =========================
    CTA
    ========================== --}}
    <section class="relative overflow-hidden bg-blue-950 text-white">

        <div class="absolute -top-32 -right-32 w-96 h-96
                    bg-blue-500/20 rounded-full blur-3xl">
        </div>

        <div class="absolute -bottom-40 -left-32 w-96 h-96
                    bg-amber-500/10 rounded-full blur-3xl">
        </div>

        <div class="relative max-w-5xl mx-auto px-6 py-20 lg:py-24 text-center">

            <div class="w-16 h-16 mx-auto rounded-2xl
                        bg-amber-500 flex items-center justify-center">

                <ion-icon name="arrow-forward-outline" class="text-3xl text-white">
                </ion-icon>

            </div>

            <h2 class="mt-7 text-3xl md:text-4xl lg:text-5xl font-extrabold">
                Ready To Strengthen Your Organization?
            </h2>

            <p class="mt-5 max-w-2xl mx-auto text-lg leading-8 text-blue-100">
                Talk to our specialists about your technology, security,
                compliance, and digital transformation needs.
            </p>

            <div class="mt-9 flex flex-wrap justify-center gap-4">

                <a href="{{ route('book') }}" wire:navigate class="inline-flex items-center gap-2
                           px-7 py-4 rounded-xl
                           bg-amber-500 hover:bg-amber-400
                           text-slate-950 font-bold
                           transition">

                    <ion-icon name="calendar-outline"></ion-icon>

                    Book a Consultation
                </a>

                <a href="{{ route('contact') }}" wire:navigate class="inline-flex items-center gap-2
                           px-7 py-4 rounded-xl
                           border border-blue-700
                           hover:bg-blue-900
                           font-semibold
                           transition">

                    Contact Our Team

                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

            </div>

        </div>
    </section>

</div>