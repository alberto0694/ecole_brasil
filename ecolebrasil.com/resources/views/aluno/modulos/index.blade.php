@extends('layouts.aluno')
@section('content')
<style type="text/css">
	a, a:hover, a:active {
	    color: rgba(239, 64, 96, 1);
	    text-decoration: none;
	}
	.img-contato{
		display: block;
		margin: 0 auto;
		width: 20%;
	    background: #ef4060;
	    margin-top: 10px;
	}
</style>
	@if($modulo->openned)
		<div class="row" style="color: rgba(239, 64, 96, 1);">
			<h1 style="text-align:center">{{ $modulo->curso->nome }}</h1>
			<h3 style="text-align:center">{{ $modulo->titulo }}</h3>
			<div class="col-md-6" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('aluno.aulas', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-laptop"></i>
					<h3>AULAS</h3>
				</a>
			</div>
			<div class="col-md-6" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('aluno.exercicios', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-book"></i>
					<h3>EXERCÍCIOS</h3>
				</a>
			</div>
			<div class="col-md-6" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('aluno.materiais', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-folder-open"></i>
					<h3>CONTEÚDOS DE APOIO</h3>
				</a>
			</div>
			<div class="col-md-6" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('aluno.videos', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-video-camera"></i>
					<h3>VIDEOCONFERÊNCIAS</h3>
				</a>
			</div>
		</div>
	@else
      <div class="row">
      	<img class="img-contato" src="{{asset('images/logo-ecole-load.png')}}">
        <h3 align="center">Este módulo ainda não está liberado!</h3>
        <h4 align="center">Aberto a partir de {{ $modulo->formatedDate }}</h4>
      </div>
	@endif
	<div class="row">
		<h4 align="center">{!! $modulo->descricao_html!!}</h4>
	</div>
@endsection