@extends('layouts.website')

@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}
</style>
 <div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	      	<img  src="{{ asset('images/header-escola.png') }}" alt="...">	    
	    </a>
	  </div>
 </div>
<div class="row" style="margin-top: 30px">
	  <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
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
 <div class="row" style="margin-bottom: 30px; text-align: center">
 		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 			<h3 align="center" class="title-pink-begin-text">EQUIPE</h3>
 			<div class="row">
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/shophie-pereira.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Sophie Pereira</h3>
		 			<h5 align="center" class="title-pink-begin-text">Fundadora e Diretora Ecole Paris</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Porque se é o que se veste. Nossas tomadas de consciência e a perseverança de nossas ações trazem sistematicamente uma mudança duradoura."</i></p>
		 			<p style="text-align: justify;" class="gray-text">Formada em Consultoria de Imagem, Sophie carrega vivacidade e alegria na hora de falar do que mais gosta: pessoas, comportamento, estilo, moda. Dona de uma essência inspiradora e com o dom de aproximar pessoas, ela acumula 10 anos de experiência na função e é uma das responsáveis pela constante renovação dos cursos da Escola.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/vandresa-preto.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Vandressa Pretto</h3>
		 			<h5 align="center" class="title-pink-begin-text">Diretora Ecole Brasil</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>“Somos complexos, profundos, e é isso que praticamos em sala de aula, e desejamos que os alunos pratiquem em seu dia a dia na atuação com seus clientes.”</i></p>
		 			<p style="text-align: justify;" class="gray-text">Formada em Moda, Coaching, Visagismo e Morfopsicologia, Vandressa Pretto sempre entendeu que, mais do que imagem, vestir é sentir. Essa filosofia de trabalho fez dela a cara e a alma da Escola no Brasil. Ousada e cheia de ideias novas, ela ministra aulas e já formou em solo brasileiro mais de mil alunas. É a responsável por perpetuar por aqui a essência da Escola e inspira as pessoas com o amor pelo que faz.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/graciela-lech.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Graciela Lech</h3>
		 			<h5 align="center" class="title-pink-begin-text">Coordenadora</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"A autenticidade da imagem pessoal a é a chave para as relações intra e interpessoais. Cada pessoa é única e pode encontrar a melhor versão de si."</i></p>
		 			<p style="text-align: justify;" class="gray-text">Formada em Relações Públicas, Graciela estudou e trabalhou na Ecole em Paris e hoje é coordenadora na Ecole Brasil. Com muita energia e amor à ESR, acredita que a Consultoria de Imagem é uma ferramenta incrível de comunicação não-verbal que auxilia as pessoas a alcançarem seus objetivos. Seu maior desejo é ver o sucesso das alunas!</p>
		 		</div> 				
 			</div>
 			<div class="row">
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/lygia-falcao.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Lygia Falcão</h3>
		 			<h5 align="center" class="title-pink-begin-text">Professora</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Ser para vestir. Se tratando de um processo de Consultoria de Imagem eficaz e duradouro, não poderia existir máxima maior. O respeito ao indivíduo!"</i></p>
		 			<p style="text-align: justify;" class="gray-text">Consultora de Imagem e produtora de moda, Lygia é formadora de opinião no mundo fashion. Sua dedicação plena e amor à profissão ficam evidentes quando ministra as aulas de Consultoria e Coaching de Imagem pela Ecole. Acredita que o respeito ao indivíduo, a metodologia e as ferramentas de coaching são o que diferenciam nossas alunas no mercado de trabalho.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/luiza-bem.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Luiza de Bem</h3>
		 			<h5 align="center" class="title-pink-begin-text">Atendimento</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Modas desaparecem, mas o estilo é eterno" Yves- Saint Laurent. </i></p>
		 			<p style="text-align: justify;" class="gray-text">Luiza de Bem é graduada em Psicologia pela PUC-RS e Consultora de Imagem pela Ecole. Ela acredita que a vestimenta é nosso melhor cartão de visita e quando descobrimos nossa essência, as escolhas fazem mais sentido. Como uma boa curiosa, está constantemente atualizando-se das tendências de mercado, e é com essa intensidade e otimismo que atende nossas alunas!</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/kelly-possebon.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Kelly Possebon</h3>
		 			<h5 align="center" class="title-pink-begin-text">Financeiro</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>“Quando temos segurança em nossa imagem, impactamos de forma positiva, transformando nossas chances de sucesso”</i></p>
		 			<p style="text-align: justify;" class="gray-text">Apesar de ter crescido em meio a tecidos e costureiras da confecção de sua mãe, e vez ou outra bancar a consultora de estilo das amigas, a Kelly acabou mesmo no MBA em Mercado de Capitais. É gestora financeira da Ecole desde 2014. Entre suas demais atividades está a Mulher Capital, criada com objetivo de impactar o mundo atual, empoderando mulheres através da educação financeira.</p>
		 		</div> 				
 			</div>
 			<div class="row">
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/marcela-fabricio.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Marcela Fabrício</h3>
		 			<h5 align="center" class="title-pink-begin-text">Professora</h5>
		 			<p style="text-align: justify;" class="gray-text">Professora da Ecole, consultora de Imagem Pessoal e Profissional, Administradora de Empresas por formação, Marcela tem na valorização às pessoas, autoconhecimento, e no empoderamento sua maior motivação para dar aulas. Enxerga na metodologia da Ecole a ferramenta que buscava para criar insights agregadores, aguçar percepções  que fazem a diferença na vida dos seus alunos.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/patricia-chiela.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Patrícia Chiela</h3>
		 			<h5 align="center" class="title-pink-begin-text">Publicitária</h5>
		 			<p style="text-align: justify;" class="gray-text">Publicitaria de formação, pós graduada em Comunicação com o Mercado, Marketing e Marketing Digital, Patrícia Chiela possui experiência multidisciplinar de mais de 12 anos no mercado da comunicação. Após trabalhar na estratégia de diversas empresas nacionais e internacionais, hoje está a frente da sua consultoria, Patrícia Chiela Estratégia de Negócio, atendendo marcas em novos negócios, reposicionamento de mercado e branding, tendo foco no empreendedorismo. Na Ecole, usa toda essa expertise para ministrar os cursos relacionados a marketing, mercado e negócios. </p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="{{ asset('images/leila-fraga.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Leila Fraga</h3>
		 			<h5 align="center" class="title-pink-begin-text">Professora</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>" A joia é mais que um objeto de adorno, é uma forma preciosa de comunicação e um meio de nos relacionarmos com nossa imagem.”</i></p>
		 			<p style="text-align: justify;" class="gray-text">Designer de joias personalizadas e visagista, Leila atua aplicando as técnicas de coaching de imagem e visagismo em projetos que reflitam a identidade da pessoa, sua maior inspiração. Apaixonada pelo que faz, ao ministrar na Ecole aulas sobre o efeito dos acessórios na imagem pessoal, compartilha com as alunas ferramentas que solucionem necessidades e objetivos de imagem através da joia.</p>
		 		</div>	 				
 			</div>

 		</div>
 </div>
 


@endsection