@extends('layouts.website')

@section('content')
	<div class="row" style="margin-top: 30px; margin-bottom: 30px">
		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<div class="col-md-6">
	                <h3 class="title-pink-begin-text"> ACESSO RESTRITO</h3>          
	                <p class="gray-text" style="text-align: justify;">
Este espaço foi criado para que a gente possa contribuir ainda mais com a qualificação dos alunos formados pela Ecole através de conteúdos exclusivos, informações e novidades atualizadas, dicas, além de disponibilizar materiais utilizados em aula.</p>

<p class="gray-text" style="text-align: justify;">Para ter acesso a área restrita é necessário que você nos envie um e-mail solicitando um login e senha. Ele dará acesso aos conteúdos exclusivos para quem é ex-aluno da Ecole.                	
	                </p>			
			</div>
			<div class="col-md-6">
	                <h3></h3>          
	                <ul style="padding-left: 0px;">
	                    <li>
	                        <div class="input-append newsletter-box ">
							<form method="POST" action="{{ route('login') }}">
							    {{ csrf_field() }}
							    <fieldset>
					                <input required id="email" name="email" type="text" class="full form-control" placeholder="E-mail" />
					                <i class="ace-icon fa fa-user"></i>

					                <input required id="password" name="password" type="password" class="full form-control" placeholder="Senha" />
					                <i class="ace-icon fa fa-lock"></i>

							        <div class="space"></div>
		                              <button style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
		                                <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/entrar.png') }}">                                            
		                              </button> 
							        <div class="space-4"></div>
							    </fieldset>
							</form>	                        	

                                         
	                            </form>
	                        </div>
	                    </li>
	                </ul>				
			</div>			
		</div>
	</div>
@endsection