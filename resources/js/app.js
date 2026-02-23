import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

// Initialize AOS
AOS.init({
    duration: 700, // global animation duration
    easing: "ease-out-cubic",
    once: true, // whether animation should happen only once - while scrolling down
    offset: 100, // offset (in px) from the original trigger point
});

import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".testimonialSwiper", {
        modules: [Navigation, Pagination, Autoplay],
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        // This ensures cards stretch to the tallest slide in the current view
        autoHeight: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-next",
            prevEl: ".swiper-prev",
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
});

/**
 * Global Accordion/FAQ Logic
 */
const initAccordions = () => {
    const triggers = document.querySelectorAll('.faq-trigger');
    
    if (triggers.length === 0) return;

    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const content = trigger.nextElementSibling;
            const icon = trigger.querySelector('.faq-icon');

            // Check current state (using truthy check for maxHeight)
            const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

            // Close all other FAQ items (Accordion Mode)
            document.querySelectorAll('.faq-content').forEach(c => {
                c.style.maxHeight = '0px';
                // Remove padding when closed to avoid jumps
                c.style.paddingBottom = '0px';
            });
            
            document.querySelectorAll('.faq-icon').forEach(i => {
                if (i) i.style.transform = 'rotate(0deg)';
            });

            // If it wasn't open, open it now
            if (!isOpen) {
                // Fixed the quote mismatch here:
                content.style.maxHeight = content.scrollHeight + "px";
                // Optional: match your design's padding
                content.style.paddingBottom = "24px"; 
                
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
};

// Initialize
document.addEventListener('DOMContentLoaded', initAccordions);