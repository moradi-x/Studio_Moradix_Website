<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CategoryCrudTest extends TestCase
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

    public function test_admin_can_view_categories_list(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $this->get(route('admin.categories.index'))
            ->assertOk()
            ->assertSee('Web Design');
    }

    public function test_admin_can_view_category_create_page(): void
    {
        $this->get(route('admin.categories.create'))
            ->assertOk();
    }

    public function test_admin_can_create_category(): void
    {
        $response = $this->post(route('admin.categories.store'), [
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response->assertRedirect(route('admin.categories.index'));

        $this->assertDatabaseHas('categories', [
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
    }

    public function test_category_creation_requires_name(): void
    {
        $response = $this->post(route('admin.categories.store'), [
            'slug' => 'web-design',
        ]);

        $response->assertSessionHasErrors('name');
        $this->assertDatabaseCount('categories', 0);
    }

    public function test_category_creation_requires_slug(): void
    {
        $response = $this->post(route('admin.categories.store'), [
            'name' => 'Web Design',
        ]);

        $response->assertSessionHasErrors('slug');
        $this->assertDatabaseCount('categories', 0);
    }

    public function test_category_slug_must_be_unique(): void
    {
        Category::create([
            'name' => 'First Category',
            'slug' => 'web-design',
        ]);

        $response = $this->post(route('admin.categories.store'), [
            'name' => 'Second Category',
            'slug' => 'web-design',
        ]);

        $response->assertSessionHasErrors('slug');
        $this->assertDatabaseCount('categories', 1);
    }

    public function test_admin_can_view_category_edit_page(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $this->get(route('admin.categories.edit', $category))
            ->assertOk()
            ->assertSee('Web Design');
    }

    public function test_admin_can_update_category(): void
    {
        $category = Category::create([
            'name' => 'Old Name',
            'slug' => 'old-name',
        ]);

        $response = $this->put(
            route('admin.categories.update', $category),
            [
                'name' => 'New Name',
                'slug' => 'new-name',
            ]
        );

        $response->assertRedirect(route('admin.categories.index', ['page' => 1]));

        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'name' => 'New Name',
            'slug' => 'new-name',
        ]);
    }

    public function test_category_can_keep_its_own_slug_when_updated(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->put(
            route('admin.categories.update', $category),
            [
                'name' => 'Updated Web Design',
                'slug' => 'web-design',
            ]
        );

        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'name' => 'Updated Web Design',
            'slug' => 'web-design',
        ]);
    }

    public function test_admin_can_delete_category(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $response = $this->delete(
            route('admin.categories.destroy', $category)
        );

        $response->assertRedirect(route('admin.categories.index', ['page' => 1]));

        $this->assertDatabaseMissing('categories', [
            'id' => $category->id,
        ]);
    }

    public function test_admin_can_update_project(): void
    {
        $category = Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        $project = Project::create([
            'category_id' => $category->id,
            'title' => 'Old Title',
            'slug' => 'old-title',
            'short_description' => 'Old description',
            'description' => 'Old full description',
            'status' => 1,
        ]);

        $response = $this->put(
            route('admin.projects.update', $project),
            [
                'category_id' => $category->id,
                'title' => 'Updated Project',
                'slug' => 'updated-project',
                'short_description' => 'New description',
                'description' => 'New full description',
                'status' => 0,
            ]
        );

        $response->assertRedirect(route('admin.projects.index'));

        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'title' => 'Updated Project',
            'slug' => 'updated-project',
            'status' => 0,
        ]);
    }

   

}
