<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectRequest;
use App\Models\Service;
use App\Models\SiteVisit;
use App\Models\Technology;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | آمار اصلی
        |--------------------------------------------------------------------------
        */

        $projectsCount = Project::count();

        $featuredProjectsCount = Project::where(
            'featured',
            true
        )->count();

        $activeProjectsCount = Project::where(
            'status',
            true
        )->count();

        $newRequestsCount = ProjectRequest::where(
            'status',
            'new'
        )->count();
        // بازدید ۲۴ ساعت اخیر

        $visitsLast24Hours = SiteVisit::where(
            'created_at',
            '>=',
            now()->subHours(24)
        )->count();

        $categoriesCount = Category::count();

        $technologiesCount = Technology::count();

        $servicesCount = Service::count();


        /*
        |--------------------------------------------------------------------------
        | بازدید امروز
        |--------------------------------------------------------------------------
        */

        $todayVisits = SiteVisit::whereDate(
            'visit_date',
            today()
        )->count();


        /*
        |--------------------------------------------------------------------------
        | بازدیدکننده یکتا در 30 روز اخیر
        |--------------------------------------------------------------------------
        */

        $uniqueVisitors = SiteVisit::where(
            'visit_date',
            '>=',
            today()->subDays(29)
        )
            ->distinct('session_hash')
            ->count('session_hash');


        /*
        |--------------------------------------------------------------------------
        | نمودار بازدید 30 روز اخیر
        |--------------------------------------------------------------------------
        */

        $visitData = SiteVisit::query()
            ->select(
                'visit_date',
                DB::raw('COUNT(*) as visits')
            )
            ->where(
                'visit_date',
                '>=',
                today()->subDays(29)
            )
            ->groupBy('visit_date')
            ->orderBy('visit_date')
            ->get();

        $visitsChart = collect(
            range(29, 0)
        )->map(function ($daysAgo) use ($visitData) {

            $date = today()
                ->subDays($daysAgo)
                ->toDateString();

            $item = $visitData->firstWhere(
                'visit_date',
                $date
            );

            return [
                'date' => $date,
                'visits' => $item
                    ? (int) $item->visits
                    : 0,
            ];
        });


        /*
        |--------------------------------------------------------------------------
        | وضعیت درخواست‌ها
        |--------------------------------------------------------------------------
        */

        $requestsByStatus = [
            'new' => ProjectRequest::where(
                'status',
                'new'
            )->count(),

            'contacted' => ProjectRequest::where(
                'status',
                'contacted'
            )->count(),

            'completed' => ProjectRequest::where(
                'status',
                'completed'
            )->count(),

            'rejected' => ProjectRequest::where(
                'status',
                'rejected'
            )->count(),
        ];


        /*
        |--------------------------------------------------------------------------
        | آخرین درخواست‌ها
        |--------------------------------------------------------------------------
        */

        $latestRequests = ProjectRequest::with(
            'category'
        )
            ->latest()
            ->take(6)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | آخرین پروژه‌ها
        |--------------------------------------------------------------------------
        */

        $latestProjects = Project::with([
            'category',
            'technologies',
        ])
            ->latest()
            ->take(6)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | محبوب‌ترین تکنولوژی‌ها
        |--------------------------------------------------------------------------
        */

        $popularTechnologies = Technology::withCount(
            'projects'
        )
            ->orderByDesc('projects_count')
            ->take(6)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | پروژه‌ها بر اساس دسته‌بندی
        |--------------------------------------------------------------------------
        */

        $projectsByCategory = Category::withCount(
            'projects'
        )
            ->orderByDesc('projects_count')
            ->take(6)
            ->get();


        return view(
            'admin.dashboard',
            compact(
                'projectsCount',
                'featuredProjectsCount',
                'activeProjectsCount',
                'newRequestsCount',
                'categoriesCount',
                'technologiesCount',
                'servicesCount',
                'todayVisits',
                'uniqueVisitors',
                'visitsChart',
                'requestsByStatus',
                'latestRequests',
                'latestProjects',
                'popularTechnologies',
                'projectsByCategory' ,
                'visitsLast24Hours',
            )
        );
    }
}
