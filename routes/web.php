<?php

use App\Http\Controllers\EvolucioneController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PostquirurgicoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('historias/nueva/{id}', 'App\Http\Controllers\HistoriaController@crearParaPaciente')->name('historias.nueva');
Route::get('evoluciones/nueva/{id}', 'App\Http\Controllers\EvolucioneController@crearEvolucion')->name('evoluciones.nueva');
Route::get('postquirurgicos/nueva/{id}', 'App\Http\Controllers\PostquirurgicoController@crearOperacion')->name('postquirurgicos.nueva');


Route::resource('/pacientes', PacienteController::class);
Route::resource('/historias', HistoriaController::class);
Route::resource('/evoluciones', EvolucioneController::class);
Route::resource('/postquirurgicos', PostquirurgicoController::class);

