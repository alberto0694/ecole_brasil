<?php

Auth::routes();


Route::get('/ead', 'WebsiteController@ead')->name('ead.login'); //tela de login ead
Route::get('/admin', 'HomeController@admin')->name('admin.login'); //tela de login admin
Route::get('/professor', 'HomeController@professor')->name('professor.login'); //tela de login admin
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


//aulas
Route::post('/aula/create', 'AulaController@create')->name('aula.create');
Route::put('/aula/update/{id}', 'AulaController@update')->name('aula.update');
Route::delete('/aula/delete/{id}', 'AulaController@delete')->name('aula.delete');

//exercicios
Route::post('/exercicio/create', 'ExercicioController@create')->name('exercicio.create');
Route::put('/exercicio/update/{id}', 'ExercicioController@update')->name('exercicio.update');
Route::delete('/exercicio/delete/{id}', 'ExercicioController@delete')->name('exercicio.delete');

//Ebook
Route::post('/ebook/create', 'EbookController@create')->name('ebook.create');
Route::put('/ebook/update/{id}', 'EbookController@update')->name('ebook.update');
Route::delete('/ebook/delete/{id}', 'EbookController@delete')->name('ebook.delete');

//Material
Route::post('/material/create', 'MaterialController@create')->name('material.create');
Route::put('/material/update/{id}', 'MaterialController@update')->name('material.update');
Route::delete('/material/delete/{id}', 'MaterialController@delete')->name('material.delete');

//video
Route::post('/videoconferencia/create', 'VideoController@create')->name('videoconferencia.create');
Route::put('/videoconferencia/update/{id}', 'VideoController@update')->name('videoconferencia.update');
Route::delete('/videoconferencia/delete/{id}', 'VideoController@delete')->name('videoconferencia.delete');


//imprensa
Route::post('/imprensa/create', 'ImprensaController@create')->name('imprensa.create');
Route::put('/imprensa/update/{id}', 'ImprensaController@update')->name('imprensa.update');
Route::delete('/imprensa/delete/{id}', 'ImprensaController@delete')->name('imprensa.delete');

//imprensa
Route::post('/blog/create', 'BlogController@create')->name('blog.create');
Route::put('/blog/update/{id}', 'BlogController@update')->name('blog.update');
Route::delete('/blog/delete/{id}', 'BlogController@delete')->name('blog.delete');

//acesso restrito
Route::post('/acesso_restrito_create', 'MaterialRestritoController@create')->name('acesso_restrito.create');
Route::put('/acesso_restrito_update/{id}', 'MaterialRestritoController@update')->name('acesso_restrito.update');
Route::delete('/acesso_restrito_delete/{id}', 'MaterialRestritoController@delete')->name('acesso_restrito.delete');

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

//inadimplencia
Route::post('/inadimplencia/create', 'InadimplenciaController@create')->name('inadimplencia.create');
Route::put('/inadimplencia/update/{id}', 'InadimplenciaController@update')->name('inadimplencia.update');
Route::delete('/inadimplencia/delete/{id}', 'InadimplenciaController@delete')->name('inadimplencia.delete');

//Agenda
Route::post('/agenda/create', 'AgendaController@create')->name('agenda.create');
Route::put('/agenda/update/{id}', 'AgendaController@update')->name('agenda.update');
Route::delete('/agenda/delete/{id}', 'AgendaController@delete')->name('agenda.delete');
Route::get('/agenda_modulos', 'AgendaController@agenda_modulos')->name('agenda.modulos'); //rota de
Route::get('/agenda_parcelas', 'AgendaController@agenda_parcelas')->name('agenda.parcelas'); //rota de

//depoimentos
Route::post('/depoimento/create', 'DepoimentoController@create')->name('depoimento.create');
Route::put('/depoimento/update/{id}', 'DepoimentoController@update')->name('depoimento.update');
Route::delete('/depoimento/delete/{id}', 'DepoimentoController@delete')->name('depoimento.delete');


//consultora
Route::post('/consultora/create', 'ConsultoraController@create')->name('consultora.create');
Route::put('/consultora/update/{id}', 'ConsultoraController@update')->name('consultora.update');
Route::delete('/consultora/delete/{id}', 'ConsultoraController@delete')->name('consultora.delete');

//banners
Route::post('/banner/create', 'BannerController@create')->name('banner.create');
Route::put('/banner/update/{id}', 'BannerController@update')->name('banner.update');
Route::delete('/banner/delete/{id}', 'BannerController@delete')->name('banner.delete');


//================ ALUNOS VIEWS ======================
Route::get('/alunos/dashboard', 'AlunoController@dashboard')->name('aluno.dashboard');
Route::get('/alunos/acesso_restrito', 'AlunoController@acesso_restrito')->name('aluno.acesso_restrito');
Route::get('/alunos/modulos/{id}', 'AlunoController@acesso_modulo')->name('aluno.modulo');
Route::get('/perfil/aluno/{id}', 'AlunoController@profile')->name('aluno.profile');
Route::get('/aluno/{id}/aulas', 'AlunoController@aulas')->name('aluno.aulas');
Route::get('/aluno/{id}/exercicios', 'AlunoController@exercicios')->name('aluno.exercicios');
Route::get('/aluno/{id}/materiais', 'AlunoController@materiais')->name('aluno.materiais');
Route::get('/aluno/{id}/videos', 'AlunoController@videos')->name('aluno.videos');

Route::post('/aluno/aula/comentario', 'AulaComentarioController@create')->name('AulaComentario.create');
Route::post('/aluno/exercicio/comentario', 'ExercicioComentarioController@create')->name('ExercicioComentario.create');
Route::post('/aluno/material/comentario', 'MaterialComentarioController@create')->name('MaterialComentario.create');
Route::post('/aluno/video/comentario', 'VideoComentarioController@create')->name('VideoComentario.create');


Route::get('/aula_comentario/list', 'AulaComentarioController@get_comentario')->name("aula.get.comentario");
Route::get('/exercicio_comentario/list', 'ExercicioComentarioController@get_comentario')->name("exercicio.get.comentario");
Route::get('/material_comentario/list', 'MaterialComentarioController@get_comentario')->name("material.get.comentario");
Route::get('/video_comentario/list', 'VideoComentarioController@get_comentario')->name("video.get.comentario");


//================ PROFESSOR VIEWS ======================
Route::get('/professores/dashboard', 'ProfessorController@dashboard')->name('professor.dashboard');
Route::get('/professores/profile', 'ProfessorController@profile')->name('professor.profile.visualizar');
Route::get('/professores/aluno/visao', 'ProfessorController@visao_aluno')->name('professor.aluno.visao');
Route::get('/professores/aluno/visao/modulos', 'ProfessorController@get_visao_aluno')->name('professor.aluno.get.visao');

Route::get('/professores/{id}/aulas', 'ProfessorController@aulas')->name('professor.aluno.aulas');
Route::get('/professores/{id}/exercicios', 'ProfessorController@exercicios')->name('professor.aluno.exercicios');
Route::get('/professores/{id}/materiais', 'ProfessorController@materiais')->name('professor.aluno.materiais');
Route::get('/professores/{id}/videos', 'ProfessorController@videos')->name('professor.aluno.videos');

//material
Route::get('/professores/material/index', 'ProfessorController@material_index')->name('professor.material.index');
Route::get('/professores/material/novo', 'ProfessorController@material_novo')->name('professor.material.novo');
Route::get('/professores/material/editar/{id}', 'ProfessorController@material_editar')->name('professor.material.editar');

//exercicios
Route::get('/professores/exercicio/index', 'ProfessorController@exercicio_index')->name('professor.exercicio.index');
Route::get('/professores/exercicio/novo', 'ProfessorController@exercicio_novo')->name('professor.exercicio.novo');
Route::get('/professores/exercicio/editar/{id}', 'ProfessorController@exercicio_editar')->name('professor.exercicio.editar');

//aula
Route::get('/professores/aula/index', 'ProfessorController@aula_index')->name('professor.aula.index');
Route::get('/professores/aula/novo', 'ProfessorController@aula_novo')->name('professor.aula.novo');
Route::get('/professores/aula/editar/{id}', 'ProfessorController@aula_editar')->name('professor.aula.editar');

//videoconferencia
Route::get('/professores/videoconferencia/index', 'ProfessorController@videoconferencia_index')->name('professor.videoconferencia.index');
Route::get('/professores/videoconferencia/novo', 'ProfessorController@videoconferencia_novo')->name('professor.videoconferencia.novo');
Route::get('/professores/videoconferencia/editar/{id}', 'ProfessorController@videoconferencia_editar')->name('professor.videoconferencia.editar');

//modulo
Route::get('/professores/modulo/index', 'ProfessorController@modulo_index')->name('professor.modulo.index');
Route::get('/professores/modulo/novo', 'ProfessorController@modulo_novo')->name('professor.modulo.novo');
Route::get('/professores/modulo/editar/{id}', 'ProfessorController@modulo_editar')->name('professor.modulo.editar');

//Video
Route::get('/professores/video/index', 'ProfessorController@video_index')->name('professor.video.index');
Route::get('/professores/video/novo', 'ProfessorController@video_novo')->name('professor.video.novo');
Route::get('/professores/video/editar/{id}', 'ProfessorController@video_editar')->name('professor.video.editar');

//material
Route::get('/professores/material/index', 'ProfessorController@material_index')->name('professor.material.index');
Route::get('/professores/material/novo', 'ProfessorController@material_novo')->name('professor.material.novo');
Route::get('/professores/material/editar/{id}', 'ProfessorController@material_editar')->name('professor.material.editar');

//exercicios
Route::get('/professores/exercicio/index', 'ProfessorController@exercicio_index')->name('professor.exercicio.index');
Route::get('/professores/exercicio/novo', 'ProfessorController@exercicio_novo')->name('professor.exercicio.novo');
Route::get('/professores/exercicio/editar/{id}', 'ProfessorController@exercicio_editar')->name('professor.exercicio.editar');

//aula
Route::get('/professores/aula/index', 'ProfessorController@aula_index')->name('professor.aula.index');
Route::get('/professores/aula/novo', 'ProfessorController@aula_novo')->name('professor.aula.novo');
Route::get('/professores/aula/editar/{id}', 'ProfessorController@aula_editar')->name('professor.aula.editar');

Route::get('/professores/aluno/index', 'ProfessorController@aluno_index')->name('professor.aluno.index');

//================ ALUNOS_RESTRITO VIEWS ======================
Route::get('/aluno_restrito/dashboard', 'AlunoRestritoController@dashboard')->name('aluno_restrito.dashboard');

//================ ADMINISTRADOR VIEWS ======================
//professores
Route::post('/administrador/create', 'AdministradorController@create')->name('administrador.create');
Route::put('/administrador/update/{id}', 'AdministradorController@update')->name('administrador.update');
Route::delete('/administrador/delete/{id}', 'AdministradorController@delete')->name('administrador.delete');

Route::get('/adm/dashboard', 'AdministradorController@dashboard')->name('administrador.dashboard');
Route::get('/adm/view/profile', 'AdministradorController@profile')->name('administrador.profile.visualizar');
Route::get('/adm/editar/formacao/{id}', 'AdministradorController@formacao_editar')->name('administrador.formacao.editar');
Route::get('/adm/formacao', 'AdministradorController@formacao_index')->name('administrador.formacao.index');
Route::get('/adm/novo/formacao', 'AdministradorController@formacao_novo')->name('administrador.formacao.novo');
Route::get('/adm/novo/curso', 'AdministradorController@curso_novo')->name('administrador.curso.novo');
Route::get('/adm/quadro/curso', 'AdministradorController@curso_index')->name('administrador.curso.index');
Route::get('/adm/visualizar/curso/{id}', 'AdministradorController@curso_visualizar')->name('administrador.curso.visualizar');
Route::get('/adm/editar/curso/{id}', 'AdministradorController@curso_editar')->name('administrador.curso.editar');
Route::get('/adm/aluno/visao', 'AdministradorController@visao_aluno')->name('administrador.aluno.visao');
Route::get('/adm/aluno/visao/modulos', 'AdministradorController@get_visao_aluno')->name('administrador.aluno.get.visao');

Route::get('/adm/{id}/aulas', 'AdministradorController@aulas')->name('administrador.aluno.aulas');
Route::get('/adm/{id}/exercicios', 'AdministradorController@exercicios')->name('administrador.aluno.exercicios');
Route::get('/adm/{id}/materiais', 'AdministradorController@materiais')->name('administrador.aluno.materiais');
Route::get('/adm/{id}/videos', 'AdministradorController@videos')->name('administrador.aluno.videos');


//material
Route::get('/adm/material/index', 'AdministradorController@material_index')->name('administrador.material.index');
Route::get('/adm/material/novo', 'AdministradorController@material_novo')->name('administrador.material.novo');
Route::get('/adm/material/editar/{id}', 'AdministradorController@material_editar')->name('administrador.material.editar');

//material
Route::get('/adm/acesso_restrito/index', 'AdministradorController@acesso_restrito_index')->name('administrador.acesso_restrito.index');
Route::get('/adm/acesso_restrito/novo', 'AdministradorController@acesso_restrito_novo')->name('administrador.acesso_restrito.novo');
Route::get('/adm/acesso_restrito/editar/{id}', 'AdministradorController@acesso_restrito_editar')->name('administrador.acesso_restrito.editar');


//inadimplencia
Route::get('/adm/inadimplencia/index', 'AdministradorController@inadimplencia_index')->name('administrador.inadimplencia.index');
Route::get('/adm/inadimplencia/novo', 'AdministradorController@inadimplencia_novo')->name('administrador.inadimplencia.novo');
Route::get('/adm/inadimplencia/editar/{id}', 'AdministradorController@inadimplencia_editar')->name('administrador.inadimplencia.editar');

//exercicios
Route::get('/adm/exercicio/index', 'AdministradorController@exercicio_index')->name('administrador.exercicio.index');
Route::get('/adm/exercicio/novo', 'AdministradorController@exercicio_novo')->name('administrador.exercicio.novo');
Route::get('/adm/exercicio/editar/{id}', 'AdministradorController@exercicio_editar')->name('administrador.exercicio.editar');

//ebook
Route::get('/adm/ebook/index', 'AdministradorController@ebook_index')->name('administrador.ebook.index');
Route::get('/adm/ebook/novo', 'AdministradorController@ebook_novo')->name('administrador.ebook.novo');
Route::get('/adm/ebook/editar/{id}', 'AdministradorController@ebook_editar')->name('administrador.ebook.editar');

//aula
Route::get('/adm/aula/index', 'AdministradorController@aula_index')->name('administrador.aula.index');
Route::get('/adm/aula/novo', 'AdministradorController@aula_novo')->name('administrador.aula.novo');
Route::get('/adm/aula/editar/{id}', 'AdministradorController@aula_editar')->name('administrador.aula.editar');

//videoconferencia
Route::get('/adm/videoconferencia/index', 'AdministradorController@videoconferencia_index')->name('administrador.videoconferencia.index');
Route::get('/adm/videoconferencia/novo', 'AdministradorController@videoconferencia_novo')->name('administrador.videoconferencia.novo');
Route::get('/adm/videoconferencia/editar/{id}', 'AdministradorController@videoconferencia_editar')->name('administrador.videoconferencia.editar');

//modulo
Route::get('/adm/modulo/index', 'AdministradorController@modulo_index')->name('administrador.modulo.index');
Route::get('/adm/modulo/novo', 'AdministradorController@modulo_novo')->name('administrador.modulo.novo');
Route::get('/adm/modulo/editar/{id}', 'AdministradorController@modulo_editar')->name('administrador.modulo.editar');

//imprensa
Route::get('/adm/imprensa/index', 'AdministradorController@imprensa_index')->name('administrador.imprensa.index');
Route::get('/adm/imprensa/novo', 'AdministradorController@imprensa_novo')->name('administrador.imprensa.novo');
Route::get('/adm/imprensa/editar/{id}', 'AdministradorController@imprensa_editar')->name('administrador.imprensa.editar');

//blog
Route::get('/adm/blog/index', 'AdministradorController@blog_index')->name('administrador.blog.index');
Route::get('/adm/blog/novo', 'AdministradorController@blog_novo')->name('administrador.blog.novo');
Route::get('/adm/blog/editar/{id}', 'AdministradorController@blog_editar')->name('administrador.blog.editar');

//banner
Route::get('/adm/banner/index', 'AdministradorController@banner_index')->name('administrador.banner.index');
Route::get('/adm/banner/novo', 'AdministradorController@banner_novo')->name('administrador.banner.novo');
Route::get('/adm/banner/editar/{id}', 'AdministradorController@banner_editar')->name('administrador.banner.editar');

//Video
Route::get('/adm/video/index', 'AdministradorController@video_index')->name('administrador.video.index');
Route::get('/adm/video/novo', 'AdministradorController@video_novo')->name('administrador.video.novo');
Route::get('/adm/video/editar/{id}', 'AdministradorController@video_editar')->name('administrador.video.editar');

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

//contato
Route::get('/adm/contato/visualizar/{id}', 'AdministradorController@contato_visualizar')->name('administrador.contato.visualizar');
Route::get('/adm/contato/index', 'AdministradorController@contato_index')->name('administrador.contato.index');

//newsletter
Route::get('/adm/newsletter/index', 'AdministradorController@newsletter')->name('administrador.newsletter.index');

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

//agenda
Route::get('/adm/agenda/index', 'AdministradorController@agenda_index')->name('administrador.agenda.index');
Route::get('/adm/agenda/novo', 'AdministradorController@agenda_novo')->name('administrador.agenda.novo');
Route::get('/adm/agenda/visualizar/{id}', 'AdministradorController@agenda_visualizar')->name('administrador.agenda.visualizar');
Route::get('/adm/agenda/editar/{id}', 'AdministradorController@agenda_editar')->name('administrador.agenda.editar');


// =================== WEB SITE ================================
Route::get('/', 'WebsiteController@home')->name('index');
Route::get('/br/school/see/a-escola/16', 'WebsiteController@escola')->name('escola');
Route::get('/br/access', 'WebsiteController@restrito')->name('restrito');
Route::get('/blog', 'WebsiteController@blog')->name('blog');
Route::get('/br/certification/see/cnpc/14', 'WebsiteController@certificacao')->name('certificacao');
Route::get('/sou_ecole', 'WebsiteController@sou_ecole')->name('sou_ecole');
Route::get('/contato', 'WebsiteController@contato')->name('contato');
Route::get('/inscrição', 'WebsiteController@inscricao')->name('inscricao');
Route::get('/agenda', 'WebsiteController@agenda')->name('agenda');
Route::get('/ecole/cursos/{id}', 'WebsiteController@cursos')->name('cursos');
Route::get('/br/deposing', 'WebsiteController@depoimentos')->name('depoimentos');
Route::get('/br/school/see/faq/20', 'WebsiteController@faq')->name('faq');
Route::get('/br/press', 'WebsiteController@imprensa')->name('imprensa');
Route::get('/agenda/aluno', 'WebsiteController@compra_agenda')->name('compra.agenda'); //Agenda
Route::get('/cursos/listagem', 'WebsiteController@cursos_lista')->name('cursos.lista'); //Agenda
Route::get('/imprensa/materia/{id}', 'WebsiteController@materia')->name('materia');
Route::get('/blog/post/{id}', 'WebsiteController@blog_post')->name('post_blog');
Route::get('/br/consultants', 'WebsiteController@consultoras')->name('consultoras');
Route::get('/ebooks', 'WebsiteController@ebook')->name('ebook');
Route::get('/ebook_pagamento/{id}', 'WebsiteController@ebook_pagamento')->name('ebook_pagamento');
Route::get('/eshop', 'WebsiteController@eshop')->name('eshop');
Route::post('/contato_post', 'WebsiteController@sendContato')->name('email.contato');
Route::post('/newsletter_post', 'WebsiteController@sendNewsletter')->name('email.newsletter');
Route::post('/inscricao_post', 'WebsiteController@sendInscricao')->name('email.inscricao');

//ROTAS DE PAGAMENTOS
Route::post('/pagamento', 'PagamentoController@doPayment')->name('pagamento');
Route::post('/pagamento/inadimplencia/{id}', 'InadimplenciaController@update_pagamento')->name('pagamento.inadimplencia');
Route::post('/compra_agenda', 'AgendaController@buyAgenda')->name('pagamento.agenda');
Route::post('/ebook_email', 'WebsiteController@ebook_email')->name('ebook.email');
Route::get('/regularizacao/{id}', 'WebsiteController@regulariza_inadimplencia')->name('regulariza.inadimplencia');

Route::get('/manifesto', 'WebsiteController@manifesto')->name('manifesto');
Route::get('/equipe', 'WebsiteController@equipe')->name('equipe');
