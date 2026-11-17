<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PortfolioPricingTest extends TestCase
{
    use RefreshDatabase;
    public function test_portfolio_pages_load(): void
    {
        $this->get('/portfolio')->assertOk();
        $this->get('/en/portfolio')->assertOk();
    }

    public function test_pricing_pages_load(): void
    {
        $this->get('/pricing')->assertOk();
        $this->get('/en/pricing')->assertOk();
    }
}