@extends('layouts.website')

@section('content')
<style type="text/css">
		@media screen and (max-width: 768px) {
				.video-index{
					margin: 0;
					padding: 0;
					border: none;
					margin-top: -1px;
					border-radius: 0px;
					width: 100%;
					height: auto;
				}
		}
</style>
<div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
			<div style="background-color:rgba(239, 64, 96, 1);" id="carousel-index-ecole" class="carousel slide" data-ride="carousel">
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
					    	{!!$banner->item!!}
					    @endif
				    </div>
				  @endforeach
			  </div>

			  @if($i > 1)
				  <a class="left carousel-control" href="#carousel-index-ecole" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-index-ecole" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				@endif
			</div>
	  </div>



 </div>
 <div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12 hidden-xs hidden-sm" style="margin: 0; padding: 0">
	    <a class="video-index thumbnail ">
	    	 {{-- background: rgba(239, 64, 96, .1); --}}
	    	<p class="manifesto" >
	    		<label>MANIFESTO</label><br>
	    		Não é a roupa, é a pessoa. Não é sobre saber o que vestir, é sobre sentir. Ser. Não é só a cor, é o que ela representa para a alma. Não existe certo ou errado, existe o que te faz feliz. Você está satisfeito com o que vê no espelho? Essa imagem te traduz? Se cada pessoa tem uma identidade não faz sentido padronizar. Rótulos não cabem mais. Faz sentido ajudar as pessoas a expressarem quem são, se conhecerem, aceitarem, o diferente é o que nos encanta, vamos além do estilo e é essa a nossa missão com cada consultora que formamos. A gente quer que a nova regra seja ser livre, usar o que te faz bem não o que está na moda. A Ecole pensa no estilo e a moda como uma representação autêntica de autoconhecimento e personalidade. A gente quer que "ser você" seja a regra. Que cada uma das consultoras que a gente forma utilize as técnicas e a nossa metodologia para ajudar as pessoas a se permitirem ser para vestir com liberdade e respeito a si mesmo. Menos rótulos, menos feminino e masculino, menos pode e não pode, menos sim e não. Queremos ajudar as pessoas a encontrarem a sua essência pela vestimenta. A respeitarem a moda que faz sentido, que gera identidade. Porque no fundo, é isso: ser mais a gente meso para vestir o que nos representa.
		    </p>
	      	<img style="width: 100%" src="{{ asset('images/manifesto_screen.png') }}" alt="...">
	    </a>
	  </div>

	  <div class="col-md-12 hidden-md hidden-lg" style="margin: 0; padding: 0" >
	    <a class="video-index thumbnail ">
	    	 {{-- background: rgba(239, 64, 96, .1); --}}
	    	<p class="manifesto_mobile" >
	    		<label style="">MANIFESTO</label><br>
	    		Não é a roupa, é a pessoa. Não é sobre saber o que vestir, é sobre sentir. Ser. Não é só a cor, é o que ela representa para a alma. Não existe certo ou errado, existe o que te faz feliz. Você está satisfeito com o que vê no espelho? Essa imagem te traduz? Se cada pessoa tem uma identidade não faz sentido padronizar. Rótulos não cabem mais. Faz sentido ajudar as pessoas a expressarem quem são, se conhecerem, aceitarem, o diferente é o que nos encanta, vamos além do estilo e é essa a nossa missão com cada consultora que formamos. A gente quer que a nova regra seja ser livre, usar o que te faz bem não o que está na moda. A Ecole pensa no estilo e a moda como uma representação autêntica de autoconhecimento e personalidade. A gente quer que "ser você" seja a regra. Que cada uma das consultoras que a gente forma utilize as técnicas e a nossa metodologia para ajudar as pessoas a se permitirem ser para vestir com liberdade e respeito a si mesmo. Menos rótulos, menos feminino e masculino, menos pode e não pode, menos sim e não. Queremos ajudar as pessoas a encontrarem a sua essência pela vestimenta. A respeitarem a moda que faz sentido, que gera identidade. Porque no fundo, é isso: ser mais a gente meso para vestir o que nos representa.
		    </p>
	      	<img style="width: 100%" src="{{ asset('images/manifesto_mobile.png') }}" alt="...">
	    </a>
	  </div>
 </div>
 <div class="row">
 		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 			<div class="row">
 				<h2 style="text-align: center; font-style: normal" class="title-pink-begin-text">Cursos</h2>
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
						<div class="row">
							<div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
								<h3 style="text-align: center; background: #ef4060; color: white; padding: 2px; ">
									<a style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="{{ route('pagamento', ['curso_id', $curso->id]) }}">Inscrever-se</a>
								</h3>
							</div>
						</div>
	 				</div>
	 			@endforeach
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
