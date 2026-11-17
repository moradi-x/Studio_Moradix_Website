<?php

namespace Tests\Unit;

use App\Models\StudioService;
use PHPUnit\Framework\TestCase;

class StudioServiceTest extends TestCase
{
    public function test_service_casts_are_correct(): void
    {
        $service = new StudioService([
            'is_active' => 1,
            'sort_order' => '4',
        ]);

        $this->assertIsBool($service->is_active);
        $this->assertIsInt($service->sort_order);
    }

    public function test_service_can_be_created(): void
    {
        $service = new StudioService([
            'title' => 'Web Design',
            'title_en' => 'Web Design',
        ]);

        $this->assertEquals('Web Design', $service->title);
    }
}