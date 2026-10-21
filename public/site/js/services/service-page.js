document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.sv-faq-item');

    faqItems.forEach((item) => {
        const question = item.querySelector('.sv-faq-question');
        const answer = item.querySelector('.sv-faq-answer');

        if (!question || !answer) return;

        question.addEventListener('click', () => {
            const isOpen = question.getAttribute('aria-expanded') === 'true';

            question.setAttribute('aria-expanded', String(!isOpen));
            item.classList.toggle('is-open', !isOpen);
        });
    });
});