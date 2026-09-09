<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Inertia\Inertia;

class ProjectController extends Controller
{

    public function index()
    {
        return Inertia::render('Projects',[
            'projects' => Project::latest()->get()
        ]);
    }

    public function show($slug)
{
    $project = Project::where('slug',$slug)->firstOrFail();

    return Inertia::render('ProjectDetail',[
        'project'=>$project
    ]);
}

}