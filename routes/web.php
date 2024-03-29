<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', 'AuthController@register')->name('register');
Route::post('/auth', 'AuthController@auth')->name('auth');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/create', 'AuthController@create')->name('create');
Route::get('/vacinados', 'HomeController@vacinados')->name('site.vacinados');
Route::get('/protocolo', 'HomeController@protocolo')->name('site.protocolo');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('ubs', 'UbsController');
    Route::get('/comunicados/faq', 'ComunicadosController@faq')->name('faq');
    Route::resource('comunicados', 'ComunicadosController');
    Route::resource('campanhas', 'CampanhasController');
    Route::get('pacientes/comorbidades', 'PacientesController@comorbidades')->name('pacientes.comorbidades');
    Route::post('pacientes/comorbCreate', 'PacientesController@comorbCreate')->name('pacientes.comorbCreate');

    Route::get('show-paciente', 'PacientesController@showPaciente')->name('showPaciente');
    Route::get('show-comorb', 'PacientesController@showComorb')->name('showComorb');
    Route::resource('pacientes', 'PacientesController');
    Route::get('/campanhas/registro', 'PacienteLoginController@create')->name('campanhas.registro');
    Route::get('/home', 'HomeController@index')->name('home');

    //
    Route::get('/logout', 'AuthController@logout')->name('logout');

});




