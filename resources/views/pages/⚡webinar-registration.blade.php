<?php

use Livewire\Component;
use App\Models\Webinar;
use App\Models\WebinarRegistration;

new class extends Component
{
    public Webinar $webinar;

    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $organization = '';
    public string $job_title = '';
    public string $message = '';

    public bool $registered = false;

    public function mount($slug)
    {
        $this->webinar = Webinar::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function register()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'organization' => ['nullable', 'string', 'max:255'],
            'job_title' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $alreadyRegistered = WebinarRegistration::where('webinar_id', $this->webinar->id)
            ->where('email', $this->email)
            ->exists();

        if ($alreadyRegistered) {
            $this->addError(
                'email',
                'This email address is already registered for this webinar.'
            );

            return;
        }

        WebinarRegistration::create([
            'webinar_id' => $this->webinar->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone ?: null,
            'organization' => $this->organization ?: null,
            'job_title' => $this->job_title ?: null,
            'message' => $this->message ?: null,
            'registered_at' => now(),
            'is_confirmed' => true,
        ]);

        $this->registered = true;
    }

    public function render()
    {
        return $this->view()->title('Register — ' . $this->webinar->title);
    }
};
?>

<div class="min-h-screen bg-slate-50 dark:bg-slate-950">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-blue-950 text-white">

        <div class="absolute -top-32 -right-32 w-96 h-96
                    rounded-full bg-blue-500/20 blur-3xl"></div>

        <div class="absolute -bottom-40 -left-40 w-96 h-96
                    rounded-full bg-amber-500/10 blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-14 lg:py-20">

            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-blue-200 mb-8">

                <a href="/" wire:navigate class="hover:text-amber-400 transition">
                    Home
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <a href="/webinars" wire:navigate class="hover:text-amber-400 transition">
                    Webinars
                </a>

                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="text-white">
                    Registration
                </span>

            </div>

            <div class="max-w-4xl">

                <div class="inline-flex items-center gap-2 px-4 py-2
                            rounded-full bg-amber-500/15
                            border border-amber-400/30
                            text-amber-300
                            font-semibold text-sm">

                    <ion-icon name="person-add-outline"></ion-icon>

                    Webinar Registration
                </div>

                <h1 class="mt-6 text-4xl md:text-5xl
                           font-extrabold leading-tight">
                    Register For This Webinar
                </h1>

                <p class="mt-5 text-lg text-blue-100 leading-8 max-w-3xl">
                    Reserve your place and join South-End Tech for this
                    upcoming webinar.
                </p>

            </div>

        </div>
    </section>


    {{-- CONTENT --}}
    <section class="py-14 lg:py-20">

        <div class="max-w-7xl mx-auto px-6">

            @if ($registered)

            {{-- SUCCESS --}}
            <div class="max-w-3xl mx-auto">

                <div class="bg-white dark:bg-slate-900
                                border border-slate-200
                                dark:border-slate-800
                                rounded-3xl p-8 md:p-12
                                text-center shadow-sm">

                    <div class="mx-auto w-20 h-20
                                    rounded-full bg-green-100
                                    dark:bg-green-500/10
                                    flex items-center justify-center">

                        <ion-icon name="checkmark-circle-outline" class="text-5xl text-green-500">
                        </ion-icon>

                    </div>

                    <h2 class="mt-7 text-3xl md:text-4xl
                                   font-extrabold
                                   text-slate-900 dark:text-white">

                        Registration Successful!

                    </h2>

                    <p class="mt-4 text-slate-600
                                  dark:text-slate-300
                                  leading-7">

                        Thank you, <strong>{{ $name }}</strong>.
                        Your registration for this webinar has been
                        received successfully.

                    </p>

                    <div class="mt-8 p-5 rounded-2xl
                                    bg-slate-50 dark:bg-slate-800
                                    text-left">

                        <p class="text-sm text-slate-500
                                      dark:text-slate-400">
                            Registered Webinar
                        </p>

                        <p class="mt-1 font-bold text-lg
                                      text-slate-900 dark:text-white">
                            {{ $webinar->title }}
                        </p>

                        @if ($webinar->starts_at)

                        <div class="mt-4 flex items-center gap-2
                                            text-sm text-slate-600
                                            dark:text-slate-300">

                            <ion-icon name="calendar-outline" class="text-amber-500 text-lg">
                            </ion-icon>

                            {{ $webinar->starts_at->format('l, F d, Y \a\t g:i A') }}

                        </div>

                        @endif

                    </div>

                    <p class="mt-6 text-sm text-slate-500
                                  dark:text-slate-400">

                        Please keep an eye on your email for webinar
                        updates and joining instructions.

                    </p>

                    <div class="mt-8 flex flex-wrap justify-center gap-3">

                        <a href="/webinars" wire:navigate class="inline-flex items-center gap-2
                                      px-6 py-3 rounded-xl
                                      bg-blue-600 hover:bg-blue-700
                                      text-white font-semibold transition">

                            <ion-icon name="videocam-outline"></ion-icon>

                            View More Webinars

                        </a>

                        <a href="/" wire:navigate class="inline-flex items-center gap-2
                                      px-6 py-3 rounded-xl
                                      border border-slate-300
                                      dark:border-slate-700
                                      text-slate-700 dark:text-slate-200
                                      hover:bg-slate-100
                                      dark:hover:bg-slate-800
                                      font-semibold transition">

                            Back Home

                        </a>

                    </div>

                </div>

            </div>

            @else

            <div class="grid lg:grid-cols-5 gap-8 lg:gap-12">

                {{-- WEBINAR INFORMATION --}}
                <div class="lg:col-span-2">

                    <div class="sticky top-28">

                        @if ($webinar->image)

                        <div class="rounded-3xl overflow-hidden
                                            border border-slate-200
                                            dark:border-slate-800
                                            shadow-sm">

                            <img src="{{ asset('storage/' . $webinar->image) }}" alt="{{ $webinar->title }}"
                                class="w-full aspect-[16/10] object-cover">

                        </div>

                        @endif

                        <div class="mt-6">

                            <div class="inline-flex items-center gap-2
                                            text-sm font-semibold
                                            text-amber-600 dark:text-amber-400">

                                <ion-icon name="videocam-outline"></ion-icon>

                                Upcoming Webinar

                            </div>

                            <h2 class="mt-3 text-2xl md:text-3xl
                                           font-extrabold
                                           text-slate-900 dark:text-white">

                                {{ $webinar->title }}

                            </h2>

                            @if ($webinar->excerpt)

                            <p class="mt-4 text-slate-600
                                              dark:text-slate-300
                                              leading-7">

                                {{ $webinar->excerpt }}

                            </p>

                            @endif

                        </div>


                        {{-- DETAILS --}}
                        <div class="mt-7 space-y-4">

                            @if ($webinar->starts_at)

                            <div class="flex gap-4 p-4 rounded-2xl
                                                bg-white dark:bg-slate-900
                                                border border-slate-200
                                                dark:border-slate-800">

                                <div class="w-11 h-11 shrink-0
                                                    rounded-xl bg-amber-100
                                                    dark:bg-amber-500/10
                                                    flex items-center justify-center">

                                    <ion-icon name="calendar-outline" class="text-xl text-amber-600
                                                       dark:text-amber-400">
                                    </ion-icon>

                                </div>

                                <div>

                                    <p class="text-xs uppercase
                                                      tracking-wide
                                                      text-slate-500
                                                      dark:text-slate-400">
                                        Date
                                    </p>

                                    <p class="mt-1 font-semibold
                                                      text-slate-900
                                                      dark:text-white">

                                        {{ $webinar->starts_at->format('l, F d, Y') }}

                                    </p>

                                </div>

                            </div>


                            <div class="flex gap-4 p-4 rounded-2xl
                                                bg-white dark:bg-slate-900
                                                border border-slate-200
                                                dark:border-slate-800">

                                <div class="w-11 h-11 shrink-0
                                                    rounded-xl bg-blue-100
                                                    dark:bg-blue-500/10
                                                    flex items-center justify-center">

                                    <ion-icon name="time-outline" class="text-xl text-blue-600
                                                       dark:text-blue-400">
                                    </ion-icon>

                                </div>

                                <div>

                                    <p class="text-xs uppercase
                                                      tracking-wide
                                                      text-slate-500
                                                      dark:text-slate-400">
                                        Time
                                    </p>

                                    <p class="mt-1 font-semibold
                                                      text-slate-900
                                                      dark:text-white">

                                        {{ $webinar->starts_at->format('g:i A') }}

                                    </p>

                                </div>

                            </div>

                            @endif


                            @if ($webinar->duration)

                            <div class="flex gap-4 p-4 rounded-2xl
                                                bg-white dark:bg-slate-900
                                                border border-slate-200
                                                dark:border-slate-800">

                                <div class="w-11 h-11 shrink-0
                                                    rounded-xl bg-green-100
                                                    dark:bg-green-500/10
                                                    flex items-center justify-center">

                                    <ion-icon name="hourglass-outline" class="text-xl text-green-600
                                                       dark:text-green-400">
                                    </ion-icon>

                                </div>

                                <div>

                                    <p class="text-xs uppercase
                                                      tracking-wide
                                                      text-slate-500
                                                      dark:text-slate-400">
                                        Duration
                                    </p>

                                    <p class="mt-1 font-semibold
                                                      text-slate-900
                                                      dark:text-white">

                                        {{ $webinar->duration }}

                                    </p>

                                </div>

                            </div>

                            @endif

                        </div>

                    </div>

                </div>


                {{-- REGISTRATION FORM --}}
                <div class="lg:col-span-3">

                    <div class="bg-white dark:bg-slate-900
                                    rounded-3xl
                                    border border-slate-200
                                    dark:border-slate-800
                                    shadow-sm p-7 md:p-10">

                        <div class="mb-8">

                            <h2 class="text-2xl md:text-3xl
                                           font-extrabold
                                           text-slate-900 dark:text-white">

                                Your Registration Details

                            </h2>

                            <p class="mt-2 text-slate-500
                                          dark:text-slate-400">

                                Fill in your details below to reserve
                                your place.

                            </p>

                        </div>


                        <form wire:submit="register" class="space-y-6">

                            {{-- NAME --}}
                            <div>

                                <label for="name" class="block mb-2 text-sm
                                                  font-semibold
                                                  text-slate-700
                                                  dark:text-slate-200">

                                    Full Name
                                    <span class="text-red-500">*</span>

                                </label>

                                <div class="relative">

                                    <ion-icon name="person-outline" class="absolute left-4 top-1/2
                                                   -translate-y-1/2
                                                   text-slate-400 text-lg">
                                    </ion-icon>

                                    <input id="name" type="text" wire:model="name" autocomplete="name"
                                        placeholder="Your full name" class="w-full pl-11 pr-4 py-3.5
                                                   rounded-xl
                                                   border border-slate-300
                                                   dark:border-slate-700
                                                   bg-white dark:bg-slate-800
                                                   text-slate-900
                                                   dark:text-white
                                                   placeholder-slate-400
                                                   focus:ring-2
                                                   focus:ring-blue-500
                                                   focus:border-blue-500
                                                   outline-none transition">

                                </div>

                                @error('name')
                                <p class="mt-1.5 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>


                            {{-- EMAIL --}}
                            <div>

                                <label for="email" class="block mb-2 text-sm
                                                  font-semibold
                                                  text-slate-700
                                                  dark:text-slate-200">

                                    Email Address
                                    <span class="text-red-500">*</span>

                                </label>

                                <div class="relative">

                                    <ion-icon name="mail-outline" class="absolute left-4 top-1/2
                                                   -translate-y-1/2
                                                   text-slate-400 text-lg">
                                    </ion-icon>

                                    <input id="email" type="email" wire:model="email" autocomplete="email"
                                        placeholder="you@example.com" class="w-full pl-11 pr-4 py-3.5
                                                   rounded-xl
                                                   border border-slate-300
                                                   dark:border-slate-700
                                                   bg-white dark:bg-slate-800
                                                   text-slate-900
                                                   dark:text-white
                                                   placeholder-slate-400
                                                   focus:ring-2
                                                   focus:ring-blue-500
                                                   focus:border-blue-500
                                                   outline-none transition">

                                </div>

                                @error('email')
                                <p class="mt-1.5 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>


                            {{-- PHONE + ORGANIZATION --}}
                            <div class="grid md:grid-cols-2 gap-5">

                                <div>

                                    <label for="phone" class="block mb-2 text-sm
                                                      font-semibold
                                                      text-slate-700
                                                      dark:text-slate-200">

                                        Phone Number

                                    </label>

                                    <div class="relative">

                                        <ion-icon name="call-outline" class="absolute left-4 top-1/2
                                                       -translate-y-1/2
                                                       text-slate-400 text-lg">
                                        </ion-icon>

                                        <input id="phone" type="tel" wire:model="phone" autocomplete="tel"
                                            placeholder="+254 7XX XXX XXX" class="w-full pl-11 pr-4 py-3.5
                                                       rounded-xl
                                                       border border-slate-300
                                                       dark:border-slate-700
                                                       bg-white dark:bg-slate-800
                                                       text-slate-900
                                                       dark:text-white
                                                       placeholder-slate-400
                                                       focus:ring-2
                                                       focus:ring-blue-500
                                                       focus:border-blue-500
                                                       outline-none transition">

                                    </div>

                                    @error('phone')
                                    <p class="mt-1.5 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>


                                <div>

                                    <label for="organization" class="block mb-2 text-sm
                                                      font-semibold
                                                      text-slate-700
                                                      dark:text-slate-200">

                                        Organization

                                    </label>

                                    <div class="relative">

                                        <ion-icon name="business-outline" class="absolute left-4 top-1/2
                                                       -translate-y-1/2
                                                       text-slate-400 text-lg">
                                        </ion-icon>

                                        <input id="organization" type="text" wire:model="organization"
                                            autocomplete="organization" placeholder="Your organization" class="w-full pl-11 pr-4 py-3.5
                                                       rounded-xl
                                                       border border-slate-300
                                                       dark:border-slate-700
                                                       bg-white dark:bg-slate-800
                                                       text-slate-900
                                                       dark:text-white
                                                       placeholder-slate-400
                                                       focus:ring-2
                                                       focus:ring-blue-500
                                                       focus:border-blue-500
                                                       outline-none transition">

                                    </div>

                                    @error('organization')
                                    <p class="mt-1.5 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                            </div>


                            {{-- JOB TITLE --}}
                            <div>

                                <label for="job_title" class="block mb-2 text-sm
                                                  font-semibold
                                                  text-slate-700
                                                  dark:text-slate-200">

                                    Job Title

                                </label>

                                <div class="relative">

                                    <ion-icon name="briefcase-outline" class="absolute left-4 top-1/2
                                                   -translate-y-1/2
                                                   text-slate-400 text-lg">
                                    </ion-icon>

                                    <input id="job_title" type="text" wire:model="job_title"
                                        placeholder="Your role or position" class="w-full pl-11 pr-4 py-3.5
                                                   rounded-xl
                                                   border border-slate-300
                                                   dark:border-slate-700
                                                   bg-white dark:bg-slate-800
                                                   text-slate-900
                                                   dark:text-white
                                                   placeholder-slate-400
                                                   focus:ring-2
                                                   focus:ring-blue-500
                                                   focus:border-blue-500
                                                   outline-none transition">

                                </div>

                                @error('job_title')
                                <p class="mt-1.5 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>


                            {{-- MESSAGE --}}
                            <div>

                                <label for="message" class="block mb-2 text-sm
                                                  font-semibold
                                                  text-slate-700
                                                  dark:text-slate-200">

                                    Message
                                    <span class="font-normal
                                                     text-slate-400">
                                        (Optional)
                                    </span>

                                </label>

                                <textarea id="message" wire:model="message" rows="4"
                                    placeholder="Is there anything you'd like us to know?" class="w-full px-4 py-3.5
                                               rounded-xl
                                               border border-slate-300
                                               dark:border-slate-700
                                               bg-white dark:bg-slate-800
                                               text-slate-900
                                               dark:text-white
                                               placeholder-slate-400
                                               focus:ring-2
                                               focus:ring-blue-500
                                               focus:border-blue-500
                                               outline-none transition resize-none"></textarea>

                                @error('message')
                                <p class="mt-1.5 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>


                            {{-- PRIVACY NOTICE --}}
                            <div class="flex gap-3 p-4 rounded-xl
                                            bg-slate-50 dark:bg-slate-800">

                                <ion-icon name="shield-checkmark-outline" class="text-xl text-green-500
                                               shrink-0 mt-0.5">
                                </ion-icon>

                                <p class="text-sm text-slate-500
                                              dark:text-slate-400 leading-6">

                                    Your information will only be used
                                    to process your webinar registration
                                    and communicate relevant webinar
                                    updates.

                                </p>

                            </div>


                            {{-- SUBMIT --}}
                            <button type="submit" wire:loading.attr="disabled" wire:target="register" class="w-full inline-flex items-center
                                           justify-center gap-2
                                           px-6 py-4 rounded-xl
                                           bg-amber-500
                                           hover:bg-amber-400
                                           disabled:opacity-60
                                           disabled:cursor-not-allowed
                                           text-slate-950 font-bold
                                           shadow-lg shadow-amber-500/20
                                           transition">

                                <span wire:loading.remove wire:target="register">

                                    <ion-icon name="checkmark-circle-outline" class="text-xl align-middle">
                                    </ion-icon>

                                    Register For Webinar

                                </span>

                                <span wire:loading wire:target="register" class="inline-flex items-center gap-2">

                                    <ion-icon name="sync-outline" class="text-xl animate-spin">
                                    </ion-icon>

                                    Registering...

                                </span>

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            @endif

        </div>

    </section>

</div>