<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('category')->name('cat.')->group(function () {

    Route::get('/',         'CategoryController@__getList')->name('list');
    Route::post('/add',     'CategoryController@__create')->name('addPost');



//    Route::get('/add', 'CategoryController@add')->name('add');
//    Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
//    Route::post('/edit-post', 'CategoryController@update')->name('editPost');
//    Route::post('/delete', 'CategoryController@delete')->name('delete');
//    Route::post('/status', 'CategoryController@changeStatus')->name('changeStatus');
//    Route::post('/searchList', 'CategoryController@searchList')->name('searchList');
//    #Route::get('/view/{id}', 'CategoryController@view');
});
