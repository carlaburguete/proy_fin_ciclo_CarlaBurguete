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

//RUTA A HOME
Route::get('home', function () {
    return view('home');
});

//VISTAS HECHAS
Route::resource('pacientes', 'App\Http\Controllers\PacienteController');
Route::resource('especialistas', 'App\Http\Controllers\EspecialistaController');
Route::resource('secretarios', 'App\Http\Controllers\SecretarioController');
Route::get('listapacientes', 'App\Http\Controllers\PacienteController@index')->name('listapacientes');
Route::get('listadogeneral', 'App\Http\Controllers\PacienteController@listadoGeneral')->name('listadogeneral');
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
Route::get('agendarcita/{id}', 'App\Http\Controllers\CitaController@mostrarPaginaAgenda')->name('agendarcita');
Route::patch('agendarcitapaciente', 'App\Http\Controllers\CitaController@reservarCita')->name('reservarCita');
Route::get('citaspaciente/{id}', 'App\Http\Controllers\CitaController@secretarioCitasPaciente')->name('citaspaciente');
Route::patch('citaspacienteborrar', 'App\Http\Controllers\CitaController@eliminarCitaSecretaria')->name('eliminarCitaSecretaria');
Route::get('historicocitas', 'App\Http\Controllers\CitaController@secretarioHistoricoGeneral');
Route::resource('listausuarios', 'App\Http\Controllers\AdministradorController');
Route::get('/nuevopaciente', function(){
    return view('vistasecretaria.nuevopaciente');
});
Route::post('registrarpaciente', 'App\Http\Controllers\PacienteController@nuevopaciente')->name('nuevopaciente');

Route::get('/crearusuario', function(){
    return view('vistaadministrador.crearusuario');
});
Route::post('registrarusuario', 'App\Http\Controllers\AdministradorController@crearusuario')->name('crearusuario');


//RUTA A LOGIN
Route::get('/login', function(){
    return view('auth.login');
});
Route::post('login/validate', 'App\Http\Controllers\AdministradorController@validaUsuario')->name('validaUsuario');



