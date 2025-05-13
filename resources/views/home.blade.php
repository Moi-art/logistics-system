@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-blue-50 to-white min-h-screen p-10">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">TransLink EA</h1>
        <p class="text-lg text-gray-600 mb-6">Connect. Deliver. Empower East Africa.</p>
        <p class="text-md text-gray-700 mb-10">
            TransLink EA is your trusted logistics platform connecting carriers and shippers across East Africa.
            We simplify freight management and enable seamless cargo transportation throughout the region.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Customer Card -->
            <div class="bg-white rounded shadow p-6">
                <h3 class="text-xl font-semibold mb-2">Customer</h3>
                <p class="text-sm text-gray-600 mb-4">Book and manage your logistics quickly and easily.</p>
                <a href="{{ route('customer.index') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Customer Dashboard
                </a>
            </div>

            <!-- Driver Card -->
            <div class="bg-white rounded shadow p-6">
                <h3 class="text-xl font-semibold mb-2">Driver</h3>
                <p class="text-sm text-gray-600 mb-4">View your ride requests and profile information.</p>
                <a href="{{ route('driver.index') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                    Driver Dashboard
                </a>
            </div>

            <!-- Bookings Card -->
            <div class="bg-white rounded shadow p-6">
                <h3 class="text-xl font-semibold mb-2">Bookings</h3>
                <p class="text-sm text-gray-600 mb-4">Manage and track bookings.</p>
                <a href="{{ route('booking.index') }}" class="inline-block px-4 py-2 bg-cyan-600 text-white rounded hover:bg-cyan-700">
                    Booking Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

