<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Formacao;
use App\Modulo;
use App\Depoimento;
use App\Contato;

class WebsiteController extends Controller
{

    public function home()
    {
        $formacoes = Formacao::all();
    	return view('website.index', compact('formacoes'));
    }

    public function escola()
    {
        $formacoes = Formacao::all();
    	return view('website.escola', compact('formacoes'));
    }    

    public function restrito()
    {
        $formacoes = Formacao::all();
    	return view('website.restrito', compact('formacoes'));
    }    

    public function blog()
    {
        $formacoes = Formacao::all();
    	return view('website.blog', compact('formacoes'));
    }    

    public function certificacao()
    {
        $formacoes = Formacao::all();
    	return view('website.certificacao', compact('formacoes'));
    }    

    public function sou_ecole()
    {
        $formacoes = Formacao::all();
    	return view('website.sou_ecole', compact('formacoes'));
    }   

    public function contato()
    {
        $formacoes = Formacao::all();
    	return view('website.contato', compact('formacoes'));
    }   

    public function cursos(Request $request, $id)
    {
        $formacoes = Formacao::all();
        $curso = Curso::find( $id );
    	return view('website.cursos', compact('formacoes', 'curso'));
    }    

    public function depoimentos()
    {
        $formacoes = Formacao::all();
        $depoimentos = Depoimento::all();
    	return view('website.depoimentos', compact('formacoes', 'depoimentos'));
    }
}
