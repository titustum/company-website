<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

new class extends Component
{
    use WithPagination;

    public string $search = '';
    public string $category = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'category' => ['except' => ''],
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedCategory()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    public function render()
    {
        $blogs = Blog::query()
            ->where('is_published', true)
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('excerpt', 'like', '%' . $this->search . '%')
                        ->orWhere('content', 'like', '%' . $this->search . '%')
                        ->orWhere('category', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->category, function ($query) {
                $query->where('category', $this->category);
            })
            ->latest('published_at')
            ->paginate(9);

        $categories = Blog::query()
            ->where('is_published', true)
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return $this->view()
            ->title('Insights & Resources | South-End Tech')
            ->with([
                'blogs' => $blogs,
                'categories' => $categories,
            ]);
    }
};
?>

<div class="min-h-screen bg-slate-50 dark:bg-slate-950">

    {{-- =========================================================
    HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-blue-950 text-white">

        {{-- Decorative shapes --}}
        <div class="absolute -top-32 -right-32 w-96 h-96
            rounded-full bg-blue-600/20 blur-3xl"></div>

        <div class="absolute -bottom-40 -left-20 w-96 h-96
            rounded-full bg-amber-500/10 blur-3xl"></div>

        {{-- Plus pattern --}}
        <div class="absolute top-16 right-[18%] hidden lg:block
            text-blue-400/20 text-4xl font-light select-none">
            +
        </div>

        <div class="absolute bottom-14 right-10 hidden lg:block
            text-amber-400/20 text-5xl font-light select-none">
            +
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24">

            <div class="max-w-3xl">

                {{-- Label --}}
                <div class="inline-flex items-center gap-2
                    px-4 py-2 rounded-full
                    bg-amber-500/15
                    border border-amber-400/30
                    text-amber-300
                    text-sm font-semibold">

                    <ion-icon name="book-outline"></ion-icon>

                    Knowledge Center
                </div>

                <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl
                    font-extrabold leading-tight tracking-tight">

                    Insights & Resources
                </h1>

                <p class="mt-6 text-lg lg:text-xl
                    text-blue-100 leading-8 max-w-2xl">

                    Practical insights on cybersecurity, data protection,
                    compliance, artificial intelligence, and digital
                    transformation to help your organization make better
                    technology decisions.
                </p>

            </div>
        </div>
    </section>


    {{-- =========================================================
    SEARCH & FILTERS
    ========================================================== --}}
    <section class="relative -mt-8 z-10">
        <div class="max-w-7xl mx-auto px-6">

            <div class="bg-white dark:bg-slate-900
                rounded-2xl
                border border-slate-200 dark:border-slate-800
                shadow-xl
                p-5 lg:p-6">

                <div class="flex flex-col lg:flex-row
                    lg:items-center gap-4">

                    {{-- Search --}}
                    <div class="relative flex-1">

                        <ion-icon name="search-outline" class="absolute left-4 top-1/2 -translate-y-1/2
                                text-xl text-slate-400">
                        </ion-icon>

                        <input type="search" wire:model.live.debounce.400ms="search"
                            placeholder="Search insights and articles..." class="w-full h-12 pl-12 pr-4
                                rounded-xl
                                border border-slate-200
                                dark:border-slate-700
                                bg-slate-50
                                dark:bg-slate-800
                                text-slate-900
                                dark:text-white
                                placeholder:text-slate-400
                                focus:border-blue-500
                                focus:ring-2
                                focus:ring-blue-500/20
                                outline-none transition">

                    </div>

                    {{-- Category --}}
                    <div class="relative lg:w-64">

                        <ion-icon name="filter-outline" class="absolute left-4 top-1/2 -translate-y-1/2
                                text-lg text-slate-400 pointer-events-none">
                        </ion-icon>

                        <select wire:model.live="category" class="w-full h-12 pl-11 pr-10
                                appearance-none
                                rounded-xl
                                border border-slate-200
                                dark:border-slate-700
                                bg-slate-50
                                dark:bg-slate-800
                                text-slate-700
                                dark:text-slate-200
                                focus:border-blue-500
                                focus:ring-2
                                focus:ring-blue-500/20
                                outline-none cursor-pointer">

                            <option value="">All Categories</option>

                            @foreach ($categories as $item)
                            <option value="{{ $item }}">
                                {{ $item }}
                            </option>
                            @endforeach

                        </select>

                        <ion-icon name="chevron-down-outline" class="absolute right-4 top-1/2 -translate-y-1/2
                                text-slate-400 pointer-events-none">
                        </ion-icon>

                    </div>

                    {{-- Clear --}}
                    @if ($search || $category)
                    <button type="button" wire:click="clearFilters" class="h-12 px-5 rounded-xl
                                border border-slate-200
                                dark:border-slate-700
                                text-slate-600
                                dark:text-slate-300
                                hover:bg-slate-100
                                dark:hover:bg-slate-800
                                font-semibold transition
                                flex items-center justify-center gap-2">

                        <ion-icon name="close-circle-outline"></ion-icon>
                        Clear
                    </button>
                    @endif

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
    BLOG LIST
    ========================================================== --}}
    <section class="py-16 lg:py-20">

        <div class="max-w-7xl mx-auto px-6">

            {{-- Results heading --}}
            <div class="flex flex-col sm:flex-row
                sm:items-end sm:justify-between gap-4 mb-10">

                <div>

                    <p class="text-sm font-semibold
                        text-amber-600 dark:text-amber-400 uppercase
                        tracking-wider">

                        Knowledge Center
                    </p>

                    <h2 class="mt-2 text-3xl lg:text-4xl
                        font-extrabold
                        text-slate-900 dark:text-white">

                        Latest Insights
                    </h2>

                </div>

                <p class="text-sm text-slate-500 dark:text-slate-400">
                    {{ $blogs->total() }}
                    {{ Str::plural('article', $blogs->total()) }}
                </p>

            </div>


            {{-- Loading --}}
            <div wire:loading wire:target="search,category" class="mb-6 flex items-center gap-2
                    text-sm text-blue-600 dark:text-blue-400">

                <ion-icon name="sync-outline" class="animate-spin text-lg"></ion-icon>
                Finding relevant insights...
            </div>


            {{-- Cards --}}
            @if ($blogs->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

                @foreach ($blogs as $blog)

                <article wire:key="blog-{{ $blog->id }}" class="group flex flex-col overflow-hidden
                                rounded-2xl
                                bg-white dark:bg-slate-900
                                border border-slate-200
                                dark:border-slate-800
                                shadow-sm
                                hover:shadow-xl
                                hover:-translate-y-1
                                transition-all duration-300">

                    {{-- Image --}}
                    <a href="{{ route('blog.show', $blog->slug) }}" wire:navigate class="relative block aspect-[16/9]
                                    overflow-hidden
                                    bg-slate-100 dark:bg-slate-800">

                        @if ($blog->featured_image)

                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                            loading="lazy" class="w-full h-full object-cover
                                            group-hover:scale-105
                                            transition duration-500">

                        @else

                        <div class="w-full h-full
                                        flex items-center justify-center
                                        bg-linear-to-br
                                        from-blue-950
                                        to-blue-700">

                            <ion-icon name="newspaper-outline" class="text-6xl text-white/30">
                            </ion-icon>

                        </div>

                        @endif

                        {{-- Category badge --}}
                        @if ($blog->category)
                        <span class="absolute top-4 left-4
                                        inline-flex items-center gap-1.5
                                        px-3 py-1.5 rounded-full
                                        bg-white/95 dark:bg-slate-900/95
                                        text-xs font-bold
                                        text-blue-700 dark:text-blue-300
                                        shadow-sm">

                            <ion-icon name="pricetag-outline"></ion-icon>

                            {{ $blog->category }}

                        </span>
                        @endif

                    </a>


                    {{-- Card body --}}
                    <div class="flex flex-col flex-1 p-6">

                        {{-- Meta --}}
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-2
                                    text-xs text-slate-500
                                    dark:text-slate-400">

                            @if ($blog->published_at)
                            <span class="inline-flex items-center gap-1.5">

                                <ion-icon name="calendar-outline"></ion-icon>

                                {{ \Illuminate\Support\Carbon::parse($blog->published_at)->format('M j, Y') }}

                            </span>
                            @endif

                            @if ($blog->reading_time)
                            <span class="inline-flex items-center gap-1.5">

                                <ion-icon name="time-outline"></ion-icon>

                                {{ $blog->reading_time }} min read

                            </span>
                            @endif

                        </div>


                        {{-- Title --}}
                        <h3 class="mt-4 text-xl font-bold
                                    leading-snug
                                    text-slate-900 dark:text-white">

                            <a href="{{ route('blog.show', $blog->slug) }}" wire:navigate class="hover:text-blue-600
                                            dark:hover:text-blue-400
                                            transition">

                                {{ $blog->title }}

                            </a>

                        </h3>


                        {{-- Excerpt --}}
                        @if ($blog->excerpt)
                        <p class="mt-3 text-sm
                                        text-slate-600
                                        dark:text-slate-400
                                        leading-6 line-clamp-3">

                            {{ $blog->excerpt }}

                        </p>
                        @endif


                        {{-- Footer --}}
                        <div class="mt-auto pt-6
                                    flex items-center justify-between
                                    border-t border-slate-100
                                    dark:border-slate-800">

                            @if ($blog->author)

                            <div class="flex items-center gap-2
                                            text-sm text-slate-500
                                            dark:text-slate-400">

                                <div class="w-8 h-8 rounded-full
                                                bg-blue-100 dark:bg-blue-900/40
                                                flex items-center justify-center">

                                    <ion-icon name="person-outline" class="text-blue-600
                                                        dark:text-blue-400">
                                    </ion-icon>

                                </div>

                                <span>
                                    {{ $blog->author }}
                                </span>

                            </div>

                            @else

                            <span class="text-sm font-medium
                                            text-slate-400">
                                South-End Tech
                            </span>

                            @endif


                            <a href="{{ route('blog.show', $blog->slug) }}" wire:navigate class="inline-flex items-center gap-1.5
                                            text-sm font-bold
                                            text-blue-600
                                            dark:text-blue-400
                                            group-hover:gap-2.5
                                            transition-all">

                                Read More

                                <ion-icon name="arrow-forward-outline">
                                </ion-icon>

                            </a>

                        </div>

                    </div>

                </article>

                @endforeach

            </div>


            {{-- Pagination --}}
            @if ($blogs->hasPages())

            <div class="mt-12">

                {{ $blogs->links() }}

            </div>

            @endif


            @else

            {{-- Empty state --}}
            <div class="py-20 text-center">

                <div class="w-20 h-20 mx-auto
                        rounded-2xl
                        bg-slate-100 dark:bg-slate-800
                        flex items-center justify-center">

                    <ion-icon name="search-outline" class="text-4xl text-slate-400">
                    </ion-icon>

                </div>

                <h3 class="mt-6 text-2xl font-bold
                        text-slate-900 dark:text-white">

                    No insights found
                </h3>

                <p class="mt-3 max-w-md mx-auto
                        text-slate-500 dark:text-slate-400">

                    We couldn't find any articles matching your
                    search or selected category.
                    Try a different search term.
                </p>

                <button type="button" wire:click="clearFilters" class="mt-7 inline-flex items-center gap-2
                            px-6 py-3 rounded-xl
                            bg-blue-600 hover:bg-blue-700
                            text-white font-semibold transition">

                    <ion-icon name="refresh-outline"></ion-icon>

                    View All Insights

                </button>

            </div>

            @endif

        </div>

    </section>


    {{-- =========================================================
    BOTTOM CTA
    ========================================================== --}}
    <section class="relative overflow-hidden
        bg-blue-950 text-white">

        <div class="absolute -top-32 right-0
            w-96 h-96 rounded-full
            bg-blue-600/20 blur-3xl"></div>

        <div class="relative max-w-4xl mx-auto
            px-6 py-16 text-center">

            <div class="w-14 h-14 mx-auto rounded-2xl
                bg-amber-500
                flex items-center justify-center">

                <ion-icon name="chatbubbles-outline" class="text-2xl">
                </ion-icon>

            </div>

            <h2 class="mt-6 text-3xl lg:text-4xl
                font-extrabold">

                Need Help With Your Technology Challenges?
            </h2>

            <p class="mt-4 text-blue-100
                max-w-2xl mx-auto leading-7">

                Our specialists can help your organization strengthen
                cybersecurity, protect data, achieve compliance, and
                unlock the value of technology.

            </p>

            <div class="mt-8 flex flex-col sm:flex-row
                justify-center gap-3">

                <a href="{{ route('book') }}" wire:navigate class="inline-flex items-center justify-center
                        gap-2 px-7 py-3.5 rounded-xl
                        bg-amber-500 hover:bg-amber-400
                        text-slate-950 font-bold transition">

                    Book a Consultation

                    <ion-icon name="arrow-forward-outline"></ion-icon>

                </a>

                <a href="{{ route('contact') }}" wire:navigate class="inline-flex items-center justify-center
                        gap-2 px-7 py-3.5 rounded-xl
                        border border-white/20
                        bg-white/10 hover:bg-white/15
                        text-white font-semibold transition">

                    Contact Our Team

                    <ion-icon name="mail-outline"></ion-icon>

                </a>

            </div>

        </div>

    </section>

</div>