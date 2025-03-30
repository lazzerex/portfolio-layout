import './bootstrap';
import '../css/app.css';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

// Initialize Alpine.js
Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();

// Add scroll reveal animation
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        threshold: 0.1,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach((element) => {
        observer.observe(element);
    });
});
