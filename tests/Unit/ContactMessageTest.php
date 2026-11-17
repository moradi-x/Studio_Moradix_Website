<?php

namespace Tests\Unit;

use App\Models\ContactMessage;
use PHPUnit\Framework\TestCase;

class ContactMessageTest extends TestCase
{
    public function test_consultation_request_type_label(): void
    {
        $message = new ContactMessage([
            'request_type' => 'consultation',
        ]);

        $this->assertEquals('مشاوره‌ی رایگان', $message->request_type_label);
    }

    public function test_project_request_type_label(): void
    {
        $message = new ContactMessage([
            'request_type' => 'project',
        ]);

        $this->assertEquals('ثبت درخواست پروژه', $message->request_type_label);
    }

    public function test_unknown_request_type_label(): void
    {
        $message = new ContactMessage([
            'request_type' => 'invalid',
        ]);

        $this->assertEquals('نامشخص', $message->request_type_label);
    }

    public function test_website_design_project_type_label(): void
    {
        $message = new ContactMessage([
            'project_type' => 'website-design',
        ]);

        $this->assertEquals('طراحی وب‌سایت', $message->project_type_label);
    }

    public function test_online_shop_project_type_label(): void
    {
        $message = new ContactMessage([
            'project_type' => 'online-shop',
        ]);

        $this->assertEquals('طراحی فروشگاه اینترنتی', $message->project_type_label);
    }

    public function test_unknown_project_type_label(): void
    {
        $message = new ContactMessage([
            'project_type' => 'invalid',
        ]);

        $this->assertEquals('نامشخص', $message->project_type_label);
    }
    public function test_wordpress_upgrade_project_type_label(): void
    {
        $message = new ContactMessage(['project_type' => 'wordpress-upgrade']);

        $this->assertEquals('بازطراحی و ارتقای سایت', $message->project_type_label);
    }

    public function test_custom_system_project_type_label(): void
    {
        $message = new ContactMessage(['project_type' => 'custom-system']);

        $this->assertEquals('سیستم‌های اختصاصی', $message->project_type_label);
    }

    public function test_seo_speed_project_type_label(): void
    {
        $message = new ContactMessage(['project_type' => 'seo-speed']);

        $this->assertEquals('سئو', $message->project_type_label);
    }

    public function test_not_sure_project_type_label(): void
    {
        $message = new ContactMessage(['project_type' => 'not-sure']);

        $this->assertEquals('هنوز مشخص نیست', $message->project_type_label);
    }
}
