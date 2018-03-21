@extends('layouts.website')
@section('content')
<style type="text/css">
	.img-contato{
		display: block;
		margin: 0 auto;
		width: 20%;
	    background: #ef4060;
	    margin-top: 10px;
	}
	.header-page-content{
		background-image: url('{{ asset('images/equipe.png')  }}')
	}
</style>
<div class="row" style="margin: 0; padding: 0">
	<div class="col-md-12 header-page-content" style=""></div>
	<div class="col-md-12 header-page">
		<p class="gray-dark-color">INSCRIÇÃO</p>
	</div>
</div>
<div class="row paragrafo-padrao">
        @if(Session::has('message'))
	          <div class="row">
	          	<img class="img-contato" src="{{asset('images/logo-ecole-load.png')}}">
	            <h4 align="center">Entraremos em contato com você o mais breve possível! Bem vindo à Ecole. </h4>
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
		<div class="col-md-6 col-md-offset-3">
            <ul style="padding-left:0px; color:gray">
                <li>
                	<form style="margin-left: 15px; margin-right: 15px" class="form-horizontal" role="form" method="POST" action="{{ route('email.inscricao') }}">
                		{{ csrf_field() }}
		                <div class="form-group">
		                  <label class="control-label">Nome Completo</label>
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
		                	<label class="control-label">Curso de Interesse</label>
		                  <input required name="cidade_curso" type="text" class="full form-control " placeholder="Curso de interesse" value="{{ $curso->nome }}">
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
