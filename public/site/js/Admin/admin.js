
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('adminSidebar');
    const menuToggle = document.getElementById('adminMenuToggle');

    if (!sidebar || !menuToggle) return;

    function openSidebar() {
        sidebar.classList.add('is-open');
        document.body.classList.add('admin-sidebar-open');
        menuToggle.setAttribute('aria-expanded', 'true');
        menuToggle.setAttribute('aria-label', 'بستن منو');
    }

    function closeSidebar() {
        sidebar.classList.remove('is-open');
        document.body.classList.remove('admin-sidebar-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'باز کردن منو');
    }

    menuToggle.addEventListener('click', function () {
        const isOpen = sidebar.classList.contains('is-open');

        if (isOpen) {
            closeSidebar();
        } else {
            openSidebar();
        }
    });

    // بستن با کلیک روی فضای بیرون Sidebar
    document.addEventListener('click', function (event) {
        if (
            document.body.classList.contains('admin-sidebar-open') &&
            !sidebar.contains(event.target) &&
            !menuToggle.contains(event.target)
        ) {
            closeSidebar();
        }
    });

    // بستن با کلید Escape
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeSidebar();
        }
    });

    // بستن منو بعد از انتخاب لینک در موبایل
    sidebar.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            if (window.innerWidth <= 768) {
                closeSidebar();
            }
        });
    });

    // اگر صفحه از موبایل به دسکتاپ تغییر اندازه داد
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) {
            closeSidebar();
        }
    });



});


document.addEventListener('DOMContentLoaded', function () {
    const menus = document.querySelectorAll('.admin-project-index-menu');

    menus.forEach(function (details) {
        const summary = details.querySelector('summary');
        const content = details.querySelector('.admin-project-index-menu-content');

        if (!summary || !content) return;

        let placeholder = null;

        function positionMenu() {
            if (!content.classList.contains('is-floating')) return;

            const rect = summary.getBoundingClientRect();
            const menuHeight = content.offsetHeight;
            const menuWidth = content.offsetWidth;
            const gap = 7;
            const padding = 10;

            let left = rect.left + (rect.width - menuWidth) / 2;
            left = Math.max(
                padding,
                Math.min(left, window.innerWidth - menuWidth - padding)
            );

            let top = rect.bottom + gap;

            if (top + menuHeight > window.innerHeight - padding) {
                top = rect.top - menuHeight - gap;
            }

            top = Math.max(
                padding,
                Math.min(top, window.innerHeight - menuHeight - padding)
            );

            content.style.left = left + 'px';
            content.style.top = top + 'px';
        }

        function moveMenuToBody() {
            if (placeholder) return;

            placeholder = document.createComment('menu-placeholder');
            content.parentNode.insertBefore(placeholder, content);

            document.body.appendChild(content);
            content.classList.add('is-floating');

            positionMenu();
        }

        function restoreMenu() {
            if (!placeholder) return;

            placeholder.parentNode.insertBefore(content, placeholder);
            placeholder.remove();
            placeholder = null;

            content.classList.remove('is-floating');
            content.style.left = '';
            content.style.top = '';
        }

        details.addEventListener('toggle', function () {
            if (details.open && window.innerWidth <= 768) {
                moveMenuToBody();
            } else {
                restoreMenu();
            }
        });

        window.addEventListener('resize', function () {
            if (details.open && window.innerWidth <= 768) {
                positionMenu();
            } else if (window.innerWidth > 768) {
                restoreMenu();
            }
        });

        window.addEventListener('scroll', positionMenu, true);

        document.addEventListener('click', function (event) {
            if (
                details.open &&
                !details.contains(event.target) &&
                !content.contains(event.target)
            ) {
                details.open = false;
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && details.open) {
                details.open = false;
            }
        });
    });
});



document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('messageTypesChart');

    if (!canvas) return;

    if (typeof Chart === 'undefined') {
        console.error('Chart.js is not loaded.');
        return;
    }

    const labels = JSON.parse(canvas.dataset.labels);
    const values = JSON.parse(canvas.dataset.values);

    // محاسبه مجموع پیام‌ها
    const totalMessages = values.reduce(
        (sum, value) => sum + Number(value),
        0
    );

    // مدیریت حالت خالی
    const emptyState = document.getElementById('messageTypesEmpty');

    if (totalMessages === 0) {
        canvas.style.display = 'none';

        if (emptyState) {
            emptyState.hidden = false;
        }

        return;
    }

    // فارسی‌سازی عنوان‌ها
    const typeTranslations = {
        general: 'عمومی',
        consultation: 'مشاوره',
        cooperation: 'همکاری',
        project: 'پروژه'
    };

    const translatedLabels = labels.map(label => {
        return typeTranslations[label] || label;
    });

    // متن وسط نمودار
    const centerTextPlugin = {
        id: 'centerText',

        afterDraw(chart) {
            const { ctx, chartArea } = chart;

            if (!chartArea) return;

            const centerX = (chartArea.left + chartArea.right) / 2;
            const centerY = (chartArea.top + chartArea.bottom) / 2;

            ctx.save();

            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';

            ctx.font = 'bold 26px sans-serif';
            ctx.fillStyle = '#1f2937';
            ctx.fillText(totalMessages, centerX, centerY - 10);

            ctx.font = '13px sans-serif';
            ctx.fillStyle = '#9ca3af';
            ctx.fillText('کل پیام‌ها', centerX, centerY + 17);

            ctx.restore();
        }
    };

    // ساخت نمودار
    new Chart(canvas, {
        type: 'doughnut',

        data: {
            labels: translatedLabels,

            datasets: [{
                data: values,

                backgroundColor: [
                    '#6366f1',
                    '#10b981',
                    '#f59e0b',
                    '#ec4899',
                    '#06b6d4'
                ],

                borderColor: '#ffffff',
                borderWidth: 4,
                borderRadius: 8,
                spacing: 3,
                hoverOffset: 10,
                cutout: '72%'
            }]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            animation: {
                animateRotate: true,
                animateScale: true,
                duration: 1200,
                easing: 'easeOutQuart'
            },

            plugins: {

                legend: {
                    position: 'bottom',

                    labels: {
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 20,

                        generateLabels: function (chart) {
                            const data = chart.data;

                            if (!data.labels.length) {
                                return [];
                            }

                            return data.labels.map((label, index) => {
                                const value = data.datasets[0].data[index];

                                return {
                                    text: `${label} (${value})`,
                                    fillStyle: data.datasets[0].backgroundColor[index],
                                    strokeStyle: data.datasets[0].backgroundColor[index],
                                    lineWidth: 0,
                                    hidden: false,
                                    index: index,
                                    pointStyle: 'circle'
                                };
                            });
                        }
                    }
                },


                tooltip: {
                    callbacks: {
                        label: function (context) {
                            const value = Number(context.raw);

                            const percentage = totalMessages > 0
                                ? ((value / totalMessages) * 100).toFixed(1)
                                : 0;

                            return ` ${context.label}: ${value} پیام (${percentage}٪)`;
                        }
                    }
                }
            }
        },

        plugins: [centerTextPlugin]
    });
});



document.addEventListener('DOMContentLoaded', function () {

    const canvas = document.getElementById('dailyVisitsChart');

    if (!canvas) return;

    if (typeof Chart === 'undefined') {
        console.error('Chart.js is not loaded.');
        return;
    }

    const labels = JSON.parse(canvas.dataset.labels);
    const values = JSON.parse(canvas.dataset.values);

    const totalVisits = values.reduce(
        (sum, value) => sum + Number(value),
        0
    );

    const emptyState = document.getElementById('dailyVisitsEmpty');

    if (totalVisits === 0) {
        canvas.style.display = 'none';

        if (emptyState) {
            emptyState.hidden = false;
        }

        return;
    }

    new Chart(canvas, {

        type: 'line',

        data: {
            labels: labels,

            datasets: [{
                label: 'بازدید روزانه',

                data: values,

                borderColor: '#6366f1',
                backgroundColor: 'rgba(99, 102, 241, 0.12)',

                borderWidth: 3,

                fill: true,

                tension: 0.4,

                pointRadius: 4,
                pointHoverRadius: 7,

                pointBackgroundColor: '#6366f1',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2
            }]
        },

        options: {

            responsive: true,
            maintainAspectRatio: false,

            interaction: {
                intersect: false,
                mode: 'index'
            },

            animation: {
                duration: 1200,
                easing: 'easeOutQuart'
            },

            plugins: {

                legend: {
                    display: false
                },

              tooltip: {
    callbacks: {
        title: function (items) {
            return items[0].label;
        },

        label: function (context) {
            return ` ${context.parsed.y} بازدید`;
        }
    }
}
            },

            scales: {

                x: {
                    grid: {
                        display: false
                    }
                },

                y: {
                    beginAtZero: true,

                    ticks: {
                        precision: 0
                    },

                    grid: {
                        color: 'rgba(148, 163, 184, 0.15)'
                    }
                }
            }
        }
    });

});
