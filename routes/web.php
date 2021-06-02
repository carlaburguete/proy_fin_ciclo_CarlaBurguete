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

//VISTAS HECHAS LISTADOS PACIENTE
Route::resource('pacientes', 'App\Http\Controllers\PacienteController');
Route::resource('especialistas', 'App\Http\Controllers\EspecialistaController');
Route::resource('secretarios', 'App\Http\Controllers\SecretarioController');
Route::get('listapacientes', 'App\Http\Controllers\PacienteController@index');
Route::get('listadogeneral', 'App\Http\Controllers\PacienteController@listadoGeneral');


//VISTAS HECHAS VISTA_PACIENTE
Route::resource('citaspersonales', App\Http\Controllers\CitaController::class);
Route::get('historial/{id}', 'App\Http\Controllers\PacienteController@historialPaciente')->name('historialPaciente');
Route::get('tratamientos/{id}', 'App\Http\Controllers\PacienteController@tratamientoPaciente')->name('tratamientoPaciente');
Route::get('evolucion/{id}', 'App\Http\Controllers\PacienteController@evolucionPaciente')->name('evolucionPaciente');
Route::post('editarHistorial', 'App\Http\Controllers\PacienteController@editarHistorial')->name('editarHistorial');
Route::post('editarTratamiento', 'App\Http\Controllers\PacienteController@editarTratamiento')->name('editarTratamiento');
Route::post('editarEvolucion', 'App\Http\Controllers\PacienteController@editarEvolucion')->name('editarEvolucion');
Route::get('historicopersonal', 'App\Http\Controllers\CitaController@historico')->name('citaspersonales.historico');
Route::patch('citaspersonalesmodificar', 'App\Http\Controllers\CitaController@modificarCita')->name('citaspersonales.modificarCita');
Route::patch('historicopersonalborrar', 'App\Http\Controllers\CitaController@eliminarCita')->name('citaspersonales.eliminarCita');


//VISTAS HECHAS SECRETARIA
Route::get('agendarcita/{id}', 'App\Http\Controllers\CitaController@mostrarPaginaAgenda') ->name('agendarcita');
Route::patch('agendarcitapaciente', 'App\Http\Controllers\CitaController@reservarCita')->name('reservarCita');
Route::get('citaspaciente/{id}', 'App\Http\Controllers\CitaController@secretarioCitasPaciente')->name('citaspaciente');
Route::patch('citaspacienteborrar', 'App\Http\Controllers\CitaController@eliminarCitaSecretaria')->name('eliminarCitaSecretaria');
Route::get('datospersonales', 'App\Http\Controllers\PacienteController@datosPersonales');
Route::get('historicocitas', 'App\Http\Controllers\CitaController@secretarioHistoricoGeneral');
Route::get('nuevopaciente', 'App\Http\Controllers\PacienteController@nuevopaciente');

//VISTAS HECHAS ADMINISTRADOR
Route::resource('listausuarios', 'App\Http\Controllers\AdministradorController');
//NO VA
//Route::resource('altausuario','App\Http\Controllers\AdministradorController@altausuario')->name('get');
//Route::post('crearusuario', 'App\Http\Controllers\AdministradorController@crearusuario')->name('crearusuario');


//RUTA A LOGIN
Auth::routes();


