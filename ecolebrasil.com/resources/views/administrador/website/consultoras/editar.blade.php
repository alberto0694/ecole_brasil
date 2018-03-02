@extends('layouts.administrador')
@section('content')
@component('components.tutorial')
	teste
@endcomponent

<div class="row">
	<h2 style="margin-left: 20px">Alterando Consultora {{ $consultora->nome }}</h2>
</div>

<form id="editar-consultora" class="form-horizontal" role="form" style="margin-left: 20px">
	{{ csrf_field() }}
	<input name="_method" type="hidden" value="PUT">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nome </label>

		<div class="col-sm-6">
			<input value="{{ $consultora->nome }}" id="nome" name="nome" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Cidade </label>

		<div class="col-sm-6">
			<input value="{{ $consultora->cidade }}" id="cidade" name="cidade" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Site/Link </label>

		<div class="col-sm-6">
			<input value="{{ $consultora->site }}" id="site" name="site" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Foto </label>
		@component('components.upfile', ['nameId' => 'avatar', 'src' => $consultora->avatar])
		@endcomponent
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
	$("#editar-consultora").validate({
		rules: {},
		messages: {},
		submitHandler: function(form) {
			let arr = [
				{ element:$("input[name=nome]"), type:'text' },
				{ element:$("input[name=cidade]"), type:'text' }];
			let response = validateFields(arr);
			if(response.status){
				$.confirm({
				    content: function(){
				        var self = this;
				        return $.ajax({
								  type: "POST",
								  url: '{{ route('consultora.update', $consultora->id) }}',
								  data: $("#editar-consultora").serialize(),
								  success: function(){
										$.alert({
										    title: 'Sucesso!',
										    content: 'Consultora cadastrada com sucesso!',
										    buttons:{
										    	ok:function(){
										    		window.location.href = "{{ route('administrador.consultora.index') }}";
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
		}
	});

	$("#cancel-form").click(function(){
		$.confirm({
			title: 'Atenção!',
			content: 'Deseja Cancelar? (Voce poderá perder dados)',
		    buttons: {
		        Sim: function(helloButton){
		            document.location.href = "{{ route('administrador.consultora.index') }}"
		        },
		        Nao:{
		        	text:"Não"
		        }
		    }
		});
	});


	//ckeditor
	$('textarea').ckeditor();

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