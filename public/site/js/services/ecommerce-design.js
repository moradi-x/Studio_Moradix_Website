/* =========================================================
   Ecommerce Design Page
   File: public/js/services/ecommerce-design.js
   ========================================================= */

(() => {
    "use strict";

    function initEcommerceFAQ() {
        const faqItems = document.querySelectorAll(
            ".sv-ecommerce .sv-faq-item"
        );

        if (!faqItems.length) {
            return;
        }

        faqItems.forEach((item, index) => {
            const question = item.querySelector(".sv-faq-question");
            const answer = item.querySelector(".sv-faq-answer");

            if (!question || !answer) {
                return;
            }

            const answerId =
                answer.id || `ecommerce-faq-answer-${index + 1}`;

            answer.id = answerId;

            question.setAttribute("aria-controls", answerId);
            question.setAttribute("aria-expanded", "false");

            answer.setAttribute("role", "region");
            answer.setAttribute(
                "aria-labelledby",
                question.id || `ecommerce-faq-question-${index + 1}`
            );

            if (!question.id) {
                question.id = `ecommerce-faq-question-${index + 1}`;
            }

            question.addEventListener("click", () => {
                const isOpen = item.classList.contains("is-open");

                // بستن سایر سؤال‌ها
                faqItems.forEach((otherItem) => {
                    const otherQuestion = otherItem.querySelector(
                        ".sv-faq-question"
                    );

                    otherItem.classList.remove("is-open");

                    if (otherQuestion) {
                        otherQuestion.setAttribute(
                            "aria-expanded",
                            "false"
                        );
                    }
                });

                // باز کردن سؤال انتخاب‌شده
                if (!isOpen) {
                    item.classList.add("is-open");
                    question.setAttribute("aria-expanded", "true");
                }
            });
        });
    }

    function initEcommercePage() {
        initEcommerceFAQ();
    }

    if (document.readyState === "loading") {
        document.addEventListener(
            "DOMContentLoaded",
            initEcommercePage,
            { once: true }
        );
    } else {
        initEcommercePage();
    }
})();