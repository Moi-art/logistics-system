@extends('layouts.app')

@section('content')
    <h2>All Bookings</h2>
    <a href="{{ route('bookings.create') }}" class="btn btn-success mb-3">New Booking</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Driver ID</th>
                <th>Pickup</th>
                <th>Dropoff</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->customer_id }}</td>
                    <td>{{ $booking->driver_id }}</td>
                    <td>{{ $booking->pickup_location }}</td>
                    <td>{{ $booking->dropoff_location }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

