
(() => {
    'use strict';

    const scrollButtons = document.querySelectorAll('[data-ph-scroll]');

    if (!scrollButtons.length) {
        return;
    }

    scrollButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            const targetId = button.getAttribute('href');

            if (!targetId || !targetId.startsWith('#')) {
                return;
            }

            const target = document.querySelector(targetId);

            // سکشن مقصد در مرحله بعدی ساخته می‌شود.
            if (!target) {
                return;
            }

            event.preventDefault();

            target.scrollIntoView({
                behavior: window.matchMedia(
                    '(prefers-reduced-motion: reduce)'
                ).matches ? 'auto' : 'smooth',
                block: 'start'
            });
        });
    });
})();



(() => {
    'use strict';

    const section = document.querySelector('.pf-section');

    if (!section) {
        return;
    }

    const revealItems = section.querySelectorAll('.pf-reveal');

    // بدون پشتیبانی از IntersectionObserver، محتوا را مستقیم نشان بده.
    if (
        !('IntersectionObserver' in window) ||
        window.matchMedia('(prefers-reduced-motion: reduce)').matches
    ) {
        revealItems.forEach((item) => {
            item.classList.add('is-visible');
        });

        return;
    }

    const observer = new IntersectionObserver(
        (entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                currentObserver.unobserve(entry.target);
            });
        },
        {
            threshold: 0.12,
            rootMargin: '0px 0px -35px 0px'
        }
    );

    revealItems.forEach((item) => {
        observer.observe(item);
    });
})();




document.addEventListener('DOMContentLoaded', () => {
    const lightbox = document.querySelector('[data-gallery-lightbox]');

    if (!lightbox) return;

    const preview = lightbox.querySelector('[data-gallery-preview]');
    const caption = lightbox.querySelector('[data-gallery-caption]');
    const closeButton = lightbox.querySelector('[data-gallery-close]');
    const galleryItems = document.querySelectorAll('.pf-gallery-item');

    let lastFocusedElement = null;

    function openLightbox(item) {
        const imageUrl = item.dataset.galleryImage;
        const imageAlt = item.dataset.galleryAlt || '';

        if (!imageUrl) return;

        lastFocusedElement = item;
        preview.src = imageUrl;
        preview.alt = imageAlt;
        caption.textContent = imageAlt;

        lightbox.classList.add('is-open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';

        closeButton.focus();
    }

    function closeLightbox() {
        if (!lightbox.classList.contains('is-open')) return;

        lightbox.classList.remove('is-open');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';

        preview.src = '';
        preview.alt = '';
        caption.textContent = '';

        if (lastFocusedElement) {
            lastFocusedElement.focus();
        }
    }

    galleryItems.forEach((item) => {
        item.addEventListener('click', () => openLightbox(item));
    });

    lightbox.querySelectorAll('[data-gallery-close]').forEach((button) => {
        button.addEventListener('click', closeLightbox);
    });

    document.addEventListener('keydown', (event) => {
        if (!lightbox.classList.contains('is-open')) return;

        if (event.key === 'Escape') {
            closeLightbox();
        }
    });
});
