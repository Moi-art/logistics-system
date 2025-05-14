@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-2xl font-bold mb-4">Customers</h1>
            <a href="{{ route('admin.customers.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add
                Customer</a>

        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
               <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th class="text-left">Customer Name</th>
                        <th class="text-left">Customer Email</th>
                        <th class="text-left">Customer Phone</th>
                        <th class="text-left">Customer Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
