@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <h2 class="text-xl font-semibold mb-4">All Bookings</h2>
        <a href="{{ route('admin.bookings.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">New Booking</a>

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Customer ID</th>
                    <th class="border p-2">Driver ID</th>
                    <th class="border p-2">Pickup</th>
                    <th class="border p-2">Dropoff</th>
                    <th class="border p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td class="border p-2">{{ $booking->id }}</td>
                        <td class="border p-2">{{ $booking->customer_id }}</td>
                        <td class="border p-2">{{ $booking->driver_id }}</td>
                        <td class="border p-2">{{ $booking->pickup_location }}</td>
                        <td class="border p-2">{{ $booking->dropoff_location }}</td>
                        <td class="border p-2">
                            <a href="{{ route('admin.bookings.show', $booking->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this booking?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection



