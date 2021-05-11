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



Route::view('/','home')->name('home');

//Actas Administrativas

//Route::view('/actaAdmin','actaAdmin')->name('actaAdmin');

Route::get('/actaAdmin','ActaAdministrativaController@index', compact('actaAdmin'))->name('actaAdmin.index');

Route::get('/actaAdmin/create','ActaAdministrativaController@create', compact('actaAdmin'))->name('actaAdmin.create');

Route::post('/actaAdmin','ActaAdministrativaController@store')->name('actaAdmin.store');


//Alumnos

//Route::view('/alumnos', 'alumnos', compact('alumnos'))->name('alumnos');

Route::get('/alumnos', 'AlumnoController@index', compact('alumnos'))->name('alumnos.index');

Route::get('/alumnos/create','AlumnoController@create')->name('alumnos.create');

Route::post('/alumnos','AlumnoController@store')->name('alumnos.store');


//Bicicletas

//Route::view('/bicicleta','bicicleta')->name('bicicleta');

Route::get('/bicicleta','BicicletaController@index', compact('bicicleta'))->name('bicicleta.index');

Route::get('/bicicleta/create','BicicletaController@create')->name('bicicleta.create');

Route::post('/bicicleta','BicicletaController@store')->name('bicicleta.store');


//MissedCredential

//Route::view('/missedCredential','missedCredential')->name('missedCredential');

Route::get('/missedCredential','MissedCredentialController@index', compact('missedCredential'))->name('missedCrendential.index');

Route::get('/missedCredential/create','MissedCredentialController@create')->name('missedCrendential.create');

Route::post('/missedCredential','MissedCredentialController@store')->name('missedCrendential.store');

//EventoSocial
//Route::view('/eventoSocial','eventoSocial')->name('eventoSocial');

Route::get('/eventoSocial', 'EventoSocialController@index', compact('eventoSocial'))->name('eventoSocial.index');

Route::get('/eventoSocial/create', 'EventoSocialController@create')->name('eventoSocial.create');

Route::post('/eventoSocial', 'EventoSocialController@store')->name('eventoSocial.store');

//Fallo Camara
//Route::view('/falloCamara','falloCamara')->name('falloCamara');
Route::get('/falloCamara','FalloCamaraController@index', compact('falloCamara'))->name('falloCamara.index');

Route::get('/falloCamara/create','FalloCamaraController@create')->name('falloCamara.create');

Route::post('/falloCamara','FalloCamaraController@store')->name('falloCamara.store');


//Historial
//Route::view('/historial','historial')->name('historial');
Route::get('/historial','HistorialController@index', compact('historial'))->name('historial.index');

Route::get('/historial/create','HistorialController@create')->name('historial.create');

Route::post('/historial','HistorialController@store')->name('historial.store');


//Incendio
Route::get('/incendio','IncendioController@index', compact('incendio'))->name('incendio.index');

Route::get('/incendio/create','IncendioController@create')->name('incendio.create');

Route::post('/incendio','IncendioController@store')->name('incendio.store');


//Incidencia
Route::get('/incidencia','IncidenciaController@index', compact('incidencia'))->name('incidencia.index');

Route::get('/incidencia/create', 'IncidenciaController@create')->name('incidencia.create');

Route::post('/incidencia', 'IncidenciaController@store')->name('incidencia.store');



Route::view('/incidente','incidente')->name('incidente');


//paseSalida
Route::get('/paseSalida','PaseSalidaController@index', compact('paseSalida'))->name('paseSalida.index');

Route::get('/paseSalida/create','PaseSalidaController@create')->name('paseSalida.create');

Route::post('/paseSalida','PaseSalidaController@store')->name('paseSalida.store');


//respiracion
Route::get('/respiracion','RespiracionController@index', compact('respiracion'))->name('respiracion.index');

Route::get('/respiracion/create','RespiracionController@create')->name('respiracion.create');

Route::post('/respiracion','RespiracionController@store')->name('respiracion.store');



//romperCandado
Route::get('/romperCandado','RomperCandadoController@index', compact('romperCandado'))->name('romperCandado.index');

Route::get('/romperCandado/create','RomperCandadoController@create')->name('romperCandado.create');

Route::post('/romperCandado','RomperCandadoController@store')->name('romperCandado.store');



//solicitudVideocamara
Route::get('/solicitudVideocamara','SolicitudVideocamaraController@index', compact('solicitudVideocamara'))->name('solicitudVideocamara.index');

Route::get('/solicitudVideocamara/create','SolicitudVideocamaraController@create')->name('solicitudVideocamara.create');

Route::post('/solicitudVideocamara','SolicitudVideocamaraController@store')->name('solicitudVideocamara.store');

//solicitudLabs
Route::get('/solicitudLabs', 'SolicitudLabsController@index', compact('solicitudLabs'))->name('solicitudLabs.index');

Route::get('/solicitudLabs/create', 'SolicitudLabsController@create')->name('solicitudLabs.create');

Route::post('/solicitudLabs', 'SolicitudLabsController@store')->name('solicitudLabs.store');

//vistas
Route::get('/vistas', 'VistasController@index', compact('vistas'))->name('vistas.index');

Route::get('/vistas/create', 'ActaAdministrativaController@create')->name('vistas.create');

Route::post('/vistas', 'VistasController@store')->name('vistas.store');

//SupervisionMods
Route::get('/supervisionMods', 'SupervisionModsController@index', compact('supervisionMods'))->name('supervisionMods.index');

Route::get('/supervisionMods/create', 'SupervisionModsController@create')->name('supervisionMods.create');

Route::post('/supervisionMods', 'SupervisionModsController@store')->name('supervisionMods.store');