<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Modulo;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agenda_modulos(Request $request)
    {
        // dd($request);
        $querys = $request->query();
        // $curso = Curso::find( $querys["curso_id"] );
        $modulos = Modulo::where('agenda_id', '=', $querys["agenda_id"])->get()->toJson();

        return response()->json($modulos, 200);
    }

    public function agenda_parcelas(Request $request)
    {
        $querys = $request->query();
        // $curso = Curso::find( $querys["curso_id"] );
        $agenda = Agenda::where('id', '=', $querys["agenda_id"])->get()->toJson();

        return response()->json($agenda, 200);   
    }

    public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'avatar', 'agendas');
        $request = Controller::formatDate( $request, 'data_inicio' );
        $agenda = Agenda::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::find( $id );
        $request = Controller::saveBase64($request, 'avatar', 'agendas', $agenda->avatar);
        $request = Controller::formatDate( $request, 'data_inicio' );        
        $agenda->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
