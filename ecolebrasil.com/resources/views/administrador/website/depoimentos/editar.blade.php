@extends('layouts.administrador')
@section('content')
@component('components.tutorial')
	teste
@endcomponent

<div class="row">
	<h2 style="margin-left: 20px">Alterando de {{ $depoimento->autor }}</h2>
</div>

<form id="editar-depoimento" class="form-horizontal" role="form" style="margin-left: 20px">
	{{ csrf_field() }}
	<input name="_method" type="hidden" value="PUT">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Autor </label>

		<div class="col-sm-6">
			<input value="{{ $depoimento->autor }}" id="autor" name="autor" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1">  </label>

		<div class="col-sm-6">
			@if($depoimento->apenas_video == 'on')
				<input checked id="apenas_video" name="apenas_video" type="checkbox" />Apenas Vídeo
			@else
				<input id="apenas_video" name="apenas_video" type="checkbox" />Apenas Vídeo
			@endif
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Foto</label>
		@component('components.upfile', ['nameId' => 'avatar', 'src' => $depoimento->avatar])
		@endcomponent
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link de Vídeo (Opcional) </label>

		<div class="col-sm-6">
			<input value="{{ $depoimento->video }}" id="video" name="video" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group" >
		<div class="col-sm-9">
				<h4 class="header clearfix">
					Depoimento
				</h4>
				<textarea rows="7" id="descricao_html" name="descricao_html" class="col-xs-12 col-sm-6">
					{{ $depoimento->descricao_html }}
				</textarea>
		</div>
	</div>
	<hr>
	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button id="confirm-form" class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Cadastrar
			</button>

			&nbsp; &nbsp; &nbsp;
			<button id="cancel-form" class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Cancelar
			</button>
		</div>
	</div>
</form>
@endsection
@section('last-body')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/ckeditor/adapters/jquery.js') }}"></script>
<script type="text/javascript">
jQuery(function($){

	//VALIDATOR JQUERY
	$("#editar-depoimento").validate({
				rules: {},
				messages: {},
				submitHandler: function(form) {
					normalizeVideo("input[name=video]");
					$.confirm({
					    content: function(){
					        var self = this;
					        return $.ajax({
									  type: "POST",
									  url: '{{ route('depoimento.update', $depoimento->id) }}',
									  data: $("#editar-depoimento").serialize(),
									  success: function(){
											$.alert({
											    title: 'Sucesso!',
											    content: 'Depoimento cadastrado com sucesso!',
											    buttons:{
											    	ok:function(){
											    		window.location.href = "{{ route('administrador.depoimento.index') }}";
											    	}
											    }
											});
									  }
									});
					    },
						contentLoaded: function(data, status, xhr){
						    this.close();
						}
					});
				}
	});

	$("#cancel-form").click(function(){
			$.confirm({
				title: 'Atenção!',
				content: 'Deseja Cancelar? (Voce poderá perder dados)',
			    buttons: {
			        Sim: function(helloButton){
			            document.location.href = "{{ route('administrador.depoimento.index') }}"
			        },
			        Nao:{
			        	text:"Não"
			        }
			    }
			});
	});

	//EVENTOS ONCHANGE FILES
	var x = document.getElementsByClassName("readFileBase64");
	for (var i = 0; i < x.length; i++) {
	    x[i].addEventListener("change", readFile);
	}

	//DATA-PICKER
	$('.date-picker').datepicker({
		autoclose: true,
		todayHighlight: true,
    	format: 'dd/mm/yyyy',
    	language: 'pt-BR',
    	weekStart: 0
	}).next().on(ace.click_event, function(){
		$(this).prev().focus();
	});

});
</script>
@endsection
