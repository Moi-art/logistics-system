@extends('layouts.app')

@section('content')
    <h2>Create New Booking</h2>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer ID</label>
            <input type="text" class="form-control" name="customer_id" required>
        </div>
        <div class="mb-3">
            <label for="driver_id" class="form-label">Driver ID</label>
            <input type="text" class="form-control" name="driver_id" required>
        </div>
        <div class="mb-3">
            <label for="pickup_location" class="form-label">Pickup Location</label>
            <input type="text" class="form-control" name="pickup_location" required>
        </div>
        <div class="mb-3">
            <label for="dropoff_location" class="form-label">Dropoff Location</label>
            <input type="text" class="form-control" name="dropoff_location" required>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
@endsection
