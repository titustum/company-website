<?php
use Livewire\Component;
use App\Models\Industry;

new class extends Component
{
    public Industry $industry;

    public function mount($slug)
    {
        $this->industry = Industry::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function render()
    {
        return $this->view()->title($this->industry->title);
    }

    };
?>

<div class="bg-white dark:bg-slate-950 text-slate-800 dark:text-slate-100">
    {{-- ===== HERO ===== --}}
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">

        {{-- Decorative background --}}
        <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-blue-600/10 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-amber-500/10 blur-3xl"></div>

        <div class="absolute top-20 right-10 text-blue-600/10 text-8xl font-bold select-none">
            +
        </div>

        <div class="absolute bottom-10 left-10 text-amber-500/10 text-7xl font-bold select-none">
            +
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28">

            <div class="grid lg:grid-cols-2 gap-14 items-center">

                {{-- Hero content --}}
                <div data-aos="fade-up">

                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                           bg-blue-50 dark:bg-blue-500/10
                           border border-blue-200 dark:border-blue-500/30
                           text-blue-700 dark:text-blue-400
                           font-semibold text-sm">
                        <ion-icon name="{{ $industry->icon ?? 'business-outline' }}"></ion-icon>
                        Industry Solutions
                    </div>

                    <h1 class="mt-6 text-4xl md:text-5xl xl:text-6xl
                           font-extrabold leading-tight tracking-tight
                           text-slate-900 dark:text-white">
                        {{ $industry->title }}
                    </h1>

                    @if ($industry->subtitle)
                    <p class="mt-6 text-xl md:text-2xl font-semibold
                               text-blue-600 dark:text-blue-400">
                        {{ $industry->subtitle }}
                    </p>
                    @endif

                    @if ($industry->short_description)
                    <p class="mt-6 text-lg leading-8
                               text-slate-600 dark:text-slate-300 max-w-2xl">
                        {{ $industry->short_description }}
                    </p>
                    @endif

                    <div class="mt-8 flex flex-wrap gap-4">

                        <a href="/book" wire:navigate class="inline-flex items-center justify-center gap-2
                               px-7 py-4 rounded-xl
                               bg-amber-500 hover:bg-amber-400
                               text-slate-950 font-bold
                               shadow-lg shadow-amber-500/20 transition">
                            <ion-icon name="calendar-outline" class="text-xl"></ion-icon>
                            Book a Consultation
                        </a>

                        <a href="/contact" wire:navigate class="inline-flex items-center justify-center gap-2
                               px-7 py-4 rounded-xl
                               bg-white dark:bg-slate-900
                               border border-slate-300 dark:border-slate-700
                               hover:bg-slate-100 dark:hover:bg-slate-800
                               font-semibold transition">
                            Talk To Our Experts
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>

                    </div>
                </div>

                {{-- Hero image --}}
                <div data-aos="zoom-in" data-aos-duration="1000">

                    @if ($industry->hero_image)
                    <div class="relative rounded-3xl overflow-hidden
                               border border-slate-200 dark:border-slate-700
                               shadow-2xl bg-white dark:bg-slate-900">

                        <img src="{{ asset($industry->hero_image) }}" alt="{{ $industry->title }}"
                            class="w-full h-[420px] object-cover">

                        <div class="absolute inset-0
                                   bg-gradient-to-t
                                   from-blue-950/40
                                   via-transparent
                                   to-transparent">
                        </div>

                        <div class="absolute bottom-6 left-6 right-6
                                   p-5 rounded-2xl
                                   bg-white/90 dark:bg-slate-900/90
                                   backdrop-blur-md
                                   border border-white/30">

                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-xl
                                           bg-amber-500
                                           flex items-center justify-center
                                           text-white">
                                    <ion-icon name="{{ $industry->icon ?? 'business-outline' }}" class="text-2xl">
                                    </ion-icon>
                                </div>

                                <div>
                                    <p class="font-bold text-slate-900 dark:text-white">
                                        {{ $industry->title }}
                                    </p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">
                                        Secure • Compliant • Future Ready
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @else
                    <div class="h-[420px] rounded-3xl
                               bg-gradient-to-br from-blue-700 to-blue-950
                               flex items-center justify-center
                               shadow-2xl">
                        <ion-icon name="{{ $industry->icon ?? 'business-outline' }}" class="text-[10rem] text-white/20">
                        </ion-icon>
                    </div>
                    @endif

                </div>

            </div>
        </div>
    </section>

    {{-- ===== INTRODUCTION ===== --}}
    @if ($industry->description)
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-950">

        <div class="max-w-4xl mx-auto px-6">

            <div class="text-center mb-12">
                <span class="inline-flex items-center gap-2
                           text-sm font-bold uppercase tracking-wider
                           text-amber-600 dark:text-amber-400">
                    <ion-icon name="information-circle-outline"></ion-icon>
                    Industry Overview
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl
                           font-extrabold text-slate-900 dark:text-white">
                    Technology Solutions Built For
                    <span class="text-blue-600 dark:text-blue-400">
                        {{ $industry->title }}
                    </span>
                </h2>
            </div>

            <div class="prose prose-lg max-w-none
                       prose-slate
                       dark:prose-invert
                       prose-headings:font-bold
                       prose-a:text-blue-600
                       prose-strong:text-slate-900
                       dark:prose-strong:text-white">
                {!! $industry->description !!}
            </div>

        </div>
    </section>
    @endif

    {{-- ===== CHALLENGES ===== --}}
    @if (!empty($industry->challenges))
    <section class="py-20 lg:py-24
               bg-slate-50 dark:bg-slate-900/60
               border-y border-slate-200 dark:border-slate-800">

        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mb-12" data-aos="fade-up">

                <span class="inline-flex items-center gap-2
                           text-sm font-bold uppercase tracking-wider
                           text-red-600 dark:text-red-400">
                    <ion-icon name="warning-outline"></ion-icon>
                    The Challenges
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl
                           font-extrabold text-slate-900 dark:text-white">
                    Challenges Facing
                    <span class="text-blue-600 dark:text-blue-400">
                        {{ $industry->title }}
                    </span>
                </h2>

                <p class="mt-5 text-lg text-slate-600 dark:text-slate-300">
                    Organizations in this sector face unique technology, security,
                    compliance, and operational challenges. We help address them
                    with practical solutions.
                </p>

            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                @foreach ($industry->challenges as $challenge)
                <div data-aos="fade-up" class="group p-6 rounded-2xl
                               bg-white dark:bg-slate-950
                               border border-slate-200 dark:border-slate-800
                               hover:border-red-300 dark:hover:border-red-500/40
                               hover:-translate-y-1
                               shadow-sm hover:shadow-lg
                               transition">

                    <div class="w-11 h-11 rounded-xl
                                   bg-red-50 dark:bg-red-500/10
                                   text-red-500
                                   flex items-center justify-center
                                   mb-5
                                   group-hover:bg-red-500
                                   group-hover:text-white
                                   transition">

                        <ion-icon name="alert-circle-outline" class="text-xl"></ion-icon>
                    </div>

                    <p class="font-semibold leading-7
                                   text-slate-800 dark:text-slate-200">
                        {{ $challenge }}
                    </p>

                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    {{-- ===== SOLUTIONS ===== --}}
    @if (!empty($industry->solutions))
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-950">

        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mb-12" data-aos="fade-up">

                <span class="inline-flex items-center gap-2
                           text-sm font-bold uppercase tracking-wider
                           text-blue-600 dark:text-blue-400">
                    <ion-icon name="shield-checkmark-outline"></ion-icon>
                    Our Solutions
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl
                           font-extrabold text-slate-900 dark:text-white">
                    How We Help
                    <span class="text-amber-500">
                        {{ $industry->title }}
                    </span>
                </h2>

                <p class="mt-5 text-lg text-slate-600 dark:text-slate-300">
                    Practical technology solutions designed to strengthen security,
                    improve operations, and support sustainable growth.
                </p>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($industry->solutions as $solution)
                <div data-aos="fade-up" class="group p-7 rounded-2xl
                               bg-slate-50 dark:bg-slate-900
                               border border-slate-200 dark:border-slate-800
                               hover:border-blue-300 dark:hover:border-blue-500/40
                               hover:-translate-y-1
                               transition">

                    <div class="w-12 h-12 rounded-xl
                                   bg-blue-100 dark:bg-blue-500/10
                                   text-blue-700 dark:text-blue-400
                                   flex items-center justify-center
                                   group-hover:bg-blue-600
                                   group-hover:text-white
                                   transition">

                        <ion-icon name="checkmark-circle-outline" class="text-2xl"></ion-icon>

                    </div>

                    <h3 class="mt-5 text-lg font-bold
                                   text-slate-900 dark:text-white">
                        {{ $solution }}
                    </h3>

                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    {{-- ===== BENEFITS ===== --}}
    @if (!empty($industry->benefits))
    <section class="py-20 lg:py-24
               bg-blue-950 text-white
               relative overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-blue-500/10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full bg-amber-500/10 blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mb-12" data-aos="fade-up">

                <span class="inline-flex items-center gap-2
                           text-sm font-bold uppercase tracking-wider
                           text-amber-400">
                    <ion-icon name="sparkles-outline"></ion-icon>
                    The Outcome
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl font-extrabold">
                    The Value We Bring To
                    <span class="text-amber-400">
                        {{ $industry->title }}
                    </span>
                </h2>

                <p class="mt-5 text-lg text-blue-100 leading-8">
                    Our goal is not simply to introduce technology, but to help your
                    organization become more secure, resilient, compliant, and effective.
                </p>

            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                @foreach ($industry->benefits as $benefit)
                <div data-aos="fade-up" class="flex items-start gap-4
                               p-6 rounded-2xl
                               bg-white/5
                               border border-white/10
                               hover:bg-white/10
                               transition">

                    <div class="shrink-0 w-10 h-10 rounded-full
                                   bg-amber-500
                                   text-slate-950
                                   flex items-center justify-center">

                        <ion-icon name="checkmark-outline" class="text-xl"></ion-icon>

                    </div>

                    <p class="font-semibold leading-7 text-blue-50">
                        {{ $benefit }}
                    </p>

                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    {{-- ===== FAQ ===== --}}
    @if (!empty($industry->faqs))
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-950">

        <div class="max-w-4xl mx-auto px-6">

            <div class="text-center mb-12" data-aos="fade-up">

                <span class="inline-flex items-center gap-2
                           text-sm font-bold uppercase tracking-wider
                           text-blue-600 dark:text-blue-400">
                    <ion-icon name="help-circle-outline"></ion-icon>
                    Frequently Asked Questions
                </span>

                <h2 class="mt-3 text-3xl md:text-4xl
                           font-extrabold text-slate-900 dark:text-white">
                    Questions About
                    <span class="text-amber-500">
                        {{ $industry->title }}
                    </span>
                </h2>

            </div>

            <div class="space-y-4">

                @foreach ($industry->faqs as $faq)
                <details class="group rounded-2xl
                               border border-slate-200 dark:border-slate-800
                               bg-slate-50 dark:bg-slate-900
                               overflow-hidden">

                    <summary class="flex items-center justify-between gap-6
                                   cursor-pointer
                                   list-none
                                   p-6
                                   font-bold
                                   text-slate-900 dark:text-white">

                        <span>{{ $faq['question'] }}</span>

                        <ion-icon name="chevron-down-outline" class="shrink-0 text-xl
                                       text-blue-600
                                       transition
                                       group-open:rotate-180">
                        </ion-icon>

                    </summary>

                    <div class="px-6 pb-6
                                   text-slate-600 dark:text-slate-300
                                   leading-7">
                        {{ $faq['answer'] }}
                    </div>

                </details>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    {{-- ===== CTA ===== --}}
    <section class="relative overflow-hidden bg-slate-50 dark:bg-slate-900 py-20">

        <div class="absolute top-0 right-0 text-blue-600/5 text-[14rem] font-bold leading-none select-none">
            +
        </div>

        <div class="relative max-w-5xl mx-auto px-6 text-center">

            <div class="w-16 h-16 mx-auto rounded-2xl
                   bg-amber-500
                   text-white
                   flex items-center justify-center
                   shadow-lg shadow-amber-500/20">

                <ion-icon name="{{ $industry->icon ?? 'business-outline' }}" class="text-3xl">
                </ion-icon>

            </div>

            <h2 class="mt-7 text-3xl md:text-5xl
                   font-extrabold
                   text-slate-900 dark:text-white">
                Ready To Strengthen Your
                <span class="text-blue-600 dark:text-blue-400">
                    {{ $industry->title }}
                </span>?
            </h2>

            <p class="mt-6 max-w-2xl mx-auto
                   text-lg leading-8
                   text-slate-600 dark:text-slate-300">
                Let's discuss your organization's technology, cybersecurity,
                data protection, and digital transformation needs.
            </p>

            <div class="mt-9 flex flex-wrap justify-center gap-4">

                <a href="/book" wire:navigate class="inline-flex items-center gap-2
                       px-8 py-4 rounded-xl
                       bg-amber-500 hover:bg-amber-400
                       text-slate-950 font-bold
                       shadow-lg transition">
                    <ion-icon name="calendar-outline" class="text-xl"></ion-icon>
                    Schedule a Consultation
                </a>

                <a href="/contact" wire:navigate class="inline-flex items-center gap-2
                       px-8 py-4 rounded-xl
                       bg-blue-600 hover:bg-blue-700
                       text-white font-bold
                       shadow-lg transition">
                    Contact Our Team
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

            </div>

        </div>
    </section>

</div>