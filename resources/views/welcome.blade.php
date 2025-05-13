<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransLink EA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white min-h-screen flex flex-col font-sans">

    <!-- Navbar -->
    <nav class="px-6 py-4 flex items-center justify-between shadow-sm">
        <div class="text-2xl font-bold text-blue-600">TransLink EA</div>
        <div class="space-x-4">
            <a href="{{ route('booking.create') }}" class="px-4 py-2 text-blue-600 hover:text-blue-700">
                Post Shipment
            </a>
            <a href="{{ route('booking.list') }}" class="px-4 py-2 text-blue-600 hover:text-blue-700">
                View Shipments
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col items-center text-center px-6 py-16">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
            Connect. Deliver. Empower East Africa.
        </h1>

        <p class="max-w-2xl text-gray-600 mb-12 text-lg">
            TransLink EA is your trusted logistics platform connecting carriers and shippers across East Africa.
            We simplify freight management and enable seamless cargo transportation throughout the region.
        </p>

        <div class="flex flex-col md:flex-row gap-6">
            <a href="{{ route('booking.create') }}" class="px-8 py-4 bg-blue-600 text-white rounded-lg text-lg hover:bg-blue-700 transition-colors">
                Post a Shipment
            </a>
            <a href="{{ route('booking.list') }}" class="px-8 py-4 border-2 border-blue-600 text-blue-600 rounded-lg text-lg hover:bg-blue-50 transition-colors">
                Browse Shipments
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 px-6 py-8 mt-auto">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-600 mb-4 md:mb-0">
                © 2025 TransLink EA. All rights reserved.
            </div>
            <div class="space-x-6">
                <a href="#" class="text-gray-600 hover:text-blue-600">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>
