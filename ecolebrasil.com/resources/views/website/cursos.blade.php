@extends('layouts.website')
@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}
	.titulo-curso{
 			color: white;  
 			font-weight:bold; 
 			font-size: 14pt; 
 			position: absolute; 
 			margin-top: 10px; 
 			margin-left:15px; 
 			padding: 2px;
 			background-color: rgba(239, 64, 96, 1);		
	}

	@media screen and (min-width: 768px) {
		.margin-video {
			margin-left: -30px;
		}

		.titulo-curso{
			bottom: 10px;
		}
	}

	@media screen and (max-width: 768px) {
		.titulo-curso{
			font-size: 10pt;
		}
	}
</style>
			<div class="row" style="margin: 0; padding: 0">
				  <div class="col-md-12 col-xs-12" style="margin: 0; padding: 0">
				    <a href="#" class="video-index thumbnail ">
				      <div style="position: absolute; background-color: rgba(255, 255, 255, 0.1); width: 100%; height: 100%" ></div>
				      <label class="titulo-curso"	>{{ $curso->nome }}</label>
				      <img src="{{ asset($curso->background_img) }}">
				    </a>
				  </div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<h2 class="gray-text-bold">&nbsp;&nbsp;SOBRE O CURSO</h2>
				</div>
			</div>
			<div class="row">
				<hr>
				<div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<iframe style="width: 100%; min-height: 350px" src="{{$curso->link_video }}"></iframe>
				</div>
				<div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
					<h4 class="title-pink-begin-text">APRESENTAÇÃO</h4>
					<p class="gray-text">
						{!! $curso->apresentacao !!}
					</p>
					<h4 class="title-pink-begin-text upper-case" style="margin-top: 40px">OBJETIVOS DA FORMAÇÃO</h4>
					<p class="gray-text">
						{!! $curso->objetivos !!}
					</p>

				</div>
			</div>
			<div class="row" style="padding-top: 20px; background: #e5e5e5">
				<div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<h3 class="title-pink-begin-text upper-case">Base de conteúdos abordados</h3>
					{!! $curso->conteudo !!}
				</div>
				<div class="col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1">
					<h3 class="title-pink-begin-text upper-case">Material didático</h3>
					{!! $curso->material !!}
				</div>
			</div>
			<div class="row" style="padding-top: 20px">
					<div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1">
						<h4 class="title-pink-begin-text">INFORMAÇÕES COMPLETAS</h4>
						<h4><a download href="{{ asset($curso->ementa) }}" title='{{  $curso->nome }}'>Clique aqui para saber mais</a></h4>
					</div>
					<div class="col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1">
						<h4 class="title-pink-begin-text">MODELO DO CURSO</h4>
						<p class="gray-text">{{$curso->modelo}}</p>
					</div>
					<div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
						<h4 class="title-pink-begin-text">CARGA HORÁRIA</h4>
						<p class="gray-text">{{$curso->carga_horaria }}</p>
					</div>
			</div>

			<div class="row">
				<a href="{{ route('pagamento', ['curso_id' => $curso->id]) }}"><img style="display: block; margin-bottom:30px; margin-top:30px; margin-left: auto; margin-right: auto" src="{{asset('images/inscricao-button.png')}}">	</a>
			</div>
 			<div class="row">
 				<hr style="margin-top: 50px">
 				<h3 style="text-align: center; margin-top: -50px"><a href="{{route('agenda')}}">
 					<img src="{{asset('images/agenda-button.png')}}">
 				</a></h3>
 			</div>

	{{-- </div> --}}
<script type="text/javascript">
</script>
 @endsection
