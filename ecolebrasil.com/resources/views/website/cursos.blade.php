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
				      <div style="position: absolute; background-color: rgba(255, 255, 255, 0.5); width: 100%; height: 100%" ></div>
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
							<iframe style="margin-left:-30px; width: 100%; min-height: 350px" src="{{$curso->link_video }}"></iframe>
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

{{-- 						<h4 class="title-pink-begin-text">MINISTRANTES</h4>	
							<p class="gray-text">{!!$curso->ministrantes !!}</p>
						<hr> --}}
						<h4 class="title-pink-begin-text">MAIORES INFORMAÇÔES</h4>	
						<h5><b>{!!$curso->informacoes !!}</b></h5>
						<br>
						<h4 class="title-pink-begin-text">Ementa do Curso</h4>	
						<p class="gray-text">
							<a id='dwnldLnk' href="{{ $curso->ementa }}" download='ementa.pdf' style="display:none;" /> 					    
						    <a href="#" onclick="downloadPDF();" title='ementa.pdf'>Baixar Ementa</a>
						</p>
					</div>
					<div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1">
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
							{{-- <h4 class="title-pink-begin-text">AGENDA</h4> --}}
							{{-- @foreach($curso->agendas as $agenda)
									<div class="row">
										<div class="media">								  
											  <div class="media-left">
												    <a href="#">
												      <img style="max-height: 120px" class="media-object" src="{{$agenda->avatar}}" alt="{{ $agenda->descricao }}">
												    </a>
											  </div>
											  <div class="media-body hidden-xs hidden-sm">
												    <h5 class="media-heading gray-text-bold">{{$agenda->cidade}}</h5>
												    <span class="title-pink-begin-text" style="font-style: normal">{{$agenda->descricao}}</span>
											  </div>
											  <span class="hidden-md hidden-lg" style="margin-top:15px; margin-bottom:35px; display: block;">
											  	<h5 class="media-heading gray-text-bold">{{$agenda->cidade}}</h5>
												    <span class="title-pink-begin-text" style="font-style: normal">{{$agenda->descricao}}</span>
											  </span>
										</div>	 											
									</div>
							@endforeach --}}			
					</div>
					
				</div>	
			</div>	
			<div class="row">	
				<div class="col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-3">
					<h2 style="text-align: center; background: #ef4060; color: white; padding: 2px; ">
						<a style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="{{ route('agenda') }}">Agenda completa</a>
					</h2>
					
				</div>							
			</div>				
			<div class="row">
				<img style="display: block; margin-bottom:30px; margin-top:30px; margin-left: auto; margin-right: auto" src="{{asset('images/inscricao-button.png')}}">	
			</div>
					
	{{-- </div> --}}
<script type="text/javascript">
		window.downloadPDF = function downloadPDF() {

			var dlnk = document.getElementById('dwnldLnk');
			// dlnk.href = $("#ementa").val();

			dlnk.click();


			// alert('toma');
		}
</script>
 @endsection