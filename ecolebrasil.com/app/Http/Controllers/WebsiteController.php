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
use App\NewsLetter;

class WebsiteController extends Controller
{

    public function sendContato(Request $request)
    {
        $data = [   "contato" => $request->contato,
                    "telefone" => $request->telefone,
                    "cidade" => $request->cidade,
                    "cidade_curso" => $request->cidade_curso,
                    "ecole" => $request->ecole,
                    "curso" => $request->curso,
                    "mensagem" => $request->mensagem,
                    "email" => $request->email];

        Contato::create( $request->all() );
        Mail::send('emails.contato', $data, function ($message) use ($data) {
            $message->replyTo($data['email'], 'Ecole Brasil');
            $message->from('contatosite@ecolebrasil.com', 'Contato Site '.$data['contato']);
            $message->cc('alberto.pimentel.94@gmail.com')->subject('Contato Site '.$data['contato']);
            $message->to('contato@ecolebrasil.com')->subject('Contato Site '.$data['contato']);
            $message->cc('admin@ecolebrasil.com')->subject('Contato Site '.$data['contato']);
            $message->cc('vandressa@esrelooking.com ')->subject('Contato Site '.$data['contato']);
        });

        Session::flash('message' , 'Contato enviado com sucesso!'); //<--FLASH MESSAGE
        Session::flash('alert-class', 'alert-success');
        return redirect(route('contato'));
    }

    public function sendNewsletter(Request $request)
    {
        $data = [   "contato" => $request->contato,
                    "email" => $request->email];

        NewsLetter::create( $request->all() );

        Mail::send('emails.newsletter', $data, function ($message)  use ($data) {
            $message->from('contatosite@ecolebrasil.com', 'NewsLetter '.$data['contato']);
            $message->cc('alberto.pimentel.94@gmail.com')->subject('NewsLetter '.$data['contato'])->replyTo($data['email'], 'Ecole Brasil - Receba nossas novidades!');
            $message->to('contato@ecolebrasil.com')->subject('NewsLetter '.$data['contato'])->replyTo($data['email'], 'Ecole Brasil - Receba nossas novidades!');
            $message->cc('admin@ecolebrasil.com')->subject('NewsLetter '.$data['contato'])->replyTo($data['email'], 'Ecole Brasil - Receba nossas novidades!');
            $message->cc('vandressa@esrelooking.com ')->subject('NewsLetter '.$data['contato'])->replyTo($data['email'], 'Ecole Brasil - Receba nossas novidades!');
        });

        Session::flash('message' , 'Contato enviado com sucesso!'); //<--FLASH MESSAGE
        Session::flash('alert-class', 'alert-success');
        return redirect(route('contato'));
    }

    public function sendInscricao(Request $request)
    {
        $data = [
                    "contato" => $request->contato,
                    "telefone" => $request->telefone,
                    "cidade_curso" => $request->cidade_curso,
                    "email" => $request->email
                ];

        Mail::send('emails.inscricao', $data, function ($message) use ($data) {
            $message->from('contatosite@ecolebrasil.com', 'Inscrição Ecole Brasil '.$data['contato']);
            $message->cc('alberto.pimentel.94@gmail.com')->subject('Inscrição Ecole Brasil '.$data['contato'])->replyTo($data['email']);
            $message->to('contato@ecolebrasil.com')->subject('Inscrição Ecole Brasil '.$data['contato'])->replyTo($data['email']);
            $message->cc('admin@ecolebrasil.com')->subject('Inscrição Ecole Brasil '.$data['contato'])->replyTo($data['email']);
            $message->cc('vandressa@esrelooking.com ')->subject('Inscrição Ecole Brasil '.$data['contato'])->replyTo($data['email']);
        });

        Session::flash('message' , 'Inscrição realizada. Entraremos em contato o mais breve possível!'); //<--FLASH MESSAGE
        Session::flash('alert-class', 'alert-success');
        return redirect(route('inscricao'));
    }

    public function regulariza_inadimplencia(Request $request, $id)
    {
        $inadimplencia = Inadimplencia::find($id);
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.regularizacao', compact('inadimplencia', 'cursos_menu', 'formacoes'));
    }

    public function inscricao()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $curso = null;
        return view('website.inscricao', compact('cursos_menu','formacoes', 'curso'));
    }

    public function home()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $agendas = Agenda::where('visible', '=', '1')->orderBy('data_inicio', 'asc')->get();
        $banners = Banner::where('ativo', '=', 1)->get();
        $cursos = Curso::where('pagina_inicial', '=', '1')->get();
        $depoimentos = Depoimento::where('visible', '=', '1')->orderBy('created_at', 'asc')->take(3)->get();
    	return view('website.index', compact('formacoes', 'agendas', 'banners', 'cursos', 'cursos_menu', 'depoimentos'));
    }

    public function escola()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.escola', compact('cursos_menu','formacoes'));
    }

    public function eshop()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.eshop', compact('cursos_menu','formacoes'));
    }

    public function manifesto()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.manifesto', compact('cursos_menu','formacoes'));
    }

    public function equipe()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.equipe', compact('cursos_menu','formacoes'));
    }

    public function restrito()
    {
        $this->middleware('guest')->except('logout');
        Auth::logout();
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
    	return view('website.restrito', compact('cursos_menu','formacoes'));
    }

    public function certificacao()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
    	return view('website.certificacao', compact('cursos_menu','formacoes'));
    }

    public function cursos_lista(Request $request)
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $formacao_id = $request->query('formacao_id');
        $cursos = Curso::where('visible', '=', '1')->get();
        if($formacao_id != null){
            $cursos = Curso::where('formacao_id', '=', $formacao_id)->get();
        }
        return view('website.cursos_lista', compact('cursos_menu','formacoes', 'cursos'));
    }

    public function sou_ecole()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
    	return view('website.sou_ecole', compact('cursos_menu','formacoes'));
    }

    public function contato()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
    	return view('website.contato', compact('cursos_menu','formacoes'));
    }

    public function cursos(Request $request, $slug)
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $curso = Curso::where('slug', '=', $slug )->first();
    	return view('website.cursos', compact('cursos_menu','formacoes', 'curso'));
    }

    public function depoimentos()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $depoimentos = Depoimento::where('visible', '=', '1')->get();
        $depoimentosVideo = Depoimento::where('visible', '=', '1')->where('video', '<>', '""')->where('video', '<>', '0')->get();
    	return view('website.depoimentos', compact('cursos_menu','formacoes', 'depoimentos', 'depoimentosVideo'));
    }

    public function agenda()
    {
        $agendasMonths = array();
        for ($i=1; $i < 13; $i++) {
            $agendasMonths[$i] = Agenda::where('visible', '=', '1')
                                         ->whereMonth('data_inicio', '=', $i)
                                         ->where('data_inicio', '>=', date('Y-m-d').' 00:00:00')
                                         ->orderBy('data_inicio', 'asc')
                                         ->get();
        }
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.agenda', compact('cursos_menu','agendasMonths', 'formacoes'));
    }

    public function faq()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.faq', compact('cursos_menu','formacoes'));
    }

    public function imprensa()
    {
        $imprensas = Imprensa::all();
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.imprensa', compact('cursos_menu','formacoes', 'imprensas'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.blog', compact('cursos_menu','formacoes', 'blogs'));
    }

    public function blog_post($id)
    {
        $blog = Blog::find($id);
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.blog_post', compact('cursos_menu','formacoes', 'blog'));
    }

    public function materia($id)
    {
        $imprensa = Imprensa::find($id);
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.materia', compact('cursos_menu','formacoes', 'imprensa'));
    }

    public function compra_agenda(Request $request)
    {
        // return;
        $querys = $request->query();
        $curso = null;
        if(array_key_exists('agenda_id', $querys)){
            $agenda = Agenda::find($querys['agenda_id']);
            $curso = $agenda->curso;
        }

        if(array_key_exists('curso_id', $querys)){
            $curso = Curso::find($querys['curso_id']);
        }

        // $formacoes = Formacao::where('visible', '=', '1')->get();
        // $cursos_menu = Curso::where('visible', '=', '1')->get();
        // return view('website.inscricao', compact('cursos_menu','formacoes', 'curso'));

        //TA ASSIM PORQUE O E-REDE AINDA NAO TA FUNFANDO
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $agenda_id = $request->query('agenda_id');
        $curso_id = $request->query('curso_id');
        $agendas = null;
        if($agenda_id){
            $agendas = Agenda::where('id', '=', $agenda_id)->where('data_inicio', '>', Carbon::today()->toDateString())->get();
            return view('website.pagamento_agenda', compact('cursos_menu','formacoes', 'agendas', 'curso'));
        }
        if($curso_id){
            $agendas = Curso::find($curso_id)->agendas;
            return view('website.pagamento_agenda', compact('cursos_menu','formacoes', 'agendas', 'curso'));
        }
    }

    public function consultoras(Request $request)
    {
        $querys = $request->query();
        $consultoras = null;
        if(count($querys) > 0){
            if(!$querys['nome']){
                $querys['nome'] = '';
            }

            if(!$querys['cidade']){
                $querys['cidade'] = '';
            }

            if(($querys['nome'] != '') || ($querys['cidade'] != '')){
                if(($querys['nome'] != '') && ($querys['cidade'] != '')){
                    $consultoras = Consultora::where('nome', 'like', '%'.$querys['nome'].'%')
                                               ->where('visible', '=', '1')
                                               ->orWhere('cidade', 'like', '%'.$querys['cidade'].'%')
                                               ->orderBy('created_at', 'asc')->get();
                }else{
                    if(($querys['nome'] != '')){
                        $consultoras = Consultora::where('nome', 'like', '%'.$querys['nome'].'%')
                                               ->where('visible', '=', '1')
                                               ->orderBy('created_at', 'asc')->get();
                    }else{
                        $consultoras = Consultora::where('cidade', 'like', '%'.$querys['cidade'].'%')
                                               ->where('visible', '=', '1')
                                               ->orderBy('created_at', 'asc')->get();
                    }
                }
            }else{
                $consultoras = Consultora::where('visible', '=', '1')->orderBy('created_at', 'asc')->get();
            }
        }else{
            $consultoras = Consultora::where('visible', '=', '1')->orderBy('created_at', 'asc')->get();
        }
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.consultoras', compact('consultoras', 'formacoes', 'cursos_menu'));
    }

    public function ead(Request $request)
    {
        $this->middleware('guest')->except('logout');
        Auth::logout();
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.ead', compact('formacoes', 'cursos_menu'));
    }

    public function ebook(Request $request)
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $ebooks = Ebook::where('visible', '=', '1')->get();
        return view('website.ebook', compact('formacoes', 'cursos_menu', 'ebooks'));
    }

    public function ebook_pagamento(Request $request, $id)
    {
        $ebook = Ebook::find( $id );
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        return view('website.pagamento_ebook', compact('formacoes', 'cursos_menu', 'ebook'));
    }

    public function ebook_email(Request $request, $id)
    {
        $ebook = Ebook::find( $id );
        $data = ["ebook" => asset($ebook->file)];

        Contato::create( $request->all() );

        Mail::send('emails.ebook', $data, function ($message) use ($request) {
            $message->from('contatosite@ecolebrasil.com', 'Contato Ecole');
            $message->to($request['email']);
        });

        return view('website.pagamento_ebook', compact('formacoes', 'cursos_menu', 'ebook'));
    }


}
