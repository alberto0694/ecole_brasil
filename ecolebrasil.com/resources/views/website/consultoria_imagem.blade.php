@extends('layouts.website')
@section('content')
<style type="text/css">

	.header-page-content{
		background-image: url( {{ asset('images/wave-consultoria-imagem.png') }});
		background-color: #eeeeee;
	}

	.gray-background{
		background-color: #eeeeee;
	}

	.header-page{
		background: rgba(14, 14, 14, 0);
	}

	.header-page p {
	    vertical-align: unset;
	}

	div.header-page{
		padding-top: 40px;
	}

	.row-video-box-curso div{
		color: white;
	}

	.margin-box-curso{
		margin-top: -220px;
	}

	.box-curso{
		border-radius: 25px;
		padding: 20px;
		background-color: #666666;
		-webkit-box-shadow: 0px 12px 25px 0px rgba(150,150,150,1);
		-moz-box-shadow: 0px 12px 25px 0px rgba(150,150,150,1);
		box-shadow: 0px 12px 10px 0px rgba(150,150,150,1);
	}

	.button-ecole, .button-ecole-red, .button-ecole-ebook, .button-ecole-box-insicricao{
	    display: block;
	    margin: 0 auto;
	    margin-top: 6px;
	    margin-top: 10px;
	    max-width: 200px;
	    text-align: center;
	    border-radius: 6px;
	    border: none;
	    padding: 10px;
		-webkit-box-shadow: 0px 7px 5px 0px rgba(199,205,205,1);
		-moz-box-shadow: 0px 7px 5px 0px rgba(199,205,205,1);
		box-shadow: 0px 7px 5px 0px rgba(199,205,205,1);
		font-weight: 700;
		background-color: #5c5c5c;
		color: white;
		outline-color:#5c5c5c;
	}

	.button-ecole-box-insicricao{
		margin-top: -20px;
	}

	.button-ecole-red{
		background-color: #666666;
		color:white;
	}

	.duvidas-whats{
		text-align: center;
		font-weight: 700;
		color: #5a5a5a;
	}

	.nao-achou-cidade{
		text-align: center;
		font-weight: 700;
		font-size: 12pt;
		color: #666666;
	}

	.carousel-inner {
	    padding-left: 100px;
	    padding-right: 100px;
	}

	.box-agenda{
		min-height: 100px;
		min-width: 50px;
		border-radius: 15px;
	}

	.quad-agenda{
		height: 150px;
		margin: 0 auto;
	}

	.description-agenda,
	.description-agenda-first{
		max-width: 90%;
		min-height: 90%;
		margin: 0 auto;
		margin-left: 40px;
		border-radius: 18px;
		margin-right: 40px;
		padding: 15px;
		text-align: center;
		background-color: #f3f3f3;
		color: #666666;
		-webkit-box-shadow: 0px 4px 20px 7px rgba(203,203,203,1);
		-moz-box-shadow: 0px 4px 20px 7px rgba(203,203,203,1);
		box-shadow: 0px 4px 20px 7px rgba(203,203,203,1);
	}

	.carousel-inner .item{
		margin-top: 30px;
	}

	.apresentacao-curso{
		margin-top: 5px;
		margin-bottom: 5px;
		word-wrap: break-word;
		width: 100%;
	}

	.apresentacao-curso img{
		display: block;
		float: left;
		margin: 8px;
	}

	.aprensentacao-curso h4{
		float: left;
		font-weight: 700;
	}

	.aprensentacao-curso .content-info{
		display: block;
		margin-left: 70px;
	}

	h4{
		font-weight: 700;
	}

	h3{
	    text-align: center;
	    font-weight: 1000;
	    color: #ef4060;
	    margin-top: 10px;
	    margin-bottom: 10px;
	}

	.carousel-control {
	    color: #666666;
	    opacity: 1;
	}

	.info-row-formacao{
		margin-top: 50px;
		margin-bottom: 50px;
	}

	.title-formacao, .title-formacao-h2{
		color: rgba(239, 64, 96, 1);
		font-weight: 1000;
	}

	.title-formacao-h2{
		font-size: 18pt;
	}

	.title-material{
		font-size: 19pt;
		color: rgba(239, 64, 96, 1);
		margin-top: 35px;
	}

	.right-formacao{
		border-left: 3px solid #b2b2b2;
	}

	.row-material-didatico img{
		display: block;
		width: 100%;
	}

	.row-material-didatico .title-formacao{
		margin-top: 20px;
	}

	.row-material-didatico{
		background-color: #ececec;
	}

	.row-ebook{
		background-image: url( {{ asset('images/background-ebook.png') }});
		min-height: 500px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}

	.ebook-livro{
		display: block;
		margin: 0 auto;
		width: 350px;
	}

	.button-ecole-ebook{
		background-color: white;
		color: rgba(239, 64, 96, 1);
		cursor: pointer;
	}

	.col-ebook-coaching{
		color: white;
	}

	.porque-ecole{
		padding-top: 50px;
		padding-bottom: 50px;
	}

	.porque-ecole img{
		display: block;
		margin: 0 auto;
	}

	.porque-ecole h5{
		text-align: center;
		font-weight: bold;
		font-style: italic;
	}

	.porque-ecole span{
		text-align: center;
		display: block;
	}

	.inscricao-top{
		padding: 70px;
	}

	.box-inscricao{
		width: 60%;
		padding: 15px;
		min-height: 250px;
		margin: 0 auto;
		border-radius: 15px;
		background: #666666;
		text-align: center;
		color: white;
	}

	.box-inscricao h2{
		font-weight: 800;
	}

	.box-inscricao p{
		display: block;
		font-style: italic;
	}

	.inscricao-destaque{
		font-weight: 800;
		font-size: 17pt;
	}

	.media-left img{
		width: 250px;
	}

	.icones-pagamento{
		font-size: 100pt;
		display: block;
		margin: 0 auto;
		max-width: 150px;
		cursor: pointer;
	}

	.container-modal{
		width: 100%;
	}

	.container-modal h4{
		text-align: center;
	}

	.container-modal input,
	.container-modal textarea,
	.container-modal form,
	#form-contato{
		display: block;
		width: 100%;
	}

	#form-contato{
		width: 90%;
		margin: 0 auto;
	}

	#carousel-depoimentos .carousel-inner{
    	min-height: 600px;
	}

	.container-modal .form-horizontal,
	.container-modal .form-group {
	    margin-right: 0px;
	    margin-left: 0px;
	}


@media screen and (max-width: 800px) {
	.right-formacao{
		border-left: none;
	}

	.box-inscricao h2{
		font-size: 17pt;
	}
}

@media screen and (max-width: 900px) {
	.box-curso{
		width: 90%;
		margin: 0 auto;
		margin-top: 50px;
	}

	.carousel-inner {
	    padding-left: 30px;
	    padding-right: 30px;
	}

	iframe{
		margin-top: 50px;
	}

	.info-row-formacao, .col-material{
		padding: 30px;
	}

	.main-title-formacao{
		margin-bottom: 20px;
	}

	.ebook-mobile{
		text-align: center;
		color: white;
	}

	.col-porque-ecole{
		margin-top: 20px;
	}

	.media-left{
		width: 100%;
	}

	.media-left img{
		width: 100%;
	}

	.margin-modal{
		margin-right: 15px;
	}

}

@media screen and (max-width: 380px) {
	.box-curso{
		width: 90%;
		margin: 0 auto;
		margin-top: 50px;
	}

	iframe{
		margin-top: 50px;
	}

	.description-agenda{
		width: 100%;
		margin: 0 auto;
	}

	.info-row-formacao{
		margin-top: 0;
	}

	.info-row-formacao, .col-material{
		padding: 30px;
	}

	.inscricao-top{
		margin-top: 30px;
		margin-bottom: 20px;
		padding: 0;
	}

	.col-porque-ecole{
		margin-top: 20px;
	}

	.main-title-formacao{
		margin-bottom: 20px;
	}

	.ebook-mobile{
		text-align: center;
		color: white;
	}

	.media-left{
		width: 100%;
	}

	.media-left img{
		width: 100%;
	}
}



</style>
<div class="row">
	<div class="col-md-12 header-page-content"></div>
	<div class="col-md-12 header-page upper-case"><p style="vertical-align: unset;">{{ $curso->nome }}</p></div>
</div>
<div class="row row-video-box-curso gray-background">
	<div class="col-md-12 margin-box-curso">
		<div class="col-md-3 col-md-offset-2 box-curso">
			<div class="row">
				<div class="container apresentacao-curso">
					<img src="{{ asset('images/modelo-formacao.png') }}">
					<h4 class="title-info">Modelo da Formação</h4>
					<span>{{$curso->modelo}}</span>
				</div>
			</div>

			<div class="row">
				<div class="container apresentacao-curso">
					<img src="{{ asset('images/carga-horaria.png') }}">
					<h4 class="title-info">Carga Horária</h4>
					<span>{{$curso->carga_horaria }}</span>
				</div>
			</div>

			<div class="row">
				<div class="container apresentacao-curso">
					<img src="{{ asset('images/horario.png') }}">
					<h4 class="title-info">Horário</h4>
					<span>Segunda à sábado, das 9h às 18h</span>
				</div>
			</div>

			<div class="row">
				<div class="container apresentacao-curso">
					<img src="{{ asset('images/diferenciais.png') }}">
					<h4 class="title-info">Diferenciais</h4>
					<div style="margin-left: 70px">{!! $curso->informacoes !!}</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-1">
			@if($curso->link_video != '0')
				<iframe style="width: 100%; min-height: 350px" src="{{$curso->link_video }}"></iframe>
			@else
				<img src="{{ asset($curso->card) }}" style="width: 50%; display: block; margin: 0 auto">
			@endif

			<a style="color: white"  data-toggle="modal" data-target="#modal-pagamento" ><button class="button-ecole" style="background: #1bd641">QUERO ME INSCREVER</button><a>
			<h5 class="duvidas-whats">Ou tirar dúvidas pelo</h5>
			<button class="button-ecole"><a style="color: white; text-decoration: none;" href="https://wa.me/5551989535234">WHATSAPP (51) 989535234</a></button>
		</div>
	</div>
</div>
<div class="row gray-background" style="padding-bottom: 50px">
	<div class="row" style="margin-top: 40px;">
		<h3>PRÓXIMAS TURMAS</h3>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <?php $first = 0; ?>
		  <div class="carousel-inner">
		  	@foreach($agendas_view as $layer)
			    <div class="item <?php if($first == 0){ echo 'active'; } $first++;?>">
			    @foreach($layer as $item)
						<div class=" col-md-4 quad-agenda">
							<div class="description-agenda description-agenda-first">
								<h2>{{$item->dayMonth}}</h2>
								<span>{{$item->cidade}}</span>
							</div>
						</div>
				 @endforeach
			    </div>
			@endforeach
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="row">
			<h5 class="nao-achou-cidade">Não achou na sua cidade?</h5>
			{{-- <a style="color: white" href="{{ route('contato', ['curso_id' => $curso->id]) }}"> --}}
				<button class="button-ecole-red"><a style="color: white" href="{{ route('contato', ['curso_id' => $curso->id]) }}">QUERO ESSE CURSO NA MINHA CIDADE</a></button>
			{{-- </a> --}}
		</div>

	</div>
</div>
<div class="row info-row-formacao">
	<div class="col-md-4 col-md-offset-2 main-title-formacao">
		<h2 class="title-formacao-h2">FORMAÇÃO DE <br>CONSULTORIA E <br>COACHING DE IMAGEM</h2>
		O consultor de imagem possui as ferramentas certas para traduzir a imagem que melhor representa a essência e personalidade de seus clientes. Leva em conta os objetivos, a rotina diária, o estilo, tipo de corpo, gostos e cores que mais favorecem. <br><br>
		Diferente do Personal Stylist que atua em situações específicas e pontuais, a Consultoria de Imagem é um processo mais abrangente que se utiliza de técnicas mais aprofundadas, impactando na imagem pessoal dos clientes de uma forma mais duradoura. <br><br>
		Considerando que a imagem tem um grande impacto nos nossos resultados diários e na nossa autoestima, o Consultor de Imagem é um profissional capaz de promover mudanças expressivas que refletem  me vários segmentos da vida de seu cliente.
	</div>
	<div class="col-md-4 right-formacao">
		<h4 class="title-formacao">OBJETIVOS DA FORMAÇÃO</h4>
		{!! $curso->objetivos !!}
		<br>
		<h4 class="title-formacao">BASE DOS CONTEÚDOS ABORDADOS</h4>
		{!! $curso->conteudo !!}
	</div>
</div>
<div class="row row-material-didatico">
	<div class="col-md-6">
		<img src="{{ asset('images/imagem-material-didatico.jpg') }}">
	</div>
	<div class="col-md-6 col-material">
		<h4 class="title-material">MATERIAL DIDÁTICO</h4>
		{!! $curso->material !!}
	</div>
</div>
<div class="row inscricao-top">
	<div class="box-inscricao">
		<h2>INSCREVA-SE AGORA NA FORMAÇÃO DE CONSULTORIA E COACHING DE IMAGEM</h2>
		<p>por apenas <label class="inscricao-destaque">12x de 517,50  no cartão de credito </label> ou <label class="inscricao-destaque">à vista com 10% de desconto </label> ou <label class="inscricao-destaque">entrada de R$ 900 + 11 parcelas no boleto</label></p>
		<h6>* Não tem pré-requisitos</h6>
		<h6></h6>
	</div>
	<a style="color: white"  data-toggle="modal" data-target="#modal-pagamento" ><button class="button-ecole-box-insicricao" style="background: #1bd641">QUERO ME INSCREVER</button></a>
</div>
<div class="row row-ebook">
	<div class="col-md-6 col-ebook-coaching">
		<div class="col-md-7 col-md-offset-4 hidden-xs hidden-sm" style="margin-top: 100px; ">
			<h2>QUER SER UMA CONSULTORA DE IMAGEM DE SUCESSO?</h2>
			<p>Preparamos um ebook gratuito que abordará os principais temas sobre o mercado de consultoria e coaching de imagem.</p>
			<buton data-toggle="modal" data-target="#modal-ebook"  class="button-ecole-ebook">BAIXE O EBOOK GRÁTIS</button>
		</div>
	</div>
	<div class="col-md-6">
		<img class="ebook-livro" src="{{ asset('images/ebook-livro.png') }}">
		<div class="col-md-7 col-md-offset-4 hidden-md hidden-lg ebook-mobile">
			<h2>QUER SER UMA CONSULTORA DE IMAGEM DE SUCESSO?</h2>
			<p>Preparamos um ebook gratuito que abordará os principais temas sobre o mercado de consultoria e coaching de imagem.</p>
			<buton data-toggle="modal" data-target="#modal-ebook" class="button-ecole-ebook">BAIXE O EBOOK GRÁTIS</button>
		</div>
	</div>
</div>
<div class="row porque-ecole">
	<h3>POR QUE ECOLE?</h3>
	<div class="col-md-8 col-md-offset-2">
		<div class="col-md-4 col-porque-ecole">
			<img class="image-porque-ecole" src="{{asset('images/metodologia.png')}}">
			<h5>METODOLOGIA <br>DIFERENCIADA</h5>
			<span>Proporcionar uma reflexão entre o SER e o VESTIR das pessoas, trabalhando a imagem pessoal de acordo com a essência de cada indivíduo.</span>
		</div>

		<div class="col-md-4 col-porque-ecole">
			<img class="image-porque-ecole" src="{{asset('images/certificacao.png')}}">
			<h5>CERTIFICAÇÃO <br>INTERNACIONAL</h5>
			<span>Primeira e única escola francesa de consultoria de imagem no Brasil e que oferece certificação internacional.</span>
		</div>

		<div class="col-md-4 col-porque-ecole">
			<img class="image-porque-ecole" src="{{asset('images/excelencia.png')}}">
			<h5>EXCELÊNCIA NO <br>ENSINO</h5>
			<span>A Ecole Supérieure de Relooking obteve a maior avaliação da Comissão Nacional de Certificação Profissional em Paris, a CNCP, de todas as escolas do mesmo segmento. Isso significa que qualificamos os nossos alunos no mais alto nível profissional.</span>
		</div>
	</div>
</div>
<div class="row gray-background" style="padding-bottom: 50px">
	<div class="row" style="margin-top: 40px;">
		<h3>MAIS DE 10 MIL ALUNOS FORMADOS</h3>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<div id="carousel-depoimentos" class="carousel slide" data-ride="carousel" >

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		  	<?php $i = 0;?>
 			@foreach($depoimentos as $depoimento)
 					@if($depoimento->apenas_video != 'on')
					    <div class="item <?php if($i == 0) echo 'active'; $i++; ?>">
							<div class="col-md-12" style="margin-top: 15px">
									<div class="media-left">
										  <div class="media-left">
											      <img class="media-object" src="{{asset($depoimento->avatar)}}" alt="Cris Dimas">
										  </div>
										  <div class="media-body">
											    <h5 class="paragrafo-padrao media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify; margin-left: 25px">{{ $depoimento->descricao_html }}</h5>
											    <i class="hidden-xs hidden-sm bold" style="margin-left: 25px; font-weight: bold">{{$depoimento->autor}}</i>
											    <hr style=" border: .1pt solid; ">
										  </div>
										  <h5 class="paragrafo-padrao media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">{{$depoimento->autor}}</h5>
										  <i class="hidden-md hidden-lg" style="margin-right: 60px">{{ $depoimento->descricao_html }}</i>
									</div>
									<hr style="border-top: 1px solid #c7c7c7">
							</div>
					    </div>
					@endif
			@endforeach
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#carousel-depoimentos" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-depoimentos" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	</div>
</div>
<div class="row inscricao-top">
	<div class="box-inscricao">
		<h2>FORMAÇÃO DE CONSULTORIA E COACHING DE IMAGEM DA ECOLE, INSCREVA-SE AGORA</h2>
		<p>por apenas <label class="inscricao-destaque">12x de 517,50  no cartão de credito </label> ou <label class="inscricao-destaque">à vista com 10% de desconto </label> ou <label class="inscricao-destaque">entrada de R$ 900 + 11 parcelas no boleto</label></p>
		<h6>* Não tem pré-requisitos</h6>
	</div>
	{{-- <a style="color: white" href="{{ route('compra.agenda', ['curso_id' => $curso->id]) }}"> --}}
		<button  data-toggle="modal" data-target="#modal-pagamento" class="button-ecole-box-insicricao" style="background: #1bd641">QUERO ME INSCREVER</button>
	{{-- </a> --}}
</div>
@endsection
<div id="modal-ebook" class="modal fade" role="dialog" style="margin-right: -16px">
  <div class="modal-dialog">
  	<style type="text/css">
  		.container-ebook input{
  			max-width: 90%;
  			display: block;
  			margin: 0 auto;
		    margin-top: 15px;
		    display: block;
		    min-height: 50px;
		    padding: 10px;
		    color: black;
  		}

  		.button-close-ebook{
			background: none;
			border: none;
			position: absolute;
			float: right;
			right: 10px;
			font-size: 15pt;
			font-weight: 700;
  		}

  		.img-ebook{
  			display: block;
  			margin: 0 auto;
  			max-width: 100%;
  		}

  		.container-ebook, .modal-ebbok, .modal-content-ebook{
  			background: #666666;
  			color: white;
  		}

  		.modal-content.modal-content-ebook{
  			box-shadow: 0 5px 15px rgba(0, 0, 0, 0);
  			background-color: #fff0;
  		}

  		.descricao-ebook{
		    max-width: 350px;
		    margin: 0 auto;
		    text-align: center;
  		}
  	</style>
  	{{-- 		$("#modal-ebook .modal-content form").append('<div class="modal-body modal-ebbok">' +
        '<div class="row">' +
        	'<div class="container-modal container-ebook">' +
				'<button type="button" class="button-close-ebook" data-dismiss="modal">X</button>' +
				'<img class="img-ebook" src="{{asset('images/pop-up-captura-ecole.jpg')}}">' +
				'<p class="descricao-ebook">Cadastre-se abaixo e receba direto no seu e-mail o link do ebook grátis.</p>' +
			    '<link rel=stylesheet" href="https://blob.llimages.com/machine-files/all-css/form-ll.css>' +
				'<form action="https://leadlovers.com/Pages/Index/205214" method="post" >' +
				    '<input id="id" name="id" type="hidden" value="205214" />' +
				    '<input id="pid" name="pid" type="hidden" value="7559514" />' +
				    '<input id="list_id" name="list_id" type="hidden" value="205214" />' +
				    '<input id="provider" name="provider" type="hidden" value="leadlovers" />' +
				    '<input id="name" name="name" placeholder="Nome" type="text"  />' +
				    '<input id="email" name="email" placeholder="E-mail" type="text" />' +
				    '<button class="button-ecole" style="background: #1bd641; box-shadow: 0px 7px 5px 0px #545454;" type="submit">Receber o ebook</button>' +
				    '<input type="hidden" id="source" name="source" value="" />' +
				    '<img src="https://llimages.com/redirect/redirect.aspx?A=V&p=7559514&m=205214" style="display: none;" />' +
				'</form>' +
        	'</div>' +
        '</div>' +
      '</div>'); --}}
    <!-- Modal content-->
    <div class="modal-content modal-content-ebook margin-modal">


      <div class="modal-body modal-ebbok">
        <div class="row">
        	<div class="container-modal container-ebook" style="display: none">
{{-- <!-- Formulário -->
<style>body {background-color: transparent !important; } </style>
   <link rel='stylesheet' href='https://blob.llimages.com/machine-files/all-css/form-ll.css'>
   <form action="https://leadlovers.com/Pages/Index/205214" method="post" >
   <input id="id" name="id" type="hidden" value="205214" />
   <input id="pid" name="pid" type="hidden" value="7559514" />
   <input id="list_id" name="list_id" type="hidden" value="205214" />
   <input id="provider" name="provider" type="hidden" value="leadlovers" />
   <label for="name">Nome:</label>
   <input class="form-control form-ll" id="name" name="name" placeholder="Informe o seu nome" type="text"  />
   <label for="email">E-mail:</label>
   <input class="form-control form-ll" id="email" name="email" placeholder="E-mail" type="text" />
   <button class="btn btn-danger" style="padding: 10px 40px; margin:15px 0 5px;  " type="submit">Receber o ebook</button>
   <input type="hidden" id="source" name="source" value="" />
   <img src="https://llimages.com/redirect/redirect.aspx?A=V&p=7559514&m=205214" style="display: none;" />
</form> --}}

					<button type="button" class="button-close-ebook" data-dismiss="modal">X</button>
					<img class="img-ebook" src="{{asset('images/pop-up-captura-ecole.jpg')}}">
					<p class="descricao-ebook">Cadastre-se abaixo e receba direto no seu e-mail o link do ebook grátis.</p>
				    <link rel='stylesheet' href='https://blob.llimages.com/machine-files/all-css/form-ll.css'>
    				<form action="https://leadlovers.com/Pages/Index/205214" method="post" >
				    <input id="id" name="id" type="hidden" value="205214" />
				    <input id="pid" name="pid" type="hidden" value="7559514" />
				    <input id="list_id" name="list_id" type="hidden" value="205214" />
				    <input id="provider" name="provider" type="hidden" value="leadlovers" />
				    <input id="name" name="name" placeholder="Nome" type="text"  />
				    <input id="email" name="email" placeholder="E-mail" type="text" />
				    <button class="button-ecole" style="background: #1bd641; box-shadow: 0px 7px 5px 0px #545454;" type="submit">Receber o ebook</button>
				    <input type="hidden" id="source" name="source" value="" />
				    <img src="https://llimages.com/redirect/redirect.aspx?A=V&p=7559514&m=205214" style="display: none;" />
      				</form>
        	</div>
        </div>
      </div>
    </div>

  </div>
</div>
@section('content-js')
<script type="text/javascript">
	$(window).on('load', function(){

		$(".container-modal.container-ebook").show();

		$("#modal-pagamento .modal-content").append(
		'<div class="modal-header">' +
        	'<button type="button" class="close" data-dismiss="modal">&times;</button>' +
        '<h4 class="modal-title">Forma de pagamento</h4>' +
      '</div>' +
      '<div class="modal-body">' +
        '<div class="row">' +
        	'<div class="container-modal col-md-12 container-escolha-pagamento">' +
        		'<div class="col-md-4">' +
        			'<a href="{{ route('compra.agenda', ['curso_id' => $curso->id, 'meio_pagamento' => 'credit_card']) }}"><span class="icones-pagamento"><i class="far fa-credit-card"></i></span></a>' +
        			'<h4>Cartão de Crédito</h4>' +
        		'</div>' +
        		'<div class="col-md-4">' +
        			'<a href="{{ route('compra.agenda', ['curso_id' => $curso->id, 'meio_pagamento' => 'boleto']) }}" class="boleto-bancario-avista"><span class="icones-pagamento"><i class="fas fa-barcode"></i></span></a>' +
        			'<h4>Boleto Bancário à  vista, com 10% de desconto</h4>' +
        		'</div>' +
        		'<div class="col-md-4">' +
        			'<a class="boleto-bancario"><span class="icones-pagamento"><i class="fas fa-barcode"></i></span></a>' +
        			'<h4>Boleto Bancário</h4>' +
        		'</div>' +
        	'</div>' +
        	'<div class="container-modal container-formulario-pagamento" style="display: none">' +
        		'<div class="col-md-12">' +
	                '<ul style="padding-left:0px; color:gray">' +
	                    '<li>' +
	                    	'<form id="form-contato" class="form-horizontal" role="form" method="POST" action="{{ route('email.contato', ['subject' => 'Intenção de pagamento em boleto | Curso de consultoria e coaching de imagem']) }}">' +
	                    		'{{ csrf_field() }}' +
				                '<div class="form-group">' +
				                  '<label class="control-label">Seu nome completo</label>' +
				                  '<input required name="contato" type="text" class="full form-control ">' +
				                '</div>' +
				                '<div class="form-group">' +
				                  '<label class="control-label">Telefone ou Celular</label>' +
				                  '<input required name="telefone" type="text" class="full form-control ">' +
				                '</div>' +
				                '<div class="form-group">' +
				                  '<label class="control-label">E-mail</label>' +
				                  '<input required name="email" type="email" class="full form-control ">' +
				                '</div>' +
				                '<div class="form-group">' +
				                  '<label class="control-label">Cidade e Estado</label>' +
				                  '<input required name="cidade" type="text" class="full form-control ">' +
				                '</div>' +
				                '<div class="form-group">' +
				                	'<label class="control-label">Cidade(s) que desejaria fazer o curso</label>' +
				                  '<input required name="cidade_curso" type="text" class="full form-control " >' +
				                '</div>' +
		                        '<button id="btn-contato" style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">' +
		                          '<img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/enviar_cinza.png') }}">' +
		                        '</button>' +
		                    '</form>' +
	                    '</li>' +
	                '</ul>' +
        		'</div>' +
			'</div>' +
        '</div>' +
      '</div>' +
      '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>' +
      '</div>');

		$(".boleto-bancario").click(function(){
			$(".container-escolha-pagamento").slideUp("slow", () => {
				$(".container-formulario-pagamento").slideDown("slow");
			});
		});

		$('#modal-pagamento').on('shown.bs.modal', function () {
			$(".container-escolha-pagamento").show();
			$(".container-formulario-pagamento").hide();
		});
	});
</script>
@endsection
</script>
<div id="modal-pagamento" class="modal fade" role="dialog" style="margin-right: -16px">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content margin-modal">
      {{-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Forma de pagamento</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="container-modal container-escolha-pagamento">
        		<div class="col-md-6">
        			<a href="{{ route('compra.agenda', ['curso_id' => $curso->id]) }}"><span class="icones-pagamento"><i class="far fa-credit-card"></i></span></a>
        			<h4>Cartão de Crédito</h4>
        		</div>
        		<div class="col-md-6">
        			<a class="boleto-bancario"><span class="icones-pagamento"><i class="fas fa-barcode"></i></span></a>
        			<h4>Boleto Bancário</h4>
        		</div>
        	</div>
        	<div class="container-modal container-formulario-pagamento" style="display: none">
        		<div class="col-md-12">
	                <ul style="padding-left:0px; color:gray">
	                    <li>
	                    	<form id="form-contato" class="form-horizontal" role="form" method="POST" action="{{ route('email.contato', ['subject' => 'Intenção de pagamento em boleto | Curso de consultoria e coaching de imagem']) }}">
	                    		{{ csrf_field() }}
				                <div class="form-group">
				                  <label class="control-label">Seu nome completo</label>
				                  <input required name="contato" type="text" class="full form-control ">
				                </div>
				                <div class="form-group">
				                  <label class="control-label">Telefone ou Celular</label>
				                  <input required name="telefone" type="text" class="full form-control ">
				                </div>
				                <div class="form-group">
				                  <label class="control-label">E-mail</label>
				                  <input required name="email" type="email" class="full form-control ">
				                </div>
				                <div class="form-group">
				                  <label class="control-label">Cidade e Estado</label>
				                  <input required name="cidade" type="text" class="full form-control ">
				                </div>
				                <div class="form-group">
				                	<label class="control-label">Cidade(s) que desejaria fazer o curso</label>
				                  <input required name="cidade_curso" type="text" class="full form-control " >
				                </div>
		                        <button id="btn-contato" style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
		                          <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/enviar_cinza.png') }}">
		                        </button>
		                    </form>
	                    </li>
	                </ul>
        		</div>
			</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div> --}}
    </div>

  </div>
</div>