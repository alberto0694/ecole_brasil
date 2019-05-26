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
        $meio = $request->exists('meio_pagamento') ? $request->query('meio_pagamento') : 'credit_card';
        $document = strlen($request->cpf_titular) == 14 ? "cnpj" : "cpf";
        $typeCustomer = strlen($request->cpf_titular) == 14 ? "corporation" : "individual";
        if($request->agenda_id){
            $agenda = Agenda::find($request->agenda_id);
            if($meio == 'credit_card'){
                $valor = floor($agenda->valor);
                $valor = (String)$valor."00";
            }else{
                $valor = $agenda->valorComDesconto;
            }
            $id = "agenda#".$request->agenda_id;
            $title = $agenda->curso->nome;
        }

        if($request->inadimplencia_id){
            $inadimplencia = Inadimplencia::find($request->inadimplencia_id);
            $valor = $inadimplencia->valor;
            $valor = floor($valor);
            $valor = (String)$valor."00";
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
                  // "api_key" => "ak_live_0kFS2YtKOjVA5WOYV1Khk9D9Fm3UU1",
                  "api_key" => "ak_test_gABGBr3Sxy3u1hXON9CpS8nsBk3neT",
                  "amount" => (int)$valor,
                  "installments" => (int)($request->parcelas),
                  "card_number" => (String)($request->nrcartao),
                  "card_cvv" => (String)($request->cvc2),
                  "payment_method" => $meio,
                  "card_expiration_date" => (String)($request->mes).(String)($request->ano),
                  "card_holder_name" => (String)($request->portador),
                  "customer" => [
                    "external_id" => $id,
                    "name" => (String)($request->portador),
                    "type" => $typeCustomer,
                    "country" => "br",
                    "email" => (String)($request->email),
                    "documents" => [
                      0 => [
                        "type" => $document,
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
