<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\Project;
use App\Models\Category;
use App\Models\Technology;
use App\Models\ProjectRequest;


class DashboardController extends Controller
{

    public function index()
    {

        return Inertia::render('Admin/Dashboard/Index', [

            'stats' => [

                'projects' => Project::count(),

                'categories' => Category::count(),

                'technologies' => Technology::count(),

                'requests' => ProjectRequest::count(),

            ]

        ]);

    }

}