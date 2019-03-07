<?php

namespace App\Http\Controllers;

use App\Inadimplencia;
use Illuminate\Http\Request;
use Carbon\Carbon;
use \Mail;

class InadimplenciaController extends Controller
{
     public function create(Request $request)
    {
        $request = Controller::formatDate( $request, 'vencimento' );
        $inadimplencia = Inadimplencia::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::formatDate( $request, 'vencimento' );
        $inadimplencia = Inadimplencia::find( $id );
        $inadimplencia->update( $request->all() );
        return;
    }

    public function update_pagamento(Request $request, $id)
    {
        $inadimplencia = Inadimplencia::find($id);
        $inadimplencia->update(['pago' => 'S']);
        $data = [   "nome_completo" => $inadimplencia->nome,
                    "email" => $inadimplencia->email,
                    "valor" => $inadimplencia->valor,
                    "parcelas" => $request['parcelas'],
                    "descricao" => $inadimplencia->razao_pagamento];

        Mail::send('emails.inadimplencia', $data, function ($message) use ($data) {
            $message->from('contato@ecolebrasil.com', 'Pagamento Curso Link '.$data['nome_completo']);
            $message->to($data['email'])->subject('Ecole Brasil - Quitação de pendências');
            // $message->cc('alberto.pimentel.94@gmail.com')->subject('Pagamento de Inadimplencia '.$data['nome_completo']);
            $message->cc('contato@ecolebrasil.com')->subject('Pagamento de Inadimplencia '.$data['nome_completo']);
            $message->cc('admin@ecolebrasil.com')->subject('Pagamento de Inadimplencia '.$data['nome_completo']);
            $message->cc('vandressa@esrelooking.com ')->subject('Pagamento de Inadimplencia '.$data['nome_completo']);
            $message->cc('financeiro@esrelooking.com ')->subject('Pagamento de Inadimplencia '.$data['nome_completo']);
            $message->cc('financeiro@ecolebrasil.com ')->subject('Pagamento de Inadimplencia '.$data['nome_completo']);
        });
        return;
    }

    public function delete(Request $request, $id)
    {
        $inadimplencia = Inadimplencia::find($id);
        $inadimplencia->delete();
        return;
    }
}
