  <!-- ==================== Header ==================== -->
  <header class="header" role="banner">
      <div class="container">
          <div class="header-content">
              <!-- Logo: PLACEHOLDER - جایگزین با لوگوی واقعی -->
              {{-- <a href="{{ route('home') }}" class="logo" aria-label="Moradix Studio - صفحه اصلی">
                  Moradix
              </a> --}}


              <a href="{{ route('home') }}" class="logo" aria-label="Studio Moradix - صفحه اصلی">
                  <img src="{{ asset('site/images/logo.png') }}" alt="Studio Moradix" class="logo-image">
              </a>


              <!-- Desktop Navigation -->
              <nav class="nav-desktop" aria-label="منوی اصلی">
                  <ul class="nav-links">
                      <li>
                          <a href="{{ route('services') }}">
                              <span class="nav-icon">✦</span>
                              خدمات
                          </a>
                      </li>
                      <li>
                          <a href="#portfolio">
                              <span class="nav-icon">▦</span>
                              نمونه‌کارها
                          </a>
                      </li>
                      <li>
                          <a href="#aa">
                              <span class="nav-icon">◇</span>
                              تعرفه‌ها و پلن‌ها
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('about') }}">
                              <span class="nav-icon">◎</span>
                              درباره ما
                          </a>
                      </li>


                      <li>
                          <a href="{{ route('contact') }}">
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
              <li><a href="{{ route('services') }}">خدمات</a></li>
              <li><a href="#portfolio">نمونه‌کارها</a></li>
              <li><a href="#aa"> تعرفه ها و پلن ها</a></li>
              <li><a href="{{ route('about') }}">درباره ما</a></li>
              <li><a href="{{ route('contact') }}">☎ تماس با ما</a></li>
          </ul>
          <a href="#contact" class="btn btn-primary">ثبت درخواست پروژه</a>
      </nav>
  </header>
