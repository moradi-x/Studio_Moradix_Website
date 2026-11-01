  <!-- ==================== Header ==================== -->
  <header class="header" role="banner">
      <div class="container">
          <div class="header-content">

              <a href="{{ route('home') }}" class="logo" aria-label="Studio Moradix - صفحه اصلی">
                  <img src="{{ asset('site/images/logo.png') }}" alt="Studio Moradix" class="logo-image">
              </a>


              <!-- Desktop Navigation -->
              <nav class="nav-desktop" aria-label="منوی اصلی">
                  <ul class="nav-links">

                      <li class="has-dropdown">

                          <div class="nav-service-row">
                              <a href="{{ route('services') }}" @class([
                                  'is-active' => request()->routeIs(
                                      'services',
                                      'services.web-design',
                                      'services.ecommerce',
                                      'services.redesign',
                                      'services.custom-systems',
                                      'services.seo'),
                              ])
                                  @if (request()->routeIs(
                                          'services',
                                          'services.web-design',
                                          'services.ecommerce',
                                          'services.redesign',
                                          'services.custom-systems',
                                          'services.seo')) aria-current="page" @endif>
                                  خدمات
                              </a>
                              <button type="button" class="submenu-toggle" aria-label="نمایش زیرمنوی خدمات"
                                  aria-expanded="false" aria-controls="mobile-services-submenu">
                                  <span class="submenu-arrow" aria-hidden="true"></span>
                              </button>
                          </div>


                          <ul class="dropdown">
                              <li>
                                  <a href="{{ route('services.web-design') }}" @class(['is-active' => request()->routeIs('services.web-design')])
                                      @if (request()->routeIs('services.web-design')) aria-current="page" @endif>طراحی وب‌سایت</a>
                              </li>
                              <li>
                                  <a href="{{ route('services.ecommerce') }}" @class(['is-active' => request()->routeIs('services.ecommerce')])
                                      @if (request()->routeIs('services.ecommerce')) aria-current="page" @endif>طراحی فروشگاه
                                      اینترنتی</a>
                              </li>

                              <li>
                                  <a href="{{ route('services.redesign') }}" @class(['is-active' => request()->routeIs('services.redesign')])
                                      @if (request()->routeIs('services.redesign')) aria-current="page" @endif>بازطراحی و ارتقای
                                      سایت</a>
                              </li>
                              <li>
                                  <a href="{{ route('services.custom-systems') }}" @class(['is-active' => request()->routeIs('services.custom-systems')])
                                      @if (request()->routeIs('services.custom-systems')) aria-current="page" @endif>سیستم‌های اختصاصی</a>
                              </li>
                              <li><a href="{{ route('services.seo') }} " @class(['is-active' => request()->routeIs('services.seo')])
                                      @if (request()->routeIs('services.seo')) aria-current="page" @endif>سئو</a></li>
                          </ul>
                      </li>

                      <li>


                          <a href="{{ route('portfolio') }}" @class([
                              'is-active' => request()->routeIs('portfolio', 'portfolio.show'),
                          ])
                              @if (request()->routeIs('portfolio', 'portfolio.show')) aria-current="page" @endif>
                              <span class="nav-icon">▦</span>
                              نمونه‌کارها
                          </a>



                      </li>
                      <li>
                          <a href="{{ route('pricing') }}" @class(['is-active' => request()->routeIs('pricing')])
                              @if (request()->routeIs('pricing')) aria-current="page" @endif>
                              <span class="nav-icon">◇</span>
                              تعرفه‌ها و پلن‌ها
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])
                              @if (request()->routeIs('about')) aria-current="page" @endif>
                              <span class="nav-icon">◎</span>
                              درباره ما
                          </a>
                      </li>


                      <li>
                          <a href="{{ route('contact') }}" @class(['is-active' => request()->routeIs('contact')])
                              @if (request()->routeIs('contact')) aria-current="page" @endif>
                              <span class="nav-icon">☎</span>
                              تماس با ما
                          </a>
                      </li>

                  </ul>
                  <div class="header-actions">
                      <a href="https://t.me/studio_moradix" class="header-telegram" target="_blank"
                          rel="noopener noreferrer" aria-label="تلگرام ما">

                          <svg viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor"
                                  d="M21.8 3.2 18.5 20c-.25 1.2-.9 1.5-1.8 1l-5-3.7-2.4 2.3c-.3.3-.6.6-1.2.6l.4-5.1 9.3-8.4c.4-.4-.1-.6-.6-.2L5.7 13.8.8 12.3c-1.1-.3-1.1-1.1.2-1.6L20 3.2c.9-.3 1.6.2 1.8 0z" />
                          </svg>

                          <span>تلگرام ما</span>
                      </a>

                      <a href="{{ route('contact') }}" class="btn btn-primary btn-header">
                          ثبت درخواست پروژه
                      </a>
                  </div>
              </nav>

              <!-- Mobile Menu Toggle -->
              <button class="menu-toggle" aria-expanded="false" aria-controls="nav-mobile" aria-label="باز کردن منو">
                  <span></span>
                  <span></span>
                  <span></span>
              </button>
          </div>
      </div>

      <!-- Mobile Navigation -->
      <nav class="nav-mobile" id="nav-mobile" aria-label="منوی موبایل">
          <ul class="nav-links">



              <li class="has-dropdown">
                  <div class="nav-service-row">

                      <a href="{{ route('services') }}">
                          خدمات
                      </a>

                      <button type="button" class="submenu-toggle" aria-expanded="false"
                          aria-controls="mobile-services-submenu" aria-label="نمایش زیرمنوی خدمات">

                          <span class="submenu-arrow" aria-hidden="true"></span>
                      </button>

                  </div>

                  <ul class="submenu" id="mobile-services-submenu">
                      <li><a href="{{ route('services.web-design') }}">طراحی وب‌سایت</a></li>
                      <li><a href="{{ route('services.ecommerce') }}">طراحی فروشگاه اینترنتی</a></li>
                      <li><a href="{{ route('services.redesign') }}">بازطراحی و ارتقای سایت</a></li>
                      <li><a href="{{ route('services.custom-systems') }}">سیستم‌های اختصاصی</a></li>
                      <li><a href="{{ route('services.seo') }}">سئو</a></li>
                  </ul>
              </li>


              <li>

                  <a href="{{ route('portfolio') }}" @class([
                      'is-active' => request()->routeIs('portfolio', 'portfolio.show'),
                  ])
                      @if (request()->routeIs('portfolio', 'portfolio.show')) aria-current="page" @endif>
                      نمونه‌کارها
                  </a>

              </li>

              <li>
                  <a href="{{ route('pricing') }}" @class(['is-active' => request()->routeIs('pricing')])>تعرفه ها و پلن ها</a>
              </li>

              <li>
                  <a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])>درباره ما</a>
              </li>

              <li>
                  <a href="{{ route('contact') }}" @class(['is-active' => request()->routeIs('contact')])> تماس با ما</a>
              </li>
          </ul>

          <a href="{{ route('contact') }}" class="btn btn-primary">ثبت درخواست پروژه</a>
      </nav>
  </header>
