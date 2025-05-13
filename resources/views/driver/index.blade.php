@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h2 class="text-3xl font-bold mb-6 text-green-700 border-b pb-2">🚚 Driver Dashboard</h2>
    <p class="mb-6 text-gray-600">Track ride requests, delivery progress, and profile updates.</p>

    <ul class="space-y-4">
        <li>
            <a href="{{ route('driver.rides') }}" class="block px-4 py-3 bg-green-100 hover:bg-green-200 text-green-800 rounded-md shadow transition">
                🛣️ View Assigned Rides
            </a>
        </li>
        <li>
            <a href="{{ route('driver.deliveries') }}" class="block px-4 py-3 bg-green-100 hover:bg-green-200 text-green-800 rounded-md shadow transition">
                📦 Track Deliveries
            </a>
        </li>
        <li>
            <a href="{{ route('driver.profile') }}" class="block px-4 py-3 bg-green-100 hover:bg-green-200 text-green-800 rounded-md shadow transition">
                👤 Update Profile
            </a>
        </li>
    </ul>
</div>
@endsection
