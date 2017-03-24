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

/**
*UI Aria
*/
/*Website UI Route*/
Route::get('/', function () {
    return view('welcome');
});




/**
*Admin Aria
*/
/*Admin login page*/
Route::get('/my_admin/login', function () {
    return 'login page';
});

Route::group(['prefix'=>'my_admin','middleware'=>'admin'],function(){

	Route::get('/','Admin\IndexController@index');

});