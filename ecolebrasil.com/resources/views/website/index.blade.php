@extends('layouts.website')

@section('content')

<style type="text/css">
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
    position: relative;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

.carousel-inner .item{
	height: 750px;
}

/* Add some content at the bottom of the video/page */
.content {
    position: absolute;
    top: 0;
    /*background: rgba(0, 0, 0, 0.5);*/
    color: #f1f1f1;
    width: 100%;
    padding: 2px;
}

/* Style the button used to pause/play the video */
#myBtn {
    width: 70px;
    font-size: 12pt;
    padding: 3px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
}

.overload-video, .above-video{
    position: absolute;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    z-index: 998;
    background: gray;
    opacity: .5;
}

.above-video{
	opacity: 1;
	background: none;
	display: table;
}

.inside-above-video{
	display: table-cell;
	vertical-align: middle;
}

@media screen and (max-width: 768px) {
	.video-index{
		margin: 0;
		padding: 0;
		border: none;
		margin-top: -1px;
		border-radius: 0px;
		width: 100%;
		height: auto;
	}

	video{
		width: 100%;
	}

	.content {
	    bottom: 300px;
	    background: rgba(0, 0, 0, 0.5);
	}

	.carousel-inner .item{
		height: 300px;
	}

}
</style>
<script>
$(window).on('load', function(){
	$("video").prop('muted', true);
});
// Pause and play the video, and change the button text
function myFunction() {
	var btn = document.getElementById("myBtn");
	if($("video").attr("muted") == undefined){
		$("video").attr("muted", false);
	}
	// debugger;
    if (!$("video").prop("muted")) {
        $("video").prop('muted', true);
        btn.innerHTML = "<i class='fas fa-volume-up'></i>";
    } else {
    	$("video").prop('muted', false);
        btn.innerHTML = "<i class='fas fa-volume-off'></i>";
    }
}
</script>
<div class="row" style="margin: 0; padding: 0">
	 <div class="col-md-12" style="margin: 0; padding: 0">
		<div id="carousel-index-ecole" class="carousel slide background-ecole-pink" data-ride="carousel">
			<?php 	$i = 0;
					$class = "active";
			?>
		  <div class="carousel-inner">
		  	@foreach($banners as $banner)
			    @if($i > 0)
			    	<?php $class = ""; ?>
			    @endif
			    <?php $i++; ?>
			    <div class="item <?php echo $class; ?>">
				    @if($banner->ativo == 1)
				    	{!!$banner->item!!}
				    	<div class="overload-video"></div>
				    	<div class="above-video">
						 	<div class="inside-above-video col-md-4 col-md-offset-4" style="margin-top: 80px;">
								<h3 style="text-align: center; color: white; padding: 2px; width: 100%">
									<a target="_blank" href="{{ route('cursos', 3) }}"><img src="{{ asset('images/logo-ecole-load.png') }}"></a>
									<a target="_blank" style="color:white; text-decoration: none; font-weight: bold" href="{{ route('cursos', 3) }}">FORMAÇÃO DE CONSULTORIA E COACHING DE IMAGEM</a>
								</h3>
								<div class="col-md-12" style="margin-top: 20px;">
									<h3 style="text-align: center; background: white; padding: 5px; width: 100%">
										<a class="no-text-decoration gray-dark-color titulo-padrao" style="text-decoration:none; font-weight: bold" href="{{ route('inscricao') }}">Faça sua inscrição</a>
									</h3>
								</div>
						 	</div>
				    	</div>
				    @endif
			    </div>
			  @endforeach
				<div class="content">
				  <button id="myBtn" onclick="myFunction()"><i class="fas fa-volume-up"></i></button>
				</div>
		  </div>

		  @if($i > 1)
			  <a class="left carousel-control" href="#carousel-index-ecole" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-index-ecole" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			@endif
		</div>
	 </div>
 </div>
<div class="row margin-top">
	<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
 	<h3 align="center" class="title-pink-begin-text">MISSÃO</h3>
 	<h4 align="center" class="gray-text paragrafo-padrao margin-min-top">Nossa missão ganha vida em três bandeiras que carregamos em todas as formações que desenvolvemos</h4>
	</div>
</div>
<div class="row margin-min-top">
	<div class="col-md-8 col-md-offset-2" style="text-align: center">
		<div class="col-md-4">
			<img class="icone-missao" src="{{ asset('images/excelencia-conhecimento.png') }}">
			<label class="title-pink-begin-text" >Excelência no conhecimento</label>
			<p class="paragrafo-padrao gray-text margin-min-top" style="text-align: justify;">Nosso papel é formar pessoas com qualidade técnica, métodos atualizados e conhecimentos capazes de torná-las aptas a colocar em prática o que aprenderam e serem capazes de usarem os ensinamentos para ajudar pessoas na busca por sua imagem pessoal.</p>
		</div>
		<div class="col-md-4">
			<img class="icone-missao" src="{{ asset('images/respeito-individualidade.png') }}">
			<label class="title-pink-begin-text" >Respeito à individualidade</label>
			<p class="paragrafo-padrao gray-text margin-min-top" style="text-align: justify;">Cada pessoa tem a sua forma de ser e isso que a torna única. Pensar a imagem é um processo de aprendizagem, descoberta e autoconhecimento. É nisso que acreditamos, é isso que multiplicamos em nossas formações.</p>
		</div>
		<div class="col-md-4">
			<img class="icone-missao" src="{{ asset('images/respeito-paixao.png') }}">
			<label class="title-pink-begin-text" >Renovar com paixão</label>
			<p class="paragrafo-padrao gray-text margin-min-top" style="text-align: justify;">Estamos sempre em constante atualização. O que torna isso parte natural do nosso trabalho é a paixão que temos pelo que fazemos, por estar com pessoas, por possibilitar que elas saiam melhores, mais confiantes e preparadas de cada curso que se encerra. </p>
		</div>
	</div>
</div>
<div class="row margin-top gray-background padding-50">
	<div class="col-md-10 col-md-offset-1">
		<div class="col-md-3">
			<a href="{{ route('cursos.lista') }}">
				<div class="box-ecole">
					<img src="{{asset('images/logo-ecole-load.png')}}">
					<label class="titulo-padrao"><a href="{{route('cursos.lista')}}">Cursos Ecole</a></label>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{ route('cursos.lista', ['formacao_id' => 1]) }}">
				<div class="box-ecole">
					<img src="{{asset('images/logo-ecole-load.png')}}">
					<label class="titulo-padrao"><a href="{{route('cursos.lista', ['formacao_id' => 1])}}">Formações</a></label>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{ route('cursos.lista', ['formacao_id' => 3]) }}">
				<div class="box-ecole">
					<img src="{{asset('images/logo-ecole-load.png')}}">
					<label class="titulo-padrao"><a href="{{route('cursos.lista', ['formacao_id' => 3])}}">Cursos Online</a></label>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{ route('agenda') }}">
				<div class="box-ecole">
					<img src="{{asset('images/logo-ecole-load.png')}}">
					<label class="titulo-padrao"><a href="{{route('agenda')}}">Agenda Ecole Brasil</a></label>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="row margin-top padding-20">
	<div class="col-md-10 col-md-offset-1">
		@foreach($depoimentos as $depoimento)
			<div class="col-md-4">
				<div class="box-depoimento">
					<div class="row">
						<p>{{str_limit($depoimento->descricao_html, 140)}}<a href="{{ route('depoimentos') }}"> Ler mais</a></p>
					</div>
					<div class="row">
						<label class="gray-dark-color">{{$depoimento->autor}}</label>
						<img src="{{ asset('images/ecole-logo-depoimento.png') }}">
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
<div class="row padding-bottom margin-top padding-20 gray-background">
	<div class="col-md-3">
		<img style="display: block; width: 55%; margin: 0 auto" src="{{asset('images/logo-ecole-paris.jpg')}}">
	</div>
	<div class="col-md-8">
		<h5 class="title-pink-begin-text" style="text-align:left">NOSSA FORMAÇÃO É CERTIFICADA EM ALTO NÍVEL</h5>
		<p class="gray-dark-color" style="text-align:justify">
		A origem da nossa formação e metodologia estão na França, onde a Escola está certificada em alto nível. Lá, o certificado recebido pelos alunos que cursam integralmente as formações assemelha-se a uma formação técnica aqui no Brasil e o aluno recebe o título de Consultor de Comunicação para Valorização da Imagem, registrado no RNCP (Repertório Nacional de Certificações Profissionais), no Nível II.
		</p>
		<p class="gray-dark-color" style="text-align:justify">
		Na França, essa certificação é um critério importante de legitimidade profissional. Ela responde a uma real necessidade de profissionalização e possibilita o reconhecimento de um alto nível de competências e capacidades.
		</p>
		<p class="gray-dark-color" style="text-align:justify">
		Cada certificação é descrita em termos de atividades propostas e competências avaliadas, em um processo extenso de avaliação da instituição, da qualidade do ensino oferecido e do reconhecimento oficial da sustentabilidade do negócio e da empresa.
		</p>
		<h3 class="background-ecole-pink titulo-padrao" style="text-align: center; color: white; padding: 2px; width: 18%; padding: 5px; ">
			<a style="text-decoration: none; color: white; font-weight: bold" href="{{ route('certificacao') }}">Confira</a>
		</h3>
	</div>
</div>
<div class="row padding-20 background-ecole-pink">
	<div class="col-md-3">
		<img style="width: 80%; display: block; margin: 0 auto" src="{{asset('images/logo-ecole-load.png')}}">
	</div>
	<div class="col-md-3" style="margin-top: 20px;">
		<h3 style="text-align: center; background: white; padding: 5px; width: 65%">
			<a class="no-text-decoration gray-dark-color titulo-padrao" style="text-decoration:none; font-weight: bold" href="{{ route('contato') }}">Entre em contato</a>
		</h3>
	</div>
	<div class="col-md-5" style="margin-top: 20px;">
		<p class="gray-text-ecole" style="text-align: center; font-size: 14pt">Quer saber mais? Entre em contato com a gente, vamos adorar falar com você.</p>
	</div>
</div>
@endsection
