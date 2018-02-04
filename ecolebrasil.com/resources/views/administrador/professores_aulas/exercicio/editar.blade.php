@extends('layouts.administrador')
@section('content')
				@component('components.tutorial')
					teste
				@endcomponent				

				<div class="row">
					<h2 style="margin-left: 20px">Cadastro de Exercicios</h2>
				</div>
										
				<form id="editar-exercicio" class="form-horizontal" role="form" style="margin-left: 20px">
					{{ csrf_field() }}
					<input name="_method" type="hidden" value="PUT">
					<div class="form-group">
						<label  class="col-sm-2 control-label no-padding-right" for="form-field-1"> Titulo </label>

						<div class="col-sm-6">
							<input value="{{ $exercicio->titulo }}" id="titulo" name="titulo" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link Video </label>

						<div class="col-sm-6">
							<input value="{{ $exercicio->link }}" id="link" name="link" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Arquivo (PDF) </label>
						@component('components.upfile', ['nameId' => 'arquivo', 'src' => $exercicio->arquivo])
							
						    <a href="{{ asset($exercicio->arquivo) }}" download '>Baixar Arquivo</a>							
						@endcomponent										
					</div>					
					
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Curso</label>
						<div class="col-sm-6">
							<select id="agenda_id" name="agenda_id" class="col-xs-12 col-sm-6" id="form-field-select-3">
									<option selected >Escolha um Curso</option>
									@foreach($agendas as $agenda)
										@if($exercicio->modulo->agenda->id == $agenda->id)
											<option selected value="{{ $agenda->id }}">{{ $agenda->curso->nome }} - {{ $agenda->cidade }}</option>
										@else
											<option value="{{ $agenda->id }}">{{ $agenda->curso->nome }} - {{ $agenda->cidade }}</option>
										@endif

									@endforeach
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Modulo</label>
						<div class="col-sm-6">
							<select id="modulo_id" name="modulo_id" class="col-xs-12 col-sm-6" id="form-field-select-3">
									<option selected="" ">Escolha um Módulo</option>
									@foreach($exercicio->modulo->agenda->modulos as $modulo)
										@if($exercicio->modulo->id == $modulo->id)
											<option selected value="{{ $modulo->id }}">{{$modulo->titulo}}</option>
										@else
											<option value="{{ $modulo->id }}">{{$modulo->titulo}}</option>
										@endif

									@endforeach
							</select>
						</div>
					</div>					

					<hr>
					<div class="form-group" >
						<div class="col-sm-9">
								<h4 class="header clearfix">
									Texto								
								</h4>
								<textarea id="descricao_html" name="descricao_html" class="col-xs-12 col-sm-6">
									{!! $exercicio->descricao_html !!}
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
        	});

        	//VALIDATOR JQUERY
        	$("#editar-exercicio").validate({
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

							normalizeVideo("input[name=link]");
							
							$.confirm({
							    content: function(){
							        var self = this;
							        return $.ajax({
											  type: "POST",
											  url: '{{ route('exercicio.update', $exercicio->id) }}',
											  data: $("#editar-exercicio").serialize(),
											  success: function(){
													$.alert({
													    title: 'Sucesso!',
													    content: 'Exercicio cadastrado com sucesso!',
													    buttons:{
													    	ok:function(){
													    		window.location.href = "{{ route('administrador.exercicio.index') }}";
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
					            document.location.href = "{{ route('administrador.exercicio.index') }}"
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