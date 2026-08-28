<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon1.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon1.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100 min-h-screen transition-colors duration-300">


    <!-- ===== TOP HEADER BAR ===== -->
    <div class="bg-accent-yellow text-white text-sm py-2.5 px-4">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-y-2">
            <div class="text-xs md:text-sm flex grow justify-between md:justify-start items-center gap-5">
                <a href="tel:+254728223333"
                    class="flex items-center gap-2 hover:text-gray-900 transition-colors duration-300">
                    <ion-icon name="call-outline" class="text-base"></ion-icon>
                    <span>+254 728 223 333</span>
                </a>
                <a href="mailto:info@southendtech.co.ke"
                    class="flex items-center gap-2 hover:text-gray-900 transition-colors duration-300">
                    <ion-icon name="mail-outline" class="text-base"></ion-icon>
                    <span>info@southendtech.co.ke</span>
                </a>
            </div>
            <div class="hidden md:flex items-center gap-6 font-medium">
                <a href="{{ route('webinars.index') }}" wire:navigate
                    class="hover:text-gray-900 transition-colors duration-300">Webinars</a>
                <a href="{{ route('contact') }}" wire:navigate
                    class="hover:text-gray-900 transition-colors duration-300">Contact
                    Us</a>
                <a href="{{ route('careers') }}" wire:navigate
                    class="hover:text-gray-900 transition-colors duration-300">Careers</a>
            </div>
        </div>
    </div>

    <!-- ===== MAIN NAVIGATION ===== -->
    <nav class="sticky top-0 z-30 bg-blue-600 dark:bg-blue-900 text-white shadow-lg transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <a href="/" wire:navigate class="flex items-center shrink-0" aria-label="SouthEnd Tech — Home">
                    <img src="{{ asset('images/logo.png') }}" alt="SouthEnd Tech" class="h-12 w-auto">
                </a>

                <ul class="hidden lg:flex items-center gap-6 text-[15px] font-medium">

                    <!-- HOME -->
                    <li>
                        <a href="/" wire:navigate class="hover:text-amber-300 transition">
                            Home
                        </a>
                    </li>

                    <!-- SOLUTIONS -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Solutions
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>

                        <div class="absolute left-0 top-full pt-5 invisible opacity-0
                   group-hover:visible group-hover:opacity-100
                   transition-all duration-300">

                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl
                       w-80 p-4 text-gray-700 dark:text-gray-200">

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Cybersecurity Solutions
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Data Protection & Privacy
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Data & AI Solutions
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Digital & IT Solutions
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    E-Government Solutions
                                </a>

                            </div>
                        </div>
                    </li>


                    <!-- SERVICES -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Services
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>

                        <div class="absolute left-0 top-full pt-5 invisible opacity-0
                   group-hover:visible group-hover:opacity-100
                   transition-all duration-300">

                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl
                       w-80 p-4 text-gray-700 dark:text-gray-200">

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Data Protection & Compliance
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Data Governance & Management
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Cybersecurity Services
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Data Science & Analytics
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Digital Consulting
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    IT Managed Services
                                </a>

                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Software & Website Development
                                </a>

                            </div>
                        </div>
                    </li>


                    <!-- INDUSTRIES -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Industries
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>

                        <div class="absolute left-0 top-full pt-5 invisible opacity-0
               group-hover:visible group-hover:opacity-100
               transition-all duration-300">

                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl
                   w-72 p-4 text-gray-700 dark:text-gray-200">

                                <a href="/industries/financial-services" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Financial Services
                                </a>

                                <a href="/industries/healthcare" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Healthcare
                                </a>

                                <a href="/industries/government" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Government & Public Sector
                                </a>

                                <a href="/industries/ngos" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    NGOs & Development
                                </a>

                                <a href="/industries/education" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Education
                                </a>

                                <a href="/industries/smes" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    SMEs & Businesses
                                </a>

                            </div>
                        </div>
                    </li>



                    <!-- ABOUT US -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            About Us
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>

                        <div class="absolute left-0 top-full pt-5 invisible opacity-0
                   group-hover:visible group-hover:opacity-100
                   transition-all duration-300">

                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl
                       w-64 p-4 text-gray-700 dark:text-gray-200">

                                <a href="/about" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    About Us
                                </a>

                                <a href="/team" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Our Team
                                </a>

                                {{-- <a href="/about#why-us" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Why Choose Us
                                </a>

                                <a href="/about#clients" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Client Stories
                                </a> --}}

                            </div>
                        </div>
                    </li>


                    <!-- INSIGHTS -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Insights
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>

                        <div class="absolute left-0 top-full pt-5 invisible opacity-0
                   group-hover:visible group-hover:opacity-100
                   transition-all duration-300">

                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl
                       w-64 p-4 text-gray-700 dark:text-gray-200">

                                <a href="{{ route('blogs.index') }}" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Blogs
                                </a>

                                {{-- <a href="/webinars" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Webinars
                                </a> --}}

                                <a href="{{ route('case-studies.index') }}" wire:navigate
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Case Studies
                                </a>

                            </div>
                        </div>
                    </li>

                </ul>



                <div class="hidden lg:flex items-center gap-3">
                    <button id="themeToggle"
                        class="w-10 h-10 rounded-full bg-blue-700 hover:bg-blue-800 dark:bg-blue-800 dark:hover:bg-blue-700 transition flex items-center justify-center">
                        <ion-icon name="moon-outline" id="themeIcon" class="text-xl"></ion-icon>
                    </button>
                    <a href="/book" wire:navigate
                        class="bg-amber-500 hover:bg-amber-400 px-5 py-3 rounded-full text-black font-semibold flex items-center gap-2 transition">
                        Book a Consultation
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                </div>
                <button id="menuBtn"
                    class="lg:hidden w-11 h-11 rounded-lg hover:bg-blue-700 transition flex items-center justify-center">
                    <ion-icon name="menu-outline" class="text-3xl"></ion-icon>
                </button>
            </div>
        </div>
    </nav>

    <!-- ===== MOBILE DRAWER ===== -->
    <div id="drawerOverlay" class="fixed inset-0 bg-black/50 z-40 hidden opacity-0 transition-opacity duration-300">

        <aside id="mobileDrawer"
            class="absolute left-0 top-0 h-full w-80 max-w-[85%] bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 shadow-2xl -translate-x-full transition-transform duration-300 overflow-y-auto">

            <!-- Drawer Header -->
            <div class="bg-blue-600 dark:bg-blue-900 text-white px-5 h-20 flex items-center justify-between">
                <a href="/" wire:navigate class="flex items-center shrink-0" aria-label="SouthEnd Tech — Home">
                    <img src="{{ asset('images/logo.png') }}" alt="SouthEnd Tech" class="h-10 w-auto">
                </a>

                <button id="closeDrawer"
                    class="w-10 h-10 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-800 transition flex items-center justify-center">
                    <ion-icon name="close-outline" class="text-3xl"></ion-icon>
                </button>
            </div>

            <!-- Drawer Navigation -->
            <div class="p-5">

                <!-- HOME -->
                <a href="/" wire:navigate
                    class="flex items-center gap-3 py-3 font-medium border-b border-gray-200 dark:border-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition">
                    <ion-icon name="home-outline" class="text-lg"></ion-icon>
                    Home
                </a>


                <!-- SOLUTIONS -->
                <details class="border-b border-gray-200 dark:border-gray-800 group">
                    <summary
                        class="flex justify-between items-center py-3 cursor-pointer font-medium list-none hover:text-blue-600 dark:hover:text-blue-400 transition">
                        <span class="flex items-center gap-3">
                            <ion-icon name="layers-outline" class="text-lg"></ion-icon>
                            Solutions
                        </span>

                        <ion-icon name="chevron-down-outline"
                            class="text-lg transition-transform duration-200 group-open:rotate-180">
                        </ion-icon>
                    </summary>

                    <div class="pb-3 pl-8 text-gray-600 dark:text-gray-400">

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Cybersecurity Solutions
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Data Protection & Privacy
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Data & AI Solutions
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Digital & IT Solutions
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            E-Government Solutions
                        </a>

                    </div>
                </details>


                <!-- SERVICES -->
                <details class="border-b border-gray-200 dark:border-gray-800 group">
                    <summary
                        class="flex justify-between items-center py-3 cursor-pointer font-medium list-none hover:text-blue-600 dark:hover:text-blue-400 transition">

                        <span class="flex items-center gap-3">
                            <ion-icon name="construct-outline" class="text-lg"></ion-icon>
                            Services
                        </span>

                        <ion-icon name="chevron-down-outline"
                            class="text-lg transition-transform duration-200 group-open:rotate-180">
                        </ion-icon>
                    </summary>

                    <div class="pb-3 pl-8 text-gray-600 dark:text-gray-400">

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Data Protection & Compliance
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Data Governance & Management
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Cybersecurity Services
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Data Science & Analytics
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Digital Consulting
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            IT Managed Services
                        </a>

                        <a href="#" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Software & Website Development
                        </a>

                    </div>
                </details>


                <!-- INDUSTRIES -->
                <details class="border-b border-gray-200 dark:border-gray-800 group">
                    <summary
                        class="flex justify-between items-center py-3 cursor-pointer font-medium list-none hover:text-blue-600 dark:hover:text-blue-400 transition">

                        <span class="flex items-center gap-3">
                            <ion-icon name="business-outline" class="text-lg"></ion-icon>
                            Industries
                        </span>

                        <ion-icon name="chevron-down-outline"
                            class="text-lg transition-transform duration-200 group-open:rotate-180">
                        </ion-icon>
                    </summary>

                    <div class="pb-3 pl-8 text-gray-600 dark:text-gray-400">

                        <a href="/industries/financial-services" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Financial Services
                        </a>

                        <a href="/industries/healthcare" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Healthcare
                        </a>

                        <a href="/industries/government" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Government & Public Sector
                        </a>

                        <a href="/industries/ngos" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            NGOs & Development
                        </a>

                        <a href="/industries/education" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Education
                        </a>

                        <a href="/industries/smes" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            SMEs & Businesses
                        </a>

                    </div>
                </details>


                <!-- ABOUT US -->
                <details class="border-b border-gray-200 dark:border-gray-800 group">
                    <summary
                        class="flex justify-between items-center py-3 cursor-pointer font-medium list-none hover:text-blue-600 dark:hover:text-blue-400 transition">

                        <span class="flex items-center gap-3">
                            <ion-icon name="information-circle-outline" class="text-lg"></ion-icon>
                            About Us
                        </span>

                        <ion-icon name="chevron-down-outline"
                            class="text-lg transition-transform duration-200 group-open:rotate-180">
                        </ion-icon>
                    </summary>

                    <div class="pb-3 pl-8 text-gray-600 dark:text-gray-400">

                        <a href="/about" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            About Us
                        </a>

                        <a href="/team" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Our Team
                        </a>

                        {{-- <a href="/about#why-us" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Why Choose Us
                        </a>

                        <a href="/about#clients" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Client Stories
                        </a> --}}

                    </div>
                </details>


                <!-- INSIGHTS -->
                <details class="border-b border-gray-200 dark:border-gray-800 group">
                    <summary
                        class="flex justify-between items-center py-3 cursor-pointer font-medium list-none hover:text-blue-600 dark:hover:text-blue-400 transition">

                        <span class="flex items-center gap-3">
                            <ion-icon name="bulb-outline" class="text-lg"></ion-icon>
                            Insights
                        </span>

                        <ion-icon name="chevron-down-outline"
                            class="text-lg transition-transform duration-200 group-open:rotate-180">
                        </ion-icon>
                    </summary>

                    <div class="pb-3 pl-8 text-gray-600 dark:text-gray-400">

                        <a href="/blogs" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Blogs
                        </a>

                        <a href="{{ route('webinars.index') }}" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Webinars
                        </a>

                        <a href="{{ route('case-studies.index') }}" wire:navigate
                            class="block py-2 hover:text-blue-600 dark:hover:text-blue-400 transition">
                            Case Studies
                        </a>

                    </div>
                </details>


                <!-- CONTACT -->
                <a href="/contact" wire:navigate
                    class="flex items-center gap-3 py-3 font-medium border-b border-gray-200 dark:border-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition">
                    <ion-icon name="mail-outline" class="text-lg"></ion-icon>
                    Contact Us
                </a>


                <!-- CAREERS -->
                <a href="/careers" wire:navigate
                    class="flex items-center gap-3 py-3 font-medium border-b border-gray-200 dark:border-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition">
                    <ion-icon name="briefcase-outline" class="text-lg"></ion-icon>
                    Careers
                </a>


                <!-- ACTIONS -->
                <div class="mt-8 space-y-3">

                    <!-- Theme Toggle -->
                    <button id="mobileThemeToggle"
                        class="w-full flex items-center justify-center gap-2 border border-gray-300 dark:border-gray-700 rounded-lg py-3 hover:bg-gray-100 dark:hover:bg-gray-800 transition">

                        <ion-icon name="moon-outline" id="mobileThemeIcon"></ion-icon>

                        <span>Dark Mode</span>
                    </button>


                    <!-- Consultation -->
                    <a href="/book" wire:navigate
                        class="flex items-center justify-center gap-2 text-black bg-amber-500 hover:bg-amber-400 py-3 rounded-lg font-semibold transition">

                        Book a Consultation

                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>

            </div>
        </aside>
    </div>


    <!-- ===== MAIN CONTENT ===== -->
    <main class="min-h-screen">

        {{ $slot }}

    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="relative bg-blue-950 text-white overflow-hidden border-t border-white/10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-6 pt-16 pb-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-12 gap-10">
                <!-- Brand -->
                <div class="lg:col-span-4">
                    <a href="/" wire:navigate class="flex items-center gap-3 mb-6" aria-label="SouthEnd Tech — Home">
                        <img src="{{ asset('images/logo.png') }}" alt="South-End Tech" class="h-12 w-auto">
                    </a>
                    <p class="text-blue-100 leading-relaxed max-w-sm">South-End Tech Limited is a technology consulting
                        company specializing in Data Protection, Cybersecurity, Data Governance, AI, and Digital
                        Transformation solutions.</p>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- Solutions -->
                <div class="lg:col-span-2">
                    <h3 class="footer-title">Solutions</h3>
                    <ul class="footer-links">
                        <li><a href="#">Data Protection</a></li>
                        <li><a href="#">Cybersecurity</a></li>
                        <li><a href="#">Data & AI</a></li>
                        <li><a href="#">Digital Transformation</a></li>
                    </ul>
                </div>
                <!-- Company -->
                <div class="lg:col-span-2">
                    <h3 class="footer-title">Company</h3>
                    <ul class="footer-links">
                        <li><a href="/about" wire:navigate>About Us</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="/careers" wire:navigate>Careers</a></li>
                        <li><a href="#">Insights</a></li>
                        <li><a href="/contact" wire:navigate>Contact</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div class="lg:col-span-4">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul class="space-y-5 text-blue-100">
                        <li class="flex gap-3">
                            <ion-icon name="location-outline" class="text-amber-400 text-xl"></ion-icon>
                            <span>NML Towers, Second Floor, Office No. 207 Tsavo Road, Nairobi, Kenya</span>
                        </li>
                        <li class="flex gap-3">
                            <ion-icon name="mail-outline" class="text-amber-400 text-xl"></ion-icon>
                            <span>info@southendtech.co.ke</span>
                        </li>
                        <li class="flex gap-3">
                            <ion-icon name="call-outline" class="text-amber-400 text-xl"></ion-icon>
                            <span>+254 728 223333</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <h4 class="font-semibold mb-3">Subscribe To Our Newsletter</h4>
                        <div class="flex bg-white/10 rounded-xl overflow-hidden border border-white/10">
                            <input type="email" placeholder="Your email address"
                                class="flex-1 bg-transparent px-4 py-3 outline-none text-white placeholder:text-blue-200">
                            <button class="bg-amber-500 px-5 text-blue-950 font-bold">
                                <ion-icon name="send-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom -->
            <div
                class="mt-14 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between gap-4 text-sm text-blue-200">
                <p>© 2026 South-End Tech Limited. All Rights Reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-amber-400">Privacy Policy</a>
                    <a href="#" class="hover:text-amber-400">Terms of Service</a>
                    <a href="#" class="hover:text-amber-400">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.2.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.2.2/dist/ionicons/ionicons.js">
    </script>


    @livewireScripts
</body>

</html>