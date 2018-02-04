<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Psicologia da Auto Imagem') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/icon.png') }}">
    
</head>
<style>
    html, body {
        overflow-x:hidden;
        min-height:800px;
    }

    
    body, div, nav, .navbar-default,
    .panel-default>.panel-heading{
        background-color:#f9f9f9;
    }

    .panel-body, .panel-body div {
        background: white;
    }   

    .btn-primary {
        color: #fff;
        background-color: #ea4872;
        border-color: #ea4872;
    }

    .btn-primary.active.focus, .btn-primary:hover, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open>.btn-primary.dropdown-toggle.focus, .open>.btn-primary.dropdown-toggle:focus, .open>.btn-primary.dropdown-toggle:hover {
        color: #fff;
        background-color: ##ef627c;
        border-color: ##ef627c;
    }    


    
</style>    
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{--  {{ config('app.name', 'Laravel') }}  --}}
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        &nbsp;
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            {{--  <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>  --}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" style="margin-bottom:10px">
            <img src="{{ asset('images/logo-ead.png') }}" style="width:30%; margin-left:35%"/>
        </div>
<style>
.panel {

}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="margin-bottom: 22px; background-color: #f9f9f9; border: 1px solid transparent; border-radius: 4px; box-shadow: 0 1px 1px rgba(0,0,0,.05);">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="pill" href="#home">&nbsp;Introdução</a></li>
                    <li><a data-toggle="pill" href="#menu1">Módulo 1</a></li>
                    <li><a data-toggle="pill" href="#menu2">Módulo 2</a></li>
                    <li><a data-toggle="pill" href="#menu3">Módulo 3</a></li>
                    <li><a data-toggle="pill" href="#menu4">Módulo 4</a></li>
                    <li><a data-toggle="pill" href="#menu5">Módulo 5</a></li>
                    <li><a data-toggle="pill" href="#menu6">Módulo 6</a></li>
                    <li><a data-toggle="pill" href="#menu7">Módulo 7</a></li>
                    <li><a data-toggle="pill" href="#menu8">Módulo 8</a></li>
                    <!--<li><a data-toggle="pill" href="#menu6">Módulo 6</a></li>
                    <li><a data-toggle="pill" href="#menu7">Módulo 7</a></li>
                    <li><a data-toggle="pill" href="#menu8">Módulo 8</a></li> -->
                </ul>

                <div class="tab-content" style="margin-top:10px">
                        <div id="home" class="tab-pane fade in active">
                            <div class="col-md-7" style="text-align:justify">
                                    <h3 align="center">PSICOLOGIA DA AUTO IMAGEM</h3>
                                    <p>O curso de Psicologia da Autoimagem tem como objetivo fornecer ferramentas para uma investigação aprofundada em relação a imagem do indivíduo, ensinando a trabalhar a imagem não apenas como aparência, mas em suas diversas vertentes: autoimagem, relação com o corpo, imagem real x imagem ideal, entre outros.</p>
                                    <p>Unindo conceitos da psicologia, coaching e consultoria de imagem, são apresentadas técnicas de diagnóstico e fortalecimento da autoimagem, além de recursos para a assertividade do projeto de imagem através de uma abordagem completa e ferramentas específicas.</p>
                                    <p>Os exercícios e as teorias oferecidos no curso também ampliam a consciência do aluno para um olhar mais profundo sobre si mesmo, possibilitando uma imagem consciente e psiquicamente coerente.</p>
                                    <p>Através de um diagnóstico para direcionamento do foco de trabalho, o aluno saberá aplicar as ferramentas de forma pontual para que os objetivos do indivíduo sejam atingidos.</p>
                                    <p>Cada módulo será trabalhado durante uma semana, possibilitando um aprendizado aprofundado sobre os temas. As vídeo aulas e atividades estarão disponíveis na plataforma e, todas as terças-feiras, às 19h, acontece uma videoconferência para debates, dúvidas e detalhamento das atividades.</p>
                                     
                                    <p>Qualquer dúvida, entre em contato pelo email <a href="mailto:contato@ecolebrasil.com">contato@ecolebrasil.com</a> !</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('images/nde-banner.png')}}" style="width:100%"/>
                            </div>
                        </div>
                
                        <div id="menu1" class="tab-pane fade in">
                            <h3 align="center">Módulo 1</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 ">
                                        <a data-toggle="pill" href="#texto">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_extra">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência AULA EXTRA</label>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/Psicologia_Autoimagem_MOD1.pdf') }}" target="_blank">
                                                                APOSTILA - MÓDULO 01                                            
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/Modulo-1-Primeiras-Entrevistas-Emilio-Romero.pdf') }}" target="_blank">
                                                                Primeiras entrevistas Emilio Romeo - MÓDULO 01                                            
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>                                                
                                            </div>
                                            <div class="row" style="margin-top:50px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/MOD-1Auto-Imagem-Maxwell-Maltz.pdf') }}" target="_blank">
                                                            Auto Imagem Maxwell Maltz - MÓDULO 01                                           
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                                
                                            </div>

                                        </div>
                                    </div>       
                                    <div id="exercicios" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Atividade1_MOD1.pdf') }}" target="_blank">
                                                        ATIVIDADE 1 - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Caso_Ilustrativo1_MOD1.pdf') }}" target="_blank">
                                                        CASO ILUSTRATIVO - MÓDULO 1                                        
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Psicologia_Autoimagem_MOD1.pdf') }}" target="_blank">
                                                        AULA 1 - Identificação da Autoimagem
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div> 
                                        </div>
                                    </div>                                              
                                    <div id="video" class="tab-pane fade in active">                                        
                                            <div class="col-md-8 col-md-offset-2 ">
                                                {{-- https://player.vimeo.com/video/21104874 --}}
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/210973472" frameborder="0" allowfullscreen></iframe>
                                            </div>                                         
                                    </div>  
                                    <div id="material" class="tab-pane fade">
                                        <div class="row">                                         
                                            <div class="row" style="margin-top: 50px; margin-left: 15px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Aula1_MOD1.pdf') }}" target="_blank">
                                                           Identificação da Autoimagem
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 ">
                                                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe> --}}
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Il0nz0LHbcM" frameborder="0" allowfullscreen></iframe>
                                                </div>                                
                                            </div>                  
                                                                         
                                        </div>
                                    </div>   
                                    <div id="conferencia" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 col-md-offset-3">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/UrtTuNglzuo" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=UrtTuNglzuo&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>  
                                    <div id="conferencia_extra" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>                                                
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlc21YdjdPMTlmNEE" target="_blank" class="">
                                                    <h5>Como criar um canal no youtube.</h5>
                                                </a>                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlMDI3ZElXdDRndWs" class="thumbnail" target="_blank">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlMDI3ZElXdDRndWs" class="" target="_blank">
                                                    <h5>Como acessar o chat.</h5>
                                                </a>                                               
                                            </div>
                                        </div>                                        
                                        
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/--JYnW6cTww" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=--JYnW6cTww&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                </div>                                
                                        </div>
                                       
                                    </div>  
                                </div>                 
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade in">
                            <h3 align="center">Módulo 2</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod_2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod_2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod_2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod_2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod_2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod_2" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 2</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Psicologia_Autoimagem_MOD2.pdf') }}" target="_blank">
                                                        APOSTILA - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Texto-2-Como-se-desenvolve-a-autoimagem.pdf') }}" target="_blank">
                                                        Como se desenvolve a Autoimagem                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Texto-2-Auto-Imagem-Tereza-Erthal.pdf') }}" target="_blank">
                                                        Auto Imagem - Tereza Erthal                                          
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>       
                                    <div id="exercicios_mod_2" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 2</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Exercicio-2-Visão-de-si-mesmo.pdf') }}" target="_blank">
                                                        Visão de si mesmo - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>                                            
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Atividade2_MOD2.pdf') }}" target="_blank">
                                                        ATIVIDADE 2.1 - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Atividade2_2_MOD2.pdf') }}"  target="_blank">
                                                        ATIVIDADE 2.2 - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>                                              
                                    <div id="video_mod_2" class="tab-pane fade in active">
                                            <div class="col-md-8 col-md-offset-2 ">
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/211048055" frameborder="0" allowfullscreen></iframe>
                                            </div>                                          
                                    </div>  
                                    <div id="material_mod_2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Caso_Ilustrativo2_MOD2.pdf') }}" target="_blank">
                                                        CASO ILUSTRATIVO - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>      
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Aula2_MOD2.pdf') }}" target="_blank">
                                                        AULA 2 - Equilibrio entre o Eu Real x Eu Ideal
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>  

                                            <div class="col-md-12 " style="margin-top:25px">                                                    
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/paVED2TFvEk" frameborder="0" allowfullscreen></iframe>                                                    
                                            </div>                                               
                                                                         
                                        </div>                               
                                    </div>   
                                    <div id="conferencia_mod_2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>                                                
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlc21YdjdPMTlmNEE" target="_blank" class="">
                                                    <h5>Como criar um canal no youtube.</h5>
                                                </a>                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlMDI3ZElXdDRndWs" class="thumbnail" target="_blank">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlMDI3ZElXdDRndWs" class="" target="_blank">
                                                    <h5>Como acessar o chat.</h5>
                                                </a>                                               
                                            </div>
                                        </div>                                         
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/7GJDHYYQEFU" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=7GJDHYYQEFU&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>                             
                                </div>                 
                            </div>
                        </div>        

                        <div id="menu3" class="tab-pane fade">
                            <h3 align="center">Módulo 3</h3>
                            
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod3">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod3">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod3">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod3">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod3">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>   
                                
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>

                                    <div id="texto_mod3" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 3</h3>
                                        <div class="row" style="margin-top:10px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Psicologia_Autoimagem_MOD3.pdf') }}" target="_blank">
                                                            APOSTILA - MÓDULO 03                                            
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/estagio_espelho.pdf') }}" target="_blank">
                                                            Estágio do espelho                                            
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/estagio_espelho_winicott.pdf') }}" target="_blank">
                                                            Estágio do espelho Winicott                                       
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                            
                                        </div> 

                                        <div class="row" style="margin-top:10px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/neuronios_espelho.pdf') }}" target="_blank">
                                                            Neurônios Espelho                                    
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                        </div>
                                    </div>  

                                    <div id="exercicios_mod3" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 3</h3>                                        
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Atividade3_MOD3.pdf') }}" target="_blank">
                                                            Exercício Linha do Tempo                                         
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div> 
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Exercicio3_MOD3.pdf') }}" target="_blank">
                                                            Exercício Reflexo                                         
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                          
                                            </div>
 
                                        </div>                                      
                                    </div>       

                                    <div id="video_mod3" class="tab-pane fade in active">
                                            <div class="col-md-8 col-md-offset-2 ">
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/211048744" frameborder="0" allowfullscreen></iframe>
                                            </div>     
                                    </div>  

                                    <div id="material_mod3" class="tab-pane fade">
                                            <div class="row">     
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Caso_Ilustrativo3_MOD3.pdf') }}" target="_blank">
                                                            Caso Ilustrativo 3                                        
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>  
                                                <div class="col-md-12">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_iAcJdvUgEQ" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                    </div>   


                                    <div id="conferencia_mod3" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 col-md-offset-3">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/ryoyzYlvT-c" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=ryoyzYlvT-c&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>     

                                </div>                 
                            </div>                            
                        </div>  

                        <div id="menu4" class="tab-pane fade">
                            <h3 align="center">Módulo 4</h3>
                            
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod4">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod4">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod4">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod4">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod4">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>   
                                
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>

                                    <div id="texto_mod4" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 3</h3>
                                        <div class="row" style="margin-top:10px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Psicologia_Autoimagem_MOD4.pdf') }}" target="_blank">
                                                            APOSTILA - MÓDULO 04                                            
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/wellness_coaching.pdf') }}" target="_blank">
                                                            Wellness Coaching                                            
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/cerebro_corpo.pdf') }}" target="_blank">
                                                            Cérebro e Corpo                                      
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                            
                                        </div> 
                                    </div>  

                                    <div id="exercicios_mod4" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 4</h3>                                        
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Atividade4_001_MOD4.pdf') }}" target="_blank">
                                                            Questionário                                        
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div> 
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Atividade4_002_MOD4.pdf') }}" target="_blank">
                                                            Exercício Eu Ideal                                         
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                          
                                            </div>
 
                                        </div>                                      
                                    </div>       

                                    <div id="video_mod4" class="tab-pane fade in active">
                                            <div class="col-md-8 col-md-offset-2 ">
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/211038935" frameborder="0" allowfullscreen></iframe>
                                            </div>     
                                    </div>  

                                    <div id="material_mod4" class="tab-pane fade">
                                            <div class="row">    
                                            {{-- https://youtu.be/xeQszT-mlGU  --}}
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/Caso_Ilustrativo4_MOD4.pdf') }}" target="_blank">
                                                            Caso Ilustrativo 4                                     
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>  
                                                <div class="col-md-12">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xeQszT-mlGU " frameborder="0" allowfullscreen></iframe>
                                                </div>
                                             {{--    <div class="col-md-12">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_iAcJdvUgEQ" frameborder="0" allowfullscreen></iframe>

                                                </div> --}}
                                            </div>
                                    </div>   


                                    <div id="conferencia_mod4" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 col-md-offset-3">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/AW7AR5AoRnI" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=AW7AR5AoRnI&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>     

                                </div>                 
                            </div>                            
                        </div> 

                        <div id="menu5" class="tab-pane fade in">
                            <h3 align="center">Módulo 5</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod5">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod5">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod5">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod5">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod5">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod5" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/mod5/a_roupa_como_linguagem.pdf') }}" target="_blank">
                                                                A ROUPA COMO LINGUAGEM                                            
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/mod5/roupas_e_marcas.pdf') }}" target="_blank">
                                                                ROUPAS E MARCAS                                          
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>                                             
                                            </div>
                                            <div class="row" style="margin-top:50px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/mod5/moda_inconsciente.pdf') }}" target="_blank">
                                                            Moda e Inconsciente Pascale Navarri                                          
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                                
                                            </div>

                                        </div>
                                    </div>       
                                    <div id="exercicios_mod5" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/mod5/Exercicios_MOD5.pdf') }}" target="_blank">
                                                        APENAS SER                                       
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/mod5/exercicio_desapego.pdf') }}" target="_blank">
                                                        EXERCÍCIO DO DESAPEGO                                         
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Caso_Ilustrativo1_MOD1.pdf') }}" target="_blank">
                                                        CASO ILUSTRATIVO - MÓDULO 1                                        
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Psicologia_Autoimagem_MOD1.pdf') }}" target="_blank">
                                                        AULA 1 - Identificação da Autoimagem
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>  --}}
                                        </div>
                                    </div>                                              
                                    <div id="video_mod5" class="tab-pane fade in active">                                        
                                            <div class="col-md-8 col-md-offset-2 ">
                                                {{-- https://player.vimeo.com/video/21104874 --}}
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/211040340" frameborder="0" allowfullscreen></iframe>
                                            </div>                                         
                                    </div>  
                                    <div id="material_mod5" class="tab-pane fade">
                                        <div class="row">                                         
                                            <div class="row" style="margin-top: 50px; margin-left: 15px">
                                                <div class="col-md-12 ">
                                                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe> --}}
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Z-A2NE6mA64" frameborder="0" allowfullscreen></iframe>
                                                </div>                                
                                            </div>                  
                                                                         
                                        </div>
                                    </div>   
                                    <div id="conferencia_mod5" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 col-md-offset-3">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/TGVV24zz59c" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=TGVV24zz59c&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>  
                                    {{-- <div id="conferencia_extra" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>                                                
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlc21YdjdPMTlmNEE" target="_blank" class="">
                                                    <h5>Como criar um canal no youtube.</h5>
                                                </a>                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlMDI3ZElXdDRndWs" class="thumbnail" target="_blank">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://drive.google.com/open?id=0Bzj0AjNInJAlMDI3ZElXdDRndWs" class="" target="_blank">
                                                    <h5>Como acessar o chat.</h5>
                                                </a>                                               
                                            </div>
                                        </div>                                        
                                        
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/--JYnW6cTww" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=--JYnW6cTww&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                </div>                                
                                        </div>
                                       
                                    </div> --}}  
                                </div>                 
                            </div>
                        </div>

                        <div id="menu6" class="tab-pane fade in">
                            <h3 align="center">Módulo 6</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod6">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod6">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod6">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod6">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod6">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                         {{--            <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_extra">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência AULA EXTRA</label>
                                            </div>
                                        </a>
                                    </li> --}}
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod6" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/mod_6/Módulo 6_ Relação terapêutica.pdf') }}" target="_blank">
                                                                Módulo 6 - Relação terapêutica
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/mod_6/Módulo 6_ Responsabilidade e Autenticidade.pdf') }}" target="_blank">
                                                                Módulo 6 - Responsabilidade e Autenticidade
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>                                             
                                            </div>
                                            <div class="row" style="margin-top:50px">
                                                {{-- <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/mod_6/Modulo 6_ Atitudes do terapeuta.pdf') }}" target="_blank">
                                                            Modulo 6 - Atitudes do terapeuta
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div> --}}  
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/mod_6/Modulo 6_ Atitudes do terapeuta.pdf') }}" target="_blank">
                                                            Modulo 6 - Atitudes do Terapeuta
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div> 
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/modulo_6/textos/Psicologia_Autoimagem_MOD6.pdf') }}" target="_blank">
                                                            Texto 6 - Sentir-se bem na propria pele
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                               
                                            </div>

                                        </div>
                                    </div>       
                                    <div id="exercicios_mod6" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Atividade6_MOD6.pdf') }}" target="_blank">
                                                        A Percepção de Si Através da Autoimagem
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/modulo_6/exe/Exercicios_MOD6.pdf') }}" target="_blank">
                                                        A Comunicação
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/modulo_6/exe/Caso_Ilustrativo6_MOD6.pdf') }}" target="_blank">
                                                        Caso Ilustrativo
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Caso_Ilustrativo1_MOD1.pdf') }}" target="_blank">
                                                        CASO ILUSTRATIVO - MÓDULO 1                                        
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Psicologia_Autoimagem_MOD1.pdf') }}" target="_blank">
                                                        AULA 1 - Identificação da Autoimagem
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>  --}}
                                        </div>
                                    </div>                                              
                                    <div id="video_mod6" class="tab-pane fade in active">                                        
                                            <div class="col-md-8 col-md-offset-2">
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/211042297" frameborder="0" allowfullscreen></iframe>
                                            </div>                                         
                                    </div>  
                                    <div id="material_mod6" class="tab-pane fade">
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/modulo_6/material/Aula6_1_MOD6.pdf') }}" target="_blank">
                                                            Modulo 6 - Aula 1
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                       
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/modulo_6/material/Aula6_2_MOD6.pdf') }}" target="_blank">
                                                            Modulo 6 - Aula 2
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                                                 
                                            </div>                                         
                                            <div class="row" style="margin-top: 50px; margin-left: 15px">
                                                <div class="col-md-12 ">
                                                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe> --}}
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VRXmsVF_QFY" frameborder="0" allowfullscreen></iframe>
                                                </div>     
                                                <div class="col-md-12 ">
                                                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe> --}}
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/UpJFE8UcFcU" frameborder="0" allowfullscreen></iframe>
                                                </div>                            
                                            </div>                  
                                                                         
                                        </div>
                                    </div>   
                                    <div id="conferencia_mod6" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 col-md-offset-3">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                            {{-- http://youtu.be/ --}}
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/79wYtw5yeFE" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=79wYtw5yeFE&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>  
                                    
                                </div>                 
                            </div>
                        </div>  
                        <div id="menu7" class="tab-pane fade in">
                            <h3 align="center">Módulo 7</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod7">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod7">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod7">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod7">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod7">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                         {{--            <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_extra">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência AULA EXTRA</label>
                                            </div>
                                        </a>
                                    </li> --}}
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod7" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/textos/Módulo 7 Flow.pdf') }}" target="_blank">
                                                                Módulo 7 - Flow
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">  
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/textos/Texto 7 - Felicidade.pdf') }}" target="_blank">
                                                                Módulo 7 - Felicidade
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/textos/Moìdulo 7 Psicologia Positiva.pdf') }}" target="_blank">
                                                                Módulo 7 - Psicologia Positiva
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>                                             
                                            </div>
                                            <div class="row" style="margin-top:50px">

                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/mod_7/Psicologia_Autoimagem_MOD7.pdf') }}" target="_blank">
                                                            Modulo 7 - Psicologia da Autoimagem
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div> 
                                            </div>

                                        </div>
                                    </div>       
                                    <div id="exercicios_mod7" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe/Estilo de Vida.pdf') }}" target="_blank">
                                                        Estilo de Vida
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/mod_7/Exercicios_MOD7.pdf') }}" target="_blank">
                                                        Exercícios Módulo 7
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Caso_Ilustrativo1_MOD1.pdf') }}" target="_blank">
                                                        CASO ILUSTRATIVO - MÓDULO 1                                        
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Psicologia_Autoimagem_MOD1.pdf') }}" target="_blank">
                                                        AULA 1 - Identificação da Autoimagem
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>  --}}
                                        </div>
                                    </div>                                              
                                    <div id="video_mod7" class="tab-pane fade in active">                                        
                                            <div class="col-md-8 col-md-offset-2">
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/211044484" frameborder="0" allowfullscreen></iframe>
                                            </div>                                         
                                    </div>  
                                    <div id="material_mod7" class="tab-pane fade">
                                        <div class="row">                                         
                                            <div class="row" style="margin-top: 50px; margin-left: 15px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/mod_7/Caso_Ilustrativo7_MOD7.pdf') }}" target="_blank">
                                                            Caso Ilustrativo Módulo 7
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 ">
                                                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe> --}}
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/uOrzmFUJtrs" frameborder="0" allowfullscreen></iframe>
                                                </div>     
                                               {{--  <div class="col-md-12 ">
                                                         <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe> 
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/UpJFE8UcFcU" frameborder="0" allowfullscreen></iframe>
                                                </div> --}}                            
                                            </div>                  
                                                                         
                                        </div>
                                    </div>   
                                    <div id="conferencia_mod7" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 col-md-offset-3">
                                                {{-- http://youtu.be/ehThiEHLTno --}}
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                            {{-- http://youtu.be/ --}}
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/ehThiEHLTno" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=ehThiEHLTno&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>  
                                    
                                </div>                 
                            </div>
                        </div>                        
                        <div id="menu8" class="tab-pane fade in">
                            <h3 align="center">Módulo 8</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#text_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#vide_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicio_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#materia_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferenci_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                         {{--            <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_extra">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência AULA EXTRA</label>
                                            </div>
                                        </a>
                                    </li> --}}
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="text_mod8" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/modulo_8/textos_mod8/Módulo 8 Planos, Projetos e perspectivas futuras Emilio Romero.pdf') }}" target="_blank">
                                                                Módulo 8 - Planos, Projetos e perspectivas futuras Emilio Romero
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/modulo_8/textos_mod8/Módulo 8 Processo de mudança.pdf') }}" target="_blank">
                                                                Módulo 8 - Processo de mudança
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/modulo_8/textos_mod8/Psicologia_Autoimagem_MOD8.pdf') }}" target="_blank">
                                                                Projeto de Imagem 
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/modulo_8/textos_mod8/Texto 8- Projeto Original.pdf') }}" target="_blank">
                                                                Texto 8 - Projeto Original
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
                                                    </div>                                             
                                            </div>                                           

                                        </div>
                                    </div>       
                                    <div id="exercicio_mod8" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 8</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/modulo_8/exe_mod8/At. 8.2 - Projeto Original de Imagem.pdf') }}" target="_blank">
                                                        At. 8.2 - Projeto Original de Imagem
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/modulo_8/exe_mod8/Atividade8_1_MOD8.pdf') }}" target="_blank">
                                                        Atividade 1
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/modulo_8/exe_mod8/Atividade8_2_MOD8.pdf') }}" target="_blank">
                                                        Atividade 2
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/modulo_8/exe_mod8/Atividade8_3_MOD8.pdf') }}" target="_blank">
                                                        Atividade 3
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/modulo_8/exe_mod8/Exercicios_MOD8.pdf') }}" target="_blank">
                                                        Modulo 8 - Exercícios 
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            
                                            {{-- <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Caso_Ilustrativo1_MOD1.pdf') }}" target="_blank">
                                                        CASO ILUSTRATIVO - MÓDULO 1                                        
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Psicologia_Autoimagem_MOD1.pdf') }}" target="_blank">
                                                        AULA 1 - Identificação da Autoimagem
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>  --}}
                                        </div>
                                    </div>                                              
                                    <div id="vide_mod8" class="tab-pane fade in active">                                        
                                            <div class="col-md-8 col-md-offset-2">
                                                    <iframe width="660" height="515" src="https://player.vimeo.com/video/211046714" frameborder="0" allowfullscreen></iframe>
                                            </div>                                         
                                    </div>  
                                    <div id="materia_mod8" class="tab-pane fade">
                                        <div class="row">                                         
                                            <div class="row" style="margin-top: 50px; margin-left: 15px">
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/modulo_8/material_mod8/Dicas para um bom atendimento.pdf') }}" target="_blank">
                                                            Dicas para um bom atendimento
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/modulo_8/material_mod8/Escuta e atenção plena.pdf') }}" target="_blank">
                                                            Escuta e atenção plena
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/modulo_8/material_mod8/Roteiro de Conceitos.pdf') }}" target="_blank">
                                                            Roteiro de Conceitos
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>                            
                                            </div>                  
                                                                         
                                        </div>
                                    </div>   
                                    <div id="conferenci_mod8" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-1 col-md-offset-3">
                                                {{-- http://youtu.be/ehThiEHLTno --}}
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="thumbnail">
                                                    <img src="{{ asset('images/chrome.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-xs-6 col-md-5">
                                                <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B17477593-E51E-1029-F03B-CB5C0CBF555F%7D%26lang%3Dpt-BR%26browser%3D4%26usagestats%3D0%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1/update2/installers/ChromeSetup.exe" class="">
                                                    <h5>Caso esteja usando outro navegador faça download do google chrome.</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                            {{-- http://youtu.be/ --}}
                                                            {{-- http://youtu.be/v_3uZLdl3Hc --}}
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/v_3uZLdl3Hc" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=v_3uZLdl3Hc&embed_domain=psicologia.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>  
                                    
                                </div>                 
                            </div>
                        </div> 


                </div>
            </div>
        </div>
    </div>
</div>
        <footer>
        <div class="row" style="margin-bottom:10px">
            <label align="center" style="    display: block;">Todos os direitos reservados Ecole Brasil</label>            
        </div>
            
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
