@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Truck Categories</h2>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">+ Add New Category</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description ?? '—' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="text-center">No categories found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
