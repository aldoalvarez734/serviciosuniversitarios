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
<<<<<<< HEAD:routes/web.php

Route::get('/alumnos','AlumnosController@index');
Route::get('/nuevo','AlumnosController@create');
Route::get('/carreras','CarrerasControler@index');
=======
>>>>>>> 8bdf95c63a07f26f5d34679c2aa096eddc9f53c4:ulsaservicios/routes/web.php
