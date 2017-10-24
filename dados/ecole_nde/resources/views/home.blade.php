<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Negócio de Estilo') }}</title>
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
                    {{--<li><a data-toggle="pill" href="#menu8">Módulo 8</a></li> --}}
                </ul>

                <div class="tab-content" style="margin-top:10px">
                        <div id="home" class="tab-pane fade in active">
                            <div class="col-md-7" style="text-align:justify">
                                    <h3 align="center">Negócios de Estilo</h3>
                                    <p >Ser dono do seu próprio negócio exige atenção em diversos aspectos, seja o empreendedor o responsável por executa-los ou não. O curso online Negócios de Estilo desenvolve a percepção do aluno sobre os fatores determinantes no processo de ser dono de um negócio, amplia a percepção sobre o potencial da sua empresa e prepara sua atuação comercial.</p>
                                    <p>O conteúdo traz, de forma conceitual e prática, o processo de start, desenvolvimento ou profissionalização de uma empresa com foco em três pilares: marketing, finanças e networking.</p>
                                    <p>A partir raciocínio prático sobre o formato de negócio, o aluno estará apto a precificar corretamente seus produtos e serviços, criar um setor financeiro prático e essencial para o crescimento saudável de seu negócio e praticar networking de forma eficiente, benefícios de manter e nutrir uma grande rede de contatos, estratégias de captação e venda de serviços.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('images/nde-banner.png')}}" style="width:100%"/>
                            </div>
                        </div>
                
                        <div id="menu1" class="tab-pane fade in">
                            <h3 align="center">Módulo 1</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
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
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 1</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/nde_apostila.pdf') }}" target="_blank">
                                                        APOSTILA - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>       
                                    <div id="exercicios" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 1</h3>
                                        <div class="col-md-12">
                                        {{--     <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_canvas.pdf') }}" target="_blank">
                                                        EXERCÍCIO CANVAS - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div> --}}
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_marketing.pdf') }}"  target="_blank">
                                                        EXERCÍCIO MARKETING - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_impressao_a4_mod1.pdf') }}"  target="_blank">
                                                        EXERCÍCIO POWER POINT- MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>                                              
                                    <div id="video" class="tab-pane fade in active">
                                        <video width="400" controls style="display:block; margin:0 auto">
                                            <source src="{{ asset('videos/mod_1_patricia.mp4') }}" type="video/mp4">
                                            {{--  <source src="mov_bbb.ogg" type="video/ogg">  --}}
                                        </video>   
                                    </div>  
                                    <div id="material" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-3">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/leitura.pdf') }}" target="_blank">
                                                            SUGESTÕES DE LEITURA - MÓDULO 01                                            
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                            </div>                               
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Sytzyoa8Ka4" frameborder="0" allowfullscreen></iframe>                                        
                                            </div>                                      
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nD5X9QyNAdc" frameborder="0" allowfullscreen></iframe>
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/IJIYCiPAm2U" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=IJIYCiPAm2U&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>                             
                                </div>                 
                            </div>
                        </div>

                        <div id="menu2" class="tab-pane fade">
                            <h3 align="center">Módulo 2</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod2">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod2" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 2</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/nde_apostila_mod2.pdf') }}" target="_blank">
                                                        APOSTILA - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>       
                                    <div id="exercicios_mod2" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 2</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/nde_exercicios_mod_2.pdf') }}" target="_blank">
                                                        EXERCÍCIOS - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                           <!--  <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_marketing.pdf') }}"  target="_blank">
                                                        EXERCÍCIO MARKETING - MÓDULO 02                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_impressao_a4_mod1.pdf') }}"  target="_blank">
                                                        EXERCÍCIO POWER POINT- MÓDULO 02                                           
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div> -->
                                        </div>
                                    </div>                                              
                                    <div id="video_mod2" class="tab-pane fade in active">
                                        <video width="400" controls style="display:block; margin:0 auto">
                                            <source src="{{ asset('videos/mod_2_video.mp4') }}" type="video/mp4">
                                        </video>   
                                    </div>  
                                    <div id="material_mod2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-3">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/leitura.pdf') }}" target="_blank">
                                                            SUGESTÕES DE LEITURA - MÓDULO 01                                            
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                            </div>                               
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Sytzyoa8Ka4" frameborder="0" allowfullscreen></iframe>                                        
                                            </div>                                      
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nD5X9QyNAdc" frameborder="0" allowfullscreen></iframe>
                                            </div>                                
                                        </div>                       
                                    </div>   


                                    <div id="conferencia_mod2" class="tab-pane fade">
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/TzIxBmCxV_0" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=TzIxBmCxV_0&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
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
                                        <div class="col-md-3">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/nde_apostila_mod_3.pdf') }}" target="_blank">
                                                    APOSTILA - MÓDULO 03                                            
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                </a>
                                            </label>
                                        </div>
                                    </div>       
                                    <div id="exercicios_mod3" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 3</h3>                                        
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_mod_3.pdf') }}" target="_blank">
                                                        EXERCÍCIOS - MÓDULO 03                                           
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>  
                                        </div>                                      
                                    </div>                                              
                                    <div id="video_mod3" class="tab-pane fade in active">
                                                <iframe style="display:block; margin:0 auto; width: 640px" src="https://player.vimeo.com/video/237892224" width="640" height="360" 
                                                        frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                                </iframe>    
                                    </div>  
                                    <div id="material_mod3" class="tab-pane fade">
                                                                    
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/KxJBekClq_c" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=KxJBekClq_c&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
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
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 4</h3>
                                        <div class="col-md-3">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/nde_apostila_mod_4.pdf') }}" target="_blank">
                                                    APOSTILA - MÓDULO 04                                           
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                </a>
                                            </label>
                                        </div>
                                    </div>       
                                    <div id="exercicios_mod4" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 4</h3>                                        
                                                <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/exe_canvas_mod_4.pdf') }}" target="_blank">
                                                            EXERCÍCIO CANVAS - MÓDULO 04                                          
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div>        
                                               {{--  <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="{{ asset('files/exe_mod_4.pdf') }}" target="_blank">
                                                            EXERCÍCIOS - MÓDULO 04                                          
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                        </a>
                                                    </label>
                                                </div> --}}                                         
                                    </div>                                              
                                    <div id="video_mod4" class="tab-pane fade in active">
                                                <iframe style="display:block; margin:0 auto; width: 640px" src="https://player.vimeo.com/video/237611137" width="640" height="360" 
                                                        frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                                </iframe>                                        
                                    </div>  
                                    <div id="material_mod4" class="tab-pane fade">
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/Aroffp0ZFRw" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=Aroffp0ZFRw&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
                                                </div>                                
                                        </div>
                                    </div>                             
                                </div>  

                            </div>                            
                        </div>        

                        <div id="menu5" class="tab-pane fade">
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
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 5</h3>
                                        <div class="col-md-4">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/apostila_mod5.pdf') }}" target="_blank">
                                                    APOSTILA - MÓDULO 05                                           
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                </a>
                                            </label>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/slides_mod5.pdf') }}" target="_blank">
                                                    SLIDE - MÓDULO 05                                           
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                </a>
                                            </label>
                                        </div> --}}
                                    </div>       
                                    <div id="exercicios_mod5" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 5</h3>                                        

                                    </div>                                              
                                    <div id="video_mod5" class="tab-pane fade in active">
                                            <iframe style="display:block; margin:0 auto; width: 640px" src="https://player.vimeo.com/video/237639197" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>  
                                    <div id="material_mod5" class="tab-pane fade">
                                        <div class="col-md-4">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/planilha_pj.xlsx') }}" target="_blank">
                                                    Planilha PJ                                          
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/xlsx.png') }}"/>
                                                </a>
                                            </label>
                                        </div>    
                                        <div class="col-md-4">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/planilha_orcamento.xlsx') }}" target="_blank">
                                                    Planilha Orçamento familiar - Modelo 1
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/xlsx.png') }}"/>
                                                </a>
                                            </label>
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/A-4nuBU_GUI" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=A-4nuBU_GUI&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>                             
                                </div>                 
                            </div>                            
                        </div>  

                        <div id="menu6" class="tab-pane fade">
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
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod6" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 6</h3>
                                        <div class="col-md-4">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/apostila_mod6.pdf') }}" target="_blank">
                                                    APOSTILA DE PREÇOS - MÓDULO 06
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                </a>
                                            </label>
                                        </div>                                        
                                    </div>       
                                    <div id="exercicios_mod6" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 6</h3>                                        
                                    </div>                                              
                                    <div id="video_mod6" class="tab-pane fade in active">
                                        <iframe style="display:block; margin:0 auto; width: 640px" src="https://player.vimeo.com/video/238892445" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>  
                                    <div id="material_mod6" class="tab-pane fade">
                                        <div class="col-md-4">
                                            <label align="center" style="display: block;">
                                                <a href="{{ asset('files/planilha_precos.xlsx') }}" target="_blank">
                                                    Planilha de Preços
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/xlsx.png') }}"/>
                                                </a>
                                            </label>
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/PfCVQZC_LCs" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=PfCVQZC_LCs&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>                             
                                </div>                 
                            </div>                            
                        </div> 

                        <div id="menu7" class="tab-pane fade">
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
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod7" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 7</h3>
                                        
                                    </div>       
                                    <div id="exercicios_mod6" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 7</h3>                                        
                                    </div>                                              
                                    <div id="video_mod7" class="tab-pane fade in active">
                                                <iframe style="display:block; margin:0 auto; width: 640px" src="https://player.vimeo.com/video/239548156" width="640" height="360" 
                                                        frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                                </iframe>  
                                    </div>  
                                    <div id="material_mod7" class="tab-pane fade">
                     
                                    </div>   


                                    <div id="conferencia_mod7" class="tab-pane fade">
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/UzBoeS21NCg" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=UzBoeS21NCg&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
                                                </div>                                
                                        </div>
                                       
                                    </div>                             
                                </div>                 
                            </div>                            
                        </div>    

                        <div id="menu8" class="tab-pane fade">
                            <h3 align="center">Módulo 8</h3>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs col-md-12" style="margin-bottom:10px">
                                    <li class="col-md-2 col-md-offset-1">
                                        <a data-toggle="pill" href="#texto_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/books.gif') }}"/>
                                                <label align="center" style="display: block;">Textos para downloads</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2 active">
                                        <a data-toggle="pill" href="#video_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Vídeo Aula</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#exercicios_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/eye.gif') }}"/>
                                                <label align="center" style="display: block;">Exercícios</label>
                                            </div>
                                        </a>
                                    </li>                            
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#material_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/paper.gif') }}"/>
                                                <label align="center" style="display: block;">Materiais complementares</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" col-md-2">
                                        <a data-toggle="pill" href="#conferencia_mod8">
                                            <div class="">
                                                <img style="margin: 0 auto; display: block;" src="{{ asset('images/player.gif') }}"/>
                                                <label align="center" style="display: block;">Videoconferência</label>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>   
                                <div class="tab-content" style="margin-top:10px; padding-top:10px">
                                    <hr>
                                    <div id="texto_mod8" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Textos para Download Módulo 8</h3>
                                        
                                    </div>       
                                    <div id="exercicios_mod8" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 8</h3>                                        
                                    </div>                                              
                                    <div id="video_mod8" class="tab-pane fade in active">
                                        <!-- <video width="400" controls style="display:block; margin:0 auto">
                                            <source src="{{ asset('videos/mod_1_patricia.mp4') }}" type="video/mp4">
                                        </video>    -->
                                    </div>  
                                    <div id="material_mod8" class="tab-pane fade">
                                                                    
                                    </div>   


                                    <div id="conferencia_mod8" class="tab-pane fade">
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/vDfdkKCCcgo" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=vDfdkKCCcgo&embed_domain=cursos.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>                                                        
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
            {{--  <i class="fa fa-envelope-o" aria-hidden="true"></i>
            &nbsp;
            <i class="fa fa-facebook" aria-hidden="true"></i>  --}}
            <label align="center" style="    display: block;">Todos os direitos reservados Ecole Brasil</label>            
        </div>
            
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

