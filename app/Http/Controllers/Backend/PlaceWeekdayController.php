<?php

namespace App\Http\Controllers\backend;

use App\Models\PlaceWeekday;
use App\Models\WeekdayTranslate;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceWeekdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,WeekdayTranslate $weekdayTranslate)
    {
        $place=$request->id;
        $days =$weekdayTranslate::where('lang_id',1)->get();;
        return view('backend.placeweekday.create',compact('days','place'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $day = PlaceWeekday::create($request->all());
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
        $placeWeekday = PlaceWeekday::findOrFail($id);
        $weekdyTranslatex = WeekdayTranslate::where('weekday_id',$placeWeekday->weekday_id)->where('lang_id',1)->first();
        $weekdayTranslate = WeekdayTranslate::where('lang_id',1)->get();
        return view('backend.placeweekday.edit',compact('placeWeekday','weekdyTranslatex','weekdayTranslate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,PlaceWeekday $placeWeekday)
    {
        $placeWeekday->update($request->all());
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
