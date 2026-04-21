<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
     protected $fillable = [
        'company',
        'train_code',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'total_carriages',
        'is_on_time',
        'is_cancelled',
    ];

        protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time'   => 'datetime',
        'is_on_time'     => 'boolean',
        'is_cancelled'   => 'boolean',
    ];
}

