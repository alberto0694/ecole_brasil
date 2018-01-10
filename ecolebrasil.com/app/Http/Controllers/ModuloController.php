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
        //
    }
   
}
