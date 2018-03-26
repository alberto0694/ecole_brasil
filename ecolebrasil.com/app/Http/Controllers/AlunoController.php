<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Curso;
use App\User;
use App\Agenda;
use App\Modulo;
use App\MaterialRestrito;
use \Auth;
use \Session;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function getAluno()
    {
        $userId = Auth::user()->id;
        return Aluno::where('user_id', '=', $userId)
                      ->where('visible', '=', '1')
                      ->get()->first();
    }

    public function acesso_restrito()
    {
        $aluno = $this->getAluno();
        $acessos_restritos = MaterialRestrito::where('visible', '=', '1')->get();
        return view('aluno.acesso_restrito', compact('aluno', 'acessos_restritos'));
    }

    public function dashboard()
    {
        $aluno = $this->getAluno();
        if($aluno == null){
            Auth::logout();
            Session::flash('message' , 'Login ou senha incorretos!'); //<--FLASH MESSAGE
            return redirect(url()->previous());
        }
        return view('aluno.dashboard', compact('aluno'));
    }

    public function profile()
    {
        $aluno = $this->getAluno();
        return view('aluno.profile', compact('aluno'));
    }

    public function acesso_modulo(Request $request, $id)
    {
        $modulo = Modulo::find( $id );
        $aluno = $this->getAluno();
        return view('aluno.modulos.index', compact('modulo', 'aluno'));
    }

    public function aulas(Request $request, $id)
    {
        $aluno = $this->getAluno();
        $modulo = Modulo::find($id);
        $aulas = $modulo->aulas;
        return view('aluno.modulos.aulas.index', compact('aulas', 'aluno'));
    }

    public function exercicios(Request $request, $id)
    {
        $aluno = $this->getAluno();
        $modulo = Modulo::find($id);
        $exercicios = $modulo->exercicios;
        return view('aluno.modulos.exercicios.index', compact('exercicios', 'aluno'));
    }

    public function materiais(Request $request, $id)
    {
        $aluno = $this->getAluno();
        $modulo = Modulo::find($id);
        $materiais = $modulo->materiais;
        return view('aluno.modulos.materiais.index', compact('materiais', 'aluno'));
    }

    public function videos(Request $request, $id)
    {
        $aluno = $this->getAluno();
        $modulo = Modulo::find($id);
        $videos = $modulo->videos;
        return view('aluno.modulos.videos.index', compact('videos', 'aluno'));
    }

    public function create(Request $request)
    {

        $user = User::where('email', '=', $request['email'])->first();
        if($user == null){
            $user = User::create([
                'name' => $request['nome'],
                'email' => $request['email'],
                'permission' => 'AL',
                'password' => bcrypt($request['password']),
            ]);
        }


        $request = Controller::saveBase64($request, 'avatar', 'alunos');
        if(($request['nascimento'] != null) && ($request['nascimento'] != '0')){
            $request = Controller::formatDate( $request, 'nascimento' );
        }
        $request['user_id'] = $user->id;
        $aluno = Aluno::create( $request->all() );
        if($request->agendas_alunos){
            foreach ($request->agendas_alunos as $id) {
                $agenda = Agenda::find( $id );
                $aluno->addAgenda( $agenda );
            }
        }
        return;
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find( $id );
        $user = User::find( $aluno->user_id );
        $data['email'] = $request->email;

        if($request->password != ''){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        $request = Controller::saveBase64($request, 'avatar', 'alunos', $aluno->avatar);
        if(($request['nascimento'] != null) && ($request['nascimento'] != '0')){
            $request = Controller::formatDate( $request, 'nascimento' );
        }
        $aluno->update( $request->all() );

        if($request->agendas_alunos){
            $aluno->removeAllAgendas();
            foreach ($request->agendas_alunos as $id) {
                $agenda = Agenda::find( $id );
                $aluno->addAgenda( $agenda );
            }

        }
        return;
    }

    public function delete(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->visible = '0';
        $aluno->save();
        return;
    }
}
