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
      if($request->agenda_id){
    	   $valor = Agenda::find($request->agenda_id)->valor;
      }

      if($request->inadimplencia_id){
        $valor = Inadimplencia::find($request->inadimplencia_id)->valor;
      }

  		$client = new Client();
  		$url = 'http://kyadevelopers.com.br/api/erede/services/ServicesController?servicename=Komerci$GetAuthorizedSP';
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
               'ano' => (int)($request->ano),
               'conftxn' => "S",
               'cvc2' => (int)($request->cvc2),
               'filiacao' => 74450930,
               'mes' => (int)($request->mes),
               'nrcartao' => (String)($request->nrcartao),
               'numpedido' => 1,
               'parcelas' => (int)($request->parcelas),
               'portador' => (String)($request->portador),
               'total' => (float)($valor),
               'transacao' => (int)($request->transacao)
		    ],
  		];
      // dd($data);
  		$response_client = $client->request('POST', $url, $data);
  		$json_response = json_decode($response_client->getBody()->getContents());
  		$response = response()->json($json_response, 200);
    	return $response;
    }
}
