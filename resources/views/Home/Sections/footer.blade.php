@php
    $routePrefix = app()->getLocale() === 'en' ? 'en.' : '';
@endphp

<!-- ==================== Footer ==================== -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="footer-content">

            <!-- About -->
            <div class="footer-about">
                <div class="logo">Studio Moradix</div>
                <p>{{ __('site.footer_description') }}</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4>{{ __('site.quick_access') }}</h4>

                <ul class="footer-links">
                    <li>
                        <a href="{{ route($routePrefix . 'services') }}">
                            {{ __('site.services') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'portfolio') }}">
                            {{ __('site.portfolio') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'pricing') }}">
                            {{ __('site.pricing_plans') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'about') }}">
                            {{ __('site.about') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route($routePrefix . 'contact') }}">
                            {{ __('site.contact') }}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-section">
                <h4>{{ __('site.contact_us') }}</h4>

                <div class="footer-contact">

                    <div class="footer-contact-item">
                        <span>📞</span>
                        <span>{{ __('site.phone') }}: 09926245951 </span>
                    </div>

                    <div class="footer-contact-item">
                        <span>✉️</span>
                        <span>{{ __('site.email') }}: moraix.2004@gmail</span>
                    </div>

                    <div class="footer-contact-item">
                        <span>📍</span>
                        <span>
                            {{ __('site.address') }}: {{ __('site.footer_address') }}
                        </span>
                    </div>

                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <p>{{ __('site.all_rights_reserved') }} © 1405 Moradix Studio</p>
        </div>

    </div>
</footer>
