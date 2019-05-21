<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $currentLocaleId;
    protected $currentLocale;

    public function __construct()
    {
        $lang = request()->query('lang');
        if (isset($lang))
        {
            $this->currentLocale  = $lang;
        }
        else
        {
            $this->currentLocale = LaravelLocalization::getCurrentLocale();
        }


        $this->currentLocaleId = DB::table('languages')->where(['isVisible'=>1,'code'=>$this->currentLocale])->first()->id;
    }
}
