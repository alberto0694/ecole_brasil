<?php

namespace App\Http\Controllers;

use App\VideoComentario;
use App\Video;
use Illuminate\Http\Request;

class VideoComentarioController extends Controller
{
    public function create(Request $request)
    {
        $comentario = VideoComentario::create($request->all());
        return;
    }

    public function get_comentario(Request $request)
    {
    	// dd($request->query());
    	$querys = $request->query();
    	$comentarios = VideoComentario::where('user_id', '<>', $querys['user_id'])->
    									where('video_id', '=', $querys['video_id'])->
    										where('created_at', '>', $querys['last'])->get();
    	$video = Video::find($querys['video_id']);

    	$items = array();
        $ids = array();
    	foreach ($comentarios as $value) {
    		array_push($items, $value->item);
            array_push($ids, $value->id);
    	}
    	return response()->json(['items' => $items, 'last_time' => (string)$video->lastTime, 'ids' => $ids], 200);
    }
}
