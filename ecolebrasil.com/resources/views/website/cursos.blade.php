@extends('layouts.website')
@section('content')
<style type="text/css">
.video-index{
	margin: 0;
	padding: 0;
	border: none;
	margin-top: -1px;
	border-radius: 0px;
}
.titulo-curso{
	color: white;
	font-weight:bold;
	font-size: 18pt;
	position: absolute;
	margin-top: 10px;
	/*margin-left:15px; */
	left: 50%;
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
<div class="row">
	<div class="col-md-12 header-page-content" style="background-image: url(' {{ asset($curso->background_img) }} ')"></div>
		<div class="col-md-12 header-page">
			<p>{{ $curso->nome }}</p>
		</div>
	</div>
</div>
<div class="row margin-top">
	<div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1" style="text-align:justify">
		<h4 class="title-pink-begin-text">APRESENTAÇÃO</h4>
		<p class="gray-text" >
			{!! $curso->apresentacao !!}
		</p>
	</div>
	<div class="col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1">
		<iframe style="width: 100%; min-height: 350px" src="{{$curso->link_video }}"></iframe>
	</div>
</div>
<div class="row margin-top padding-20" style="background: #e5e5e5">
	<div class="col-md-6">
		<div class="col-md-11 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text upper-case">Base de conteúdos abordados</h4>
			{!! $curso->conteudo !!}
		</div>
		<div class="col-md-11 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text">MODELO DO CURSO</h4>
			<p class="gray-text">{{$curso->modelo}}</p>
		</div>
		<div class="col-md-11 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text">CARGA HORÁRIA</h4>
			<p class="gray-text">{{$curso->carga_horaria }}</p>
		</div>
		<div class="col-md-11 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text">MAIS INFORMAÇÕES</h4>
			<h4><a download="{{ $curso->nome }}" href="{{ asset($curso->ementa) }}" title='{{  $curso->nome }}'>Clique aqui para saber mais</a></h4>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-11 col-md-offset-0 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text upper-case">OBJETIVOS DA FORMAÇÃO</h4>
			{!! $curso->objetivos !!}
		</div>
		<div class="col-md-11 col-md-offset-0 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text upper-case">Material didático</h4>
			{!! $curso->material !!}
		</div>
	</div>

</div>
<div class="row">
<a href="{{ route('pagamento', ['curso_id' => $curso->id]) }}"><img style="display: block; margin-bottom:30px; margin-top:30px; margin-left: auto; margin-right: auto" src="{{asset('images/inscricao-button.png')}}">	</a>
</div>
<div class="row">
	<hr style="margin-top: 50px">
	<h4 style="text-align: center; margin-top: -50px"><a href="{{route('agenda')}}">
		<img src="{{asset('images/agenda-button.png')}}">
	</a></h4>
</div>
@endsection
