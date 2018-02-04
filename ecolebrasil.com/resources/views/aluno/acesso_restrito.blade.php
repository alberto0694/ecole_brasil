@extends('layouts.aluno')
@section('content')
<div class="col-sm-6">
		<h3 class="row header smaller lighter blue">
			<span class="col-xs-6"> Materiais Ecole </span>
		</h3>

		<div id="accordion" class="accordion-style1 panel-group">
			<?php $i = 0; ?>
			@foreach($acessos_restritos as $acesso)
					<?php $i++; ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#item_{{ $i }}" aria-expanded="false">
									<i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
									{{ $acesso->titulo }}
								</a>
							</h4>
						</div>

						<div class="panel-collapse collapse" id="item_{{ $i }}" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								@if($acesso->link != '0')
									<iframe width="100%" allowfullscreen  style="min-height: 300px" src="{{ $acesso->link }}"></iframe>
								@endif
								<a style="color:white" download="" href="{{ asset($acesso->file) }}">
									<button id="" class="btn btn-pink">
											Download Arquivo
									</button>							
								</a>	
							</div>
						</div>
					</div>
			@endforeach
		</div>
	</div>			
@endsection
