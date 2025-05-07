<!-- book.blade.php -->
<h2>Book a Ride</h2>
<form action="/booking/store" method="POST">
    @csrf
    <label for="pickup">Pickup Location:</label>
    <input type="text" name="pickup" required><br>

    <label for="destination">Destination:</label>
    <input type="text" name="destination" required><br>

    <button type="submit">Book Now</button>
</form>
