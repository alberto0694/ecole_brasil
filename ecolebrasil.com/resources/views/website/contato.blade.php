@extends('layouts.website')
<style type="text/css">
	.img-contato{
		display: block;
		margin: 0 auto;
		width: 20%;
	    background: #ef4060;
	    margin-top: 10px;
	}
</style>
@section('content')
<div class="row paragrafo-padrao">
        @if(Session::has('message'))
	          <div class="row">
	          	<img class="img-contato" src="{{asset('images/logo-ecole-load.png')}}">
	            <h4 align="center">Obrigado por entrar em contato conosco.</h4>
	            <h4 align="center">Ecole Brasil</h4>
	          </div>
	          <div class="row">
	            <hr style="margin-top: 50px">
	            <h4 style="text-align: center; margin-top: -50px"><a href="{{route('agenda')}}">
	              <img src="{{asset('images/agenda-button.png')}}">
	            </a></h3>
	          </div>
        @endif
</div>
<div class="row margin-top paragrafo-padrao" style="margin-bottom: 30px; text-align: justify;">
	<div class="col-md-10 col-md-offset-1">
		<div class="col-md-6">
      <h4 class="title-pink-begin-text">ENTRE EM CONTATO</h4>
      <p class="gray-text" style="margin-bottom: 20px">
Tem alguma dúvida ou gostaria de saber mais sobre a escola e os cursos? Entre em contato conosco preenchendo o formulário ao lado!
      </p>
      <p class="gray-text" style="margin-bottom: 20px">Você também pode enviar um email para <b style="font-size: 13pt">contato@ecolebrasil.com</b></p>
      <p class="gray-text" style="margin-bottom: 20px">Entrar em contato pelo telefone <b style="font-size: 13pt">+55 51 3237.2800</b></p>
      <p class="gray-text" style="margin-bottom: 20px">Ou entrar em contato pelo whatsapp <b style="font-size: 13pt">+55 51 99166.0914</b></p>
      <p>	<a target="_blank" href="https://www.facebook.com/ecolebrasil/"><i style="font-size: 21pt" class="fab fa-facebook"></i></a>
          <a target="_blank" href="https://www.instagram.com/ecolebrasil/"><i style="font-size: 21pt; margin-left: 15px" class="fab fa-instagram"></i></a>
     </p>
		</div>
		<div class="col-md-5" style="margin-left: 30px">
                <ul style="padding-left:0px; color:gray">
                    <li>
                    	<form id="form-contato" style="margin-left: 15px; margin-right: 15px" class="form-horizontal" role="form" method="POST" action="{{ route('email.contato') }}">
                    		{{ csrf_field() }}
			                <div class="form-group">
			                  <label class="control-label">Contato</label>
			                  <input required name="contato" type="text" class="full form-control ">
			                </div>
			                <div class="form-group">
			                  <label class="control-label">Telefone ou Celular</label>
			                  <input required name="telefone" type="text" class="full form-control ">
			                </div>
			                <div class="form-group">
			                  <label class="control-label">E-mail</label>
			                  <input required name="email" type="email" class="full form-control ">
			                </div>
			                <div class="form-group">
			                  <label class="control-label">Cidade e Estado</label>
			                  <input required name="cidade" type="text" class="full form-control ">
			                </div>
			                <div class="form-group">
			                  <label class="control-label">Como nos conheceu</label>
			                  <input required name="ecole" type="text" class="full form-control ">
			                </div>
			                <div class="form-group">
			                	<label class="control-label">Cidade(s) que desejaria fazer um curso</label>
			                  <input required name="cidade_curso" type="text" class="full form-control " >
			                </div>
			                <div class="form-group">
			                  <label class="control-label">Cursos de interesse</label>
			                  <textarea required="" style="color:black"  name="curso" class="full form-control " rows="4">
			                  </textarea>
			                </div>			                
			                <div class="form-group">
			                  <label class="control-label">Deixe sua mensagem ou dúvida</label>
			                  <textarea required="" style="color:black"  name="mensagem" class="full form-control " rows="4">
			                  </textarea>
			                </div>
                        <button id="btn-contato" style="max-width:85px; display: block; margin: 0 auto; background: none; border: none;">
                          <img style="max-width:85px; display: block; margin: 0 auto; " src="{{ asset('images/enviar_cinza.png') }}">
                        </button>
	                    </form>
                    </li>
                </ul>
		</div>
	</div>
</div>
<script type="text/javascript">
  $( "#form-contato" ).submit(function( event ) {
    $("#btn-contato").attr('disabled', 'disabled');
  });
</script>
@endsection