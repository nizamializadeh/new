<?php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::namespace('Frontend')->group(function () {
            // Controllers Within The "App\Http\Controllers\Frontend" Namespace

            Route::get('/', 'SiteController@index')->name('index');
            Route::get('category', 'SiteController@category')->name('category');
            Route::get('search', 'SiteController@search')->name('search');
            Route::get('store{id}', 'SiteController@store')->name('store');
            Route::get('about', 'SiteController@about')->name('about');

        });
    });

