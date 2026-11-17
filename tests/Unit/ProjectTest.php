<?php

namespace Tests\Unit;

use App\Models\Project;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProjectTest extends TestCase
{
    public function test_project_can_be_created(): void
    {
        $project = new Project([
            'title' => 'Test Project',
            'slug' => 'test-project',
            'status' => 1,
        ]);

        $this->assertEquals('Test Project', $project->title);
        $this->assertEquals('test-project', $project->slug);
    }

    public function test_project_belongs_to_category(): void
    {
        $project = new Project();

        $this->assertInstanceOf(BelongsTo::class, $project->category());
    }

    public function test_project_has_images_relationship(): void
    {
        $project = new Project();

        $this->assertInstanceOf(HasMany::class, $project->images());
    }

    public function test_project_has_features_relationship(): void
    {
        $project = new Project();

        $this->assertInstanceOf(BelongsToMany::class, $project->features());
    }

    public function test_completed_project_status_label(): void
    {
        $project = new Project(['status' => 1]);

        $this->assertEquals('تکمیل شده', $project->status_label);
    }

    public function test_developing_project_status_label(): void
    {
        $project = new Project(['status' => 0]);

        $this->assertEquals('در حال توسعه', $project->status_label);
    }
}