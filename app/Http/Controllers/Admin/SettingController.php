<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::latest()->paginate(10);

        return view('Admin.Settings.index', compact('settings'));
    }

    public function create()
    {
        return view('Admin.Settings.create');
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
            ->with('success', 'تنظیم «' . $setting->key . '» با موفقیت ایجاد شد.');
    }

    public function edit(Request $request, Setting $setting)
    {
        return view('Admin.Settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $rules = [
            'key' => 'required|string|max:255|unique:settings,key,' . $setting->id,
        ];

        if ($setting->key === 'profile_image') {
            $rules['value'] = 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120';
        } else {
            $rules['value'] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        $page = $request->input('page', 1);

        if ($setting->key === 'profile_image' && $request->hasFile('value')) {
            if ($setting->value) {
                Storage::disk('public')->delete($setting->value);
            }

            $validated['value'] = $request->file('value')
                ->store('profile', 'public');
        }

        $setting->update($validated);

        return redirect()
            ->route('admin.settings.index', ['page' => $page])
            ->with('success', 'تنظیم «' . $setting->key . '» با موفقیت ویرایش شد.');
    }

    public function destroy(Request $request, Setting $setting)
    {
        $key = $setting->key;
        $page = $request->input('page', 1);

        if ($key === 'profile_image' && $setting->value) {
            Storage::disk('public')->delete($setting->value);
        }

        $setting->delete();

        return redirect()
            ->route('admin.settings.index', ['page' => $page])
            ->with('deleted', 'تنظیم «' . $key . '» با موفقیت حذف شد.');
    }
}
