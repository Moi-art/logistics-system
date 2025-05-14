@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h2 class="mb-4">Welcome to TransLink EA Admin Dashboard</h2>
    <p class="text-muted">Manage your logistics operations efficiently from this control panel.</p>
    @extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.customers.index') }}" class="btn btn-outline-primary w-100">👤 View Customers</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.drivers.index') }}" class="btn btn-outline-success w-100">🚚 View Drivers</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.bookings.index') }}" class="btn btn-outline-warning w-100">📦 View Bookings</a>
        </div>
    </div>
</div>
@endsection


    <div class="row justify-content-center mt-4">
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.customers.index') }}" class="btn btn-outline-primary w-100 shadow-sm">
                👤 View Customers
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.drivers.index') }}" class="btn btn-outline-success w-100 shadow-sm">
                🚚 View Drivers
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.bookings.index') }}" class="btn btn-outline-warning w-100 shadow-sm">
                📦 View Bookings
            </a>
        </div>
    </div>
</div>
@endsection
