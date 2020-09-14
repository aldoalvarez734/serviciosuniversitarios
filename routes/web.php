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

Route::get('/alumnos','AlumnosController@index');
Route::get('/nuevo','AlumnosController@create');
Route::get('/carreras','CarreraController@index');

Route::get('/nueva_carrera','CarreraController@create');


Route::get('/campus','CampusController@index');
Route::get('/nuevocampus','CampusController@create');

Route::get('/areas','AreaController@index');
Route::get('/nuevaarea','AreaController@create');

