<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function create(Request $request)
    {
        $request = Controller::formatDate( $request, 'data_inicio' );
        $agenda = Agenda::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::formatDate( $request, 'data_inicio' );
        $agenda = Agenda::find( $id );
        $agenda->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
