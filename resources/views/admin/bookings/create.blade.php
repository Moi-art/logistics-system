@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Create New Booking</h2>

    <form method="POST" action="{{ route('admin.bookings.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Driver Name</label>
            <input type="text" name="driver_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Pickup Location</label>
            <input type="text" name="pickup" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dropoff Location</label>
            <input type="text" name="dropoff" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
@endsection
