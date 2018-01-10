@extends('layouts.website')

@section('content')
	<div class="row" style="margin-top: 30px; margin-bottom: 30px">
		<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<div class="col-md-6">
	                <h3 class="title-pink-begin-text"> ENSINO À DISTÂNCIA</h3>
	                <p class="gray-text" style="text-align: justify;">
						Para você se capacitar com a Ecole de onde estiver!
					</p>
					<p class="gray-text" style="text-align: justify;">
						A Ecole Supérieure de Relooking é a primeira escola de formação na França a ter certificação profissionalizante na área da Imagem. Fundada em Paris em 2010, hoje é a principal escola do ramo na Europa e vem se desenvolvendo com sucesso em outros países, entre eles Brasil, Itália, Canadá, Portugal e China.
					</p>
					<p class="gray-text" style="text-align: justify;">
						A escola está presente no Brasil há 5 anos e oferece cursos de formação, de extensão e intensivos em diversas cidades do país. A Ecole Brasil olha para o mercado, estuda as pessoas e seus movimentos, seus interesses e necessidades, e usa todo o conhecimento técnico e experiências para criar algo capaz de revolucionar, que agregue resultados relevantes, duradouros e profundos na vida das pessoas.
					</p>
					<p class="gray-text" style="text-align: justify;">
						Para que pessoas de qualquer lugar do mundo possam se capacitar com a Ecole, visando ampliar ainda mais o alcance da nossa expertise, apresentamos uma linha de ensino a distância, que oferece cursos online, ebooks e mentorias via Skype. Além de poder aprender e participar de onde estiver, o aluno terá a garantia da qualidade, visão e inovação da metodologia Ecole!
					</p>
			</div>
			<div class="col-md-6" style="margin-top: 100px">
          <h4 align="center" class="title-pink-begin-text">Acesso EAD</h4>
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
                                                    @if(Session::has('message'))
                                                        <div style="color:red" class="alert {{Session::get('alert-class')}}">
                                                        <strong>Aviso!</strong> 
                                                            {{ Session::get('message') }}
                                                        </div>                                         
                                                    @endif
											        <div class="space"></div>
						                              <button style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
						                                <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/entrar.png') }}">
						                              </button>
											        <div class="space-4"></div>
											    </fieldset>
											</form>
                  </div>
              </li>
          </ul>
			</div>
		</div>
	</div>
@endsection
