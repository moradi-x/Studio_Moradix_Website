<aside class="w-52 bg-white border-r h-screen flex flex-col">

    <!-- Logo -->
    <div class="px-5 py-4 border-b">
        <h1 class="text-xl font-bold text-gray-800">
            Moradix
        </h1>
    </div>

    <!-- Menu -->
    <nav class="px-3 py-4 space-y-1">

        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
            class="block px-4 py-2.5 rounded-lg transition
                  {{ request()->routeIs('admin.dashboard')
                      ? 'bg-green-100 text-green-700'
                      : 'text-gray-700 hover:bg-green-100 hover:text-green-700' }}">
            داشبرد
        </a>

        <!-- Categories -->
        <a href="{{ route('admin.categories.index') }}"
            class="block px-4 py-2.5 rounded-lg transition
                  {{ request()->routeIs('admin.categories.*')
                      ? 'bg-green-100 text-green-700'
                      : 'text-gray-700 hover:bg-green-100 hover:text-green-700' }}">
            دسته بندی ها
        </a>

        <!-- Technologies -->
        <a href="{{ route('admin.technologies.index') }}"
            class="block px-4 py-2.5 rounded-lg transition
                  {{ request()->routeIs('admin.technologies.*')
                      ? 'bg-green-100 text-green-700'
                      : 'text-gray-700 hover:bg-green-100 hover:text-green-700' }}">
            تکنولوژی ها
        </a>

        <!-- Projects -->
        <a href="{{ route('admin.projects.index') }}"
            class="block px-4 py-2.5 rounded-lg transition
                  {{ request()->routeIs('admin.projects.*')
                      ? 'bg-green-100 text-green-700'
                      : 'text-gray-700 hover:bg-green-100 hover:text-green-700' }}">
            پروژه ها 
        </a>

        <!-- Services -->
        <a href="{{ route('admin.services.index') }}"
            class="block px-4 py-2.5 rounded-lg transition
                  {{ request()->routeIs('admin.services.*')
                      ? 'bg-green-100 text-green-700'
                      : 'text-gray-700 hover:bg-green-100 hover:text-green-700' }}">
            سرویس
        </a>

        <!-- Requests -->

        <a href="{{ route('admin.project-requests.index') }}"
            class="block px-4 py-2.5 rounded-lg transition
        {{ request()->routeIs('admin.project-requests.*')
            ? 'bg-green-100 text-green-700'
            : 'text-gray-700 hover:bg-green-100 hover:text-green-700' }}">
            درخواست ها
        </a>

        <!-- Settings -->
        <a href="{{ route('admin.settings.index') }}"
            class="block px-4 py-2.5 rounded-lg transition
                  {{ request()->routeIs('admin.settings.*')
                      ? 'bg-green-100 text-green-700'
                      : 'text-gray-700 hover:bg-green-100 hover:text-green-700' }}">
            تنظیمات
        </a>

        <div class="p-2">
            <hr>
        </div>

        <!-- Logout -->
        <form method="POST" action="#">
            @csrf

            <button type="submit"
                class="block w-full text-left px-4 py-2.5 rounded-lg
                           text-red-600
                           hover:bg-red-100 hover:text-red-700
                           transition">
                خروج
            </button>
        </form>

    </nav>

</aside>
