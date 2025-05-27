@extends('layouts.app')

@section('content')
    <div class="card p-6 max-w-2xl mx-auto mt-6 shadow-lg rounded-lg bg-white">
        <div class="card-header mb-4">
            <h1 class="text-2xl font-bold mb-2">➕ Add New Driver</h1>
            <a href="{{ route('admin.drivers.index') }}"
                class="bg-gray-700 text-white px-3 py-1 rounded text-sm">← Back to Drivers</a>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
            <form method="POST" action="{{ route('admin.drivers.store') }}">
                @csrf
                <input type="text" name="name" placeholder="Driver Name" class="form-control border p-2 w-full mb-3" required>
                <input type="email" name="email" placeholder="Driver Email" class="form-control border p-2 w-full mb-3">
                <input type="text" name="phone" placeholder="Driver Phone" class="form-control border p-2 w-full mb-3" required>
                <input type="text" name="address" placeholder="Driver Address" class="form-control border p-2 w-full mb-3">
                <input type="text" name="license_number" placeholder="License Number" class="form-control border p-2 w-full mb-3" required>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">✅ Save Driver</button>
            </form>
        </div>
    </div>
@endsection

