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
        $request = Controller::saveBase64($request, 'contrato_curso', 'cursos');
        $curso = Curso::create( $request->all() );
        $curso->slug = $this->criar_slug($request->input('nome'));
        $curso->save();
        return;
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find( $id );
        $request = Controller::saveBase64($request, 'card', 'cursos', $curso->card);
        $request = Controller::saveBase64($request, 'background_img', 'cursos', $curso->background_img);
        $request = Controller::saveBase64($request, 'ementa', 'cursos', $curso->ementa);
        $request = Controller::saveBase64($request, 'contrato_curso', 'cursos');
        $curso->update( $request->all() );
        $curso->slug = $this->criar_slug($request->input('nome'));
        $curso->save();
        return;
    }

    public function delete(Request $request, $id)
    {
        $curso = Curso::find( $id );
        $curso->visible = '0';
        $agendas = $curso->agendas;
        foreach ($agendas as $agenda){
            $agenda->visible = '0';
            $agenda->save();
        }
        $curso->save();
        return;
    }

    public function criar_slug($titulo){
      $procurar =   ['ã','â','ê','é','í','õ','ô','ú',' ','ó'];
      $substituir = ['a','a','e','e','i','o','o','u','-','o'];
      return str_replace($procurar,$substituir,mb_strtolower($titulo));
    }

}
