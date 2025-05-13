@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold mb-6">Customer Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Book a Ride -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition-all border">
            <h2 class="text-lg font-bold mb-2 text-blue-600">Book a Ride</h2>
            <p class="text-gray-600">Quickly request a logistics ride based on your needs.</p>
            <a href="{{ route('customer.book') }}" class="btn btn-primary mt-3">Book Now</a>
        </div>

        <!-- Ride History -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition-all border">
            <h2 class="text-lg font-bold mb-2 text-blue-600">Ride History</h2>
            <p class="text-gray-600">View your completed and past bookings.</p>
            <a href="{{ route('customer.history') }}" class="btn btn-outline-primary mt-3">View History</a>
        </div>

        <!-- Profile (optional future link) -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition-all border">
            <h2 class="text-lg font-bold mb-2 text-blue-600">Your Profile</h2>
            <p class="text-gray-600">Manage your personal info and preferences.</p>
            <a href="#" class="btn btn-secondary mt-3 disabled">Coming Soon</a>
        </div>
    </div>
@endsection
