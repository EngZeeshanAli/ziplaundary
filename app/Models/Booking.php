<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // app/Models/Booking.php
    protected $fillable = [
        'name', 'email', 'phone',
        'pickup_date', 'pickup_time', 'bag_size',
        'special_instructions', 'subscribe',
    ];

}
