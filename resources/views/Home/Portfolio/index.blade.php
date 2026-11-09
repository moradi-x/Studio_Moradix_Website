@extends('Home.Layouts.layout')

@section('title', __('site.portfolio_page_title'))

@section('description', __('site.portfolio_page_description'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/Home/portfolio/portfolio-index.css') }}">
@endpush


@section('content')

    <main class="pf-page" dir="rtl">

        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="{{ __('site.portfolio_breadcrumb_label') }}">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route(app()->getLocale() === 'en' ? 'en.home' : 'home') }}">
                            {{ __('site.portfolio_breadcrumb_home') }}
                        </a>
                    </li>

                    <li class="sv-breadcrumb-item" aria-current="page">
                        {{ __('site.portfolio_breadcrumb_current') }}
                    </li>
                </ol>
            </div>
        </nav>

        {{-- Portfolio Hero — place after $projects is prepared --}}



        {{-- Hero --}}
        <section class="pfh" aria-labelledby="pfh-title">
            <div class="container pfh-inner">

                {{-- Text content --}}
                <div class="pfh-text">

                    <h1 id="pfh-title">
                        {{ __('site.portfolio_hero_title') }}
                        <span class="pfh-grad">{{ __('site.portfolio_hero_title_highlight') }}</span>
                    </h1>

                    <p class="pfh-lead">
                        {{ __('site.portfolio_hero_description') }}
                    </p>

                    <div class="pfh-actions">
                        <a href="#pf-projects" class="pfh-btn pfh-btn--primary">
                            {{ __('site.portfolio_hero_projects_button') }}
                            <span aria-hidden="true">←</span>
                        </a>

                        <a href="{{ route(app()->getLocale() === 'en' ? 'en.contact' : 'contact') }}"
                            class="pfh-btn pfh-btn--ghost">
                            {{ __('site.portfolio_hero_contact_button') }}
                        </a>
                    </div>

                    @if (isset($completedProjects, $developmentProjects))
                        <dl class="pfh-stats">
                            <div>
                                <dt>{{ __('site.portfolio_stat_completed') }}</dt>
                                <dd>{{ $pfhFa($completedProjects) }}</dd>
                            </div>

                            <div>
                                <dt>{{ __('site.portfolio_stat_development') }}</dt>
                                <dd>{{ $pfhFa($developmentProjects) }}</dd>
                            </div>
                        </dl>
                    @endif
                </div>

                {{-- Animated project cards --}}
                <div class="pfh-art" aria-label="{{ __('site.portfolio_art_label') }}">
                    <span class="pfh-glow" aria-hidden="true"></span>
                    <span class="pfh-ring" aria-hidden="true"></span>

                    <div class="pfh-stack">

                        {{-- Card 1: Online store --}}
                        <figure class="pfh-card" data-pos="0">
                            <div class="pfh-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">store / products</span>
                            </div>

                            <div class="pfh-screen">
                                <div class="pfh-nav">
                                    <b></b><u></u><u></u><u></u><em></em>
                                </div>

                                <div class="pfh-banner"></div>

                                <div class="pfh-tiles">
                                    <div><i></i><b></b><s></s></div>
                                    <div><i></i><b></b><s></s></div>
                                    <div><i></i><b></b><s></s></div>
                                </div>
                            </div>

                            <figcaption class="pfh-meta">
                                <b>{{ __('site.portfolio_card_store') }}</b>
                                <span class="pfh-st pfh-st--dev">
                                    <i></i>
                                    {{ __('site.portfolio_status_development') }}
                                </span>
                            </figcaption>
                        </figure>

                        {{-- Card 2: Website --}}
                        <figure class="pfh-card" data-pos="1">
                            <div class="pfh-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">moradix.studio</span>
                            </div>

                            <div class="pfh-screen">
                                <div class="pfh-nav">
                                    <b></b><u></u><u></u><u></u><em></em>
                                </div>

                                <div class="pfh-hero2">
                                    <div>
                                        <b></b>
                                        <b class="w"></b>
                                        <u></u>
                                    </div>
                                    <span></span>
                                </div>

                                <div class="pfh-tiles pfh-tiles--row">
                                    <div><b></b><s></s></div>
                                    <div><b></b><s></s></div>
                                    <div><b></b><s></s></div>
                                </div>
                            </div>

                            <figcaption class="pfh-meta">
                                <b>{{ __('site.portfolio_card_website') }}</b>
                                <span class="pfh-st pfh-st--own">
                                    <i></i>
                                    {{ __('site.portfolio_status_personal') }}
                                </span>
                            </figcaption>
                        </figure>

                        {{-- Card 3: Technical project --}}
                        <figure class="pfh-card pfh-card--dark" data-pos="2">
                            <div class="pfh-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">Router.php</span>
                            </div>

                            <div class="pfh-screen pfh-code" dir="ltr">
                                <p><i class="k"></i><i class="v"></i><i class="s"></i></p>
                                <p><i class="s"></i><i class="f"></i></p>
                                <p class="in"><i class="k"></i><i class="v"></i></p>
                                <p class="in"><i class="f"></i><i class="s"></i><i class="v"></i></p>
                                <p><i class="s"></i></p>
                            </div>

                            <figcaption class="pfh-meta">
                                <b>{{ __('site.portfolio_card_technical') }}</b>
                                <span class="pfh-st pfh-st--tech">
                                    <i></i>
                                    {{ __('site.portfolio_status_mvc') }}
                                </span>
                            </figcaption>
                        </figure>

                    </div>

                    <span class="pfh-count" dir="ltr" aria-live="off">
                        <b data-cur>01</b> / {{ sprintf('%02d', 3) }}
                    </span>
                </div>

            </div>
        </section>


        {{-- Projects --}}
        <section class="pf-section" id="pf-projects">
            <div class="container pf-container">

                <div class="pf-section-heading">
                    <div>
                        <h2 class="pf-section-title">
                            {{ __('site.portfolio_projects_title') }}
                        </h2>
                    </div>
                </div>

                <div class="pf-project-grid">

                    @forelse($projects as $project)
                        <article class="pf-project-card">
                            <div class="pf-project-preview pf-preview-auto">

                                @if ($project->primary_image)
                                    <img src="{{ asset(
                                        trim(env('PROJECT_IMAGES_UPLOAD_PATH', 'uploads/projects/images'), '/') . '/' . $project->primary_image,
                                    ) }}"
                                        alt="{{ app()->getLocale() === 'en' && $project->title_en ? $project->title_en : $project->title }}"
                                        loading="lazy">
                                @else
                                    <div class="pf-project-placeholder">
                                        <span>{{ app()->getLocale() === 'en' && $project->title_en ? $project->title_en : $project->title }}</span>
                                    </div>
                                @endif

                            </div>

                            <div class="pf-project-body">

                                <div class="pf-project-meta">
                                    <span class="pf-project-category">
                                        {{ app()->getLocale() === 'en'
                                            ? $project->category?->slug ?? __('site.portfolio_category_default')
                                            : $project->category?->name ?? __('site.portfolio_category_default') }}
                                    </span>

                                    <span class="pf-status {{ $project->status ? 'is-completed' : 'is-development' }}">
                                        {{ $project->status ? __('site.portfolio_status_completed') : __('site.portfolio_status_development') }}
                                    </span>
                                </div>

                                <h3 class="pf-project-title">
                                    {{ app()->getLocale() === 'en' && $project->title_en ? $project->title_en : $project->title }}
                                </h3>

                                <p class="pf-project-description">
                                    {{ app()->getLocale() === 'en' && $project->short_description_en
                                        ? $project->short_description_en
                                        : $project->short_description }}
                                </p>

                                @if ($project->features->isNotEmpty())
                                    <div class="pf-project-tags">
                                        @foreach ($project->features->take(3) as $feature)
                                            <span>{{ $feature->name }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                <a href="{{ route(app()->getLocale() === 'en' ? 'en.portfolio.show' : 'portfolio.show', $project->slug) }}"
                                    class="pf-project-link" target="_blank" rel="noopener noreferrer">
                                    {{ __('site.portfolio_project_details') }}
                                </a>

                            </div>
                        </article>
                    @empty
                        <div class="pf-project-empty">
                            <p>{{ __('site.portfolio_projects_empty') }}</p>
                        </div>
                    @endforelse

                </div>

            </div>
        </section>


        {{-- Process --}}
        <section class="pf-process">
            <div class="container pf-container">
                <div class="pf-process-heading">
                    <h2>{{ __('site.portfolio_process_title') }}</h2>
                    <p>
                        {{ __('site.portfolio_process_description') }}
                    </p>
                </div>

                <div class="pf-process-grid">
                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">1</span>
                        <div class="pf-process-icon" aria-hidden="true">⌕</div>
                        <h3>{{ __('site.portfolio_process_step_1_title') }}</h3>
                        <p>
                            {{ __('site.portfolio_process_step_1_text') }}
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">2</span>
                        <div class="pf-process-icon" aria-hidden="true">◇</div>
                        <h3>{{ __('site.portfolio_process_step_2_title') }}</h3>
                        <p>
                            {{ __('site.portfolio_process_step_2_text') }}
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">3</span>
                        <div class="pf-process-icon" aria-hidden="true">⌘</div>
                        <h3>{{ __('site.portfolio_process_step_3_title') }}</h3>
                        <p>
                            {{ __('site.portfolio_process_step_3_text') }}
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">4</span>
                        <div class="pf-process-icon" aria-hidden="true">↗</div>
                        <h3>{{ __('site.portfolio_process_step_4_title') }}</h3>
                        <p>
                            {{ __('site.portfolio_process_step_4_text') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>


        {{-- Final CTA Section --}}
        <section class="si-cta" id="contact">
            <div class="container">

                <div class="si-cta-card">

                    {{-- Decorative Elements --}}
                    <span class="si-cta-orb si-cta-orb-one" aria-hidden="true"></span>

                    <span class="si-cta-orb si-cta-orb-two" aria-hidden="true"></span>

                    <div class="si-cta-content">

                        <span class="si-cta-eyebrow">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-2-5.8L4 11l6-2.2L12 3Z" stroke="currentColor"
                                    stroke-width="1.6" stroke-linejoin="round" />
                                <path d="m19 14 1.1 2.9L23 18l-2.9 1.1L19 22l-1.1-2.9L15 18l2.9-1.1L19 14Z"
                                    stroke="currentColor" stroke-width="1.4" stroke-linejoin="round" />
                            </svg>

                            {{ __('site.portfolio_cta_eyebrow') }}
                        </span>

                        <h2 class="si-cta-title">
                            {{ __('site.portfolio_cta_title') }}
                            <span>{{ __('site.portfolio_cta_title_highlight') }}</span>
                        </h2>

                        <p class="si-cta-description">
                            {{ __('site.portfolio_cta_description') }}
                        </p>

                        <div class="si-cta-actions">
                            <a href="{{ route(app()->getLocale() === 'en' ? 'en.contact' : 'contact') }}"
                                class="si-cta-primary">
                                {{ __('site.portfolio_cta_primary') }}

                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                            <a href="{{ route(app()->getLocale() === 'en' ? 'en.services' : 'services') }}"
                                class="si-cta-secondary">
                                {{ __('site.portfolio_cta_secondary') }}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection

@push('scripts')
    <script src="{{ asset('site/js/Home/portfolio/portfolio-index.js') }}" defer></script>
@endpush
