@extends('layouts.website')
@section('content')
<style type="text/css">
	.faca-inscricao{
		border: 2px solid rgba(239, 64, 96, 1);
		border-radius: 10px;
		display: block;
		text-align: center;
		background: white;
		color: white;
		padding: 2px;
	}
</style>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<h3 align="center" class="title-pink-begin-text" style="margin-top: 50px">CURSOS ECOLE</h3>
</div>
<div class="row">
	<div style="width: 80%; margin-left: 10%">
		@if($cursos->count() > 0)
			@foreach($cursos as $curso)
				<div class="col-md-6 col-xs-12" style="margin-top: 50px">
					<a href="{{ route('cursos', $curso->slug) }}"><img style=" margin: 0 auto; display: block; width: 65%; " src="{{ asset($curso->card) }}">
					</a>
					<div class="row">
						<div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
							<h4 class="faca-inscricao">
								<a style="text-decoration: none; font-weight: bold" href="{{ route('compra.agenda', ['curso_id' => $curso->id]) }}">Faça sua inscrição</a>
							</h4>
						</div>
					</div>
				</div>
			@endforeach
		@else
      <div class="row">
        <h3 align="center">Desculpe, mas não encontramos nenhum curso, <a href="{{ route('contato') }}">entre em contato</a> conosco ou confira nossa <a href="{{ route('agenda') }}">agenda completa!</a></h3>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
          <h3 style="text-align: center; background: #ef4060; color: white; padding: 2px; ">
            <a style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="{{ route('contato') }}">Entre em contato</a>
          </h3>
        </div>
      </div>
      <div class="row">
        <hr style="margin-top: 50px">
        <h3 style="text-align: center; margin-top: -50px"><a href="{{route('agenda')}}">
          <img src="{{asset('images/agenda-button.png')}}">
        </a></h3>
      </div>
		@endif
	</div>
</div>
@endsection
