@extends('layouts.website')
@section('content')
<style type="text/css">
	.video-index{
		padding: 0;
		margin: 0;
	}
	.header-page-content{
		background-image: url('{{ asset('images/manifesto.png')  }}');
	}
</style>
 <div class="row" style="margin: 0; padding: 0">
	<div class="col-md-12 header-page-content" style=""></div>
	<div class="col-md-12 header-page">
		<p class="gray-dark-color">MANIFESTO</p>
	</div>
 </div>
 <div class="row" style="margin-bottom: 30px; text-align: center">
 		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 			{{-- <h3 align="center" class="title-pink-begin-text">MANIFESTO</h3> --}}
 			<div class="row margin-top padding-20">
	    		<p class="gray-dark-color" style="text-align: justify; font-size: 14pt ">Não é a roupa, é a pessoa. Não é sobre saber o que vestir, é sobre sentir. Ser. Não é só a cor, é o que ela representa para a alma. Não existe certo ou errado, existe o que te faz feliz. Você está satisfeito com o que vê no espelho? Essa imagem te traduz? Se cada pessoa tem uma identidade não faz sentido padronizar. Rótulos não cabem mais. Faz sentido ajudar as pessoas a expressarem quem são, se conhecerem, aceitarem, o diferente é o que nos encanta, vamos além do estilo e é essa a nossa missão com cada consultora que formamos. A gente quer que a nova regra seja ser livre, usar o que te faz bem não o que está na moda. A Ecole pensa no estilo e a moda como uma representação autêntica de autoconhecimento e personalidade. A gente quer que "ser você" seja a regra. Que cada uma das consultoras que a gente forma utilize as técnicas e a nossa metodologia para ajudar as pessoas a se permitirem ser para vestir com liberdade e respeito a si mesmo. Menos rótulos, menos feminino e masculino, menos pode e não pode, menos sim e não. Queremos ajudar as pessoas a encontrarem a sua essência pela vestimenta. A respeitarem a moda que faz sentido, que gera identidade. Porque no fundo, é isso: ser mais a gente mesmo para vestir o que nos representa.
		    	</p>
	  		</div>
 		</div>
 </div>
@endsection