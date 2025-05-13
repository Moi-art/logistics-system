@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold mb-6">Driver Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Assigned Rides -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition-all border">
            <h2 class="text-lg font-bold mb-2 text-green-600">Assigned Rides</h2>
            <p class="text-gray-600">Check all the rides you’ve been assigned.</p>
            <a href="{{ route('driver.rides') }}" class="btn btn-success mt-3">View Rides</a>
        </div>

        <!-- Profile -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition-all border">
            <h2 class="text-lg font-bold mb-2 text-green-600">Profile</h2>
            <p class="text-gray-600">Update your driver profile and license info.</p>
            <a href="{{ route('driver.profile') }}" class="btn btn-outline-success mt-3">Edit Profile</a>
        </div>

        <!-- Earnings Summary (optional/future) -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition-all border">
            <h2 class="text-lg font-bold mb-2 text-green-600">Earnings</h2>
            <p class="text-gray-600">Coming soon: Track your trip earnings.</p>
            <button class="btn btn-secondary mt-3" disabled>Coming Soon</button>
        </div>
    </div>
@endsection

