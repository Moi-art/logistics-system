<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        Customer::create([
            'user_id' => 1,
            'phone' => '0700000001',
            'address' => 'Nairobi, Kenya',
        ]);
    }
}
