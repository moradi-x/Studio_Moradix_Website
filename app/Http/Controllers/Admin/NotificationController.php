<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = AdminNotification::latest()->get();

        return view(
            'admin.notifications.index',
            compact('notifications')
        );
    }

    public function read(AdminNotification $notification)
    {
        $notification->update([
            'is_read' => true,
        ]);

        return back();
    }

    public function destroy(AdminNotification $notification)
    {
        $notification->delete();

        return back();
    }
}