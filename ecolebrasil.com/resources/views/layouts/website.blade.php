
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TQX54FN');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>Ecole Supérieure de Relooking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Facebook Pixel Code -->
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.lazy.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.lazy.plugins.min.js') }}"></script>
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

.header-page-content{
    background-image: url(' {{asset('images/ecole-header-page.png')}} ');
    background-repeat: no-repeat;
    background-position: center;
}

</style>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQX54FN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a style="margin-top: -20px; margin-left: 25px" class=" no-padding-margin navbar-brand hidden-xs hidden-sm" href="{{route('index')}}" >
          <img alt="Ecole Brasil" src="{{asset('images/logo_ecole_brasil.png')}}">
      </a>
      <a class="navbar-brand hidden-md hidden-lg" href="{{route('index')}}" >
          <img alt="Ecole Brasil" src="{{asset('images/ecole_menu_mobile.png')}}">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav raleway">
        <li class="dropdown raleway">
          <a href="#" class="item-menu-font dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ECOLE BRASIL <span class="caret"></span></a>
          <ul class="dropdown-menu raleway" style="padding-top:10px">
              <li><a class="gray-text-ecole" href="{{route('escola')}}">Ecole Supérieure de Relooking</a></li><br>
              <li><a class="gray-text-ecole" href="{{route('faq')}}">Dúvidas Frequentes</a></li><br>
              <li><a class="gray-text-ecole" href="{{route('equipe')}}">Nossa Equipe</a></li><br>
              <li><a class="gray-text-ecole" href="{{route('manifesto')}}">Manifesto</a></li><br>
              <li><a class="gray-text-ecole" href="{{route('certificacao')}}">Certificação Internacional</a></li><br>
              <li><a class="gray-text-ecole" href="https://ecolesuperieurerelooking.com/" target="_blank">Paris</a></li><br>
          </ul>
        </li>
        <li class="dropdown hidden-sm hidden-xs" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">CURSOS <span class="caret"></span></a>
          <ul class="dropdown-menu" style="max-width: 800px; padding-top:10px; margin-left: -160px;">
            <li class="menu-item dropdown dropdown-submenu ">
              <div class="container">
                <div class="row raleway">
                  @foreach($formacoes as $formacao)
                        <div class="col-md-2" style="min-height: 160px;">
                          <h6 class="gray-dark-color title-cursos bold">{{ $formacao->nome }}</h6>
                          <ul style=" padding: 0; margin-top: 10px">
                              @foreach($formacao->cursos as $curso)
                                <a class="gray-dark-color" href="{{ route('cursos', $curso->id) }}">{{$curso->nome}}</a><br>
                                <br>
                              @endforeach
                          </ul>
                        </div>
                  @endforeach
                        <div class="col-md-2" style="min-height: 160px;">
                          <h6 class="gray-dark-color title-cursos bold"></h6>
                          <ul style=" padding: 0; margin-top: 10px">
                                <a style="margin-bottom: 10px" href="{{route('ead.login')}}">Acesso EAD</a><br><br>
                                <a href="{{route('agenda')}}">Agenda</a>
                          </ul>
                        </div>
                </div>
              </div>
            </li>
          </ul>
        </li>
        <li><a href="{{route('certificacao')}}">CERTIFICAÇÃO INTERNACIONAL</a></li>
        <li class="dropdown hidden-md hidden-lg" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CURSOS <span class="caret"></span></a>
          <ul class="dropdown-menu" style="margin-top: 10px">
            @foreach($formacoes as $formacao)
                <div class="row" style="background: #dddcdc; padding: 20px; opacity: .8">
                  <h6 class="gray-dark-color title-cursos bold">{{ $formacao->nome }}</h6>
                  <ul style=" padding: 0; margin-top: 10px">
                      @foreach($formacao->cursos as $curso)
                        <a class="gray-dark-color" href="{{ route('cursos', $curso->id) }}">{{$curso->nome}}</a><br>
                        <br>
                      @endforeach
                  </ul>
                </div>
              @endforeach
          </ul>
        </li>
        <li><a href="{{route('blog')}}">BLOG</a></li>
        <li><a href="{{route('depoimentos')}}">DEPOIMENTOS</a></li>
        <li><a href="{{route('consultoras')}}">CONSULTORAS</a></li>
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
  <div class="footer" id="footer" style="padding-top: 40px;">
        <div class="container" style="width: 100%">
            <div class="row">
                <div class="col-lg-2 col-md-offset-1 col-md-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <ul>
                        <li class="title-footer" style="font-size: 14pt">  ESR NO MUNDO  </li>
                        <li style="margin-top:10px" class="title-footer">  <a target="_blank" href="https://ecolesuperieurerelooking.com/">ESR França</a></li>
                        <li style="margin-top:10px" class="title-footer">  <a target="_blank" href="https://www.esritalia.com/">ESR Itália</a></li>
                        <li style="margin-top:10px" class="title-footer">  <a target="_blank" href="http://www.esrcanada.com/">ESR Canadá</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <ul>
                        <li class="title-footer">  ECOLE SUPÉRIEURE DE RELLOKING  </li>
                        <li style="margin-top:10px" class="title-footer">  BRASIL  </li>
                        <li class="body-footer-li">  Rua Xavier Ferreira, 131  </li>
                        <li class="body-footer-li">  CEP: 90540-160</li>
                        <li class="body-footer-li">  Porto Alegre/RS  </li>
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
                <div class="col-lg-2 col-md-offset-0 col-md-2 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1" style="margin-top: 15px;">
                    <div class="row">
                      <img style="width:60%; display: block; margin: 0 auto; margin-bottom: 10px" src="{{asset('images/logo-ecole-paris.jpg')}}">
                    </div>
                    <div class="row" style="text-align:center">
                      <h5 style="color:white">Fique por dentro de tudo</h5>
                      <a target="_blank" href="https://www.facebook.com/ecolebrasil/"><i style="font-size: 21pt" class="fab fa-facebook"></i></a>
                      <a target="_blank" href="https://www.instagram.com/ecolebrasil/"><i style="font-size: 21pt; margin-left: 15px" class="fab fa-instagram"></i></a>
                    </div>
                </div>
                @if ( !(\Route::current()->getName() == 'contato') )
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                      <h3 class="hidden-xs hidden-sm" style="margin:0"> Receba nossa agenda e novidades dos cursos</h3>
                      <h3 class="hidden-md hidden-lg" style="margin:0; margin-top: 20px"> Receba nossa agenda e novidades dos cursos</h3>
                      <ul>
                          <li>
                              <div class="input-append newsletter-box ">
                                    <form style="margin-left: 15px" class="form-horizontal" role="form" method="POST" action="{{ route('email.newsletter') }}">
                                      {{ csrf_field() }}
                                          <div class="form-group">
                                            <input required name="contato" type="text" class="full form-control " placeholder="Seu nome">
                                          </div>
                                          <div class="form-group">
                                            <input required name="email" type="email" class="full form-control " placeholder="E-mail">
                                          </div>
                                          <button style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
                                            <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/enviar.png') }}">
                                          </button>
                                    </form>

                              </div>
                          </li>
                      </ul>
                  </div>
                @endif
            </div>
        </div>
  </div>
</footer>
<script type="text/javascript">
  $(document).ready(function(){
      $('textarea').val('');
  });
  $(window).on('load', function(){
      $(".content-web-site").fadeIn(1000);
      $("#loading-background").hide();
  });
  $(function() {
      $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
      }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
      });
  });
</script>
</body>
</html>
