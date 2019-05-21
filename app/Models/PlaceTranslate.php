<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaceTranslate extends Model
{
    protected $fillable = ['location','description', 'lang_id', 'place_id'];

}
