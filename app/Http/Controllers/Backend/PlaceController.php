<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Blog_translate;
use App\Models\Category;
use App\Models\Category_translate;
use App\Models\Gallery;
use App\Models\Phone;
use App\Models\Place;
use App\Models\PlaceTranslate;
use App\Models\Property;
use App\Models\Weekday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $places = DB::table('places')
            ->join('place_translates', ['places.id' => 'place_translates.place_id'])
            ->where('place_translates.lang_id', $this->currentLocaleId)
            ->select('places.id','places.image','places.logo','places.isVisible','places.service_type','places.place_open_time','places.email','places.lat','places.ing', 'place_translates.location', 'place_translates.description')
            ->get();
        return view('backend.place.index',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category_translate::where('lang_id','=', 1)->get();


        return view('backend.place.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $this->saveFiles($request,'place');
        $place= Place::create($request->all());
        $phone= new Phone();
        $phone->number=$request->number;
        $phone->place_id=$place->id;
        $phone->save();
        foreach ($request->location as $key => $value) {
            PlaceTranslate::create([
                'location' => $value,
                'description' => $request->description[$key],
                'place_id' => $place->id,
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
        $categories=Category_translate::where('lang_id','=', 1)->get();

        $place = Place::findOrFail($id);
        $placeTranslate = PlaceTranslate::where('place_id',$id)->get();
        $phone = Phone::where('place_id',$id)->first();
        return view('backend.place.edit',compact('place','placeTranslate',"phone",'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place,Phone $phone)
    {
            if ($request->hasFile('image')&&$request->hasFile('logo'))
        {
            $request = $this->saveFiles($request,'place');
            $request = $this->saveFiles($request,'logo');
        }
        $place->update($request->all());
            $phone = Phone::where(['place_id' => $place->id])->first();
            $phone->number = $request->number;
            $phone->update();

        foreach ($request->location as $key => $value) {

            $translate = PlaceTranslate::where(['place_id' => $place->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->location = $value;

            $translate->description = $request->description[$key];
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

    public function weekday($id)
    {
         $place =Place::findorfail($id);
         $weekdays = DB::table('place_weekdays')
            ->join('weekday_translates', ['place_weekdays.weekday_id' => 'weekday_translates.weekday_id'])
            ->where('weekday_translates.lang_id', $this->currentLocaleId)
            ->where('place_weekdays.place_id', $id)
            ->select('place_weekdays.id','place_weekdays.open_time','weekday_translates.name')
            ->get();
        return view('backend.place.weekday',compact('weekdays','id'));

    }
    public function gallery($id)
    {
        $place = Place::findOrFail($id);
        $galleries = Gallery::where('place_id',$id)->get();
        $category = DB::table('category_translates')
            ->join('galleries', ['category_translates.id' => 'galleries.category_id'])
            ->select('category_translates.id','category_translates.name')
            ->first();
        return view('backend.place.gallery',compact('galleries','id','category'));

    }

    public function property(Request $request,$id)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $place =Place::findorfail($id);
        $properties = DB::table('properties')
            ->join('property_translates', ['properties.id' => 'property_translates.property_id'])
            ->where('property_translates.lang_id', $this->currentLocaleId)
            ->where('properties.place_id', $id)
            ->select('properties.id','properties.isVisible','property_translates.key','property_translates.value')
            ->get();

        return view('backend.place.property',compact('id','properties'));
    }
    public function branch(Request $request,$id)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $place =Place::findorfail($id);
        $branches = DB::table('branch_offices')
            ->join('brnach_translates', ['branch_offices.id' => 'brnach_translates.branch_id'])
            ->join('place_brnach_offices', ['branch_offices.id' => 'place_brnach_offices.branch_id'])
            ->where('brnach_translates.lang_id', $this->currentLocaleId)
            ->where('place_brnach_offices.place_id', $id)
            ->select('branch_offices.id','branch_offices.isVisible','brnach_translates.name')
            ->get();
        return view('backend.place.branch',compact('id','branches'));
    }
    public function service(Request $request,$id)
    {

        $place =Place::findorfail($id);
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $placeservices = DB::table('place_services')
            ->join('place_service_translates', ['place_services.id' => 'place_service_translates.place_service_id'])
            ->join('categories',['place_services.category_id' => "categories.id"])
            ->join('category_translates',['categories.id' => 'category_translates.category_id'])
            ->where('place_service_translates.lang_id', $this->currentLocaleId)
            ->where('place_services.place_id', $place->id)
            ->select('place_services.id','place_services.category_id','place_services.image','place_services.price','place_services.isVisible', 'place_service_translates.name', 'place_service_translates.description','category_translates.name as categoryName')
            ->get();

        return view('backend.placeservice.index',compact('placeservices','id'));

    }
}
