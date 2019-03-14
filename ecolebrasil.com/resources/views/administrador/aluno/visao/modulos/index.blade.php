@extends('layouts.administrador')
@section('content')
<style type="text/css">
	a, a:hover, a:active {
	    color: rgba(239, 64, 96, 1);
	    text-decoration: none;
	}
</style>
	<div class="row" style="color: rgba(239, 64, 96, 1);">
		<h1 style="text-align:center">{{ $modulo->curso->nome }}</h1>
		<h3 style="text-align:center">{{ $modulo->titulo }}</h3><br><br>
		@if($modulo->agenda->videoconferencia == 'S')
			<div class="col-md-6" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('administrador.aluno.aulas', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-laptop"></i>
					<h3>AULAS</h3>
				</a>
			</div>
			<div class="col-md-6" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('administrador.aluno.exercicios', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-book"></i>
					<h3>EXERCÍCIOS</h3>
				</a>
			</div>
			<div class="col-md-6" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('administrador.aluno.materiais', $modulo->id) }}">
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
		@else
			<div class="col-md-4" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('administrador.aluno.aulas', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-laptop"></i>
					<h3>AULAS</h3>
				</a>
			</div>
			<div class="col-md-4" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('administrador.aluno.exercicios', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-book"></i>
					<h3>EXERCÍCIOS</h3>
				</a>
			</div>
			<div class="col-md-4" style="text-align:center; margin-top: 10px;">
				<a href="{{ route('administrador.aluno.materiais', $modulo->id) }}">
					<i style="font-size: 40pt" class="menu-icon fa fa-folder-open"></i>
					<h3>CONTEÚDOS DE APOIO</h3>
				</a>
			</div>

		@endif
	</div>
	<div class="row">
		<h4 align="center">{!! $modulo->descricao_html!!}</h4>
	</div>
@endsection