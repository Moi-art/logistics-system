@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add Customer</h1>

    <form action="{{ route('admin.customers.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Customer Name" class="border p-2 w-full">
        <input type="text" name="email" placeholder="Email" class="border p-2 w-full">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
