<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TransLink EA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <nav class="bg-blue-600 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-semibold">TransLink EA</h1>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('customer.dashboard') }}" class="hover:underline">Customer</a>
                <a href="{{ route('driver.dashboard') }}" class="hover:underline">Driver</a>
                <a href="{{ route('booking.list') }}" class="hover:underline">Bookings</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>
</body>
</html>
