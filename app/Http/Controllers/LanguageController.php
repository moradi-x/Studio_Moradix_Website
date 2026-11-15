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
}
