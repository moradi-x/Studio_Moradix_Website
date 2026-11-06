
@php
    $routePrefix = app()->getLocale() === 'en' ? 'en.' : '';

    $currentRouteName = request()->route()?->getName() ?? 'home';

    $baseRouteName = str_starts_with($currentRouteName, 'en.')
        ? substr($currentRouteName, 3)
        : $currentRouteName;

    $targetRouteName = app()->getLocale() === 'en'
        ? $baseRouteName
        : 'en.' . $baseRouteName;

    $routeParameters = request()->route()?->parameters() ?? [];

    $languageSwitchUrl = \Illuminate\Support\Facades\Route::has($targetRouteName)
        ? route($targetRouteName, $routeParameters)
        : route(app()->getLocale() === 'en' ? 'home' : 'en.home');
@endphp

<!-- ==================== Header ==================== -->
<header class="header" role="banner">
    <div class="container">
        <div class="header-content">

            <a href="{{ route($routePrefix . 'home') }}" class="logo"
                aria-label="Studio Moradix - {{ __('site.home') }}">
                <img src="{{ asset('site/images/logo.png') }}" alt="Studio Moradix" class="logo-image">
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav-desktop" aria-label="{{ __('site.home') }}">
                <ul class="nav-links">

                    <li class="has-dropdown">
                        <div class="nav-service-row">
                            <a href="{{ route($routePrefix . 'services') }}"
                                @class([
                                    'is-active' => request()->routeIs(
                                        $routePrefix . 'services',
                                        $routePrefix . 'services.web-design',
                                        $routePrefix . 'services.ecommerce',
                                        $routePrefix . 'services.redesign',
                                        $routePrefix . 'services.custom-systems',
                                        $routePrefix . 'services.seo'
                                    ),
                                ])
                                @if (request()->routeIs(
                                    $routePrefix . 'services',
                                    $routePrefix . 'services.web-design',
                                    $routePrefix . 'services.ecommerce',
                                    $routePrefix . 'services.redesign',
                                    $routePrefix . 'services.custom-systems',
                                    $routePrefix . 'services.seo'
                                )) aria-current="page" @endif>
                                {{ __('site.services') }}
                            </a>

                            <button type="button" class="submenu-toggle"
                                aria-label="{{ __('site.show_services') }}"
                                aria-expanded="false" aria-controls="mobile-services-submenu">
                                <span class="submenu-arrow" aria-hidden="true"></span>
                            </button>
                        </div>

                        <ul class="dropdown">
                            <li>
                                <a href="{{ route($routePrefix . 'services.web-design') }}"
                                    @class(['is-active' => request()->routeIs($routePrefix . 'services.web-design')])>
                                    {{ __('site.web_design') }}
                                </a>
                            </li>

                            <li>
                                <a href="{{ route($routePrefix . 'services.ecommerce') }}"
                                    @class(['is-active' => request()->routeIs($routePrefix . 'services.ecommerce')])>
                                    {{ __('site.ecommerce') }}
                                </a>
                            </li>

                            <li>
                                <a href="{{ route($routePrefix . 'services.redesign') }}"
                                    @class(['is-active' => request()->routeIs($routePrefix . 'services.redesign')])>
                                    {{ __('site.redesign') }}
                                </a>
                            </li>

                            <li>
                                <a href="{{ route($routePrefix . 'services.custom-systems') }}"
                                    @class(['is-active' => request()->routeIs($routePrefix . 'services.custom-systems')])>
                                    {{ __('site.custom_systems') }}
                                </a>
                            </li>

                            <li>
                                <a href="{{ route($routePrefix . 'services.seo') }}"
                                    @class(['is-active' => request()->routeIs($routePrefix . 'services.seo')])>
                                    {{ __('site.seo') }}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'portfolio') }}"
                            @class(['is-active' => request()->routeIs($routePrefix . 'portfolio', $routePrefix . 'portfolio.show')])
                            @if (request()->routeIs($routePrefix . 'portfolio', $routePrefix . 'portfolio.show')) aria-current="page" @endif>
                            <span class="nav-icon">▦</span>
                            {{ __('site.portfolio') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'pricing') }}"
                            @class(['is-active' => request()->routeIs($routePrefix . 'pricing')])>
                            <span class="nav-icon">◇</span>
                            {{ __('site.pricing_plans') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'about') }}"
                            @class(['is-active' => request()->routeIs($routePrefix . 'about')])>
                            <span class="nav-icon">◎</span>
                            {{ __('site.about') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'contact') }}"
                            @class(['is-active' => request()->routeIs($routePrefix . 'contact')])>
                            <span class="nav-icon">☎</span>
                            {{ __('site.contact') }}
                        </a>
                    </li>

                </ul>

                <div class="header-actions">

                    <a href="{{ $languageSwitchUrl }}" class="header-language">
                        {{ app()->getLocale() === 'fa' ? 'EN' : 'FA' }}
                    </a>

                    <a href="https://t.me/studio_moradix" class="header-telegram"
                        target="_blank" rel="noopener noreferrer"
                        aria-label="{{ __('site.our_telegram') }}">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="currentColor"
                                d="M21.8 3.2 18.5 20c-.25 1.2-.9 1.5-1.8 1l-5-3.7-2.4 2.3c-.3.3-.6.6-1.2.6l.4-5.1 9.3-8.4c.4-.4-.1-.6-.6-.2L5.7 13.8.8 12.3c-1.1-.3-1.1-1.1.2-1.6L20 3.2c.9-.3 1.6.2 1.8 0z" />
                        </svg>

                        <span>{{ __('site.our_telegram') }}</span>
                    </a>

                    <a href="{{ route($routePrefix . 'contact') }}" class="btn btn-primary btn-header">
                        {{ __('site.submit_project') }}
                    </a>
                </div>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" type="button"
                aria-expanded="false" aria-controls="nav-mobile"
                aria-label="{{ __('site.open_menu') }}">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="nav-mobile" id="nav-mobile" aria-label="{{ __('site.open_menu') }}">
        <ul class="nav-links">

            <li class="has-dropdown">
                <div class="nav-service-row">

                    <a href="{{ route($routePrefix . 'services') }}">
                        {{ __('site.services') }}
                    </a>

                    <button type="button" class="submenu-toggle"
                        aria-expanded="false"
                        aria-controls="mobile-services-submenu"
                        aria-label="{{ __('site.show_services') }}">
                        <span class="submenu-arrow" aria-hidden="true"></span>
                    </button>

                </div>

                <ul class="submenu" id="mobile-services-submenu">
                    <li>
                        <a href="{{ route($routePrefix . 'services.web-design') }}">
                            {{ __('site.web_design') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'services.ecommerce') }}">
                            {{ __('site.ecommerce') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'services.redesign') }}">
                            {{ __('site.redesign') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'services.custom-systems') }}">
                            {{ __('site.custom_systems') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'services.seo') }}">
                            {{ __('site.seo') }}
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route($routePrefix . 'portfolio') }}"
                    @class(['is-active' => request()->routeIs($routePrefix . 'portfolio', $routePrefix . 'portfolio.show')])>
                    {{ __('site.portfolio') }}
                </a>
            </li>

            <li>
                <a href="{{ route($routePrefix . 'pricing') }}"
                    @class(['is-active' => request()->routeIs($routePrefix . 'pricing')])>
                    {{ __('site.pricing_plans') }}
                </a>
            </li>

            <li>
                <a href="{{ route($routePrefix . 'about') }}"
                    @class(['is-active' => request()->routeIs($routePrefix . 'about')])>
                    {{ __('site.about') }}
                </a>
            </li>

            <li>
                <a href="{{ route($routePrefix . 'contact') }}"
                    @class(['is-active' => request()->routeIs($routePrefix . 'contact')])>
                    {{ __('site.contact') }}
                </a>
            </li>

            <li>
                <a href="{{ $languageSwitchUrl }}" class="header-language">
                    {{ app()->getLocale() === 'fa' ? 'English' : 'فارسی' }}
                </a>
            </li>

        </ul>

        <a href="{{ route($routePrefix . 'contact') }}" class="btn btn-primary">
            {{ __('site.submit_project') }}
        </a>
    </nav>
</header>
