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

}