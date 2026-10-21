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
                              <a href="{{ route('services') }}" @class(['is-active' => request()->routeIs('services*')])
                                  @if (request()->routeIs('services*')) aria-current="page" @endif>
                                  <span class="nav-icon">✦</span>
                                  خدمات
                              </a>

                              <button type="button" class="submenu-toggle" aria-label="نمایش زیرمنوی خدمات"
                                  aria-expanded="false">
                                  <span class="submenu-arrow"></span>
                              </button>
                          </div>

                          <ul class="dropdown">
                              <li><a href="{{ route('services.web-design') }}">طراحی وب‌سایت</a></li>
                              <li><a href="{{ route('services.ecommerce') }}">طراحی فروشگاه اینترنتی</a></li>
                              <li><a href="{{ route('services') }}">سئو</a></li>
                              <li><a href="{{ route('services') }}">بازطراحی و ارتقای سایت</a></li>
                              <li><a href="{{ route('services') }}">سیستم‌های اختصاصی</a></li>
                          </ul>
                      </li>

                      <li>
                          <a href="#portfolio">
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

                      {{-- <li><a href="#faq">سوالات متداول</a></li> --}}
                  </ul>
                  <a href="#contact" class="btn btn-primary btn-header">ثبت درخواست پروژه</a>
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
                      <button type="button" class="submenu-toggle" aria-expanded="false"
                          aria-controls="mobile-services-submenu">
                          <span>خدمات</span>
                          <span class="submenu-arrow" aria-hidden="true"></span>
                      </button>
                  </div>

                  <ul class="submenu" id="mobile-services-submenu">
                      <li><a href="{{ route('services.web-design') }}">طراحی وب‌سایت</a></li>
                      <li><a href="{{ route('services.ecommerce') }}">طراحی فروشگاه اینترنتی</a></li>
                      <li><a href="{{ route('services') }}">سئو</a></li>
                      <li><a href="{{ route('services') }}">بازطراحی و ارتقای سایت</a></li>
                      <li><a href="{{ route('services') }}">سیستم‌های اختصاصی</a></li>
                  </ul>

              </li>

              <li><a href="{{ route('pricing') }}" @class(['is-active' => request()->routeIs('pricing')])>تعرفه ها و پلن ها</a></li>
              <li><a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])>درباره ما</a></li>
              <li><a href="{{ route('contact') }}" @class(['is-active' => request()->routeIs('contact')])>☎ تماس با ما</a></li>
          </ul>
          <a href="#contact" class="btn btn-primary">ثبت درخواست پروژه</a>
      </nav>
  </header>
