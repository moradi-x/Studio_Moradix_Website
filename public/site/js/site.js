'use strict';

document.addEventListener('DOMContentLoaded', function () {

    // =========================================
    // 1. MOBILE MENU
    // =========================================

    (function () {
        const menuToggle = document.querySelector('.menu-toggle');
        const mobileNav = document.querySelector('.nav-mobile');

        if (!menuToggle || !mobileNav) return;

        function closeMenu() {
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'باز کردن منو');

            mobileNav.classList.remove('is-open');

            // بستن تمام زیرمنوها
            mobileNav.querySelectorAll('.submenu-toggle').forEach(button => {
                button.setAttribute('aria-expanded', 'false');
            });

            mobileNav.querySelectorAll('.submenu').forEach(submenu => {
                submenu.classList.remove('is-open');
            });
        }

        // باز و بسته کردن منوی همبرگری
        menuToggle.addEventListener('click', function () {
            const isOpen = this.getAttribute('aria-expanded') === 'true';

            this.setAttribute('aria-expanded', String(!isOpen));
            this.setAttribute(
                'aria-label',
                isOpen ? 'باز کردن منو' : 'بستن منو'
            );

            mobileNav.classList.toggle('is-open', !isOpen);
        });

        // باز و بسته کردن زیرمنوی خدمات
        mobileNav.addEventListener('click', function (event) {
            const button = event.target.closest('.submenu-toggle');

            if (!button) return;

            const submenuId = button.getAttribute('aria-controls');
            let submenu = submenuId
                ? document.getElementById(submenuId)
                : null;

            // پشتیبانی از ساختارهای بدون aria-controls
            if (!submenu) {
                const item = button.closest('.has-dropdown');
                submenu = item ? item.querySelector('.submenu, .dropdown') : null;
            }

            if (!submenu) return;

            const isOpen = button.getAttribute('aria-expanded') === 'true';

            button.setAttribute('aria-expanded', String(!isOpen));
            submenu.classList.toggle('is-open', !isOpen);
        });

        // بستن منو پس از انتخاب لینک
        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // بستن منو با کلیک بیرون از آن
        document.addEventListener('click', function (event) {
            if (
                !mobileNav.contains(event.target) &&
                !menuToggle.contains(event.target)
            ) {
                closeMenu();
            }
        });

        // بستن منو با Escape
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeMenu();
            }
        });

    })();


    // =========================================
    // 2. DESKTOP SUBMENU
    // =========================================

    (function () {
        const navDesktop = document.querySelector('.nav-desktop');

        if (!navDesktop) return;

        navDesktop.addEventListener('click', function (event) {
            const button = event.target.closest('.submenu-toggle');

            if (!button || !navDesktop.contains(button)) return;

            event.preventDefault();

            const item = button.closest('.has-dropdown');
            if (!item) return;

            const isOpen = item.classList.toggle('submenu-open');

            button.setAttribute('aria-expanded', String(isOpen));
        });

        // بستن زیرمنو با کلیک بیرون
        document.addEventListener('click', function (event) {
            if (navDesktop.contains(event.target)) return;

            navDesktop.querySelectorAll('.has-dropdown.submenu-open').forEach(item => {
                item.classList.remove('submenu-open');

                const button = item.querySelector('.submenu-toggle');

                if (button) {
                    button.setAttribute('aria-expanded', 'false');
                }
            });
        });

        // بستن زیرمنو با Escape
        document.addEventListener('keydown', function (event) {
            if (event.key !== 'Escape') return;

            navDesktop.querySelectorAll('.has-dropdown.submenu-open').forEach(item => {
                item.classList.remove('submenu-open');

                const button = item.querySelector('.submenu-toggle');

                if (button) {
                    button.setAttribute('aria-expanded', 'false');
                }
            });
        });

    })();


    // =========================================
    // 3. FAQ ACCORDION - OLD FAQ STRUCTURE
    // =========================================

    (function () {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            if (!question || !answer) return;

            question.addEventListener('click', function () {
                const isActive = item.classList.contains('active');

                // بستن سایر سوال‌ها
                faqItems.forEach(otherItem => {
                    if (otherItem === item) return;

                    otherItem.classList.remove('active');

                    const otherQuestion = otherItem.querySelector('.faq-question');
                    const otherAnswer = otherItem.querySelector('.faq-answer');

                    if (otherQuestion) {
                        otherQuestion.setAttribute('aria-expanded', 'false');
                    }

                    if (otherAnswer) {
                        otherAnswer.style.maxHeight = '0px';
                    }
                });

                // باز و بسته کردن سوال فعلی
                if (isActive) {
                    item.classList.remove('active');
                    question.setAttribute('aria-expanded', 'false');
                    answer.style.maxHeight = '0px';
                } else {
                    item.classList.add('active');
                    question.setAttribute('aria-expanded', 'true');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });

    })();


    // =========================================
    // 4. FAQ ACCORDION - PR FAQ STRUCTURE
    // =========================================

    (function () {
        const questions = document.querySelectorAll('.pr-faq-question');

        questions.forEach(button => {
            button.addEventListener('click', function () {
                const item = button.closest('.pr-faq-item');

                if (!item) return;

                const answer = item.querySelector('.pr-faq-answer');

                if (!answer) return;

                // جلوگیری از اجرای آکاردئون روی CTA
                if (button.closest('#contact')) return;

                const isOpen = button.getAttribute('aria-expanded') === 'true';

                button.setAttribute('aria-expanded', String(!isOpen));
                item.classList.toggle('active', !isOpen);

                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = '0px';
                }
            });
        });

        // تنظیم ارتفاع سوال‌هایی که از ابتدا باز هستند
        questions.forEach(button => {
            if (button.getAttribute('aria-expanded') !== 'true') return;

            const item = button.closest('.pr-faq-item');
            const answer = item ? item.querySelector('.pr-faq-answer') : null;

            if (answer) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });

        // تنظیم مجدد ارتفاع سوال باز هنگام تغییر اندازه صفحه
        window.addEventListener('resize', function () {
            questions.forEach(button => {
                if (button.getAttribute('aria-expanded') !== 'true') return;

                const item = button.closest('.pr-faq-item');
                const answer = item ? item.querySelector('.pr-faq-answer') : null;

                if (answer) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });

    })();


    // =========================================
    // 5. SMOOTH SCROLL
    // =========================================

    (function () {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (event) {
                const href = this.getAttribute('href');

                if (!href || href === '#') return;

                const target = document.querySelector(href);

                if (!target) return;

                event.preventDefault();

                const header = document.querySelector('.header');
                const headerHeight = header ? header.offsetHeight : 0;

                const targetPosition =
                    target.getBoundingClientRect().top +
                    window.pageYOffset -
                    headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });

    })();


    // =========================================
    // 6. FORM VALIDATION - DEMO FORM ONLY
    // =========================================

    (function () {
        const form = document.getElementById('contact-form');
        const successMessage = document.getElementById('form-success');

        // اگر فرم آزمایشی وجود نداشت، این بخش اجرا نمی‌شود
        if (!form || !successMessage) return;

        function convertToEnglishNumbers(value) {
            const persianDigits = '۰۱۲۳۴۵۶۷۸۹';
            const arabicDigits = '٠١٢٣٤٥٦٧٨٩';

            return value.replace(/[۰-۹٠-٩]/g, digit => {
                const persianIndex = persianDigits.indexOf(digit);

                if (persianIndex !== -1) return String(persianIndex);

                return String(arabicDigits.indexOf(digit));
            });
        }

        function validatePhone(phone) {
            const cleaned = convertToEnglishNumbers(phone)
                .replace(/\s/g, '')
                .replace(/-/g, '');

            return /^09\d{9}$/.test(cleaned);
        }

        function showError(input, message) {
            const formGroup = input.closest('.form-group');

            if (!formGroup) return;

            formGroup.classList.add('error');

            const errorElement = formGroup.querySelector('.form-error');

            if (errorElement && message) {
                errorElement.textContent = message;
            }
        }

        function clearError(input) {
            const formGroup = input.closest('.form-group');

            if (formGroup) {
                formGroup.classList.remove('error');
            }
        }

        function validateInput(input) {
            clearError(input);

            if (input.hasAttribute('required') && !input.value.trim()) {
                showError(input, 'تکمیل این فیلد الزامی است.');
                return false;
            }

            if (input.type === 'tel' && input.value.trim()) {
                if (!validatePhone(input.value)) {
                    showError(
                        input,
                        'لطفاً شماره تماس معتبر وارد کنید.'
                    );

                    return false;
                }
            }

            if (
                input.tagName === 'SELECT' &&
                input.hasAttribute('required') &&
                !input.value
            ) {
                showError(input, 'لطفاً یک گزینه انتخاب کنید.');
                return false;
            }

            return true;
        }

        form.querySelectorAll('input, select, textarea').forEach(input => {
            input.addEventListener('blur', function () {
                validateInput(input);
            });

            input.addEventListener('input', function () {
                const group = input.closest('.form-group');

                if (group && group.classList.contains('error')) {
                    validateInput(input);
                }
            });
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const inputs = form.querySelectorAll(
                'input[required], select[required], textarea[required]'
            );

            let isValid = true;

            inputs.forEach(input => {
                if (!validateInput(input)) {
                    isValid = false;
                }
            });

            if (!isValid) {
                const firstError = form.querySelector(
                    '.form-group.error input, .form-group.error select, .form-group.error textarea'
                );

                if (firstError) firstError.focus();

                return;
            }

            // حالت آزمایشی؛ ارسال واقعی به سرور انجام نمی‌شود
            successMessage.classList.add('show');
            form.reset();

            successMessage.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });

            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);

            console.log('Form submitted successfully (demo mode)');
        });

    })();


    // =========================================
    // 7. HEADER SHADOW ON SCROLL
    // =========================================

    (function () {
        const header = document.querySelector('.header');

        if (!header) return;

        function updateHeaderShadow() {
            if (window.pageYOffset > 100) {
                header.style.boxShadow =
                    '0 4px 12px rgba(0, 0, 0, 0.08)';
            } else {
                header.style.boxShadow =
                    '0 4px 6px -1px rgba(0, 0, 0, 0.06), 0 2px 4px -2px rgba(0, 0, 0, 0.06)';
            }
        }

        window.addEventListener('scroll', updateHeaderShadow, {
            passive: true
        });

        updateHeaderShadow();

    })();


    // =========================================
    // 8. HOME HERO ANIMATION
    // =========================================

    (function () {
        const hv = document.querySelector('.hv');

        if (!hv) return;

        let visible = true;

        function sync() {
            hv.classList.toggle(
                'hv-paused',
                !visible || document.hidden
            );
        }

        if ('IntersectionObserver' in window) {
            new IntersectionObserver(function (entries) {
                visible = entries[0].isIntersecting;
                sync();
            }, {
                threshold: 0.1
            }).observe(hv);
        }

        document.addEventListener('visibilitychange', sync);

        // فقط برای دستگاه‌های دارای ماوس
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }

        if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
            return;
        }

        let raf = 0;
        let nx = 0;
        let ny = 0;

        function apply() {
            raf = 0;

            hv.style.setProperty('--px', nx.toFixed(3));
            hv.style.setProperty('--py', ny.toFixed(3));
            hv.style.setProperty('--look', nx.toFixed(3));
        }

        window.addEventListener('pointermove', function (event) {
            if (!visible) return;

            nx = (event.clientX / window.innerWidth - 0.5) * 2;
            ny = (event.clientY / window.innerHeight - 0.5) * 2;

            if (!raf) {
                raf = requestAnimationFrame(apply);
            }
        }, {
            passive: true
        });
    })();

    
    

});
