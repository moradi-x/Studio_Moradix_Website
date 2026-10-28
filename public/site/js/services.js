(function() {
    'use strict';

    // ==================== Accordion for Service Details ====================
    const detailsButtons = document.querySelectorAll('.svc-details-btn');

    detailsButtons.forEach(button => {
        button.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            const targetId = this.getAttribute('aria-controls');
            const detailsPanel = document.getElementById(targetId);

            // Toggle current panel
            if (expanded) {
                this.setAttribute('aria-expanded', 'false');
                detailsPanel.style.maxHeight = null;
            } else {
                this.setAttribute('aria-expanded', 'true');
                detailsPanel.style.maxHeight = detailsPanel.scrollHeight + 'px';
            }
        });
    });

    // ==================== Intersection Observer for Animations ====================
    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('svc-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe cards
        document.querySelectorAll('.svc-card').forEach(card => {
            observer.observe(card);
        });

        // Observe deliverables
        document.querySelectorAll('.svc-deliverable-item').forEach(item => {
            observer.observe(item);
        });

        // Observe process steps
        document.querySelectorAll('.svc-process-step').forEach(step => {
            observer.observe(step);
        });
    } else {
        // If reduced motion, just show everything
        document.querySelectorAll('.svc-card, .svc-deliverable-item, .svc-process-step').forEach(el => {
            el.classList.add('svc-visible');
        });
    }

    // ==================== Smooth Scroll for Anchor Links ====================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();

            const headerHeight = document.querySelector('.header')?.offsetHeight || 0;
            const targetPosition = target.offsetTop - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    });

    document.querySelectorAll('.pr-faq-question').forEach((button) => {
    button.addEventListener('click', () => {
        const item = button.closest('.pr-faq-item');
        const answer = item.querySelector('.pr-faq-answer');
        const isOpen = button.getAttribute('aria-expanded') === 'true';

        button.setAttribute('aria-expanded', String(!isOpen));
        item.classList.toggle('active', !isOpen);

        if (answer) {
            answer.style.maxHeight = !isOpen
                ? answer.scrollHeight + 'px'
                : '0px';
        }
    });
});

})();
