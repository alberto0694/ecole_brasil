
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecole Brasil</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>                
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>      
    </head>
    <style type="text/css">
      
      .navbar .navbar-nav {
          display: inline-block;
          float: none;
          vertical-align: top;
      }

      .navbar .navbar-collapse {
          text-align: center;
      }

      .navbar-default {
          background-color: #ef4060;
          border-color: #ef4060;
          color: white;
          padding-top: 40px;
          margin-bottom: 0px; 
      }

      ul {
        list-style-type: none;
      }

      .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
          color: #fff;
          background-color: #e7e7e7;
      }      

      .navbar-default .navbar-nav>li>a {
          color: #fff;
      }

      .navbar-nav>li {
          min-height: 65px;
          vertical-align: middle;
          display: table;
      }

      .navbar-default .navbar-nav>li>a {
          min-height: 65px;
          vertical-align: middle;
          display: table-cell;
          font-size:7pt; 
      }  

      .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
          color: white;
          font-weight: bold;
          background-color: transparent;
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
          background: #ef4060;
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
          background: #ef4060;
        }

        .newsletter-box {
          overflow: hidden;
        }
        
        .newsletter-box input{
          padding: 5px;
          margin-bottom: 5px; 
          color: black;
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
          font-size: 1.5em; 
        }        

      @media screen and (max-width: 768px) {      
        .navbar-brand{
          margin-bottom: 15px;
        }
      }
    </style>

    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden-md hidden-lg" href="{{route('index')}}" >
                  <img alt="Ecole Brasil" src="{{asset('images/ecole_menu.png')}}">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                {{-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> --}}
                <li class="hidden-xs hidden-sm"><a href="{{route('index')}}"><img src="{{asset('images/ecole_menu.png')}}"></a></li>
                <li><a href="{{route('escola')}}">ESCOLA</a></li>
                <li><a href="{{route('index')}}">CURSOS</a></li>
                <li><a href="{{route('index')}}">CERTIFICAÇÃO INTERNACIONAL</a></li>
                <li><a href="{{route('index')}}">DEPOIMENTOS</a></li>
                <li><a href="{{route('index')}}">BLOG</a></li>
                <li><a href="{{route('index')}}">EU SOU ECOLE</a></li>
                <li><a href="{{route('index')}}">EAD</a></li>
                <li><a href="{{route('index')}}">ACESSO RESTRITO</a></li>
                <li><a href="{{route('index')}}">CONTATO</a></li>
                <li><a href="{{route('index')}}">PARIS</a></li>
               {{--  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> --}}
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>     

        @yield('content')


        <footer>
            <div class="footer" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-11 col-md-4 col-md-offset-1 col-md-11">
                            <h3> ENTRE EM CONTATO</h3>
                        </div>                      
                        <div class="col-lg-4 col-lg-offset-1  col-md-4 col-md-offset-1 col-sm-6 col-xs-12 ">
                            <ul>
                                <li>
                                    <div class="input-append newsletter-box ">
                                        <input type="text" class="full " placeholder="Seu nome">
                                        <input type="text" class="full " placeholder="Telefone">
                                        <input type="text" class="full " placeholder="E-mail">
                                        <input type="text" class="full " placeholder="Cidade/Estado">
                                        <button class="btn  bg-gray" type="button"> Enviar </button>
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
                                <li class="body-footer-li">  +55 51 99949.2609 </li>

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
                            <li><i class="fa fa-barcode"></i></li>
                            {{-- <li><i class="fa fa-cc-paypal"></i></li> --}}
                        </ul> 
                    </div>
                </div>
            </div>
            <!--/.footer-bottom--> 
        </footer>
    </body>
</html>
