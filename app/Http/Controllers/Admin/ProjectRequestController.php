<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class ProjectRequestController extends Controller
{
    public function index()
    {
        $projectRequests = ContactMessage::query()
            ->latest()
            ->paginate(10);

        return view(
            'admin.project_requests.index',
            compact('projectRequests')
        );
    }

    public function show(ContactMessage $projectRequest)
    {
        return view(
            'admin.project_requests.show',
            compact('projectRequest')
        );
    }

    public function destroy(ContactMessage $projectRequest)
    {
        $name = $projectRequest->name;

        $projectRequest->delete();

        return redirect()
            ->route('admin.project-requests.index')
            ->with(
                'success',
                'پیام «' . $name . '» با موفقیت حذف شد.'
            );
    }
}