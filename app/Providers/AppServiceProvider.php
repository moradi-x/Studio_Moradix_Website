<?php

namespace App\Providers;

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Opcodes\LogViewer\Facades\LogViewer;
use Illuminate\Support\Facades\Gate;
use RalphJSmit\Laravel\SEO\Facades\SEOManager;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);

        SEOManager::tagTransformer(function ($tags) {
            return $tags->filter(function ($tag) {
                return $tag instanceof \RalphJSmit\Laravel\SEO\Tags\OpenGraphTags
                    || $tag instanceof \RalphJSmit\Laravel\SEO\Tags\TwitterCardTags;
            });
        });

        // Unread admin notifications count
        View::composer('admin.*', function ($view) {
            $unreadNotificationsCount = AdminNotification::where(
                'is_read',
                false
            )->count();

            $view->with(
                'unreadNotificationsCount',
                $unreadNotificationsCount
            );
        });

        LogViewer::auth(function ($request) {
            return Auth::guard('admin')->check();
        });

        // Prevent deleting individual log files
        Gate::define('deleteLogFile', function ($user, $file) {
            return false;
        });

        // Prevent deleting entire log folders
        Gate::define('deleteLogFolder', function ($user, $folder) {
            return false;
        });

        View::composer('home.layouts.layout', function ($view) {
            $languageController = app(LanguageController::class);

            $view->with(
                'seoUrls',
                $languageController->getSeoUrls()
            );
        });

        View::composer('home.sections.header', function ($view) {
            $languageController = app(LanguageController::class);

            $view->with([
                'languageSwitchUrl' => $languageController->getLanguageSwitchUrl(),
                'languageUrls' => $languageController->getLanguageUrls(),
            ]);
        });
    }
}
