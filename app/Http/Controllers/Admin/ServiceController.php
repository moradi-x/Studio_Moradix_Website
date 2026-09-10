<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
            'description' => 'required|string',
            'status' => 'nullable|boolean',
            'order' => 'required|integer|min:0',
        ]);

        $validated['status'] = $request->boolean('status');

        $service = Service::create($validated);

        return redirect()
            ->route('admin.services.index')
            ->with(
                'success',
                'سرویس «' . $service->title . '» با موفقیت ایجاد شد.'
            );
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $service->id,
            'description' => 'required|string',
            'status' => 'nullable|boolean',
            'order' => 'required|integer|min:0',
        ]);

        $validated['status'] = $request->boolean('status');

        $service->update($validated);

        return redirect()
            ->route('admin.services.index')
            ->with(
                'success',
                'سرویس «' . $service->title . '» با موفقیت ویرایش شد.'
            );
    }

    public function destroy(Service $service)
    {
        $title = $service->title;

        $service->delete();

        return redirect()
            ->route('admin.services.index')
            ->with(
                'success',
                'سرویس «' . $title . '» با موفقیت حذف شد.'
            );
    }

    public function show(Service $service)
{
    return view('admin.services.show', compact('service'));
}
}
