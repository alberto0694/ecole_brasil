@extends('layouts.website')

@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}

/*	.ser-para-vestir{
		position: absolute;
		bottom: 50px;
		margin: 0;	
	}*/
</style>
{{-- <div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	      <img src="{{ asset('images/banner-depoimentos.png') }}" alt="...">
	    </a>
	  </div>
 </div> --}}
 <div class="row">
 	<div class="col-md-10 col-md-offset-1">
 		<h3 style="margin-left: 10px">Agenda</h3>
 		<hr> 			
	</div>
 </div>
 <div class="row">
 	<div class="col-md-10 col-md-offset-1 col-xs-12">
 		@foreach($agendas as $agenda)
	 		<div class="col-md-3">
	 			<a href="{{ route('cursos', $agenda->curso->id) }}" target="_blank">
	 				<img style="display: block; margin: 0 auto;" src="{{ $agenda->logo }}">
	 			</a>	 			
	 			<h4 align="center">	{{ $agenda->datas }} - {{ $agenda->cidade }}</h4>
	 			<h4 align="center"><b>{{ $agenda->ministrantes }}</b></h4>
	 			<a href="{{ route('cursos', $agenda->curso->id) }}" target="_blank"><h3 align="center"><b>{{ $agenda->curso->nome }}</b></h3></a>
	 		</div>
 		@endforeach
 	</div>
 </div>
 <div class="row" style="margin-top: 30px">&nbsp;</div>
@endsection
