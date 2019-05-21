<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WeekDayController extends Controller
{
    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $weekdays = DB::table('weekdays')
            ->join('weekday_translates', ['weekdays.id' => 'weekday_translates.weekday_id'])
            ->where('weekday_translates.lang_id', $this->currentLocaleId)
            ->select('weekdays.id','weekday_translates.name')
            ->get();
        return $weekdays;
    }
}
