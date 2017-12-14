<?php

namespace App\Http\Controllers;

use App\Depoimento;
use Illuminate\Http\Request;

class DepoimentoController extends Controller
{
     public function create(Request $request)
    {
        $depoimento = Depoimento::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $depoimento = Depoimento::find( $id );
        $depoimento->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
