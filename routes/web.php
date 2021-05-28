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

//RUTA A HOME 1
Route::get('home', function () {
    return view('home');
});

//VISTAS HECHAS
Route::resource('listapacientes', 'App\Http\Controllers\PacienteController');
Route::get('listadogeneral', 'App\Http\Controllers\PacienteController@listadoGeneral');


//VISTAS HECHAS VISTA_PACIENTE
Route::resource('citaspersonales', App\Http\Controllers\CitaController::class);
Route::get('historicopersonal', 'App\Http\Controllers\CitaController@historico')->name('citaspersonales.historico');
Route::patch('citaspersonalesmodificar', 'App\Http\Controllers\CitaController@modificarCita')->name('citaspersonales.modificarCita');
Route::patch('historicopersonalborrar', 'App\Http\Controllers\CitaController@eliminarCita')->name('citaspersonales.eliminarCita');


//VISTAS HECHAS SECRETARIA
Route::get('agendarcita', 'App\Http\Controllers\CitaController@secretarioAgendarCita');
Route::get('citaspaciente', 'App\Http\Controllers\CitaController@secretarioCitasPaciente');
Route::get('datospersonales', 'App\Http\Controllers\PacienteController@datosPersonales');
Route::get('historicocitas', 'App\Http\Controllers\CitaController@secretarioHistoricoGeneral');
Route::get('nuevopaciente', 'App\Http\Controllers\PacienteController@nuevopaciente');

//VISTAS HECHAS ADMINISTRADOR
Route::resource('listausuarios', App\Http\Controllers\AdministradorController::class);
Route::get('altausuario', 'App\Http\Controllers\AdministradorController@altausuario');

//FALTAN

Route::get('historial', function () {
    return view('vistaespecialista.historial');
});

Route::get('evolucion', function () {
    return view('vistaespecialista.evolucion');
});


Route::get('tratamientos', function () {
    return view('vistaespecialista.tratamientos');
});


//RUTA A LOGIN
Auth::routes();


