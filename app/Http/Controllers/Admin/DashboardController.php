<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Project;
use App\Models\Category;
use App\Models\Technology;
use App\Models\ProjectRequest;


class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard', [

            'stats' => [

                'projects' => Project::count(),

                'categories' => Category::count(),

                'technologies' => Technology::count(),

                'requests' => ProjectRequest::count(),

            ]

        ]);
    }

}