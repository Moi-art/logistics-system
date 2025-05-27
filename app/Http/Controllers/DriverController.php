<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    // Display all drivers
    public function index()
    {
        $drivers = Driver::all();
        return view('admin.drivers.index', compact('drivers'));
    }

    // Show create driver form
    public function create()
    {
        return view('admin.drivers.create');
    }

    // Store new driver
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'license_number' => 'required|string|max:100',
        ]);

        Driver::create($validated);

        return redirect()->route('admin.drivers.index')->with('success', 'Driver added successfully.');
    }
}