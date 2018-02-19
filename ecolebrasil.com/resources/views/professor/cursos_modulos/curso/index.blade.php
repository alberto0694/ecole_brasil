@extends('layouts.administrador')
@section('content')
	<div class="row">
		<a href="{{ route('administrador.curso.novo') }}">
			<button class="btn btn-lg btn-success" style="margin-left: 30px">Novo Curso</button>	
		</a>		
	</div>
		<div class="row">
			<div class="col-xs-12">
				<h3 class="header smaller lighter blue">Ecole Cursos</h3>

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
				<div class="table-header">
					Quadro de Cursos
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
								<th>Curso</th>
								<th class="hidden-480">Apresentação</th>
								<th class="hidden-480"></th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							@foreach($cursos as $curso)
									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">{{ $curso->nome }}</a>
										</td>
										<td class="hidden-480"><a target="_blank" href="{{ $curso->link_video }}">{{ $curso->link_video }}</a></td>
										<td>
											@if($curso->openned)
												<span class="label label-sm label-success">Aberto</span>
											@else
												<span class="label label-sm label-warning">Aguardando</span>
											@endif
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
{{-- 												<a class="blue" href="{{ route('administrador.curso.visualizar', $curso->id) }}">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a> --}}

												<a class="green" href="{{ route('administrador.curso.editar', $curso->id) }}">
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
														{{-- <li>
															<a href="{{ route('administrador.curso.visualizar', $curso->id) }}" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li> --}}

														<li>
															<a href="{{ route('administrador.curso.editar', $curso->id) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
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