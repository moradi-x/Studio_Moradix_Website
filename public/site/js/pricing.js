// public/site/pricing/pricing.js
// Pricing Page JavaScript - Moradix Studio

(function() {
    'use strict';

    // // ==================== Tab Toggle (Category Switch) ====================
    // const tabs = document.querySelectorAll('.pr-tab');
    // const indicator = document.querySelector('.pr-tab-indicator');
    // const panels = document.querySelectorAll('.pr-panel');

    // function updateIndicator(activeTab) {
    //     const tabRect = activeTab.getBoundingClientRect();
    //     const containerRect = activeTab.parentElement.getBoundingClientRect();

    //     indicator.style.width = tabRect.width + 'px';
    //     indicator.style.height = tabRect.height + 'px';

    //     // Calculate position based on RTL/LTR
    //     const isRTL = document.dir === 'rtl' || document.documentElement.dir === 'rtl';
    //     if (isRTL) {
    //         indicator.style.right = (containerRect.right - tabRect.right) + 'px';
    //         indicator.style.left = 'auto';
    //     } else {
    //         indicator.style.left = (tabRect.left - containerRect.left) + 'px';
    //         indicator.style.right = 'auto';
    //     }
    // }

    // function switchTab(selectedTab) {
    //     const selectedCategory = selectedTab.dataset.category;
    //     const selectedPanelId = selectedTab.getAttribute('aria-controls');

    //     // Update tabs
    //     tabs.forEach(tab => {
    //         const isSelected = tab === selectedTab;
    //         tab.setAttribute('aria-selected', isSelected);
    //         tab.setAttribute('tabindex', isSelected ? '0' : '-1');
    //     });

    //     // Update panels
    //     panels.forEach(panel => {
    //         const shouldShow = panel.id === selectedPanelId;
    //         if (shouldShow) {
    //             panel.classList.remove('pr-panel-hidden');
    //             panel.removeAttribute('hidden');
    //         } else {
    //             panel.classList.add('pr-panel-hidden');
    //             panel.setAttribute('hidden', '');
    //         }
    //     });

    //     // Update indicator
    //     updateIndicator(selectedTab);
    // }

    // // Initialize indicator position
    // if (indicator && tabs.length > 0) {
    //     const activeTab = document.querySelector('.pr-tab[aria-selected="true"]') || tabs[0];
    //     updateIndicator(activeTab);
    // }

    // // Tab click handlers
    // tabs.forEach(tab => {
    //     tab.addEventListener('click', function() {
    //         switchTab(this);
    //     });

    //     // Keyboard navigation
    //     tab.addEventListener('keydown', function(e) {
    //         let newTab = null;

    //         if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
    //             e.preventDefault();
    //             const currentIndex = Array.from(tabs).indexOf(this);
    //             const isRTL = document.dir === 'rtl' || document.documentElement.dir === 'rtl';

    //             if ((e.key === 'ArrowRight' && !isRTL) || (e.key === 'ArrowLeft' && isRTL)) {
    //                 newTab = tabs[currentIndex + 1] || tabs[0];
    //             } else {
    //                 newTab = tabs[currentIndex - 1] || tabs[tabs.length - 1];
    //             }
    //         } else if (e.key === 'Home') {
    //             e.preventDefault();
    //             newTab = tabs[0];
    //         } else if (e.key === 'End') {
    //             e.preventDefault();
    //             newTab = tabs[tabs.length - 1];
    //         }

    //         if (newTab) {
    //             switchTab(newTab);
    //             newTab.focus();
    //         }
    //     });
    // });

    // // Update indicator on window resize
    // let resizeTimer;
    // window.addEventListener('resize', function() {
    //     clearTimeout(resizeTimer);
    //     resizeTimer = setTimeout(function() {
    //         const activeTab = document.querySelector('.pr-tab[aria-selected="true"]');
    //         if (activeTab && indicator) {
    //             updateIndicator(activeTab);
    //         }
    //     }, 250);
    // });

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

})();
