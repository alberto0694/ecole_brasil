@extends('application')

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
	      	<img src="{{ asset('images/manifesto.png') }}" alt="...">	    
	    </a>
	  </div>
 </div>
<div class="row">
	  <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales, quam sed pretium pharetra, urna nisi iaculis ante, et convallis nulla ante ac lacus. Praesent dignissim, nibh eu aliquet auctor, turpis purus sodales purus, aliquet accumsan lorem mi quis velit. Fusce eu elementum purus. Curabitur volutpat sapien vel mauris elementum tempor. Suspendisse iaculis diam dui, vehicula ultrices purus suscipit et. Phasellus congue nisl est, ut lacinia nisi vehicula vel. Sed luctus in enim non egestas. Ut sit amet tincidunt sem. Aliquam ultrices rutrum eros, non tincidunt nunc congue a. Fusce eu imperdiet leo.</p>
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
 				<h2 style="float: left">Agenda &nbsp;&nbsp;</h2>
 				<h4 style="float: left; margin-top: 30px"><i>Cursos e Workshops</i></h4>
 				<hr>
 			</div>
 			<div class="row">
 				<h2>JULHO</h2>
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
					  </div>
					</div>	 					
 				</div> 								
 			</div> 	
 			<hr>
 			<div class="row">
 				<h2>AGOSTO</h2>
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
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
					    <h4 class="media-heading">05 e 06</h4>
					    <h5 class="media-heading">PORTO ALEGRE/RS</h5>
					    Tecidos: Diferentes tipos e aplicações
					  </div>
					</div>	 					
 				</div> 								
 			</div> 
 			<div class="row">
 				<hr>
 				<h3 style="text-align: center"><a href="{{route('index')}}">Agenda Completa</a></h3>
 			</div>
 		</div>
 </div>
@endsection