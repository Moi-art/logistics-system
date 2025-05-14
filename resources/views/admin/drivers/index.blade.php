@extends('layouts.app')

@section('content')
    <h2 class="mb-4">All Drivers</h2>
    <a href="{{ route('admin.drivers.create') }}" class="btn btn-success mb-3">Add New Driver</a>

    <ul class="list-group">
        @foreach ($drivers as $driver)
            <li class="list-group-item">{{ $driver->name }}</li>
        @endforeach
    </ul>
@endsection
