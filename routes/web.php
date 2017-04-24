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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::post('contact_sent','ContactController@store');
Route::get('contact','ContactController@create');


Route::get('about', 'AboutController@about');
Route::get('aboutIbm', 'AboutController@aboutIbm');
Route::get('aboutLenovopack', 'AboutController@aboutLenovoPack');
Route::get('aboutNip', 'AboutController@aboutNip');
Route::get('aboutContractmanagement', 'AboutController@aboutContractManagement');

Auth::routes();

