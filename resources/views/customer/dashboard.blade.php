@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Customer Dashboard</h2>
    <p class="mb-2">Access your rides, history, and bookings.</p>
    <a href="{{ route('customer.book') }}" class="btn btn-primary">Book a Ride</a>
@endsection

