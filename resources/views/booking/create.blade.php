@extends('layouts.app')

@section('content')
<div class="bg-yellow-50 p-6 rounded-md shadow">
    <h2 class="text-2xl font-semibold mb-4">Book a Ride</h2>
    <form action="{{ route('booking.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="pickup" class="block font-medium">Pickup Location</label>
            <input type="text" id="pickup" name="pickup" class="w-full p-2 border rounded" required>
        </div>
        <div>
            <label for="dropoff" class="block font-medium">Drop-off Location</label>
            <input type="text" id="dropoff" name="dropoff" class="w-full p-2 border rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
    </form>
</div>
@endsection
