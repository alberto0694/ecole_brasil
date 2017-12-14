@extends('layouts.website')
@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}
</style>	
			<div class="row" style="margin: 0; padding: 0">
				  <div class="col-md-12 col-xs-10 col-xs-offset-1" style="margin: 0; padding: 0">
				    <a href="#" class="video-index thumbnail ">
				      {{-- <img src="{{ asset('images/banner-cursos.png') }}" alt="..."> --}}
				      <img src="{{ $curso->background_img }}">				      
				    </a>
				  </div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
					<h2 class="gray-text-bold">SOBRE O CURSO</h2>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<iframe src="{{$curso->link_video }}"></iframe>
						</div>
						<div class="col-md-6">
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
				</div>
			</div>
			<div class="row" style="padding-top: 20px; background: #e5e5e5">
				<div class="row">
				{{-- 	<div class="col-md-4 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<h3 class="title-pink-begin-text upper-case">OBJETIVOS DA FORMAÇÃO</h3>
						<p class="gray-text">O curso habilita o aluno para atuar como Consultor ou Coaching de Imagem, capacitando-o para auxiliar as pessoas na busca por uma imagem pessoal legítima.</p>	
					</div> --}}
					<div class="col-md-4 col-xs-10 col-xs-offset-1">
						<h3 class="title-pink-begin-text upper-case">Base de conteúdos abordados</h3>
						{!! $curso->conteudo !!}	
					</div>
					
				{{-- </div>
				<div class="row"> --}}
					<div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1">
						<h3 class="title-pink-begin-text upper-case">Material didático</h3>
						{!! $curso->material !!}	
					</div>
					{{-- <div class="col-md-4 col-xs-10 col-xs-offset-1">
						<h3>OBJETIVOS DA FORMAÇÃO</h3>
						<p>Phasellus congue nisl est, ut lacinia nisi vehicula vel. Sed luctus in enim non egestas. Ut sit amet tincidunt sem. Aliquam ultrices rutrum eros, non tincidunt nunc congue a. Fusce eu imperdiet leo.</p>	
					</div> --}}
					
				</div>		
			</div>	
			<div class="row" style="padding-top: 20px">
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="col-md-3 col-md-offset-2 col-xs-10 col-xs-offset-1">
						<h4 class="title-pink-begin-text">MODELO DO CURSO</h4>	
							@if($curso->modelo == 0)							
								<p class="gray-text">Presencial</p>
							@else
								<p class="gray-text">À Distância</p>
							@endif
						<hr>
						<h4 class="title-pink-begin-text">CARGA HORÁRIA</h4>	
							<p class="gray-text">{{$curso->carga_horaria }}</p>
						<hr>
						<h4 class="title-pink-begin-text">MINISTRANTES</h4>	
							<p class="gray-text">{!!$curso->ministrantes !!}</p>
						<hr>
						<h4 class="title-pink-begin-text">INVESTIMENTO</h4>	
						<h5><b>{{$curso->investimento }}</b></h5>
						{{-- <p class="gray-text">presencial</p> --}}
					</div>
					<div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1">
						<hr>
							<h4 class="title-pink-begin-text">AGENDA</h4>
							<div class="row">
								<div class="media">
									  <div class="media-left" style="min-width: 100px">
									  		<h4>&nbsp;</h4>
										    <h4 class="media-heading descricao-day-agenda" style="text-align: center; text-decoration: underline; font-size: 23pt ">MAI</h4>
										    <h4 class="media-heading descricao-day-agenda" style="text-align: center">05 e 06</h4>
									  </div>								  
									  <div class="media-left">
										    <a href="#">
										      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
										    </a>
									  </div>
									  <div class="media-body hidden-xs hidden-sm">
										    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
										    <span class="title-pink-begin-text" style="font-style: normal">Tecidos: Diferentes tipos e aplicações</span>
									  </div>
									  <span class="hidden-md hidden-lg" style="margin-top:15px; margin-bottom:35px; display: block;">
									  	<h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
										    <span class="title-pink-begin-text" style="font-style: normal">Tecidos: Diferentes tipos e aplicações</span>
									  </span>
								</div>	 											
							</div>
							<div class="row" style="margin-top: 10px">
								<div class="media">
									  <div class="media-left" style="min-width: 100px">
									  		<h4>&nbsp;</h4>
										    <h4 class="media-heading descricao-day-agenda" style="text-align: center; text-decoration: underline; font-size: 23pt ">MAI</h4>
										    <h4 class="media-heading descricao-day-agenda" style="text-align: center">05 e 06</h4>
									  </div>								  
									  <div class="media-left">
										    <a href="#">
										      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
										    </a>
									  </div>
									  <div class="media-body hidden-xs hidden-sm">
										    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
										    <span class="title-pink-begin-text" style="font-style: normal">Tecidos: Diferentes tipos e aplicações</span>
									  </div>
									  <span class="hidden-md hidden-lg" style="margin-top:15px; margin-bottom:35px; display: block;">
									  	<h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
										    <span class="title-pink-begin-text" style="font-style: normal">Tecidos: Diferentes tipos e aplicações</span>
									  </span>
								</div>	 	
								</div>	 											
							</div>	
							<div class="row">								
								<h5 style="display: block; background: #ef4060; color: white; float: left; padding: 2px; ">
									<a style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="#">Agenda completa</a>
								</h5>
							</div>				

					</div>
					
				</div>	
			</div>	
				<div class="row">
					<img style="display: block; margin-bottom:30px; margin-left: auto; margin-right: auto" src="{{asset('images/inscricao-button.png')}}">	
				</div>
					
	{{-- </div> --}}

 @endsection