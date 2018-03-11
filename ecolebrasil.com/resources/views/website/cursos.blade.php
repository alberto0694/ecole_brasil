@extends('layouts.website')
<style type="text/css">
@media screen and (min-width: 768px) {
	.margin-video {
		margin-left: -30px;
	}
}
.border{
    border:  2px solid rgba(239, 64, 96, 1);
    display: block;
    border-radius: 7px;
    overflow: auto;
    width: 80%;
    margin-left: 20px;
    margin-bottom: 20px;
    overflow-x: hidden;
    overflow-y: hidden;
    padding: 20px;
}
</style>
@section('content')
<div class="row">
	<div class="col-md-12 header-page-content" style="background-image: url(' {{ asset($curso->background_img) }} ')"></div>
		<div class="col-md-12 header-page upper-case">
			<p>{{ $curso->nome }}</p>
		</div>
</div>
<div class="row margin-top">
	<div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1" style="text-align:justify">
		<h4 class="title-pink-begin-text">APRESENTAÇÃO</h4>
		<p class="gray-text" >
			{!! $curso->apresentacao !!}
		</p>
	</div>
	<div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
		@if($curso->link_video != '0')
			<iframe style="width: 100%; min-height: 350px" src="{{$curso->link_video }}"></iframe>
		@else
			<img src="{{ asset($curso->card) }}" style="width: 50%; display: block; margin: 0 auto">
		@endif
	</div>
</div>
<div class="row margin-top padding-20" style="background: #e5e5e5">
	<div class="col-md-6">
		<span class="border">
			<div class="col-md-11 col-md-offset-1 col-xs-10 col-xs-offset-1">
				<h4 class="title-pink-begin-text">MODELO DO CURSO</h4>
				<p class="gray-text">{{$curso->modelo}}</p>
			</div>
			<div class="col-md-11 col-md-offset-1 col-xs-10 col-xs-offset-1 margin-min-top">
				<h4 class="title-pink-begin-text">CARGA HORÁRIA</h4>
				<p class="gray-text">{{$curso->carga_horaria }}</p>
			</div>
			<div class="col-md-11 col-md-offset-1 col-xs-10 col-xs-offset-1 margin-min-top">
				<h4 class="title-pink-begin-text upper-case">DIFERENCIAIS</h4>
				{!! $curso->informacoes !!}
			</div>
		</span>
	</div>
	<div class="col-md-6">
		<div class="col-md-11 col-md-offset-0 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text upper-case">OBJETIVOS DA FORMAÇÃO</h4>
			{!! $curso->objetivos !!}
		</div>
		<div class="col-md-11 col-md-offset-0 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text upper-case">MATERIAL DIDÁTICO</h4>
			{!! $curso->material !!}
		</div>
		<div class="col-md-11 col-md-offset-0 col-xs-10 col-xs-offset-1">
			<h4 class="title-pink-begin-text upper-case">BASE DOS CONTEÚDOS ABORDADOS</h4>
			<p class="gray-text paragrado-padrao">{!! $curso->conteudo !!}</p>
		</div>		
		<div class="col-md-11 col-md-offset-0 col-xs-10 col-xs-offset-1">
			{{-- <h4 class="title-pink-begin-text">MAIS INFORMAÇÕES</h4> --}}
			<h3 style="text-align: center; background: white; padding: 5px; width: 100%">
				<a target="_blank" class="no-text-decoration gray-dark-color titulo-padrao" style="text-decoration:none; font-weight: bold" href="{{ asset($curso->ementa) }}">Clique aqui e saiba mais</a>
			</h3>
			<h3 style="text-align: center; padding: 5px; width: 100%; background: rgba(239, 64, 96, 1); color:white">
				<a class="no-text-decoration titulo-padrao" style="width: 100%; display: block; color:white; text-decoration:none; font-weight: bold" href="{{ route('contato') }}">Fale com a gente</a>
			</h3>
		</div>		
	</div>
</div>
<div class="row">
	<a href="{{ route('compra.agenda', ['curso_id' => $curso->id]) }}"><img style="display: block; margin-bottom:30px; max-width: 260px; margin-top:30px; margin-left: auto; margin-right: auto" src="{{asset('images/inscricao-button.png')}}">
	</a>
</div>
<div class="row">
	<hr style="margin-top: 50px">
	<h4 style="text-align: center; margin-top: -50px"><a href="{{route('agenda')}}">
		<img src="{{asset('images/agenda-button.png')}}">
	</a></h4>
</div>
@endsection
