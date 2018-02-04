<?php

namespace App\Http\Controllers;

use App\MaterialComentario;
use App\Material;
use Illuminate\Http\Request;

class MaterialComentarioController extends Controller
{
    public function create(Request $request)
    {
        $comentario = MaterialComentario::create($request->all());
        return;
    }

    public function get_comentario(Request $request)
    {
        $querys = $request->query();
        $materiais = MaterialComentario::where('user_id', '<>', $querys['user_id'])->
                                        where('material_id', '=', $querys['material_id'])->
                                            where('created_at', '>', $querys['last'])->get();
        $material = Material::find($querys['material_id']);

        $items = array();
        $ids = array();
        foreach ($materiais as $value) {
            array_push($items, $value->item);
            array_push($ids, $value->id);
        }
        return response()->json(['items' => $items, 'last_time' => (string)$material->lastTime, 'ids' => $ids], 200);
    }
}
