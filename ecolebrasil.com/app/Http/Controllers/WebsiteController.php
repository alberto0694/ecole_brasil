<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Formacao;
use App\Modulo;
use App\Depoimento;
use Carbon\Carbon;
use App\Contato;
use App\Agenda;
use App\Imprensa;
use App\Blog;
use App\Banner;
use App\Ebook;
use App\Aluno;
use App\User;
use \DB;
use \Mail;
use \Session;
use App\Inadimplencia;
use \Auth;
use App\Consultora;

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
            $message->from('alberto@metrocoletivo.com.br', 'Contato Site');
            $message->cc('alberto.pimentel.94@gmail.com')->subject('Contato Site');
            $message->to('contato@ecolebrasil.com')->subject('Contato Site');
            $message->cc('admin@ecolebrasil.com')->subject('Contato Site');
            $message->cc('vandressa@esrelooking.com ')->subject('Contato Site');
        });

        Session::flash('message' , 'Contato enviado com sucesso!'); //<--FLASH MESSAGE
        Session::flash('alert-class', 'alert-success');
        return redirect(route('contato'));
    }

    public function sendInscricao(Request $request)
    {
        $data = [   "contato" => $request->contato,
                    "telefone" => $request->telefone,
                    "cidade_curso" => $request->cidade_curso,
                    "email" => $request->email];

        // Contato::create( $request->all() );

        Mail::send('emails.inscricao', $data, function ($message) {
            $message->from('alberto@metrocoletivo.com.br', 'Inscrição Ecole Brasil');
            $message->cc('alberto.pimentel.94@gmail.com')->subject('Inscrição Ecole Brasil');
            $message->to('contato@ecolebrasil.com')->subject('Inscrição Ecole Brasil');
            $message->cc('admin@ecolebrasil.com')->subject('Inscrição Ecole Brasil');
            $message->cc('vandressa@esrelooking.com ')->subject('Inscrição Ecole Brasil');
        });

        Session::flash('message' , 'Inscrição realizada. Entraremos em contato o mais breve possível!'); //<--FLASH MESSAGE
        Session::flash('alert-class', 'alert-success');
        return redirect(route('inscricao'));
    }

    public function regulariza_inadimplencia(Request $request, $id)
    {
        $inadimplencia = Inadimplencia::find($id);
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.regularizacao', compact('inadimplencia', 'cursos_menu', 'formacoes'));
    }

    public function inscricao()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.inscricao', compact('cursos_menu','formacoes'));
    }

    public function home()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        $agendas = Agenda::orderBy('data_inicio', 'asc')->get(); //Agenda::all();
        $banners = Banner::where('ativo', '=', 1)->get();
        $cursos = Curso::where('pagina_inicial', '=', '1')->get();
        $depoimentos = Depoimento::orderBy('created_at', 'asc')->take(3)->get();
        // $agendas = Agenda::all();
    	return view('website.index', compact('formacoes', 'agendas', 'banners', 'cursos', 'cursos_menu', 'depoimentos'));
    }

    public function escola()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.escola', compact('cursos_menu','formacoes'));
    }

    public function eshop()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.eshop', compact('cursos_menu','formacoes'));
    }

    public function manifesto()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.manifesto', compact('cursos_menu','formacoes'));
    }

    public function equipe()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.equipe', compact('cursos_menu','formacoes'));
    }

    public function restrito()
    {
        $this->middleware('guest')->except('logout');
        Auth::logout();
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
    	return view('website.restrito', compact('cursos_menu','formacoes'));
    }

    public function certificacao()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
    	return view('website.certificacao', compact('cursos_menu','formacoes'));
    }

    public function cursos_lista(Request $request)
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        $formacao_id = $request->query('formacao_id');
        $cursos = Curso::all();
        if($formacao_id != null){
            $cursos = Curso::where('formacao_id', '=', $formacao_id)->get();
        }
        return view('website.cursos_lista', compact('cursos_menu','formacoes', 'cursos'));
    }

    public function sou_ecole()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
    	return view('website.sou_ecole', compact('cursos_menu','formacoes'));
    }

    public function contato()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
    	return view('website.contato', compact('cursos_menu','formacoes'));
    }

    public function cursos(Request $request, $id)
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        $curso = Curso::find( $id );
    	return view('website.cursos', compact('cursos_menu','formacoes', 'curso'));
    }

    public function depoimentos()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        $depoimentos = Depoimento::all();
        $depoimentosVideo = Depoimento::where('video', '<>', '""')->where('video', '<>', '0')->get();
    	return view('website.depoimentos', compact('cursos_menu','formacoes', 'depoimentos', 'depoimentosVideo'));
    }

    public function agenda()
    {
        $agendas = Agenda::where('data_inicio', '>=', date('Y-m-d').' 00:00:00')->orderBy('data_inicio', 'asc')->get();
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.agenda', compact('cursos_menu','agendas', 'formacoes'));
    }

    public function faq()
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.faq', compact('cursos_menu','formacoes'));
    }

    public function imprensa()
    {
        $imprensas = Imprensa::all();
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.imprensa', compact('cursos_menu','formacoes', 'imprensas'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.blog', compact('cursos_menu','formacoes', 'blogs'));
    }

    public function blog_post($id)
    {
        $blog = Blog::find($id);
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.blog_post', compact('cursos_menu','formacoes', 'blog'));
    }

    public function materia($id)
    {
        $imprensa = Imprensa::find($id);
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.materia', compact('cursos_menu','formacoes', 'imprensa'));
    }

    public function compra_agenda(Request $request)
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        $agenda_id = $request->query('agenda_id');
        $curso_id = $request->query('curso_id');
        $agendas = null;
        if($agenda_id){
            $agendas = Agenda::where('id', '=', $agenda_id)->where('data_inicio', '>', Carbon::today()->toDateString())->get();
            return view('website.pagamento_agenda', compact('cursos_menu','formacoes', 'agendas'));
        }
        if($curso_id){
            $agendas = Curso::find($curso_id)->agendas;
            return view('website.pagamento_agenda', compact('cursos_menu','formacoes', 'agendas'));
        }
    }

    public function consultoras()
    {
        $consultoras = Consultora::orderBy('created_at', 'asc')->get();
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.consultoras', compact('consultoras', 'formacoes', 'cursos_menu'));
    }

    public function ead(Request $request)
    {
        $this->middleware('guest')->except('logout');
        Auth::logout();
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.ead', compact('formacoes', 'cursos_menu'));
    }

    public function ebook(Request $request)
    {
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        $ebooks = Ebook::all();
        return view('website.ebook', compact('formacoes', 'cursos_menu', 'ebooks'));
    }

    public function ebook_pagamento(Request $request, $id)
    {
        $ebook = Ebook::find( $id );
        $formacoes = Formacao::all();
        $cursos_menu = Curso::all();
        return view('website.pagamento_ebook', compact('formacoes', 'cursos_menu', 'ebook'));
    }

    public function ebook_email(Request $request, $id)
    {
        $ebook = Ebook::find( $id );
        $data = ["ebook" => asset($ebook->file)];

        Contato::create( $request->all() );

        Mail::send('emails.ebook', $data, function ($message) use ($request) {
            $message->from('alberto@metrocoletivo.com.br', 'Contato Ecole');
            $message->to($request['email']);
        });

        return view('website.pagamento_ebook', compact('formacoes', 'cursos_menu', 'ebook'));
    }


}
