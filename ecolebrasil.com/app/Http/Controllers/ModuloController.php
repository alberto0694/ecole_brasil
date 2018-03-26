<?php

namespace App\Http\Controllers;

use App\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function create(Request $request)
    {
        $request = Controller::formatDate( $request, 'data_inicio' );
        $modulo = Modulo::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::formatDate( $request, 'data_inicio' );
        $modulo = Modulo::find( $id );
        $modulo->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        $modulo = Modulo::find($id);

        $videos = $modulo->videos;
        $materiais = $modulo->materiais;
        $exercicios = $modulo->exercicios;
        $aulas = $modulo->aulas;

        foreach ($videos as $value) {
            $value->visible = '0';
            $value->save();
        }

        foreach ($materiais as $value) {
            $value->visible = '0';
            $value->save();
        }

        foreach ($exercicios as $value) {
            $value->visible = '0';
            $value->save();
        }

        foreach ($aulas as $value) {
            $value->visible = '0';
            $value->save();
        }
        $modulo->visible = '0';
        $modulo->save();
        return;
    }

}
