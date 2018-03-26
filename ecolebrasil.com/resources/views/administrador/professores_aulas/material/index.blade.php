@extends('layouts.administrador')
@section('content')
<div class="row">
	<a href="{{ route('administrador.material.novo') }}">
		<button class="btn btn-lg btn-success" style="margin-left: 30px">Novo Conteúdos EAD</button>
	</a>
</div>
{{ csrf_field() }}
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Ecole Conteúdos EAD</h3>

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Lista de Conteúdos EAD
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
						<th>Titulo</th>
						<th>Modulo</th>
						<th>Curso</th>
						<th></th>
					</tr>
				</thead>

				<tbody>

				@foreach($materiais as $material)
					<tr>
						<td class="center">
							<label class="pos-rel">
								<span class="lbl"></span>
							</label>
						</td>

						<td>
							<a href="#">{{ $material->titulo }}</a>
						</td>
						<td>{{ $material->modulo->titulo }}</td>
						<td>{{ $material->modulo->agenda->labelCombo }}</td>
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="green" href="{{ route('administrador.material.editar', $material->id) }}">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" onclick="return deletar_{{$material->id}}()">
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
											<a href="{{ route('administrador.material.editar', $material->id) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a onclick="return deletar_{{$material->id}}()" class="tooltip-error" data-rel="tooltip" title="Delete">
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
	@foreach($materiais as $material)
		function deletar_{{$material->id}}(){
			$.confirm({
				title: 'Atenção!',
				content: 'Deseja realmente deletar este regisro?',
			    buttons: {
			        Sim: (helloButton) => {
			            $.ajax({
						  headers: {
						    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						  },
			              type: "DELETE",
			              url: "{{ route('material.delete', $material->id) }}",
			              data: {},
			              success: function(data, status, request){
			              		document.location.reload();
			              }
			            });
			        },
			        Nao:{
			        	text:"Não"
			        }
			    }
			});
		}
	@endforeach
	jQuery(function($) {
		$('#dynamic-table').DataTable();
	});
</script>
@endsection