<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['api','cors']], function () {
    Route::post('login', 'ApiAgentController@login');
    

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::post('customer', 'ApiAgentController@store');
        Route::post('customer/{id}', 'ApiAgentController@update');
        Route::delete('customer/{id}', 'ApiAgentController@destroy');
        Route::get('customer/{id}', 'ApiAgentController@index');
        Route::get('customer/{id}/{custid}', 'ApiAgentController@show');
        Route::get('user', 'ApiAgentController@getAuthenticatedUser');
    });
});

