<?php

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

Auth::routes();

// Route::get('/', '')
Route::get('/', 'HomeController@index')->name('home'); //tela de login
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::post('/response-youtube', 'YoutubeController@youtube');

//ADMINSITRADOR
Route::get('/adm/dashboard', 'AdministradorController@dashboard')->name('administrador.dashboard');
Route::get('/adm/view/profile', 'AdministradorController@myProfile')->name('administrador.myProfile');


//PROFESSOR

//ALUNO



//cadastro temporario de usuarios
Route::post('/cadastro_user', 'Register@insertUser')->name('insertUser');
Route::get('/register_user', 'Register@showRegister')->name('showRegister');

