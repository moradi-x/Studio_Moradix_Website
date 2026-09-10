<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProjectRequest;
use Illuminate\Http\Request;

class ProjectRequestController extends Controller
{
    public function index()
    {
        $projectRequests = ProjectRequest::with('category')
            ->latest()
            ->paginate(10);

        return view('admin.project_requests.index', compact('projectRequests'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.project_requests.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'budget' => 'nullable|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:new,contacted,completed,rejected',
        ]);

        $projectRequest = ProjectRequest::create($validated);

        return redirect()
            ->route('admin.project-requests.index')
            ->with(
                'success',
                'درخواست پروژه «' . $projectRequest->name . '» با موفقیت ایجاد شد.'
            );
    }

    public function show(ProjectRequest $projectRequest)
    {
        $projectRequest->load('category');

        return view('admin.project_requests.show', compact('projectRequest'));
    }

    public function edit(ProjectRequest $projectRequest)
    {
        $categories = Category::orderBy('name')->get();

        return view(
            'admin.project_requests.edit',
            compact('projectRequest', 'categories')
        );
    }

    public function update(Request $request, ProjectRequest $projectRequest)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'budget' => 'nullable|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:new,contacted,completed,rejected',
        ]);

        $projectRequest->update($validated);

        return redirect()
            ->route('admin.project-requests.index')
            ->with(
                'success',
                'درخواست پروژه «' . $projectRequest->name . '» با موفقیت ویرایش شد.'
            );
    }

    public function destroy(ProjectRequest $projectRequest)
    {
        $name = $projectRequest->name;

        $projectRequest->delete();

        return redirect()
            ->route('admin.project-requests.index')
            ->with(
                'success',
                'درخواست پروژه «' . $name . '» با موفقیت حذف شد.'
            );
    }
}