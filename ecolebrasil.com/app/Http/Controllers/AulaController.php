<?php

namespace App\Http\Controllers;

use App\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
     public function create(Request $request)
    {
        
        $aula = Aula::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $aula = Aula::find( $id );
        $aula->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    } 
}
