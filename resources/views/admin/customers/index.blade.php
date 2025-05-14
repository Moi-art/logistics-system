@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Customers</h1>
    <a href="{{ route('admin.customers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Customer</a>

    <ul class="space-y-2">
        @foreach ($customers as $customer)
            <li class="bg-white shadow p-2 rounded">{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection
