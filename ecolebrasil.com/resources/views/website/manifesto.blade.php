@extends('layouts.website')
@section('content')
<style type="text/css">
	.header-page-content{
		background-image: url('{{ asset('images/manifesto.png')  }}');
	}

	.font-pink{
		color:#ee2c59;
	}

	.font-gray{
		color:#939598;
	}
</style>
 <div class="row" style="margin: 0; padding: 0">
	<div class="col-md-12 header-page-content" style=""></div>
	<div class="col-md-12 header-page">
		<p class="gray-dark-color">MANIFESTO</p>
	</div>
 </div>
 <div class="row padding-20" style="margin-bottom: 30px; text-align: center">
 		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 			{{-- <h3 align="center" class="title-pink-begin-text">MANIFESTO</h3> --}}
 			<div class="row margin-top padding-20">
	    		<p class="font-gray titulo-padrao" style="text-align: center; font-weight: bold">
	    			Não é a roupa, é a pessoa.<br>
	    			<span class="font-pink">Não é sobre saber o que vestir, é sobre sentir. Ser.</span><br>
	    			Não é só a cor, é o que ela representa para a alma. <br>
	    			<span class="font-pink">Não existe certo ou errado, existe o que te faz feliz.</span><br>
	    			Você está satisfeito com o que vê no espelho? Essa imagem te traduz? <br>
	    			Se cada pessoa tem uma identidade não faz sentido padronizar. <br>
	    			<span class="font-pink">Rótulos não cabem mais.</span> Faz sentido ajudar as pessoas a <br>
	    			expressarem quem são, se conhecerem, aceitarem, o diferente é <br>
	    			o que nos encanta, <span class="gray-dark-color">vamos além do estilo e é essa a nossa missão com <br>
	    			cada consultora que formamos.</span> A gente quer que a nova regra <br>
	    			seja ser livre, <span class="gray-dark-color">usar o que te faz bem não o que está na moda. </span><br>
	    			A Ecole pensa no estilo e a moda como uma representação autêntica <br>
	    			de autoconhecimento e personalidade. <br>
	    			<span class="font-pink">A gente quer que "ser você" seja a regra.</span> <br>
	    			Que cada uma das consultoras que a gente forma utilize <br>
	    			as técnicas e a nossa metodologia para ajudar as pessoas a se <br>
	    			permitirem ser para vestir com liberdade e respeito a si mesmo. <br>
	    			Menos rótulos, menos feminino e masculino, menos pode e não pode, menos sim e não. <br>
	    			<span class="gray-dark-color">Queremos ajudar as pessoas a encontrarem a sua essência pela vestimenta. </span><br>
	    			A respeitarem a moda que faz sentido, que gera identidade. <br>
	    			<span class="font-pink">Porque no fundo, é isso: ser mais a gente mesmo para vestir o que nos representa.</span>
		    	</p>
	  		</div>
 		</div>
 </div>
@endsection