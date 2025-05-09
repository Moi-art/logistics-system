<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    public function run()
    {
        Vehicle::create([
            'driver_id' => 1,
            'registration_number' => 'KDA123A',
            'type' => 'Truck',
            'capacity' => '5 Tons',
        ]);
    }
}
