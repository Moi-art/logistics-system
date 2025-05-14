@extends('layouts.app')

@section('content')
    <h1>Customer History</h1>
    <p>Name: {{ $customer->name }}</p>
    <p>Created: {{ $customer->created_at }}</p>
    <p>Updated: {{ $customer->updated_at }}</p>
@endsection
