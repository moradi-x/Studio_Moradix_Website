<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\PlanPrice;
use App\Models\Project;
use App\Models\StudioService;
use App\Models\StudioTechnology;
use Illuminate\Support\Facades\Log;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;



class HomeController extends Controller
{
    // app/Http/Controllers/Home/HomeController.php
    public function index()
    {

        $studioServices = StudioService::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $techStack = StudioTechnology::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $featuredProjects = Project::with(['category', 'features'])
            ->latest()
            ->take(3)
            ->get();

        $projects = Project::with(['category', 'features'])
            ->latest()
            ->take(3)
            ->get();

        return view('home.index', compact(
            'studioServices',
            'techStack',
            'featuredProjects',
            'projects'
        ));
    }

    public function about()
    {
        return view('Home.about');
    }

    // app/Http/Controllers/Home/HomeController.php
    public function contact()
    {

        // $settings = Setting::all();
        $settings = Setting::pluck('value', 'key')->toArray();

        // dd($settings);

        return view('Home.contact', compact('settings'));
    }


    public function contactUsForm(Request $request)
    {
        $key = 'contact-form:' . $request->ip();
        // $locale = app()->getLocale();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            Log::channel('security')->warning('Contact form rate limit exceeded', [
                'ip' => $request->ip(),
                'request_id' => $request->attributes->get('request_id'),
            ]);

            return redirect()->back()
                ->withErrors([
                    'contact_limit' => __('site.contact_limit'),
                ])
                ->withInput();
        }

        // Detect bots using the honeypot field
        if ($request->filled('website')) {
            Log::channel('security')->warning('Contact form honeypot triggered', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'request_id' => $request->attributes->get('request_id'),
                'path' => $request->path(),
            ]);

            return redirect()->back()->with(
                'contact_success',
                __('site.contact_success')
            );
        }

        $validator = Validator::make($request->all(), [
            'request_type' => ['required', 'in:consultation,project'],
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'phone' => ['required', 'string', 'regex:/^09[0-9]{9}$/'],
            'project_type' => [
                'required',
                'in:website-design,online-shop,wordpress-upgrade,ui-ux-redesign,seo-speed,custom-system,not-sure'
            ],
            'message' => ['nullable', 'string', 'max:2000'],
            'website' => ['nullable', 'string', 'max:0'],
        ]);

        if ($validator->fails()) {
            Log::channel('security')->warning('Contact form validation failed', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'request_id' => $request->attributes->get('request_id'),
                'path' => $request->path(),
                'failed_fields' => array_keys($validator->failed()),
            ]);

            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('website'));
        }

        $validated = $validator->validated();

        RateLimiter::hit($key, 3600);

        DB::transaction(function () use ($validated, $request) {
            $contactMessage = ContactMessage::create([
                'request_type' => $validated['request_type'],
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'project_type' => $validated['project_type'],
                'message' => $validated['message'] ?? null,
            ]);

            AdminNotification::create([
                'contact_message_id' => $contactMessage->id,
                'type' => 'contact_message',
                'title' => 'پیام جدید',
                'message' => "یک پیام جدید از طرف {$contactMessage->name} دریافت شد.",
                'url' => route('admin.contact-messages.index'),
                'is_read' => false,
            ]);

            Log::channel('application')->info('Contact message submitted successfully', [
                'contact_message_id' => $contactMessage->id,
                'request_type' => $contactMessage->request_type,
                'project_type' => $contactMessage->project_type,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'request_id' => $request->attributes->get('request_id'),
            ]);
        });

       return redirect()->back()->with(
    'contact_success',
    __('site.contact_success')
);
    }

    public function pricing()
    {

        $plans = PlanPrice::all()->keyBy('service_type');
        return view('Home.pricing', compact('plans'));
    }

    public function portfolioIndex()
    {
        $projects = Project::with(['category', 'features'])
            ->latest()
            ->get();

        $completedProjects = $projects->where('status', 1)->count();

        $developmentProjects = $projects->where('status', 0)->count();

        $pfhFa = fn($n) => strtr((string) $n, [
            '0' => '۰',
            '1' => '۱',
            '2' => '۲',
            '3' => '۳',
            '4' => '۴',
            '5' => '۵',
            '6' => '۶',
            '7' => '۷',
            '8' => '۸',
            '9' => '۹',
        ]);


        return view('Home.Portfolio.index', compact(
            'projects',
            'completedProjects',
            'developmentProjects',
            'pfhFa'
        ));
    }

    public function portfolioShow(string $slug)
    {
        $project = Project::with([
            'category',
            'features',
            'images',
        ])
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedProjects = Project::with('category')
            ->where('id', '!=', $project->id)
            ->latest()
            ->take(3)
            ->get();

        // وضعیت پروژه
        $statusLabel = $project->status == 1
            ? 'تکمیل شده'
            : 'در حال توسعه';

        // مسیر تصاویر
        $uploadPath = trim(
            env('PROJECT_IMAGES_UPLOAD_PATH', 'uploads/projects/images'),
            '/'
        );

        // تصویر اصلی پروژه
        $heroImage = $project->primary_image
            ? asset($uploadPath . '/' . $project->primary_image)
            : null;

        // توضیحات پروژه
        $description = $project->description ?? '';

        // ویژگی‌های پروژه
        $projectFeatures = $project->features;

        // دسته‌بندی پروژه
        $projectCategory = $project->category;

        $categoryName = $projectCategory->name
            ?? $projectCategory->title
            ?? null;

        // تصاویر گالری
        $galleryImages = collect();

        if ($project->primary_image) {
            $galleryImages->push([
                'path' => $heroImage,
                'alt' => $project->title . ' - تصویر اصلی پروژه',
            ]);
        }

        foreach ($project->images as $image) {
            if ($image->image) {
                $galleryImages->push([
                    'path' => asset($uploadPath . '/' . $image->image),
                    'alt' => $project->title . ' - تصویر پروژه',
                ]);
            }
        }

        // جلوگیری از نمایش تصاویر تکراری
        $galleryImages = $galleryImages
            ->unique('path')
            ->values();

        // اطلاعات مشخصات پروژه
        $metadataItems = [
            [
                'label' => 'دسته‌بندی پروژه',
                'value' => $categoryName,
                'icon' => 'grid',
            ],
            [
                'label' => 'وضعیت پروژه',
                'value' => $statusLabel,
                'icon' => 'check-circle',
            ],
            [
                'label' => 'تعداد ویژگی‌ها',
                'value' => $projectFeatures->count()
                    ? $projectFeatures->count() . ' ویژگی ثبت‌شده'
                    : null,
                'icon' => 'layers',
            ],
            [
                'label' => 'وب‌سایت پروژه',
                'value' => $project->project_url
                    ? 'مشاهده وب‌سایت'
                    : null,
                'icon' => 'external-link',
            ],
        ];

        $metadataItems = collect($metadataItems)
            ->filter(fn($item) => filled($item['value']))
            ->values();

        return view('Home.Portfolio.show', compact(
            'project',
            'relatedProjects',
            'statusLabel',
            'heroImage',
            'description',
            'projectFeatures',
            'projectCategory',
            'categoryName',
            'galleryImages',
            'metadataItems'
        ));
    }
}
