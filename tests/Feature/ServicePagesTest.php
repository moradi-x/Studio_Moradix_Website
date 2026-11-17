<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServicePagesTest extends TestCase
{
    use RefreshDatabase;
    public function test_all_persian_service_pages_load(): void
    {
        $urls = [
            '/services',
            '/services/web-design',
            '/services/ecommerce',
            '/services/redesign',
            '/services/seo',
            '/services/custom-systems',
        ];

        foreach ($urls as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_all_english_service_pages_load(): void
    {
        $urls = [
            '/en/services',
            '/en/services/web-design',
            '/en/services/ecommerce',
            '/en/services/redesign',
            '/en/services/seo',
            '/en/services/custom-systems',
        ];

        foreach ($urls as $url) {
            $this->get($url)->assertOk();
        }
    }
}