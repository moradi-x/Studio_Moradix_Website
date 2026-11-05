<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;

class NotificationController extends Controller
{
    public function readAll()
    {
        AdminNotification::where('is_read', false)
            ->update([
                'is_read' => true,
            ]);

        return redirect()->route('admin.contact-messages.index');
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