<?php

namespace Tests\Unit;

use App\Models\AdminNotification;
use PHPUnit\Framework\TestCase;

class AdminNotificationTest extends TestCase
{
    public function test_is_read_casts_to_boolean(): void
    {
        $notification = new AdminNotification([
            'is_read' => 1,
        ]);

        $this->assertIsBool($notification->is_read);
        $this->assertTrue($notification->is_read);
    }

    public function test_unread_notification_casts_to_false(): void
    {
        $notification = new AdminNotification([
            'is_read' => 0,
        ]);

        $this->assertFalse($notification->is_read);
    }
  

    public function test_notification_fillable_fields_are_defined(): void
    {
        $notification = new \App\Models\AdminNotification();

        $this->assertContains('title', $notification->getFillable());
        $this->assertContains('message', $notification->getFillable());
        $this->assertContains('is_read', $notification->getFillable());
    }
}
