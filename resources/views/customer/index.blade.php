@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Customers</h1>
    <a href="{{ route('admin.customers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Customer</a>

    @extends('layouts.app')

@section('content')
<div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Customers</h1>
    @foreach ($customers as $customer)
        <div class="p-2 border mb-2">
            {{ $customer->name }}
        </div>
    @endforeach
</div>
@endsection


    <ul>
        @foreach($customers as $customer)
            <li>{{ $customer->name }}
                <a href="{{ route('admin.customers.show', $customer->id) }}">View</a> |
                <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection

