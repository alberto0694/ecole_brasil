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
                    <!-- <li><a data-toggle="pill" href="#menu3">Módulo 3</a></li>
                    <li><a data-toggle="pill" href="#menu4">Módulo 4</a></li>
                    <li><a data-toggle="pill" href="#menu5">Módulo 5</a></li>
                    <li><a data-toggle="pill" href="#menu6">Módulo 6</a></li>
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
                                                        <label align="center" style="display: block;">
                                                            <a href="{{ asset('files/MOD1-Psicologia-da-Autoimagem.pdf') }}" target="_blank">
                                                                PSICOLOGIA DA AUTOIMAGEM - MÓDULO 01                                            
                                                            <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                            </a>
                                                        </label>
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
                                                    <a href="{{ asset('files/Módulo-1-Avaliação-de-Satisfação-com-a-Imagem.pdf') }}" target="_blank">
                                                        Avaliação de Satisfação com a Imagem - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>                                            
                                           {{--  <div class="col-md-4">
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
                                            </div> --}}
                                        </div>
                                    </div>                                              
                                    <div id="video" class="tab-pane fade in active">
                                        <video width="400" controls style="display:block; margin:0 auto">
                                            <source src="{{ asset('videos/imagem_mod_1.mp4') }}" type="video/mp4">
                                        </video>   
                                    </div>  
                                    <div id="material" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Psicologia_Autoimagem_MOD1.pdf') }}" target="_blank">
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
                                        <div class="row" style="margin-top: 50px; margin-left: 15px">
                                            <div class="col-md-12 ">
                                                    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe> --}}
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Il0nz0LHbcM" frameborder="0" allowfullscreen></iframe>
                                            </div>                                
                                        </div>                  
                                                                         
                                        </div>
                                   {{--      
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LV7l13SZcw8" frameborder="0" allowfullscreen></iframe>                                        
                                            </div>                                      
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eYqYLfm1rWA" frameborder="0" allowfullscreen></iframe>
                                            </div>                                
                                        </div>  --}}                               
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
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=UrtTuNglzuo&embed_domain=cursosead.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
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
                                            
                                        </div>
                                    </div>       
                                    <div id="exercicios_mod_2" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 2</h3>
                                        <div class="col-md-12">
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
{{--                                             <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_impressao_a4_mod1.pdf') }}"  target="_blank">
                                                        EXERCÍCIO POWER POINT- MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div> --}}
                                        </div>
                                    </div>                                              
                                    <div id="video_mod_2" class="tab-pane fade in active">
                                        <video width="400" controls style="display:block; margin:0 auto">
                                            <source src="{{ asset('videos/imagem_mod_2.mp4') }}" type="video/mp4">
                                        </video>   
                                    </div>  
                                    <div id="material_mod_2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/Caso_Ilustrativo1_MOD2.pdf') }}" target="_blank">
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
                                                                         
                                        </div>
                                        
{{--                                         <div class="row" style="margin-top: 10px">
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe>
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Il0nz0LHbcM" frameborder="0" allowfullscreen></iframe>
                                            </div>                                
                                        </div> --}}                                
                                    </div>   
                                    <div id="conferencia_mod_2" class="tab-pane fade">
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/7GJDHYYQEFU" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=7GJDHYYQEFU&embed_domain=cursosead.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
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

