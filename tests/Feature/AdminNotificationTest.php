<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\AdminNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminNotificationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        $this->actingAs($admin, 'admin');
    }

    public function test_admin_can_view_notifications_page(): void
    {
        $this->get(route('admin.notifications.readAll'))
            ->assertOk();
    }

    public function test_notification_can_be_created(): void
    {
        $notification = AdminNotification::create([
            'type' => 'contact',
            'title' => 'New Contact',
            'message' => 'A new contact message was received.',
            'url' => '/admin/contact-messages',
            'is_read' => false,
        ]);

        $this->assertDatabaseHas('admin_notifications', [
            'id' => $notification->id,
            'title' => 'New Contact',
            'is_read' => 0,
        ]);
    }

    public function test_admin_can_view_notifications_list(): void
    {
        AdminNotification::create([
            'type' => 'contact',
            'title' => 'Test Notification',
            'message' => 'Test message',
            'url' => '/admin/contact-messages',
            'is_read' => false,
        ]);

        $response = $this->get(route('admin.notifications.readAll'));

        $response->assertOk()
            ->assertSee('Test Notification');
    }

    public function test_notification_is_read_cast_to_boolean(): void
    {
        $notification = AdminNotification::create([
            'type' => 'contact',
            'title' => 'Test Notification',
            'message' => 'Test message',
            'is_read' => 1,
        ]);

        $this->assertIsBool($notification->is_read);
        $this->assertTrue($notification->is_read);
    }

    public function test_guest_cannot_view_notifications(): void
    {
        auth('admin')->logout();

        $this->get(route('admin.notifications.readAll'))
            ->assertNotFound();
    }

  $response = $this->patch(
    route('admin.notifications.read', $notification)
);

$response->assertRedirect();

$this->assertDatabaseHas('admin_notifications', [
    'id' => $notification->id,
    'is_read' => 1,
]);


   public function test_admin_can_mark_all_notifications_as_read(): void
{
    AdminNotification::create([
        'type' => 'contact',
        'title' => 'Notification One',
        'message' => 'Message One',
        'is_read' => false,
    ]);

    AdminNotification::create([
        'type' => 'contact',
        'title' => 'Notification Two',
        'message' => 'Message Two',
        'is_read' => false,
    ]);

    $response = $this->get(route('admin.notifications.readAll'));

    $response->assertRedirect();

    $this->assertDatabaseHas('admin_notifications', [
        'title' => 'Notification One',
        'is_read' => 1,
    ]);

    $this->assertDatabaseHas('admin_notifications', [
        'title' => 'Notification Two',
        'is_read' => 1,
    ]);
}


    public function test_admin_can_delete_notification(): void
    {
        $notification = AdminNotification::create([
            'type' => 'contact',
            'title' => 'Test Notification',
            'message' => 'Test message',
            'is_read' => false,
        ]);

        $response = $this->delete(
            route('admin.notifications.destroy', $notification)
        );

        $response->assertRedirect();

        $this->assertDatabaseMissing('admin_notifications', [
            'id' => $notification->id,
        ]);
    }


    public function test_guest_cannot_delete_notification(): void
    {
        $notification = AdminNotification::create([
            'type' => 'contact',
            'title' => 'Test Notification',
            'message' => 'Test message',
            'is_read' => false,
        ]);

        auth('admin')->logout();

        $this->delete(
            route('admin.notifications.destroy', $notification)
        )->assertNotFound();

        $this->assertDatabaseHas('admin_notifications', [
            'id' => $notification->id,
        ]);
    }

}
