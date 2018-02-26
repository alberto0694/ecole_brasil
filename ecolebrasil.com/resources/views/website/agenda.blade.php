@extends('layouts.website')
<style type="text/css">
	.desc-agenda{
		color:rgba(239, 64, 96, 1);
	}
	.bold{
		font-weight: bold;
		margin-bottom: 0;
	}
	.desc-agenda-prof{
		color: gray;
	}

	.clickable div, .clickable label, .clickable p{
		cursor:pointer;
	}
</style>
@section('content')
<div class="row">
	<div class="margin-min-top col-md-10 col-md-offset-1">
	<h3 align="center" class="title-pink-begin-text">AGENDA</h3>
</div>
<div class=" row padding-bottom">
	<div class="col-md-10 col-md-offset-1 col-xs-12">
		<?php $i = 0; ?>
		@foreach($agendas as $agenda)
			@if($i % 3 == 0)
				<div class="margin-min-top row" style="margin-bottom: 15px">
					{{-- <div class="col-md-12"> --}}
			@endif
					<div class="col-md-4">
						<a class="clickable" href="{{ route('compra.agenda', ['agenda_id' => $agenda->id]) }}">
							<div class="col-md-2 col-xs-6 hidden-xs hidden-sm">
								<div class="row" style="text-align:center">
									<label class="desc-agenda bold" style="font-size: 14pt">{{$agenda->monthRes}}</label>
								</div>
								<hr style="margin:0; margin-bottom: 4px; border-top: 1px solid rgba(239, 64, 96, 1);">
								<div class="row" style="text-align: center">
									<label class="desc-agenda bold">{{ $agenda->datas }}</label>
								</div>
							</div>
							<div class="col-md-2 col-xs-6 hidden-lg hidden-md" style="padding-top:30px">
								<div class="row" style="text-align:center">
									<label class="desc-agenda bold" style="font-size: 14pt">{{$agenda->monthRes}}</label>
								</div>
								<hr style="margin:0; margin-bottom: 4px; border-top: 1px solid rgba(239, 64, 96, 1);">
								<div class="row" style="text-align: center">
									<label class="desc-agenda bold">{{ $agenda->datas }}</label>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<img style="width: 100%" src="{{asset($agenda->curso->card)}}">
							</div>
							<div class="col-md-6 hidden-xs hidden-sm" style="padding: 0">
								<p class="upper-case bold gray-dark-color">{{ $agenda->cidade }}</p>
								<p class="desc-agenda bold gray-dark-color">{{ $agenda->curso->nome }}</p>
								<p class="desc-agenda-prof">{{ $agenda->ministrantes }}</p>
							</div>
							<div class="col-xs-12 hidden-md hidden-lg" style="padding: 0; margin-top: 10px; text-align: center">
								<p class="upper-case bold gray-dark-color">{{ $agenda->cidade }}</p>
								<p class="desc-agenda bold gray-dark-color">{{ $agenda->curso->nome }}</p>
								<p class="desc-agenda-prof">{{ $agenda->ministrantes }}</p>
							</div>
						</a>
					</div>
			@if( ($i + 1) % 3 == 0)
					{{-- </div> --}}
				</div>
			@endif
			<?php $i++; ?>
		@endforeach
	</div>
</div>
@endsection
