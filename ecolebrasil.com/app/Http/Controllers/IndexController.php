<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
    	return view('layouts.index');
    }

    public function escola()
    {
    	return view('layouts.escola');
    }    

    public function restrito()
    {
    	return view('layouts.restrito');
    }    

    public function blog()
    {
    	return view('layouts.blog');
    }    

    public function certificacao()
    {
    	return view('layouts.certificacao');
    }    

    public function sou_ecole()
    {
    	return view('layouts.sou_ecole');
    }   

    public function contato()
    {
    	return view('layouts.contato');
    }   

    public function cursos()
    {
    	return view('layouts.cursos');
    }    

    public function depoimentos()
    {
    	return view('layouts.depoimentos');
    }

}
