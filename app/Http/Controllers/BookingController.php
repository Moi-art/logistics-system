<?php
namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\TruckCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $drivers = Driver::all();
        $customers = Customer::all();

        return view('admin.bookings.create', compact('drivers', 'customers'));

    }

    public function store(Request $request)
    {
    //    $request->validate([
    //         'customer_id' => Auth::user()->id,
    //     ]);

        Booking::create($request->all());

        return redirect()->route('admin.bookings.index');
    }

}

