
<header class="admin-topbar">

    {{-- Right: Menu + Page Title --}}
    <div class="admin-topbar-right">

        <button
            type="button"
            class="admin-menu-toggle"
            id="adminMenuToggle"
            aria-label="باز کردن منو"
            aria-controls="adminSidebar"
            aria-expanded="false"
        >
            <svg viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2"
                 stroke-linecap="round">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <h2 class="admin-topbar-title">
            داشبورد ادمین
        </h2>

    </div>

    {{-- Center: Search --}}
    <div class="admin-topbar-search">
        <input
            type="search"
            placeholder="جست‌وجو..."
            aria-label="جست‌وجو"
        >
    </div>

    {{-- Left: Notification --}}
    <div class="admin-topbar-left">

        <button
            type="button"
            class="admin-notification-button"
            aria-label="اعلان‌ها"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.8"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/>
                <path d="M10 21h4"/>
            </svg>

            <span class="admin-notification-dot"></span>
        </button>

    </div>

</header>
