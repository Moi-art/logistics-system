@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h2 class="mb-4">Welcome to TransLink EA Admin Dashboard</h2>
    <p class="text-muted mb-5">Manage your logistics operations efficiently from this control panel.</p>

    <div class="row justify-content-center">
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
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-info w-100 shadow-sm">
                🏷️ Truck Categories
            </a>
        </div>
    </div>
</div>
@endsection
