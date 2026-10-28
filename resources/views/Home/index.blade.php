@extends('Home.Layouts.layout')

@section('content')
    <!-- ==================== Hero Section ==================== -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>وب‌سایت تخصصی برای کسب‌وکار شما، بدون پیچیدگی</h1>
                    <p>با Laravel و کدنویسی اختصاصی، فروشگاه اینترنتی و سایت شرکتی حرفه‌ای بسازید. سریع، امن، و درست از همان
                        ابتدا بهینه برای سئو.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('contact') }}" class="btn btn-primary">ثبت درخواست پروژه</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline">مشاهده نمونه‌کارها</a>
                    </div>
                </div>

                {{-- جایگزین تصویر/mockup قدیمی هیروی صفحه‌ی اصلی (فقط ستون تصویر) --}}
                <div class="hv" role="img"
                    aria-label="تصویر: برنامه‌نویسی پشت میز با دو مانیتور که کد می‌نویسد و وب‌سایت طراحی می‌کند">
                    <span class="hv-chip hv-chip--a" aria-hidden="true"><b dir="ltr">&lt;/&gt;</b>
                        code</span>
                    <span class="hv-chip hv-chip--b" aria-hidden="true">ریسپانسیو</span>
                    <span class="hv-chip hv-chip--c" aria-hidden="true">UI / UX</span>

                    <svg class="hv-svg" viewBox="0 0 640 430" aria-hidden="true" focusable="false">
                        <defs>
                            <linearGradient id="hvTeal" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0" stop-color="#2DD4BF" />
                                <stop offset=".55" stop-color="#0F766E" />
                                <stop offset="1" stop-color="#064E49" />
                            </linearGradient>
                            <radialGradient id="hvGlow">
                                <stop offset="0" stop-color="#2DD4BF" stop-opacity=".5" />
                                <stop offset="1" stop-color="#2DD4BF" stop-opacity="0" />
                            </radialGradient>
                            <clipPath id="hvScrL">
                                <rect x="40" y="113" width="228" height="140" rx="4" />
                            </clipPath>
                            <clipPath id="hvScrR">
                                <rect x="364" y="113" width="228" height="140" rx="4" />
                            </clipPath>
                        </defs>

                        {{-- پس‌زمینه --}}
                        <circle cx="320" cy="205" r="190" fill="#0F766E" opacity=".07" />
                        <ellipse cx="320" cy="414" rx="280" ry="12" fill="#0A0A0A"
                            opacity=".08" />
                        <ellipse class="hv-halo hv-halo--l" cx="154" cy="190" rx="130" ry="90"
                            fill="url(#hvGlow)" />
                        <ellipse class="hv-halo hv-halo--r" cx="478" cy="190" rx="130" ry="90"
                            fill="url(#hvGlow)" />

                        <g class="hv-l-back">
                            {{-- مانیتور چپ: کد --}}
                            <rect x="152" y="258" width="16" height="42" fill="#1C1917" />
                            <rect x="118" y="296" width="84" height="8" rx="4" fill="#0A0A0A" />
                            <rect x="32" y="105" width="244" height="156" rx="10" fill="#0A0A0A" />
                            <rect x="40" y="113" width="228" height="140" rx="4" fill="#0E1314" />
                            <g clip-path="url(#hvScrL)">
                                <rect x="56" y="113" width="1" height="140" fill="#fff" opacity=".1" />
                                <g class="hv-cl" style="--i:0">
                                    <rect x="64" y="128" width="34" height="6" rx="3" fill="#2DD4BF" />
                                    <rect x="102" y="128" width="52" height="6" rx="3" fill="#E7E5E4"
                                        opacity=".85" />
                                </g>
                                <g class="hv-cl" style="--i:1">
                                    <rect x="78" y="143" width="52" height="6" rx="3" fill="#93C5FD" />
                                    <rect x="134" y="143" width="70" height="6" rx="3" fill="#E7E5E4"
                                        opacity=".6" />
                                </g>
                                <g class="hv-cl" style="--i:2">
                                    <rect x="78" y="158" width="28" height="6" rx="3" fill="#2DD4BF" />
                                    <rect x="110" y="158" width="86" height="6" rx="3" fill="#FDE68A" />
                                </g>
                                <g class="hv-cl" style="--i:3">
                                    <rect x="92" y="173" width="100" height="6" rx="3" fill="#E7E5E4"
                                        opacity=".6" />
                                </g>
                                <g class="hv-cl" style="--i:4">
                                    <rect x="92" y="188" width="40" height="6" rx="3" fill="#93C5FD" />
                                    <rect x="136" y="188" width="62" height="6" rx="3" fill="#E7E5E4"
                                        opacity=".85" />
                                </g>
                                <g class="hv-cl" style="--i:5">
                                    <rect x="78" y="203" width="24" height="6" rx="3" fill="#2DD4BF" />
                                </g>
                                <g class="hv-cl" style="--i:6">
                                    <rect x="64" y="218" width="20" height="6" rx="3" fill="#2DD4BF" />
                                </g>
                                <g class="hv-cl" style="--i:7">
                                    <rect x="64" y="233" width="64" height="6" rx="3" fill="#78716C" />
                                </g>
                                <rect class="hv-caret" x="134" y="231" width="6" height="10" fill="#2DD4BF" />
                            </g>

                            {{-- مانیتور راست: طراحی سایت --}}
                            <rect x="474" y="258" width="16" height="42" fill="#1C1917" />
                            <rect x="440" y="296" width="84" height="8" rx="4" fill="#0A0A0A" />
                            <rect x="356" y="105" width="244" height="156" rx="10" fill="#0A0A0A" />
                            <rect x="364" y="113" width="228" height="140" rx="4" fill="#fff" />
                            <g clip-path="url(#hvScrR)">
                                <rect x="364" y="113" width="228" height="14" fill="#FAFAF9" />
                                <circle cx="373" cy="120" r="2.2" fill="#D6D3D1" />
                                <circle cx="381" cy="120" r="2.2" fill="#D6D3D1" />
                                <circle cx="389" cy="120" r="2.2" fill="#D6D3D1" />
                                <rect x="404" y="116" width="100" height="8" rx="4" fill="#fff"
                                    stroke="#E7E5E4" />

                                <g class="hv-wire" fill="none" stroke="#0F766E" stroke-width="1"
                                    stroke-dasharray="3 3" opacity=".7">
                                    <rect x="372" y="156" width="92" height="30" rx="3" />
                                    <rect x="372" y="188" width="86" height="14" rx="3" />
                                    <rect x="372" y="208" width="76" height="14" rx="3" />
                                    <rect x="478" y="148" width="106" height="76" rx="9" />
                                    <rect x="372" y="228" width="68" height="24" rx="4" />
                                    <rect x="446" y="228" width="68" height="24" rx="4" />
                                    <rect x="520" y="228" width="66" height="24" rx="4" />
                                </g>

                                <g class="hv-b" style="--i:0">
                                    <rect x="374" y="134" width="30" height="7" rx="3.5" fill="#0A0A0A" />
                                </g>
                                <g class="hv-b" style="--i:1">
                                    <rect x="420" y="136" width="12" height="4" rx="2" fill="#D6D3D1" />
                                    <rect x="438" y="136" width="12" height="4" rx="2" fill="#D6D3D1" />
                                    <rect x="456" y="136" width="12" height="4" rx="2" fill="#D6D3D1" />
                                </g>
                                <g class="hv-b" style="--i:2">
                                    <rect x="546" y="132" width="36" height="11" rx="5.5" fill="#0F766E" />
                                </g>
                                <g class="hv-b" style="--i:3">
                                    <rect x="374" y="158" width="88" height="10" rx="3" fill="#0A0A0A" />
                                    <rect x="374" y="173" width="60" height="10" rx="3" fill="#0A0A0A" />
                                </g>
                                <g class="hv-b" style="--i:4">
                                    <rect x="374" y="190" width="80" height="4" rx="2" fill="#D6D3D1" />
                                    <rect x="374" y="198" width="66" height="4" rx="2" fill="#D6D3D1" />
                                </g>
                                <g class="hv-b" style="--i:5">
                                    <rect x="374" y="210" width="34" height="11" rx="5.5" fill="#0F766E" />
                                    <rect x="412" y="210" width="34" height="11" rx="5.5" fill="#fff"
                                        stroke="#0A0A0A" />
                                </g>
                                <g class="hv-b hv-img" style="--i:6">
                                    <rect x="480" y="150" width="102" height="72" rx="8"
                                        fill="url(#hvTeal)" />
                                    <circle cx="560" cy="170" r="12" fill="#fff" opacity=".25" />
                                    <rect x="494" y="196" width="8" height="18" rx="2" fill="#fff"
                                        opacity=".85" />
                                    <rect x="506" y="188" width="8" height="26" rx="2" fill="#fff"
                                        opacity=".85" />
                                    <rect x="518" y="192" width="8" height="22" rx="2" fill="#fff"
                                        opacity=".85" />
                                </g>
                                <g class="hv-b" style="--i:7">
                                    <rect x="374" y="230" width="66" height="20" rx="5" fill="#fff"
                                        stroke="#E7E5E4" />
                                    <rect x="380" y="236" width="9" height="9" rx="2.5" fill="#F0FDFA"
                                        stroke="#99F6E4" />
                                    <rect x="394" y="237" width="38" height="3" rx="1.5" fill="#0A0A0A" />
                                    <rect x="394" y="243" width="24" height="3" rx="1.5" fill="#D6D3D1" />
                                </g>
                                <g class="hv-b" style="--i:8">
                                    <rect x="447" y="230" width="66" height="20" rx="5" fill="#fff"
                                        stroke="#E7E5E4" />
                                    <rect x="453" y="236" width="9" height="9" rx="2.5" fill="#F0FDFA"
                                        stroke="#99F6E4" />
                                    <rect x="467" y="237" width="38" height="3" rx="1.5" fill="#0A0A0A" />
                                    <rect x="467" y="243" width="24" height="3" rx="1.5" fill="#D6D3D1" />
                                </g>
                                <g class="hv-b" style="--i:9">
                                    <rect x="520" y="230" width="66" height="20" rx="5" fill="#fff"
                                        stroke="#E7E5E4" />
                                    <rect x="526" y="236" width="9" height="9" rx="2.5" fill="#F0FDFA"
                                        stroke="#99F6E4" />
                                    <rect x="540" y="237" width="38" height="3" rx="1.5" fill="#0A0A0A" />
                                    <rect x="540" y="243" width="24" height="3" rx="1.5" fill="#D6D3D1" />
                                </g>

                                <path class="hv-ptr" d="M0 0l11 5.5-4.6 1.6-1.6 4.7z" fill="#0A0A0A" stroke="#fff"
                                    stroke-width="1.2" stroke-linejoin="round" />
                            </g>
                        </g>

                        {{-- میز و وسایل --}}
                        <rect x="12" y="306" width="616" height="14" rx="7" fill="#0A0A0A" />
                        <rect x="60" y="320" width="10" height="100" fill="#1C1917" />
                        <rect x="570" y="320" width="10" height="100" fill="#1C1917" />
                        <rect x="226" y="296" width="180" height="10" rx="4" fill="#E7E5E4"
                            stroke="#D6D3D1" />
                        <g class="hv-keys">{{-- کلیدهایی که دو طرف بدن دیده می‌شوند --}}
                            <rect class="hv-key" style="--d:.1" x="231" y="299" width="6" height="4"
                                rx="1.5" fill="#fff" />
                            <rect class="hv-key" style="--d:.5" x="239" y="299" width="6" height="4"
                                rx="1.5" fill="#fff" />
                            <rect class="hv-key" style="--d:.8" x="387" y="299" width="6" height="4"
                                rx="1.5" fill="#fff" />
                            <rect class="hv-key" style="--d:.3" x="395" y="299" width="6" height="4"
                                rx="1.5" fill="#fff" />
                        </g>
                        <ellipse cx="418" cy="301" rx="8" ry="5" fill="#0A0A0A" />

                        <g>{{-- لیوان و بخار --}}
                            <rect x="204" y="284" width="22" height="22" rx="4" fill="#fff"
                                stroke="#0A0A0A" stroke-width="2" />
                            <path d="M226 290h5a4 4 0 0 1 0 10h-5" fill="none" stroke="#0A0A0A" stroke-width="2" />
                            <path class="hv-steam" d="M211 280c-4-6 4-8 0-14" fill="none" stroke="#A8A29E"
                                stroke-width="2" stroke-linecap="round" />
                            <path class="hv-steam hv-steam--b" d="M219 280c-4-6 4-8 0-14" fill="none" stroke="#A8A29E"
                                stroke-width="2" stroke-linecap="round" />
                        </g>
                        <g class="hv-plant">{{-- گیاه --}}
                            <path d="M617 284C602 264 604 246 612 238C620 252 620 268 617 284Z" fill="#0F766E" />
                            <path d="M619 284C634 268 634 252 626 244C616 256 614 270 619 284Z" fill="#14B8A6" />
                            <path d="M618 284C612 266 618 252 622 232C630 250 626 270 618 284Z" fill="#0B5E58" />
                        </g>
                        <rect x="604" y="282" width="28" height="24" rx="4" fill="#0A0A0A" />

                        <g class="hv-l-front">
                            {{-- دوربین پشت سر اوست: ساعدها جلوی بدن‌اند و فقط بخش بیرون‌زده‌شان کنار بدن دیده می‌شود --}}
                            <path class="hv-fore hv-fore--l" d="M238 321L292 299" stroke="#0B5E58" stroke-width="17"
                                stroke-linecap="round" fill="none" />
                            <path class="hv-fore hv-fore--r" d="M394 321L340 299" stroke="#0B5E58" stroke-width="17"
                                stroke-linecap="round" fill="none" />

                            {{-- پایه‌ی پنج‌پر صندلی با چرخ‌ها (از پشت) --}}
                            <path d="M316 398L256 410M316 398L376 410M316 398L282 421M316 398L350 421M316 398V404"
                                stroke="#1C1917" stroke-width="6" stroke-linecap="round" />
                            <circle cx="254" cy="411" r="5" fill="#0A0A0A" />
                            <circle cx="378" cy="411" r="5" fill="#0A0A0A" />
                            <circle cx="281" cy="422" r="5" fill="#0A0A0A" />
                            <circle cx="351" cy="422" r="5" fill="#0A0A0A" />
                            <rect x="309" y="358" width="14" height="42" rx="3" fill="#292524" />
                            <rect x="238" y="346" width="156" height="18" rx="9" fill="#1C1917" />

                            {{-- بدن (از پشت): هودی، کلاه آویزان، شانه‌ها --}}
                            <g class="hv-body">
                                <path d="M252 352C246 330 248 280 274 252C292 240 340 240 358 252C384 280 386 330 380 352Z"
                                    fill="#0F766E" />
                                <path d="M274 252C292 240 340 240 358 252" fill="none" stroke="#14B8A6"
                                    stroke-width="3" stroke-linecap="round" opacity=".7" />
                            </g>

                            {{-- پشتی صندلی: پهن، با لبه‌ی گرد، روی کمر او --}}
                            <path
                                d="M246 352V306C246 293 256 284 270 284H362C376 284 386 293 386 306V352C386 359 380 363 372 363H260C252 363 246 359 246 352Z"
                                fill="#292524" />
                            <rect x="259" y="297" width="114" height="54" rx="10" fill="#1C1917"
                                stroke="#3F3A36" />

                            {{-- دسته‌های صندلی --}}
                            <rect x="230" y="324" width="8" height="40" rx="2" fill="#292524" />
                            <rect x="394" y="324" width="8" height="40" rx="2" fill="#292524" />
                            <rect x="218" y="316" width="32" height="9" rx="4.5" fill="#0A0A0A" />
                            <rect x="382" y="316" width="32" height="9" rx="4.5" fill="#0A0A0A" />

                            {{-- بازوها: آرنج روی دسته، ساعد به سمت کیبورد --}}
                            <path d="M268 258C256 280 246 300 241 318" fill="none" stroke="#0D6B64" stroke-width="22"
                                stroke-linecap="round" />
                            <path d="M364 258C376 280 386 300 391 318" fill="none" stroke="#0D6B64" stroke-width="22"
                                stroke-linecap="round" />

                            {{-- سر از پشت: گردن، کلاه هودی، مو، هدفون --}}
                            <g class="hv-look">
                                <g class="hv-head">
                                    <rect x="304" y="212" width="24" height="32" rx="8" fill="#D9A27E" />
                                    <path d="M282 250C286 292 346 292 350 250C338 238 294 238 282 250Z" fill="#0B5E58" />
                                    <ellipse cx="287" cy="192" rx="4" ry="6"
                                        fill="#D9A27E" />
                                    <ellipse cx="345" cy="192" rx="4" ry="6"
                                        fill="#D9A27E" />
                                    <ellipse cx="316" cy="186" rx="29" ry="33"
                                        fill="#1C1917" />
                                    <path d="M286 182C286 146 346 146 346 182" fill="none" stroke="#0A0A0A"
                                        stroke-width="5" />
                                    <rect x="280" y="184" width="10" height="24" rx="5" fill="#0A0A0A" />
                                    <rect x="342" y="184" width="10" height="24" rx="5" fill="#0A0A0A" />
                                    <circle cx="285" cy="196" r="2" fill="#2DD4BF" />
                                    <circle cx="347" cy="196" r="2" fill="#2DD4BF" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>




    {{-- ==================== Studio Capabilities ==================== --}}

    <section class="studio-capabilities">

        {{-- Services heading --}}
        <div class="studio-marquee-heading studio-services-heading">


            <h2 class="studio-marquee-title">
                توانمندی‌ها
            </h2>


        </div>


        {{-- Inline SVG icons for service items --}}
        <svg class="sm-icon-defs" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <symbol id="sm-code" viewBox="0 0 24 24">
                <path d="m8 8-4 4 4 4M16 8l4 4-4 4M14 4l-4 16" />
            </symbol>
            <symbol id="sm-layout" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="16" rx="2" />
                <path d="M3 9h18M9 9v11" />
            </symbol>
            <symbol id="sm-server" viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="8" rx="2" />
                <rect x="3" y="13" width="18" height="8" rx="2" />
                <path d="M7 7h.01M7 17h.01M11 7h6M11 17h6" />
            </symbol>
            <symbol id="sm-search" viewBox="0 0 24 24">
                <circle cx="10.5" cy="10.5" r="6.5" />
                <path d="m16 16 4 4M8 10h5M10.5 7.5v5" />
            </symbol>
            <symbol id="sm-gauge" viewBox="0 0 24 24">
                <path d="M4 19a9 9 0 1 1 16 0M12 13l4-5M7 19h10" />
                <circle cx="12" cy="13" r="1" />
            </symbol>
            <symbol id="sm-panel" viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="18" rx="3" />
                <path d="M9 3v18M9 8h12M13 13h4M13 17h4" />
            </symbol>
            <symbol id="sm-device" viewBox="0 0 24 24">
                <rect x="6" y="2" width="12" height="20" rx="2" />
                <path d="M10 18h4M2 6v12M22 6v12" />
            </symbol>
            <symbol id="sm-database" viewBox="0 0 24 24">
                <ellipse cx="12" cy="5" rx="8" ry="3" />
                <path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3" />
            </symbol>
            <symbol id="sm-shield" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                <path d="m9 12 2 2 4-4" />
            </symbol>
            <symbol id="sm-layers" viewBox="0 0 24 24">
                <path d="m12 3 9 5-9 5-9-5 9-5ZM3 12l9 5 9-5M3 16l9 5 9-5" />
            </symbol>
            <symbol id="sm-refresh" viewBox="0 0 24 24">
                <path d="M20 7v5h-5M4 17v-5h5" />
                <path d="M5.5 9a7 7 0 0 1 11.6-2L20 12M4 12l2.9 5a7 7 0 0 0 11.6-2" />
            </symbol>
            <symbol id="sm-puzzle" viewBox="0 0 24 24">
                <path d="M9 3h3a2 2 0 1 1 4 0h3v6a2 2 0 1 1 0 4v8h-6a2 2 0 1 0-4 0H3v-6a2 2 0 1 0 0-4V5h6a2 2 0 1 1 0-2Z" />
            </symbol>
            <symbol id="sm-cart" viewBox="0 0 24 24">
                <path d="M3 3h2l2.5 12h11L21 7H6" />
                <circle cx="10" cy="20" r="1" />
                <circle cx="18" cy="20" r="1" />
            </symbol>
            <symbol id="sm-git" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="2" />
                <circle cx="18" cy="6" r="2" />
                <circle cx="12" cy="18" r="2" />
                <path d="M8 6h8M12 16V9" />
            </symbol>
            <symbol id="sm-image" viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <circle cx="8.5" cy="8.5" r="1.5" />
                <path d="m21 15-5-5L5 21" />
            </symbol>
            <symbol id="sm-support" viewBox="0 0 24 24">
                <path d="M4 13v-2a8 8 0 0 1 16 0v2" />
                <path d="M4 13H3v4h4v-4H4ZM20 13h1v4h-4v-4h3ZM17 20h-5" />
            </symbol>
            <symbol id="sm-target" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="9" />
                <circle cx="12" cy="12" r="5" />
                <circle cx="12" cy="12" r="1" />
            </symbol>
            <symbol id="sm-blocks" viewBox="0 0 24 24">
                <rect x="3" y="3" width="8" height="8" rx="1" />
                <rect x="13" y="3" width="8" height="8" rx="1" />
                <rect x="3" y="13" width="8" height="8" rx="1" />
                <rect x="13" y="13" width="8" height="8" rx="1" />
            </symbol>
            <symbol id="sm-rocket" viewBox="0 0 24 24">
                <path d="M12 15 9 12a14 14 0 0 1 10-9c0 5-3 9-7 12Z" />
                <path d="m9 12-4 1-2 5 5-2M12 15l-1 4-5 2 2-5M14 7h.01" />
            </symbol>
            <symbol id="sm-wrench" viewBox="0 0 24 24">
                <path d="M14 6a5 5 0 0 0-6 6L3 17l4 4 5-5a5 5 0 0 0 6-6l-3 3-4-4 3-3Z" />
            </symbol>
        </svg>

        {{-- First marquee: services --}}
        <section class="studio-marquee studio-marquee-services" aria-label="خدمات و توانمندی‌های استودیو">
            <div class="studio-marquee-track studio-marquee-track-left">

                @for ($copy = 0; $copy < 4; $copy++)
                    <div class="studio-marquee-group" @if ($copy > 0) aria-hidden="true" @endif>
                        @foreach ($studioServices as $service)
                            <div class="studio-marquee-item">

                                <span class="studio-marquee-icon">
                                    <svg class="studio-service-icon" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                        stroke-linejoin="round" aria-hidden="true">
                                        <use href="#sm-{{ $service->icon }}"></use>
                                    </svg>
                                </span>

                                <span class="studio-marquee-label">
                                    {{ $service->title }}
                                </span>

                            </div>
                        @endforeach
                    </div>
                @endfor

            </div>
        </section>


        {{-- Technologies heading --}}
        <div class="studio-marquee-heading studio-tech-heading">


            <h2 class="studio-marquee-title">
                ابزارها و تکنولوژی‌ ها
            </h2>
        </div>

        {{-- Second marquee: technology logos --}}
        <section class="studio-marquee studio-marquee-tech" aria-label="تکنولوژی‌های مورد استفاده">
            <div class="studio-marquee-track studio-marquee-track-right">

                @for ($copy = 0; $copy < 4; $copy++)
                    <div class="studio-marquee-group studio-tech-group" dir="ltr"
                        @if ($copy > 0) aria-hidden="true" @endif>
                        @foreach ($techStack as $tech)
                            <div class="studio-tech-item">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/{{ $tech->logo }}"
                                    alt="{{ $tech->name }}" title="{{ $tech->name }}" width="36" height="36"
                                    loading="lazy" decoding="async">
                            </div>
                        @endforeach
                    </div>
                @endfor

            </div>
        </section>

    </section>


    {{-- Services Section --}}
    <section class="section services" id="services">
        <div class="container">

            <div class="services-grid">

                {{-- Shared Background for All Services --}}
                <div class="services-featured">

                    {{-- Popular Services Header --}}
                    <div class="services-featured-header">


                        <h2>خدمات پرفروش</h2>

                        <p>
                            دو راهکار محبوب برای شروع حرفه‌ای
                            کسب‌وکار شما در فضای وب
                        </p>
                    </div>

                    {{-- Primary Services --}}
                    <div class="services-row services-row-primary">

                        {{-- Website Design --}}
                        <article class="service-card service-card-primary">

                            <div class="service-card-top">
                                <span class="service-number">1</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="16" rx="2" />
                                        <path d="M3 9h18" />
                                        <path d="M7 6.5h.01" />
                                        <path d="M10 6.5h.01" />
                                        <path d="m9 14 2 2 4-4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>طراحی وب‌سایت</h3>

                                <p>
                                    طراحی وب‌سایتی حرفه‌ای، مدرن و متناسب با هویت برند
                                    و نیاز واقعی کسب‌وکار شما؛ با تمرکز بر تجربه کاربری،
                                    ظاهر جذاب و عملکرد مناسب در تمام دستگاه‌ها.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.web-design') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- Ecommerce Design --}}
                        <article class="service-card service-card-primary">

                            <div class="service-card-top">
                                <span class="service-number">2</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M3 3h2l2.4 11.4a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 2-1.6L21 7H6" />
                                        <circle cx="10" cy="20" r="1" />
                                        <circle cx="18" cy="20" r="1" />
                                        <path d="M12 10h4" />
                                        <path d="M14 8v4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>طراحی فروشگاه اینترنتی</h3>

                                <p>
                                    ساخت فروشگاهی آنلاین با تجربه خرید ساده،
                                    دسته‌بندی منظم محصولات، مدیریت آسان سفارش‌ها
                                    و مسیری شفاف برای تبدیل بازدیدکننده به مشتری.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.ecommerce') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                    </div>

                    {{-- Specialized Services Header --}}
                    <div class="services-specialized-header">


                        <h2>خدمات تخصصی ما </h2>

                        <p>
                            از ارتقای سایت فعلی تا توسعه سیستم‌های اختصاصی
                            و افزایش دیده‌شدن کسب‌وکار شما در گوگل
                        </p>
                    </div>

                    {{-- Secondary Services --}}
                    <div class="services-row services-row-secondary">

                        {{-- Redesign Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">3</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M12 20h9" />
                                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z" />
                                        <path d="m15 5 4 4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>بازطراحی و ارتقای سایت</h3>

                                <p>
                                    بهبود ظاهر، تجربه کاربری، سرعت و مدیریت سایت فعلی شما؛
                                    با هدف رفع مشکلات موجود و ارتقای کیفیت سایت،
                                    بدون شروع غیرضروری از صفر.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.redesign') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- Custom Systems Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">4</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                        <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                        <path d="M10 6.5h4" />
                                        <path d="M17.5 10v4" />
                                        <path d="M10 17.5h4" />
                                        <path d="M6.5 10v4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>سیستم‌های اختصاصی</h3>

                                <p>
                                    توسعه سامانه‌ها، پنل‌های مدیریتی و ابزارهای اختصاصی
                                    متناسب با فرایندهای کسب‌وکار شما برای مدیریت بهتر
                                    و ساده‌تر کارها.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.custom-systems') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- SEO Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">5</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="11" cy="11" r="7" />
                                        <path d="m20 20-4-4" />
                                        <path d="M8 13V9" />
                                        <path d="M11 13V7" />
                                        <path d="M14 13v-2" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>سئو سایت</h3>

                                <p>
                                    بهینه‌سازی ساختار و محتوای سایت برای دیده‌شدن بهتر
                                    در جست‌وجوی گوگل و جذب مخاطبانی که به خدمات
                                    و محصولات شما نیاز دارند.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.seo') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                    </div>

                </div>
                {{-- End Shared Background --}}

            </div>
        </div>
    </section>



    {{-- Portfolio Section --}}
    <section class="section portfolio" id="portfolio">
        <div class="container">

            <div class="section-header">
                <h2>نمونه‌کارهای ما</h2>
                <p>
                    بخشی از پروژه‌هایی که برای رشد و توسعه کسب‌وکارها
                    طراحی و پیاده‌سازی کرده‌ایم
                </p>
            </div>

            <div class="portfolio-grid">

                @forelse ($featuredProjects as $project)
                    <article class="portfolio-card">

                        {{-- Project Image --}}
                        <div class="portfolio-image" aria-label="تصویر پروژه">

                            @if ($project->primary_image)
                                <img src="{{ asset(
                                    trim(env('PROJECT_IMAGES_UPLOAD_PATH', 'uploads/projects/images'), '/') . '/' . $project->primary_image,
                                ) }}"
                                    alt="{{ $project->title }}" loading="lazy">
                            @else
                                <div class="portfolio-placeholder">
                                    <span>
                                        {{ mb_substr($project->title, 0, 1) }}
                                    </span>
                                </div>
                            @endif

                        </div>

                        {{-- Project Content --}}
                        <div class="portfolio-content">

                            <p class="portfolio-type">
                                {{ $project->category?->name ?? 'پروژه اختصاصی' }}
                            </p>

                            <h3>{{ $project->title }}</h3>

                            @if ($project->features->isNotEmpty())
                                <div class="portfolio-tags">
                                    @foreach ($project->features->take(3) as $feature)
                                        <span class="tag">
                                            {{ $feature->name }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif

                            @if ($project->short_description)
                                <p class="portfolio-description">
                                    {{ $project->short_description }}
                                </p>
                            @endif

                            <a href="{{ route('portfolio.show', $project->slug) }}" class="portfolio-link">
                                مشاهده جزئیات پروژه
                                <span aria-hidden="true">←</span>
                            </a>

                        </div>

                    </article>

                @empty

                    <div class="portfolio-empty">
                        <p>در حال آماده‌سازی نمونه‌کارهای ما هستیم.</p>
                    </div>
                @endforelse

            </div>

            {{-- View All Projects --}}
            <div class="portfolio-more">
                <a href="{{ url('/portfolio') }}" class="portfolio-more-link">
                    مشاهده همه نمونه‌کارها
                    <span aria-hidden="true">←</span>
                </a>
            </div>

        </div>
    </section>

    <!-- ==================== Why Us Section ==================== -->
    <section class="section why-us" id="why-us">
        <div class="container">
            <div class="section-header">
                <h2>چرا

                    Studio Moradix ؟
                </h2>
                <p>مزیت‌های واقعی همکاری با ما</p>
            </div>

            <div class="why-grid">
                <!-- Why Item 1 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <div class="why-content">
                        <h3>کد تمیز و مستندات کامل</h3>
                        <p>تحویل پروژه با کدنویسی استاندارد، کامنت‌گذاری و مستندات فنی برای توسعه‌های آینده</p>
                    </div>
                </div>

                <!-- Why Item 2 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <div class="why-content">
                        <h3>یک نفر مسئول پروژه‌ی شما</h3>
                        <p>از مشاوره تا تحویل و پشتیبانی، همیشه با یک نفر در ارتباط هستید، بدون سردرگمی</p>
                    </div>
                </div>

                <!-- Why Item 3 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <div class="why-content">
                        <h3>سئو و سرعت از ابتدا</h3>
                        <p>بهینه‌سازی برای موتورهای جستجو و سرعت بالا بخشی از کدنویسی اولیه است، نه کار اضافی بعدی</p>
                    </div>
                </div>

                <!-- Why Item 4 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <div class="why-content">
                        <h3>پشتیبانی پس از تحویل</h3>
                        <p>۳ ماه پشتیبانی رایگان برای رفع باگ و راهنمایی استفاده از پنل مدیریت</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Process Section ==================== -->
    <section class="section process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>فرآیند کار</h2>
                <p>از ایده تا تحویل، گام‌به‌گام با شما هستیم</p>
            </div>

            <div class="process-timeline">
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۱">۱</div>
                    <h3>مشاوره رایگان</h3>
                    <p>بررسی نیاز شما، پیشنهاد راه‌کار مناسب و برآورد زمان و هزینه</p>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۲">۲</div>
                    <h3>تحلیل و قرارداد</h3>
                    <p>مشخص کردن دقیق ویژگی‌ها، امضای قرارداد و دریافت پیش‌پرداخت</p>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۳">۳</div>
                    <h3>طراحی و توسعه</h3>
                    <p>کدنویسی با Laravel، گزارش پیشرفت منظم و دریافت بازخورد شما</p>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۴">۴</div>
                    <h3>تست و تحویل</h3>
                    <p>تست کامل عملکرد، رفع نواقص، تحویل نهایی و آموزش کار با پنل</p>
                </div>

                <!-- Step 5 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۵">۵</div>
                    <h3>پشتیبانی</h3>
                    <p>۳ ماه پشتیبانی رایگان، رفع باگ و پاسخ‌گویی به سوالات شما</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== FAQ Section ==================== -->
    <section class="section faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>سوالات متداول</h2>
                <p>پاسخ سوالاتی که احتمالاً برای شما پیش آمده</p>
            </div>

            <div class="faq-list">
                <!-- FAQ 1 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>هزینه‌ی ساخت یک وب‌سایت چقدر است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>هزینه بستگی به نوع پروژه و امکانات مورد نیاز دارد. یک سایت شرکتی ساده از ۸ میلیون تومان،
                                فروشگاه اینترنتی از ۱۵ میلیون تومان و سیستم‌های سفارشی بر اساس تحلیل نیاز قیمت‌گذاری
                                می‌شوند. بعد از مشاوره رایگان، برآورد دقیق به شما ارائه می‌دهیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>مدت زمان تحویل پروژه چقدر است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>زمان تحویل بسته به حجم کار متفاوت است. یک سایت شرکتی معمولاً ۲ تا ۳ هفته، فروشگاه اینترنتی ۴
                                تا ۶ هفته و سیستم‌های بزرگ‌تر ممکن است ۲ تا ۳ ماه زمان ببرند. در قرارداد، زمان‌بندی دقیق
                                مشخص می‌شود و گزارش پیشرفت منظم دریافت می‌کنید.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا دامنه و هاست را هم شما تهیه می‌کنید؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>خرید دامنه و هاست به عهده‌ی خود شماست، اما ما در انتخاب مناسب‌ترین سرویس راهنمایی‌تان
                                می‌کنیم. همچنین نصب و راه‌اندازی سایت روی هاست را انجام می‌دهیم و تنظیمات لازم برای امنیت و
                                سرعت را اعمال می‌کنیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>پشتیبانی بعد از تحویل چگونه است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>۳ ماه پشتیبانی رایگان شامل رفع باگ‌های احتمالی، راهنمایی استفاده از پنل مدیریت و پاسخ به
                                سوالات فنی است. بعد از این مدت، امکان قرارداد پشتیبانی ماهانه یا انجام تغییرات و توسعه‌های
                                جدید به‌صورت پروژه‌ای وجود دارد.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا سایت من برای سئو بهینه خواهد بود؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>بله، تمام سایت‌هایی که می‌سازیم از نظر سئوی فنی بهینه‌اند. این شامل ساختار URL صحیح،
                                متاتگ‌ها، سرعت بارگذاری، ریسپانسیو بودن و استاندارد بودن کد HTML است. البته سئوی محتوایی
                                (نوشتن متن بهینه و بک‌لینک‌سازی) بخش جداگانه‌ای است که می‌توانیم در آن هم راهنمایی کنیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا بعد از تحویل می‌توانم تغییرات بدهم؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>بله، تغییرات جزئی در دوره‌ی پشتیبانی رایگان انجام می‌شود. تغییرات بزرگ‌تر مثل اضافه کردن بخش
                                جدید یا ویژگی‌های پیچیده، به‌صورت پروژه‌ی جداگانه برآورد و اجرا می‌شوند. چون کد تمیز و مستند
                                تحویل می‌دهیم، توسعه‌های آینده بسیار راحت‌تر خواهد بود.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== CTA & Form Section ==================== -->

    <section class="section cta-section" id="contact">
        <div class="container">
            <div class="cta-content">

                <div class="cta-header">
                    <h2>آماده‌ی شروع پروژه‌تان هستید؟</h2>
                    <p>
                        فرم زیر را پر کنید تا در اسرع وقت با شما تماس بگیریم
                        و مشاوره رایگان ارائه دهیم.
                    </p>
                </div>

                <div class="ct-form-card" id="contact-form-section">

                    <h2 class="ct-form-title">فرم درخواست مشاوره</h2>
                    <p class="ct-form-subtitle">
                        اطلاعاتت رو وارد کن تا برای هماهنگی باهات تماس بگیریم.
                    </p>

                    {{-- Success Message --}}
                    @if (session('contact_success'))
                        <div class="ct-form-success show" id="ct-success-message" role="alert" aria-live="polite">
                            <span>
                                پیام شما با موفقیت ارسال شد.
                                به‌زودی با شما تماس می‌گیریم.
                            </span>
                        </div>
                    @endif

                    <form id="ct-contact-form" action="{{ route('contact-us.form') }}#contact-form-section"
                        method="POST" novalidate>
                        @csrf

                        @error('contact_limit')
                            <div class="ct-form-error">{{ $message }}</div>
                        @enderror

                        {{-- Request Type --}}
                        <div class="ct-request-type">
                            <label class="ct-request-type-label">
                                نوع درخواست:
                            </label>

                            <div class="ct-pills">
                                <input type="radio" id="home-request-consultation" name="request_type"
                                    value="consultation" class="ct-pill-input"
                                    {{ old('request_type', 'consultation') === 'consultation' ? 'checked' : '' }}>
                                <label for="home-request-consultation" class="ct-pill-label">
                                    مشاوره رایگان
                                </label>

                                <input type="radio" id="home-request-project" name="request_type" value="project"
                                    class="ct-pill-input" {{ old('request_type') === 'project' ? 'checked' : '' }}>
                                <label for="home-request-project" class="ct-pill-label">
                                    ثبت درخواست پروژه
                                </label>
                            </div>

                            @error('request_type')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Name --}}
                        <div class="ct-form-group">
                            <label for="home-ct-name" class="ct-form-label">
                                نام و نام خانوادگی
                                <span class="required">*</span>
                            </label>

                            <input type="text" id="home-ct-name" name="name" class="ct-form-input"
                                value="{{ old('name') }}" placeholder="مثال: علی احمدی" autocomplete="name"
                                required>

                            @error('name')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Phone --}}
                        <div class="ct-form-group">
                            <label for="home-ct-phone" class="ct-form-label">
                                شماره موبایل
                                <span class="required">*</span>
                            </label>

                            <input type="tel" id="home-ct-phone" name="phone" class="ct-form-input"
                                value="{{ old('phone') }}" placeholder="۰۹۱۲۳۴۵۶۷۸۹" inputmode="tel"
                                autocomplete="tel" required>

                            @error('phone')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Project Type --}}
                        <div class="ct-form-group">
                            <label for="home-ct-project-type" class="ct-form-label">
                                نوع پروژه
                                <span class="required">*</span>
                            </label>

                            <select id="home-ct-project-type" name="project_type" class="ct-form-select" required>
                                <option value="">انتخاب کنید</option>

                                <option value="not-sure" {{ old('project_type') === 'not-sure' ? 'selected' : '' }}>
                                    هنوز مطمئن نیستم
                                </option>

                                <option value="website-design"
                                    {{ old('project_type') === 'website-design' ? 'selected' : '' }}>
                                    طراحی وب‌سایت
                                </option>

                                <option value="online-shop"
                                    {{ old('project_type') === 'online-shop' ? 'selected' : '' }}>
                                    طراحی فروشگاه اینترنتی
                                </option>

                                <option value="wordpress-upgrade"
                                    {{ old('project_type') === 'wordpress-upgrade' ? 'selected' : '' }}>
                                    بازطراحی و ارتقای سایت
                                </option>

                                <option value="custom-system"
                                    {{ old('project_type') === 'custom-system' ? 'selected' : '' }}>
                                    سیستم‌های اختصاصی
                                </option>

                                <option value="seo-speed" {{ old('project_type') === 'seo-speed' ? 'selected' : '' }}>
                                    سئو و بهینه‌سازی
                                </option>
                            </select>

                            @error('project_type')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div class="ct-form-group">
                            <label for="home-ct-message" class="ct-form-label">
                                توضیحات پروژه (اختیاری)
                            </label>

                            <textarea id="home-ct-message" name="message" class="ct-form-textarea"
                                placeholder="در چند خط توضیح بده چه پروژه‌ای مدنظرت هست...">{{ old('message') }}</textarea>

                            @error('message')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Honeypot --}}
                        <div class="ct-honeypot" aria-hidden="true">
                            <label for="home-ct-website">وب‌سایت</label>
                            <input type="text" id="home-ct-website" name="website" value=""
                                tabindex="-1" autocomplete="off">
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="ct-form-submit">
                            ارسال درخواست
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    @if ($errors->any() || session('contact_success') || session('contact_limit'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const formSection = document.getElementById('contact-form-section');

                if (formSection) {
                    setTimeout(function() {
                        formSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 100);
                }
            });
        </script>
    @endif

@endsection
