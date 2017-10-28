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

Route::get('/', 'WeightController@index');
Route::get('/create', 'WeightController@create');
Route::get('/show/{id}', 'WeightController@show');
Route::get('/edit/{id}', 'WeightController@edit');
Route::post('/save', 'WeightController@store');
Route::post('/update/{id}', 'WeightController@update');
