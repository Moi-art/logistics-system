@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">➕ Add New Customer</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Please fix the following errors:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.customers.store') }}" method="POST" class="w-50 mx-auto">
        @csrf
        <div class="mb-3">
            <label class="form-label">Full Name:</label>
            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email Address:</label>
            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number:</label>
            <input type="text" name="phone" class="form-control" placeholder="+254700000000" required>
        </div>

        <button type="submit" class="btn btn-success w-100">✅ Save Customer</button>
    </form>
</div>
@endsection

