
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
