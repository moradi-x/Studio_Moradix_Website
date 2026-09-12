<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SiteVisitsLast24HoursNotification extends Notification
{
    use Queueable;

    public function __construct(
        public int $visits
    ) {
    }

    public function via($notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable): array
    {
        return [
            'type' => 'site_visits',
            'title' => 'بازدید سایت',
            'message' => "در ۲۴ ساعت گذشته {$this->visits} بازدید از سایت ثبت شده است.",
            'visits' => $this->visits,
        ];
    }
}