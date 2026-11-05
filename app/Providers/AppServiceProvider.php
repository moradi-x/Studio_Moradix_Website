<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Opcodes\LogViewer\Facades\LogViewer;

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

        // Log Viewer authorization
        LogViewer::auth(function ($request) {
            return Auth::guard('admin')->check();
        });
    }
}
