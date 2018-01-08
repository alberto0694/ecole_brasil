<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
     public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'arquivo', 'materiais');
        $material = Material::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::saveBase64($request, 'arquivo', 'materiais');
        $material = Material::find( $id );
        $material->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
