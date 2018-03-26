<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;
use App\Formacao;
use App\Curso;
use App\NewsLetter;
use App\Agenda;
use App\Aluno;
use App\Modulo;
use App\Professor;
use App\Aula;
use App\Exercicio;
use App\Ebook;
use App\Depoimento;
use App\Consultora;
use App\Banner;
use App\Contato;
use App\MaterialRestrito;
use App\Video;
use App\Material;
use App\Inadimplencia;
use Auth;
use App\Imprensa;
use App\Blog;
use \Session;
use App\User;



class AdministradorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function dashboard()
    {
        return view('administrador.dashboard');
    }

    public function profile()
    {
        $administrador = $this->getAdministrador();
        return view('administrador.perfil.index', compact('administrador'));
    }

    public function create(Request $request)
    {
        $user = User::where('email', '=', $request['email'])->first();
        if($user == null){
            $user = User::create([
                'name' => $request['nome'],
                'email' => $request['email'],
                'permission' => 'PF',
                'password' => bcrypt($request['password']),
            ]);
        }
        $request = Controller::saveBase64($request, 'avatar', 'administradors');
        $request = Controller::formatDate( $request, 'nascimento' );
        $request['user_id'] = $user->id;
        $administrador = Administrador::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $administrador = Administrador::find( $id );
        $user = User::find( $administrador->user_id );
        $data['email'] = $request->email;

        if($request->password != ''){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        $request = Controller::saveBase64($request, 'avatar', 'administradors', $administrador->avatar);
        $request = Controller::formatDate($request, 'nascimento');
        $administrador->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }

    //inadimplencia
    public function inadimplencia_index()
    {
        $inadimplencias = Inadimplencia::all();
        return view('administrador.financeiro.inadimplencia.index', compact('inadimplencias'));
    }

    public function inadimplencia_novo()
    {
        return view('administrador.financeiro.inadimplencia.novo');
    }

    public function inadimplencia_editar(Request $request, $id)
    {
        $inadimplencia = Inadimplencia::find($id);
        return view('administrador.financeiro.inadimplencia.editar', compact('inadimplencia'));
    }

    //PROFESSORES E AULAS
    public function getAdministrador()
    {
        $userId = Auth::user()->id;
        return Administrador::where('user_id', '=', $userId)->get()->first();

    }

    public function visao_aluno()
    {
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.aluno.visao.index', compact('agendas'));
    }

    public function get_visao_aluno(Request $request)
    {
        $querys = $request->query();
        $modulo = Modulo::find( $querys['modulo_id'] );
        $administrador = $this->getAdministrador();
        return view('administrador.aluno.visao.modulos.index', compact('modulo', 'administrador', 'modulo'));
    }

    public function aulas(Request $request, $id)
    {
        $administrador = $this->getAdministrador();
        $modulo = Modulo::find($id);
        $aulas = $modulo->aulas;
        return view('administrador.aluno.visao.modulos.aulas.index', compact('aulas', 'administrador', 'modulo'));
    }

    public function exercicios(Request $request, $id)
    {
        $administrador = $this->getAdministrador();
        $modulo = Modulo::find($id);
        $exercicios = $modulo->exercicios;
        return view('administrador.aluno.visao.modulos.exercicios.index', compact('exercicios', 'administrador', 'modulo'));
    }

    public function materiais(Request $request, $id)
    {
        $administrador = $this->getAdministrador();
        $modulo = Modulo::find($id);
        $materiais = $modulo->materiais;
        return view('administrador.aluno.visao.modulos.materiais.index', compact('materiais', 'administrador','modulo'));
    }

    public function videos(Request $request, $id)
    {
        $administrador = $this->getAdministrador();
        $modulo = Modulo::find($id);
        $videos = $modulo->videos;
        return view('administrador.aluno.visao.modulos.videos.index', compact('videos', 'administrador', 'modulo'));
    }


    public function material_index()
    {
        $materiais = Material::where('visible', '=', '1')->get();
        return view('administrador.professores_aulas.material.index', compact('materiais'));
    }

    public function material_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.material.novo', compact('agendas'));
    }

    public function material_editar($id)
    {
        $material = Material::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.material.editar', compact('agendas', 'material'));
    }

    //PROFESSORES E AULAS
    public function ebook_index()
    {
        $ebooks = Ebook::all();
        return view('administrador.website.ebook.index', compact('ebooks'));
    }

    public function ebook_novo()
    {
        return view('administrador.website.ebook.novo');
    }

    public function ebook_editar($id)
    {
        $ebook = Ebook::find($id);
        return view('administrador.website.ebook.editar', compact('ebook'));
    }

    //exercicio
    public function exercicio_index()
    {
        $exercicios = Exercicio::where('visible', '=', '1')->get();
        return view('administrador.professores_aulas.exercicio.index', compact('exercicios'));
    }

    public function exercicio_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.exercicio.novo', compact('agendas'));
    }

    public function exercicio_editar($id)
    {
        $exercicio = Exercicio::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.exercicio.editar', compact('agendas', 'exercicio'));
    }


    //aula
    public function aula_index()
    {
        $aulas = Aula::where('visible', '=', '1')->get();
        return view('administrador.professores_aulas.aula.index', compact('aulas'));
    }

    public function aula_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.aula.novo', compact('agendas'));
    }

    public function aula_editar($id)
    {
        $aula = Aula::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.aula.editar', compact('agendas', 'aula'));
    }

    //video
    public function videoconferencia_index()
    {
        $videos = Video::where('visible', '=', '1')->get();
        return view('administrador.professores_aulas.videoconferencia.index', compact('videos'));
    }

    public function videoconferencia_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.videoconferencia.novo', compact('agendas'));
    }

    public function videoconferencia_editar($id)
    {
        $video = Video::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        return view('administrador.professores_aulas.videoconferencia.editar', compact('agendas', 'video'));
    }

    //professores
    public function professor_index()
    {
        $professores = Professor::where('visible', '=', '1')->get();
        return view('administrador.professores_aulas.professor.index', compact('professores'));
    }

    public function professor_novo()
    {
        return view('administrador.professores_aulas.professor.novo');
    }

    public function professor_visualizar($id)
    {
        $professor = Professor::find($id);
        return view('administrador.professores_aulas.professor.index', compact('professor'));
    }

    public function professor_editar($id)
    {
        $professor = Professor::find($id);
        return view('administrador.professores_aulas.professor.editar', compact('professor'));
    }


    //depoimentos
    public function depoimento_index()
    {
        $depoimentos = Depoimento::where('visible', '=', '1')->get();
        return view('administrador.website.depoimentos.index', compact('depoimentos'));
    }

    public function depoimento_novo()
    {
        return view('administrador.website.depoimentos.novo');
    }

    public function depoimento_visualizar($id)
    {
        $depoimento = Depoimento::find($id);
        return view('administrador.website.depoimentos.visualizar', compact('depoimento'));
    }

    public function depoimento_editar($id)
    {
        $depoimento = Depoimento::find($id);
        return view('administrador.website.depoimentos.editar', compact('depoimento'));
    }


    //consultoras
        public function consultora_index()
    {
        $consultoras = Consultora::where('visible', '=', '1')->get();
        return view('administrador.website.consultoras.index', compact('consultoras'));
    }

    public function consultora_novo()
    {
        return view('administrador.website.consultoras.novo');
    }

    public function consultora_visualizar($id)
    {
        $consultora = Consultora::find($id);
        return view('administrador.website.consultoras.visualizar', compact('consultora'));
    }

    public function consultora_editar($id)
    {
        $consultora = Consultora::find($id);
        return view('administrador.website.consultoras.editar', compact('consultora'));
    }




    //CURSOS E MODULOS
    public function formacao_index()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        return view('administrador.cursos_modulos.formacao.index', compact('formacoes'));
    }

    public function formacao_novo()
    {
        return view('administrador.cursos_modulos.formacao.novo');
    }

    public function formacao_editar(Request $request, $id)
    {
        $formacao = Formacao::find( $id );
        return view('administrador.cursos_modulos.formacao.editar', compact('formacao'));
    }


    //cursos
    public function curso_editar(Request $request, $id)
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $curso = Curso::find( $id );
        return view('administrador.cursos_modulos.curso.editar', compact('curso', 'formacoes'));
    }

    public function curso_index()
    {
        $cursos = Curso::where('visible', '=', '1')->get();
        return view('administrador.cursos_modulos.curso.index', compact('cursos'));
    }

    public function curso_visualizar(Request $request, $id)
    {
        $curso = Curso::find( $id );
        return view('administrador.cursos_modulos.curso.visualizar', compact('curso'));
    }

    public function curso_novo()
    {
        $count = Formacao::where('visible', '=', '1')->get()->count();
        if($count > 0){
            $formacoes = Formacao::where('visible', '=', '1')->get();
            return view('administrador.cursos_modulos.curso.novo', compact('formacoes'));
        }else{
            Session::flash('message' , 'Necessário inserir "Tipos de Curso" para poder cadastrar um curso!'); //<--FLASH MESSAGE
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('administrador.curso.index'));
        }
    }

    //cursos
    public function modulo_editar(Request $request, $id)
    {
        $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
        $modulo = Modulo::find( $id );
        return view('administrador.cursos_modulos.modulo.editar', compact('modulo', 'agendas'));
    }

    public function modulo_index()
    {
        $modulos = Modulo::where('visible', '=', '1')->get();
        return view('administrador.cursos_modulos.modulo.index', compact('modulos'));
    }

    public function modulo_visualizar(Request $request, $id)
    {
        $curso = Curso::find( $id );
        return view('administrador.cursos_modulos.modulo.visualizar', compact('curso'));
    }

    public function modulo_novo()
    {
        $count = Agenda::count();
        if($count > 0){
            $agendas = Agenda::where('modelo', '=', 'D')
                          ->where('visible', '=', '1')
                          ->get();
            return view('administrador.cursos_modulos.modulo.novo', compact('agendas'));
        }else{
            Session::flash('message' , 'Necessário inserir "Cursos" para poder cadastrar um módulo!'); //<--FLASH MESSAGE
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('administrador.modulo.index'));
        }
    }


    //aluno
    public function aluno_editar(Request $request, $id)
    {
        $aluno = Aluno::find( $id );
        $agendas = Agenda::where('visible', '=', '1')->get();
        return view('administrador.aluno.editar', compact('aluno', 'agendas'));
    }

    public function aluno_index()
    {
        $alunos = Aluno::where('visible', '=', '1')->get();
        return view('administrador.aluno.index', compact('alunos'));
    }

    public function aluno_visualizar(Request $request, $id)
    {
        $aluno = Aluno::find( $id );
        return view('administrador.aluno.visualizar', compact('aluno'));
    }

    public function aluno_novo()
    {
        $agendas = Agenda::where('visible', '=', '1')->get();
        return view('administrador.aluno.novo', compact('agendas'));
    }

    //agenda
    public function agenda_editar(Request $request, $id)
    {
        $agenda = Agenda::find( $id );
        $cursos = Curso::where('visible', '=', '1')->get();
        return view('administrador.website.agenda.editar', compact('agenda', 'cursos'));
    }

    public function agenda_index()
    {
        $agendas = Agenda::where('visible', '=', '1')->get();
        return view('administrador.website.agenda.index', compact('agendas'));
    }

    public function agenda_visualizar(Request $request, $id)
    {
        $agenda = Agenda::find( $id );
        return view('administrador.website.agenda.visualizar', compact('agenda'));
    }

    public function agenda_novo()
    {
        $count = Curso::where('visible', '=', '1')->get()->count();
        if($count > 0){
            $cursos = Curso::where('visible', '=', '1')->get();
            return view('administrador.website.agenda.novo', compact('cursos'));
        }else{
            Session::flash('message' , 'Necessário inserir "Cursos" para poder cadastrar uma Agenda!'); //<--FLASH MESSAGE
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('administrador.agenda.index'));
        }
    }

    //banners
    public function banner_editar(Request $request, $id)
    {
        $banner = Banner::find( $id );
        return view('administrador.website.banner.editar', compact('banner'));
    }

    public function banner_index()
    {
        $banners = Banner::where('visible', '=', '1')->get();
        return view('administrador.website.banner.index', compact('banners'));
    }

    public function banner_visualizar(Request $request, $id)
    {
        $banner = Banner::find( $id );
        return view('administrador.website.banner.visualizar', compact('banner'));
    }

    public function banner_novo()
    {
        return view('administrador.website.banner.novo');
    }

    //imprensa
    public function imprensa_editar(Request $request, $id)
    {
        $imprensa = Imprensa::find( $id );
        return view('administrador.website.imprensa.editar', compact('imprensa'));
    }

    public function imprensa_index()
    {
        $imprensas = Imprensa::all();
        return view('administrador.website.imprensa.index', compact('imprensas'));
    }

    public function imprensa_novo()
    {
        return view('administrador.website.imprensa.novo');
    }


    //blog
    public function blog_editar(Request $request, $id)
    {
        $blog = Blog::find( $id );
        return view('administrador.website.blog.editar', compact('blog'));
    }

    public function blog_index()
    {
        $blogs = Blog::all();
        return view('administrador.website.blog.index', compact('blogs'));
    }


    public function blog_novo()
    {
        return view('administrador.website.blog.novo');
    }


    public function newsletter()
    {
        $newsletters = NewsLetter::all();
        return view('administrador.website.newsletter', compact('newsletters'));
    }

    public function contato_index()
    {
        $contatos = Contato::all();
        return view('administrador.website.contatos.index', compact('contatos'));
    }

    public function contato_visualizar($id)
    {
        $contato = Contato::find($id);
        return view('administrador.website.contatos.visualizar', compact('contato'));
    }

    //acesso restrito
    public function acesso_restrito_editar(Request $request, $id)
    {
        $acesso = MaterialRestrito::find( $id );
        // $cursos = Curso::all();
        return view('administrador.website.acesso_restrito.editar', compact('acesso'));
    }

    public function acesso_restrito_index()
    {
        $acessos = MaterialRestrito::where('visible', '=', '1')->get();
        return view('administrador.website.acesso_restrito.index', compact('acessos'));
    }


    public function acesso_restrito_novo()
    {
        // $count = Curso::count();
        // if($count > 0){
        //     $cursos = Curso::all();
            return view('administrador.website.acesso_restrito.novo');
        // }else{
        //     Session::flash('message' , 'Necessário inserir "Cursos" para poder cadastrar um Material!'); //<--FLASH MESSAGE
        //     Session::flash('alert-class', 'alert-danger');
        //     return redirect(route('administrador.acesso_restrito.index'));
        // }
    }


}
