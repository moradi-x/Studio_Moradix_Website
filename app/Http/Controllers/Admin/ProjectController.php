<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProjectController extends Controller
{

    public function index()
    {
        return Inertia::render('Admin/Projects/Index', [
            'projects' => Project::latest()->get()
        ]);
    }


    public function create()
    {
        return Inertia::render('Admin/Projects/Create');
    }


    public function store(Request $request)
    {
        $request->merge([
            'demo_url' => $request->demo_url ?: null,
            'github_url' => $request->github_url ?: null,
        ]);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'technology' => 'nullable|string',
            'client' => 'nullable|string',
            'category' => 'nullable|string',
            'demo_url' => 'nullable|string',
            'github_url' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request
                ->file('image')
                ->store('projects', 'public');
        }

        $data['slug'] = Str::slug($data['title']);

        Project::create($data);

        return redirect('/admin/projects');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(Project $project)
    {
        return Inertia::render('Admin/Projects/Edit', [
            'project' => $project
        ]);
    }


    public function update(Request $request, Project $project)
    {
        // dd(vars: "UPDATED");


        // $request->merge([
        //     'demo_url' => $request->demo_url ?: null,
        //     'github_url' => $request->github_url ?: null,
        // ]);

        $data = $request->validate([

            'title' => 'required|string|max:255',

            'description' => 'required|string',

            'technology' => 'nullable|string',

            'client' => 'nullable|string',

            'category' => 'nullable|string',

            'demo_url' => 'nullable|string',

            'github_url' => 'nullable|string',

            'content' => 'nullable|string',

            'image' => 'nullable|image|max:2048',

        ]);

        // dd(vars: "UPDATED");


        if ($request->hasFile('image')) {

            $data['image'] = $request
                ->file('image')
                ->store('projects', 'public');
        }


        $project->update($data);

        // dd(vars: $request->all());

        return redirect('/admin/projects');
    }



    public function destroy(Project $project)
    {
        $project->delete();


        return redirect('/admin/projects');
    }
}
