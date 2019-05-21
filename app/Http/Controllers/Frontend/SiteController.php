<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')
            ->join('category_translates', ['categories.id' => 'category_translates.category_id', 'categories.isVisible' => DB::raw(1),'categories.type' => DB::raw(2)])
            ->where('category_translates.lang_id', $this->currentLocaleId)
            ->where('categories.parent_id', null)
            ->select('categories.id','categories.logo','category_translates.name')
            ->get();
        $places = DB::table('places')
            ->join('place_translates', ['places.id' => 'place_translates.place_id', 'places.isVisible' => DB::raw(1)])
            ->where('place_translates.lang_id', $this->currentLocaleId)
            ->orderBy('places.created_at', 'DESC')
            ->select('places.id','places.image','places.logo','places.isVisible','places.service_type','places.place_open_time','places.email','places.lat','places.ing', 'place_translates.location', 'place_translates.description')
            ->get();
        return view('frontend.index',compact('categories','places'));
    }
    public function category()
    {
        $categories = DB::table('categories')
            ->join('category_translates', ['categories.id' => 'category_translates.category_id', 'categories.isVisible' => DB::raw(1),'categories.type' => DB::raw(2)])
            ->where('category_translates.lang_id', $this->currentLocaleId)
            ->where('categories.parent_id', null)
            ->select('categories.id','categories.logo','category_translates.name')
            ->get();
        return view('frontend.category',compact('categories'));
    }
    public function store($id)
    {
        $place = Place::findOrFail($id);
        $galleries = Gallery::where('place_id',$id)->get();
//        $category = DB::table('category_translates')
//            ->join('galleries', ['category_translates.id' => 'galleries.category_id'])
//            ->select('category_translates.id','category_translates.name')
//            ->first();
        $properties = DB::table('properties')
            ->join('property_translates', ['properties.id' => 'property_translates.property_id'])
            ->where('property_translates.lang_id', $this->currentLocaleId)
            ->where('properties.place_id', $id)
            ->where('properties.isVisible', 1)
            ->select('property_translates.key','property_translates.value')
            ->get();
        $branches = DB::table('branch_offices')
            ->join('brnach_translates', ['branch_offices.id' => 'brnach_translates.branch_id'])
            ->join('place_brnach_offices', ['branch_offices.id' => 'place_brnach_offices.branch_id'])
            ->where('brnach_translates.lang_id', $this->currentLocaleId)
            ->where('place_brnach_offices.place_id', $id)
//            ->where('place_brnach_offices.isVisible', 1)
            ->select('brnach_translates.name')
            ->get();
        return view('frontend.store',compact('galleries','properties','branches'));
    }
    public function search()
    {
        return view('frontend.search');
    }
    public function about()
    {
        return view('frontend.about');
    }
}
