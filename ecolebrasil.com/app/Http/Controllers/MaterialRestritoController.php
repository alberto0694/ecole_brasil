<?php

namespace App\Http\Controllers;

use App\MaterialRestrito;
use Illuminate\Http\Request;

class MaterialRestritoController extends Controller
{
     public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'file', 'material_restritos');
        $acesso = MaterialRestrito::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $acesso = MaterialRestrito::find( $id );
        $request = Controller::saveBase64($request, 'file', 'material_restritos', $acesso->file);
        $acesso->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
