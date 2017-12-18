<?php

namespace App\Http\Controllers;

use App\Imprensa;
use Illuminate\Http\Request;

class ImprensaController extends Controller
{
     public function create(Request $request)
    {
        $imprensa = Imprensa::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $imprensa = Imprensa::find( $id );
        $imprensa->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
