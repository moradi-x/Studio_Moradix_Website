
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
