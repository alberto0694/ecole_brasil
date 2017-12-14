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
	    <p style="text-align: justify;" class="gray-text">A Ecole Superieure de Relooking foi fundada em Paris, na França. Especialista na formação de Consultoria de Imagem e Morfopsicologia,  tem na sua origem a busca pela autenticidade, por oferecer uma formação única, unindo conteúdos de qualidade e experiência prática.</p>
	    <p style="text-align: justify;" class="gray-text">A Escola já formou mais de mil alunas e hoje atua em diversos países, incluindo Brasil, Portugal, China e Marrocos, multiplicando o que carrega como missão: olhar as pessoas pela sua essência e traduzir pela imagem um reflexo genuíno de quem são.</p>
	    <p style="text-align: justify;" class="gray-text">Essa busca conduz a Escola até os dias atuais e está presente no contínuo desenvolvimento de novas metodologias exclusivas, aliando premissas de coaching e imagem pessoal.</p>
</p>
	  </div>
 </div>
 <div class="row">
 	<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
	 	<h3 align="center" class="title-pink-begin-text">PROPÓSITO</h3>
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
 			<h3 align="center" class="title-pink-begin-text">PROFESSORAS</h3>
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
 <div class="row" style="background: #e6e7e9; margin: 0; padding: 0; padding-bottom: 30px">
		<div class="col-md-12 col-xs-10 col-xs-offset-1">
			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="title-pink-begin-text">FAQ</h2>
					<p class="gray-text-bold">Reunimos aqui algumas das principais questões que permeiam a forma de trabalho e os cursos da Escola. Elas podem ajudar você a tirar dúvidas ou entender melhor como funcionamos.</p>	
				</div>
			</div>

			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>	

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="title-pink-begin-text">O QUE É CONSULTORIA DE IMAGEM?</h4>
					<p class="gray-text">O exercício da consultoria de imagem começou nos Estados Unidos na década de 1970. Inicialmente, consistia em definir as cores que melhor se adaptavam a uma pessoa e como harmonizá-las. Johannes Itten desenvolveu o estudo da colorimetria seguido por Suzanne Caygille Carole Jackson e introduziram o método das 4 estações.</p> 
					<p class="gray-text">Há mais de 10 anos, profissionais de diferentes áreas, como psicologia e comunicação, tem expandido a compreensão da imagem, voltando-se a um olhar de maior impacto na real mudança da pessoa e na sua auto-estima. A missão dessa profissão é maximizar a imagem pessoal e profissional de uma pessoa. Sua ação é sistêmica e leva em conta a imagem, o físico, o comportamento e o potencial das pessoas auxiliando-as a alcançar seus objetivos.</p>	
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>	

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="title-pink-begin-text upper-case">A duração da formação é suficiente para me preparar para o mercado de trabalho?</h4>
					<p class="gray-text">Embora utilizados como sinônimos em muitos momentos, os três termos, no que se refere ao processo de atuação profissional, são diferentes entre si:</p>

					<p class="gray-text"><b>Consultoria de Imagem:</b> é um processo de mudança completa, apoiado em um estudo e técnicas aprofundadas. Promove uma mudança de maior abrangência, profunda e duradoura. Muitas vezes envolve profissionais de áreas complementares, como cabelo, maquiagem ou morfopsicologia.</p>

					<p class="gray-text"><b>PersonalStylist:</b> a diferença passa por tratar-se de um processo focado e especifico, sem profundidade e continuidade, que refere-se a um momento ou situação de demanda. Pode ser a um evento, uma festa, uma reunião, etc. onde o cliente busca uma nova perspectiva pessoal de forma pontual.</p>

					<p class="gray-text"><b>Coaching de Imagem:</b> orienta o profissional a trabalhar com técnicas que potencializem e explorem de forma aprofundada todo o potencial e capacidade de mudança do cliente. Tem como foco também o objetivo de imagem e está centrado nas mudanças internas promovidas do cliente, onde ele é o personagem principal do processo de consultoria.</p>	
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>	

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="title-pink-begin-text upper-case">A formação é obrigatória?</h4>
					<p class="gray-text">No Brasil, não existe um órgão que regularize a atuação. De qualquer forma, a formação é, sim, fundamental para quem deseja atuar com seriedade no mercado de trabalho. Uma formação oferece todas as técnicas e metodologias necessárias para o atendimento em Consultoria de Imagem.</p>	
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>	

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="title-pink-begin-text upper-case">A formação de Consultoria de Imagem é suficiente para atender de forma completa o cliente?</h4>
					<p class="gray-text">O olhar da Consultoria de Imagem é específico para a vestimenta e analisa a relação entre a pessoa, sua forma de vestir-se e a imagem transmitida, sem considerar elementos como cabelo, rosto ou maquiagem. O processo passa por teste de cores, estilo, personalidade, comportamento e tipo físico. Já, a formação em Mosfopsicologia entra a fundo nas questões que permeiam o rosto e o cabelo. São cursos independentes e complementares.</p>	
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>	

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="title-pink-begin-text upper-case">A metodologia, conteúdos e materiais são iguais as da sede em Paris?</h4>
					<p class="gray-text">Sim, toda a técnica, metodologia e materiais didáticos são idênticos aos aplicados na nossa sede em Paris. O mesmo vale para a renovação do conteúdo e as inovações que são feitas a cada ano.</p>	
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>	

			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="title-pink-begin-text">Recebo algum suporte após a conclusão da formação?</h4>
					<p class="gray-text">A Escola oferece um curso complementar, Negócios de Estilo, para que o profissional aprenda com consistência a formatar seu negócio de Consultoria de imagem. Todos os alunos também passam a ter, após a conclusão de qualquer curso feito na Ecole Brasil, o acesso restrito a materiais de apoio profissional e novidades.</p>	
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<hr>
			</div>	

{{-- 			<div class="row" style="padding-top: 20px">
				<div class="col-md-8 col-md-offset-2">
					<h4 class="title-pink-begin-text">O QUE É CONSULTORIA DE IMAGEM</h4>
					<p class="gray-text">Phasellus congue nisl est, ut lacinia nisi vehicula vel. Sed luctus in enim non egestas. Ut sit amet tincidunt sem. Aliquam ultrices rutrum eros, non tincidunt nunc congue a. Fusce eu imperdiet leo.</p>	
				</div>
			</div>  --}}			
		</div>	
 </div>


@endsection