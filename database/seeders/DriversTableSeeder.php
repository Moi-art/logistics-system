<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;
use App\Models\User;

class DriversTableSeeder extends Seeder
{
    public function run()
    {
        Driver::create([
            'user_id' => 2,
            'license_number' => 'DL12345678',
            'phone' => '0700000002',
        ]);
    }
}
