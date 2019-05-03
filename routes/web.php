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

/*
Route::get('/', function () {
    return view('encuesta');
});

*/

Auth::routes();

//Route::get('/home', 'HomeControPller@index')->name('home');

Route::get('/','EncuestaController@encuesta');
Route::get('/encuesta','EncuestaController@encuesta');
Route::post('/encuesta/respuesta','EncuestaController@respuesta');

Route::get('/informe','EncuestaController@informe');