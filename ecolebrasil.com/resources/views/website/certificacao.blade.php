@extends('layouts.website')

@section('content')
<style type="text/css">
    .header-page-content{
        background-image: url('{{ asset('images/certificacaointernacional.png')  }}')
    }
</style>
 <div class="row" style="margin: 0; padding: 0">
    <div class="col-md-12 header-page-content" style=""></div>
    <div class="col-md-12 header-page">
        <p class="gray-dark-color bold">CERTIFICAÇÃO INTERNACIONAL</p>
    </div>
 </div>
<div class="hidden-xs hidden-sm">
    <div class="row margin-min-top">
        <div class="padding-20 col-md-10 col-md-offset-1">
            <h4 class="gray-text-bold title-pink-begin-text">CERTIFICAÇÃO - CNPC</h4>
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
    </div>

    <div class="row padding-20" style="background: #58595b">
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
            <img style="display: block; width: 40%; margin:0 auto;" src="{{asset('images/certifcacao-europeia.jpg')}}">
        </div>
        <div class="col-md-9">
            <h3 align="center" style="color:white; margin-top: 45px">CERTIFICAÇÃO NACIONAL EUROPEIA NO MAIS ALTO NÍVEL</h3>
        </div>
    </div>
    <div class="row margin-top" style="margin-bottom: 40px">
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
            <img style="display: block; width: 60%; margin:0 auto; margin-top: 15px" src="{{asset('images/logo-ecole-paris.jpg')}}">
        </div>
        <div class="col-md-8">
            <p style="text-align:justify">
                O fato de uma formação estar registrada no RNCP significa que ela foi estudada, avaliada, reconhecida e, portanto, certificada pela Comissão Nacional de Certificação Profissional (CNCP). O registro é emitido após avaliação e validação dos seguintes princípios:
            </p>
            <p>+ coerência e qualidade dos referenciais de competências com os objetivos da </p>
            <p>+ qualificação visada pela certificação.</p>
            <p>+ oportunidade de existência da certificação no mercado de trabalho.</p>
            <p>+ pertinência do dispositivo de avaliação com a VAE.</p>
        </div>
    </div>
    <div class="row margin-min-top" style="background: #e5e5e5; padding: 20px">
        <div class=" padding-20 col-md-10 col-md-offset-1">
            <div class="row" style="text-align: center;">
                <h5 class="title-pink-begin-text">As certificações registradas no RNPC são classificadas por nível</h5>
                <p><b>Nível I</b>: equipe superior – Equivalente a Bac +5 / Mestre 2</p>
                <p><b>Nível II</b>: equipe operacional – Equivalente a Bac +3 / Bac +4</p>
                <p><b>Nível III</b>: funcionários que ocupam cargos que exigem nível de formação BTS – DUT</p>
                <p><b>Nível IV</b>: mestria – trabalhador altamente qualificado – Nível Bac</p>
                <p><b>Nível V </b>: funcionários que ocupam cargos que exigem nível de formação CAP – CFAP – BEP                            </p>
            </div>
        </div>
    </div>
</div>
<div class="hidden-md hidden-lg">
    <div class="row margin-min-top padding-20">
        <div class="padding-20 col-md-10 col-md-offset-1">
            <h4 class="gray-text-bold title-pink-begin-text">CERTIFICAÇÃO - CNPC</h4>
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
    </div>

    <div class="row padding-20" style="background: #58595b">
        <div class="col-xs-12">
            <img style="display: block; width: 40%; margin:0 auto;" src="{{asset('images/certifcacao-europeia.jpg')}}">
        </div>
        <div class="col-xs-12">
            <h3 align="center" style="color:white; margin-top: 45px">CERTIFICAÇÃO NACIONAL EUROPEIA NO MAIS ALTO NÍVEL</h3>
        </div>
    </div>
    <div class="row padding-20" style="margin-bottom: 40px">
        <div class="col-xs-12">
            <img style="display: block; width: 50%; margin:0 auto;" src="{{asset('images/logo-ecole-paris.jpg')}}">
        </div>
        <div class="col-xs-12 margin-top">
            <p style="text-align:justify">
                O fato de uma formação estar registrada no RNCP significa que ela foi estudada, avaliada, reconhecida e, portanto, certificada pela Comissão Nacional de Certificação Profissional (CNCP). O registro é emitido após avaliação e validação dos seguintes princípios:
            </p>
            <p>+ coerência e qualidade dos referenciais de competências com os objetivos da </p>
            <p>+ qualificação visada pela certificação.</p>
            <p>+ oportunidade de existência da certificação no mercado de trabalho.</p>
            <p>+ pertinência do dispositivo de avaliação com a VAE.</p>
        </div>
    </div>
    <div class="row margin-min-top" style="background: #e5e5e5; padding: 20px">
        <div class=" padding-20 col-md-10 col-md-offset-1">
            <div class="row" style="text-align: center;">
                <h5 class="title-pink-begin-text">As certificações registradas no RNPC são classificadas por nível</h5>
                <p><b>Nível I</b>: equipe superior – Equivalente a Bac +5 / Mestre 2</p>
                <p><b>Nível II</b>: equipe operacional – Equivalente a Bac +3 / Bac +4</p>
                <p><b>Nível III</b>: funcionários que ocupam cargos que exigem nível de formação BTS – DUT</p>
                <p><b>Nível IV</b>: mestria – trabalhador altamente qualificado – Nível Bac</p>
                <p><b>Nível V </b>: funcionários que ocupam cargos que exigem nível de formação CAP – CFAP – BEP                            </p>
            </div>
        </div>
    </div>
</div>
@endsection
