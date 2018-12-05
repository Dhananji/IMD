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

//Route::get('about','PagesController@about');

Route::get('about','AboutInsertController@insertform');

//Route::get('insert','AboutInsertController@insertform');

Route::POST('store','AboutInsertController@get');

//Route::POST('new','Usercontroller@new');

Route::post('about', function(){
});

