<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N6MZRCZ');</script>
<!-- End Google Tag Manager -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Ecole EAD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="theme-color" content="#ef4060" />
    <link rel="shortcut icon" href="{{ asset('images/ecole-logo-depoimento.png') }}" type="image/x-icon">
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-duallistbox.min.css') }}" />
</head>
<style type="text/css">
    .box-comment{
        max-height: 400px;
        overflow-x: hidden;
        border: 1px solid;
        border-radius: 3px;
        color:rgb(193, 193, 193);
        padding: 3px;
        width: 100%;
        height: auto;
    }

    iframe{
      border: none;
    }

    .navbar {
        background: rgba(239, 64, 96, 1);
    }

    .table-header {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
        font-size: 14px;
        line-height: 38px;
        padding-left: 12px;
        margin-bottom: 1px;
    }

    .ace-nav>li.light-blue>a:focus, .ace-nav>li.light-blue>a:hover, .ace-nav>li.open.light-blue>a {
        background-color: rgba(239, 64, 96, 1);
    }

    .no-skin .navbar .navbar-toggle {
        background-color: #cb3652;
    }

    .ace-nav>li.light-blue>a {
        background-color: rgba(239, 64, 96, 1);
    }

      .nav-tabs.background-blue {
          padding-top: 6px;
          background-color: #f3869a;
          border: 1px solid #cb3652;
      }

    .nav-tabs.tab-color-blue>li>a, .nav-tabs.tab-color-blue>li>a:focus {
        background-color: #cb3652;
    }
    .badge-info, .badge.badge-info, .label-info, .label.label-info {
        background-color: rgba(239, 64, 96, 1);
    }

    .badge-info, .badge.badge-info, .label-info, .label.label-info {
        background-color: rgba(239, 64, 96, 1);
    }

    .label-info.arrowed-in:before {
        border-color: rgba(239, 64, 96, 1) rgba(239, 64, 96, 1) rgba(239, 64, 96, 1) transparent;
    }

    .label-info.arrowed-in-right:after {
        border-color: rgba(239, 64, 96, 1) transparent rgba(239, 64, 96, 1) rgba(239, 64, 96, 1);
    }

    .has-errors input, .has-errors textarea{
        border: 2px solid;
        color: #a94442;
    }

    .has-errors-textarea{
        border: 2px solid;
        color: #a94442;
    }

    .has-errors select{
        border: 2px solid;
        color: #a94442;
    }


    .has-errors label{
        /*border: 2px solid;*/
        color: #a94442;
    }

    .badge-info, .badge.badge-info, .label-info, .label.label-info {
        background-color: rgba(239, 64, 96, 1);
    }

    .ace-nav>li.open>a, .ace-nav>li>a:focus, .ace-nav>li>a:hover {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
    }

    .no-skin .nav-list>li:hover>a {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
    }

    .nav>li>a:focus, .nav>li>a:hover {
        text-decoration: none;
        background-color: rgba(239, 64, 96, 1);
    }

    .no-skin .nav-list>li.open>a {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
    }

    .sidebar+.main-content {
        margin-left: 300px;
    }

    .no-skin .nav-list>li:hover>a {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
    }

    .no-skin .nav-list .open>a, .no-skin .nav-list .open>a:focus, .no-skin .nav-list .open>a:hover {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
    }

    .no-skin .nav-list>li>a {
        background-color: #F8F8F8;
        color: #585858;
    }

    .no-skin .nav-list>li>.submenu li>.submenu>li a:hover {
        color: rgba(239, 64, 96, 1);
        background-color: #F1F5F9;
    }

    .no-skin .nav-list>li .submenu>li>a:hover {
        color: rgba(239, 64, 96, 1);
        background-color: #F1F5F9;
    }

    .no-skin .nav-list>li>.submenu li.open>a, .no-skin .nav-list>li>.submenu li>.submenu li.active>a, .no-skin .nav-list>li>.submenu li>.submenu li.open>a {
        color: rgba(239, 64, 96, 1);
        background: #fff;
    }

    .no-skin .nav-list>li .submenu>li>a:hover {
        color: rgba(239, 64, 96, 1);
        background-color: #F1F5F9;
    }

    .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
    }

    .no-skin .nav-list>li .submenu>li>a:hover {
        color: rgba(239, 64, 96, 1);
        background-color: #F1F5F9;
    }

    .ace-nav>li>a {
        background-color: rgba(239, 64, 96, 1);
        color: #FFF;
        display: block;
        line-height: inherit;
        text-align: center;
        height: 100%;
        width: auto;
        min-width: 50px;
        padding: 0 8px;
        position: relative;
    }
    #loading-admin-application-only {
        border: 16px solid #f3f3f3; /* Light grey */
        border-top: 16px solid rgba(239, 64, 96, 1);; /* Blue */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        margin-left: 45%;
        margin-top: 50px;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

</style>
<body class="no-skin">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6MZRCZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="{{ route('aluno.dashboard') }}" class="navbar-brand">
                @if($aluno)
                    <small> Ecole Brasil, <small style="font-size:11pt">Bem vindo(a) {{ $aluno->nome }}</small> </small>
                @endif
            </a>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                 <li class="light-blue dropdown-modal">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sair
                    </a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Perfil
                            </a>
                        </li>
                        <li class="divider"></li>
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
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
@if((Auth::user()->permission == 'AL') || (Auth::user()->permission == 'AR'))
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try{ace.settings.loadState('main-container')}catch(e){}
        </script>

        <div id="sidebar" style="width: 300px" class="sidebar responsive ace-save-state">
            <script type="text/javascript">
                try{ace.settings.loadState('sidebar')}catch(e){}
            </script>
            <ul class="nav nav-list">
                <li class="">
                    <a href="{{ route('aluno.profile', $aluno->id) }}">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Meu Perfil </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                @foreach($aluno->agendas as $agenda)
                    @if($agenda->modelo == 'D')
                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-book"></i>
                                <span class="menu-text">
                                    {{ $agenda->curso->nome }}
                                </span>
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                @foreach($agenda->modulos as $modulo)
                                    <li class="">
                                        <a href="{{route('aluno.modulo', $modulo->id)}}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            {{ $modulo->titulo }}
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach

                @if($aluno->hasRestrito)
                    <li class="">
                        <a href="{{ route('aluno.acesso_restrito') }}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text">Material Restrito</span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                @endif
            </ul><!-- /.nav-list -->

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    <div id="loading-admin-application-only"></div>
                    <div id="admin-application-only" class="row" style="display: none">
                        <div class="col-xs-12">
                            <div class="row">
                                    @if(Session::has('message'))
                                        <div class="alert {{Session::get('alert-class')}}">
                                        <strong>Aviso!</strong>
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif
                            </div>
                            @yield('content')
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120">
                        Ecole Brasil
                    </span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->
@else
    <div class="row">
        <h2 align="center">Você está logado com outro usuário, por favor clique em sair e tente novamente.</h2>
    </div>
    <div class="row">
        <h3 align="center"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Sair
        </a></h3>
    </div>
@endif
<script src="{{asset('assets/js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-price-format/jquery.priceformat.min.js') }}" ></script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
</script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
<script src="{{ asset('assets/js/ace.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ asset('assets/js/bootbox.js')}}"></script>
<script src="{{ asset('assets/js/jquery.hotkeys.index.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/jquery-validator/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery-validator/additional-methods.min.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
@yield('last-body')
</body>
<script type="text/javascript">
$(window).load(function(){
    showContent();
});
</script>
</html>

