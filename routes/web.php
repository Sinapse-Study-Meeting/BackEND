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

Route::view('/', 'welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// INTERESSE ROUTES

Route::post('/interesse/criar', 'InteresseController@create')->name('criarinteresse');

Route::get('/perfil/interesses', 'InteresseController@interesses')->name('interesses');

Route::post('/perfil/interesses/{interesse}/editar', 'InteresseController@editar');

Route::post('/perfil/interesses/{interesse}/apagar', 'InteresseController@apagar');

// GRUPOS ROUTES

Route::get('/grupos', 'GruposController@meusgrupos')->name('grupos');

Route::get('/grupo/{grupo}', 'GruposController@grupo');

Route::post('/criargrupos', 'GruposController@criargrupo')->name('criargrupo');

Route::post('/grupo/{grupo}/apagar', 'GruposController@apagar');

Route::post('/grupo/{grupo}/editar', 'GruposController@editar');

// CHAT ROUTES

Route::get('/chat', 'ChatController@chat');

Route::get('/chat/conversas', 'ChatController@conversas');

Route::post('/enviar_mensagem/{chat?}', 'ChatController@enviar_mensagem');

Route::get('/chat/{chat}/mensagens', 'ChatController@mensagens_chat');

