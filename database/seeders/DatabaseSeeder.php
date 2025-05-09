<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CustomersTableSeeder;
use Database\Seeders\DriversTableSeeder;
use Database\Seeders\VehiclesTableSeeder;
use Database\Seeders\BookingsTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            CustomersTableSeeder::class,
            DriversTableSeeder::class,
            VehiclesTableSeeder::class,
            BookingsTableSeeder::class,
        ]);
    }
}

