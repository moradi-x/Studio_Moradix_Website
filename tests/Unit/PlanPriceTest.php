<?php

namespace Tests\Unit;

use App\Models\PlanPrice;
use Tests\TestCase;

class PlanPriceTest extends TestCase
{
    public function test_basic_price_formatted_in_english(): void
    {
        app()->setLocale('en');

        $price = new PlanPrice([
            'basic_price' => 1500000,
        ]);

        $this->assertEquals('1,500,000', $price->basic_price_formatted);
    }

    public function test_professional_price_formatted_in_english(): void
    {
        app()->setLocale('en');

        $price = new PlanPrice([
            'professional_price' => 2500000,
        ]);

        $this->assertEquals('2,500,000', $price->professional_price_formatted);
    }
}