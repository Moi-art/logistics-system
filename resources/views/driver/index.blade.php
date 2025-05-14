@extends('layouts.app')

@section('content')
    <h1>Customer List</h1>
    <a href="{{ route('customers.create') }}">Add New</a>
    @extends('layouts.app')

@section('content')
<div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Drivers</h1>
    @foreach ($drivers as $driver)
        <div class="p-2 border mb-2">
            {{ $driver->name }}
        </div>
    @endforeach
</div>
@endsection


    <ul>
        @foreach($drivers as $driver)
            <li>{{ $driver->name }}
                <a href="{{ route('customers.show', $driver->id) }}">View</a> |
                <a href="{{ route('customers.edit', $driver->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection

