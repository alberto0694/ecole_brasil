@extends('layouts.website')
@section('content')
<style type="text/css">
	.video-index{
		padding: 0;
		margin: 0;
	}

	.cs-item-frame {
	    width: 177px;
	    height: 168px;
	    margin:0 auto;
	    /*position: absolute;*/
	    background: url({{ asset('images/frame-consultants.png') }});
	    z-index: 999;
	    top: 0;
	    left: 0;
	    padding-top: 10px;
	}

	.item-inside{
		    height: 130px;
		    width: 145px;
		    margin-top: 10px;
		    margin-left: 18px;
		    background-repeat: no-repeat;
		    background-clip: border-box;
		    background-size: 100%;
		    border: 3px solid;
		    border-radius: 2px;
	}
</style>
<div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	    	<div style="position: absolute; background-color: rgba(255, 255, 255, 0.5); width: 100%; height: 100%" ></div>
	      <img src="{{ asset('images/banner-blog.png') }}" alt="...">
	    </a>
	  </div>
 </div>
 <div class="row"></div>
 <div class="row" style="margin-bottom: 30px; text-align: center">
 		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 			<h3 align="center" class="title-pink-begin-text">EQUIPE</h3>
 			<div class="row">
		 		<div class="col-md-4">
					<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/shophie-pereira.png') }})"></div>
					</div>
		 			<h3 align="center" class="title-pink-begin-text">Sophie Pereira</h3>
		 			<h5 align="center" class="title-pink-begin-text">Fundadora e Diretora Ecole Paris</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Porque se é o que se veste. Nossas tomadas de consciência e a perseverança de nossas ações trazem sistematicamente uma mudança duradoura."</i></p>
		 			<p style="text-align: justify;" class="gray-text">Formada em Consultoria de Imagem, Sophie carrega vivacidade e alegria na hora de falar do que mais gosta: pessoas, comportamento, estilo, moda. Dona de uma essência inspiradora e com o dom de aproximar pessoas, ela acumula 10 anos de experiência na função e é uma das responsáveis pela constante renovação dos cursos da Escola.</p>
		 		</div>
		 		<div class="col-md-4">
					<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/vandresa-preto.png') }})"></div>
					</div>
		 			{{-- <img src="{{ asset('images/vandresa-preto.png') }}" style="width: 100%; display: block"> --}}
		 			<h3 align="center" class="title-pink-begin-text">Vandressa Pretto</h3>
		 			<h5 align="center" class="title-pink-begin-text">Diretora Ecole Brasil</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>“Somos complexos, profundos, e é isso que praticamos em sala de aula, e desejamos que os alunos pratiquem em seu dia a dia na atuação com seus clientes.”</i></p>
		 			<p style="text-align: justify;" class="gray-text">Formada em Moda, Coaching, Visagismo e Morfopsicologia, Vandressa Pretto sempre entendeu que, mais do que imagem, vestir é sentir. Essa filosofia de trabalho fez dela a cara e a alma da Escola no Brasil. Ousada e cheia de ideias novas, ela ministra aulas e já formou em solo brasileiro mais de mil alunas. É a responsável por perpetuar por aqui a essência da Escola e inspira as pessoas com o amor pelo que faz.</p>
		 		</div>
		 		<div class="col-md-4">
					<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/leila-fraga.png') }})"></div>
					</div>
		 			<h3 align="center" class="title-pink-begin-text">Leila Fraga</h3>
		 			<h5 align="center" class="title-pink-begin-text">Professora</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>" A joia é mais que um objeto de adorno, é uma forma preciosa de comunicação e um meio de nos relacionarmos com nossa imagem.”</i></p>
		 			<p style="text-align: justify;" class="gray-text">Designer de joias personalizadas e visagista, Leila atua aplicando as técnicas de coaching de imagem e visagismo em projetos que reflitam a identidade da pessoa, sua maior inspiração. Apaixonada pelo que faz, ao ministrar na Ecole aulas sobre o efeito dos acessórios na imagem pessoal, compartilha com as alunas ferramentas que solucionem necessidades e objetivos de imagem através da joia.</p>
		 		</div>
{{-- 		 		<div class="col-md-4">
		 			<img src="{{ asset('images/graciela-lech.png') }}" style="width: 100%; display: block">
		 			<h3 align="center" class="title-pink-begin-text">Graciela Lech</h3>
		 			<h5 align="center" class="title-pink-begin-text">Coordenadora</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"A autenticidade da imagem pessoal a é a chave para as relações intra e interpessoais. Cada pessoa é única e pode encontrar a melhor versão de si."</i></p>
		 			<p style="text-align: justify;" class="gray-text">Formada em Relações Públicas, Graciela estudou e trabalhou na Ecole em Paris e hoje é coordenadora na Ecole Brasil. Com muita energia e amor à ESR, acredita que a Consultoria de Imagem é uma ferramenta incrível de comunicação não-verbal que auxilia as pessoas a alcançarem seus objetivos. Seu maior desejo é ver o sucesso das alunas!</p>
		 		</div>  --}}
 			</div>
 			<div class="row">
		 		<div class="col-md-4">
					<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/lygia-falcao.png') }})"></div>
					</div>
		 			<h3 align="center" class="title-pink-begin-text">Lygia Falcão</h3>
		 			<h5 align="center" class="title-pink-begin-text">Professora</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Ser para vestir. Se tratando de um processo de Consultoria de Imagem eficaz e duradouro, não poderia existir máxima maior. O respeito ao indivíduo!"</i></p>
		 			<p style="text-align: justify;" class="gray-text">Consultora de Imagem e produtora de moda, Lygia é formadora de opinião no mundo fashion. Sua dedicação plena e amor à profissão ficam evidentes quando ministra as aulas de Consultoria e Coaching de Imagem pela Ecole. Acredita que o respeito ao indivíduo, a metodologia e as ferramentas de coaching são o que diferenciam nossas alunas no mercado de trabalho.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/luiza-bem.png') }})"></div>
					</div>
		 			<h3 align="center" class="title-pink-begin-text">Luiza de Bem</h3>
		 			<h5 align="center" class="title-pink-begin-text">Atendimento</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>"Modas desaparecem, mas o estilo é eterno" Yves- Saint Laurent. </i></p>
		 			<p style="text-align: justify;" class="gray-text">Luiza de Bem é graduada em Psicologia pela PUC-RS e Consultora de Imagem pela Ecole. Ela acredita que a vestimenta é nosso melhor cartão de visita e quando descobrimos nossa essência, as escolhas fazem mais sentido. Como uma boa curiosa, está constantemente atualizando-se das tendências de mercado, e é com essa intensidade e otimismo que atende nossas alunas!</p>
		 		</div>
		 		<div class="col-md-4">
		 			<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/kelly-possebon.png') }})"></div>
					</div>
		 			<h3 align="center" class="title-pink-begin-text">Kelly Possebon</h3>
		 			<h5 align="center" class="title-pink-begin-text">Financeiro</h5>
		 			<p style="text-align: justify; margin-bottom: 30px" class="gray-text"><i>“Quando temos segurança em nossa imagem, impactamos de forma positiva, transformando nossas chances de sucesso”</i></p>
		 			<p style="text-align: justify;" class="gray-text">Apesar de ter crescido em meio a tecidos e costureiras da confecção de sua mãe, e vez ou outra bancar a consultora de estilo das amigas, a Kelly acabou mesmo no MBA em Mercado de Capitais. É gestora financeira da Ecole desde 2014. Entre suas demais atividades está a Mulher Capital, criada com objetivo de impactar o mundo atual, empoderando mulheres através da educação financeira.</p>
		 		</div>
 			</div>
 			<div class="row">
		 		<div class="col-md-4">
		 			<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/marcela-fabricio.png') }})"></div>
					</div>
		 			<h3 align="center" class="title-pink-begin-text">Marcela Fabrício</h3>
		 			<h5 align="center" class="title-pink-begin-text">Professora</h5>
		 			<p style="text-align: justify;" class="gray-text">Professora da Ecole, consultora de Imagem Pessoal e Profissional, Administradora de Empresas por formação, Marcela tem na valorização às pessoas, autoconhecimento, e no empoderamento sua maior motivação para dar aulas. Enxerga na metodologia da Ecole a ferramenta que buscava para criar insights agregadores, aguçar percepções  que fazem a diferença na vida dos seus alunos.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset('images/patricia-chiela.png') }})"></div>
					</div>
		 			<h3 align="center" class="title-pink-begin-text">Patrícia Chiela</h3>
		 			<h5 align="center" class="title-pink-begin-text">Publicitária</h5>
		 			<p style="text-align: justify;" class="gray-text">Publicitaria de formação, pós graduada em Comunicação com o Mercado, Marketing e Marketing Digital, Patrícia Chiela possui experiência multidisciplinar de mais de 12 anos no mercado da comunicação. Após trabalhar na estratégia de diversas empresas nacionais e internacionais, hoje está a frente da sua consultoria, Patrícia Chiela Estratégia de Negócio, atendendo marcas em novos negócios, reposicionamento de mercado e branding, tendo foco no empreendedorismo. Na Ecole, usa toda essa expertise para ministrar os cursos relacionados a marketing, mercado e negócios. </p>
		 		</div>

 			</div>

 		</div>
 </div>
 <br><br><br>
@endsection