<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\AdminNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_stores_message_and_admin_notification(): void
    {
        $response = $this->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'This is a test message',
        ]);

        $response->assertRedirect();

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Test User',
            'phone' => '09123456789',
            'request_type' => 'consultation',
        ]);

        $this->assertDatabaseHas('admin_notifications', [
            'type' => 'contact_message',
            'title' => 'پیام جدید',
        ]);

        $this->assertDatabaseCount('contact_messages', 1);
        $this->assertDatabaseCount('admin_notifications', 1);
    }

    public function test_contact_form_rejects_invalid_phone_number(): void
    {
        $response = $this->from('/contact')
            ->post('/contact-us-form', [
                'request_type' => 'consultation',
                'name' => 'Test User',
                'phone' => '12345',
                'project_type' => 'website-design',
                'message' => 'Test message',
            ]);

        $response->assertRedirect('/contact');

        $response->assertSessionHasErrors('phone');

        $this->assertDatabaseCount('contact_messages', 0);

        $this->assertDatabaseCount('admin_notifications', 0);
    }
    public function test_contact_form_requires_name(): void
    {
        $response = $this->from('/contact')
            ->post('/contact-us-form', [
                'request_type' => 'consultation',
                'name' => '',
                'phone' => '09123456789',
                'project_type' => 'website-design',
                'message' => 'Test message',
            ]);

        $response->assertRedirect('/contact');

        $response->assertSessionHasErrors('name');

        $this->assertDatabaseCount('contact_messages', 0);
        $this->assertDatabaseCount('admin_notifications', 0);
    }
    public function test_contact_form_ignores_bot_submission(): void
    {
        $response = $this->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Bot User',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'Spam message',
            'website' => 'https://spam.com',
        ]);

        $response->assertRedirect();

        $response->assertSessionHas('contact_success');

        $this->assertDatabaseCount('contact_messages', 0);
        $this->assertDatabaseCount('admin_notifications', 0);
    }
    public function test_contact_form_blocks_requests_after_rate_limit(): void
    {
        $payload = [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ];

        for ($i = 0; $i < 5; $i++) {
            $this->post('/contact-us-form', $payload);
        }

        $response = $this->from('/contact')
            ->post('/contact-us-form', $payload);

        $response->assertRedirect('/contact');

        $response->assertSessionHasErrors('contact_limit');

        $this->assertDatabaseCount('contact_messages', 5);
    }
    public function test_contact_message_is_not_saved_if_notification_creation_fails(): void
    {
        \Illuminate\Support\Facades\DB::shouldReceive('transaction')
            ->once()
            ->andThrow(new \RuntimeException('Database transaction failed'));

        $this->withoutExceptionHandling();

        $this->expectException(\RuntimeException::class);

        $this->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ]);
    }


    public function test_contact_form_accepts_empty_message(): void
    {
        $response = $this->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => '',
        ]);

        $response->assertRedirect();

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Test User',
            'message' => null,
        ]);

        $this->assertDatabaseCount('admin_notifications', 1);
    }

    public function test_contact_form_rejects_message_longer_than_2000_characters(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => str_repeat('A', 2001),
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('message');

        $this->assertDatabaseCount('contact_messages', 0);
    }
    public function test_contact_form_rejects_invalid_project_type(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '09123456789',
            'project_type' => 'invalid-project',
            'message' => 'Test message',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('project_type');

        $this->assertDatabaseCount('contact_messages', 0);
    }

    public function test_contact_form_rejects_invalid_request_type(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'invalid-type',
            'name' => 'Test User',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('request_type');

        $this->assertDatabaseCount('contact_messages', 0);
    }
    public function test_contact_form_rejects_phone_not_starting_with_09(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '08123456789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('phone');

        $this->assertDatabaseCount('contact_messages', 0);
    }

    public function test_contact_form_rejects_short_name(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'A',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('name');

        $this->assertDatabaseCount('contact_messages', 0);
    }

    public function test_contact_form_rejects_name_longer_than_100_characters(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => str_repeat('A', 101),
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('name');

        $this->assertDatabaseCount('contact_messages', 0);
    }
    public function test_contact_form_rejects_phone_containing_letters(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => 'Test User',
            'phone' => '09123abc789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors('phone');

        $this->assertDatabaseCount('contact_messages', 0);
    }
    public function test_contact_form_does_not_create_notification_for_invalid_data(): void
    {
        $response = $this->from('/contact')->post('/contact-us-form', [
            'request_type' => 'consultation',
            'name' => '',
            'phone' => '09123456789',
            'project_type' => 'website-design',
            'message' => 'Test message',
        ]);

        $response->assertSessionHasErrors('name');

        $this->assertDatabaseCount('contact_messages', 0);
        $this->assertDatabaseCount('admin_notifications', 0);
    }
    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');

        $response->assertOk();
    }
}
