@extends('layouts.app')

@section('title', 'All Bookings')

@section('content')
    <h1>Bookings</h1>
    <ul>
        @foreach($bookings as $booking)
            <li>{{ $booking->pickup_location }} → {{ $booking->dropoff_location }} ({{ $booking->status }})</li>
        @endforeach
    </ul>
@endsection
