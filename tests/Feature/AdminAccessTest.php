<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    public function test_guest_cannot_access_admin_dashboard(): void
    {
        $response = $this->get('/admin/dashboard');

        $response->assertRedirect();
    }

    public function test_guest_cannot_access_admin_categories(): void
    {
        $response = $this->get('/admin/categories');

        $response->assertRedirect();
    }

    public function test_guest_cannot_access_admin_projects(): void
    {
        $response = $this->get('/admin/projects');

        $response->assertRedirect();
    }

    public function test_guest_cannot_access_admin_contact_messages(): void
    {
        $response = $this->get('/admin/contact-messages');

        $response->assertRedirect();
    }

    public function test_guest_cannot_access_admin_settings(): void
    {
        $response = $this->get('/admin/settings');

        $response->assertRedirect();
    }

    public function test_admin_login_page_is_accessible(): void
    {
        $response = $this->get('/control-x7m9p2');

        $response->assertOk();
    }
    public function test_admin_cannot_login_with_wrong_password(): void
    {
        $response = $this->post('/control-x7m9p2/enter', [
            'username' => 'admin',
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
    public function test_admin_cannot_login_with_empty_credentials(): void
    {
        $response = $this->post('/control-x7m9p2/enter', []);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
    public function test_admin_logout_redirects_to_login(): void
    {
        $response = $this->post('/admin/logout');

        $response->assertRedirect();
        $this->assertGuest();
    }
    public function test_admin_categories_pages_require_authentication(): void
    {
        $this->get('/admin/categories')->assertRedirect();
        $this->get('/admin/categories/create')->assertRedirect();
    }

    public function test_admin_projects_pages_require_authentication(): void
    {
        $this->get('/admin/projects')->assertRedirect();
        $this->get('/admin/projects/create')->assertRedirect();
    }

    public function test_admin_plan_prices_require_authentication(): void
    {
        $this->get('/admin/plan-prices')->assertRedirect();
    }

    public function test_admin_notifications_require_authentication(): void
    {
        $this->get('/admin/notifications/read-all')->assertRedirect();
    }

    public function test_admin_settings_require_authentication(): void
    {
        $this->get('/admin/settings')->assertRedirect();
        $this->get('/admin/settings/create')->assertRedirect();
    }
}
