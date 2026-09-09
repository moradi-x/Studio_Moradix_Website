<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;


class ContactController extends Controller
{

    public function store(Request $request)
    {

        $data = $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email',

            'message' => 'required|string',

        ]);


        ContactMessage::create($data);


        return redirect('/contact')
            ->with('success', 'Your message has been sent successfully.');

    }

}