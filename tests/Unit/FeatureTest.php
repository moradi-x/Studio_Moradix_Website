<?php

namespace Tests\Unit;

use App\Models\Feature;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FeatureTest extends TestCase
{
    public function test_feature_can_be_created(): void
    {
        $feature = new Feature([
            'name' => 'Responsive Design',
            'slug' => 'responsive-design',
        ]);

        $this->assertEquals('Responsive Design', $feature->name);
    }

    public function test_feature_belongs_to_category(): void
    {
        $feature = new Feature();

        $this->assertInstanceOf(BelongsTo::class, $feature->category());
    }

    public function test_feature_has_projects(): void
    {
        $feature = new Feature();

        $this->assertInstanceOf(BelongsToMany::class, $feature->projects());
    }

    public function test_feature_casts_are_correct(): void
    {
        $feature = new Feature([
            'is_active' => 1,
            'sort_order' => '5',
        ]);

        $this->assertIsBool($feature->is_active);
        $this->assertIsInt($feature->sort_order);
    }
}