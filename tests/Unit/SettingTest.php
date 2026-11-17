<?php

namespace Tests\Unit;

use App\Models\Setting;
use PHPUnit\Framework\TestCase;

class SettingTest extends TestCase
{
    public function test_setting_can_be_created(): void
    {
        $setting = new Setting([
            'key' => 'site_title',
            'value' => 'Moradix',
        ]);

        $this->assertEquals('site_title', $setting->key);
        $this->assertEquals('Moradix', $setting->value);
    }
}