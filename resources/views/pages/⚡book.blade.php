<?php

use Livewire\Attributes\Validate;
use Livewire\Component;

new #[\Livewire\Attributes\Title('Book a Consultation | South-End Tech Limited')] class extends Component
{
    public function services(): array
    {
        return [
            'Data Protection & Privacy' => [
                'DPO as a Service',
                'ODPC Registration Support',
                'Privacy Audit / DPIA',
                'Data Protection Training',
            ],
            'Cybersecurity' => [
                'Security Assessment',
                'Managed Security Services',
                'Email & Endpoint Security',
                'Incident Response',
            ],
            'Data, AI & Analytics' => [
                'Data Governance',
                'Data Visualization',
                'AI Solutions',
                'Analytics Consulting',
            ],
            'Digital Consulting' => [
                'IT Systems Audit',
                'Website Development',
                'Digital Transformation Strategy',
            ],
        ];
    }

    public function timeSlots(): array
    {
        return [
            'Morning (9:00am â€“ 12:00pm)',
            'Afternoon (12:00pm â€“ 3:00pm)',
            'Late Afternoon (3:00pm â€“ 6:00pm)',
        ];
    }

    #[Validate('required|string|min:3|max:255')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|string|min:9|max:20')]
    public string $phone = '';

    #[Validate('nullable|string|max:255')]
    public string $company = '';

    #[Validate('required|string')]
    public string $service = '';

    #[Validate('required|date|after:today')]
    public string $date = '';

    #[Validate('required|string')]
    public string $slot = '';

    #[Validate('nullable|string|max:2000')]
    public string $notes = '';

    public bool $booked = false;

    public function book(): void
    {
        $this->validate();

        $this->reset(['name', 'email', 'phone', 'company', 'service', 'date', 'slot', 'notes']);
        $this->booked = true;
    }
};
?>

<div>
    <!-- ===== PAGE HERO ===== -->
    <section
        class="relative overflow-hidden bg-slate-50 dark:bg-slate-900 border-b border-slate-200 dark:border-gray-800 transition-colors duration-300">
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28 text-center">
            <div data-aos="fade-down"
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 shadow-sm">
                <span class="w-2.5 h-2.5 rounded-full bg-accent-yellow animate-pulse"></span>
                <span class="text-sm font-semibold text-blue-700 dark:text-blue-400">Free 30-Minute Consultation</span>
            </div>
            <h1 data-aos="fade-up"
                class="mt-8 text-4xl md:text-5xl xl:text-6xl font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white max-w-4xl mx-auto">
                Let's Discuss Your
                <span class="text-blue-600 dark:text-blue-400">Technology Needs</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-8 text-lg text-slate-600 dark:text-gray-300 leading-8 max-w-3xl mx-auto">
                Pick a service, choose a time that suits you, and one of our specialists will walk you through practical
                next steps â€” no obligation, no jargon.
            </p>
        </div>
    </section>

    <!-- ===== BOOKING ===== -->
    <section class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12">
                <div class="lg:col-span-7" data-aos="fade-right">
                    @if ($booked)
                        <div data-aos="zoom-in"
                            class="p-10 rounded-3xl bg-slate-50 dark:bg-slate-900 border border-green-300 dark:border-green-500/30 text-center h-full flex flex-col items-center justify-center">
                            <div
                                class="mx-auto w-20 h-20 rounded-full bg-green-100 dark:bg-green-500/20 flex items-center justify-center mb-6">
                                <ion-icon name="checkmark-circle-outline" class="text-5xl text-green-600"></ion-icon>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Booking Received!</h3>
                            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-md mx-auto">Thank you! We've
                                received your consultation request. Our team will confirm your session by email or
                                phone within one business day.</p>
                            <button wire:click="$set('booked', false)"
                                class="mt-8 inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-gray-200 font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                                Book Another Session
                            </button>
                        </div>
                    @else
                        <form wire:submit="book"
                            class="p-8 lg:p-10 rounded-3xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 space-y-5">
                            <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Request Your Session</h2>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                    for="service">What do you need help with? *</label>
                                <select id="service" wire:model="service"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                    <option value="" disabled>Select a service...</option>
                                    @foreach ($this->services() as $group => $options)
                                        <optgroup label="{{ $group }}">
                                            @foreach ($options as $option)
                                                <option value="{{ $group }} â€” {{ $option }}">{{ $option }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                                @error('service')
                                    <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                        for="name">Full Name *</label>
                                    <input id="name" type="text" wire:model="name" placeholder="Jane Wanjiku"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                    @error('name')
                                        <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                        for="company">Organization</label>
                                    <input id="company" type="text" wire:model="company" placeholder="Company Ltd (optional)"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                        for="email">Email Address *</label>
                                    <input id="email" type="email" wire:model="email" placeholder="jane@company.co.ke"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                    @error('email')
                                        <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                        for="phone">Phone Number *</label>
                                    <input id="phone" type="tel" wire:model="phone" placeholder="+254 7XX XXX XXX"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                    @error('phone')
                                        <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                        for="date">Preferred Date *</label>
                                    <input id="date" type="date" wire:model="date" min="{{ now()->toDateString() }}"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                    @error('date')
                                        <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                        for="slot">Preferred Time *</label>
                                    <select id="slot" wire:model="slot"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                        <option value="" disabled>Select a time slot...</option>
                                        @foreach ($this->timeSlots() as $timeSlot)
                                            <option value="{{ $timeSlot }}">{{ $timeSlot }}</option>
                                        @endforeach
                                    </select>
                                    @error('slot')
                                        <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                    for="notes">Anything we should know?</label>
                                <textarea id="notes" wire:model="notes" rows="4" placeholder="Briefly describe your challenge or goal..."
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition resize-none"></textarea>
                            </div>
                            <button type="submit" wire:loading.attr="disabled"
                                class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-accent-yellow hover:bg-amber-400 text-slate-900 font-bold shadow-lg transition disabled:opacity-60 disabled:cursor-not-allowed">
                                <span wire:loading.remove wire:target="book" class="flex items-center gap-2">
                                    Confirm Booking <ion-icon name="calendar-outline"></ion-icon>
                                </span>
                                <span wire:loading wire:target="book" class="flex items-center gap-2">
                                    Booking...
                                </span>
                            </button>
                            <p class="text-xs text-slate-500 flex items-center gap-2">
                                <ion-icon name="lock-closed-outline" class="shrink-0"></ion-icon>
                                Your details are kept confidential and handled in line with the Kenya Data Protection
                                Act.
                            </p>
                        </form>
                    @endif
                </div>
                <div class="lg:col-span-5">
                    <div data-aos="fade-left"
                        class="p-8 rounded-3xl bg-blue-950 text-white relative overflow-hidden">
                        <div class="absolute -right-16 -top-16 w-48 h-48 bg-amber-400/20 rounded-full blur-3xl"></div>
                        <div class="relative">
                            <h3 class="text-xl font-bold mb-8">What Happens Next?</h3>
                            <ol class="space-y-6">
                                @foreach ([
                                    'Submit your request using the form.',
                                    'We confirm your slot within one business day.',
                                    'Meet a specialist for a free 30-minute session.',
                                    'Receive a tailored proposal — no pressure, no obligation.',
                                ] as $index => $step)
                                    <li class="flex gap-4 items-start">
                                        <span
                                            class="flex-shrink-0 w-9 h-9 rounded-xl bg-amber-500 text-white font-bold flex items-center justify-center">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                                        <p class="text-blue-100 leading-relaxed pt-1.5">{{ $step }}</p>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="100" class="why-card mt-6">
                        <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                            <ion-icon name="chatbubbles-outline" class="text-amber-600"></ion-icon>
                        </div>
                        <h3>Would Rather Talk Now?</h3>
                        <p>Call us on <a href="tel:+254728223333"
                                class="font-semibold text-blue-700 dark:text-blue-400 hover:underline">+254 728 223
                                333</a> or email <a href="mailto:info@southendtech.co.ke"
                                class="font-semibold text-blue-700 dark:text-blue-400 hover:underline">info@southendtech.co.ke</a>
                            and we'll schedule you immediately.</p>
                    </div>
                </div>
            </div>

            <!-- Trust strip -->
            <div class="mt-20 pt-10 border-t border-slate-200 dark:border-slate-800 grid grid-cols-2 lg:grid-cols-4 gap-6"
                data-aos="fade-up">
                @foreach ([
                    ['icon' => 'people-outline', 'value' => '100+', 'label' => 'Organizations Served'],
                    ['icon' => 'shield-checkmark-outline', 'value' => 'Certified', 'label' => 'Security Specialists'],
                    ['icon' => 'time-outline', 'value' => '< 24h', 'label' => 'Response Time'],
                    ['icon' => 'ribbon-outline', 'value' => 'Free', 'label' => 'First Session'],
                ] as $item)
                    <div class="flex items-center gap-4 justify-center">
                        <div
                            class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-500/20 flex items-center justify-center shrink-0">
                            <ion-icon name="{{ $item['icon'] }}" class="text-xl text-amber-600"></ion-icon>
                        </div>
                        <div>
                            <p class="font-extrabold text-lg text-slate-900 dark:text-white">{{ $item['value'] }}</p>
                            <p class="text-xs text-slate-500">{{ $item['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
