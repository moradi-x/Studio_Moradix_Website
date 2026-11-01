<aside class="admin-sidebar" id="adminSidebar">

    {{-- Logo --}}
    <div class="admin-sidebar-header">
        <h1 class="admin-sidebar-logo">Studio Moradix</h1>
    </div>

    {{-- Menu --}}
    <nav class="admin-sidebar-nav">

        {{-- Dashboard --}}
        <a href="{{ route('admin.dashboard') }}"
            class="admin-menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <span>داشبورد</span>
        </a>

        {{-- Categories --}}
        <a href="{{ route('admin.categories.index') }}"
            class="admin-menu-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            <span>دسته‌بندی‌ها</span>
        </a>

        {{-- Projects --}}
        <a href="{{ route('admin.projects.index') }}"
            class="admin-menu-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
            <span>پروژه‌ها</span>
        </a>

        {{-- Plan Prices --}}
        <a href="{{ route('admin.plan-prices.index') }}"
            class="admin-menu-link {{ request()->routeIs('admin.plan-prices.*') ? 'active' : '' }}">
            <span>قیمت پلن‌ها</span>
        </a>

        {{-- Contact Messages --}}
        <a href="{{ route('admin.contact-messages.index') }}"
            class="admin-menu-link {{ request()->routeIs('admin.contact-messages.*') ? 'active' : '' }}">
            <span>پیام‌ها</span>
        </a>

        {{-- Settings --}}
        <a href="{{ route('admin.settings.index') }}"
            class="admin-menu-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
            <span>تنظیمات</span>
        </a>

        <div class="admin-sidebar-divider"></div>

        {{-- Logout --}}
        <form method="POST" action="{{ route('admin.logout') }}" class="admin-logout-form">
            @csrf

            <button type="submit" class="admin-logout-button">
                خروج
            </button>
        </form>

    </nav>

</aside>
