<?php

namespace App\Http\Controllers;

use App\Exercicio;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
     public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'arquivo', 'exercicios');
        $exercicio = Exercicio::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::saveBase64($request, 'arquivo', 'exercicios');
        $exercicio = Exercicio::find( $id );
        $exercicio->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
         $exercicio = Exercicio::find($id);
         $exercicio->comentarios()->delete();
         $exercicio->delete();
         return;
    }
}
