<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/alumnos', [App\Http\Controllers\AlumnosController::class,'index']);
Route::get('/nuevo', [App\Http\Controllers\AlumnosController::class,'create']);
Route::get('/carreras', [App\Http\Controllers\CarrerasControler::class,'index']);
Route::get('/caja', [App\Http\Controllers\CajaController::class,'index']);
Route::get('/nuevacaja', [App\Http\Controllers\CajaController::class,'create']);

//NataRutas
Route::get('/documento__becas', [App\Http\Controllers\Documento_BecaController::class,'index']);
Route::get('/nuevo/documento__becas', [App\Http\Controllers\Documento_BecaController::class,'create']);
Route::get('/documento__boletas', [App\Http\Controllers\Documento_BoletaController::class,'index']);
Route::get('/nuevo/documento__boletas', [App\Http\Controllers\Documento_BoletaController::class,'create']);
Route::get('/documento_ids', [App\Http\Controllers\Documento_idController::class,'index']);
Route::get('/nuevo/documento_ids', [App\Http\Controllers\Documento_idController::class,'create']);
Route::get('/documento__prorrogas', [App\Http\Controllers\Documento_ProrrogaController::class,'index']);
Route::get('/nuevo/documento__prorrogas', [App\Http\Controllers\Documento_ProrrogaController::class,'create']);
Route::get('/encargado_ids', [App\Http\Controllers\Encargado_idController::class,'index']);
Route::get('/nuevo/encargado_ids', [App\Http\Controllers\Encargado_idController::class,'create']);
Route::get('/estatus_alumnos', [App\Http\Controllers\Estatus_AlumnoController::class,'index']);
Route::get('/nuevo/estatus_alumnos', [App\Http\Controllers\Estatus_AlumnoController::class,'create']);
Route::get('/evaluacion_del_servicio_becarios', [App\Http\Controllers\EvaluacionDelSBController::class,'index']);
Route::get('/nuevo/evaluacion_del_servicio_becarios', [App\Http\Controllers\EvaluacionDelSBController::class,'create']);
Route::get('/oficinas', [App\Http\Controllers\OficinaController::class,'index']);
Route::get('/nuevo/oficinas', [App\Http\Controllers\OficinaController::class,'create']);


Route::get('/semestre', [App\Http\Controllers\SemestreController::class,'index']);


Auth::routes();

// Rutas de Abraham
Route::get('/controlescolar', [App\Http\Controllers\ControlEscolar::class,'index']);
Route::get('/nuevo/controlescolar',[App\Http\Controllers\ControlEscolar::class,'create']);
Route::get('/tramite', [App\Http\Controllers\tramite_id::class,'index']);
Route::get('/nuevo/tramite',[App\Http\Controllers\tramite_id::class,'create']);


//Rutas de campus
Route::get('/campus', [App\Http\Controllers\CampusController::class,'index']);
Route::get('/nuevocampus', [App\Http\Controllers\CampusController::class,'create']);
Route::post('/guardarcampus', [App\Http\Controllers\CampusController::class,'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/renovacionlibro', [App\Http\Controllers\libroprestadoController::class,'index']);
Route::get('/libros', [App\Http\Controllers\libroController::class,'index']);
Route::get('/librosleidos', [App\Http\Controllers\librosleidosController::class,'index']);

//Rutas de Renovacion de Beca
Route::get('/Tramite_Renovacion_de_beca', [App\Http\Controllers\RenovacionBecaController::class,'index']);
Route::get('/nuevo/Tramite_Renovacion_de_beca', [App\Http\Controllers\RenovacionBecaController::class,'create']);
Route::post('/guardar/Tramite_Renovacion_de_beca', [App\Http\Controllers\RenovacionBecaController::class,'store']);

//Rutas de Pablito
Route::get('/prestamo', [App\Http\Controllers\PrestamosController::class,'index']);
Route::get('/nuevoprestamo', [App\Http\Controllers\PrestamosController::class,'create']);

//Rutas de Cruz
Route::get('/constancia ', [App\Http\Controllers\constanciaController::class,'index']);

//Lulu
Route::get('/solicitudes', [App\Http\Controllers\SolicitudesController::class,'index']);
Route::get('/boleta', [App\Http\Controllers\BoletaControlle::class,'index']);
