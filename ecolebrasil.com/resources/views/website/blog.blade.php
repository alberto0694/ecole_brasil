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
		      <img src="{{ asset('images/banner-blog.png') }}" alt="...">
		    </a>
		  </div>
	 </div>
	<div class="row" style="margin-top: 30px; margin-bottom: 30px">
		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<div class="row" style="margin-top: 30px">
				<h3 class="title-pink-begin-text">MORFOPSICOLOGIA: A FERRAMENTA DO AUTOCONHECIMENTO</h3>
				<i><label>POR ANDREA FUCHTER</label></i>
                <p class="gray-text">
Considerada atualmente um dos instrumentos de diagnóstico psicológico mais precisos que existem, a Morfopsicologia é uma ciência humana fundamentada na leitura das linhas da face, que nada tem a ver com adivinhações, mas sim com uma técnica, onde é possível identificar a personalidade das pessoas através das características do rosto.	                	
                </p>
                <a  class="title-pink-begin-text" href="#"><i>Continue lendo...</i></a>
                <hr>					
			</div>	
			<div class="row" style="margin-top: 30px">
				<h3 class="title-pink-begin-text">ADVANCED STYLE</h3>
				{{-- <i><label>POR ANDREA FUCHTER</label></i> --}}
                <p class="gray-text">
Estilosas e cheias de personalidade as vovós de hoje em dia sabem muito bem afirmar suas escolhas e “bancá-las” independente da opinião alheia, afinal será que isso é relevante para elas? 
 
Essa geração que agora chega à terceira idade é a geração do baby boom. Elas são experimentadoras, desbravadoras, já mudaram muito o mundo (e continuam mudando). Seus hábitos e direcionamentos de consumo são, portanto, inovadores para essa faixa etária.               	
                </p>
                <a  class="title-pink-begin-text" href="#"><i>Continue lendo...</i></a>
                <hr>					
			</div>
						

		</div>
	</div>
@endsection