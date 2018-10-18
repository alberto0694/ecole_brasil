<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use App\Agenda;
use App\Inadimplencia;

class PagamentoController extends Controller
{
    public function doPayment(Request $request)
    {
        $valor = null;
        $id = "";
        $title = "";
        if($request->agenda_id){
            $agenda = Agenda::find($request->agenda_id);
            $valor = $agenda->valor;
            $id = "agenda#".$request->agenda_id;
            $title = $agenda->curso->nome;
        }

        if($request->inadimplencia_id){
            $inadimplencia = Inadimplencia::find($request->inadimplencia_id);
            $valor = $inadimplencia->valor;
            $id = "inadimplencia#".$inadimplencia->id;
            $title = $inadimplencia->razao_pagamento;
        }

        $valor = str_replace(",", "", (String)$valor);
        $valor = str_replace(".", "", (String)$valor);


    		$client = new Client();
    		$url = 'https://api.pagar.me/1/transactions';
    		$data = [
    			'timeout' => 30,
  		    'headers' => [
                'Access-Control-Allow-Methods' => 'GET, POST, OPTIONS',
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Headers' => '*',
                'Access-Control-Allow-Credentials' => 'true',
                'Content-Type' => 'application/json'
  		    ],
  		    'json' => [
                  "api_key" => "ak_live_0kFS2YtKOjVA5WOYV1Khk9D9Fm3UU1",
                  "amount" => (int)$valor,
                  "installments" => (int)($request->parcelas),
                  "card_number" => (String)($request->nrcartao),
                  "card_cvv" => (String)($request->cvc2),
                  "card_expiration_date" => (String)($request->mes).(String)($request->ano),
                  "card_holder_name" => (String)($request->portador),
                  "customer" => [
                    "external_id" => $id,
                    "name" => (String)($request->portador),
                    "type" => "individual",
                    "country" => "br",
                    "email" => (String)($request->email),
                    "documents" => [
                      0 => [
                        "type" => "cpf",
                        "number" => (String)($request->cpf_titular)
                      ]
                    ],
                    "phone_numbers" => ["+55".(String)($request->telefone_area).(String)($request->telefone)]
                  ],
                  "billing" => [
                    "name" => (String)($request->portador),
                    "address" => [
                      "country" => "br",
                      "state" => (String)($request->estado),
                      "city" => (String)($request->cidade),
                      "street" => (String)($request->rua),
                      "street_number" => (String)($request->numero),
                      "zipcode" => (String)($request->cep)
                    ]
                  ],
                  "items" => [
                    0 => [
                      "id" => $id,
                      "title" => $title,
                      "unit_price" => (int)$valor,
                      "quantity" => 1,
                      "tangible" => false
                    ]
                  ]

  		    ],
    		];

    		$response_client = $client->request('POST', $url, $data);
    		$json_response = json_decode($response_client->getBody()->getContents());
    		$response = response()->json($json_response, 200);
      	return $response;
    }
}
