
(() => {
    'use strict';

    const portfolioPage = document.querySelector('.pf-page');

    if (!portfolioPage) {
        return;
    }

    const revealElements = portfolioPage.querySelectorAll('[data-reveal]');

    // Respect accessibility preferences.
    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    if (reduceMotion || !('IntersectionObserver' in window)) {
        revealElements.forEach((element) => {
            element.classList.add('pf-is-visible');
        });

        return;
    }

    const observer = new IntersectionObserver(
        (entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('pf-is-visible');
                currentObserver.unobserve(entry.target);
            });
        },
        {
            threshold: 0.12,
            rootMargin: '0px 0px -35px 0px'
        }
    );

    revealElements.forEach((element, index) => {
        element.style.transitionDelay = `${(index % 4) * 80}ms`;
        observer.observe(element);
    });
})();
