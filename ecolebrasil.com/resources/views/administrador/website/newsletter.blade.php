@extends('layouts.administrador')
@section('content')
	<div class="row">
{{-- 		<a href="{{ route('administrador.depoimento.novo') }}">
			<button class="btn btn-lg btn-success" style="margin-left: 30px">Novo Conta</button>
		</a>		 --}}
	</div>

			<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Ecole Contatos</h3>

						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<div class="table-header">
							Histórico de Contatos
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
										<th>Contato</th>
										<td>E-mail</td>
										<th></th>
									</tr>
								</thead>

								<tbody>

								@foreach($newsletters as $newsletter)
									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">{{ $newsletter->contato }}</a>
										</td>
										<td>{{ $newsletter->email }}</td>
										<td></td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
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