<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminAccessTest extends TestCase
{
    use RefreshDatabase;
    public function test_guest_cannot_access_admin_dashboard(): void
    {
        $this->get('/admin/dashboard')->assertNotFound();
    }

    public function test_guest_cannot_access_admin_categories(): void
    {
        $this->get('/admin/categories')->assertNotFound();
    }

    public function test_guest_cannot_access_admin_projects(): void
    {
        $this->get('/admin/projects')->assertNotFound();
    }

    public function test_guest_cannot_access_admin_contact_messages(): void
    {
        $this->get('/admin/contact-messages')->assertNotFound();
    }

    public function test_guest_cannot_access_admin_settings(): void
    {
        $this->get('/admin/settings')->assertNotFound();
    }

    public function test_admin_login_page_is_accessible(): void
    {
        $this->get('/control-x7m9p2')->assertOk();
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
        $this->post('/admin/logout')->assertNotFound();
    }

    public function test_admin_categories_pages_require_authentication(): void
    {
        $this->get('/admin/categories')->assertNotFound();
        $this->get('/admin/categories/create')->assertNotFound();
    }

    public function test_admin_projects_pages_require_authentication(): void
    {
        $this->get('/admin/projects')->assertNotFound();
        $this->get('/admin/projects/create')->assertNotFound();
    }

    public function test_admin_plan_prices_require_authentication(): void
    {
        $this->get('/admin/plan-prices')->assertNotFound();
    }

    public function test_admin_notifications_require_authentication(): void
    {
        $this->get('/admin/notifications/read-all')->assertNotFound();
    }

    public function test_admin_settings_require_authentication(): void
    {
        $this->get('/admin/settings')->assertNotFound();
        $this->get('/admin/settings/create')->assertNotFound();
    }
}
