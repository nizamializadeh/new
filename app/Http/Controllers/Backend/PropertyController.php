<?php

namespace App\Http\Controllers\backend;

use App\Models\Place;
use App\Models\Property;
use App\Models\PropertyTranslate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $place =Place::findorfail($request->id);
        $properties = DB::table('properties')
            ->join('property_translates', ['properties.id' => 'property_translates.property_id'])
            ->where('property_translates.lang_id', $this->currentLocaleId)
            ->where('properties.place_id', $request->id)
            ->select('properties.id','properties.isVisible','property_translates.key','property_translates.value')
            ->get();

        return view('backend.place.property',compact('id','properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $place =$request->id;
        return view('backend.property.create',compact('place'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property= Property::create($request->all());
        foreach ($request->key as $key => $value) {
            PropertyTranslate::create([
                'key' => $value,
                'value' => $request->value[$key],
                'property_id' => $property->id,

            'lang_id' => $request->lang[$key]
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $property_translates = PropertyTranslate::where('property_id',$id)->get();
        return view('backend.property.edit',compact('property','property_translates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Property $property)
    {
        $property->update($request->all());
        foreach ($request->key as $key => $value) {
            $translate = PropertyTranslate::where(['property_id' => $property->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->key = $value;
            $translate->value = $request->value[$key];
            $translate->update();


        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
