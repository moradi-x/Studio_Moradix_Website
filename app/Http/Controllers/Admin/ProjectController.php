<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    
    public function index()
    {
        return Inertia::render('Admin/Projects/Index', [
            'projects' => Project::latest()->get(),
        ]);
    }


    public function create()
    {
        return Inertia::render('Admin/Projects/Create');
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'title' => 'required|string|max:255',

            'description' => 'required|string',

            'image' => 'nullable|image|max:2048',

            'technology' => 'nullable|string',

        ]);


        if ($request->hasFile('image')) {

            $data['image'] = $request->file('image')
                ->store('projects', 'public');
        }


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
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'technology' => 'nullable|string',
        ]);


        $project->update($data);


        return redirect('/admin/projects');
    }



    public function destroy(Project $project)
    {
        $project->delete();


        return redirect('/admin/projects');
    }
}
