<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        RateLimiter::clear('admin-login:ip:127.0.0.1');
    }

    public function test_admin_can_login_with_correct_credentials(): void
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        $response = $this->post('/control-x7m9p2/enter', [
            'name' => 'admin',
            'password' => 'secret123',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs(Admin::first(), 'admin');
    }

    public function test_admin_cannot_login_with_wrong_password(): void
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        $response = $this->post('/control-x7m9p2/enter', [
            'name' => 'admin',
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertGuest('admin');
    }

    public function test_admin_cannot_login_with_wrong_name(): void
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        $response = $this->post('/control-x7m9p2/enter', [
            'name' => 'wrong-admin',
            'password' => 'secret123',
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertGuest('admin');
    }

    public function test_admin_login_requires_name_and_password(): void
    {
        $response = $this->post('/control-x7m9p2/enter', []);

        $response->assertSessionHasErrors(['name', 'password']);
        $this->assertGuest('admin');
    }

    public function test_admin_can_logout(): void
    {
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        $this->actingAs($admin, 'admin');

        $response = $this->post('/admin/logout');

        $response->assertRedirect(route('admin.login'));
        $this->assertGuest('admin');
    }

    public function test_admin_login_page_is_accessible(): void
    {
        $this->get('/control-x7m9p2')->assertOk();
    }

    public function test_admin_login_is_rate_limited_after_five_failed_attempts(): void
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        for ($i = 0; $i < 5; $i++) {
            $this->post('/control-x7m9p2/enter', [
                'name' => 'admin',
                'password' => 'wrong-password',
            ]);
        }

        $response = $this->post('/control-x7m9p2/enter', [
            'name' => 'admin',
            'password' => 'secret123',
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertGuest('admin');
    }
}
