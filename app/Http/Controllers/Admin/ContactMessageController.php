<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Inertia\Inertia;


class ContactMessageController extends Controller
{

    public function index()
    {

        return Inertia::render('Admin/Messages', [

            'messages' => ContactMessage::latest()->get()

        ]);

    }



    public function destroy(ContactMessage $message)
    {

        $message->delete();


        return redirect('/admin/messages');

    }

}