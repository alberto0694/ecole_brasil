@extends('layouts.website')
@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}

	.header-page-content{
		background-image: url('{{ asset('images/ecole_superierederelooking.png')  }}')
	}

	p{
		text-align: justify;
	}

	.superirere-ecole{
		padding-left: 0;
		margin-left: 16.1%;
	}

	@media screen and (max-width: 768px) {
		.superirere-ecole{
			padding-left: 0;
			margin-left: 0;
		}
	}
</style>
<div class="row margin-top" style="margin: 0; padding: 0">
	<div class="col-md-12 header-page-content" style=""></div>
	<div class="col-md-12 header-page">
		<p class="gray-dark-color">ECOLE SUPÉRIEURE DE RELOOKING</p>
	</div>
</div>
<div class="row margin-top">
	  <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
	    <p style="text-align: justify; font-weight: bold" class="gray-text paragrafo-padrao">A Ecole Supérieure de Relooking foi fundada em Paris, berço mundial das artes, da cultura, cidade que abraça estilos diversos. A Ecole carrega a autenticidade e a paixão pelas pessoas na essência. Especialista em cursos e formações relacionados a imagem pessoal, psicologia e empreendedorismo, reúne expertise, técnicas e metodologias diferenciadas, multiplicando em cada aluno o que carrega como maior crença: olhar as pessoas pela sua essência e traduzir pela imagem um reflexo genuíno do que são.</p>
</p>
	  </div>
 </div>
<div class="row margin-top">
	<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
 	<h3 align="center" class="titulo-15pt title-pink-begin-text">MISSÃO</h3>
 	<h4 align="center" style="font-weight: bold" class="gray-text titulo-padrao margin-min-top">Nossa missão ganha vida em três bandeiras que carregamos em todas as formações que desenvolvemos</h4>
	</div>
</div>
<div class="row margin-min-top">
	<div class="col-md-8 col-md-offset-2" style="text-align: center">
		<div class="col-md-4">
			<img class="icone-missao" src="{{ asset('images/excelencia-conhecimento.png') }}">
			<label class="title-pink-begin-text" >Excelência no conhecimento</label>
			<p class="paragrafo-padrao gray-text margin-min-top" style="text-align: justify;">Nosso papel é formar pessoas com qualidade técnica, métodos atualizados e conhecimentos capazes de torná-las aptas a colocar em prática o que aprenderam e serem capazes de usarem os ensinamentos para ajudar pessoas na busca por sua imagem pessoal.</p>
		</div>
		<div class="col-md-4">
			<img class="icone-missao" src="{{ asset('images/respeito-individualidade.png') }}">
			<label class="title-pink-begin-text" >Respeito à individualidade</label>
			<p class="paragrafo-padrao gray-text margin-min-top" style="text-align: justify;">Cada pessoa tem a sua forma de ser e isso que a torna única. Pensar a imagem é um processo de aprendizagem, descoberta e autoconhecimento. É nisso que acreditamos, é isso que multiplicamos em nossas formações.</p>
		</div>
		<div class="col-md-4">
			<img class="icone-missao" src="{{ asset('images/respeito-paixao.png') }}">
			<label class="title-pink-begin-text" >Renovar com paixão</label>
			<p class="paragrafo-padrao gray-text margin-min-top" style="text-align: justify;">Estamos sempre em constante atualização. O que torna isso parte natural do nosso trabalho é a paixão que temos pelo que fazemos, por estar com pessoas, por possibilitar que elas saiam melhores, mais confiantes e preparadas de cada curso que se encerra. </p>
		</div>
	</div>
</div>
 <div class="row superirere-ecole-mobile margin-min-top padding-50" style="margin-bottom: 30px; text-align: justify; background: #e5e5e5;" >
 	<div class="col-md-8 superirere-ecole col-md-offset-2" style="text-align: center">
 		<h3 align="left" class="titulo-14pt title-pink-begin-text">Ecole Supérieure de Relooking é: </h3>
 		<p class="gray-text">
			<p class="gray-text paragrafo-padrao">A primeira Escola de formação França a ter certificação profissionalizante na área de Imagem. </p>

			<p class="gray-text paragrafo-padrao">A única  do segmento na Europa, com maior nível de certificação de acordo com a instituição  RNCP Nivel 2  na França / Nivel  6 na Europa  – Equivalente  Bac + ¾
			Em 7 anos, a Escola se instalou e desenvolveu com sucesso no Canada e  Brasil.  Em 2017, está em processo de desenvolvimento na Italia, Bolivia e China.</p>

			<p class="gray-text paragrafo-padrao">A ESR  certifica    experts em consultoria de imagem de maneira  inovadora, oferecendo ferramentas de desenvolvimento pessoal. Acreditamos que a melhor imagem, é que traduz de maneira personalizada, a verdade essência do ser humano.</p>
 		</p>
 	</div>
 </div>
 <div class="row" style="margin: 0; margin-top: 30px; margin-bottom: 30px; padding: 0; text-align: justify;" >
 	<div class="col-md-8 col-md-offset-2" style="text-align: center">
 		<p class="gray-text">
			<h3 align="left" class="titulo-14pt title-pink-begin-text">Nosssas Premissas </h3>

			<p class="gray-text paragrafo-padrao">Renovação de dentro para fora. É Genuíno, tem relação direta com as diretoras!</p>
			<p class="gray-text paragrafo-padrao">Percepção de que o mercado trata a moda como algo raso e superficial. E certeza de que não somos assim.</p>
			<p class="gray-text paragrafo-padrao">Vontade e prática orientadas para uma busca mais profunda do processo de construção da imagem e suas expressões.</p>
			<p class="gray-text paragrafo-padrao">Escola com um posicionamento voltado ao SER como uma etapa anterior ao VESTIR, que se afirma cada vez mais nos movimentos de mudança de comportamento das pessoas.
			Respeito a Individualidade e fuga dos padrões e rótulos.</p>
			<p class="gray-text paragrafo-padrao">Perspectiva do mercado de Consultoria de Imagem e moda perder espaço se continuar nos padrões e moldes praticados com base em rótulos. Fazemos para o futuro. </p>
			<p class="gray-text paragrafo-padrao">A Escola está à frente dos concorrentes, faz rupturas no mercado, muda padrões, conceitos e ganhar repercussão de vanguarda dentro do segmento, além de posicionar-se como “especialista” e fonte de informação diante de um cenário de transição como o que vivemos.  </p>
 		</p>
 	</div>
 </div>
 <div class="row">
 	<div class="col-md-4 col-md-offset-4" style="margin-bottom: 40px;">
		<h3 style="text-align: center; color: white; padding: 2px; width: 100%">
			<a href="{{ route('manifesto') }}"><img src="{{ asset('images/logo-ecole-load-pink.png') }}"></a><br>
			<a class="gray-dark-text" style="text-decoration: none; font-weight: bold" href="{{ route('manifesto') }}">Conheça nosso manifesto!</a>
		</h3>
 	</div>
 </div>
@endsection