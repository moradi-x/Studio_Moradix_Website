<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\ProjectImage;
use Illuminate\Validation\Rule;

class ProjectCrudTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'secret123',
        ]);

        $this->actingAs($admin, 'admin');
    }

    public function test_admin_can_view_projects_list(): void
    {
        $this->get(route('admin.projects.index'))
            ->assertOk();
    }

    public function test_admin_can_view_project_create_page(): void
    {
        $this->get(route('admin.projects.create'))
            ->assertOk();
    }

    public function test_admin_can_view_project_details(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Test description',
            'description' => 'Test full description',
            'status' => 1,
        ]);

        $this->get(route('admin.projects.show', $project))
            ->assertOk();
    }

    public function test_project_creation_requires_title(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->post(route('admin.projects.store'), [
            'category_id' => $category->id,
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response->assertSessionHasErrors('title');
    }

    public function test_project_creation_requires_primary_image(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->post(route('admin.projects.store'), [
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'images' => [UploadedFile::fake()->image('gallery.jpg')],
            'status' => 1,
        ]);

        $response->assertSessionHasErrors('primary_image');
    }

    public function test_admin_can_delete_project_gallery_image(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $image = \App\Models\ProjectImage::create([
            'project_id' => $project->id,
            'image' => 'gallery.jpg',
        ]);

        $response = $this->delete(
            route('admin.projects.images.destroy', $project),
            ['image_id' => $image->id]
        );

        $response->assertRedirect();

        $this->assertDatabaseMissing('project_images', [
            'id' => $image->id,
        ]);
    }

    public function test_gallery_image_deletion_rejects_invalid_image_id(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'test-category',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->delete(
            route('admin.projects.images.destroy', $project),
            ['image_id' => 999999]
        );

        $response->assertSessionHasErrors('image_id');
    }


   public function test_guest_cannot_access_project_management(): void
{
    auth('admin')->logout();

    $this->get(route('admin.projects.index'))
        ->assertNotFound();

    $this->get(route('admin.projects.create'))
        ->assertNotFound();

    $this->post(route('admin.projects.store'), [])
        ->assertNotFound();
}


    public function test_admin_can_view_project_edit_page(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $this->get(route('admin.projects.edit', $project))
            ->assertOk()
            ->assertSee('Test Project');
    }

    public function test_project_update_requires_title(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->put(
            route('admin.projects.update', $project),
            [
                'category_id' => $category->id,
                'slug' => 'test-project',
                'short_description' => 'Description',
                'description' => 'Full description',
                'status' => 1,
            ]
        );

        $response->assertSessionHasErrors('title');
    }



    public function test_admin_can_delete_project(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->delete(
            route('admin.projects.destroy', $project)
        );

        $response->assertRedirect(route('admin.projects.index') . '?page=1');
        $this->assertDatabaseMissing('projects', [
            'id' => $project->id,
        ]);
    }


    public function test_admin_can_attach_features_to_project(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $featureCategory = \App\Models\FeatureCategory::create([
            'name' => 'Design',
            'slug' => 'design',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $feature = \App\Models\Feature::create([
            'feature_category_id' => $featureCategory->id,
            'name' => 'Responsive Design',
            'slug' => 'responsive-design',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->put(
            route('admin.projects.update', $project),
            [
                'category_id' => $category->id,
                'title' => 'Test Project',
                'primary_image' => 'test-image.jpg',
                'slug' => 'test-project',
                'short_description' => 'Description',
                'description' => 'Full description',
                'status' => 1,
                'feature_ids' => [$feature->id],
            ]
        );

        $response->assertRedirect(route('admin.projects.index'));

        $this->assertDatabaseHas('feature_project', [
            'project_id' => $project->id,
            'feature_id' => $feature->id,
        ]);
    }

    public function test_project_update_rejects_nonexistent_feature(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->put(
            route('admin.projects.update', $project),
            [
                'category_id' => $category->id,
                'title' => 'Test Project',
                'primary_image' => 'test-image.jpg',
                'slug' => 'test-project',
                'short_description' => 'Description',
                'description' => 'Full description',
                'status' => 1,
                'feature_ids' => [999999],
            ]
        );

        $response->assertSessionHasErrors('feature_ids.0');
    }

    public function test_admin_can_create_project_with_images(): void
    {
        Storage::fake('public');

        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->post(
            route('admin.projects.store'),
            [
                'category_id' => $category->id,
                'title' => 'Project With Images',
                'slug' => 'project-with-images',
                'short_description' => 'Description',
                'description' => 'Full description',
                'status' => 1,
                'primary_image' => UploadedFile::fake()->image('main.jpg'),
                'images' => [
                    UploadedFile::fake()->image('gallery-1.jpg'),
                    UploadedFile::fake()->image('gallery-2.jpg'),
                ],
            ]
        );

        $response->assertRedirect(route('admin.projects.index'));

        $this->assertDatabaseHas('projects', [
            'slug' => 'project-with-images',
        ]);

        $this->assertDatabaseCount('project_images', 2);
    }

    public function test_project_creation_rejects_invalid_primary_image(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->post(
            route('admin.projects.store'),
            [
                'category_id' => $category->id,
                'title' => 'Invalid Image Project',
                'slug' => 'invalid-image-project',
                'short_description' => 'Description',
                'description' => 'Full description',
                'status' => 1,
                'primary_image' => UploadedFile::fake()->create(
                    'document.pdf',
                    100,
                    'application/pdf'
                ),
                'images' => [
                    UploadedFile::fake()->image('gallery.jpg'),
                ],
            ]
        );

        $response->assertSessionHasErrors('primary_image');

        $this->assertDatabaseMissing('projects', [
            'slug' => 'invalid-image-project',
        ]);
    }



    public function test_project_slug_must_be_unique(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Project::create([
            'category_id' => $category->id,
            'title' => 'First Project',
            'slug' => 'same-slug',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->post(route('admin.projects.store'), [
            'category_id' => $category->id,
            'title' => 'Second Project',
            'slug' => 'same-slug',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
            'primary_image' => UploadedFile::fake()->image('main.jpg'),
            'images' => [
                UploadedFile::fake()->image('gallery.jpg'),
            ],
        ]);

        $response->assertSessionHasErrors('slug');

        $this->assertDatabaseCount('projects', 1);
    }


    public function test_project_update_rejects_invalid_project_url(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->put(
            route('admin.projects.update', $project),
            [
                'category_id' => $category->id,
                'title' => 'Test Project',
                'primary_image' => 'test-image.jpg',
                'slug' => 'test-project',
                'short_description' => 'Description',
                'description' => 'Full description',
                'status' => 1,
                'project_url' => 'not-a-url',
            ]
        );

        $response->assertSessionHasErrors('project_url');
    }

    public function test_project_update_rejects_invalid_github_url(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->put(
            route('admin.projects.update', $project),
            [
                'category_id' => $category->id,
                'title' => 'Test Project',
                'primary_image' => 'test-image.jpg',
                'slug' => 'test-project',
                'short_description' => 'Description',
                'description' => 'Full description',
                'status' => 1,
                'github_url' => 'not-a-url',
            ]
        );

        $response->assertSessionHasErrors('github_url');
    }


    public function test_admin_cannot_delete_another_project_gallery_image(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $firstProject = Project::create([
            'category_id' => $category->id,
            'title' => 'First Project',
            'slug' => 'first-project',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $secondProject = Project::create([
            'category_id' => $category->id,
            'title' => 'Second Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'second-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $image = ProjectImage::create([
            'project_id' => $firstProject->id,
            'image' => 'gallery.jpg',
        ]);

        $response = $this->delete(
            route('admin.projects.images.destroy', $secondProject),
            ['image_id' => $image->id]
        );

        $response->assertSessionHasErrors('image_id');

        $this->assertDatabaseHas('project_images', [
            'id' => $image->id,
        ]);
    }


    public function test_project_creation_rejects_invalid_gallery_image(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->post(route('admin.projects.store'), [
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
            'primary_image' => UploadedFile::fake()->image('main.jpg'),
            'images' => [
                UploadedFile::fake()->create('document.pdf', 100, 'application/pdf'),
            ],
        ]);

        $response->assertSessionHasErrors('images.0');
    }

    public function test_project_creation_requires_category(): void
    {
        $response = $this->post(route('admin.projects.store'), [
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
            'primary_image' => UploadedFile::fake()->image('main.jpg'),
            'images' => [
                UploadedFile::fake()->image('gallery.jpg'),
            ],
        ]);

        $response->assertSessionHasErrors('category_id');
    }



    public function test_project_creation_rejects_nonexistent_category(): void
    {
        $response = $this->post(route('admin.projects.store'), [
            'category_id' => 999999,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
            'primary_image' => UploadedFile::fake()->image('main.jpg'),
            'images' => [
                UploadedFile::fake()->image('gallery.jpg'),
            ],
        ]);

        $response->assertSessionHasErrors('category_id');
    }


    public function test_project_creation_rejects_invalid_status(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->post(route('admin.projects.store'), [
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 'invalid',
            'primary_image' => UploadedFile::fake()->image('main.jpg'),
            'images' => [
                UploadedFile::fake()->image('gallery.jpg'),
            ],
        ]);

        $response->assertSessionHasErrors('status');
    }


    public function test_project_has_gallery_images(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        ProjectImage::create([
            'project_id' => $project->id,
            'image' => 'gallery.jpg',
        ]);

        $this->assertDatabaseHas('project_images', [
            'project_id' => $project->id,
            'image' => 'gallery.jpg',
        ]);

        $this->assertCount(1, $project->images);
    }



    public function test_project_update_rejects_duplicate_slug(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Project::create([
            'category_id' => $category->id,
            'title' => 'First Project',
            'slug' => 'first-project',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Second Project',
            'slug' => 'second-project',
            'primary_image' => 'test-image.jpg',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->put(route('admin.projects.update', $project), [
            'category_id' => $category->id,
            'title' => 'Second Project',
            'slug' => 'first-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response->assertSessionHasErrors('slug');
    }

    public function test_project_update_rejects_nonexistent_category(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response = $this->put(route('admin.projects.update', $project), [
            'category_id' => 999999,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $response->assertSessionHasErrors('category_id');
    }

    public function test_deleting_project_also_deletes_gallery_records(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        ProjectImage::create([
            'project_id' => $project->id,
            'image' => 'gallery-1.jpg',
        ]);

        ProjectImage::create([
            'project_id' => $project->id,
            'image' => 'gallery-2.jpg',
        ]);

        $this->delete(route('admin.projects.destroy', $project));

        $this->assertDatabaseMissing('projects', [
            'id' => $project->id,
        ]);

        $this->assertDatabaseMissing('project_images', [
            'project_id' => $project->id,
        ]);
    }


    public function test_project_can_have_multiple_features(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $featureCategory = \App\Models\FeatureCategory::create([
            'name' => 'Design',
            'slug' => 'design',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $features = [];

        foreach (['Responsive', 'SEO', 'Fast Loading'] as $name) {
            $features[] = \App\Models\Feature::create([
                'feature_category_id' => $featureCategory->id,
                'name' => $name,
                'slug' => \Illuminate\Support\Str::slug($name),
                'sort_order' => 1,
                'is_active' => true,
            ]);
        }

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $project->features()->attach(
            collect($features)->pluck('id')->all()
        );

        $this->assertCount(3, $project->features()->get());
    }


    public function test_project_can_detach_feature(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $featureCategory = \App\Models\FeatureCategory::create([
            'name' => 'Design',
            'slug' => 'design',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $feature = \App\Models\Feature::create([
            'feature_category_id' => $featureCategory->id,
            'name' => 'Responsive',
            'slug' => 'responsive',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'test-project',
            'short_description' => 'Description',
            'description' => 'Full description',
            'status' => 1,
        ]);

        $project->features()->attach($feature->id);
        $project->features()->detach($feature->id);

        $this->assertDatabaseMissing('feature_project', [
            'project_id' => $project->id,
            'feature_id' => $feature->id,
        ]);
    }



    public function test_project_edit_page_displays_project_information(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Moradix Test Project',
            'primary_image' => 'test-image.jpg',
            'slug' => 'moradix-test-project',
            'short_description' => 'Project short description',
            'description' => 'Project full description',
            'status' => 1,
        ]);

        $this->get(route('admin.projects.edit', $project))
            ->assertOk()
            ->assertSee('Moradix Test Project')
            ->assertSee('moradix-test-project');
    }
}
