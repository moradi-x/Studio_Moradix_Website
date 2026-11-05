<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Project;
use App\Models\SiteVisit;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;



class DashboardController extends Controller
{
    public function index()
    {

        // تفکیک پیام‌ها بر اساس نوع درخواست
        $messageTypes = ContactMessage::select(
            'request_type',
            DB::raw('COUNT(*) as total')
        )
            ->groupBy('request_type')
            ->get();

        $messageTypesLabels = $messageTypes->pluck('request_type');
        $messageTypesData = $messageTypes->pluck('total');
        // پروژه‌ها
        $projectsCount = Project::count();

        $activeProjectsCount = Project::where('status', true)->count();

        // پیام‌ها و درخواست‌های واقعی
        $newRequestsCount = ContactMessage::count();

        $messageTypeLabels = [
            'consultation' => 'درخواست مشاوره',
            'project' => 'درخواست پروژه',
        ];

        $messagesByType = ContactMessage::query()
            ->select('request_type', DB::raw('COUNT(*) as total'))
            ->groupBy('request_type')
            ->get()
            ->map(function ($item) use ($messageTypeLabels) {
                $item->label = $messageTypeLabels[$item->request_type] ?? 'سایر درخواست‌ها';
                $item->total = (int) $item->total;

                return $item;
            });

        $messageTypesChart = [
            'labels' => $messagesByType->pluck('label')->values(),
            'data' => $messagesByType->pluck('total')->values(),
        ];

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


        // آمار بازدید روزانه در ۷ روز اخیر

        $startDate = now()->startOfDay()->subDays(29);
        $endDate = now()->endOfDay();

        $dailyVisits = SiteVisit::selectRaw('visit_date, COUNT(*) as total')
            ->whereBetween('visit_date', [
                $startDate->toDateString(),
                $endDate->toDateString()
            ])
            ->groupBy('visit_date')
            ->pluck('total', 'visit_date');

        // آماده‌سازی اطلاعات برای نمودار
        $visitChartLabels = [];
        $visitChartData = [];

        for ($i = 0; $i < 30; $i++) {
            $date = $startDate->copy()->addDays($i);
            $dateKey = $date->toDateString();

           $visitChartLabels[] = Jalalian::fromCarbon($date)->format('%d %B');
            $visitChartData[] = (int) ($dailyVisits[$dateKey] ?? 0);
        }

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
                'messageTypesChart',
                'messageTypesLabels',
                'messageTypesData',
                'visitChartLabels',
                'visitChartData',
            )
        );
    }
}
