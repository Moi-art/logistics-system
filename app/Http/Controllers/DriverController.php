<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function dashboard()
    {
        return view('driver.dashboard'); // views/driver/dashboard.blade.php
    }

    public function rides()
    {
        return view('driver.rides'); // views/driver/rides.blade.php
    }

    public function profile()
    {
        return view('driver.profile'); // views/driver/profile.blade.php
    }
    public function index()
{
    return view('driver.index');
}


}

