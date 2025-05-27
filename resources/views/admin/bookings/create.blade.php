@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <h2 class="text-xl font-semibold mb-4">Create New Booking</h2>
        <form action="{{ route('admin.bookings.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer ID</label>
                <input type="text" class="form-control border p-2 w-full" name="customer_id" required>
            </div>

            <div class="mb-3">
                <label for="driver_id" class="form-label">Driver ID</label>
                <input type="text" class="form-control border p-2 w-full" name="driver_id" required>
            </div>

            <div class="mb-3">
                <label for="truck_category_id" class="form-label">Truck Category</label>
                <select name="truck_category_id" class="form-control border p-2 w-full">
                    <option value="">Select Category</option>
                    @foreach ($truckCategories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="pickup_location" class="form-label">Pickup Location</label>
                <input type="text" class="form-control border p-2 w-full" name="pickup_location" required>
            </div>

            <div class="mb-3">
                <label for="dropoff_location" class="form-label">Dropoff Location</label>
                <input type="text" class="form-control border p-2 w-full" name="dropoff_location" required>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Book Now</button>
        </form>
    </div>
@endsection
