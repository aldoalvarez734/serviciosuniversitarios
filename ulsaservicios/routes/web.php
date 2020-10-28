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

//NataRutas
Route::get('/documento__becas', 'Documento_BecaController@index');
Route::get('/nuevo/documento__becas', 'Documento_BecaController@create');
Route::get('/documento__boletas', 'Documento_BoletaController@index');
Route::get('/nuevo/documento__boletas', 'Documento_BoletaController@create');
Route::get('/documento_ids', 'Documento_idController@index');
Route::get('/nuevo/documento_ids', 'Documento_idController@create');
Route::get('/documento__prorrogas', 'Documento_ProrrogaController@index');
Route::get('/nuevo/documento__prorrogas', 'Documento_ProrrogaController@create');
Route::get('/encargado_ids', 'Encargado_idController@index');
Route::get('/nuevo/encargado_ids', 'Encargado_idController@create');
Route::get('/estatus_alumnos', 'Estatus_AlumnoController@index');
Route::get('/nuevo/estatus_alumnos', 'Estatus_AlumnoController@create');
Route::get('/evaluacion_del_servicio_becarios', 'EvaluacionDelSBController@index');
Route::get('/nuevo/evaluacion_del_servicio_becarios', 'EvaluacionDelSBController@create');
Route::get('/oficinas', 'OficinaController@index');
Route::get('/nuevo/oficinas', 'OficinaController@create');
