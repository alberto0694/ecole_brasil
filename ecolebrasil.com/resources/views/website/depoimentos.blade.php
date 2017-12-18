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
<div class="row" style="margin: 0; padding: 0; ">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	    	{{-- <div style="position: absolute; background-color: rgba(255, 255, 255, 0.5); width: 100%; height: 100%" ></div> --}}
	      <img src="{{ asset('images/banner-depoimentos.png') }}" alt="...">
	    </a>
	  </div>
 </div>
 <div class="row">
 	<div class="col-md-10 col-md-offset-1 ">
 		<h3 style="margin-left: 10px">DEPOIMENTOS</h3>
 		<hr>
 			<?php $i = 0;?>
 			@foreach($depoimentos as $depoimento)

 							@if( ($i % 2) == 0)
									<div class="col-md-12" style="margin-top: 15px">
											<div class="media-left">								  
												  <div class="media-left">
													      <img style="width: 350px" class="media-object" src="{{$depoimento->avatar}}" alt="{{ $depoimento->autor }}">
												  </div>
												  <div class="media-body"> 
													    <h4 class="media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">{!! $depoimento->descricao_html !!}
													    </h4>
													    <i class="hidden-xs hidden-sm">{{$depoimento->autor}}</i>
													    <hr>
												  </div>
												  <h5 class="media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">{!! $depoimento->descricao_html !!}
												  </h5>
												  <i class="hidden-md hidden-lg">{{$depoimento->autor}}</i>
											</div> 
									</div>
							@else			
									<div class="col-md-12" style="margin-top: 25px">
											<div class="media-left">								  
												  <div class="media-body"> 
													    <h5 class="media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">{!! $depoimento->descricao_html !!}
													    </h5>
													    <i class="hidden-xs hidden-sm">{{$depoimento->autor}}</i>
													    <hr>
												  </div>
												  <div class="media-left">
													      <img style="width: 250px" class="media-object" src="{{$depoimento->avatar}}" alt="{{ $depoimento->autor }}">
												  </div>
												  <h5 class="media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">{!! $depoimento->descricao_html !!}
												  </h5>
												  <i class="hidden-md hidden-lg">{{$depoimento->autor}}</i>
											</div> 
									</div> 
							@endif
							<?php $i++; ?>
			@endforeach
		 	{{-- <div class="col-md-12" style="margin-top: 15px">
					<div class="media">								  
						  <div class="media-left">
							      <img style="width: 250px" class="media-object" src="{{asset('images/nathalia.png')}}" alt="...">
						  </div>
						  <div class="media-body"> 
							    <h5 class="media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">“Conhecer o trabalho da Vandressa e a Escola foi um grande marco em minha vida profissional. Descobrir que a minha paixão pelo universo da beleza e da moda poderia se tornar uma profissão e que além de eu me redescobrir como mulher poderia ajudar outras pessoas a se encontrarem, foi simplesmente fantástico. Através da formação de consultoria de imagem e estilo pude me conhecer na essência, aceitar como sou e me libertar de padrões alheios. Essa “transformação” permitiu revelar a minha melhor versão ao universo e proporcionou conhecimento e ferramentas para que eu contribua com propriedade no processo de autoconhecimento de pessoas que buscam resgatar ou aumentar sua estima, dar um “UP” no visual e elevar suas relações pessoais e profissionais através de sua imagem.”
							    </h5>
							    <i class="hidden-xs hidden-sm">Nathalia Bernardes, aluna da formação em Consultoria de Imagem.</i>
							    <hr>
						  </div>
						  <h5 class="media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">“Conhecer o trabalho da Vandressa e a Escola foi um grande marco em minha vida profissional. Descobrir que a minha paixão pelo universo da beleza e da moda poderia se tornar uma profissão e que além de eu me redescobrir como mulher poderia ajudar outras pessoas a se encontrarem, foi simplesmente fantástico. Através da formação de consultoria de imagem e estilo pude me conhecer na essência, aceitar como sou e me libertar de padrões alheios. Essa “transformação” permitiu revelar a minha melhor versão ao universo e proporcionou conhecimento e ferramentas para que eu contribua com propriedade no processo de autoconhecimento de pessoas que buscam resgatar ou aumentar sua estima, dar um “UP” no visual e elevar suas relações pessoais e profissionais através de sua imagem.”
						  </h5>
						  <i class="hidden-md hidden-lg">Nathalia Bernardes, aluna da formação em Consultoria de Imagem.</i>
					</div> 
			</div> --}}		
{{-- 		 	<div class="col-md-12" style="margin-top: 15px">
					<div class="media">								  
						  <div class="media-left">
							      <img style="width: 250px" class="media-object" src="{{asset('images/matheus.png')}}" alt="...">
						  </div>
						  <div class="media-body">
							    <h5 class="media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">"Aprender, segundo o dicionário, significa ficar sabendo, tomando conhecimento; isto resume bem a minha experiência com a escola. Ter tido a oportunidade em ser o primeiro aluno homem a formar-se com a EcoleSupérieure de Relooking aqui no Brasil é algo muito especial, principalmente quando vemos no mercado a diferença que um bom aprendizado te propicia e o peso de ter um certificado internacional agregado as minhas experiências e demais formações profissionais. Acredito na educação e acredito na capacidade que o Brasil tem, por isso me sinto um privilegiado em ter tido a oportunidade de aprender toda a formação que recebi."</h5>
							    <i class="hidden-xs hidden-sm">Matheus Rocca Vecchio Almeida, aluno da formação em Consultoria de Imagem.</i>
							    <hr>
						  </div>
						  <h5 class="media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">"Aprender, segundo o dicionário, significa ficar sabendo, tomando conhecimento; isto resume bem a minha experiência com a escola. Ter tido a oportunidade em ser o primeiro aluno homem a formar-se com a EcoleSupérieure de Relooking aqui no Brasil é algo muito especial, principalmente quando vemos no mercado a diferença que um bom aprendizado te propicia e o peso de ter um certificado internacional agregado as minhas experiências e demais formações profissionais. Acredito na educação e acredito na capacidade que o Brasil tem, por isso me sinto um privilegiado em ter tido a oportunidade de aprender toda a formação que recebi."</h5>
							    <i class="hidden-md hidden-lg">Matheus Rocca Vecchio Almeida, aluno da formação em Consultoria de Imagem.</i>
					</div> 		
		 	</div>
		 	<div class="col-md-12" style="margin-top: 15px">
					<div class="media">								  
						  <div class="media-left">
							      <img style="width: 250px" class="media-object" src="{{asset('images/cris.png')}}" alt="...">
						  </div>
						  <div class="media-body">
							    <h5 class="media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">“O Método francês, ainda é considerado o mais atual e eficiente para Consultoria de Imagem e Relooking. Em vista disso, procurei escolas que pudessem me desenvolver tecnicamente e aprimorar as minhas habilidades para atuar  com segurança e construir uma carreira consistente. É um mercado que vem crescendo e se destacando. Existem várias ofertas de cursos no Brasil e fora dele. O que me fez optar pela Ecole foi a proposta diferenciada em trabalhar com a essência do indivíduo, ou seja, identificando através da personalidade algo maior do que simplesmente vesti-lo.Desenvolvemos técnicas de Coaching próprias para aplicação na consultoria de imagem e estilo. É necessário objetivar com o cliente o resultado a ser alcançado através de metas trazidas por ele. Feito isso, busquei mais conhecimento através do Curso de Visagismo e Morfopsicologia do Rosto, onde fazemos uma leitura facial através dos traços existentes no rosto do cliente. Esses traços não só ajudam a identificar a personalidade do cliente como o ajudarão a se conhecer melhor, por que age de um jeito que ainda não identificou o motivo. Porque suas feições são assim e que não necessita de plástica. Como ele pode trabalhar melhor a sua comunicação com as pessoas agora que se conhece e ainda, para mulheres como a morfomaquigem facilita a sua apresentação para o complento da sua imagem de sucesso.”</h5>
							    <i class="hidden-xs hidden-sm">Cris Guimas, aluna da formação em Morfopsicologia e Consultoria de Imagem.</i>
							    <hr>
						  </div>
							    <h5 class="media-heading hidden-md hidden-lg"" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">“O Método francês, ainda é considerado o mais atual e eficiente para Consultoria de Imagem e Relooking. Em vista disso, procurei escolas que pudessem me desenvolver tecnicamente e aprimorar as minhas habilidades para atuar  com segurança e construir uma carreira consistente. É um mercado que vem crescendo e se destacando. Existem várias ofertas de cursos no Brasil e fora dele. O que me fez optar pela Ecole foi a proposta diferenciada em trabalhar com a essência do indivíduo, ou seja, identificando através da personalidade algo maior do que simplesmente vesti-lo.Desenvolvemos técnicas de Coaching próprias para aplicação na consultoria de imagem e estilo. É necessário objetivar com o cliente o resultado a ser alcançado através de metas trazidas por ele. Feito isso, busquei mais conhecimento através do Curso de Visagismo e Morfopsicologia do Rosto, onde fazemos uma leitura facial através dos traços existentes no rosto do cliente. Esses traços não só ajudam a identificar a personalidade do cliente como o ajudarão a se conhecer melhor, por que age de um jeito que ainda não identificou o motivo. Porque suas feições são assim e que não necessita de plástica. Como ele pode trabalhar melhor a sua comunicação com as pessoas agora que se conhece e ainda, para mulheres como a morfomaquigem facilita a sua apresentação para o complento da sua imagem de sucesso.”</h5>
							    <i class="hidden-md hidden-lg">Cris Guimas, aluna da formação em Morfopsicologia e Consultoria de Imagem.</i>						  
					</div> 		
		 	</div>
		 	<div class="col-md-12" style="margin-top: 15px">
					<div class="media">								  
						  <div class="media-left">
							      <img style="width: 250px" class="media-object" src="{{asset('images/leila.png')}}" alt="...">
						  </div>
						  <div class="media-body">
							    <h5 class="media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">Buscando um diferencial para o seu trabalho como designer de joias, se especializou em cursos de Coaching de Imagem e Visagismo com ênfase em Morfopsicologia pela escola francesa EcoleSupérieure de Relooking - Paris. "Estudar na EcoleSupérieure de Relooking é ter a oportunidade de receber formação de qualidade, com metodologia de ensino e material diferenciados com professores treinados em Paris, onde tu receberás sua certificação internacional na escola que é reconhecida ainda na França, pela Comissão Nacional de Centro Profissional (CNCP). Minha formação na Ecole é um importante diferencial para o meu trabalho que prima pela exclusividade e qualidade nos projetos que desenvolvo, pois se o estilo do meu cliente é único, o projeto da sua joia também será e isso a Ecole me ensinou".</h5>
							    <i class="hidden-xs hidden-sm">Leila Fraga, alunas das formações em Consultoria de Imagem e Mosfopsicologia.</i>
							    <hr>
						  </div>
						    <h5 class="media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">Buscando um diferencial para o seu trabalho como designer de joias, se especializou em cursos de Coaching de Imagem e Visagismo com ênfase em Morfopsicologia pela escola francesa EcoleSupérieure de Relooking - Paris. "Estudar na EcoleSupérieure de Relooking é ter a oportunidade de receber formação de qualidade, com metodologia de ensino e material diferenciados com professores treinados em Paris, onde tu receberás sua certificação internacional na escola que é reconhecida ainda na França, pela Comissão Nacional de Centro Profissional (CNCP). Minha formação na Ecole é um importante diferencial para o meu trabalho que prima pela exclusividade e qualidade nos projetos que desenvolvo, pois se o estilo do meu cliente é único, o projeto da sua joia também será e isso a Ecole me ensinou".</h5>
						    <i class="hidden-md hidden-lg">Leila Fraga, alunas das formações em Consultoria de Imagem e Mosfopsicologia.</i>						  
					</div> 		
		 	</div>
		 	<div class="col-md-12" style="margin-top: 15px">
					<div class="media">								  
						  <div class="media-left">
							      <img style="width: 250px" class="media-object" src="{{asset('images/veronica.png')}}" alt="...">
						  </div>
						  <div class="media-body">
							    <h5 class="media-heading hidden-sm hidden-xs" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">A experiência de realizar o curso pela EcoleSuperièure de Relooking foi espetacular. A didática é maravilhosa. Hoje me sinto plenamente preparada para atender pois tendo em minha mente claramente todas as etapas necessárias para um processo de relooking eficaz e gratificante para o cliente! Os grandes diferenciais são as técnicas de coaching e o aprendizado do teste revelador da colorimetria pessoal, que são fundamentais para um trabalho exclusivo e diferenciado no mercado de trabalho. A professora é muito competente, transmitindo segurança no que transmite e assim gerando um aprendizado bastante sólido. Além disso é acessível e disposta a participar ativamente de todo o processo de aprendizado e estruturação da carreira de cada aluna – incentivando e se colocando à disposição mesmo após o curso. Estou muito feliz pela oportunidade que tive e hoje estou muito mais segura da minha competência! Obrigada àEcole e a querida Vandressa!</h5>
							    <i class="hidden-sm hidden-xs">Verônica Tavaniello, aluna da formação em Consultoria de Imagem.</i>
							    <hr>
						  </div>
							    <h5 class="media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">A experiência de realizar o curso pela EcoleSuperièure de Relooking foi espetacular. A didática é maravilhosa. Hoje me sinto plenamente preparada para atender pois tendo em minha mente claramente todas as etapas necessárias para um processo de relooking eficaz e gratificante para o cliente! Os grandes diferenciais são as técnicas de coaching e o aprendizado do teste revelador da colorimetria pessoal, que são fundamentais para um trabalho exclusivo e diferenciado no mercado de trabalho. A professora é muito competente, transmitindo segurança no que transmite e assim gerando um aprendizado bastante sólido. Além disso é acessível e disposta a participar ativamente de todo o processo de aprendizado e estruturação da carreira de cada aluna – incentivando e se colocando à disposição mesmo após o curso. Estou muito feliz pela oportunidade que tive e hoje estou muito mais segura da minha competência! Obrigada àEcole e a querida Vandressa!</h5>
							    <i class="hidden-md hidden-lg">Verônica Tavaniello, aluna da formação em Consultoria de Imagem.</i>						  
					</div> 		
		 	</div> --}}
	</div>
 </div>
 <div class="row" style="margin-top: 30px">&nbsp;</div>
@endsection
