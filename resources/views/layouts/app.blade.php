<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TransLink EA</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="bg-white shadow p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">TransLink EA</a>
            <div class="space-x-4">
                <a href="{{ route('customer.index') }}" class="text-sm text-gray-700 hover:text-blue-600">Customer</a>
                <a href="{{ route('driver.index') }}" class="text-sm text-gray-700 hover:text-green-600">Driver</a>
                <a href="{{ route('booking.index') }}" class="text-sm text-gray-700 hover:text-cyan-600">Bookings</a>
            </div>
        </div>
    </nav>

    <main class="py-6">
        @yield('content')
    </main>

    <footer class="text-center text-sm py-4 border-t mt-10">
        &copy; 2025 TransLink EA. All rights reserved.
    </footer>

</body>
</html>

