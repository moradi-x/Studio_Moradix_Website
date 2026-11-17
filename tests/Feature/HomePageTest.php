<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;
    public function test_home_pages_load_successfully(): void
    {
        foreach (['/', '/en'] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_about_pages_load_successfully(): void
    {
        foreach (['/about', '/en/about'] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_contact_pages_load_successfully(): void
    {
        foreach (['/contact', '/en/contact'] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_services_pages_load_successfully(): void
    {
        $urls = [
            '/services',
            '/services/web-design',
            '/services/ecommerce',
            '/services/redesign',
            '/services/seo',
            '/services/custom-systems',
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

    public function test_portfolio_and_pricing_pages_load_successfully(): void
    {
        foreach (['/portfolio', '/pricing', '/en/portfolio', '/en/pricing'] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_sitemap_loads_successfully(): void
    {
        $this->get('/sitemap.xml')->assertOk();
    }
    public function test_about_pages_load(): void
{
    $this->get('/about')->assertOk();
    $this->get('/en/about')->assertOk();
}
}