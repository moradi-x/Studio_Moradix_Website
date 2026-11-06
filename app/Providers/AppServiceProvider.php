<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Opcodes\LogViewer\Facades\LogViewer;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);

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
            return Auth::check();
        });

        // Prevent deleting individual log files
        Gate::define('deleteLogFile', function ($user, $file) {
            return false;
        });

        // Prevent deleting entire log folders
        Gate::define('deleteLogFolder', function ($user, $folder) {
            return false;
        });
    }
}
