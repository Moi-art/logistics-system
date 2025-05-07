<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking.create'); // views/booking/create.blade.php
    }

    public function store(Request $request)
    {
        // Logic to store booking
        return redirect()->back()->with('success', 'Booking successful!');
    }

    public function list()
    {
        return view('booking.list'); // views/booking/list.blade.php
    }
}
