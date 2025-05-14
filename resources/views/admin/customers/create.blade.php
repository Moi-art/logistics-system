@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-2xl font-bold mb-4">Add Customer</h1>
            <a href="{{ route('admin.customers.index') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Back
                to Customers</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.customers.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Customer Name" class="form-control border p-2 w-full">
                <input type="email" name="email" placeholder="Customer Email" class="form-control border p-2 w-full">
                <input type="phone" name="phone" placeholder="Customer Phone" class="form-control border p-2 w-full">
                <input type="text" name="address" placeholder="Customer Address" class="form-control border p-2 w-full">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
            </form>
        </div>
    </div>

@endsection
