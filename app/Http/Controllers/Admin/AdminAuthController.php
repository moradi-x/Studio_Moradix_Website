<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

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
    $request->validate([
        'name' => ['required', 'string'],
        'password' => ['required', 'string'],
    ]);

    $key = 'admin-login:' . $request->ip();

    if (RateLimiter::tooManyAttempts($key, 5)) {
        return back()->withErrors([
            'password' => 'تعداد تلاش‌های ناموفق زیاد است. کمی بعد دوباره امتحان کنید.',
        ])->onlyInput('name');
    }

    $admin = Admin::first();

    if (
        !$admin ||
        $request->name !== $admin->name ||
        !Hash::check($request->password, $admin->password)
    ) {
        RateLimiter::hit($key, 60);

        return back()->withErrors([
            'password' => 'نام کاربری یا رمز عبور اشتباه است.',
        ])->onlyInput('name');
    }

    RateLimiter::clear($key);

    Auth::guard('admin')->login($admin);

    $request->session()->regenerate();

    return redirect()->intended(route('admin.dashboard'));
}

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
