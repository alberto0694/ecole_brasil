<?php

namespace App\Http\Controllers;

use App\Formacao;
use Illuminate\Http\Request;

class FormacaoController extends Controller
{
    public function create(Request $request)
    {
        $formacao = Formacao::create($request->all());
        return;
    }

    public function update(Request $request, $id)
    {
        $formacao = Formacao::find( $id );
        $formacao->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        $formacao = Formacao::find( $id );
        if($formacao){
            $cursos = $formacao->cursos;
            foreach ($cursos as $curso) {
                $curso->visible = '0';
                $curso->save();
            }
        }
        $formacao->visible = '0';
        $formacao->save();
    }
}
