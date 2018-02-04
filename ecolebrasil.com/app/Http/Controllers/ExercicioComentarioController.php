<?php

namespace App\Http\Controllers;

use App\ExercicioComentario;
use App\Exercicio;
use Illuminate\Http\Request;

class ExercicioComentarioController extends Controller
{
    public function create(Request $request)
    {
        $comentario = ExercicioComentario::create($request->all());
        return;
    }

    public function get_comentario(Request $request)
    {
        // dd($request->query());
        $querys = $request->query();
        $comentarios = ExercicioComentario::where('user_id', '<>', $querys['user_id'])->
                                        where('exercicio_id', '=', $querys['exercicio_id'])->
                                            where('created_at', '>', $querys['last'])->get();
        $exercicio = Exercicio::find($querys['exercicio_id']);

        $items = array();
        $ids = array();
        foreach ($comentarios as $value) {
            array_push($items, $value->item);
            array_push($ids, $value->id);
        }
        return response()->json(['items' => $items, 'last_time' => (string)$exercicio->lastTime, 'ids' => $ids], 200);
    }

}
