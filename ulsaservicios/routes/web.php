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

Route::get('/alumnos', 'AlumnosController@index');
Route::get('/nuevo', 'AlumnosController@create');
Route::get('/carreras', 'CarrerasControler@index');
Route::get('/caja', 'CajaControler@index');

//Abraham
Route::get('/controlescolar', 'ControlEscolar@index');
Route::get('/nuevo/controlescolar', 'ControlEscolar@create');
Route::get('/tramite', 'tramite_id@index');
Route::get('/nuevo/tramite', 'tramite_id@create');
