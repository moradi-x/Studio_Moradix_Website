
(() => {
    'use strict';

    function initPortfolio() {
        // 1. Scroll reveal
        const portfolioPage = document.querySelector('.pf-page');

        if (portfolioPage) {
            const revealElements =
                portfolioPage.querySelectorAll('[data-reveal]');

            const reduceMotion = window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;

            if (
                reduceMotion ||
                !('IntersectionObserver' in window)
            ) {
                revealElements.forEach((element) => {
                    element.classList.add('pf-is-visible');
                });
            } else {
                const revealObserver = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach((entry) => {
                            if (!entry.isIntersecting) return;

                            entry.target.classList.add('pf-is-visible');
                            observer.unobserve(entry.target);
                        });
                    },
                    {
                        threshold: 0.12,
                        rootMargin: '0px 0px -35px 0px'
                    }
                );

                revealElements.forEach((element, index) => {
                    element.style.transitionDelay =
                        `${(index % 4) * 80}ms`;

                    revealObserver.observe(element);
                });
            }
        }

        // 2. Hero project cards
        const hero = document.querySelector('.pfh');

        if (!hero) return;

        const stack = hero.querySelector('.pfh-stack');
        const art = hero.querySelector('.pfh-art');
        const counter = hero.querySelector('[data-cur]');

        if (!stack || !art || !counter) return;

        const cards = Array.from(
            stack.querySelectorAll('.pfh-card')
        );

        const motionQuery = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        );

        if (cards.length < 2) return;

        let current = 0;
        let timer = null;
        let hovered = false;
        let focused = false;
        let visible = true;

        const interval = 3800;

        function renderCards() {
            cards.forEach((card, index) => {
                const position =
                    (index - current + cards.length) % cards.length;

                card.dataset.pos = String(position);
                card.classList.toggle(
                    'is-active',
                    position === 0
                );

                card.setAttribute(
                    'aria-hidden',
                    position === 0 ? 'false' : 'true'
                );
            });

            counter.textContent = String(current + 1).padStart(2, '0');
        }

        function nextCard() {
            current = (current + 1) % cards.length;
            renderCards();
        }

        function stopRotation() {
            if (timer !== null) {
                window.clearInterval(timer);
                timer = null;
            }
        }

        function startRotation() {
            stopRotation();

            if (
                motionQuery.matches ||
                hovered ||
                focused ||
                !visible
            ) {
                return;
            }

            timer = window.setInterval(nextCard, interval);
        }

        art.addEventListener('mouseenter', () => {
            hovered = true;
            stopRotation();
        });

        art.addEventListener('mouseleave', () => {
            hovered = false;
            startRotation();
        });

        art.addEventListener('focusin', () => {
            focused = true;
            stopRotation();
        });

        art.addEventListener('focusout', (event) => {
            if (!art.contains(event.relatedTarget)) {
                focused = false;
                startRotation();
            }
        });

        if ('IntersectionObserver' in window) {
            const heroObserver = new IntersectionObserver(
                ([entry]) => {
                    visible = entry.isIntersecting;

                    if (visible) {
                        startRotation();
                    } else {
                        stopRotation();
                    }
                },
                { threshold: 0.1 }
            );

            heroObserver.observe(hero);
        }

        function handleMotionChange() {
            if (motionQuery.matches) {
                stopRotation();
            } else {
                startRotation();
            }
        }

        if (motionQuery.addEventListener) {
            motionQuery.addEventListener(
                'change',
                handleMotionChange
            );
        } else {
            motionQuery.addListener(handleMotionChange);
        }

        renderCards();
        startRotation();
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initPortfolio,
            { once: true }
        );
    } else {
        initPortfolio();
    }

    

})();
