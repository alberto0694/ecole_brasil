<?php

namespace App\Http\Controllers;

use App\Consultora;
use Illuminate\Http\Request;

class ConsultoraController extends Controller
{
     public function create(Request $request)
    {
        $consultora = Consultora::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $consultora = Consultora::find( $id );
        $consultora->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
