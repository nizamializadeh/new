<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaceService extends Model
{
    protected $fillable = ['image', 'isVisible', 'price','category_id','place_id'];

}
