@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-2xl font-bold mb-4">Drivers</h1>
            <a href="{{ route('admin.drivers.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add
                Driver</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.drivers.store') }}">
                @csrf
                <input type="text" name="name" placeholder="Driver Name" class="form-control border p-2 w-full mb-3">
                <input type="email" name="email" placeholder="Driver Email" class="form-control border p-2 w-full mb-3">
                <input type="phone" name="phone" placeholder="Driver Phone" class="form-control border p-2 w-full mb-3">
                <input type="text" name="address" placeholder="Driver Address" class="form-control border p-2 w-full mb-3">
                <input type="text" name="license_number" placeholder="License Number" class="form-control border p-2 w-full mb-3">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
            </form>
        </div>
    </div>
@endsection
