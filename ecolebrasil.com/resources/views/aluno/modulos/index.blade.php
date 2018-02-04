@extends('layouts.aluno')
@section('content')
	<h1 style="text-align:center">{{ $modulo->curso->nome }}</h1>
	<h3 style="text-align:center">{{ $modulo->titulo }}</h3>
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('aluno.aulas', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>AULAS</h3>
		</a>
	</div>
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('aluno.exercicios', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>EXERCÍCIOS</h3>
		</a>
	</div>
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('aluno.materiais', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>MATERIAIS DE APOIO</h3>
		</a>
	</div>	
	<div class="col-md-6" style="text-align:center; margin-top: 10px;">
		<a href="{{ route('aluno.videos', $modulo->id) }}">
			<i style="font-size: 40pt" class="menu-icon fa fa-tachometer"></i>
			<h3>VIDEOCONFERÊNCIAS</h3>
		</a>
	</div>
@endsection