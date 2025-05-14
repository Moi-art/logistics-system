@extends('layouts.app')

@section('content')
    <h2>Booking Summary</h2>
    <ul class="list-group">
        @foreach($bookings as $booking)
            <li class="list-group-item">
                Booking #{{ $booking->id }}: From <strong>{{ $booking->pickup_location }}</strong> to <strong>{{ $booking->dropoff_location }}</strong>
            </li>
        @endforeach
    </ul>
@endsection
