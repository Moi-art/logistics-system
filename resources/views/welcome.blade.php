<!DOCTYPE html>
<html>
<head>
    <title>TransLink EA</title>
    <style>
        body {
            background: url('/assets/images/map-background.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: sans-serif;
            color: white;
            text-shadow: 0 1px 2px black;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 60px 20px;
            text-align: center;
        }
        .btn-primary {
            font-size: 1.2rem;
            padding: 10px 25px;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1 class="display-4">TransLink EA</h1>
        <p class="lead">Track, Book, Deliver — Seamlessly</p>
        <a href="{{ route('admin.home') }}" class="btn btn-primary mt-3">Launch Admin Dashboard</a>
    </div>
</body>
</html>


