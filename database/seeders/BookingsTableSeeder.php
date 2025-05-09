<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        Booking::create([
            'customer_id' => 1,
            'driver_id' => 1,
            'vehicle_id' => 1,
            'pickup_location' => 'Kasarani, Nairobi',
            'dropoff_location' => 'Westlands, Nairobi',
            'status' => 'pending',
            'scheduled_time' => now()->addHour(),
        ]);
    }
}


