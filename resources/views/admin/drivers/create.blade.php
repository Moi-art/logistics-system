@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Add New Driver</h2>

    <form method="POST" action="{{ route('admin.drivers.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Driver Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter driver name">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
        </div>
        <button type="submit" class="btn btn-primary">Save Driver</button>
    </form>
@endsection
