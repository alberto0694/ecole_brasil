<?php

namespace App\Http\Controllers;

use App\Inadimplencia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InadimplenciaController extends Controller
{
     public function create(Request $request)
    {
        $request = Controller::formatDate( $request, 'vencimento' );
        $inadimplencia = Inadimplencia::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::formatDate( $request, 'vencimento' );
        $inadimplencia = Inadimplencia::find( $id );
        $inadimplencia->update( $request->all() );
        return;
    }

    public function update_pagamento(Request $request, $id)
    {
        $inadimplencia = Inadimplencia::find($id);
        $inadimplencia->update(['pago' => 'S']);
        return;
    }

    public function delete(Request $request, $id)
    {
        $inadimplencia = Inadimplencia::find($id);
        $inadimplencia->delete();
        return;
    }
}
