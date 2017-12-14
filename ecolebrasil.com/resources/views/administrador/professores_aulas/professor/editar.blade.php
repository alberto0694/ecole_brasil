@extends('layouts.administrador')
@section('content')
				@component('components.tutorial')
					teste
				@endcomponent				

				<div class="row">
					<h2 style="margin-left: 20px">Cadastro de Professor</h2>
				</div>
										
				<form id="editar-professor" class="form-horizontal" role="form" style="margin-left: 20px">
					<input name="_method" type="hidden" value="PUT">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nome </label>

						<div class="col-sm-6">
							<input value="{{ $professor->nome }}" id="nome" name="nome" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Sobrenome </label>

						<div class="col-sm-6">
							<input value="{{ $professor->sobrenome }}" id="sobrenome" name="sobrenome" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>					
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Apresentação em Vídeo <small>(Opcional)</small></label>

						<div class="col-sm-6">
							<input value="{{ $professor->apresentacao_video }}" id="apresentacao_video" name="apresentacao_video" type="text" class="col-xs-12 col-sm-6" />
						</div>
						<br><br>
						@if(($professor->apresentacao_video != '') && ($professor->apresentacao_video != ''))
							<div class="row">
								<div class="col-md-4">
									<iframe src="{{ $professor->apresentacao_video }}"></iframe>
								</div>								
							</div>								
						@endif
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Data de Nascimento </label>
						<div class="col-sm-6">
							<input value="{{ $professor->fnascimento }}" id="nascimento" name="nascimento" type="text" class="col-xs-12 col-sm-6 date-picker"  />							
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Foto de Perfil </label>
						@component('components.upfile', ['nameId' => 'avatar', 'src' => $professor->avatar])
						@endcomponent											
					</div>		
										
					<hr>
					<div class="form-group" >
						<div class="col-sm-9">
								<h4 class="header clearfix">
									Descrição								
								</h4>
								<textarea id="descricao_html" name="descricao_html" class="col-xs-12 col-sm-6">
									{{ $professor->descricao_html }}
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
        	$("#editar-professor").validate({
						rules: {
							// nome: {
							// 	required: true,
							// 	minlength: 2
							// },
							// modo: {
							// 	required: true
							// }
						},
						messages: {
							//nome: "Por Favor, informe o nome do curso",
							//modo: "Por Favor, informe o modo do curso"
						},
						submitHandler: function(form) {

							normalizeVideo("input[name=apresentacao_video]");
							
							$.confirm({
							    content: function(){
							        var self = this;
							        return $.ajax({
											  type: "POST",
											  url: '{{ route('professor.update', $professor->id) }}',
											  data: $("#editar-professor").serialize(),
											  success: function(){
													$.alert({
													    title: 'Sucesso!',
													    content: 'Professor alterado com sucesso!',
													    buttons:{
													    	ok:function(){
													    		window.location.href = "{{ route('administrador.professor.index') }}";
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
					            document.location.href = "{{ route('administrador.professor.index') }}"
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