<?php

namespace App\Http\Controllers;

use App\Professor;
use App\User;
use App\Agenda;
use App\Modulo;
use App\Curso;
use App\Aula;
use App\Aluno;
use \Auth;
use App\Exercicio;
use App\Material;
use App\Video;
use App\VideoConferencia;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function getProfessor()
    {
        $userId = Auth::user()->id;
        return Professor::where('user_id', '=', $userId)->get()->first();
    }

    public function visao_aluno()
    {
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.aluno.visao.index', compact('agendas'));
    }

    public function get_visao_aluno(Request $request)
    {
        $querys = $request->query();
        $modulo = Modulo::find( $querys['modulo_id'] );
        $professor = $this->getProfessor();
        return view('professor.aluno.visao.modulos.index', compact('modulo', 'professor'));
    }

    public function aulas(Request $request, $id)
    {
        $professor = $this->getProfessor();
        $modulo = Modulo::find($id);
        $aulas = $modulo->aulas;
        return view('professor.aluno.visao.modulos.aulas.index', compact('aulas', 'professor'));
    }

    public function exercicios(Request $request, $id)
    {
        $professor = $this->getProfessor();
        $modulo = Modulo::find($id);
        $exercicios = $modulo->exercicios;
        return view('professor.aluno.visao.modulos.exercicios.index', compact('exercicios', 'professor'));
    }

    public function aluno_index()
    {
        $alunos = Aluno::all();
        return view('professor.aluno.index', compact('alunos'));
    }

    public function materiais(Request $request, $id)
    {
        $professor = $this->getProfessor();
        $modulo = Modulo::find($id);
        $materiais = $modulo->materiais;
        return view('professor.aluno.visao.modulos.materiais.index', compact('materiais', 'professor'));
    }

    public function videos(Request $request, $id)
    {
        $professor = $this->getProfessor();
        $modulo = Modulo::find($id);
        $videos = $modulo->videos;
        return view('professor.aluno.visao.modulos.videos.index', compact('videos', 'professor'));
    }


    public function material_index()
    {
        $materiais = Material::all();
        return view('professor.professores_aulas.material.index', compact('materiais'));
    }

    public function material_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.material.novo', compact('agendas'));
    }

    public function material_editar($id)
    {
        $material = Material::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.material.editar', compact('agendas', 'material'));
    }

    //exercicio
    public function exercicio_index()
    {
        $exercicios = Exercicio::all();
        return view('professor.professores_aulas.exercicio.index', compact('exercicios'));
    }

    public function exercicio_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.exercicio.novo', compact('agendas'));
    }

    public function exercicio_editar($id)
    {
        $exercicio = Exercicio::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.exercicio.editar', compact('agendas', 'exercicio'));
    }


    //aula
    public function aula_index()
    {
        $aulas = Aula::all();
        return view('professor.professores_aulas.aula.index', compact('aulas'));
    }

    public function aula_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.aula.novo', compact('agendas'));
    }

    public function aula_editar($id)
    {
        $aula = Aula::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.aula.editar', compact('agendas', 'aula'));
    }

    //video
    public function videoconferencia_index()
    {
        $videos = Video::all();
        return view('professor.professores_aulas.videoconferencia.index', compact('videos'));
    }

    public function videoconferencia_novo()
    {
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.videoconferencia.novo', compact('agendas'));
    }

    public function videoconferencia_editar($id)
    {
        $video = Video::find($id);
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        return view('professor.professores_aulas.videoconferencia.editar', compact('agendas', 'video'));
    }

    //professores
    public function professor_index()
    {
        $professores = Professor::all();
        return view('professor.professores_aulas.professor.index', compact('professores'));
    }

    public function professor_novo()
    {
        return view('professor.professores_aulas.professor.novo');
    }

    public function professor_visualizar($id)
    {
        $professor = Professor::find($id);
        return view('professor.professores_aulas.professor.index', compact('professor'));
    }

    public function professor_editar($id)
    {
        $professor = Professor::find($id);
        return view('professor.professores_aulas.professor.editar', compact('professor'));
    }

    //cursos
    public function modulo_editar(Request $request, $id)
    {
        $agendas = Agenda::where('modelo', '=', 'D')->get();
        $modulo = Modulo::find( $id );
        return view('professor.cursos_modulos.modulo.editar', compact('modulo', 'agendas'));
    }

    public function modulo_index()
    {
        $modulos = Modulo::all();
        return view('professor.cursos_modulos.modulo.index', compact('modulos'));
    }

    public function modulo_visualizar(Request $request, $id)
    {
        $curso = Curso::find( $id );
        return view('professor.cursos_modulos.modulo.visualizar', compact('curso'));
    }

    public function modulo_novo()
    {
        $count = Agenda::count();
        if($count > 0){
            $agendas = Agenda::where('modelo', '=', 'D')->get();
            return view('professor.cursos_modulos.modulo.novo', compact('agendas'));
        }else{
            Session::flash('message' , 'Necessário inserir "Cursos" para poder cadastrar um módulo!'); //<--FLASH MESSAGE
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('professor.modulo.index'));
        }
    }

    public function dashboard()
    {
        return view('professor.dashboard');
    }

    public function profile()
    {
        return view('professor.perfil.index');
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

        $request = Controller::saveBase64($request, 'avatar', 'professores');
        $request = Controller::formatDate( $request, 'nascimento' );
        $request['user_id'] = $user->id;
        $professor = Professor::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::find( $id );
        $user = User::find( $professor->user_id );
        $data['email'] = $request->email;

        if($request->password != ''){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);
        $request = Controller::saveBase64($request, 'avatar', 'professores', $professor->avatar);
        $request = Controller::formatDate($request, 'nascimento');
        $professor->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
