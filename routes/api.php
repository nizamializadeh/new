<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'V1'],function (){
    Route::namespace('Api')->group(function () {
        Route::get('categories/type/{type}','CategoryController@index');
        Route::get('weekday','WeekDayController@index');
        Route::get('property','PropertyController@index');
    });
});