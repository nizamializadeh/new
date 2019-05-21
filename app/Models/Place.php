<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['logo', 'isVisible'
        , 'service_type', 'place_open_time', 'image'
        , 'email', 'lat', 'ing','category_id'
    ];

}
