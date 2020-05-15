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

Route::post('/interesse/criar', 'InteresseController@create')->name('criarinteresse');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::view('/grupo', 'criar_grupo1');

Route::get('/interesses', 'InteresseController@interesses')->name('interesses');



