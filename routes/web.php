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

Route::get('/meus-grupos/{grupo?}', 'GruposController@meusgrupos');

Route::get('/grupo/{grupo}', 'GruposController@grupo');

Route::post('/grupo/{grupo}/apagar', 'GruposController@apagar');


Route::post('/criargrupos', 'GruposController@criargrupo')->name('criargrupo');

Route::middleware('auth')->group(function() {
        Route::get('search/', 'SearchController@search')->name('search');
});

Route::post('/grupo/{grupo}/editar', 'GruposController@editar');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', 'AdminController@index')->name('index');
    Route::post('/', 'AdminController@atualizar_relatorio_user')->name('atualizar_relatorio_user');
});

Route::view('/perfil', 'perfilamigos');