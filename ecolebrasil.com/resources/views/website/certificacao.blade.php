@extends('layouts.website')

@section('content')
<div class="row" style="background: #58595b">
	<div class="container">
		<h3 align="center" style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum aliquam pharetra. Nunc quis ultricies ex.</h3>
	</div>
</div>
<div class="row" style="background: #e5e5e5; padding: 20px">
	<div class="col-md-10 col-md-offset-1">
		<p align="justify" style="color:black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum aliquam pharetra. Nunc quis ultricies ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas mi tortor, fringilla dapibus mi vitae, lacinia tristique magna. Sed tempor, ipsum ut sodales porta, orci libero accumsan felis, eget aliquam neque ante at elit. Vestibulum quis urna luctus, porttitor diam eget, pharetra lacus. Maecenas at accumsan risus, vitae ornare massa. Nullam sapien odio, imperdiet a elit vitae, tincidunt consequat erat. Vestibulum nisl nisl, volutpat in varius sit amet, vulputate in felis.</p>
	</div>
</div>
<div class="row" style="margin-top: 30px; margin-bottom: 30px">
	<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
		<div class="col-md-7">
			<div class="row">
                <h4 class="gray-text-bold">CERTIFICAÇÃO - CNPC</h4>
                <h5 class="descricao-day-agenda">NOSSA FORMAÇÃO É CERTIFICADA EM ALTO NÍVEL</h5>
                <p style="text-align:justify">
					A origem da nossa formação e metodologia estão na França, onde a Escola está certificada em alto nível. Lá, o certificado recebido pelos alunos que cursam integralmente as formações assemelha-se a uma formação técnica aqui no Brasil e o aluno recebe o título de Consultor de Comunicação para Valorização da Imagem, registrado no RNCP (Repertório Nacional de Certificações Profissionais), no Nível II.
                </p>
                <p style="text-align:justify">
					Na França, essa certificação é um critério importante de legitimidade profissional. Ela responde a uma real necessidade de profissionalização e possibilita o reconhecimento de um alto nível de competências e capacidades.
                </p>
                <p style="text-align:justify">
					Cada certificação é descrita em termos de atividades propostas e competências avaliadas, em um processo extenso de avaliação da instituição, da qualidade do ensino oferecido e do reconhecimento oficial da sustentabilidade do negócio e da empresa.
                </p>
			</div>
			<div class="row" style="margin-top: 20px">
                <h5 class="descricao-day-agenda">As certificações registradas no RNPC são classificadas por nível</h5>
            	<p><b>Nível I</b>: equipe superior – Equivalente a Bac +5 / Mestre 2</p>
            	<p><b>Nível II</b>: equipe operacional – Equivalente a Bac +3 / Bac +4</p>
            	<p><b>Nível III</b>: funcionários que ocupam cargos que exigem nível de formação BTS – DUT</p>
            	<p><b>Nível IV</b>: mestria – trabalhador altamente qualificado – Nível Bac</p>
            	<p><b>Nível V </b>: funcionários que ocupam cargos que exigem nível de formação CAP – CFAP – BEP			                </p>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-1">
			<div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <img style="margin-top: 15px" src="{{asset('images/logo-ecole-paris.jpg')}}">
                </div>
			</div>
			<div class="row" style="margin-top: 20px">
                <p style="text-align:justify">
					O fato de uma formação estar registrada no RNCP significa que ela foi estudada, avaliada, reconhecida e, portanto, certificada pela Comissão Nacional de Certificação Profissional (CNCP). O registro é emitido após avaliação e validação dos seguintes princípios:
                </p>
                <p>+ coerência e qualidade dos referenciais de competências com os objetivos da </p>
                <p>+ qualificação visada pela certificação.</p>
                <p>+ oportunidade de existência da certificação no mercado de trabalho.</p>
                <p>+ pertinência do dispositivo de avaliação com a VAE.</p>
			</div>
		</div>
	</div>
</div>
@endsection
