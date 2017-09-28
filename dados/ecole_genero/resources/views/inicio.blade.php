<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecole Brasil</title>

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
                            {{--  <li><a href="{{ route('login') }}">Entrar</a></li>
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

<style>
.panel {

}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
		        <div class="row" style="margin-bottom:10px">
		            <a href="{{ route('home') }}">
		            	<img src="{{ asset('images/logo-ead.png') }}" style="width:30%; margin-left:35%"/>
		            </a>
		        </div>

        </div>
        <div class="col-md-12">
                <div class="row" style="margin-bottom:10px">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-ead.png') }}" style="width:30%; margin-left:35%"/>
                    </a>
                </div>

        </div>
        <div class="col-md-12">
                <div class="row" style="margin-bottom:10px">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-ead.png') }}" style="width:30%; margin-left:35%"/>
                    </a>
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

