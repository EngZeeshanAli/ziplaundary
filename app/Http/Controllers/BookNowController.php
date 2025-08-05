<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmation;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookNowController extends Controller
{

    public function index()
    {
        return view('book');
    }

    // app/Http/Controllers/BookingController.php
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'pickup_date' => 'required|date',
            'pickup_time' => 'required',
            'bag_size' => 'required|string',
            'special_instructions' => 'nullable|string',
            'subscribe' => 'nullable',
        ]);

        $data['subscribe'] = $request->has('subscribe');

        $booking = Booking::create($data);

        // Only send email if provided
        if (!empty($booking->email)) {
            Mail::to($booking->email)->send(new BookingConfirmation($booking));
        }

        Mail::to("support@zipmylaundry.co.uk")->send(new BookingConfirmation($booking));

        return redirect()->back()->with('success', 'Booking Confirmed!');
    }


}
