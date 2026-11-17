<?php

namespace Tests\Unit;

use App\Models\FeatureCategory;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeatureCategoryTest extends TestCase
{
    public function test_category_has_features(): void
    {
        $category = new FeatureCategory();

        $this->assertInstanceOf(HasMany::class, $category->features());
    }

    public function test_category_casts_are_correct(): void
    {
        $category = new FeatureCategory([
            'is_active' => 1,
            'sort_order' => '3',
        ]);

        $this->assertIsBool($category->is_active);
        $this->assertIsInt($category->sort_order);
    }
}