<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;
use App\Formacao;
use App\Curso;
use App\Agenda;
use App\Aluno;
use App\Modulo;
use App\Professor;
use App\Aula;
use App\Exercicio;
use App\Depoimento;
use App\Consultora;
use App\Banner;
use App\Contato;
use App\Video;
use Auth;
use App\Imprensa;
use \Session;
use App\User;



class AdministradorController extends Controller
{

    public function dashboard()
    {
        return view('administrador.dashboard');
    }

    public function profile()
    {
        return view('administrador.perfil.index');
    }

    //PROFESSORES E AULAS
    public function material_index()
    {
        return view('administrador.professores_aulas.material.index');
    }

    public function exercicio_index()
    {
        return view('administrador.professores_aulas.exercicio.index');
    }

    public function aula_index()
    {
        return view('administrador.professores_aulas.aula.index');
    }

    public function videoconferencia_index()
    {
        return view('administrador.professores_aulas.videoconferencia.index');
    }

    //professores
    public function professor_index()
    {
        $professores = Professor::all();
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
        $depoimentos = Depoimento::all();
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
        $consultoras = Consultora::all();
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
        $formacoes = Formacao::all();
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
        $formacoes = Formacao::all();
        $curso = Curso::find( $id );
        return view('administrador.cursos_modulos.curso.editar', compact('curso', 'formacoes'));
    }

    public function curso_index()
    {
        $cursos = Curso::all();
        return view('administrador.cursos_modulos.curso.index', compact('cursos'));
    }

    public function curso_visualizar(Request $request, $id)
    {
        $curso = Curso::find( $id );
        return view('administrador.cursos_modulos.curso.visualizar', compact('curso'));
    }

    public function curso_novo()
    {
        $count = Formacao::count();        
        if($count > 0){
            $formacoes = Formacao::all();
            return view('administrador.cursos_modulos.curso.novo', compact('formacoes'));
        }else{
            Session::flash('message' , 'Necessário inserir "Formações" para poder cadastrar um curso!'); //<--FLASH MESSAGE
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('administrador.curso.index'));
        }
    }

    //cursos
    public function modulo_editar(Request $request, $id)
    {
        $cursos = Curso::all();
        $modulo = Modulo::find( $id );
        return view('administrador.cursos_modulos.modulo.editar', compact('modulo', 'cursos'));
    }

    public function modulo_index()
    {
        $modulos = Modulo::all();
        return view('administrador.cursos_modulos.modulo.index', compact('modulos'));
    }

    public function modulo_visualizar(Request $request, $id)
    {
        $curso = Curso::find( $id );
        return view('administrador.cursos_modulos.modulo.visualizar', compact('curso'));
    }

    public function modulo_novo()
    {
        $count = Curso::count();        
        if($count > 0){
            $cursos = Curso::all();
            return view('administrador.cursos_modulos.modulo.novo', compact('cursos'));
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
        return view('administrador.aluno.editar', compact('aluno'));
    }

    public function aluno_index()
    {
        $alunos = Aluno::all();
        return view('administrador.aluno.index', compact('alunos'));
    }

    public function aluno_visualizar(Request $request, $id)
    {
        $aluno = Aluno::find( $id );
        return view('administrador.aluno.visualizar', compact('aluno'));
    }

    public function aluno_novo()
    {
        return view('administrador.aluno.novo');
    }

    //agenda
    public function agenda_editar(Request $request, $id)
    {
        $agenda = Agenda::find( $id );
        $cursos = Curso::all();
        return view('administrador.website.agenda.editar', compact('agenda', 'cursos'));
    }

    public function agenda_index()
    {
        $agendas = Agenda::all();
        return view('administrador.website.agenda.index', compact('agendas'));
    }

    public function agenda_visualizar(Request $request, $id)
    {
        $agenda = Agenda::find( $id );
        return view('administrador.website.agenda.visualizar', compact('agenda'));
    }

    public function agenda_novo()
    {
        $count = Curso::count();        
        if($count > 0){
            $cursos = Curso::all();
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
        $banners = Banner::all();
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

}
