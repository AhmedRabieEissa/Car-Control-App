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

//Route of index page :
Route::get('/',[
    'uses'=>'myCar@_show',
    'as'=>'cars.show'
]);

//Route of my form :
Route::post('/create',[
    'uses'=>'myCar@_create',
    'as'=>'cars.create'
]);
