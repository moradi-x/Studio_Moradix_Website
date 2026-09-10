<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::latest()->paginate(10);

        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255|unique:settings,key',
            'value' => 'nullable|string',
        ]);

        $setting = Setting::create($validated);

        return redirect()
            ->route('admin.settings.index')
            ->with(
                'success',
                'تنظیم «' . $setting->key . '» با موفقیت ایجاد شد.'
            );
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255|unique:settings,key,' . $setting->id,
            'value' => 'nullable|string',
        ]);

        $setting->update($validated);

        return redirect()
            ->route('admin.settings.index')
            ->with(
                'success',
                'تنظیم «' . $setting->key . '» با موفقیت ویرایش شد.'
            );
    }

    public function destroy(Setting $setting)
    {
        $key = $setting->key;

        $setting->delete();

        return redirect()
            ->route('admin.settings.index')
            ->with(
                'success',
                'تنظیم «' . $key . '» با موفقیت حذف شد.'
            );
    }

    public function show(Setting $setting)
{
    return view('admin.settings.show', compact('setting'));
}
}
