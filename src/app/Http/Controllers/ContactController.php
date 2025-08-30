<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
    return view('index');
    }

    public function confirm(ContactRequest $request)
    {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
        // dd($contact);
    // return view('confirm', compact('contact'));
    Contact::create($contact);
        return view('thanks');
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}