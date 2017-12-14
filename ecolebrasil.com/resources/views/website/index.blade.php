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
<div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	      <img src="{{ asset('images/video-home.png') }}" alt="...">
	    </a>
	  </div>
 </div>
 <div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	      	<img src="{{ asset('images/manifesto.png') }}" alt="...">
{{-- 	      	<h2 class="ser-para-vestir">#SERPARAVESTIR</h2>
            <ul class="social"  style="">
			    <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
			    <li> <a href="#"> <i class="fa fa-instagram">   </i> </a> </li>
            </ul>	 --}}	    
	    </a>
	  </div>
 </div>
 <div class="row">
 		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 			<div class="row">
 				<h2 style="float: left; font-style: normal" class="title-pink-begin-text">Agenda &nbsp;&nbsp;</h2>
 				<h4 style="float: left; margin-top: 32px; font-weight: normal" class="title-pink-begin-text"><i>Cursos e Workshops</i></h4>
 			</div>
 			<div class="row">
 				<hr>
 			</div> 			
 			<div class="row">
 				<h2 class="title-pink-begin-text"><i>JULHO</i></h2>
 			</div>
 			<div class="row">
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div>
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div> 								
 			</div> 		
			<div class="row" style="margin-top: 10px">
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div>
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div> 								
 			</div> 	
 			<hr>
 			<div class="row">
 				<h2 class="title-pink-begin-text"><i>AGOSTO</i></h2>
 			</div>
 			<div class="row">
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div>
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div> 								
 			</div> 		
			<div class="row" style="margin-top: 10px">
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div>
 				<div class="col-md-6">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="{{asset('images/icone_agenda.png')}}" alt="...">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading days-agenda">05 e 06</h4>
					    <h5 class="media-heading gray-text-bold">PORTO ALEGRE/RS</h5>
					    <span class="descricao-day-agenda">Tecidos: Diferentes tipos e aplicações</span>
					  </div>
					</div>	 					
 				</div> 								
 			</div> 
 			<div class="row">
 				<hr style="margin-top: 70px">
 				<h3 style="text-align: center; margin-top: -50px"><a href="{{route('index')}}">
 					<img src="{{asset('images/agenda-button.png')}}">
 				</a></h3>
 			</div>
 		</div>
 </div>
@endsection