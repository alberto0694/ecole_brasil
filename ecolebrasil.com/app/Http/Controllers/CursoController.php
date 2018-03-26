<?php

namespace App\Http\Controllers;

use DateTime;
use App\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modulo;

class CursoController extends Controller
{


    public function __construct()
    {

    }

    public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'card', 'cursos');
        $request = Controller::saveBase64($request, 'background_img', 'cursos');
        $request = Controller::saveBase64($request, 'ementa', 'cursos');

        $curso = Curso::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find( $id );
        $request = Controller::saveBase64($request, 'card', 'cursos', $curso->card);
        $request = Controller::saveBase64($request, 'background_img', 'cursos', $curso->background_img);
        $request = Controller::saveBase64($request, 'ementa', 'cursos', $curso->ementa);
        // dd($request);
        $curso->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        $curso = Curso::find( $id );
        $curso->visible = '0';
        $curso->save();
        return;
    }


}
