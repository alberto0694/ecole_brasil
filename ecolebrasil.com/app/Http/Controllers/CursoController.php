<?php

namespace App\Http\Controllers;

use DateTime;
use App\Curso;
Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{


    public function __construct()
    {

    }

    public function create(Request $request)
    {
        $curso = Curso::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        // $request = Controller::formatDate( $request, 'data_inicio' );
        $curso = Curso::find( $id );
        $curso->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        $curso = Curso::find( $id );
    }

   
}
