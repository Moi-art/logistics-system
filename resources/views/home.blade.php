@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-primary mb-4">Welcome to TransLink EA</h1>
        <p class="text-lg text-gray-600">Your trusted logistics and ride-sharing platform for East Africa.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Customer Panel -->
        <div class="bg-white shadow rounded-xl p-6 hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">Customer</h2>
            <p class="text-gray-600 mb-4">Book and manage your logistics quickly and easily.</p>
            <a href="{{ route('customer.dashboard') }}" class="btn btn-primary w-full">Go to Dashboard</a>
        </div>

        <!-- Driver Panel -->
        <div class="bg-white shadow rounded-xl p-6 hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold text-green-600 mb-2">Driver</h2>
            <p class="text-gray-600 mb-4">View your ride requests and profile information.</p>
            <a href="{{ route('driver.dashboard') }}" class="btn btn-success w-full">Go to Driver Panel</a>
        </div>

        <!-- Bookings Panel -->
        <div class="bg-white shadow rounded-xl p-6 hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold text-indigo-600 mb-2">Bookings</h2>
            <p class="text-gray-600 mb-4">Create, view, and manage all booking requests.</p>
            <a href="{{ route('booking.create') }}" class="btn btn-info w-full">Make a Booking</a>
        </div>
    </div>
</div>
@endsection

