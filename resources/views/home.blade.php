<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TransLink EA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-white shadow-xl rounded-xl p-10 w-full max-w-2xl text-center">
            <h1 class="text-4xl font-bold mb-4">TransLink EA</h1>
            <p class="mb-6 text-lg text-gray-600">Track, Book, Deliver — Seamlessly</p>
            <div class="space-y-4">
                <a href="{{ route('admin.customers.index') }}" class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-xl transition">Manage Customers</a>
                <a href="{{ route('admin.drivers.index') }}" class="block w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-xl transition">Manage Drivers</a>
                <a href="{{ route('admin.bookings.index') }}" class="block w-full bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded-xl transition">Manage Bookings</a>
            </div>
        </div>
    </div>
</body>
</html>



