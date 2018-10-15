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
        $add_subject = $request->query('subject') ? $request->query('subject')." " : '';
        Mail::send('emails.contato', $data, function ($message) use ($data, $add_subject) {
            $message->replyTo($data['email'], 'Ecole Brasil');
            $message->from('contatosite@ecolebrasil.com', $add_subject.'Contato Site '.$data['contato']);
            $message->to('contato@ecolebrasil.com')->subject($add_subject.'Contato Site '.$data['contato']);
            $message->cc('admin@ecolebrasil.com')->subject($add_subject.'Contato Site '.$data['contato']);
            $message->cc('vandressa@esrelooking.com')->subject($add_subject.'Contato Site '.$data['contato']);
            // $message->cc('alberto.pimentel.94@gmail.com')->subject($add_subject.'Contato Site '.$data['contato']);
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
        $title = 'Formação de Consultoria e Coaching de Imagem - Ecole Brasil';
        $description = 'Cursos e formações relacionados a imagem pessoal, psicologia e empreendedorismo, presencial e a distância, com certificação internacional.';
    	return view('website.index', compact('formacoes', 'agendas', 'banners', 'cursos', 'cursos_menu', 'depoimentos', 'title', 'description'));
    }

    public function escola()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $title = 'Escola de Imagem - Ecole Supérieure de Relooking';
        $description = 'A Ecole Supérieure de Relooking é uma escola especialista em cursos e formações relacionados a imagem pessoal, psicologia e empreendedorismo.';
        return view('website.escola', compact('cursos_menu','formacoes', 'title', 'description'));
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
        $title = 'Manifesto - Ecole Supérieure de Relooking';
        $description = 'Não é roupa, é a pessoa. Não é sobre saber o que vestir, é sobre sentir. Ser. Não é só a cor, é o que ela representa para a alma. Leia nosso manifesto!';
        return view('website.manifesto', compact('cursos_menu','formacoes', 'title', 'description'));
    }

    public function equipe()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $title = 'Conheça a Equipe - Ecole Supérieure de Relooking';
        $description = 'A Ecole Supérieure de Relooking é uma escola formada por uma equipe altamente qualificada e comprometida. Conheça-nos!';
        return view('website.equipe', compact('cursos_menu','formacoes', 'title', 'description'));
    }

    public function restrito()
    {
        $this->middleware('guest')->except('logout');
        Auth::logout();
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $title = 'Acesso Restrito - Ecole Brasil';
        $description = 'Este espaço é totalmente dedicado aos alunos da Ecole Supérieure de Relooking. Solicite o seu login e senha conosco para entrar.';
    	return view('website.restrito', compact('cursos_menu','formacoes', 'title', 'description'));
    }

    public function certificacao()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $title = 'Certificação Internacional em Consultoria de Imagem - Ecole';
        $description = 'A origem da nossa formação e metodologia estão na França, onde a Escola está certificada em alto nível. Saiba mais sobre nossas certificações!';
    	return view('website.certificacao', compact('cursos_menu','formacoes', 'title', 'description'));
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

    public function contato(Request $request)
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $curso_id = $request->query('curso_id');
        $title = 'Entre em contato com a Ecole Brasil';
        $description = 'Caso você tenha alguma dúvida sobre nossa escola e/ou cursos que oferecemos, entre em contato agora mesmo!';
        if($curso_id){
            $curso_contato = Curso::find($curso_id);
            return view('website.contato', compact('cursos_menu','formacoes', 'curso_contato', 'title', 'description'));
        }else{
        	return view('website.contato', compact('cursos_menu','formacoes', 'curso_contato', 'title', 'description'));
        }
    }

    public function cursos(Request $request, $slug)
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $curso = Curso::where('slug', '=', $slug )->first();
        $title = $curso->title;
        $description = $curso->description;
        if($curso->id == 3){
            $depoimentos = Depoimento::where('visible', '=', '1')->get();
            $agendas = $curso->agendas()->orderBy('data_inicio', 'asc')->get();
            $indice = 0;
            $x = 0;
            $i = 0;
            $agendas_view = array();
            foreach ($agendas as $agenda_curso) {
                if($indice % 3 == 0){
                    $x = 0;
                    $i++;
                }
                $agendas_view[$i][$x] = $agenda_curso;
                $x++;
                $indice++;
            }
            return view('website.consultoria_imagem', compact('cursos_menu','formacoes', 'curso', 'depoimentos', 'agendas_view', 'title', 'description'));
        }else{
            return view('website.cursos', compact('cursos_menu','formacoes', 'curso', 'title', 'description'));
        }
    }

    public function depoimentos()
    {
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $depoimentos = Depoimento::where('visible', '=', '1')->get();
        $depoimentosVideo = Depoimento::where('visible', '=', '1')->where('video', '<>', '""')->where('video', '<>', '0')->get();
        $title = 'Depoimentos sobre nossa Consultoria de Imagem - Ecole Brasil';
        $description = 'Quem fez, aprova! Leia agora os depoimentos que nossos alunos deixaram após a realização dos cursos em nossa escola. Saiba mais!';
    	return view('website.depoimentos', compact('cursos_menu','formacoes', 'depoimentos', 'depoimentosVideo', 'title', 'depoimentos', 'description'));
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
        $title = 'Dúvidas Frequentes sobre Consultoria de Imagem - Ecole Brasil';
        $description = 'Caso você tenha alguma dúvida sobre Consultoria de Imagem ou em algum de nossos cursos e informações, acesse esta página agora mesmo!';
        return view('website.faq', compact('cursos_menu','formacoes', 'title', 'description'));
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
        $sem_cartao = false;
        foreach ($curso->agendas as $agenda_curso) {
            if($agenda_curso->valor == 0){
                $sem_cartao = true;
            }
        }
        //TA ASSIM PORQUE O E-REDE AINDA NAO TA FUNFANDO
        $formacoes = Formacao::where('visible', '=', '1')->get();
        $cursos_menu = Curso::where('visible', '=', '1')->get();
        $agenda_id = $request->query('agenda_id');
        $curso_id = $request->query('curso_id');
        $agendas = null;
        if($agenda_id){
            $agendas = Agenda::where('id', '=', $agenda_id)->where('data_inicio', '>', Carbon::today()->toDateString())->get();
            if(!$sem_cartao){
                return view('website.pagamento_agenda', compact('cursos_menu','formacoes', 'agendas', 'curso'));
            }else{
                $curso_contato = $curso;
                return view('website.contato', compact('cursos_menu','formacoes', 'curso_contato'));
            }
        }
        if($curso_id){
            $agendas = Curso::find($curso_id)->agendas;
            if(!$sem_cartao){
                return view('website.pagamento_agenda', compact('cursos_menu','formacoes', 'agendas', 'curso'));
            }else{
                $curso_contato = $curso;
                return view('website.contato', compact('cursos_menu','formacoes', 'curso_contato'));
            }
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
        $title = 'Conheças nossas Consultoras em Moda - Ecole Brasil';
        $description = 'Conheça o time de Consultoras da Ecole Supérieure de Relooking. Somos formadas por uma equipe de Consultoras altamente qualificadas. Saiba mais!';
        return view('website.consultoras', compact('consultoras', 'formacoes', 'cursos_menu', 'title', 'description'));
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
