@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-2xl font-semibold mb-4">All Bookings</h2>

        <table class="min-w-full border divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Customer</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Driver</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Vehicle</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Pickup</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Dropoff</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach ($bookings as $booking)
                    <tr>
                        <td class="py-2 px-4 text-gray-900">{{ $booking->customer->user->name }}</td>
                        <td class="py-2 px-4 text-gray-900">{{ $booking->driver->user->name }}</td>
                        <td class="py-2 px-4 text-gray-900">{{ $booking->vehicle->plate_number }}</td>
                        <td class="py-2 px-4 text-gray-900">{{ $booking->pickup_location }}</td>
                        <td class="py-2 px-4 text-gray-900">{{ $booking->dropoff_location }}</td>
                        <td class="py-2 px-4">
                            <span class="inline-block px-2 py-1 text-xs font-medium rounded bg-green-100 text-green-700">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
