@extends('layouts.professor')
@section('content')
@component('components.tutorial')
	teste
@endcomponent

<div class="row">
	<h2 style="margin-left: 20px">Cadastro de Módulo</h2>
</div>

<form id="novo-modulo" class="form-horizontal" role="form" style="margin-left: 20px">
	{{ csrf_field() }}
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Titulo </label>
		<div class="col-sm-6">
			<input id="titulo" name="titulo" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Liberar em: </label>
		<div class="col-sm-6">
			<input id="data_inicio" name="data_inicio" type="text" class="col-xs-12 col-sm-6 date-picker"  />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Turma do Curso (Agenda)</label>
		<div class="col-sm-6">
			<select id="agenda_id" name="agenda_id" class="col-xs-12 col-sm-6" id="form-field-select-3">
				@foreach($agendas as $agenda)
					<option value="{{ $agenda->id }}">{{ $agenda->curso->nome }} - {{ $agenda->cidade }} - {{ $agenda->datas }} / {{ $agenda->monthRes }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<hr>
	<div class="form-group" >
		<div class="col-sm-9">
			<h4 class="header clearfix">
				Descrição
			</h4>
			<textarea id="descricao_html" name="descricao_html" class="col-xs-12 col-sm-6"></textarea>
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
	$("#novo-modulo").validate({
		rules: {},
		messages: {},
		submitHandler: function(form) {
			let arr = [
				{ element:$("input[name=titulo]"), type:'text' },
				{ element:$("input[name=data_inicio]"), type:'text' },
				{ element:$("#agenda_id"), type:'select' },
				{ element:$("#descricao_html"), type:'textarea' }];
			let response = validateFields(arr);
			if(response.status){
				$.confirm({
				    content: function(){
				        var self = this;
				        return $.ajax({
								  type: "POST",
								  url: '{{ route('modulo.create') }}',
								  data: $("#novo-modulo").serialize(),
								  success: function(){
										$.alert({
										    title: 'Sucesso!',
										    content: 'Módulo cadastrado com sucesso!',
										    buttons:{
										    	ok:function(){
										    		window.location.href = "{{ route('professor.modulo.index') }}";
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
		            document.location.href = "{{ route('professor.modulo.index') }}"
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