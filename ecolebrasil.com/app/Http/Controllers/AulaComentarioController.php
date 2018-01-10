<?php

namespace App\Http\Controllers;

use App\AulaComentario;
use Illuminate\Http\Request;

class AulaComentarioController extends Controller
{
    public function create(Request $request)
    {
        $comentario = AulaComentario::create($request->all());
        return;
    }

}
