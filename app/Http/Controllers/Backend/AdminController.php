<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function setStatus(Request $request)
    {
        if ($request->ajax())
        {
            DB::table($request->table)->where('id',$request->id)->update(['isVisible' => $request->isVisible]);
            $resultMessage = ($request->isVisible) ? "Status changed to active" : "Status changed to deactive";
            return response($resultMessage,200);

        }
    }
}
