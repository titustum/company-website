<?php

use Livewire\Component;
use App\Models\Blog;

new class extends Component
{
    public Blog $blog;

    public function mount($slug)
    {
        $this->blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function render()
    {
        return $this->view()->title($this->blog->title);
    }
};
?>

<div class="min-h-screen bg-slate-50 dark:bg-slate-950">

    {{-- ===== HERO ===== --}}
    <section class="relative overflow-hidden bg-blue-950 text-white">

        {{-- Decorative background --}}
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-16 lg:py-20">

            {{-- Breadcrumb --}}
            <nav class="flex flex-wrap items-center gap-2 text-sm text-blue-200 mb-8">
                <a href="/" wire:navigate class="hover:text-white transition">
                    Home
                </a>

                <ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon>

                <a href="/blogs" wire:navigate class="hover:text-white transition">
                    Insights
                </a>

                <ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon>

                <span class="text-blue-100">
                    {{ $blog->title }}
                </span>
            </nav>

            <div class="max-w-4xl">

                {{-- Category --}}
                @if ($blog->category)
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                        bg-amber-500/15 border border-amber-400/30
                        text-amber-300 text-sm font-semibold mb-6">

                    <ion-icon name="pricetag-outline"></ion-icon>

                    {{ $blog->category }}
                </div>
                @endif

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
                    {{ $blog->title }}
                </h1>

                @if ($blog->excerpt)
                <p class="mt-6 text-lg lg:text-xl text-blue-100 leading-8 max-w-3xl">
                    {{ $blog->excerpt }}
                </p>
                @endif

                {{-- Meta --}}
                <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-blue-200">

                    @if ($blog->author)
                    <div class="flex items-center gap-2">
                        <ion-icon name="person-outline" class="text-lg"></ion-icon>
                        <span>{{ $blog->author }}</span>
                    </div>
                    @endif

                    @if ($blog->published_at)
                    <div class="flex items-center gap-2">
                        <ion-icon name="calendar-outline" class="text-lg"></ion-icon>
                        <span>
                            {{ \Illuminate\Support\Carbon::parse($blog->published_at)->format('F j, Y') }}
                        </span>
                    </div>
                    @endif

                    @if ($blog->reading_time)
                    <div class="flex items-center gap-2">
                        <ion-icon name="time-outline" class="text-lg"></ion-icon>
                        <span>{{ $blog->reading_time }} min read</span>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </section>


    {{-- ===== ARTICLE ===== --}}
    <section class="py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-[minmax(0,1fr)_320px] gap-12">

                {{-- Main Content --}}
                <article class="min-w-0">

                    {{-- Featured Image --}}
                    @if ($blog->featured_image)
                    <div class="overflow-hidden rounded-3xl border border-slate-200
                            dark:border-slate-800 shadow-xl bg-white dark:bg-slate-900 mb-12">

                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                            class="w-full max-h-[550px] object-cover">

                    </div>
                    @endif


                    {{-- Content --}}
                    <div class="bg-white dark:bg-slate-900 rounded-3xl
                        border border-slate-200 dark:border-slate-800
                        shadow-sm p-6 sm:p-8 lg:p-12">

                        <div class="prose prose-lg max-w-none
                            prose-slate
                            dark:prose-invert
                            prose-headings:font-bold
                            prose-headings:text-slate-900
                            dark:prose-headings:text-white
                            prose-a:text-blue-600
                            dark:prose-a:text-blue-400
                            prose-strong:text-slate-900
                            dark:prose-strong:text-white
                            prose-img:rounded-2xl">

                            {!! $blog->content !!}
                        </div>

                    </div>


                    {{-- Tags --}}
                    @if (!empty($blog->tags))
                    <div class="mt-8 flex flex-wrap items-center gap-2">

                        <span
                            class="flex items-center gap-2 text-sm font-semibold text-slate-700 dark:text-slate-300 mr-2">
                            <ion-icon name="pricetags-outline"></ion-icon>
                            Tags:
                        </span>

                        @foreach ($blog->tags as $tag)
                        <span class="px-3 py-1.5 rounded-full text-xs font-semibold
                                    bg-slate-100 dark:bg-slate-800
                                    text-slate-600 dark:text-slate-300">
                            {{ $tag }}
                        </span>
                        @endforeach

                    </div>
                    @endif


                    {{-- Share --}}
                    <div class="mt-10 pt-8 border-t border-slate-200 dark:border-slate-800
                        flex flex-col sm:flex-row sm:items-center justify-between gap-5">

                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                Found this useful?
                            </p>
                            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                                Share this insight with your network.
                            </p>
                        </div>

                        <div class="flex items-center gap-2">

                            <button type="button" onclick="navigator.clipboard.writeText(window.location.href)" class="w-10 h-10 rounded-lg border border-slate-200
                                    dark:border-slate-700 flex items-center justify-center
                                    text-slate-600 dark:text-slate-300
                                    hover:bg-slate-100 dark:hover:bg-slate-800 transition" title="Copy link">

                                <ion-icon name="link-outline"></ion-icon>
                            </button>

                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                                target="_blank" rel="noopener" class="w-10 h-10 rounded-lg bg-blue-600 text-white
                                    flex items-center justify-center hover:bg-blue-700 transition"
                                title="Share on LinkedIn">

                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>

                        </div>

                    </div>

                </article>


                {{-- ===== SIDEBAR ===== --}}
                <aside class="space-y-6">

                    {{-- CTA --}}
                    <div class="sticky top-28">

                        <div class="rounded-3xl bg-blue-950 text-white p-7 shadow-xl overflow-hidden relative">

                            <div class="absolute -right-10 -top-10 w-32 h-32
                                rounded-full bg-blue-600/20 blur-2xl"></div>

                            <div class="relative">

                                <div class="w-12 h-12 rounded-xl bg-amber-500
                                    flex items-center justify-center mb-5">

                                    <ion-icon name="chatbubbles-outline" class="text-2xl text-white">
                                    </ion-icon>

                                </div>

                                <h2 class="text-xl font-bold">
                                    Need Expert Guidance?
                                </h2>

                                <p class="mt-3 text-sm text-blue-100 leading-6">
                                    Our specialists can help your organization
                                    navigate cybersecurity, data protection,
                                    compliance, AI, and digital transformation.
                                </p>

                                <a href="/book" wire:navigate class="mt-6 inline-flex items-center justify-center
                                        gap-2 w-full bg-amber-500 hover:bg-amber-400
                                        text-slate-950 px-5 py-3 rounded-xl
                                        font-bold transition">

                                    Book a Consultation

                                    <ion-icon name="arrow-forward-outline"></ion-icon>

                                </a>

                            </div>
                        </div>


                        {{-- Back to insights --}}
                        <a href="/blogs" wire:navigate class="mt-4 flex items-center justify-center gap-2
                                w-full px-5 py-3 rounded-xl
                                border border-slate-200 dark:border-slate-800
                                bg-white dark:bg-slate-900
                                text-slate-700 dark:text-slate-200
                                font-semibold hover:bg-slate-100
                                dark:hover:bg-slate-800 transition">

                            <ion-icon name="arrow-back-outline"></ion-icon>

                            Back to Insights

                        </a>

                    </div>

                </aside>

            </div>
        </div>
    </section>


    {{-- ===== NEWSLETTER CTA ===== --}}
    <section class="relative overflow-hidden bg-slate-100 dark:bg-slate-900
        border-y border-slate-200 dark:border-slate-800">

        <div class="absolute top-0 right-0 w-72 h-72
            bg-blue-600/5 rounded-full blur-3xl"></div>

        <div class="relative max-w-4xl mx-auto px-6 py-16 text-center">

            <div class="w-14 h-14 mx-auto rounded-2xl bg-amber-500
                flex items-center justify-center mb-5">

                <ion-icon name="mail-outline" class="text-2xl text-white">
                </ion-icon>

            </div>

            <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white">
                Stay Informed
            </h2>

            <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-2xl mx-auto">
                Get practical insights on cybersecurity, data protection,
                compliance, artificial intelligence, and digital transformation.
            </p>

            <a href="/contact" wire:navigate class="mt-7 inline-flex items-center gap-2
                    px-6 py-3 rounded-xl
                    bg-blue-600 hover:bg-blue-700
                    text-white font-semibold transition">

                Subscribe to Our Insights

                <ion-icon name="arrow-forward-outline"></ion-icon>

            </a>

        </div>
    </section>

</div>