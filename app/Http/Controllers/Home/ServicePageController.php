<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ServicePageController extends Controller
{
    public function index(): View
    {
        // return view('Services.index');
        return view('Services');
    }

    public function webDesign(): View
    {
        return view('Home.Services.web-design');
    }

    public function ecommerce(): View
    {
        return view('Home.Services.ecommerce');
    }

    public function seo(): View
    {
        return view('Home.Services.seo');
    }

    public function redesign(): View
    {
        return view('Home.Services.redesign');
    }

    public function customSystems(): View
    {
        return view('Home.Services.custom-systems');
    }
}
