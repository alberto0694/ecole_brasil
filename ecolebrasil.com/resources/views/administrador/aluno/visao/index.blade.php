@extends('layouts.administrador')
@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="col-md-12">
			Curso<br>
			<select id="agenda_id" name="agenda_id" class="col-xs-12 col-sm-6" id="form-field-select-3">
				<option selected >Escolha um Curso</option>
				@foreach($agendas as $agenda)
					<option value="{{ $agenda->id }}">{{ $agenda->curso->nome }} - {{ $agenda->cidade }}</option>
				@endforeach
			</select>
		</div>
		<div class="col-md-12">
			Módulo<br>
			<select id="modulo_id" name="modulo_id" class="col-xs-12 col-sm-6" id="form-field-select-3">
				<option selected="" ">Escolha um Módulo</option>
			</select>
		</div>
		<br>
		<div class="col-md-12">
			<button id="entrar_visao" class="btn btn-pink">Entrar</button>
		</div>
	</div>
@endsection
@section('last-body')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/ckeditor/adapters/jquery.js') }}"></script>
    <script type="text/javascript">
        jQuery(function($){

        	$(window).load(function(){
        		$("#agenda_id").change(function(){
					$.ajax({
					  type: "GET",
					  url: '{{ route('agenda.modulos') }}',
					  data: { agenda_id : $(this).val() },
					  success: function(data){
					  		var jsonArr = JSON.parse( data );
							$('#modulo_id').find('option').remove();
							$('#modulo_id').append('<option selected="" ">Escolha um Módulo</option>');
					  		jQuery.map( jsonArr, function( item, i ) {
					  			$('#modulo_id').append('<option value="'+ item.id +'">'+ item.titulo +'</option>')
					  		});
					  }
					});
        		});

        		$("#entrar_visao").click(function(){
					if($("#modulo_id").val() != ""){
						window.location.href = '{{ route('administrador.aluno.get.visao') }}' + '?modulo_id=' + $("#modulo_id").val();
					}
        		});
        	});

        });

    </script>
@endsection