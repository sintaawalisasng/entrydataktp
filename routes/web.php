<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dataktp', 'KTPController@index');
Route::post('/dataktp/create', 'KTPController@create');
Route::get('dataktp/{id}/edit', 'KTPController@edit');
Route::post('dataktp/{id}/update', 'KTPController@update');
Route::get('dataktp/{id}/delete', 'KTPController@delete');
