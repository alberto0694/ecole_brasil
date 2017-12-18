@extends('layouts.website')

@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}
</style>
<div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
			<div id="carousel-index-ecole" class="carousel slide" data-ride="carousel">
				<?php 	$i = 0;
						$class = "active";
				?>

				  <div class="carousel-inner">
				  	@foreach($banners as $banner)
					    @if($i > 0)
					    	<?php $class = ""; ?>
					    @endif
					    <?php $i++; ?>
					    <div class="item <?php echo $class; ?>">
						    @if($banner->ativo == 1)
						    	<a href="{{ $banner->link_url }}"><img src="{{ $banner->imagem }}" alt="" style="width: 100%; display: block;"></a>
						    @endif
					    </div>
					  @endforeach
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#carousel-index-ecole" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-index-ecole" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>		    
	  </div>


  
 </div>
 <div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    
	    <a href="#" class="video-index thumbnail ">
	      	<img src="{{ asset('images/manifesto.png') }}" alt="...">	    
	    </a>

	  </div>
 </div>
 <div class="row">
 		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 			<div class="row">
 				<h2 style="float: left; font-style: normal" class="title-pink-begin-text">Cursos e Workshops</h2>
 				{{-- <h4 style="float: left; margin-top: 32px; font-weight: normal" class="title-pink-begin-text"><i>Cursos e Workshops</i></h4> --}}
 			</div>
 			<div class="row">
 				<hr>
 			</div> 			
 			<div class="row">
 				
 			</div>
 			
 			<div class="row">
 				{{-- <h2 class="title-pink-begin-text"><i>JULHO</i></h2> --}}
 			</div>
 			<div class="row">
 				@foreach($cursos as $curso)
	 				<div class="col-md-6 col-xs-12">
	 					<a href="{{ route('cursos', $curso->id) }}"><img style=" margin: 0 auto; display: block; width: 65%; " src="{{ $curso->card }}"></a>
	 				</div>
	 			@endforeach
	 			{{-- @foreach($agendas as $agenda)
			 				<div class="col-md-6" style="margin-top: 10px">
								<div class="media">
								  <div class="media-left">								  	
								    <a href="{{ route('cursos', $agenda->curso->id) }}">
								      <img style="max-width: 122px" class="media-object" src="{{$agenda->avatar}}" alt="{{ $agenda->descricao }}">
								    </a>
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading days-agenda">{{ $agenda->datas }}</h4>
								    <h5 class="media-heading gray-text-bold">{{$agenda->cidade}}</h5>
								    <span class="descricao-day-agenda">{{ $agenda->descricao }}</span>
								  </div>
								</div>	 					
			 				</div>		
	 			@endforeach --}}
	 		</div>		
 			<div class="row">
 				<hr style="margin-top: 50px">
 				<h3 style="text-align: center; margin-top: -50px"><a href="{{route('agenda')}}">
 					<img src="{{asset('images/agenda-button.png')}}">
 				</a></h3>
 			</div>
 		</div>
 </div>
@endsection