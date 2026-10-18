
(function() {
    'use strict';

    // ==================== Form Setup ====================
    const form = document.getElementById('ct-contact-form');

    // Convert Persian/Arabic numerals to English
    function toEnglishDigits(str) {
        const persianDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        const arabicDigits = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        let result = str;

        persianDigits.forEach((digit, index) => {
            result = result.replace(new RegExp(digit, 'g'), index);
        });

        arabicDigits.forEach((digit, index) => {
            result = result.replace(new RegExp(digit, 'g'), index);
        });

        return result;
    }

    // ==================== Form Submission ====================
    if (form) {
        form.addEventListener('submit', function(e) {
            // Do not prevent the default submission.
            // Laravel will validate the submitted data.

            // Convert phone digits to English before submitting
            const phoneInput = form.querySelector('input[type="tel"]');

            if (phoneInput) {
                phoneInput.value = toEnglishDigits(
                    phoneInput.value.replace(/\s/g, '')
                );
            }

            // Prevent duplicate submissions
            const submitButton = form.querySelector(
                'button[type="submit"], input[type="submit"]'
            );

            if (submitButton) {
                submitButton.disabled = true;
            }
        });
    }

    // ==================== Copy to Clipboard ====================
    const copyButtons = document.querySelectorAll('.ct-copy-btn');

    copyButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            const textToCopy = this.getAttribute('data-copy');

            if (!textToCopy || !navigator.clipboard) {
                console.error('امکان کپی کردن متن در این مرورگر وجود ندارد.');
                return;
            }

            navigator.clipboard.writeText(textToCopy)
                .then(() => {
                    const originalText = this.textContent;

                    this.textContent = 'کپی شد ✓';
                    this.classList.add('copied');

                    setTimeout(() => {
                        this.textContent = originalText;
                        this.classList.remove('copied');
                    }, 2000);
                })
                .catch(error => {
                    console.error('خطا در کپی:', error);
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
                    entry.target.classList.add('ct-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe form and info column
        const formCard = document.querySelector('.ct-form-card');
        const infoColumn = document.querySelector('.ct-info-column');
        const reassuranceItems = document.querySelectorAll(
            '.ct-reassurance-item'
        );

        if (formCard) observer.observe(formCard);
        if (infoColumn) observer.observe(infoColumn);

        reassuranceItems.forEach(item => {
            observer.observe(item);
        });
    } else {
        // If reduced motion, show everything
        document.querySelectorAll(
            '.ct-form-card, .ct-info-column, .ct-reassurance-item'
        ).forEach(element => {
            element.classList.add('ct-visible');
        });
    }
})();
