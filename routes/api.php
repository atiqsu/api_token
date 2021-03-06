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


Route::middleware('auth:api')->get('/v1/user', function (Request $request) {

    return $request->user();
});


//Route::get('v1/test', 'Api\CategoryController@test')->name('lnk1');
//Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
//
//    Route::post('/short', 'UrlMapperController@store');
//});



Route::prefix('v1')->name('av1.')->group(function () {

    Route::post('login',    'API\APIAuthController@login');
    Route::post('register', 'API\APIAuthController@register');

});



Route::middleware('auth:api')->group(function () {

    Route::prefix('v1')->name('av1.')->group(function () {

        Route::get('/test',             'Api\CategoryController@test')->name('lnk1');

        Route::prefix('category')->name('cat.')->group(function () {

            Route::get('/',             'Api\CategoryController@__getList')->name('lnk2');
            Route::post('/add',         'Api\CategoryController@__create')->name('lnk3');
            Route::post('/update/{idd}',    'Api\CategoryController@__update')->name('lnk3');
            Route::post('/delete/{idd}',    'Api\CategoryController@__delete')->name('lnk3');
        });
    });
});


