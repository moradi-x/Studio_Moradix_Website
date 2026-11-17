<?php

namespace Tests\Unit;

use App\Models\StudioTechnology;
use PHPUnit\Framework\TestCase;

class StudioTechnologyTest extends TestCase
{
    public function test_technology_casts_are_correct(): void
    {
        $technology = new StudioTechnology([
            'is_active' => 1,
            'sort_order' => '2',
        ]);

        $this->assertIsBool($technology->is_active);
        $this->assertIsInt($technology->sort_order);
    }

    public function test_technology_can_be_created(): void
    {
        $technology = new StudioTechnology([
            'name' => 'Laravel',
            'logo' => 'laravel.svg',
        ]);

        $this->assertEquals('Laravel', $technology->name);
    }
}