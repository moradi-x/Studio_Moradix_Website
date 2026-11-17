<?php

namespace Tests\Unit;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminTest extends TestCase
{
    public function test_admin_can_be_created(): void
    {
        $admin = new Admin([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        $this->assertEquals('Admin', $admin->name);
        $this->assertEquals('admin@example.com', $admin->email);
    }

    public function test_admin_password_is_hashed(): void
    {
        $admin = new Admin();
        $admin->password = 'secret-password';

        $this->assertNotEquals('secret-password', $admin->password);
        $this->assertTrue(Hash::check('secret-password', $admin->password));
    }

    public function test_admin_hides_sensitive_fields(): void
    {
        $admin = new Admin();

        $this->assertContains('password', $admin->getHidden());
        $this->assertContains('remember_token', $admin->getHidden());
    }

    public function test_admin_fillable_fields_are_defined(): void
    {
        $admin = new Admin();

        $this->assertContains('name', $admin->getFillable());
        $this->assertContains('email', $admin->getFillable());
        $this->assertContains('password', $admin->getFillable());
    }
}