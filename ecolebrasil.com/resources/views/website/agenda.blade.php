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
	<h3 align="center" class="title-pink-begin-text" style="margin-bottom: 45px; margin-right: 42px">AGENDA</h3>
</div>
<div class="margin-top row padding-bottom">
	<div class="container" style="margin: 0; width: 100%; ">
			<?php $x = 0; ?>
			<?php $j = 0; ?>
			@foreach($agendasMonths as $agendas)
				<?php $j++; ?>
				@if($agendas->count() > 0)
						<?php $i = 0; $x++; ?>
						<div class="row" style="height: 40px; <?php if($x % 2 == 0){ echo 'background-color: #eaeaea;'; }?>">
							<h3 style="position: absolute; right: 49%">{{ Config::get('constants.meses')[$j - 1] }}</h3>
						</div>
						@foreach($agendas as $agenda)
							@if($i % 3 == 0)
								<div class="row" style="padding-top: 20px; padding-bottom: 20px; padding-left: 60px; padding-right: 60px; <?php if($x % 2 == 0){ echo 'background-color: #eaeaea;'; }?>">
							@endif
								<div class="col-md-4" style="display: inline-block; margin-bottom: 10px;">
									{{-- href="{{ route('compra.agenda', ['agenda_id' => $agenda->id]) }}" --}}
									<a class="clickable" href="{{ route('cursos', $agenda->curso->slug) }}">
										<div style="text-align: center"  class="col-md-2 col-xs-6 hidden-xs hidden-sm">
											<div class="row">
												<label class="desc-agenda bold" style="font-size: 14pt">{{$agenda->monthRes}}</label>
											</div>
											<hr style="margin:0; margin-bottom: 4px; border-top: 1px solid rgba(239, 64, 96, 1);">
											<div class="row" style="text-align: center">
												<label class="desc-agenda bold">{{ $agenda->datas }}</label>
											</div>
										</div>
										<div class="col-md-2 col-xs-6 hidden-lg hidden-md" style="padding-top:30px">
											<div class="row">
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
							<?php $i++; ?>
							@if($i % 3 == 0)
								</div>
							@endif
						@endforeach
						@if($i % 3 != 0)
							</div>
						@endif
				@endif
			@endforeach
	</div>
</div>
@endsection
