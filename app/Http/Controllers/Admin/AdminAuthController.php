<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Log;


class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => ['bail', 'required', 'string', 'max:255'],
            'password' => ['bail', 'required', 'string', 'max:255'],
        ]);
        $userAgent = $request->userAgent();

        // محدودیت بر اساس IP
        $ipKey = 'admin-login:ip:' . $request->ip();

        // محدودیت بر اساس IP و نام کاربری
        $identityKey = 'admin-login:identity:' . hash(
            'sha256',
            $request->ip() . '|' . trim($validated['name'])
        );

        // بررسی هر دو محدودیت
        if (
            RateLimiter::tooManyAttempts($ipKey, 5) ||
            RateLimiter::tooManyAttempts($identityKey, 5)
        ) {
            Log::channel('security')->warning('Admin login rate limit exceeded', [
                'username' => $validated['name'],
                'ip' => $request->ip(),
                'user_agent' => $userAgent,
                'request_id' => $request->attributes->get('request_id'),
            ]);

            return back()->withErrors([
                'password' => 'تعداد تلاش‌های ناموفق زیاد است. کمی بعد دوباره امتحان کنید.',
            ])->onlyInput('name');
        }

        $admin = Admin::first();

        if (
            !$admin ||
            $validated['name'] !== $admin->name ||
            !Hash::check($validated['password'], $admin->password)
        ) {
            RateLimiter::hit($ipKey, 60);
            RateLimiter::hit($identityKey, 60);

            Log::channel('security')->warning('Admin login failed', [
                'username' => $validated['name'],
                'ip' => $request->ip(),
                'user_agent' => $userAgent,
                'request_id' => $request->attributes->get('request_id'),
            ]);

            return back()->withErrors([
                'password' => 'نام کاربری یا رمز عبور اشتباه است.',
            ])->onlyInput('name');
        }

        // پاک‌کردن محدودیت‌ها پس از ورود موفق
        RateLimiter::clear($ipKey);
        RateLimiter::clear($identityKey);

        // ورود مدیر
        Auth::guard('admin')->login($admin);

        Log::channel('security')->info('Admin login successful', [
            'admin_id' => $admin->getKey(),
            'username' => $admin->name,
            'ip' => $request->ip(),
            'user_agent' => $userAgent,
            'request_id' => $request->attributes->get('request_id'),
        ]);

        // جلوگیری از Session Fixation
        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function logout(Request $request)
    {
        Log::channel('security')->info('Admin logout successful', [
            'admin_id' => Auth::guard('admin')->id(),
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'request_id' => $request->attributes->get('request_id'),
        ]);

        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
