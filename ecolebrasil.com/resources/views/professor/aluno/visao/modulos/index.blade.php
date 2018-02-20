{{-- @extends('layouts.professor')
@section('content')
	<h1 style="text-align:center">{{ $modulo->curso->nome }}</h1>
	<h3 style="text-align:center">{{ $modulo->titulo }}</h3>
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('professor.aluno.aulas', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>AULAS</h3>
		</a>
	</div>
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('professor.aluno.exercicios', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>EXERCÍCIOS</h3>
		</a>
	</div>
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('professor.aluno.materiais', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>MATERIAIS DE APOIO</h3>
		</a>
	</div>
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('professor.aluno.videos', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>VIDEOCONFERÊNCIAS</h3>
		</a>
	</div>
@endsection --}}
@extends('layouts.professor')
@section('content')
<style type="text/css">
	a, a:hover, a:active {
	    color: rgba(239, 64, 96, 1);
	    text-decoration: none;
	}
</style>
	<div class="row" style="color: rgba(239, 64, 96, 1);">
		<h1 style="text-align:center">{{ $modulo->curso->nome }}</h1>
		<h3 style="text-align:center">{{ $modulo->titulo }}</h3>
		<div class="col-md-6" style="text-align:center; margin-top: 10px;">
			<a href="{{ route('professor.aluno.aulas', $modulo->id) }}">
				<i style="font-size: 40pt" class="menu-icon fa fa-laptop"></i>
				<h3>AULAS</h3>
			</a>
		</div>
		<div class="col-md-6" style="text-align:center; margin-top: 10px;">
			<a href="{{ route('professor.aluno.exercicios', $modulo->id) }}">
				<i style="font-size: 40pt" class="menu-icon fa fa-book"></i>
				<h3>EXERCÍCIOS</h3>
			</a>
		</div>
		<div class="col-md-6" style="text-align:center; margin-top: 10px;">
			<a href="{{ route('professor.aluno.materiais', $modulo->id) }}">
				<i style="font-size: 40pt" class="menu-icon fa fa-folder-open"></i>
				<h3>MATERIAIS DE APOIO</h3>
			</a>
		</div>
		<div class="col-md-6" style="text-align:center; margin-top: 10px;">
			<a href="{{ route('professor.aluno.videos', $modulo->id) }}">
				<i style="font-size: 40pt" class="menu-icon fa fa-video-camera"></i>
				<h3>VIDEOCONFERÊNCIAS</h3>
			</a>
		</div>
	</div>
	<div class="row">
		<h4 align="center">{!! $modulo->descricao_html!!}</h4>
	</div>
@endsection