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


/* هیروی طراحی وب‌سایت: توقف انیمیشن خارج از دید + پارالاکس ملایم (فقط دسکتاپ) */
(function () {
    'use strict';
    var art = document.querySelector('.wd-art');
    if (!art) return;

    // وقتی در دید نیست یا تب پنهان است، انیمیشن متوقف شود (صرفه‌جویی باتری)
    var visible = true;
    function sync() { art.classList.toggle('wd-paused', !visible || document.hidden); }

    if ('IntersectionObserver' in window) {
        new IntersectionObserver(function (entries) {
            visible = entries[0].isIntersecting;
            sync();
        }, { threshold: 0.1 }).observe(art);
    }
    document.addEventListener('visibilitychange', sync);

    // پارالاکس فقط با ماوس واقعی و بدون reduced-motion
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduce || !window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

    art.addEventListener('pointermove', function (e) {
        var r = art.getBoundingClientRect();
        var x = (e.clientX - r.left) / r.width - 0.5;   // -0.5 تا 0.5
        var y = (e.clientY - r.top) / r.height - 0.5;
        art.style.setProperty('--ry', (x * 6).toFixed(2) + 'deg');
        art.style.setProperty('--rx', (y * -5).toFixed(2) + 'deg');
        art.style.setProperty('--px', (x * 2).toFixed(2));
        art.style.setProperty('--py', (y * 2).toFixed(2));
    });
    art.addEventListener('pointerleave', function () {
        ['--rx', '--ry', '--px', '--py'].forEach(function (p) { art.style.setProperty(p, '0'); });
        art.style.setProperty('--rx', '0deg');
        art.style.setProperty('--ry', '0deg');
    });
})();