@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Add Truck Category</h2>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" placeholder="e.g. Canter, Trailer..." required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Add extra details if needed..."></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save Category</button>
    </form>
</div>
@endsection
