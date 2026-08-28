<?php

use Livewire\Component;
use App\Models\TeamMember;

new class extends Component
{
    public function render()
    {
        $teamMembers = TeamMember::published()->get();

        return
            $this->view()
            ->title('Our Team | South-End Tech')
            ->with([
                'teamMembers' => $teamMembers,
            ]);
    }
};
?>

<div class="min-h-screen bg-slate-50 dark:bg-slate-950">

    {{-- =========================================================
    HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-blue-950 text-white">

        {{-- Background decoration --}}
        <div class="absolute -top-32 -right-32 w-96 h-96
            rounded-full bg-blue-600/20 blur-3xl">
        </div>

        <div class="absolute -bottom-40 -left-20 w-96 h-96
            rounded-full bg-amber-500/10 blur-3xl">
        </div>

        {{-- Plus symbols --}}
        <div class="absolute top-16 right-[18%]
            hidden lg:block text-blue-400/20
            text-5xl font-light select-none">
            +
        </div>

        <div class="absolute bottom-16 right-12
            hidden lg:block text-amber-400/20
            text-6xl font-light select-none">
            +
        </div>

        <div class="absolute top-32 left-[8%]
            hidden xl:block text-white/5
            text-8xl font-light select-none">
            +
        </div>

        <div class="relative max-w-7xl mx-auto px-6
            py-20 lg:py-24">

            <div class="max-w-3xl">

                {{-- Label --}}
                <div class="inline-flex items-center gap-2
                    px-4 py-2 rounded-full
                    bg-amber-500/15
                    border border-amber-400/30
                    text-amber-300
                    text-sm font-semibold">

                    <ion-icon name="people-outline"></ion-icon>

                    Our Team
                </div>

                <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl
                    font-extrabold leading-tight tracking-tight">

                    The People Behind
                    <span class="text-amber-400">
                        South-End Tech
                    </span>

                </h1>

                <p class="mt-6 text-lg lg:text-xl
                    text-blue-100 leading-8 max-w-2xl">

                    Meet the people helping organizations strengthen
                    cybersecurity, protect data, navigate compliance,
                    and confidently embrace digital transformation.

                </p>

            </div>
        </div>

    </section>


    {{-- =========================================================
    TEAM
    ========================================================== --}}
    <section class="py-16 lg:py-24">

        <div class="max-w-7xl mx-auto px-6">

            {{-- Section heading --}}
            <div class="max-w-3xl mx-auto text-center mb-14">

                <div class="inline-flex items-center gap-2
                    text-sm font-bold uppercase tracking-wider
                    text-amber-600 dark:text-amber-400">

                    <span class="w-8 h-px bg-amber-500"></span>

                    Meet Our Team

                    <span class="w-8 h-px bg-amber-500"></span>

                </div>

                <h2 class="mt-4 text-3xl md:text-4xl
                    font-extrabold
                    text-slate-900 dark:text-white">

                    Expertise With A Purpose
                </h2>

                <p class="mt-5 text-slate-600
                    dark:text-slate-300 leading-7">

                    Our team brings together expertise across technology,
                    data, cybersecurity, risk, and business operations
                    to deliver practical solutions for modern organizations.

                </p>

            </div>


            {{-- Team grid --}}
            @if ($teamMembers->count())

            <div class="grid sm:grid-cols-2 lg:grid-cols-3
                    gap-7 lg:gap-8">

                @foreach ($teamMembers as $member)

                <article wire:key="team-member-{{ $member->id }}" class="group relative overflow-hidden
                                rounded-3xl
                                bg-white dark:bg-slate-900
                                border border-slate-200
                                dark:border-slate-800
                                shadow-sm
                                hover:shadow-2xl
                                hover:-translate-y-1
                                transition-all duration-300">

                    {{-- Photo --}}
                    <div class="relative aspect-[4/4.2]
                                overflow-hidden
                                bg-slate-100
                                dark:bg-slate-800">

                        @if ($member->photo)

                        <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" loading="lazy"
                            class="w-full h-full object-cover
                                            group-hover:scale-105
                                            transition-transform duration-700">

                        @else

                        {{-- Placeholder --}}
                        <div class="w-full h-full
                                        flex items-center justify-center
                                        bg-linear-to-br
                                        from-blue-950
                                        via-blue-900
                                        to-blue-700">

                            <div class="w-28 h-28 rounded-full
                                            bg-white/10
                                            border border-white/20
                                            flex items-center justify-center">

                                <ion-icon name="person-outline" class="text-6xl text-white/50">
                                </ion-icon>

                            </div>

                        </div>

                        @endif


                        {{-- Gradient --}}
                        <div class="absolute inset-x-0 bottom-0
                                    h-32
                                    bg-linear-to-t
                                    from-black/40
                                    to-transparent
                                    pointer-events-none">
                        </div>

                    </div>


                    {{-- Information --}}
                    <div class="p-6">

                        <h3 class="text-xl font-bold
                                    text-slate-900 dark:text-white">

                            {{ $member->name }}

                        </h3>

                        <div class="mt-2 flex items-center gap-2
                                    text-sm font-semibold
                                    text-blue-600
                                    dark:text-blue-400">

                            <span class="w-6 h-px
                                        bg-amber-500">
                            </span>

                            {{ $member->role }}

                        </div>


                        @if ($member->bio)

                        <p class="mt-4 text-sm
                                        text-slate-600
                                        dark:text-slate-400
                                        leading-6">

                            {{ $member->bio }}

                        </p>

                        @endif

                    </div>

                </article>

                @endforeach

            </div>

            @else

            {{-- Empty state --}}
            <div class="max-w-xl mx-auto text-center py-16">

                <div class="w-20 h-20 mx-auto rounded-2xl
                        bg-slate-100 dark:bg-slate-800
                        flex items-center justify-center">

                    <ion-icon name="people-outline" class="text-4xl text-slate-400">
                    </ion-icon>

                </div>

                <h3 class="mt-6 text-2xl font-bold
                        text-slate-900 dark:text-white">

                    Our team is growing
                </h3>

                <p class="mt-3 text-slate-500
                        dark:text-slate-400">

                    Team information will be available here soon.

                </p>

            </div>

            @endif

        </div>

    </section>


    {{-- =========================================================
    WHAT WE BRING
    ========================================================== --}}
    <section class="relative overflow-hidden
        bg-slate-100 dark:bg-slate-900
        border-y border-slate-200
        dark:border-slate-800">

        <div class="absolute -top-32 -right-32
            w-80 h-80 rounded-full
            bg-blue-600/5 blur-3xl">
        </div>

        <div class="relative max-w-7xl mx-auto
            px-6 py-16 lg:py-20">

            <div class="grid lg:grid-cols-2
                gap-12 lg:gap-20 items-center">

                {{-- Text --}}
                <div>

                    <div class="inline-flex items-center gap-2
                        text-sm font-bold uppercase
                        tracking-wider
                        text-amber-600
                        dark:text-amber-400">

                        <ion-icon name="sparkles-outline"></ion-icon>

                        Our Expertise

                    </div>

                    <h2 class="mt-4 text-3xl lg:text-4xl
                        font-extrabold
                        text-slate-900 dark:text-white">

                        Technology Expertise.
                        <br>
                        <span class="text-blue-600
                            dark:text-blue-400">
                            Business Understanding.
                        </span>

                    </h2>

                    <p class="mt-6 text-slate-600
                        dark:text-slate-300 leading-7">

                        Technology is most valuable when it solves
                        real business problems. Our multidisciplinary
                        team combines technical knowledge with an
                        understanding of organizational, regulatory,
                        and operational realities.

                    </p>

                </div>


                {{-- Expertise cards --}}
                <div class="grid sm:grid-cols-2 gap-4">

                    <div class="p-5 rounded-2xl
                        bg-white dark:bg-slate-950
                        border border-slate-200
                        dark:border-slate-800">

                        <div class="w-11 h-11 rounded-xl
                            bg-blue-100
                            dark:bg-blue-500/10
                            flex items-center justify-center">

                            <ion-icon name="shield-checkmark-outline" class="text-xl text-blue-600
                                    dark:text-blue-400">
                            </ion-icon>

                        </div>

                        <h3 class="mt-4 font-bold
                            text-slate-900 dark:text-white">

                            Cybersecurity

                        </h3>

                        <p class="mt-2 text-sm
                            text-slate-500
                            dark:text-slate-400">

                            Protecting systems, networks,
                            applications, and critical data.

                        </p>

                    </div>


                    <div class="p-5 rounded-2xl
                        bg-white dark:bg-slate-950
                        border border-slate-200
                        dark:border-slate-800">

                        <div class="w-11 h-11 rounded-xl
                            bg-amber-100
                            dark:bg-amber-500/10
                            flex items-center justify-center">

                            <ion-icon name="lock-closed-outline" class="text-xl text-amber-600
                                    dark:text-amber-400">
                            </ion-icon>

                        </div>

                        <h3 class="mt-4 font-bold
                            text-slate-900 dark:text-white">

                            Data Protection

                        </h3>

                        <p class="mt-2 text-sm
                            text-slate-500
                            dark:text-slate-400">

                            Helping organizations responsibly
                            manage and protect personal data.

                        </p>

                    </div>


                    <div class="p-5 rounded-2xl
                        bg-white dark:bg-slate-950
                        border border-slate-200
                        dark:border-slate-800">

                        <div class="w-11 h-11 rounded-xl
                            bg-green-100
                            dark:bg-green-500/10
                            flex items-center justify-center">

                            <ion-icon name="analytics-outline" class="text-xl text-green-600
                                    dark:text-green-400">
                            </ion-icon>

                        </div>

                        <h3 class="mt-4 font-bold
                            text-slate-900 dark:text-white">

                            Data & AI

                        </h3>

                        <p class="mt-2 text-sm
                            text-slate-500
                            dark:text-slate-400">

                            Turning organizational data into
                            useful insights and better decisions.

                        </p>

                    </div>


                    <div class="p-5 rounded-2xl
                        bg-white dark:bg-slate-950
                        border border-slate-200
                        dark:border-slate-800">

                        <div class="w-11 h-11 rounded-xl
                            bg-purple-100
                            dark:bg-purple-500/10
                            flex items-center justify-center">

                            <ion-icon name="rocket-outline" class="text-xl text-purple-600
                                    dark:text-purple-400">
                            </ion-icon>

                        </div>

                        <h3 class="mt-4 font-bold
                            text-slate-900 dark:text-white">

                            Digital Transformation

                        </h3>

                        <p class="mt-2 text-sm
                            text-slate-500
                            dark:text-slate-400">

                            Modernizing operations through
                            practical technology solutions.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    CTA
    ========================================================== --}}
    <section class="relative overflow-hidden
        bg-blue-950 text-white">

        <div class="absolute -top-40 -right-20
            w-96 h-96 rounded-full
            bg-blue-600/20 blur-3xl">
        </div>

        <div class="absolute -bottom-40 -left-20
            w-96 h-96 rounded-full
            bg-amber-500/10 blur-3xl">
        </div>

        <div class="relative max-w-4xl mx-auto
            px-6 py-20 text-center">

            <div class="w-14 h-14 mx-auto
                rounded-2xl bg-amber-500
                flex items-center justify-center">

                <ion-icon name="handshake-outline" class="text-2xl text-white">
                </ion-icon>

            </div>

            <h2 class="mt-6 text-3xl lg:text-4xl
                font-extrabold">

                Let's Build A Safer Digital Future

            </h2>

            <p class="mt-4 text-blue-100
                max-w-2xl mx-auto leading-7">

                Whether you need to strengthen your cybersecurity,
                improve data protection, or transform your operations,
                our team is ready to help.

            </p>

            <div class="mt-8 flex flex-col sm:flex-row
                justify-center gap-3">

                <a href="/book" wire:navigate class="inline-flex items-center
                        justify-center gap-2
                        px-7 py-3.5 rounded-xl
                        bg-amber-500 hover:bg-amber-400
                        text-slate-950 font-bold transition">

                    Book a Consultation

                    <ion-icon name="arrow-forward-outline"></ion-icon>

                </a>

                <a href="/contact" wire:navigate class="inline-flex items-center
                        justify-center gap-2
                        px-7 py-3.5 rounded-xl
                        border border-white/20
                        bg-white/10
                        hover:bg-white/15
                        text-white font-semibold transition">

                    Contact Our Team

                    <ion-icon name="mail-outline"></ion-icon>

                </a>

            </div>

        </div>

    </section>

</div>