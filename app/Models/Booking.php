<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable= [
        'customer_id',
        'driver_id',
        'pickup_location',
        'dropoff_location',
    ];
}
