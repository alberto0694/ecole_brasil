@extends('layouts.website')
@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h3 align="center" class="title-pink-begin-text">AGENDA</h3>
</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1 col-xs-12">
		<?php $i = 0; ?>
		@foreach($agendas as $agenda)
				@if($i % 3 == 0)
					<div class="row hidden-xs hidden-sm" style="margin-top: 20px; margin-bottom: 15px">
				@endif
				 		<div class="col-md-3 col-xs-10 col-xs-offset-1" style=" border: 2px solid;padding: 15px;border-radius: 5px;border-color: #ef3e61;">
				 			<a href="{{ route('cursos', $agenda->curso->id) }}" target="_blank">
				 				<img style="display: block; margin: 0 auto;" src="{{ asset($agenda->logo) }}">
				 			</a>
				 			<h4 align="center">	{{ $agenda->datas }} - {{ $agenda->cidade }}</h4>
				 			<h4 align="center"><b>{{ $agenda->ministrantes }}</b></h4>
				 			<a style="color:rgba(239, 64, 96, 1); " href="{{ route('cursos', $agenda->curso->id) }}" target="_blank"><h3 align="center"><b>{{ $agenda->curso->nome }}</b></h3></a>
							<div class="row">
								<div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
									<h3 style="text-align: center; background: #ef4060; color: white; padding: 2px; ">
										<a style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="{{ route('pagamento', ['agenda_id' => $agenda->id]) }}">Inscrever-se</a>
									</h3>
								</div>
							</div>
				 		</div>
				@if( ($i + 1) % 3 == 0)
					</div>
				@endif
				<?php $i++; ?>
		@endforeach
	</div>
</div>
<div class="row" style="margin-top: 30px">&nbsp;</div>
@endsection
