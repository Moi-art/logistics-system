@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-4">All Drivers</h2>
            <a href="{{ route('admin.drivers.create') }}" class="btn btn-success mb-3">Add New Driver</a>
        </div>
         <div class="card-body">
               <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th class="text-left">Driver Name</th>
                        <th class="text-left">Driver Email</th>
                        <th class="text-left">Driver Phone</th>
                        <th class="text-left">Driver Address</th>
                        <th class="text-left">Driver License Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drivers as $driver)
                        <tr>
                            <td>{{ $driver->id }}</td>
                            <td>{{ $driver->name }}</td>
                            <td>{{ $driver->email }}</td>
                            <td>{{ $driver->phone }}</td>
                            <td>{{ $driver->address }}</td>
                            <td>{{ $driver->license_number }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- <ul class="list-group">
        @foreach ($drivers as $driver)
            <li class="list-group-item">{{ $driver->name }}</li>
        @endforeach
    </ul> --}}
@endsection
