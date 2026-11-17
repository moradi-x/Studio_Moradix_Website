<?php

namespace Tests\Unit;

use App\Models\Category;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_category_can_be_created(): void
    {
        $category = new Category([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $this->assertEquals('Web Design', $category->name);
        $this->assertEquals('web-design', $category->slug);
    }

    public function test_category_has_projects_relationship(): void
    {
        $category = new Category();

        $this->assertInstanceOf(
            \Illuminate\Database\Eloquent\Relations\HasMany::class,
            $category->projects()
        );
    }
}