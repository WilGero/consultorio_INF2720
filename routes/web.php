<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
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

Route::get('/', LoginController::class);
Route::get('pagina principal',[PrincipalController::class,'index']);
Route::get('pagina principal/pacientes',[PrincipalController::class,'paciente'] );
Route::get('pagina principal/tratamientos',[PrincipalController::class,'tratamiento']);
Route::get('pagina principal/citas', [PrincipalController::class,'cita']);
Route::get('pagina principal/historial', [PrincipalController::class,'show']);