<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Desmestificando Gênero') }}</title>

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
                                    <h3 align="center">DESMISTIFICANDO GÊNERO</h3>
                                    <p >Para quem busca atualização e inovação na forma de pensar e trabalhar os debates sobre GÊNERO vem cada vez mais ganhando espaço nos contextos social e profissional. Compreender de forma aprofundada essas questões sociais é imprescindível para quem tem interesse pelo assunto e para quem trabalha com imagem pessoal, psicologia, sociologia, entre outros.</p>
                                    <p>O curso, totalmente online, apresenta conceitos teóricos sobre gênero, feminismo e teoria queer e considerações básicas para aplicação da teoria na prática. Os alunos vão treinar seus olhares para perceber novos ângulos de observação de fenômenos sociais, bem como desenvolver capacidades críticas para debater e (des)fazer padrões hegemônicos de comportamento.</p>
                                    <p>Vamos debater como o discurso de gênero está influenciando o agora e desenvolveremos estratégias a respeito de como podemos nos comunicar sem oprimir e valorizando a inclusão.</p>
                                    <ul>
                                        <li>Início do curso: dia 04 de Outubro</li>
                                        <li>6 módulos - vídeo conferências todas as quartas, às 20h
(todos os materiais, incluíndo as vídeo conferências, ficam disponíveis durante um ano para os alunos)</li>
                                        <li><a target="_blank" href="https://goo.gl/6nR5UN">Confira os conteúdos, valores e formas de pagamento</a>  </li>
                                    </ul>

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
                                      <!--   <div class="col-md-12">
                                            <div class="col-md-3">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/nde_apostila.pdf') }}" target="_blank">
                                                        APOSTILA - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>       
                                    <div id="exercicios" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 1</h3>
                                        <!-- <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_canvas.pdf') }}" target="_blank">
                                                        EXERCÍCIO CANVAS - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
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
                                        </div> -->
                                    </div>                                              
                                    <div id="video" class="tab-pane fade in active">
                                        <video width="400" controls style="display:block; margin:0 auto">
                                            <source src="{{ asset('videos/genero_mod_1.mp4') }}" type="video/mp4">
                                        </video>   
                                    </div>  
                                    <div id="material" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-3">
                                                    <label align="center" style="display: block;">
                                                        <a href="http://www.cinevitor.com.br/tomboy/" target="_blank">
                                                            SUGESTÕES DE FILME                                       
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/tomboy1.jpg') }}"/>                                        
                                                        </a>
                                                    </label>
                                            </div>  
                                            <div class="col-md-3">
                                                    <label align="center" style="display: block;">
                                                        <a href="http://bit.ly/2tFcG2G" target="_blank">
                                                            SUGESTÕES DE LEITURA - Vamos falar sobre gênero?                                                                                               
                                                        </a>
                                                    </label>
                                            </div>           
                                            <div class="col-md-3">
                                                    <label align="center" style="display: block;">
                                                        <a href="http://bit.ly/2xsLFlN" target="_blank">
                                                            SUGESTÕES DE LEITURA - O conceito de gênero por seis autoras feministas
                                                        </a>
                                                    </label>
                                            </div>                     
                                                                         
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LV7l13SZcw8" frameborder="0" allowfullscreen></iframe>                                        
                                            </div>                                      
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eYqYLfm1rWA" frameborder="0" allowfullscreen></iframe>
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/z5hh_aJcnKo" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=z5hh_aJcnKo&embed_domain=genero.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
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
                                      <!--   <div class="col-md-12">
                                            <div class="col-md-3">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/nde_apostila.pdf') }}" target="_blank">
                                                        APOSTILA - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>       
                                    <div id="exercicios_mod_2" class="tab-pane fade" style="margin-top:10px; padding-top:10px">
                                        <h3 align="center" style="margin-top:10px; padding-top:10px" >Exercícios Módulo 2</h3>
                                        <!-- <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label align="center" style="display: block;">
                                                    <a href="{{ asset('files/exe_canvas.pdf') }}" target="_blank">
                                                        EXERCÍCIO CANVAS - MÓDULO 01                                            
                                                    <img style="margin: 0 auto; display: block;" src="{{ asset('images/pdf.png') }}"/>                                        
                                                    </a>
                                                </label>
                                            </div>
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
                                        </div> -->
                                    </div>                                              
                                    <div id="video_mod_2" class="tab-pane fade in active">
                                        <video width="400" controls style="display:block; margin:0 auto">
                                            <source src="{{ asset('videos/genero_mod_2.mp4') }}" type="video/mp4">
                                        </video>   
                                    </div>  
                                    <div id="material_mod_2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-4">
                                                    <!--<label align="center" style="display: block;">
                                                        <a href="http://www.cinevitor.com.br/tomboy/" target="_blank">
                                                            SUGESTÕES DE FILME                                       
                                                        <img style="margin: 0 auto; display: block;" src="{{ asset('images/tomboy1.jpg') }}"/>
                                                        </a>
                                                    </label>-->
                                            </div>  
                                            <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="http://bit.ly/2vC8dyZ" target="_blank">
                                                            SUGESTÕES DE LEITURA - O conceito de gênero por Gayle Rubin: o sistema sexo/gênero
                                                        </a>
                                                    </label>
                                            </div>           
                                            <div class="col-md-4">
                                                    <label align="center" style="display: block;">
                                                        <a href="http://bit.ly/2xth8Eq" target="_blank">
                                                            SUGESTÕES DE LEITURA - Maternidade é pauta central do feminismo
                                                        </a>
                                                    </label>
                                            </div>                     
                                                                         
                                        </div>
                                        
                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-12 ">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wV1FrqwZyKw" frameborder="0" allowfullscreen></iframe>
                                            </div>                                
                                        </div>                                
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
                                                        <iframe width="530" height="400" src="http://www.youtube.com/embed/z5hh_aJcnKo" frameborder="0" allowfullscreen></iframe>
                                                        <iframe width="400" height="500" src="https://www.youtube.com/live_chat?v=z5hh_aJcnKo&embed_domain=genero.ecolebrasil.com" frameborder="0" allowfullscreen></iframe>
                                                        
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

