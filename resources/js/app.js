import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    offset: 60,
    once: true,
});

document.addEventListener('livewire:navigated', () => AOS.refreshHard());


function initTheme() {
    const themeIcon = document.getElementById('themeIcon');
    const mobileThemeIcon = document.getElementById('mobileThemeIcon');

    function updateIcons(isDark) {
        const iconName = isDark
            ? 'sunny-outline'
            : 'moon-outline';

        if (themeIcon) {
            themeIcon.setAttribute('name', iconName);
        }

        if (mobileThemeIcon) {
            mobileThemeIcon.setAttribute('name', iconName);
        }
    }

    const isDark =
        localStorage.theme === 'dark' ||
        (
            !('theme' in localStorage) &&
            window.matchMedia('(prefers-color-scheme: dark)').matches
        );

    document.documentElement.classList.toggle('dark', isDark);

    updateIcons(isDark);
}


function toggleTheme() {
    const isDark = document.documentElement.classList.contains('dark');

    document.documentElement.classList.toggle('dark', !isDark);

    localStorage.theme = isDark
        ? 'light'
        : 'dark';

    const themeIcon = document.getElementById('themeIcon');
    const mobileThemeIcon = document.getElementById('mobileThemeIcon');

    const iconName = isDark
        ? 'moon-outline'
        : 'sunny-outline';

    if (themeIcon) {
        themeIcon.setAttribute('name', iconName);
    }

    if (mobileThemeIcon) {
        mobileThemeIcon.setAttribute('name', iconName);
    }
}


function initMobileDrawer() {
    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeDrawer');
    const overlay = document.getElementById('drawerOverlay');
    const drawer = document.getElementById('mobileDrawer');

    // Page does not contain the drawer.
    if (!menuBtn || !closeBtn || !overlay || !drawer) {
        return;
    }

    // Prevent attaching duplicate listeners.
    if (menuBtn.dataset.drawerInitialized === 'true') {
        return;
    }

    menuBtn.dataset.drawerInitialized = 'true';

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

    overlay.addEventListener('click', (event) => {
        if (event.target === overlay) {
            closeDrawer();
        }
    });
}


function initThemeButtons() {
    const themeToggle = document.getElementById('themeToggle');
    const mobileThemeToggle = document.getElementById('mobileThemeToggle');

    if (themeToggle && !themeToggle.dataset.themeInitialized) {
        themeToggle.dataset.themeInitialized = 'true';

        themeToggle.addEventListener('click', toggleTheme);
    }

    if (
        mobileThemeToggle &&
        !mobileThemeToggle.dataset.themeInitialized
    ) {
        mobileThemeToggle.dataset.themeInitialized = 'true';

        mobileThemeToggle.addEventListener('click', toggleTheme);
    }
}


function initApp() {
    initTheme();
    initMobileDrawer();
    initThemeButtons();
}


// Initial page load
document.addEventListener('DOMContentLoaded', initApp);

// Livewire wire:navigate
document.addEventListener('livewire:navigated', initApp);
