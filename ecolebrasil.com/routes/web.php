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


Route::get('/ead', 'HomeController@ead')->name('ead.login'); //tela de login ead
Route::get('/login', 'HomeController@index')->name('login'); //tela de login admin
Route::get('/redirect', 'HomeController@redirect')->name('redirect.permission'); //rota de redirecionamento

// ================ CRUDS ==============
//formacao
Route::post('/formacao/create', 'FormacaoController@create')->name('formacao.create');
Route::put('/formacao/update/{id}', 'FormacaoController@update')->name('formacao.update');
Route::delete('/formacao/delete/{id}', 'FormacaoController@delete')->name('formacao.delete');

//cursos
Route::post('/curso/create', 'CursoController@create')->name('curso.create');
Route::put('/curso/update/{id}', 'CursoController@update')->name('curso.update');
Route::delete('/curso/delete/{id}', 'CursoController@delete')->name('curso.delete');

//modulos
Route::post('/modulo/create', 'ModuloController@create')->name('modulo.create');
Route::put('/modulo/update/{id}', 'ModuloController@update')->name('modulo.update');
Route::delete('/modulo/delete/{id}', 'ModuloController@delete')->name('modulo.delete');

//professores
Route::post('/professor/create', 'ProfessorController@create')->name('professor.create');
Route::put('/professor/update/{id}', 'ProfessorController@update')->name('professor.update');
Route::delete('/professor/delete/{id}', 'ProfessorController@delete')->name('professor.delete');

//alunos
Route::post('/aluno/create', 'AlunoController@create')->name('aluno.create');
Route::put('/aluno/update/{id}', 'AlunoController@update')->name('aluno.update');
Route::delete('/aluno/delete/{id}', 'AlunoController@delete')->name('aluno.delete');


//depoimentos
Route::post('/depoimento/create', 'DepoimentoController@create')->name('depoimento.create');
Route::put('/depoimento/update/{id}', 'DepoimentoController@update')->name('depoimento.update');
Route::delete('/depoimento/delete/{id}', 'DepoimentoController@delete')->name('depoimento.delete');


//consultora
Route::post('/consultora/create', 'ConsultoraController@create')->name('consultora.create');
Route::put('/consultora/update/{id}', 'ConsultoraController@update')->name('consultora.update');
Route::delete('/consultora/delete/{id}', 'ConsultoraController@delete')->name('consultora.delete');


//================ ADMINISTRADOR VIEWS ======================

//ADMINSITRADOR
Route::get('/adm/dashboard', 'AdministradorController@dashboard')->name('administrador.dashboard');
Route::get('/adm/view/profile', 'AdministradorController@profile')->name('administrador.profile.visualizar');

//material
Route::get('/adm/material/index', 'AdministradorController@material_index')->name('administrador.material.index');
Route::get('/adm/material/novo', 'AdministradorController@material_novo')->name('administrador.material.novo');
Route::get('/adm/material/editar/{id}', 'AdministradorController@material_editar')->name('administrador.material.editar');

//exercicios
Route::get('/adm/exercicio/index', 'AdministradorController@exercicio_index')->name('administrador.exercicio.index');
Route::get('/adm/exercicio/novo', 'AdministradorController@exercicio_novo')->name('administrador.exercicio.novo');
Route::get('/adm/exercicio/editar/{id}', 'AdministradorController@exercicio_editar')->name('administrador.exercicio.editar');


//aula
Route::get('/adm/aula/index', 'AdministradorController@aula_index')->name('administrador.aula.index');
Route::get('/adm/aula/novo', 'AdministradorController@aula_novo')->name('administrador.aula.novo');
Route::get('/adm/aula/editar/{id}', 'AdministradorController@aula_editar')->name('administrador.aula.editar');

//videoconferencia
Route::get('/adm/videoconferencia/index', 'AdministradorController@video_index')->name('administrador.videoconferencia.index');
Route::get('/adm/videoconferencia/novo', 'AdministradorController@video_novo')->name('administrador.videoconferencia.novo');
Route::get('/adm/videoconferencia/editar/{id}', 'AdministradorController@video_editar')->name('administrador.videoconferencia.editar');

//modulo
Route::get('/adm/modulo/index', 'AdministradorController@modulo_index')->name('administrador.modulo.index');
Route::get('/adm/modulo/novo', 'AdministradorController@modulo_novo')->name('administrador.modulo.novo');
Route::get('/adm/modulo/editar/{id}', 'AdministradorController@modulo_editar')->name('administrador.modulo.editar');

//professores
Route::get('/adm/professor/index', 'AdministradorController@professor_index')->name('administrador.professor.index');
Route::get('/adm/professor/novo', 'AdministradorController@professor_novo')->name('administrador.professor.novo');
Route::get('/adm/professor/visualizar/{id}', 'AdministradorController@professor_visualizar')->name('administrador.professor.visualizar');
Route::get('/adm/professor/editar/{id}', 'AdministradorController@professor_editar')->name('administrador.professor.editar');

//consultoras
Route::get('/adm/consultoras/index', 'AdministradorController@consultora_index')->name('administrador.consultora.index');
Route::get('/adm/consultoras/novo', 'AdministradorController@consultora_novo')->name('administrador.consultora.novo');
Route::get('/adm/consultoras/visualizar/{id}', 'AdministradorController@consultora_visualizar')->name('administrador.consultora.visualizar');
Route::get('/adm/consultoras/editar/{id}', 'AdministradorController@consultora_editar')->name('administrador.consultora.editar');

//depoimentos
Route::get('/adm/depoimento/index', 'AdministradorController@depoimento_index')->name('administrador.depoimento.index');
Route::get('/adm/depoimento/novo', 'AdministradorController@depoimento_novo')->name('administrador.depoimento.novo');
Route::get('/adm/depoimento/visualizar/{id}', 'AdministradorController@depoimento_visualizar')->name('administrador.depoimento.visualizar');
Route::get('/adm/depoimento/editar/{id}', 'AdministradorController@depoimento_editar')->name('administrador.depoimento.editar');

//alunos
Route::get('/adm/aluno/index', 'AdministradorController@aluno_index')->name('administrador.aluno.index');
Route::get('/adm/aluno/novo', 'AdministradorController@aluno_novo')->name('administrador.aluno.novo');
Route::get('/adm/aluno/visualizar/{id}', 'AdministradorController@aluno_visualizar')->name('administrador.aluno.visualizar');
Route::get('/adm/aluno/editar/{id}', 'AdministradorController@aluno_editar')->name('administrador.aluno.editar');



//ADMINSITRADOR - CURSOS E MODULOS
Route::get('/adm/editar/formacao/{id}', 'AdministradorController@formacao_editar')->name('administrador.formacao.editar');
Route::get('/adm/formacao', 'AdministradorController@formacao_index')->name('administrador.formacao.index');
Route::get('/adm/novo/formacao', 'AdministradorController@formacao_novo')->name('administrador.formacao.novo');

Route::get('/adm/novo/curso', 'AdministradorController@curso_novo')->name('administrador.curso.novo');
Route::get('/adm/quadro/curso', 'AdministradorController@curso_index')->name('administrador.curso.index');
Route::get('/adm/visualizar/curso/{id}', 'AdministradorController@curso_visualizar')->name('administrador.curso.visualizar');
Route::get('/adm/editar/curso/{id}', 'AdministradorController@curso_editar')->name('administrador.curso.editar');



// =================== WEB SITE ================================
Route::get('/', 'WebsiteController@home')->name('index');
Route::get('/escola', 'WebsiteController@escola')->name('escola');
Route::get('/br/access', 'WebsiteController@restrito')->name('restrito');
Route::get('/blog', 'WebsiteController@blog')->name('blog');
Route::get('/certificacao', 'WebsiteController@certificacao')->name('certificacao');
Route::get('/sou_ecole', 'WebsiteController@sou_ecole')->name('sou_ecole');
Route::get('/contato', 'WebsiteController@contato')->name('contato');
Route::get('/cursos/{id}', 'WebsiteController@cursos')->name('cursos');
Route::get('/depoimentos', 'WebsiteController@depoimentos')->name('depoimentos');
