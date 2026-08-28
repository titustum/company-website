<?php

use Livewire\Attributes\Validate;
use Livewire\Component;

new
#[\Livewire\Attributes\Title('Contact Us | South-End Tech Limited')]
class extends Component
{
    #[Validate('required|string|min:3|max:255')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|string|min:9|max:20')]
    public string $phone = '';

    #[Validate('required|string')]
    public string $subject = 'General Inquiry';

    #[Validate('required|string|min:10|max:2000')]
    public string $message = '';

    public bool $sent = false;

    public function submit(): void
    {
        $this->validate();

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
        $this->subject = 'General Inquiry';
        $this->sent = true;
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
                <span class="text-sm font-semibold text-blue-700 dark:text-blue-400">Get In Touch</span>
            </div>
            <h1 data-aos="fade-up"
                class="mt-8 text-4xl md:text-5xl xl:text-6xl font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white max-w-4xl mx-auto">
                We're Here To Help You
                <span class="text-blue-600 dark:text-blue-400">Stay Secure</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-8 text-lg text-slate-600 dark:text-gray-300 leading-8 max-w-3xl mx-auto">
                Have a question about our solutions, need support, or want to discuss your organization's technology
                needs? Reach out — our team responds within one business day.
            </p>
        </div>
    </section>

    <!-- ===== CONTACT METHODS ===== -->
    <section class="relative overflow-hidden bg-white py-24 dark:bg-slate-950">
        <!-- Subtle background decoration -->
        <div
            class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-blue-100/40 blur-3xl dark:bg-blue-900/10">
        </div>
        <div
            class="pointer-events-none absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-amber-100/40 blur-3xl dark:bg-amber-900/10">
        </div>
        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <!-- Section heading -->
            <div class="mx-auto mb-14 max-w-2xl text-center" data-aos="fade-up">
                <span
                    class="mb-3 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-widest text-blue-700 dark:text-blue-400">
                    <span class="h-px w-6 bg-blue-600"></span>
                    Get in Touch
                    <span class="h-px w-6 bg-blue-600"></span>
                </span>

                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Let’s Start a Conversation
                </h2>

                <p class="mt-4 text-base leading-7 text-slate-600 dark:text-slate-400">
                    Have a question, need expert guidance, or ready to start a project?
                    Our team is here to help.
                </p>
            </div>

            <!-- Contact cards -->
            <div class="grid gap-6 md:grid-cols-3">

                <!-- Call Us -->
                <a href="tel:+254728223333" data-aos="fade-up"
                    class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-amber-200 hover:shadow-xl hover:shadow-slate-200/50 dark:border-slate-800 dark:bg-slate-900/70 dark:hover:border-amber-500/30 dark:hover:shadow-black/20">
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-amber-100 transition-colors duration-300 group-hover:bg-amber-500 dark:bg-amber-500/15 dark:group-hover:bg-amber-500">
                        <ion-icon name="call-outline"
                            class="text-2xl text-amber-600 transition-colors group-hover:text-white dark:text-amber-400">
                        </ion-icon>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        Call Us
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">
                        +254 728 223 333<br>
                        Mon – Fri, 8:00am – 5:00pm EAT
                    </p>

                    <span
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 transition-all group-hover:gap-3 dark:text-blue-400">
                        Give us a call
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </span>
                </a>

                <!-- Email Us -->
                <a href="mailto:info@southendtech.co.ke" data-aos="fade-up" data-aos-delay="100"
                    class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-slate-200/50 dark:border-slate-800 dark:bg-slate-900/70 dark:hover:border-blue-500/30 dark:hover:shadow-black/20">
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-blue-100 transition-colors duration-300 group-hover:bg-blue-700 dark:bg-blue-500/15 dark:group-hover:bg-blue-600">
                        <ion-icon name="mail-outline"
                            class="text-2xl text-blue-700 transition-colors group-hover:text-white dark:text-blue-400">
                        </ion-icon>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        Email Us
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">
                        info@southendtech.co.ke<br>
                        We reply within one business day.
                    </p>

                    <span
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 transition-all group-hover:gap-3 dark:text-blue-400">
                        Send an email
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </span>
                </a>

                <!-- Visit Us -->
                <div data-aos="fade-up" data-aos-delay="200"
                    class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-amber-200 hover:shadow-xl hover:shadow-slate-200/50 dark:border-slate-800 dark:bg-slate-900/70 dark:hover:border-amber-500/30 dark:hover:shadow-black/20">
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-amber-100 transition-colors duration-300 group-hover:bg-amber-500 dark:bg-amber-500/15 dark:group-hover:bg-amber-500">
                        <ion-icon name="location-outline"
                            class="text-2xl text-amber-600 transition-colors group-hover:text-white dark:text-amber-400">
                        </ion-icon>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        Visit Us
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">
                        NML Towers, Second Floor,<br>
                        Office No. 207, Tsavo Road,<br>
                        Nairobi, Kenya
                    </p>

                    <a href="#map"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 transition-all group-hover:gap-3 dark:text-blue-400">
                        Find us below
                        <ion-icon name="arrow-down-outline"></ion-icon>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== MESSAGE FORM ===== -->
    <section class="relative py-24 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-900/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-14" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    Send A Message
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900 dark:text-white">
                    Tell Us What
                    <span class="text-amber-500">You Need</span>
                </h2>
            </div>
            <div class="grid lg:grid-cols-12 gap-12">
                <div class="lg:col-span-7" data-aos="fade-right">
                    @if ($sent)
                    <div data-aos="zoom-in"
                        class="p-10 rounded-3xl bg-white dark:bg-slate-950 border border-green-300 dark:border-green-500/30 text-center">
                        <div
                            class="mx-auto w-20 h-20 rounded-full bg-green-100 dark:bg-green-500/20 flex items-center justify-center mb-6">
                            <ion-icon name="checkmark-circle-outline" class="text-5xl text-green-600"></ion-icon>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Message Sent!</h3>
                        <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-md mx-auto">Thank you for reaching
                            out. Our team will get back to you within one business day.</p>
                        <button wire:click="$set('sent', false)"
                            class="mt-8 inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-gray-200 font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                            Send Another Message
                        </button>
                    </div>
                    @else
                    <form wire:submit="submit"
                        class="p-8 lg:p-10 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 space-y-5">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                    for="name">Full Name *</label>
                                <input id="name" type="text" wire:model="name" placeholder="Jane Wanjiku"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                @error('name')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                    for="email">Email Address *</label>
                                <input id="email" type="email" wire:model="email" placeholder="jane@company.co.ke"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                @error('email')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                    for="phone">Phone Number *</label>
                                <input id="phone" type="tel" wire:model="phone" placeholder="+254 7XX XXX XXX"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                @error('phone')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                    for="subject">Subject</label>
                                <select id="subject" wire:model="subject"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                                    @foreach (['General Inquiry', 'Data Protection', 'Cybersecurity', 'Data & AI',
                                    'Digital Consulting', 'Partnership', 'Careers'] as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-gray-300 mb-2"
                                for="message">Your Message *</label>
                            <textarea id="message" wire:model="message" rows="5"
                                placeholder="Tell us about your organization and what you need help with..."
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition resize-none"></textarea>
                            @error('message')
                            <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" wire:loading.attr="disabled"
                            class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-accent-yellow hover:bg-amber-400 text-slate-900 font-bold shadow-lg transition disabled:opacity-60 disabled:cursor-not-allowed">
                            <span wire:loading.remove wire:target="submit" class="flex items-center gap-2">
                                Send Message <ion-icon name="send-outline"></ion-icon>
                            </span>
                            <span wire:loading wire:target="submit" class="flex items-center gap-2">
                                Sending...
                            </span>
                        </button>
                    </form>
                    @endif
                </div>
                <div class="lg:col-span-5 space-y-6">
                    <div data-aos="fade-left" class="p-8 rounded-3xl bg-blue-950 text-white relative overflow-hidden">
                        <div class="absolute -right-16 -top-16 w-48 h-48 bg-amber-400/20 rounded-full blur-3xl"></div>
                        <div class="relative">
                            <h3 class="text-xl font-bold mb-6">Office Hours</h3>
                            <ul class="space-y-4 text-blue-100">
                                <li class="flex justify-between gap-4 border-b border-white/10 pb-3">
                                    <span>Monday – Friday</span>
                                    <span class="font-semibold">8:00am – 5:00pm</span>
                                </li>
                                <li class="flex justify-between gap-4 border-b border-white/10 pb-3">
                                    <span>Saturday</span>
                                    <span class="font-semibold">9:00am – 1:00pm</span>
                                </li>
                                <li class="flex justify-between gap-4">
                                    <span>Sunday & Public Holidays</span>
                                    <span class="font-semibold">Closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="100" class="why-card">
                        <div class="why-icon bg-amber-100 dark:bg-amber-500/20">
                            <ion-icon name="time-outline" class="text-amber-600"></ion-icon>
                        </div>
                        <h3>Fast Response Promise</h3>
                        <p>All inquiries are answered within one business day. For urgent security incidents, call us
                            directly.</p>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="200" class="why-card">
                        <div class="why-icon bg-blue-100 dark:bg-blue-900/40">
                            <ion-icon name="share-social-outline" class="text-blue-900 dark:text-blue-400"></ion-icon>
                        </div>
                        <h3>Follow Us</h3>
                        <p>Get insights, updates, and announcements on social media.</p>
                        <div class="flex gap-3 mt-5">
                            <a href="#" aria-label="LinkedIn"
                                class="w-11 h-11 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-accent-yellow transition">
                                <ion-icon name="logo-linkedin" class="text-xl"></ion-icon>
                            </a>
                            <a href="#" aria-label="Twitter / X"
                                class="w-11 h-11 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-accent-yellow transition">
                                <ion-icon name="logo-twitter" class="text-xl"></ion-icon>
                            </a>
                            <a href="#" aria-label="Facebook"
                                class="w-11 h-11 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-accent-yellow transition">
                                <ion-icon name="logo-facebook" class="text-xl"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MAP ===== -->
    <section id="map" class="relative py-24 bg-white dark:bg-slate-950 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-14" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-600 font-semibold text-sm">
                    <ion-icon name="navigate-outline"></ion-icon>
                    Find Us
                </div>
                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900 dark:text-white">
                    Visit Our <span class="text-amber-500">Nairobi Office</span>
                </h2>
            </div>
            <div data-aos="zoom-in"
                class="rounded-3xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-2xl">
                <iframe
                    src="https://www.google.com/maps?q=NML%20Towers%2C%20Tsavo%20Road%2C%20Nairobi%2C%20Kenya&output=embed"
                    width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"
                    title="South-End Tech office location map"></iframe>
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-blue-950"></div>
        <div class="absolute bottom-0 left-0 w-125 h-125 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="relative max-w-5xl mx-auto px-6 text-center">
            <div class="mx-auto w-20 h-20 rounded-2xl bg-amber-500 flex items-center justify-center mb-8"
                data-aos="zoom-in">
                <ion-icon name="calendar-outline" class="text-5xl text-white"></ion-icon>
            </div>
            <h2 data-aos="fade-up" class="text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                Prefer To Talk It Through?
                <span class="text-amber-400">Book A Session</span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="100"
                class="mt-6 max-w-2xl mx-auto text-lg text-blue-100 leading-relaxed">Schedule a free consultation with
                one of our specialists and get practical guidance for your organization.</p>
            <div data-aos="fade-up" data-aos-delay="200" class="mt-10">
                <a href="{{ route('book') }}" wire:navigate
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-amber-500 hover:bg-amber-400 text-blue-950 font-bold transition shadow-lg shadow-amber-500/30">
                    Book a Consultation
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
    </section>
</div>
