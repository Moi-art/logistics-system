@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">📦 All Bookings</h3>

    <table class="table table-striped table-hover">
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
            @foreach($bookings as $booking)
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
@endsection

