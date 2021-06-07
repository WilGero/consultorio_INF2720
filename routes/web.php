<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TratamientoController;
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

Route::get('/', LoginController::class,'index')->name('login');
Route::get('pagina principal',[PrincipalController::class,'principal'])->name('pagina.principal');
Route::get('pagina principal/pacientes',[PrincipalController::class,'paciente'] )->name('principal.paciente');
Route::get('pagina principal/tratamientos',[PrincipalController::class,'tratamiento'])->name('principal.tratamiento');
Route::get('pagina principal/citas', [PrincipalController::class,'cita'])->name('principal.cita');
Route::get('pagina principal/historial', [PrincipalController::class,'historial'])->name('principal.historial');

//Para la ventana Tratamientos
Route::get('pagina principal/tratamientos/create',[TratamientoController::class,'create'] )->name('tratamientos.create');
Route::post('pagina principal/tratamientos',[TratamientoController::class,'store'])->name('tratamientos.store');
Route::get('pagina principal/tratamientos/{tratamiento}',[TratamientoController::class,'show'] )->name('tratamientos.show');
Route::get('pagina principal/tratamientos/{tratamiento}/edit', [TratamientoController::class,'edit'] )->name('tratamientos.edit');
Route::put('pagina principal/tratamientos/{tratamiento}', [TratamientoController::class,'update'] )->name('tratamientos.update');
Route::delete('pagina principal/tratamientos/{tratamiento}', [TratamientoController::class,'destroy'] )->name('tratamientos.destroy');