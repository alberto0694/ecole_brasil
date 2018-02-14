
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <title>Ecole Supérieure de Relooking</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Facebook Pixel Code -->
        <script src="{{ asset('js/helpers.js') }}"></script>
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '272382903251531');
        fbq('track', 'PageView');
        </script>
        <noscript>
         <img height="1" width="1"
        src="https://www.facebook.com/tr?id=272382903251531&ev=PageView
        &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    </head>
    <style type="text/css">

      body, html{
        overflow-x: hidden;
        font-family: 'Montserrat', sans-serif;
      }
      .btn-primary {
          color: #fff;
          background-color: #ef4060;
          border-color: #ef4060;
      }
      .btn-primary:hover {
          color: #fff;
          background-color: #ef4060;
          border-color: #ef4060;
      }

      .has-errors input{
        border: 2px solid color: #a94442;
      }

      .nav-tabs.background-blue {
          padding-top: 6px;
          background-color: #f3869a;
          border: 1px solid #cb3652;
      }

      .title-pink-begin-text,
      .days-agenda,
      .descricao-day-agenda{
          color:rgba(239, 64, 96, 1);
          font-weight: bold;
          font-style: italic;
      }

      .days-agenda, .descricao-day-agenda{
          text-decoration: underline;
          font-style: normal;
          font-size: 20pt;
      }

      .descricao-day-agenda{
        text-decoration: none;
        font-size: 17pt;
      }

      .upper-case{
        text-transform: uppercase;
      }

      .gray-text{
        color: gray;
        font-size: 12pt;
      }

      .carousel-control.left ,.carousel-control.right {
          background-image:none;
          filter: none;
      }

      .navbar {
          border-radius: 0px;
          padding-top: 45px;
      }

      .gray-text-bold{
        color: gray;
        font-weight: bold;
      }

      .navbar-default .navbar-toggle:focus,
      .navbar-default .navbar-toggle:hover {
          background-color: rgba(239, 64, 96, 1);
      }

      .navbar-default .navbar-toggle {
          border-color: rgba(239, 64, 96, 1);
      }

      .navbar-default .navbar-toggle .icon-bar {
          background-color: white;
          font-weight: bold;
      }

      .navbar-default .navbar-nav>.open>a,
      .navbar-default .navbar-nav>.open>a:focus,
      .navbar-default .navbar-nav>.open>a:hover {
          color: white;
          background-color: rgba(239, 64, 96, 1);
      }
      .navbar .navbar-nav {
          display: inline-block;
          float: none;
          vertical-align: top;
          /*max-height: 40px;*/
      }

      .navbar .navbar-collapse {
          text-align: center;
      }

      .dropdown-menu {
          background-color: rgba(239, 64, 96, 1);
          color: white;
          margin-left: 20px;
          font-weight: bold;
      }

      .dropdown-menu>li>a {
          color: white;
          text-decoration: none;
          font-weight: bold;
          background-color: rgba(239, 64, 96, 1);
      }

      .navbar-default {
          background-color: rgba(239, 64, 96, 1);
          border-color: rgba(239, 64, 96, 1);
          color: white;
          font-weight: bold;
          margin-bottom: 0px;
      }

      ul {
        list-style-type: none;
        color:white;
      }

      .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
          color: #fff;
          background-color: #e7e7e7;
      }

      .navbar-default .navbar-nav>li>a {
          color: #fff;
          font-weight: bold;
      }


      .navbar-nav>li {
          min-height: 65px;
          vertical-align: middle;
          font-weight: bold;
      }

      .navbar-default .navbar-nav>li>a {
          max-height: 45px;
          vertical-align: middle;
          font-weight: bold;
          font-size:7pt;
      }

      .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
          color: white;
          font-weight: bold;
          border-bottom: 2px solid white;
          background-color: transparent;
      }


      .dropdown-menu {
        font-size: 9pt;
        text-transform: uppercase;
      }


      /*footer*/
      .title-footer{
          font-weight: bold;
      }

      .full {
          width: 100%;
      }
      .gap {
        height: 30px;
        width: 100%;
        clear: both;
        display: block;
      }
      .footer {
        background: #58595b;
        height: auto;
        padding-bottom: 30px;
        position: relative;
        width: 100%;
        border-bottom: 1px solid #CCCCCC;
        border-top: 1px solid #DDDDDD;
      }
      .footer p {
        margin: 0;
      }
      .footer img {
        max-width: 100%;
      }
      .footer h3 {
        border-bottom: 1px solid #BAC1C8;
        color: white;
        font-size: 18px;
        font-weight: 600;
        line-height: 27px;
        padding: 40px 0 10px;
        text-transform: uppercase;
      }
      .footer ul {
        font-size: 13px;
        list-style-type: none;
        margin-left: 0;
        padding-left: 0;
        margin-top: 15px;
        color: white;
      }
      .footer ul li a {
        padding: 0 0 5px 0;
        display: block;
      }
      .footer a {
        color: white
      }
      .supportLi h4 {
        font-size: 20px;
        font-weight: lighter;
        line-height: normal;
        margin-bottom: 0 !important;
        padding-bottom: 0;
      }
      .newsletter-box input#appendedInputButton {
        background: #FFFFFF;
        display: inline-block;
        float: left;
        height: 30px;
        clear: both;
        width: 100%;
        padding: 10px;
        background: rgba(239, 64, 96, 1);
      }
      .newsletter-box .btn {
        border: medium none;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -o-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        display: inline-block;
        height: 40px;
        padding: 0;
        width: 100%;
        color: #fff;
        background: rgba(239, 64, 96, 1);
      }

      .video-index{
          margin: 0;
          padding: 0;
          border: none;
          margin-top: -1px;
          border-radius: 0px;
      }

      .newsletter-box {
        overflow: hidden;
      }

      .newsletter-box input{
        padding: 5px;
        margin-bottom: 5px;
        color: black;
      }

      a {
          color: rgba(239, 64, 96, 1);
          text-decoration: none;
      }

      a:hover {
          color: rgba(239, 64, 96, 1);
          /*text-decoration: none;*/
      }

      .bg-gray {
        background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
        box-shadow: 0 1px 0 #B4B3B3;
      }
      .social li {
        background: none repeat scroll 0 0 #B5B5B5;
        border: 2px solid #B5B5B5;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        float: left;
        height: 36px;
        line-height: 36px;
        margin: 0 8px 0 0;
        padding: 0;
        text-align: center;
        width: 36px;
        transition: all 0.5s ease 0s;
        -moz-transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
        -ms-transition: all 0.5s ease 0s;
        -o-transition: all 0.5s ease 0s;
      }
      .social li:hover {
        transform: scale(1.15) rotate(360deg);
        -webkit-transform: scale(1.1) rotate(360deg);
        -moz-transform: scale(1.1) rotate(360deg);
        -ms-transform: scale(1.1) rotate(360deg);
        -o-transform: scale(1.1) rotate(360deg);
      }
      .social li a {
        color: #EDEFF1;
      }
      .social li:hover {
        border: 2px solid #2c3e50;
        background: #2c3e50;
      }
      .social li a i {
        font-size: 16px;
        margin: 0 0 0 5px;
        color: #EDEFF1 !important;
      }
      .footer-bottom {
        background: #58595b;
        color: white;
        padding-top: 10px;
        padding-bottom: 10px;
      }
      .footer-bottom p.pull-left {
        padding-top: 6px;
      }
      .payments {
        font-size: 2em;
      }
      .dropdown-submenu {
          position:relative;
      }
      .dropdown-submenu>.dropdown-menu {
          top:0;
          left:100%;
          margin-top:-6px;
          margin-left:-1px;
          -webkit-border-radius:0 6px 6px 6px;
          -moz-border-radius:0 6px 6px 6px;
          border-radius:0 6px 6px 6px;
      }
      .dropdown-submenu:hover>.dropdown-menu {
          display:block;
      }

      .dropdown-submenu>a:after {
          display:block;
          content:" ";
          float:right;
          width:0;
          height:0;
          border-color:transparent;
          border-style:solid;
          border-width:5px 0 5px 5px;
          border-left-color:#cccccc;
          margin-top:5px;
          margin-right:-10px;
      }
      .dropdown-submenu:hover>a:after {
          border-left-color:#ffffff;
      }
      .dropdown-submenu.pull-left {
          float:none;
      }
      .dropdown-submenu.pull-left>.dropdown-menu {
          left:-100%;
          margin-left:10px;
          -webkit-border-radius:6px 0 6px 6px;
          -moz-border-radius:6px 0 6px 6px;
          border-radius:6px 0 6px 6px;
      }

      .manifesto{
          position: absolute;
          font-size: 14pt;
          margin:0;
          padding: 25px;
          padding-right: 90px;
          padding-left: 90px;
          color: white;
          height: 100%;
          text-align: justify;
      }

      .manifesto label{
          font-size:21pt;
          text-align:center;
          display: inherit;
      }

      .manifesto_mobile{
          position: absolute;
          font-size: 12pt;
          margin:0;
          padding: 15px;
          color: white;
          height: 100%;
          text-align: justify;
      }

      .manifesto_mobile label{
          font-size:14pt;
          text-align:center;
          display: inherit;
      }

      @keyframes flickerAnimation {
        0%   { opacity:1; }
        50%  { opacity:0; }
        100% { opacity:1; }
      }
      @-o-keyframes flickerAnimation{
        0%   { opacity:1; }
        50%  { opacity:0; }
        100% { opacity:1; }
      }
      @-moz-keyframes flickerAnimation{
        0%   { opacity:1; }
        50%  { opacity:0; }
        100% { opacity:1; }
      }
      @-webkit-keyframes flickerAnimation{
        0%   { opacity:1; }
        50%  { opacity:0; }
        100% { opacity:1; }
      }
      #loading-background{
          background-color: rgba(239, 64, 96, 1);
          padding-bottom: 150px;
          padding-top: 150px;
      }
      #loading-admin-application-only {
         -webkit-animation: flickerAnimation 1.5s infinite;
         -moz-animation: flickerAnimation 1.5s infinite;
         -o-animation: flickerAnimation 1.5s infinite;
          animation: flickerAnimation 1.5s infinite;
      }
      @media screen and (min-width: 768px) {
        .dropdown-menu,
        .dropdown-menu>li>a {
            background-color: #f4f4f4;
            border-radius: 0;
            color: black;
            border: none;
            box-shadow: none;
        }

        .link-cursos-menu {
          color: #58585b;
        }

        .navbar a:hover{
          text-decoration: none;
          color:#ed3656;
        }

        .link-cursos-menu:hover,
        .dropdown-menu>li>a:focus,
        .dropdown-menu>li>a:hover,{
           color:#ed3656;
          text-decoration: none;
          background-color: #f4f4f4;
        }

        .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
            color: #ed3656;
            text-decoration: none;
            background-color: #f4f4f4;
        }
      }

      @media screen and (max-width: 768px) {
        .navbar-brand {
          margin-bottom: 15px;
        }

        .navbar-default .navbar-nav .open .dropdown-menu>li>a {
            color: white;
            text-align: center;
            font-size: 12pt;
            margin-bottom: 5px;
            padding: 0;
        }
        .navbar-default .navbar-nav .open .dropdown-menu>li>a:first-child {
            margin-bottom: 25px;
        }

        .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            margin-left: 0;
            padding: 0;
            font-size: 10pt;
        }
      }
    </style>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a style="padding: 0; margin: 0; margin-top: -20px;" class="navbar-brand hidden-xs hidden-sm" href="{{route('index')}}" >
                  <img alt="Ecole Brasil" src="{{asset('images/logo_ecole_brasil.png')}}">
              </a>
              <a class="navbar-brand hidden-md hidden-lg" href="{{route('index')}}" >
                  <img alt="Ecole Brasil" src="{{asset('images/ecole_menu_mobile.png')}}">
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ECOLE BRASIL <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="padding-top:10px">
                      <li><a class="link-cursos-menu" href="{{route('escola')}}">ECOLE SUÉRIEURE DE RELOOKING</a></li><br>
                      <li><a class="link-cursos-menu" href="{{route('faq')}}">FAQ</a></li><br>
                      {{-- <li><a class="link-cursos-menu" href="{{route('certificacao')}}">CERTIFICAÇÃO INTERNACIONAL</a></li><br> --}}
                      <li><a class="link-cursos-menu" href="{{route('equipe')}}">NOSSA EQUIPE</a></li><br>
                      <li><a class="link-cursos-menu" href="{{route('manifesto')}}">MANIFESTO</a></li><br>
                      <li><a class="link-cursos-menu" href="{{route('certificacao')}}">CERTIFICAÇÃO INTERNACIONAL</a></li><br>
                      <li><a class="link-cursos-menu" href="https://ecolesuperieurerelooking.com/" target="_blank">PARIS</a></li><br>
                  </ul>
                </li>
                <li class="dropdown hidden-sm hidden-xs" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">FORMAÇÕES E CURSOS <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="max-width: 800px; padding-top:10px">
                    <li class="menu-item dropdown dropdown-submenu ">
                      <div class="container">
                        @foreach($formacoes as $formacao)
                              <div class="col-md-2" style="min-height: 160px;">
                                <h6>{{ $formacao->nome }}</h6>
                                <ul style=" padding: 0; margin-top: 10px">
                                    @foreach($formacao->cursos as $curso)
                                      <a class="link-cursos-menu" href="{{ route('cursos', $curso->id) }}">{{$curso->nome}}</a><br>
                                      <br>
                                    @endforeach
                                </ul>
                              </div>
                        @endforeach
                      </div>
                    </li>
                  </ul>
                </li>
                <li><a href="{{route('certificacao')}}">CERTIFICAÇÃO INTERNACIONAL</a></li>
                <li class="dropdown hidden-md hidden-lg" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CURSOS <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="margin-top: 10px">
                      @foreach($cursos_menu as $curso)
                        <li>
                            <a href="{{ route('cursos', $curso->id) }}">{{$curso->nome}}</a>
                        </li>
                      @endforeach
                  </ul>
                </li>
                <li><a href="{{route('blog')}}">BLOG</a></li>
                {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOTÍCIAS <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li style="margin-top: 10px"><a href="{{route('blog')}}"  target="_blank">BLOG</a></li>
                      <li><a href="{{route('imprensa')}}"  target="_blank">IMPRENSA</a></li>
                  </ul>
                </li> --}}
                <li><a href="{{route('sou_ecole')}}">EU SOU ECOLE</a></li>
                {{-- <li><a href="{{route('consultoras')}}">CONSULTORAS</a></li> --}}
                <li><a href="{{route('depoimentos')}}">DEPOIMENTOS</a></li>
                <li><a href="{{route('ebook')}}"  target="_blank">E-SHOP</a></li>
                <li><a href="{{route('agenda')}}">AGENDA</a></li>
                {{-- <li><a href="{{route('ead.login')}}"  target="_blank">EAD</a></li> --}}
                <li><a href="{{route('restrito')}}"  target="_blank">EX-ALUNAS</a></li>
                <li><a href="{{route('contato')}}">CONTATO</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="content-web-site" style="display:none">
            @yield('content')
        </div>
        <div id="loading-background">
          <div id="loading-admin-application-only">
            <div class="row">
                  <li class="hidden-xs hidden-sm">
                      <a style="display: block; margin: 0 auto;" href="{{route('index')}}">
                          <img src="{{asset('images/logo-ecole-load.png')}}" style="display: block; margin: 0 auto;">
                      </a>
                  </li>
            </div>
          </div>
        </div>
        <footer>
            <div class="footer" id="footer">
                @if ( !(\Route::current()->getName() == 'contato') )
                    <div class="container">
                        <div class="row">


                            <div class="col-lg-offset-1 col-lg-11 col-md-4 col-md-offset-1 col-md-11">
                                <h3> ENTRE EM CONTATO</h3>
                            </div>
                            <div class="col-lg-4 col-lg-offset-1  col-md-4 col-md-offset-1 col-sm-6 col-xs-12 ">
                                <ul>
                                    <li>
                                        <div class="input-append newsletter-box ">
                                              <form style="margin-left: 15px" class="form-horizontal" role="form" method="POST" action="{{ route('email.contato') }}">
                                                {{ csrf_field() }}
                                                      <div class="form-group">
                                                        {{-- <label class="control-label">Contato</label> --}}
                                                        <input required name="contato" type="text" class="full form-control " placeholder="Seu nome">
                                                      </div>
                                                      <div class="form-group">
                                                        {{-- <label class="control-label">Telefone ou Celular</label> --}}
                                                        <input required name="telefone" type="text" class="full form-control " placeholder="Telefone">
                                                      </div>
                                                      <div class="form-group">
                                                        {{-- <label class="control-label">E-mail</label> --}}
                                                        <input required name="email" type="text" class="full form-control " placeholder="E-mail">
                                                      </div>
                                                      <div class="form-group">
                                                        {{-- <label class="control-label">Cidade e Estado</label> --}}
                                                        <input required name="cidade" type="text" class="full form-control " placeholder="Cidade/Estado">
                                                      </div>
                                                      <div class="form-group">
                                                        {{-- <label class="control-label">Cidade que desejaria fazer um curso (separe-as por vírgula) </label> --}}
                                                        <input required name="cidade_curso" type="text" class="full form-control " placeholder="Cidade que desejaria fazer um curso">
                                                      </div>
                                                      <div class="form-group">
                                                        {{-- <label class="control-label">Como nos conhece</label> --}}
                                                        <input required name="ecole" type="text" class="full form-control " placeholder="Como conheceu a ecole">
                                                      </div>
                                                      <div class="form-group">
                                                        {{-- <label class="control-label">Contato</label> --}}
                                                        <textarea style="color:black"  name="mensagem" class="full form-control " rows="4" placeholder="Mensagem">
                                                        </textarea>
                                                      </div>
                                                      <button style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
                                                        <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/enviar.png') }}">
                                                      </button>
                                              </form>

                                        </div>
                                    </li>
                                </ul>
                            </div>



                            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-6">
                                <ul>
                                    <li class="title-footer">  ECOLE SUPÉRIEURE DE RELLOKING  </li>
                                    <li style="margin-top:10px" class="title-footer">  BRASIL  </li>
                                    <li class="body-footer-li">  contato@ecolebrasil.com  </li>
                                    <li class="body-footer-li">  Fones:  </li>
                                    <li class="body-footer-li">  +55 51 3237.2800  </li>
                                    <li class="body-footer-li">  +55 51 99749.0990 </li>

                                    <li style="margin-top:10px" class="title-footer">  FRANCE  </li>
                                    <li class="body-footer-li">  131 Boulevard  </li>
                                    <li class="body-footer-li">  Sébastopol 75002 Paris  </li>
                                    <li class="body-footer-li">  contact@esrelooking.com  </li>
                                    <li class="body-footer-li">  Tél: 01.47.90.60.01</li>
                                </ul>
                            </div>
                            <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                                <img src="{{asset('images/logo-ecole-paris.jpg')}}">
                            </div>
                        </div>
                        <!--/.row-->
                    </div>
                    @else
                    <div class="container">
                        <div class="row">


                            <div class="col-lg-offset-1 col-lg-11 col-md-4 col-md-offset-1 col-md-11">
                                <h3> ECOLE BRASIL</h3>
                            </div>


                            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-xs-6">
                                <ul>
                                    <li class="title-footer">  ECOLE SUPÉRIEURE DE RELLOKING  </li>
                                    <li style="margin-top:10px" class="title-footer">  BRASIL  </li>
                                    <li class="body-footer-li">  contato@ecolebrasil.com  </li>
                                    <li class="body-footer-li">  Fones:  </li>
                                    <li class="body-footer-li">  +55 51 3237.2800  </li>
                                    <li class="body-footer-li">  +55 51 99166.0914 </li>

                                    <li style="margin-top:10px" class="title-footer">  FRANCE  </li>
                                    <li class="body-footer-li">  131 Boulevard  </li>
                                    <li class="body-footer-li">  Sébastopol 75002 Paris  </li>
                                    <li class="body-footer-li">  contact@esrelooking.com  </li>
                                    <li class="body-footer-li">  Tél: 01.47.90.60.01</li>
                                </ul>
                            </div>
                            <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                                <img src="{{asset('images/logo-ecole-paris.jpg')}}">
                            </div>
                        </div>
                        <!--/.row-->
                    </div>
                    @endif
                <!--/.container-->
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    {{-- <p class="pull-left"> Copyright © Footer 2014. All right reserved. </p> --}}
                    <div class="pull-right">
                        <ul class="nav nav-pills payments">
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            {{-- <li><i class="fa fa-barcode"></i></li> --}}
                            {{-- <li><i class="fa fa-cc-paypal"></i></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.footer-bottom-->
        </footer>
        <script type="text/javascript">
          $(document).ready(function(){
              $('textarea').val('');
          });
          $(window).on('load', function(){
              $(".content-web-site").fadeIn(1000);
              $("#loading-background").hide();
          });
        </script>
    </body>
</html>
