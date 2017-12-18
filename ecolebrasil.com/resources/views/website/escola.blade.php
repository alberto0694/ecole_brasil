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
	      	<img src="{{ asset('images/header-escola.png') }}" alt="...">	    
	    </a>
	  </div>
 </div>
<div class="row" style="margin-top: 30px">
	  <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	    <p style="text-align: justify;" class="gray-text">A Ecole Supérieure de Relooking foi fundada em Paris, berço mundial das artes, da cultura, cidade que abraça estilos diversos. A Ecole carrega a autenticidade e a paixão pelas pessoas na essência. Especialista em cursos e formações relacionados a imagem pessoal, psicologia e empreendedorismo, reúne expertise, técnicas e metodologias diferenciadas, multiplicando em cada aluno o que carrega como maior crença: olhar as pessoas pela sua essência e traduzir pela imagem um reflexo genuíno do que são.</p>
</p>
	  </div>
 </div>
 <div class="row">
 	<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
	 	<h3 align="center" class="title-pink-begin-text">MISSÃO</h3>
	 	<h4 align="center" class="gray-text">Nossa missão ganha vida em três bandeiras que carregamos em todas as formações que desenvolvemos</h4> 		
 	</div>
 </div>
 <div class="row">
 	<div class="col-md-8 col-md-offset-2" style="text-align: center">
 		<div class="col-md-4">
 			<img src="{{ asset('images/excelencia-conhecimento.png') }}" style="width: 100%; display: block">
 			<label class="title-pink-begin-text" >Excelência no conhecimento</label>
 			<p class="gray-text" style="text-align: justify;">Nosso papel é formar pessoas com qualidade técnica, métodos atualizados e conhecimentos capazes de torná-las aptas a colocar em prática o que aprenderam e serem capazes de usarem os ensinamentos para ajudar pessoas na busca por sua imagem pessoal.</p>
 		</div>
 		<div class="col-md-4">
 			<img src="{{ asset('images/respeito-individualidade.png') }}" style="width: 100%; display: block">
 			<label class="title-pink-begin-text" >Respeito à individualidade</label>
 			<p class="gray-text" style="text-align: justify;">Cada pessoa tem a sua forma de ser e isso que a torna única. Pensar a imagem é um processo de aprendizagem, descoberta e autoconhecimento. É nisso que acreditamos, é isso que multiplicamos em nossas formações.</p>
 		</div>
 		<div class="col-md-4">
 			<img src="{{ asset('images/respeito-paixao.png') }}" style="width: 100%; display: block">
 			<label class="title-pink-begin-text" >Renovar com paixão</label>
 			<p class="gray-text" style="text-align: justify;">Estamos sempre em constante atualização. O que torna isso parte natural do nosso trabalho é a paixão que temos pelo que fazemos, por estar com pessoas, por possibilitar que elas saiam melhores, mais confiantes e preparadas de cada curso que se encerra. </p>
 		</div>
 	</div>
 </div>
 <div class="row" style="margin: 0; padding: 0; margin-top: 30px">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	      	<img src="{{ asset('images/manifesto.png') }}" alt="...">    
	    </a>
	  </div>
 </div>
 <div class="row" style="margin-bottom: 30px; text-align: center">
 		<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
 			<h3 align="center" class="title-pink-begin-text">EQUIPE</h3>
	 		<div class="col-md-6">
	 			<img src="{{ asset('images/shophie-pereira.png') }}" style="width: 100%; display: block">
	 			<h3 align="center" class="title-pink-begin-text">Sophie Pereira</h3>
	 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Porque se é o que se veste. Nossas tomadas de consciência e a perseverança de nossas ações trazem sistematicamente uma mudança duradoura."</i></p>
	 			<p style="text-align: justify;" class="gray-text">Formada em Consultoria de Imagem, Sophie carrega vivacidade e alegria na hora de falar do que mais gosta: pessoas, comportamento, estilo, moda. Dona de uma essência inspiradora e com o dom de aproximar pessoas, ela acumula 10 anos de experiência na função e é uma das responsáveis pela constante renovação dos cursos da Escola.</p>
	 		</div>
	 		<div class="col-md-6">
	 			<img src="{{ asset('images/vandresa-preto.png') }}" style="width: 100%; display: block">
	 			<h3 align="center" class="title-pink-begin-text">Vandressa Pretto</h3>
	 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Somos complexos, profundos, e é isso que praticamos em sala de aula, e desejamos que os alunos pratiquem em seu dia a dia na atuação com seus clientes."</i></p>
	 			<p style="text-align: justify;" class="gray-text">Formada em Moda, Vandressa Pretto sempre entendeu que, mais do que imagem, vestir é sentir. Essa filosofia de trabalho fez dela a cara e a alma da Escola no Brasil. Ousada e cheia de ideias novas, ela ministra aulas e já formou em solo brasileiro mais de 500 alunas. É a responsável por perpetuar por aqui a essência da Escola e inspira as pessoas com o amor pelo que faz.</p>
	 		</div>
	 		<div class="col-md-6">
	 			<img src="{{ asset('images/graciela-lech.png') }}" style="width: 100%; display: block">
	 			<h3 align="center" class="title-pink-begin-text">Graciela Lech</h3>
	 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"A autenticidade da imagem pessoal a é a chave para as relações intra e interpessoais. Cada pessoa é única e pode encontrar a melhor versão de si."</i></p>
	 			<p style="text-align: justify;" class="gray-text">Formada em Relações Públicas, Graciela estudou e trabalhou na Ecole em Paris e hoje é coordenadora na Ecole Brasil. Com muita energia e amor à ESR, acredita que a Consultoria de Imagem é uma ferramenta incrível de comunicação não-verbal que auxilia as pessoas a alcançarem seus objetivos. Seu maior desejo é ver o sucesso das alunas!</p>
	 		</div>
	 		<div class="col-md-6">
	 			<img src="{{ asset('images/lygia-falcao.png') }}" style="width: 100%; display: block">
	 			<h3 align="center" class="title-pink-begin-text">Lygia Falcão</h3>
	 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Ser para vestir. Se tratando de um processo de Consultoria de Imagem eficaz e duradouro, não poderia existir máxima maior. O respeito ao indivíduo!"</i></p>
	 			<p style="text-align: justify;" class="gray-text">Consultora de Imagem e produtora de moda, Lygia é formadora de opinião no mundo fashion. Sua dedicação plena e amor à profissão ficam evidentes quando ministra as aulas de Consultoria e Coaching de Imagem pela Ecole. Acredita que o respeito ao indivíduo, a metodologia e as ferramentas de coaching são o que diferenciam nossas alunas no mercado de trabalho.</p>
	 		</div>	 		
 		</div>
 </div>
 


@endsection