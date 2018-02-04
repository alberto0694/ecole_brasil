@extends('layouts.website')

@section('content')
	<div class="row">
	        @if(Session::has('message'))
	            <div class="alert {{Session::get('alert-class')}}">
	            <strong>Aviso!</strong>
	                {{ Session::get('message') }}
	            </div>
	        @endif
	</div>
	<div class="row" style="margin-top: 30px; margin-bottom: 30px">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-6">
	                <h3 class="title-pink-begin-text">ENTRE EM CONTATO</h3>
	                <p class="gray-text">
						Tem alguma dúvida ou gostaria de saber mais sobre a escola e os cursos? Entre em contato conosco preenchendo o formulário ao lado!
	                </p>
	                <p class="gray-text">Você também pode enviar um email para <b>contato@ecolebrasil.com</b></p>
	                <p class="gray-text">Entrar em contato pelo telefone <b>+55 51 3237.2800</b></p>
	                <p class="gray-text">Ou entrar em contato pelo whatsapp <b>+55 51 99166.0914</b></p>
			</div>
			<div class="col-md-6">
	                <ul style="padding-left:0px; color:gray">
	                    <li>
	                    	<form style="margin-left: 15px" class="form-horizontal" role="form" method="POST" action="{{ route('email.contato') }}">
	                    		{{ csrf_field() }}
				                <div class="form-group">
				                  <label class="control-label">Contato</label>
				                  <input required name="contato" type="text" class="full form-control " placeholder="Seu nome">
				                </div>
				                <div class="form-group">
				                  <label class="control-label">Telefone ou Celular</label>
				                  <input required name="telefone" type="text" class="full form-control " placeholder="Telefone">
				                </div>
				                <div class="form-group">
				                  <label class="control-label">E-mail</label>
				                  <input required name="email" type="text" class="full form-control " placeholder="E-mail">
				                </div>
				                <div class="form-group">
				                  <label class="control-label">Cidade e Estado</label>
				                  <input required name="cidade" type="text" class="full form-control " placeholder="Cidade/Estado">
				                </div>
				                <div class="form-group">
				                  <input required name="cidade_curso" type="text" class="full form-control " placeholder="Cidade que desejaria fazer um curso (separe-as por vírgula)">
				                </div>
				                <div class="form-group">
				                  {{-- <label class="control-label">Como nos conhece</label> --}}
				                  <input required name="ecole" type="text" class="full form-control " placeholder="Como conheceu a ecole">
				                </div>
				                <div class="form-group">
				                  {{-- <label class="control-label">Contato</label> --}}
				                  <textarea style="color:black"  name="mensagem" class="full form-control " rows="4" placeholder="Mensagem">
				                  </textarea>
				                </div>
	                              <button style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
	                                <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/enviar_cinza.png') }}">
	                              </button>
		                    </form>
	                    </li>
	                </ul>
			</div>
		</div>
	</div>
@endsection