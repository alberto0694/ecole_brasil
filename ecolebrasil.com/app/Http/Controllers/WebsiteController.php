<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Formacao;
use App\Modulo;
use App\Depoimento;
use App\Contato;
use App\Agenda;
use App\Imprensa;
use App\Banner;
use \DB;
use \Mail;
use \Session;

class WebsiteController extends Controller
{

    public function sendContato(Request $request)
    {        
        $data = [   "contato" => $request->contato,
                    "telefone" => $request->telefone,
                    "cidade" => $request->cidade,
                    "cidade_curso" => $request->cidade_curso,
                    "ecole" => $request->ecole,
                    "mensagem" => $request->mensagem,
                    "email" => $request->email];

        Contato::create( $request->all() );

        Mail::send('emails.contato', $data, function ($message) {
            $message->from('alberto@metrocoletivo.com.br', 'Teste');
            $message->to('alberto@metrocoletivo.com.br');
        });        

        Session::flash('message' , 'Contato enviado com sucesso!'); //<--FLASH MESSAGE
        Session::flash('alert-class', 'alert-success');
        return redirect(route('contato'));        
    }

    public function home()
    {
        $formacoes = Formacao::all();
        $agendas = Agenda::orderBy('data_inicio', 'asc')->get(); //Agenda::all();
        $banners = Banner::all();
        $cursos = Curso::where('pagina_inicial', '=', '1')->get();
        // $agendas = Agenda::all();
    	return view('website.index', compact('formacoes', 'agendas', 'banners', 'cursos'));
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

    public function agenda()
    {
        // $agendas = DB::table('agendas')->orderBy('mes', 'asc')->get();
        $agendas = Agenda::orderBy('data_inicio', 'asc')->get();
        $formacoes = Formacao::all();
        return view('website.agenda', compact('agendas', 'formacoes'));
    }

    public function faq()
    {
        $formacoes = Formacao::all();
        return view('website.faq', compact('formacoes'));
    }

    public function imprensa()
    {
        $imprensas = Imprensa::all();
        $formacoes = Formacao::all();
        return view('website.imprensa', compact('formacoes', 'imprensas'));
    }

    public function materia($id)
    {
        $imprensa = Imprensa::find($id);
        $formacoes = Formacao::all();
        return view('website.materia', compact('formacoes', 'imprensa'));
    }
}
