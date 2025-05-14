@extends('layouts.app')

@section('content')
    <h1>Book New Customer</h1>
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <button type="submit">Save</button>
    </form>
@endsection
