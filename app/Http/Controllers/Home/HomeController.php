<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class HomeController extends Controller
{
    // app/Http/Controllers/Home/HomeController.php
    public function index()
    {
        return view('Home.index');
    }

    public function about()
    {
        return view('Home.about');
    }
    public function services()
    {
        return view('Home.services');
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

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return redirect()->back()
                ->withErrors([
                    'contact_limit' => 'تعداد درخواست‌های شما بیش از حد مجاز است. لطفاً بعداً دوباره تلاش کنید.',
                ])
                ->withInput();
        }

        $validated = $request->validate([
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
        RateLimiter::hit($key, 3600);

        ContactMessage::create([
            'request_type' => $validated['request_type'],
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'project_type' => $validated['project_type'],
            'message' => $validated['message'] ?? null,
        ]);

        return redirect()->back()->with(
            'contact_success',
            'پیام شما با موفقیت ارسال شد.'
        );
    }

       public function pricing()
    {


        return view('Home.pricing');
    }

}
