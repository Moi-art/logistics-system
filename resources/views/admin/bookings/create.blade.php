@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-4">Create New Booking</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.bookings.store') }}">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Customer Name</label>
                    <select name="customer_id" class="form-select" required>
                        <option value="">Select Customer</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">Driver Name</label>
                    <select name="driver_id" class="form-select" required>
                        <option value="">Select Driver</option>
                        @foreach ($drivers as $driver)
                            <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pickup Location</label>
                    <input type="text" name="pickup_location" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Drop Off Location</label>
                    <input type="text" name="dropoff_location" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        </div>
    </div>
@endsection
