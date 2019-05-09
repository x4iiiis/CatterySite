<?php

use Illuminate\Http\Request;

Route::group([

    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
    Route::post('refresh', 'AuthController@refresh')->name('refresh');
    Route::post('me', 'AuthController@me')->name('me');

});

Route::post('/booking', 'BookingController@create')->name('createbooking');
