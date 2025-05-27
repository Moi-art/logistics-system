@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <h2 class="text-xl font-semibold mb-4">Booking Summary</h2>
        <ul class="list-disc ml-6">
            @foreach($bookings as $booking)
                <li class="mb-2">
                    Booking #{{ $booking->id }}: From <strong>{{ $booking->pickup_location }}</strong>
                    to <strong>{{ $booking->dropoff_location }}</strong>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
