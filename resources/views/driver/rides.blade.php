@extends('layouts.app')

@section('content')
    <h2>Driver Rides</h2>
    <ul class="list-group">
        @foreach($rides as $ride)
            <li class="list-group-item">
                Ride ID: {{ $ride->id }} | Customer: {{ $ride->customer_id }} | From {{ $ride->pickup_location }} to {{ $ride->dropoff_location }}
            </li>
        @endforeach
    </ul>
@endsection
