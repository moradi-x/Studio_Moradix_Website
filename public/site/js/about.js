document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    const page = document.querySelector('.about-page');

    if (!page) return;

    // Smooth scrolling for internal links
    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    page.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener('click', (event) => {
            const href = link.getAttribute('href');

            if (!href || href === '#') return;

            const target = document.querySelector(href);

            if (!target) return;

            event.preventDefault();

            target.scrollIntoView({
                behavior: reduceMotion ? 'auto' : 'smooth',
                block: 'start'
            });
        });
    });

    // Fallback if the manager's portrait is missing
    const profileImage = page.querySelector('.about-person-image');

    if (profileImage) {
        const showPlaceholder = () => {
            if (profileImage.dataset.fallbackShown === 'true') return;

            profileImage.dataset.fallbackShown = 'true';
            profileImage.hidden = true;

            const wrapper = profileImage.closest(
                '.about-person-image-wrap'
            );

            if (!wrapper) return;

            const placeholder = document.createElement('div');

            placeholder.className = 'about-person-placeholder';
            placeholder.setAttribute('aria-hidden', 'true');
            placeholder.textContent = 'تصویر مدیر استودیو';

            wrapper.prepend(placeholder);
        };

        profileImage.addEventListener('error', showPlaceholder);

        // Handle an image that failed before the event listener was added
        if (profileImage.complete && profileImage.naturalWidth === 0) {
            showPlaceholder();
        }
    }
});


/* ========================================
   WHY MORADIX - Reveal Animation
======================================== */

(() => {
    const initWhyMoradix = () => {
        const section = document.querySelector(".about-why");

        if (!section) return;

        const items = section.querySelectorAll("[data-why-reveal]");

        if (!("IntersectionObserver" in window)) {
            items.forEach((item) => {
                item.classList.add("is-visible");
            });

            return;
        }

        const observer = new IntersectionObserver(
            (entries, currentObserver) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;

                    entry.target.classList.add("is-visible");
                    currentObserver.unobserve(entry.target);
                });
            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -30px 0px"
            }
        );

        items.forEach((item, index) => {
            item.style.transitionDelay = `${Math.min(index * 90, 270)}ms`;
            observer.observe(item);
        });
    };

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initWhyMoradix);
    } else {
        initWhyMoradix();
    }
})();