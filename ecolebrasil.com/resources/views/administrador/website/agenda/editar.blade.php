@extends('layouts.administrador')
@section('content')
				@component('components.tutorial')
					teste
				@endcomponent				

				<div class="row">
					<h2 style="margin-left: 20px">Editar Agenda</h2>
				</div>
										
				<form id="editar-agenda" class="form-horizontal" role="form" style="margin-left: 20px">
					{{ csrf_field() }}
					<input name="_method" type="hidden" value="PUT">
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Descricão </label>

						<div class="col-sm-6">
							<input value="{{ $agenda->descricao }}" id="descricao" name="descricao" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ministrantes </label>

						<div class="col-sm-6">
							<input value="{{ $agenda->ministrantes }}" id="ministrantes" name="ministrantes" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Data de Início </label>
						<div class="col-sm-6">
							<input value="{{ $agenda->formatedDate }}" id="data_inicio" name="data_inicio" type="text" class="col-xs-12 col-sm-6 date-picker"  />							
						</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Carga Horária </label>

						<div class="col-sm-6">
							<input value="{{ $agenda->carga_horaria }}"  id="carga_horaria" name="carga_horaria" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Modelo do Curso</label>
						<div class="col-sm-6">
							<select id="modelo" name="modelo" class="col-xs-12 col-sm-6" id="form-field-select-3">
								@if($agenda->modelo == "P")
									<option selected="" value="P">Presencial</option>
									<option value="D">À Distância</option>
								@else
									<option value="P">Presencial</option>
									<option selected value="D">À Distância</option>
								@endif									
							</select>
						</div>
					</div> 					
							
					
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Card</label>
						@component('components.upfile', ['nameId' => 'avatar', 'src' => $agenda->avatar])
						@endcomponent											
					</div>	
					<hr>	
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Datas </label>

						<div class="col-sm-6">
							<input value="{{ $agenda->datas }}" id="datas" name="datas" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Cidade </label>

						<div class="col-sm-6">
							<input value="{{ $agenda->cidade }}" id="cidade" name="cidade" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Curso</label>
						<div class="col-sm-6">
							<select id="curso_id" name="curso_id" class="col-xs-12 col-sm-6" id="form-field-select-3">
									@foreach($cursos as $curso)
										@if($agenda->curso_id == $curso->id)
											<option selected value="{{ $curso->id }}">{{$curso->nome}}</option>
										@else
											<option value="{{ $curso->id }}">{{$curso->nome}}</option>
										@endif
									@endforeach
							</select>
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

        	//VALIDATOR JQUERY
        	$("#editar-agenda").validate({
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

							// normalizeVideo("input[name=apresentacao_video]");
							
							$.confirm({
							    content: function(){
							        var self = this;
							        return $.ajax({
											  type: "POST",
											  url: '{{ route('agenda.update', $agenda->id) }}',
											  data: $("#editar-agenda").serialize(),
											  success: function(){
													$.alert({
													    title: 'Sucesso!',
													    content: 'Agenda alterada com sucesso!',
													    buttons:{
													    	ok:function(){
													    		window.location.href = "{{ route('administrador.agenda.index') }}";
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
					            document.location.href = "{{ route('administrador.agenda.index') }}"
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