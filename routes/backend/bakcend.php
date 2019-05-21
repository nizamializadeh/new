<?php

Route::namespace('Backend')->group(function () {
    Route::group(['middleware' => 'admin','prefix' => 'admin'],function (){

        Route::post('set-status','AdminController@setStatus')->name('setStatus');
        Route::get('/place/gallery/{id}', 'PlaceController@gallery')->name('galleryplace');
            Route::get('/place/property/{id}', 'PlaceController@property')->name('proprtyplace');
            Route::get('/place/weekday/{id}', 'PlaceController@weekday')->name('weekdayplace');
            Route::get('/place/service/{id}', 'PlaceController@service')->name('service');
            Route::get('/place/branch/{id}', 'PlaceController@branch')->name('branchplace');
                // dropzone
            Route::post('/uploadImage', 'GalleryController@uploadImage')->name('uploadImage');
            Route::post('/deleteImage', 'GalleryController@deleteImage')->name('deleteImage');
            Route::post('images/{id}/create', 'GalleryController@imageStore');
            Route::delete('/image/{image}/delete', 'GalleryController@imageDelete');

            Route::resources([
                'blog' => 'BlogController',
                'category' => 'CategoryController',
                'place' => 'PlaceController',
                'weekday' => 'WeekdayController',
                'placeservice' => 'PlaceServiceController',
                'gallery' => 'GalleryController',
                'property' => 'PropertyController',
                'placeweekday' => 'PlaceWeekdayController',
                'branch' => 'BranchController',
                'placebranch' => 'PlaceBranchController',
            ]);
    });
});

