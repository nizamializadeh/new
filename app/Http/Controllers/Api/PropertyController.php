<?php

namespace App\Http\Controllers\Api;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $place =Place::findorfail($request->id);
        $properties = DB::table('properties')
            ->join('property_translates', ['properties.id' => 'property_translates.property_id'])
            ->where(['property_translates.lang_id' => $this->currentLocaleId,'isVisible' => 1,'properties.place_id' => $request->id])
            ->select('properties.id','property_translates.key','property_translates.value')
            ->get();

        return $properties;
    }
}
