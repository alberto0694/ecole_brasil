@extends('layouts.administrador')
@section('content')
	<div class="row">
		<a href="{{ route('administrador.inadimplencia.novo') }}">
			<button class="btn btn-lg btn-success" style="margin-left: 30px">Criar Inadimplência</button>
		</a>
	</div>

			<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Ecole Website</h3>

						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<div class="table-header">
							Lista de Inadimplências
						</div>
						<div>
							<table id="dynamic-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</th>
										<th>Nome</th>
										<th>Valor</th>
										<th>Razao Pagamento</th>
										<th>Status</th>
										<th></th>
										<th></th>
									</tr>
								</thead>

								<tbody>

								@foreach($inadimplencias as $inadimplencia)
									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">{{ $inadimplencia->nome }}</a>
										</td>
										<td>
											<a href="#">{{ $inadimplencia->valor }}</a>
										</td>
										<td>
											<a href="#">{!! $inadimplencia->razao_pagamento !!}</a>
										</td>
										<td>
											<a href="#">{{ $inadimplencia->pago }}</a>
										</td>
										<td></td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="green" href="{{ route('administrador.inadimplencia.editar', $inadimplencia->id) }}">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="{{ route('administrador.inadimplencia.editar', $inadimplencia->id) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
			</div>

@endsection
@section('last-body')
		<script src="{{asset('assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
		<script src="{{asset('assets/js/dataTables.buttons.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.flash.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.html5.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.print.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.colVis.min.js') }}"></script>
		<script src="{{asset('assets/js/dataTables.select.min.js') }}"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$('#dynamic-table').DataTable();
			});
		</script>

@endsection