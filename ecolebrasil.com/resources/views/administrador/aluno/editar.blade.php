@extends('layouts.administrador')
@section('content')
	@component('components.tutorial')
		teste
	@endcomponent

	<div class="row">
		<h2 style="margin-left: 20px">Cadastro de Aluno</h2>
	</div>

	<form id="editar-aluno" class="form-horizontal" role="form" style="margin-left: 20px">
		{{ csrf_field() }}
		<input type="hidden" name="user_id" value="{{ $aluno->user_id }}">
		<input name="_method" type="hidden" value="PUT">
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nome </label>

			<div class="col-sm-6">
				<input value="{{ $aluno->nome }}" id="nome" name="nome" type="text" class="col-xs-12 col-sm-6" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Sobrenome </label>

			<div class="col-sm-6">
				<input value="{{ $aluno->sobrenome }}" id="sobrenome" name="sobrenome" type="text" class="col-xs-12 col-sm-6" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email </label>

			<div class="col-sm-6">
				<input value="{{ $aluno->user->email }}" id="email" name="email" type="text" class="col-xs-12 col-sm-6" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Senha </label>

			<div class="col-sm-6">
				<input  id="password" name="password" type="text" class="col-xs-12 col-sm-6" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Profissão/Ocupação </label>

			<div class="col-sm-6">
				<input value="{{ $aluno->profissao }}" id="profissao" name="profissao" type="text" class="col-xs-12 col-sm-6" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nascimento </label>
			<div class="col-sm-6">
				<input value="{{ $aluno->fnascimento }}" id="nascimento" name="nascimento" type="text" class="col-xs-12 col-sm-6 date-picker"  />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Avatar </label>
			@component('components.upfile', ['nameId' => 'avatar', 'src' => $aluno->avatar])
			@endcomponent
		</div>
		<div class="form-group">
			<div class="row">
			    <div class="col-md-4">
			    	<label>Agendas/Cursos disponiveis</label>
			        <select name="cursos[]" class="multiselect form-control" size="8" multiple="multiple" data-right="#multiselect_to_1" data-right-all="#right_All_1" data-right-selected="#right_Selected_1" data-left-all="#left_All_1" data-left-selected="#left_Selected_1">
						@foreach($agendas as $agenda)
							 <option value="{{ $agenda->id }}">{{ $agenda->descricao.' - '.$agenda->curso->nome }}</option>
						@endforeach
			        </select>
			    </div>

			    <div class="col-md-2">
			        <button type="button" id="right_All_1" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
			        <button type="button" id="right_Selected_1" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
			        <button type="button" id="left_Selected_1" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
			        <button type="button" id="left_All_1" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
			    </div>
			    <div class="col-md-4">
			    	<label>Agendas/Cursos para este Aluno</label>
			        <select name="agendas_alunos[]" id="multiselect_to_1" class="form-control" size="8" multiple="multiple">

						@foreach($aluno->agendas as $agenda)
							 <option value="{{ $agenda->id }}">{{ $agenda->descricao.' - '.$agenda->curso->nome }}</option>
						@endforeach
			        </select>
			    </div>
			</div>
		</div>
		<hr>
		<div class="form-group" >
			<div class="col-sm-9">
				<h4 class="header clearfix">
					Descrição
				</h4>
				<textarea id="descricao_html" name="descricao_html" class="col-xs-12 col-sm-6">
					{{ $aluno->descricao_html }}
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
<script src="{{ asset('js/jquery.bootstrap-duallistbox.min.js') }}"></script>
<script src="{{ asset('js/multiselect.js') }}"></script>
<script type="text/javascript">
	$(window).load(function(){
		$('.multiselect').multiselect();
	});
    jQuery(function($){
    	//VALIDATOR JQUERY
    	$("#editar-aluno").validate({
			rules: {},
			messages: {},
			submitHandler: function(form) {
				let arr = [
					{ element:$("input[name=nome]"), type:'text' },
					{ element:$("input[name=sobrenome]"), type:'text' },
					{ element:$("input[name=email]"), type:'email' },
					{ element:$("input[name=profissao]"), type:'text' },
					{ element:$("#multiselect_to_1"), type:'select' },
					{ element:$("#descricao_html"), type:'textarea' }];
				let response = validateFields(arr);
				if(response.status){
					$.confirm({
					    content: function(){
					        var self = this;
					        return $.ajax({
									  type: "POST",
									  url: '{{ route('aluno.update', $aluno->id) }}',
									  data: $("#editar-aluno").serialize(),
									  success: function(){
											$.alert({
											    title: 'Sucesso!',
											    content: 'Aluno alterado com sucesso!',
											    buttons:{
											    	ok:function(){
											    		window.location.href = "{{ route('administrador.aluno.index') }}";
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
			            document.location.href = "{{ route('administrador.aluno.index') }}"
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
