@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="text-2xl font-bold mb-4">Bookings</h1>
                <a href="{{ route('admin.bookings.create') }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add
                    Booking</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Driver</th>
                            <th>Pickup</th>
                            <th>Destination</th>
                            <th>Status</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $booking->customer->name ?? 'N/A' }}</td>
                                <td>{{ $booking->driver->name ?? 'N/A' }}</td>
                                <td>{{ $booking->pickup_location }}</td>
                                <td>{{ $booking->dropoff_location }}</td>
                                <td>
                                    <span class="badge bg-{{ $booking->status === 'completed' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                                <td>{{ $booking->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </div>
@endsection
