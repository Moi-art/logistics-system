@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Book a Ride</h2>
    <form action="{{ route('booking.store') }}" method="POST" class="bg-white p-4 rounded shadow space-y-4">
        @csrf
        <div>
            <label for="origin" class="block font-medium">Origin</label>
            <input type="text" name="origin" id="origin" class="form-control" required>
        </div>
        <div>
            <label for="destination" class="block font-medium">Destination</label>
            <input type="text" name="destination" id="destination" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Confirm Booking</button>
    </form>
@endsection
