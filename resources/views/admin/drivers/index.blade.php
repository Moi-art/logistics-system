@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">🚚 Drivers List</h2>

    <a href="{{ route('admin.drivers.create') }}" class="btn btn-success mb-3">+ Add New Driver</a>

    @if($drivers->isEmpty())
        <p>No drivers available.</p>
    @else
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>License Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($drivers as $driver)
                <tr>
                    <td>{{ $driver->name }}</td>
                    <td>{{ $driver->phone }}</td>
                    <td>{{ $driver->license_number }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
