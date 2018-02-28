@extends('layouts.professor')
@section('content')
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
	<div class="col-sm-12">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
				<?php 	$i = 0;
						$class = "true";
						$active = "active";
				?>
				@foreach($aulas as $aula)
					@if($i > 0)
						<?php $class = "false"; $active = ""; ?>
					@endif
					<?php $i++; ?>

					<li class="{{$active}}">
						<a data-toggle="tab" href="#aula_{{ $i }}" aria-expanded="{{ $class }}">{{$aula->titulo}}</a>
					</li>
				@endforeach
			</ul>

			<div class="tab-content">
				<?php 	$i = 0;
						$class = "active";
				?>
				@foreach($aulas as $aula)
					@if($i > 0)
						<?php $class = "false"; ?>
					@endif
					<?php $i++; ?>

					<div id="aula_{{ $i }}" class="tab-pane {{ $class }}" style="overflow: auto">
						<h3 align="center">{{ $aula->titulo }}</h3>
						<div class="col-md-6">
							<iframe width="100%" allowfullscreen  style="min-height: 300px" src="{{ $aula->url_video }}"></iframe>
							<p>{!! $aula->descricao_html !!}</p>
						</div>
						<div class="col-md-6">
								<div class="box-comment" id="box-comment_{{ $i }}">
										@if($aula->comentarios->count() > 0)
												@foreach($aula->comentarios as $comentario)
													{!! $comentario->item !!}
												@endforeach
										@else
											<h5>Sem comentários. Seja o primeiro!</h5>
										@endif
								</div>
								<hr>
								<form id="comentario-form_{{ $i }}">
										<div class="timeline-item clearfix">
											<div class="timeline-info">
												<img alt="Susan't Avatar" src="{{ asset($professor->avatar) }}">
											</div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h5 class="widget-title smaller">
														<span class="grey">Comente ou tire sua dúvida!</span>
													</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<textarea rows="3" id="comentario_{{ $i }}" type="text" name="comentario" style="width: 100%; height: 100%">
														</textarea>
														<button type="button" id="enviar_{{ $i }}" class="btn btn-info"><i class="ace-icon fa fa-reply icon-only bigger-150"></i></button>

														<input type="hidden" name="user_id" value="{{ $professor->user_id }}">
														{{ csrf_field() }}
														<input type="hidden" name="aula_id" value="{{ $aula->id }}">
													</div>
												</div>
											</div>
										</div>
								</form>
						</div>

					</div>
					<input id="last_time_{{$aula->id}}" type="hidden" name="last_time_{{$aula->id}}" value="{{ $aula->lastTime }}">
				@endforeach
			</div>
		</div>
	</div>


@endsection
@section('last-body')
	<script type="text/javascript">
            $(window).load(function(){
            	<?php $i=0; ?>
				@foreach($aulas as $aula)
					@if($i > 0)
						<?php $class = "false"; ?>
					@endif
					<?php $i++; ?>

	            		$("#enviar_{{ $i }}").click(function(){
	            				$("#enviar_{{ $i }}").prop("disabled",true);
					            $.ajax({
					              type: "POST",
					              url: '{{ route('AulaComentario.create') }}',
					              data: $("#comentario-form_{{ $i }}").serialize(),
					              success: function(data, status, request){
					              		$("#box-comment_{{ $i }}").append('<div class="timeline-item clearfix"><div class="timeline-info"><img alt="Susant Avatar" src="{{ asset($professor->avatar) }}"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">{{ $professor->nome }}</a><span class="grey"> comentou agora</span></h5></div><div class="widget-body"><div class="widget-main">'+$("#comentario_{{ $i }}").val()+'</div></div></div></div>"');
					              		$("#comentario_{{ $i }}").val("");
										var objDiv = document.getElementById("box-comment_{{ $i }}");
										objDiv.scrollTop = objDiv.scrollHeight;
										$("#enviar_{{ $i }}").prop("disabled",false);
					              }
					            });
	            		});

		            	setInterval(function(){
					            $.ajax({
					              type: "GET",
					              url: '{{ route('aula.get.comentario') }}',
					              data: {
					              		last:$("input[name=last_time_{{$aula->id}}]").val(),
					              		user_id:{{ $professor->user_id }},
					              		aula_id:{{ $aula->id }}
					              },
					              success: function(data, status, request){
					              		console.log(request.responseJSON);
					              		if(request.responseJSON.items.length > 0){
							              		request.responseJSON.items.forEach(function(item, index){
							              			if(document.getElementById("box-comment_{{ $i }}").innerHTML.indexOf(item.toString()) < 0)
							              			{
								              			$("#box-comment_{{ $i }}").append(item.toString());
								              			$("input[name=last_time_{{$aula->id}}").val(request.responseJSON.last_time);
								              		}
							              		});
					              		}

					              }
					            });
					    }, 2500);
	            @endforeach
            });


	</script>
@endsection
