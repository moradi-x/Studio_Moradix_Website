<?php

namespace Tests\Unit;

use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class ProjectImageTest extends TestCase
{
    public function test_project_image_belongs_to_project(): void
    {
        $image = new ProjectImage();

        $this->assertInstanceOf(BelongsTo::class, $image->project());
    }

    public function test_project_image_fillable_fields(): void
    {
        $image = new ProjectImage();

        $this->assertContains('project_id', $image->getFillable());
        $this->assertContains('image', $image->getFillable());
    }
}