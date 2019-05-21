<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Weekday;
use App\Models\WeekdayTranslate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WeekdayController extends Controller
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
        $weekdays = DB::table('weekdays')
            ->join('weekday_translates', ['weekdays.id' => 'weekday_translates.weekday_id'])
            ->where('weekday_translates.lang_id', $this->currentLocaleId)
            ->select('weekdays.id','weekday_translates.name')
            ->get();
        return view('backend.weekday.index',compact('weekdays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.weekday.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request = $this->saveFiles($request,'week');
        $weekday= Weekday::create($request->all());
        foreach ($request->name as $key => $value) {
            WeekdayTranslate::create([
                'name' => $value,
                'weekday_id' => $weekday->id,
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
        $weekday = Weekday::findOrFail($id);
        $weekdayTranslate = WeekdayTranslate::where('Weekday_id',$id)->get();
        return view('backend.weekday.edit',compact('weekday','weekdayTranslate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weekday $weekday)
    {

        $weekday->update($request->all());


        foreach ($request->name as $key => $value) {

            $translate = WeekdayTranslate::where(['weekday_id' => $weekday->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->name = $value;

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
