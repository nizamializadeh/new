<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Category;
use App\Models\Category_translate;
use App\Models\Place;
use App\Models\PlaceService;
use App\Models\PlaceServiceTranslate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PlaceServiceController extends Controller
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
        $placeservices = DB::table('place_services')
            ->join('place_service_translates', ['place_services.id' => 'place_service_translates.place_service_id'])
            ->where('place_service_translates.lang_id', $this->currentLocaleId)
            ->select('place_services.id','place_services.category_id','place_services.image','place_services.price','place_services.isVisible', 'place_service_translates.name', 'place_service_translates.description')
            ->get();

//        $categories = DB::table('categories')
//            ->join('category_translates', [$placeservices->category_id => 'category_translates.category_id'])
//            ->where('category_translates.lang_id', $this->currentLocaleId)
//            ->select('categories.id','categories    .logo','categories.parent_id','category_translates.name')
//            ->get();
//
//        dd($categories);
        return view('backend.placeservice.index',compact('placeservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=$request->id;
        $place =Place::findorfail($id);
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $placeservices = DB::table('place_services')
            ->join('place_service_translates', ['place_services.id' => 'place_service_translates.place_service_id'])
            ->where('place_service_translates.lang_id', $this->currentLocaleId)
            ->where('place_services.place_id', $id)

            ->select('place_services.id','place_services.category_id','place_services.image','place_services.price','place_services.isVisible', 'place_service_translates.name', 'place_service_translates.description')
            ->get();
        return view('backend.placeservice.index',compact('placeservices','id'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $this->saveFiles($request,'placeservice');
        $placeservice= PlaceService::create($request->all());
        foreach ($request->name as $key => $value) {

            PlaceServiceTranslate::create([
                'name' => $value,
                'description' => $request->description[$key],
                'place_service_id' => $placeservice->id,
            'lang_id' => $request->lang[$key],

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
        $placeservice = PlaceService::findOrFail($id);
        $placeservicetranslates = PlaceServiceTranslate::where('place_service_id',$id)->get();
        return view('backend.placeservice.edit',compact('placeservice','categories','placeservicetranslates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlaceService $placeservice)
    {
        if ($request->hasFile('image'))
        {
            $request = $this->saveFiles($request,'placeservice');
        }

        $placeservice->update($request->all());

        foreach ($request->name as $key => $value) {
            $translate = PlaceServiceTranslate::where(['place_service_id' => $placeservice->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->name = $value;

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
}
