<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

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
                <a href="/about" wire:navigate class="hover:text-gray-900 transition-colors duration-300">About Us</a>
                <a href="#" class="hover:text-gray-900 transition-colors duration-300">Our Team</a>
                <a href="/contact" wire:navigate class="hover:text-gray-900 transition-colors duration-300">Contact</a>
                <a href="/careers" wire:navigate class="hover:text-gray-900 transition-colors duration-300">Careers</a>
                <a href="#" class="hover:text-gray-900 transition-colors duration-300">Gallery</a>
            </div>
        </div>
    </div>

    <!-- ===== MAIN NAVIGATION ===== -->
    <nav class="sticky top-0 z-30 bg-blue-600 dark:bg-blue-900 text-white shadow-lg transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <a href="#" class="flex items-center shrink-0">
                    <img src="https://southendtech.co.ke/static/img/for-blue.png" alt="SouthEnd Tech"
                        class="h-12 w-auto">
                </a>
                <ul class="hidden xl:flex items-center gap-6 text-[15px] font-medium">
                    <li><a href="#" class="hover:text-amber-300 transition">Home</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition">Webinars</a></li>
                    <!-- Data Protection -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Data Protection
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>
                        <div
                            class="absolute left-0 top-full pt-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl w-96 p-5 text-gray-700 dark:text-gray-200">
                                <a href="#"
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Registration &
                                    Compliance</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">DPO as
                                    a Service</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Data
                                    Management & Insights</a>
                                <a href="#"
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Privacy
                                    Checklist</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Data
                                    Protection Training</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Data
                                    Governance</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Breach
                                    Management</a>
                            </div>
                        </div>
                    </li>
                    <!-- Cyber Security -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Cyber Security
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>
                        <div
                            class="absolute left-0 top-full pt-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl w-96 p-5 text-gray-700 dark:text-gray-200">
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">SME
                                    Security</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Cloud
                                    Security</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">SIEM &
                                    SOAR</a>
                                <a href="#"
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Endpoint
                                    Security</a>
                                <a href="#"
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Network
                                    Security</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Email
                                    Security</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Data
                                    Security</a>
                            </div>
                        </div>
                    </li>
                    <!-- AI -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Data Science & AI
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>
                        <div
                            class="absolute left-0 top-full pt-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl w-96 p-5 text-gray-700 dark:text-gray-200">
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Data
                                    Science</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Data
                                    Visualization</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Data
                                    Annotation</a>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">SETLAB
                                    Developers</a>
                                <a href="#"
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Artificial
                                    Intelligence</a>
                            </div>
                        </div>
                    </li>
                    <!-- Consulting -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-amber-300 transition">
                            Consulting
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>
                        <div
                            class="absolute left-0 top-full pt-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl w-96 p-5 text-gray-700 dark:text-gray-200">
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">IT
                                    Systems Audit</a>
                                <a href="#"
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Specialized
                                    Audits</a>
                                <a href="#"
                                    class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Website
                                    Development</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#" class="hover:text-amber-300 transition">Blogs</a></li>
                </ul>
                <div class="hidden xl:flex items-center gap-3">
                    <button id="themeToggle"
                        class="w-10 h-10 rounded-full bg-blue-700 hover:bg-blue-800 dark:bg-blue-800 dark:hover:bg-blue-700 transition flex items-center justify-center">
                        <ion-icon name="moon-outline" id="themeIcon" class="text-xl"></ion-icon>
                    </button>
                    <a href="/book" wire:navigate
                        class="bg-amber-500 hover:bg-amber-400 px-5 py-3 rounded-full text-black font-semibold flex items-center gap-2 transition">
                        Book Consulatancy
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                </div>
                <button id="menuBtn"
                    class="xl:hidden w-11 h-11 rounded-lg hover:bg-blue-700 transition flex items-center justify-center">
                    <ion-icon name="menu-outline" class="text-3xl"></ion-icon>
                </button>
            </div>
        </div>
    </nav>

    <!-- ===== MOBILE DRAWER ===== -->
    <div id="drawerOverlay" class="fixed inset-0 bg-black/50 z-40 hidden opacity-0 transition-opacity duration-300">
        <aside id="mobileDrawer"
            class="absolute left-0 top-0 h-full w-80 max-w-[85%] bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 shadow-2xl -translate-x-full transition-transform duration-300 overflow-y-auto">
            <div class="bg-blue-600 dark:bg-blue-900 text-white px-5 h-20 flex items-center justify-between">
                <img src="https://southendtech.co.ke/static/img/for-blue.png" class="h-10">
                <button id="closeDrawer"
                    class="w-10 h-10 rounded-lg hover:bg-blue-700 flex items-center justify-center">
                    <ion-icon name="close-outline" class="text-3xl"></ion-icon>
                </button>
            </div>
            <div class="p-5">
                <a href="/" wire:navigate class="block py-3 font-medium border-b dark:border-gray-800">Home</a>
                <a href="#" class="block py-3 font-medium border-b dark:border-gray-800">Webinars</a>
                <!-- Data Protection -->
                <details class="border-b dark:border-gray-800 group">
                    <summary class="flex justify-between items-center py-3 cursor-pointer font-medium list-none">
                        Data Protection
                        <ion-icon name="chevron-down-outline" class="text-lg transition group-open:rotate-180">
                        </ion-icon>
                    </summary>
                    <div class="pb-3 pl-4 text-gray-600 dark:text-gray-400">
                        <a href="#" class="block py-2">Registration & Compliance</a>
                        <a href="#" class="block py-2">DPO as a Service</a>
                        <a href="#" class="block py-2">Data Management & Insights</a>
                        <a href="#" class="block py-2">Privacy Checklist</a>
                        <a href="#" class="block py-2">Training</a>
                        <a href="#" class="block py-2">Data Governance</a>
                        <a href="#" class="block py-2">Breach Management</a>
                    </div>
                </details>
                <!-- Cyber Security -->
                <details class="border-b dark:border-gray-800 group">
                    <summary class="flex justify-between items-center py-3 cursor-pointer font-medium list-none">
                        Cyber Security
                        <ion-icon name="chevron-down-outline" class="transition group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="pb-3 pl-4 text-gray-600 dark:text-gray-400">
                        <a href="#" class="block py-2">SME Security</a>
                        <a href="#" class="block py-2">Cloud Security</a>
                        <a href="#" class="block py-2">SIEM & SOAR</a>
                        <a href="#" class="block py-2">Endpoint Security</a>
                        <a href="#" class="block py-2">Network Security</a>
                        <a href="#" class="block py-2">Email Security</a>
                        <a href="#" class="block py-2">Data Security</a>
                    </div>
                </details>
                <!-- Data Science -->
                <details class="border-b dark:border-gray-800 group">
                    <summary class="flex justify-between items-center py-3 cursor-pointer font-medium list-none">
                        Data Science & AI
                        <ion-icon name="chevron-down-outline" class="transition group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="pb-3 pl-4 text-gray-600 dark:text-gray-400">
                        <a href="#" class="block py-2">Data Science</a>
                        <a href="#" class="block py-2">Data Visualization</a>
                        <a href="#" class="block py-2">Data Annotation</a>
                        <a href="#" class="block py-2">SETLAB Developers</a>
                        <a href="#" class="block py-2">Artificial Intelligence</a>
                    </div>
                </details>
                <!-- Consulting -->
                <details class="border-b dark:border-gray-800 group">
                    <summary class="flex justify-between items-center py-3 cursor-pointer font-medium list-none">
                        Digital Consulting
                        <ion-icon name="chevron-down-outline" class="transition group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="pb-3 pl-4 text-gray-600 dark:text-gray-400">
                        <a href="#" class="block py-2">IT Systems Audit</a>
                        <a href="#" class="block py-2">Specialized Audits</a>
                        <a href="#" class="block py-2">Website Development</a>
                    </div>
                </details>
                <a href="#" class="block py-3 font-medium border-b dark:border-gray-800">Blogs</a>
                <div class="mt-8 space-y-3">
                    <button id="mobileThemeToggle"
                        class="w-full flex items-center justify-center gap-2 border dark:border-gray-700 rounded-lg py-3 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <ion-icon name="moon-outline" id="mobileThemeIcon"></ion-icon>
                        <span>Dark Mode</span>
                    </button>
                    <a href="/book" wire:navigate
                        class="flex items-center justify-center gap-2 text-black bg-amber-500 hover:bg-amber-400 py-3 rounded-lg font-semibold transition">
                        Book Consultancy
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
                    <a href="#" class="flex items-center gap-3 mb-6">
                        <img src="https://southendtech.co.ke/static/img/for-blue.png" alt="South-End Tech"
                            class="h-12 w-auto">
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

    <!-- ===== SCRIPTS ===== -->
    <script>
        // Mobile Drawer
        const menuBtn = document.getElementById('menuBtn');
        const closeBtn = document.getElementById('closeDrawer');
        const overlay = document.getElementById('drawerOverlay');
        const drawer = document.getElementById('mobileDrawer');

        function openDrawer() {
            overlay.classList.remove('hidden');
            requestAnimationFrame(() => {
                overlay.classList.remove('opacity-0');
                drawer.classList.remove('-translate-x-full');
            });
            document.body.classList.add('overflow-hidden');
        }

        function closeDrawer() {
            overlay.classList.add('opacity-0');
            drawer.classList.add('-translate-x-full');
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300);
            document.body.classList.remove('overflow-hidden');
        }

        menuBtn.addEventListener('click', openDrawer);
        closeBtn.addEventListener('click', closeDrawer);
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) closeDrawer();
        });

        // Dark Mode
        const themeToggle = document.getElementById('themeToggle');
        const mobileThemeToggle = document.getElementById('mobileThemeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const mobileThemeIcon = document.getElementById('mobileThemeIcon');

        function updateIcons(isDark) {
            const iconName = isDark ? 'sunny-outline' : 'moon-outline';
            themeIcon.setAttribute('name', iconName);
            mobileThemeIcon.setAttribute('name', iconName);
        }

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            updateIcons(true);
        } else {
            document.documentElement.classList.remove('dark');
            updateIcons(false);
        }

        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
                updateIcons(false);
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
                updateIcons(true);
            }
        }
        themeToggle.addEventListener('click', toggleTheme);
        mobileThemeToggle.addEventListener('click', toggleTheme);
    </script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.2.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.2.2/dist/ionicons/ionicons.js">
    </script>


    @livewireScripts
</body>

</html>
