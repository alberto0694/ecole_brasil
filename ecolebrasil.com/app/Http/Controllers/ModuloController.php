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
        // dd($request);
        $modulo = Modulo::find( $id );
        $modulo->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
         $modulo = Modulo::find($id);

         $videos = $modulo->videos();
         $materiais = $modulo->materiais();
         $exercicios = $modulo->exercicios();
         $aulas = $modulo->aulas();

         foreach ($videos as $value) {
             $value->comentarios()->delete();
         }

         foreach ($materiais as $value) {
             $value->comentarios()->delete();
         }

         foreach ($exercicios as $value) {
             $value->comentarios()->delete();
         }

         foreach ($aulas as $value) {
             $value->comentarios()->delete();
         }


         $videos->delete();
         // $materiais->delete();
         // $exercicios->delete();
         // $aulas->delete();

         // $modulo->delete();
         return;
    }

}
