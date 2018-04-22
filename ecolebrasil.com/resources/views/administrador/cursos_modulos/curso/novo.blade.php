@extends('layouts.administrador')
@section('content')
@component('components.tutorial')
	teste
@endcomponent

<div class="row">
	<h2 style="margin-left: 20px">Cadastro de Curso</h2>
</div>

<form id="novo-curso" class="form-horizontal" role="form" style="margin-left: 20px" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nome do Curso </label>

		<div class="col-sm-6">
			<input id="nome" name="nome" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link de Vídeo </label>

		<div class="col-sm-6">
			<input id="link_video" name="link_video" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Imagem de Background </label>
		@component('components.upfile', ['nameId' => 'background_img', 'src' => ''])
		@endcomponent
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Página Inicial</label>
		<div class="col-sm-6">
			<select id="pagina_inicial" name="pagina_inicial" class="col-xs-12 col-sm-6" id="form-field-select-3">
				<option value="1">Sim</option>
				<option value="0">Não</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Carga Horária </label>

		<div class="col-sm-6">
			<input id="carga_horaria" name="carga_horaria" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Modelo (Apenas Ilustrativo)</label>
		<div class="col-sm-6">
			<select id="modelo" name="modelo" class="col-xs-12 col-sm-6" id="form-field-select-3">
				<option value="Presencial">Presencial</option>
				<option value="À Distância">À Distância</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Card do Curso </label>
		@component('components.upfile', ['nameId' => 'card', 'src' => ''])
		@endcomponent
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tipo de Curso</label>
		<div class="col-sm-6">
			<select id="formacao_id" name="formacao_id" class="col-xs-12 col-sm-6" id="form-field-select-3">
				@foreach($formacoes as $formacao)
					<option value="{{ $formacao->id }}">{{ $formacao->nome }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<hr>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ementa do Curso (PDF) </label>
		@component('components.upfile', ['nameId' => 'ementa', 'src' => ''])
		@endcomponent
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Contrato (PDF) </label>
		@component('components.upfile', ['nameId' => 'contrato_curso', 'src' => ''])
		@endcomponent
	</div>
	<div class="form-group" >
		<div class="col-sm-9">
			<h4 class="header clearfix">
				Conteúdos Abordados
			</h4>

			<textarea id="conteudo" name="conteudo" class="col-xs-12 col-sm-6"></textarea>
		</div>
	</div>
	<hr>
	<div class="form-group" >
		<div class="col-sm-9">
				<h4 class="header clearfix">
					Material Didático
				</h4>
				<textarea id="material" name="material" class="col-xs-12 col-sm-6"></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-9">
				<h4 class="header clearfix">
					Apresentação do Curso
				</h4>

				<textarea id="apresentacao" name="apresentacao" class="col-xs-12 col-sm-6"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-9">
				<h4 class="header clearfix">
					Diferenciais
				</h4>

				<textarea id="informacoes" name="informacoes" class="col-xs-12 col-sm-6"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-9">
				<h4 class="header clearfix">
					Objetivos da Formação
				</h4>

				<textarea id="objetivos" name="objetivos" class="col-xs-12 col-sm-6"></textarea>
		</div>
	</div>
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
	$("#novo-curso").validate({
		rules: {},
		messages: {},
		submitHandler: function(form) {
			let arr = [
				{ element:$("input[name=nome]"), type:'text' },
				{ element:$("input[name=background_img]"), type:'file' },
				{ element:$("#pagina_inicial"), type:'select' },
				{ element:$("input[name=carga_horaria]"), type:'text' },
				{ element:$("#modelo"), type:'select' },
				{ element:$("input[name=card]"), type:'file' },
				{ element:$("#formacao_id"), type:'select' },
				{ element:$("#conteudo"), type:'textarea' },
				{ element:$("#material"), type:'textarea' },
				{ element:$("#apresentacao"), type:'textarea' },
				{ element:$("#informacoes"), type:'textarea' },
				{ element:$("#objetivos"), type:'textarea' }];
			let response = validateFields(arr);
			if(response.status){
				normalizeVideo("input[name=link_video]");
				$.confirm({
				    content: function(){
				        var self = this;
				        return $.ajax({
								  type: "POST",
								  url: '{{ route('curso.create') }}',
								  data: $("#novo-curso").serialize(),
								  success: function(){
										$.alert({
										    title: 'Sucesso!',
										    content: 'Curso cadastrado com sucesso!',
										    buttons:{
										    	ok:function(){
										    		window.location.href = "{{ route('administrador.curso.index') }}";
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


	$('input[name=investimento]').priceFormat({
	    prefix: 'R$ ',
	    centsSeparator: ',',
	    thousandsSeparator: '.'
	});

	$("#cancel-form").click(function(){
		$.confirm({
			title: 'Atenção!',
			content: 'Deseja Cancelar? (Voce poderá perder dados)',
		    buttons: {
		        Sim: function(helloButton){
		            document.location.href = "{{ route('administrador.curso.index') }}"
		        },
		        Nao:{
		        	text:"Não"
		        }
		    }
		});
	});

	//ckeditor
	$('textarea').ckeditor();

	$(".readFileBase64").each(function(){
		$(this).rules("add", {
			  required:true
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