import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    offset: 60,
    once: true,
});

document.addEventListener('livewire:navigated', () => AOS.refreshHard());
