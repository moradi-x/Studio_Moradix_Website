        'use strict';

        // ==================== Mobile Menu Toggle ====================
        (function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navMobile = document.querySelector('.nav-mobile');
            const navLinks = navMobile.querySelectorAll('a');

            menuToggle.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
                navMobile.classList.toggle('active');

                // Update aria-label
                this.setAttribute('aria-label', expanded ? 'باز کردن منو' : 'بستن منو');
            });

            // Close menu when clicking a link
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuToggle.setAttribute('aria-label', 'باز کردن منو');
                    navMobile.classList.remove('active');
                });
            });
        })();

        // ==================== FAQ Accordion ====================
        (function() {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');

                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');

                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                            otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                            otherItem.querySelector('.faq-answer').style.maxHeight = null;
                        }
                    });

                    // Toggle current item
                    if (isActive) {
                        item.classList.remove('active');
                        question.setAttribute('aria-expanded', 'false');
                        answer.style.maxHeight = null;
                    } else {
                        item.classList.add('active');
                        question.setAttribute('aria-expanded', 'true');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                });
            });
        })();

        // ==================== Smooth Scroll ====================
        (function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href === '#') return;

                    const target = document.querySelector(href);
                    if (!target) return;

                    e.preventDefault();

                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                });
            });
        })();

        // ==================== Form Validation & Submission ====================
        (function() {
            const form = document.getElementById('contact-form');
            const successMessage = document.getElementById('form-success');

            // Persian/English number converter
            function convertToPersianNumbers(str) {
                const persianDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
                return str.replace(/\d/g, digit => persianDigits[digit]);
            }

            // Validate phone number
            function validatePhone(phone) {
                // Remove spaces and convert Persian numbers to English
                const persianDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
                let cleaned = phone.replace(/\s/g, '');
                persianDigits.forEach((persian, index) => {
                    cleaned = cleaned.replace(new RegExp(persian, 'g'), index);
                });

                // Check if it's a valid Iranian phone number
                return /^09\d{9}$/.test(cleaned);
            }

            // Show error
            function showError(input, message) {
                const formGroup = input.closest('.form-group');
                formGroup.classList.add('error');
                const errorElement = formGroup.querySelector('.form-error');
                if (message) errorElement.textContent = message;
            }

            // Clear error
            function clearError(input) {
                const formGroup = input.closest('.form-group');
                formGroup.classList.remove('error');
            }

            // Validate input
            function validateInput(input) {
                clearError(input);

                if (input.hasAttribute('required') && !input.value.trim()) {
                    showError(input);
                    return false;
                }

                if (input.type === 'tel' && input.value.trim()) {
                    if (!validatePhone(input.value)) {
                        showError(input, 'لطفاً شماره تماس معتبر وارد کنید (۰۹۱۲۳۴۵۶۷۸۹)');
                        return false;
                    }
                }

                if (input.tagName === 'SELECT' && input.hasAttribute('required') && !input.value) {
                    showError(input);
                    return false;
                }

                return true;
                
            }

            // Real-time validation
            form.querySelectorAll('input, select, textarea').forEach(input => {
                input.addEventListener('blur', () => validateInput(input));
                input.addEventListener('input', () => {
                    if (input.closest('.form-group').classList.contains('error')) {
                        validateInput(input);
                    }
                });
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Validate all required fields
                const inputs = form.querySelectorAll('input[required], select[required]');
                let isValid = true;

                inputs.forEach(input => {
                    if (!validateInput(input)) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    // Focus on first error
                    const firstError = form.querySelector('.form-group.error input, .form-group.error select');
                    if (firstError) firstError.focus();
                    return;
                }

                // Here you would normally send data to backend
                // For now, just show success message
                successMessage.classList.add('show');
                form.reset();

                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });

                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 5000);

                // PLACEHOLDER: در نسخه نهایی به Laravel متصل می‌شود
                console.log('Form submitted successfully (demo mode)');
            });
        })();

        // ==================== Header Shadow on Scroll ====================
        (function() {
            const header = document.querySelector('.header');
            let lastScroll = 0;

            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;

                if (currentScroll > 100) {
                    header.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.08)';
                } else {
                    header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.06), 0 2px 4px -2px rgba(0, 0, 0, 0.06)';
                }

                lastScroll = currentScroll;
            });
        })();
