<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard'); // views/customer/dashboard.blade.php
    }

    public function bookRide()
    {
        return view('customer.book'); // views/customer/book.blade.php
    }

    public function history()
    {
        return view('customer.history'); // views/customer/history.blade.php
    }
    public function index()
{
    return view('customer.index');
}

}

