<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\ProjectImageController;

class ProjectController extends Controller
{
public function index()
{
    $projects = Project::with(['category', 'technologies'])
        ->oldest()
        ->paginate(10);

    return view('admin.projects.index', compact('projects'));
}
    public function create() {}

    public function store(Request $request) {}

    public function show(Project $project) {}

    public function edit(Project $project) {}

    public function update(
        Request $request,
        Project $project
    ) {}

    public function destroy(Project $project) {}
}
