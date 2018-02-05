@extends('layouts.aluno')
@section('content')
	<style type="text/css">
		.box-comment{
				max-height: 400px;
				overflow-x: hidden;
				border: 1px solid;
				border-radius: 3px;
				color:rgba(239, 64, 96, 1);
				padding: 3px;
				width: 100%;
				height: auto;
		}
	</style>
	<div class="col-sm-12">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
				<?php 	$i = 0;
						$class = "true";
						$active = "active";
				?>
				@foreach($exercicios as $exercicio)
					@if($i > 0)
						<?php $class = "false"; $active = ""; ?>
					@endif
					<?php $i++; ?>

					<li class="{{$active}}">
						<a data-toggle="tab" href="#aula_{{ $i }}" aria-expanded="{{ $class }}">{{$exercicio->titulo}}</a>
					</li>
				@endforeach
			</ul>

			<div class="tab-content">
				<?php 	$i = 0;
						$class = "active";
				?>
				@foreach($exercicios as $exercicio)
					@if($i > 0)
						<?php $class = "false"; ?>
					@endif
					<?php $i++; ?>

					<div id="aula_{{ $i }}" class="tab-pane {{ $class }}" style="overflow: auto">
						<h3 align="center">{{ $exercicio->titulo }}</h3>
						<div class="col-md-6">
							@if($exercicio->link != '0')
								<iframe width="100%" allowfullscreen  style="min-height: 300px" src="{{ $exercicio->link }}"></iframe>
							@endif
								<a style="color:white" href="{{ asset($exercicio->arquivo) }}" download title="{{ $exercicio->titulo }}">
								<button class="btn btn-pink">
									Download Exercício
								</button>
								</a>
							<p>{!! $exercicio->descricao_html !!}</p>
						</div>
						<div class="col-md-6">
								<div class="box-comment" id="box-comment_{{ $i }}">
										@if($exercicio->comentarios->count() > 0)
												@foreach($exercicio->comentarios as $comentario)
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
												<img alt="Susan't Avatar" src="{{ asset($aluno->avatar) }}">
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

														<input type="hidden" name="user_id" value="{{ $aluno->user_id }}">
														{{ csrf_field() }}
														<input type="hidden" name="exercicio_id" value="{{ $exercicio->id }}">
													</div>
												</div>
											</div>
										</div>
								</form>
						</div>

					</div>
					<input id="last_time_{{$exercicio->id}}" type="hidden" name="last_time_{{$exercicio->id}}" value="{{ $exercicio->lastTime }}">
				@endforeach
			</div>
		</div>
	</div>


@endsection
@section('last-body')
	<script type="text/javascript">
            $(window).load(function(){
            	<?php $i=0; ?>
				@foreach($exercicios as $exercicio)
					@if($i > 0)
						<?php $class = "false"; ?>
					@endif
					<?php $i++; ?>
						$("#comentario_{{ $i }}").val("");
	            		$("#enviar_{{ $i }}").click(function(){
	            				$("#enviar_{{ $i }}").prop("disabled",true);
					            $.ajax({
					              type: "POST",
					              url: '{{ route('ExercicioComentario.create') }}',
					              data: $("#comentario-form_{{ $i }}").serialize(),
					              success: function(data, status, request){
					              		$("#box-comment_{{ $i }}").append('<div class="timeline-item clearfix"><div class="timeline-info"><img alt="Susant Avatar" src="{{ asset($aluno->avatar) }}"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">{{ $aluno->nome }}</a><span class="grey"> comentou agora</span></h5></div><div class="widget-body"><div class="widget-main">'+$("#comentario_{{ $i }}").val()+'</div></div></div></div>');
					              		$("#comentario_{{ $i }}").val("");
														var objDiv = document.getElementById("box-comment_{{ $i }}");
														objDiv.scrollTop = objDiv.scrollHeight;
														$("#enviar_{{ $i }}").prop("disabled",false);
					              }
					            });
	            		});

		            	setInterval(function(){
		            		if($("input[name=last_time_{{$exercicio->id}}]").val() === ''){
	            					$("input[name=last_time_{{$exercicio->id}}]").val('2018-01-01 00:00:00');
	            			}
				            $.ajax({
				              type: "GET",
				              url: '{{ route('exercicio.get.comentario') }}',
				              data: {
				              		last:$("input[name=last_time_{{$exercicio->id}}]").val(),
				              		user_id:{{ $aluno->user_id }},
				              		exercicio_id:{{ $exercicio->id }}
				              },
				              success: function(data, status, request){
				              		console.log(request.responseJSON);
				              		if(request.responseJSON.items.length > 0){
						              		request.responseJSON.items.forEach(function(item, index){
						              			if(document.getElementById("box-comment_{{ $i }}").innerHTML.indexOf(item.toString()) < 0)
						              			{
							              			$("#box-comment_{{ $i }}").append(item.toString());
							              			$("input[name=last_time_{{$exercicio->id}}").val(request.responseJSON.last_time);
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
