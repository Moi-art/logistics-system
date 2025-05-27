<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TruckCategory;

class TruckCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Small Van', 'Pickup', 'Canter', 'Lorry', 'Trailer'];

        foreach ($categories as $name) {
            TruckCategory::create(['name' => $name]);
        }
    }
}
