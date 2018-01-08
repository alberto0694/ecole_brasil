<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Curso;
use App\User;
use App\Agenda;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function dashboard()
    {
        return view('aluno.dashboard');
    }

    public function profile()
    {
        return view('aluno.perfil.index');
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
        $request = Controller::formatDate( $request, 'nascimento' );
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
        $request = Controller::formatDate( $request, 'nascimento' );        
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
        //
    }
}
