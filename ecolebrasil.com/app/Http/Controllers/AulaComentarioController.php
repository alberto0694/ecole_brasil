<?php

namespace App\Http\Controllers;

use App\AulaComentario;
use App\Aula;
use Illuminate\Http\Request;

class AulaComentarioController extends Controller
{
    public function create(Request $request)
    {
        $comentario = AulaComentario::create($request->all());
        return;
    }

    public function get_comentario(Request $request)
    {
    	// dd($request->query());
    	$querys = $request->query();
    	$comentarios = AulaComentario::where('user_id', '<>', $querys['user_id'])->
    									where('aula_id', '=', $querys['aula_id'])->
    										where('created_at', '>', $querys['last'])->get();
    	$aula = Aula::find($querys['aula_id']);
    	$items = array();
        $ids = array();

    	foreach ($comentarios as $value) {
    		array_push($items, $value->item);
            array_push($ids, $value->id);
    	}

    	return response()->json(['items' => $items, 'last_time' => (string)$aula->lastTime, 'ids' => $ids], 200);
    }

}
