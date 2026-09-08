<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Inertia\Inertia;
use Illuminate\Http\Request;


class ContactMessageController extends Controller
{

   public function index()
{
    return Inertia::render('Admin/Messages',[
        'messages'=>ContactMessage::latest()->get()
    ]);
}


public function store(Request $request)
{

    $data = $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required'
    ]);


    ContactMessage::create($data);


    return back();
}

}