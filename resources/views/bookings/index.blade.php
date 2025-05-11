@extends('layouts.app')

@section('title', 'Bookings')

@section('content')
<div class="py-5">
    <h2 class="text-xl font-semibold mb-4">All Bookings</h2>

    @if($bookings->count())
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Driver</th>
                        <th>Vehicle</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->customer->user->name ?? 'N/A' }}</td>
                            <td>{{ $booking->driver->user->name ?? 'N/A' }}</td>
                            <td>{{ $booking->vehicle->registration_number ?? 'N/A' }}</td>
                            <td>{{ $booking->from_location }}</td>
                            <td>{{ $booking->to_location }}</td>
                            <td>{{ ucfirst($booking->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No bookings found.</p>
    @endif
</div>
@endsection
