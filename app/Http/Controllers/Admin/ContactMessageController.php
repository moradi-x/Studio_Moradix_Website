<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $contactMessages = ContactMessage::query()
            ->latest()
            ->paginate(10);

        return view(
            'admin.ContactMessage.index',
            compact('contactMessages')
        );
    }

    public function show(ContactMessage $contactMessage)
    {
        return view(
            'admin.ContactMessage.show',
            compact('contactMessage')
        );
    }

    public function destroy(Request $request, ContactMessage $contactMessage)
    {
        $name = $contactMessage->name;

        $contactMessage->delete();

        $page = $request->input('page', 1);

        return redirect()
            ->route('admin.contact-messages.index', ['page' => $page])
            ->with(
                'deleted',
                'پیام «' . $name . '» با موفقیت حذف شد.'
            );
    }
}
