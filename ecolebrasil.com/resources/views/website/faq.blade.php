@extends('layouts.website')

@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}
	h4{
		cursor: pointer;
	}
	.img-faq{
		width: 80%;
		display: block;
		margin: 0 auto;
		margin-top: 40px;
		margin-left: 50px;
	}
	.header-page-content{
		background-image: url('{{ asset('images/equipe.png')  }}')
	}
</style>
 <div class="row" style="margin: 0; padding: 0">
	<div class="col-md-12 header-page-content" style=""></div>
	<div class="col-md-12 header-page">
		<p class="gray-dark-color">DÚVIDAS FREQUENTES</p>
	</div>
 </div>
<div class="row no-padding-margin" style="text-align: justify; background: #fff; padding-bottom: 30px">
		<div class="col-md-3 col-md-offset-1 margin-top">
			<img class="img-faq" src="{{asset('images/faq.png')}}">
		</div>
		<div class="col-md-8 col-md-offset-0 col-xs-10 col-xs-offset-1 margin-top">
			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<p class="gray-text paragrafo-padrao">Reunimos aqui algumas das principais questões que permeiam a forma de trabalho e os cursos da Escola. Elas podem ajudar você a tirar dúvidas ou entender melhor como funcionamos.</p>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>
			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="gray-dark-color titulo-padrao upper-case bold" style="font-weight: bold; font-size: 11pt" data-toggle="collapse" data-target="#question1">O QUE É CONSULTORIA DE IMAGEM?</h4>
					<span id="question1" class="collapse">
						<p class="gray-text">O exercício da consultoria de imagem começou nos Estados Unidos na década de 1970. Inicialmente, consistia em definir as cores que melhor se adaptavam a uma pessoa e como harmonizá-las. Johannes Itten desenvolveu o estudo da colorimetria seguido por Suzanne Caygille Carole Jackson e introduziram o método das 4 estações.</p>
						<p class="gray-text">Há mais de 10 anos, profissionais de diferentes áreas, como psicologia e comunicação, tem expandido a compreensão da imagem, voltando-se a um olhar de maior impacto na real mudança da pessoa e na sua auto-estima. A missão dessa profissão é maximizar a imagem pessoal e profissional de uma pessoa. Sua ação é sistêmica e leva em conta a imagem, o físico, o comportamento e o potencial das pessoas auxiliando-as a alcançar seus objetivos.</p>
					</span>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="gray-dark-color titulo-padrao upper-case bold" style="font-weight: bold; font-size: 11pt" data-toggle="collapse" data-target="#question2">A duração da formação é suficiente para me preparar para o mercado de trabalho?</h4>
					<span class="collapse" id="question2">
						<p class="gray-text">Embora utilizados como sinônimos em muitos momentos, os três termos, no que se refere ao processo de atuação profissional, são diferentes entre si:</p>
						<p class="gray-text"><b>Consultoria de Imagem:</b> é um processo de mudança completa, apoiado em um estudo e técnicas aprofundadas. Promove uma mudança de maior abrangência, profunda e duradoura. Muitas vezes envolve profissionais de áreas complementares, como cabelo, maquiagem ou morfopsicologia.</p>
						<p class="gray-text"><b>PersonalStylist:</b> a diferença passa por tratar-se de um processo focado e especifico, sem profundidade e continuidade, que refere-se a um momento ou situação de demanda. Pode ser a um evento, uma festa, uma reunião, etc. onde o cliente busca uma nova perspectiva pessoal de forma pontual.</p>
						<p class="gray-text"><b>Coaching de Imagem:</b> orienta o profissional a trabalhar com técnicas que potencializem e explorem de forma aprofundada todo o potencial e capacidade de mudança do cliente. Tem como foco também o objetivo de imagem e está centrado nas mudanças internas promovidas do cliente, onde ele é o personagem principal do processo de consultoria.</p>
					</span>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="gray-dark-color titulo-padrao upper-case bold" style="font-weight: bold; font-size: 11pt" data-toggle="collapse" data-target="#question3">A formação é obrigatória?</h4>
					<span id="question3" class="collapse">
						<p class="gray-text">No Brasil, não existe um órgão que regularize a atuação. De qualquer forma, a formação é, sim, fundamental para quem deseja atuar com seriedade no mercado de trabalho. Uma formação oferece todas as técnicas e metodologias necessárias para o atendimento em Consultoria de Imagem.</p>
					</span>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="gray-dark-color titulo-padrao upper-case bold" style="font-weight: bold; font-size: 11pt" data-toggle="collapse" data-target="#question4">A formação de Consultoria de Imagem é suficiente para atender de forma completa o cliente?</h4>
					<span id="question4" class="collapse">
						<p class="gray-text">O olhar da Consultoria de Imagem é específico para a vestimenta e analisa a relação entre a pessoa, sua forma de vestir-se e a imagem transmitida, sem considerar elementos como cabelo, rosto ou maquiagem. O processo passa por teste de cores, estilo, personalidade, comportamento e tipo físico. Já, a formação em Mosfopsicologia entra a fundo nas questões que permeiam o rosto e o cabelo. São cursos independentes e complementares.</p>
					</span>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="gray-dark-color titulo-padrao upper-case bold" style="font-weight: bold; font-size: 11pt" data-toggle="collapse" data-target="#question5">A metodologia, conteúdos e materiais são iguais as da sede em Paris?</h4>
					<span id="question5" class="collapse">
						<p class="gray-text">Sim, toda a técnica, metodologia e materiais didáticos são idênticos aos aplicados na nossa sede em Paris. O mesmo vale para a renovação do conteúdo e as inovações que são feitas a cada ano.</p>
					</span>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="gray-dark-color titulo-padrao upper-case bold" style="font-weight: bold; font-size: 11pt" data-toggle="collapse" data-target="#question6">RECEBO ALGUM SUPORTE APÓS A CONCLUSÇAO DA FORMAÇÃO?</h4>
					<span id="question6" class="collapse">
						<p class="gray-text">A Escola oferece um curso complementar, Negócios de Estilo, para que o profissional aprenda com consistência a formatar seu negócio de Consultoria de imagem. Todos os alunos também passam a ter, após a conclusão de qualquer curso feito na Ecole Brasil, o acesso restrito a materiais de apoio profissional e novidades.</p>
					</span>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>
		</div>
 </div>
 @endsection