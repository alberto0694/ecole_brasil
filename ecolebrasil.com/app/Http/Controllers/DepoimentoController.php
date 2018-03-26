<?php

namespace App\Http\Controllers;

use App\Depoimento;
use Illuminate\Http\Request;

class DepoimentoController extends Controller
{
     public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'avatar', 'depoimentos');
        // $request = Controller::saveBase64($request, 'video', 'depoimentos');
        $depoimento = Depoimento::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $depoimento = Depoimento::find( $id );
        $request = Controller::saveBase64($request, 'avatar', 'depoimentos', $depoimento->avatar);
        $depoimento->update( $request->all() );

        if(!$request->apenas_video){
                $depoimento->update(['apenas_video' => null]);
        }
        return;
    }

    public function delete(Request $request, $id)
    {
        $depoimento = Depoimento::find($id);
        $depoimento->visible = '0';
        $depoimento->save();
        return;
    }
}
