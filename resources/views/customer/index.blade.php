@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h2 class="text-3xl font-bold mb-6 text-blue-700 border-b pb-2">👤 Customer Dashboard</h2>
    <p class="mb-6 text-gray-600">Welcome! Here you can manage bookings, view history, and update your profile.</p>

    <ul class="space-y-4">
        <li>
            <a href="{{ route('booking.create') }}" class="block px-4 py-3 bg-blue-100 hover:bg-blue-200 text-blue-800 rounded-md shadow transition">
                ➕ Book a New Ride
            </a>
        </li>
        <li>
            <a href="{{ route('booking.list') }}" class="block px-4 py-3 bg-blue-100 hover:bg-blue-200 text-blue-800 rounded-md shadow transition">
                📑 View Booking History
            </a>
        </li>
        <li>
            <a href="{{ route('customer.profile') }}" class="block px-4 py-3 bg-blue-100 hover:bg-blue-200 text-blue-800 rounded-md shadow transition">
                ⚙️ Manage My Profile
            </a>
        </li>
    </ul>
</div>
@endsection

