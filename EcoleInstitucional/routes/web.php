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

Route::get('/', 'IndexController@home')->name('index');
Route::get('/escola', 'IndexController@escola')->name('escola');
Route::get('/restrito', 'IndexController@restrito')->name('restrito');
Route::get('/blog', 'IndexController@blog')->name('blog');
Route::get('/certificacao', 'IndexController@certificacao')->name('certificacao');
Route::get('/sou_ecole', 'IndexController@sou_ecole')->name('sou_ecole');
Route::get('/contato', 'IndexController@contato')->name('contato');
Route::get('/cursos', 'IndexController@cursos')->name('cursos');
Route::get('/depoimentos', 'IndexController@depoimentos')->name('depoimentos');



Auth::routes();

