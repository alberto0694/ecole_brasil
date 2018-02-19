@extends('layouts.website')

@section('content')
	<div class="row" style="margin-top: 30px; margin-bottom: 30px">
		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<div class="col-md-6">
                <h3 class="title-pink-begin-text"> ACESSO RESTRITO</h3>
                <p class="gray-text" style="text-align: justify;">Este espaço foi criado para que a gente possa contribuir ainda mais com a qualificação dos alunos formados pela Ecole através de conteúdos exclusivos, informações e novidades atualizadas, dicas, além de disponibilizar materiais utilizados em aula.</p>
				<p class="gray-text" style="text-align: justify;">Para ter acesso a área restrita é necessário que você nos envie um e-mail solicitando um login e senha. Ele dará acesso aos conteúdos exclusivos para quem é ex-aluno da Ecole.</p>
			</div>
			<div class="col-md-6">
				<div class="row">
					<h3 align="center" class="title-pink-begin-text">Entre Agora</h3>
				</div>
                <ul style="padding-left: 0px;">
                    <li>
						<form method="POST" action="{{ route('login') }}">
						    {{ csrf_field() }}
						    <fieldset>
						    	<div class="form-group">
				                  {{-- <label class="control-label">Como nos conhece</label> --}}
				                  <input required id="email" name="email" type="text" class="full form-control" placeholder="E-mail" />
				                </div>
				                <i class="ace-icon fa fa-user"></i>
				                <div class="form-group">
				                  {{-- <label class="control-label">Como nos conhece</label> --}}
				                  <input required id="password" name="password" type="password" class="full form-control" placeholder="Senha" />
				                </div>
				                <i class="ace-icon fa fa-lock"></i>

						        <div class="space"></div>
	                              <button style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
	                                <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/entrar.png') }}">
	                              </button>
						        <div class="space-4"></div>
						    </fieldset>
						</form>
                    </li>
                </ul>
			</div>
		</div>
	</div>
@endsection