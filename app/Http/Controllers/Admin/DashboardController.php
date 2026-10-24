<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Project;
use App\Models\SiteVisit;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // پروژه‌ها
        $projectsCount = Project::count();

        $activeProjectsCount = Project::where('status', true)->count();

        // پیام‌ها و درخواست‌های واقعی
        $newRequestsCount = ContactMessage::count();

        $messagesByType = ContactMessage::query()
            ->select('request_type', DB::raw('COUNT(*) as total'))
            ->groupBy('request_type')
            ->get();

        $latestRequests = ContactMessage::query()
            ->latest()
            ->take(6)
            ->get();

        // بازدید ۲۴ ساعت اخیر
        $visitsLast24Hours = SiteVisit::where(
            'created_at',
            '>=',
            now()->subHours(24)
        )->count();

        $categoriesCount = Category::count();

        // بازدید امروز
        $todayVisits = SiteVisit::whereDate(
            'visit_date',
            today()
        )->count();

        // بازدیدکننده یکتا در ۳۰ روز اخیر
        $uniqueVisitors = SiteVisit::where(
            'visit_date',
            '>=',
            today()->subDays(29)
        )
            ->distinct('session_hash')
            ->count('session_hash');

        // نمودار بازدید ۳۰ روز اخیر
        $visitData = SiteVisit::query()
            ->select('visit_date', DB::raw('COUNT(*) as visits'))
            ->where('visit_date', '>=', today()->subDays(29))
            ->groupBy('visit_date')
            ->orderBy('visit_date')
            ->get();

        $visitsChart = collect(range(29, 0))->map(
            function ($daysAgo) use ($visitData) {
                $date = today()->subDays($daysAgo)->toDateString();

                $item = $visitData->firstWhere('visit_date', $date);

                return [
                    'date' => $date,
                    'visits' => $item ? (int) $item->visits : 0,
                ];
            }
        );

        // پروژه‌های اخیر
        $latestProjects = Project::with('category')
            ->latest()
            ->take(6)
            ->get();

        // پروژه‌ها بر اساس دسته‌بندی
        $projectsByCategory = Category::withCount('projects')
            ->orderByDesc('projects_count')
            ->take(6)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'projectsCount',
                'activeProjectsCount',
                'newRequestsCount',
                'messagesByType',
                'categoriesCount',
                'todayVisits',
                'uniqueVisitors',
                'visitsChart',
                'latestRequests',
                'latestProjects',
                'projectsByCategory',
                'visitsLast24Hours',
            )
        );
    }
}
