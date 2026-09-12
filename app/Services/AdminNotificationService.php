<?php

namespace App\Services;

use App\Models\AdminNotification;
use App\Models\SiteVisit;

class AdminNotificationService
{
    public function createSiteVisitsNotification(): AdminNotification
    {
        $visits = SiteVisit::where(
            'created_at',
            '>=',
            now()->subHours(24)
        )->count();

        return AdminNotification::create([
            'type' => 'site_visits',
            'title' => 'بازدید سایت',
            'message' => "در ۲۴ ساعت گذشته {$visits} بازدید از سایت ثبت شده است.",
            'is_read' => false,
        ]);
    }
}