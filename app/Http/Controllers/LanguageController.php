<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Route;

class LanguageController extends Controller
{
    /**
     * دریافت آدرس صفحه معادل در زبان مقابل
     */
    public function getLanguageSwitchUrl(): string
    {
        $isEnglish = app()->getLocale() === 'en';

        $currentRoute = request()->route();
        $currentRouteName = $currentRoute?->getName() ?? 'home';

        $baseRouteName = str_starts_with($currentRouteName, 'en.')
            ? substr($currentRouteName, 3)
            : $currentRouteName;

        $targetPrefix = $isEnglish ? '' : 'en.';
        $targetRouteName = $targetPrefix . $baseRouteName;

        $parameters = $currentRoute?->parameters() ?? [];

        if ($baseRouteName === 'portfolio.show') {
            $project = Project::where(
                $isEnglish ? 'slug_en' : 'slug',
                $parameters['slug'] ?? ''
            )->first();

            if (!$project) {
                return route($targetPrefix . 'portfolio');
            }

            $targetSlug = $isEnglish
                ? $project->slug
                : $project->slug_en;

            if (!$targetSlug) {
                return route($targetPrefix . 'portfolio');
            }

            $parameters['slug'] = $targetSlug;
        }

        if (Route::has($targetRouteName)) {
            return route($targetRouteName, $parameters);
        }

        return route($targetPrefix . 'home');
    }

    /**
     * دریافت آدرس هر دو زبان
     */
    public function getLanguageUrls(): array
    {
        $currentLocale = app()->getLocale();

        $currentRoute = request()->route();
        $currentRouteName = $currentRoute?->getName() ?? 'home';

        $baseRouteName = str_starts_with($currentRouteName, 'en.')
            ? substr($currentRouteName, 3)
            : $currentRouteName;

        $parameters = $currentRoute?->parameters() ?? [];

        $urls = [
            'fa' => route('home'),
            'en' => route('en.home'),
        ];

        if (Route::has($currentRouteName)) {
            $urls[$currentLocale] = route($currentRouteName, $parameters);
        }

        $targetLocale = $currentLocale === 'en' ? 'fa' : 'en';
        $targetPrefix = $targetLocale === 'en' ? 'en.' : '';

        if ($baseRouteName === 'portfolio.show') {
            $project = Project::where(
                $currentLocale === 'en' ? 'slug_en' : 'slug',
                $parameters['slug'] ?? ''
            )->first();

            if (!$project) {
                $urls[$targetLocale] = route($targetPrefix . 'portfolio');
                return $urls;
            }

            $targetSlug = $targetLocale === 'en'
                ? $project->slug_en
                : $project->slug;

            if (!$targetSlug) {
                $urls[$targetLocale] = route($targetPrefix . 'portfolio');
                return $urls;
            }

            $parameters['slug'] = $targetSlug;
        }

        $targetRouteName = $targetPrefix . $baseRouteName;

        if (Route::has($targetRouteName)) {
            $urls[$targetLocale] = route($targetRouteName, $parameters);
        } else {
            $urls[$targetLocale] = route($targetPrefix . 'home');
        }

        return $urls;
    }

        /**
     * Generate canonical and hreflang URLs for SEO.
     */
    public function getSeoUrls(): array
    {
        $currentLocale = app()->getLocale();
        $currentRoute = request()->route();

        $currentRouteName = $currentRoute?->getName();

        // Fallback: current URL without query parameters.
        $canonical = request()->url();
        $alternates = [];

        if (!$currentRouteName) {
            return [
                'canonical' => $canonical,
                'alternates' => $alternates,
            ];
        }

        $baseRouteName = str_starts_with($currentRouteName, 'en.')
            ? substr($currentRouteName, 3)
            : $currentRouteName;

        $parameters = $currentRoute->parameters();

        // Portfolio detail pages need their real translated slugs.
        if ($baseRouteName === 'portfolio.show') {
            $project = Project::where(
                $currentLocale === 'en' ? 'slug_en' : 'slug',
                $parameters['slug'] ?? ''
            )->first();

            if (!$project || !filled($project->slug) || !filled($project->slug_en)) {
                return [
                    'canonical' => $canonical,
                    'alternates' => $alternates,
                ];
            }

            $faUrl = route('portfolio.show', ['slug' => $project->slug]);
            $enUrl = route('en.portfolio.show', ['slug' => $project->slug_en]);

            $canonical = $currentLocale === 'en' ? $enUrl : $faUrl;

            $alternates = [
                'fa' => $faUrl,
                'en' => $enUrl,
                'x-default' => $faUrl,
            ];

            return [
                'canonical' => $canonical,
                'alternates' => $alternates,
            ];
        }

        // Static pages: use matching named routes in both locales.
        $faRouteName = $baseRouteName;
        $enRouteName = 'en.' . $baseRouteName;

        if (Route::has($faRouteName) && Route::has($enRouteName)) {
            $faUrl = route($faRouteName, $parameters);
            $enUrl = route($enRouteName, $parameters);

            $canonical = $currentLocale === 'en' ? $enUrl : $faUrl;

            $alternates = [
                'fa' => $faUrl,
                'en' => $enUrl,
                'x-default' => $faUrl,
            ];
        } elseif (Route::has($currentRouteName)) {
            $canonical = route($currentRouteName, $parameters);
        }

        return [
            'canonical' => $canonical,
            'alternates' => $alternates,
        ];
    }
}
