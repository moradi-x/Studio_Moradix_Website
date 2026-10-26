
(function() {
    'use strict';
    // ==================== Collapsible Features (Mobile) ====================
    const showMoreButtons = document.querySelectorAll('.pr-show-more');

    showMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            const featuresList = this.previousElementSibling;

            if (isExpanded) {
                this.setAttribute('aria-expanded', 'false');
                featuresList.classList.remove('expanded');
                this.querySelector('.pr-show-more-text').textContent = 'نمایش همه‌ی امکانات';
            } else {
                this.setAttribute('aria-expanded', 'true');
                featuresList.classList.add('expanded');
                this.querySelector('.pr-show-more-text').textContent = 'نمایش';
            }
        });
    });

    // Show "Show More" buttons on mobile if there are more than 6 items
    function checkFeatureLists() {
        const featureLists = document.querySelectorAll('.pr-collapsible');

        featureLists.forEach(list => {
            const items = list.querySelectorAll('li');
            const showMoreBtn = list.nextElementSibling;

            if (showMoreBtn && showMoreBtn.classList.contains('pr-show-more')) {
                if (window.innerWidth < 768 && items.length > 6) {
                    showMoreBtn.hidden = false;
                } else {
                    showMoreBtn.hidden = true;
                    list.classList.remove('expanded');
                    showMoreBtn.setAttribute('aria-expanded', 'false');
                    if (showMoreBtn.querySelector('.pr-show-more-text')) {
                        showMoreBtn.querySelector('.pr-show-more-text').textContent = 'نمایش همه‌ی امکانات';
                    }
                }
            }
        });
    }

    checkFeatureLists();
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(checkFeatureLists, 250);
    });

    // ==================== FAQ Accordion ====================
    const faqItems = document.querySelectorAll('.pr-faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.pr-faq-question');
        const answer = item.querySelector('.pr-faq-answer');

        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.pr-faq-question').setAttribute('aria-expanded', 'false');
                    otherItem.querySelector('.pr-faq-answer').style.maxHeight = null;
                }
            });

            // Toggle current item
            if (isActive) {
                item.classList.remove('active');
                this.setAttribute('aria-expanded', 'false');
                answer.style.maxHeight = null;
            } else {
                item.classList.add('active');
                this.setAttribute('aria-expanded', 'true');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });

    // ==================== Smooth Scroll for Anchor Links ====================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();

            const headerHeight = document.querySelector('.header')?.offsetHeight || 0;
            const targetPosition = target.offsetTop - headerHeight - 20;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
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
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe plan cards
        document.querySelectorAll('.pr-plan-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    }

    // ==================== Parse Query Parameters (for pre-selected plan) ====================
    const urlParams = new URLSearchParams(window.location.search);
    const selectedPlan = urlParams.get('plan');

    if (selectedPlan) {
        // Highlight the selected plan card
        const planLink = document.querySelector(`a[href*="plan=${selectedPlan}"]`);
        if (planLink) {
            const planCard = planLink.closest('.pr-plan-card');
            if (planCard) {
                planCard.style.borderColor = 'var(--color-primary)';
                planCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    }

});

