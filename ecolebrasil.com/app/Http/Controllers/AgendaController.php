<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Modulo;
use App\Aluno;
use App\User;
use \Mail;
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    public function buyAgenda(Request $request)
    {
        //CRIAÇÃO DO USUÁRIO
        $user = User::where('email', '=', $request['email'])->first();
        $aluno = null;
        $permission = '';

        if($user == null){
            if($request['modelo'] == 'D'){
                $permission = 'AL';
            }

            if($request['modelo'] == 'P'){
                $permission = 'AR';
            }
            $user = User::create([
                'name' => $request['nome_aluno'],
                'email' => $request['email'],
                'permission' => $permission,
                'password' => bcrypt($request['password']),
            ]);
        }else{
            $user->update([
                'name' => $request['nome_aluno'],
                'password' => bcrypt($request['password'])
            ]);
            $aluno = Aluno::where('user_id', '=', $user->id)->first();
        }

        //INSERÇÃO DO ALUNO E VINCULO COM AGENDA
        if($aluno == null){
            $request = Controller::formatDate( $request, 'nascimento' );
            $aluno = Aluno::create([
                    'nome' => $request['nome_aluno'],
                    'sobrenome' => $request['sobrenome_aluno'],
                    'nascimento' => $request['nascimento'],
                    'user_id' => $user->id
                ]);
        }

        $aluno->avatar = asset('images/avatar3.png');
        $aluno->save();

        $agenda = Agenda::find( $request['agenda_id'] );
        $aluno->addAgenda( $agenda );
        $data = [   "nome" => $request->nome,
                    "login" => $request->email,
                    "nome_curso" => $agenda->curso->nome,
                    "card_curso" => asset($agenda->curso->card)
                ];


        Mail::send('emails.aluno', $data, function ($message) use ($request)  {
            $message->from('alberto@metrocoletivo.com.br', 'Bem-vindo à Ecole');
            $message->to($request['email'])->subject('Bem-vindo à Ecole');
        });

        return response()->json(['status' => 'success'], 200);
    }

    public function agenda_modulos(Request $request)
    {
        $querys = $request->query();
        $modulos = Modulo::where('agenda_id', '=', $querys["agenda_id"])->orderBy('data_inicio', 'asc')->get()->toJson();
        return response()->json($modulos, 200);
    }

    public function agenda_parcelas(Request $request)
    {
        $querys = $request->query();
        $agenda = Agenda::where('id', '=', $querys["agenda_id"])->get()->toJson();
        return response()->json($agenda, 200);
    }

    public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'avatar', 'agendas');
        $request = Controller::formatDate( $request, 'data_inicio' );
        $agenda = Agenda::create( $request->all() );
        if($agenda->max_parcelas <= 1){
            $agenda->transacao = 4;
            $agenda->save();
        }
        return;
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::find( $id );
        $request = Controller::saveBase64($request, 'avatar', 'agendas', $agenda->avatar);
        $request = Controller::formatDate( $request, 'data_inicio' );
        $agenda->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
