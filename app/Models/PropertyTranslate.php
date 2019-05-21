<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTranslate extends Model
{
    protected $fillable = ['lang_id','property_id','key','value'];

}
