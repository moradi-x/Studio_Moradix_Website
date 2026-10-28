<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\View\View;

class ServicePageController extends Controller
{
    public function index(): View
    {
        return view('Home.Services.index');
    }


    public function webDesign(): View
    {
        $relatedProjects = Project::with('category')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('Home.Services.web-design', compact('relatedProjects'));
    }


    public function ecommerce(): View
    {


         $relatedProjects = Project::with('category')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('Home.Services.ecommerc', compact('relatedProjects'));

    }

    public function seo(): View
    {

           $relatedProjects = Project::with('category')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('Home.Services.seo', compact('relatedProjects'));

    }

    public function redesign(): View
    {

           $relatedProjects = Project::with('category')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('Home.Services.redesign', compact('relatedProjects'));

    }

    public function customSystems(): View
    {

           $relatedProjects = Project::with('category')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('Home.Services.custom-systems', compact('relatedProjects'));
    }
}
