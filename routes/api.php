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

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});


//Route::get('v1/test', 'Api\CategoryController@test')->name('lnk1');



//Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
//
//    Route::post('/short', 'UrlMapperController@store');
//});

//
//Route::prefix('api/v1')->name('av1.')->middleware('auth:api')->group(function () {
//
//    Route::post('/short', 'CategoryController@delete')->name('lnk1');
//
//});


Route::prefix('v1')->name('av1.')->group(function () {

    Route::get('/test', 'Api\CategoryController@test')->name('lnk1');

    Route::get('/category', 'Api\CategoryController@__getList')->name('lnk2');
    Route::post('/category/add', 'Api\CategoryController@__create')->name('lnk3');

    //    Route::post('login', 'API\APIAuthController@login');
    //
    //    Route::post('register', 'API\APIAuthController@register');
});



