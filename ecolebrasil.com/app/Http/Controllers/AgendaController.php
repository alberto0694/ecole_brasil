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
        $nascimento_data = $request['nascimento'];
        if($aluno == null){
            $request = Controller::formatDate( $request, 'nascimento' );
            $aluno = Aluno::create([
                    'nome' => $request['nome_aluno'],
                    'sobrenome' => $request['sobrenome_aluno'],
                    'user_id' => $user->id
            ]);
        }

        $aluno->avatar = asset('images/avatar3.png');
        $aluno->visible = '1';
        $aluno->save();

        $agenda = Agenda::find( $request['agenda_id'] );
        $aluno->addAgenda( $agenda );
        $data =  [   
                "nome" => $request->nome_aluno,
                "nome_aluno" => $aluno->nome,
                "sobrenome" => $aluno->sobrenome,
                "login" => $request->email,
                "portador" => $request->nome_cartao,
                "nome_curso" => $agenda->curso->nome,
                "data_inicio" => $agenda->formatedDate,
                "cidade" => $agenda->cidade,
                "agenda_valor" => $agenda->valor,
                "parcelas" => $request->num_parcelas,
                "card_curso" => asset($agenda->curso->card),
                "modelo" => $agenda->modelo,
                "password" => $request->password,
                "email" => $request['email'],
                "nascimento" => $nascimento_data,
                "cpf" => $request->cpf,
                "rg" => $request->rg,
                "endereco_rua" => $request->endereco_rua,
                "endereco_numero" => $request->endereco_numero,
                "endereco_bairro" => $request->endereco_bairro,
                "endereco_cidade" => $request->endereco_cidade,
                "endereco_estado" => $request->endereco_estado,
                "endereco_cep" => $request->endereco_cep,
                "estado_civil" => $request->estado_civil,
                "telefone" => $request->telefone,
                "consultoria" => $agenda->curso->id
        ];

        Mail::send('emails.aluno', $data, function ($message) use ($request, $data, $agenda){
            $message->from('contatosite@ecolebrasil.com', 'Ecole Supériere de Relooking');
            $message->to($request['email'])->subject('Bem-vindo à Ecole '.$data['nome'].' - '.$data['nome_curso']);
            $message->cc('alberto.pimentel.94@gmail.com')->subject('Recibo de inscrição - Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->cc('contato@ecolebrasil.com')->subject('Recibo de inscrição - Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->cc('admin@ecolebrasil.com')->subject('Recibo de inscrição - Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->cc('vandressa@esrelooking.com ')->subject('Recibo de inscrição - Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->attach(asset($agenda->curso->contrato_curso), ['as' => 'Contrato curso']);
        });

        Mail::send('emails.inscricao', $data, function ($message) use ($request, $data) {
            $message->from('contatosite@ecolebrasil.com', 'Inscrição Ecole Brasil '.$data['nome']);
            $message->cc('alberto.pimentel.94@gmail.com')->subject('Inscrição Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->cc('financeiro@esrelooking.com')->subject('Inscrição Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->cc('financeiro@ecolebrasil.com')->subject('Inscrição Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->to('contato@ecolebrasil.com')->subject('Inscrição Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->cc('admin@ecolebrasil.com')->subject('Inscrição Ecole Brasil '.$data['nome'])->replyTo($data['email']);
            $message->cc('vandressa@esrelooking.com ')->subject('Inscrição Ecole Brasil '.$data['nome'])->replyTo($data['email']);
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
        $agenda = Agenda::find($id);
        if($agenda){
            $modulos = $agenda->modulos;
            foreach ($modulos as $modulo) {

                $videos = $modulo->videos;
                $materiais = $modulo->materiais;
                $exercicios = $modulo->exercicios;
                $aulas = $modulo->aulas;

                foreach ($videos as $value) {
                    $value->visible = '0';
                    $value->save();
                }

                foreach ($materiais as $value) {
                    $value->visible = '0';
                    $value->save();
                }

                foreach ($exercicios as $value) {
                    $value->visible = '0';
                    $value->save();
                }

                foreach ($aulas as $value) {
                    $value->visible = '0';
                    $value->save();
                }
                $modulo->visible = '0';
                $modulo->save();
            }
            $agenda->visible = '0';
            $agenda->save();
        }
        return;

    }

    public function getParamsFromRequest($request)
    {
        
    }
}
