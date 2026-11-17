<?php

namespace Tests\Unit;

use App\Models\SiteVisit;
use PHPUnit\Framework\TestCase;

class SiteVisitTest extends TestCase
{
    public function test_visit_date_is_cast_to_date(): void
    {
        $visit = new SiteVisit([
            'visit_date' => '2026-11-17',
        ]);

        $this->assertInstanceOf(
            \Illuminate\Support\Carbon::class,
            $visit->visit_date
        );
    }
}