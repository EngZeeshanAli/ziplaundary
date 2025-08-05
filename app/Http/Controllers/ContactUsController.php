<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        // Send email
        Mail::to('support@zipmylaundry.co.uk')->send(new ContactFormMail($validated));

        return redirect()->back()->with('success', 'Thanks for contacting us! We’ll be in touch shortly.');
    }
}
