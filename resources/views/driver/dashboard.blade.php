@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>
    <form method="POST" action="{{ route('customers.update', $driver->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $driver->name }}" required>
        <button type="submit">Update</button>
    </form>
@endsection

