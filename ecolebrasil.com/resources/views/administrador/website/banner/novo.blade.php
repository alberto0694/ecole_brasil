@extends('layouts.administrador')
@section('content')
				@component('components.tutorial')
					teste
				@endcomponent				

				<div class="row">
					<h2 style="margin-left: 20px">Cadastro de Banner</h2>
				</div>
										
				<form id="novo-banner" class="form-horizontal" role="form" style="margin-left: 20px">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Titulo</label>

						<div class="col-sm-6">
							<input id="titulo" name="titulo" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link </label>

						<div class="col-sm-6">
							<input id="link_url" name="link_url" type="text" class="col-xs-12 col-sm-6" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Status</label>
						<div class="col-sm-6">
							<select id="ativo" name="ativo" class="col-xs-12 col-sm-6" id="form-field-select-3">
									<option value=1 >Ativo</option>
									<option value=0 >Desativado</option>
							</select>
						</div>
					</div>	

					<div class="form-group" style="display: none">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tipo de mídia</label>
						<div class="col-sm-6">
							<select id="midia" name="midia" class="col-xs-12 col-sm-6" id="form-field-select-3">
									<option value="video" >Vídeo</option>
									<option selected value="imagem" >Imagem</option>
							</select>
						</div>
					</div>	
					
					<div class="form-group" id="imagem_container">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Imagem</label>
						@component('components.upfile', ['nameId' => 'imagem', 'src' => ''])
						@endcomponent											
					</div>	
					<div class="form-group" id="video_container">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link de Vídeo </label>

						<div class="col-sm-6">
							<input id="link_video" name="link_video" type="text" class="col-xs-12 col-sm-6" />
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
        $(window).load(function(){
			$("#imagem_container").show();
			$("#video_container").hide();
			

        	// $('#midia').change(function(){
        	// 	console.log($(this).val());
        	// 	if($(this).val() == 'video'){
        	// 		$("#imagem_container").hide();
        	// 		$("#video_container").show();
        	// 	}else{
        	// 		$("#imagem_container").show();
        	// 		$("#video_container").hide();
        	// 	}
        	// });        	
        });
        jQuery(function($){
        	//VALIDATOR JQUERY
        	$("#novo-banner").validate({
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

							normalizeVideo("input[name=link_video]");
							
							$.confirm({
							    content: function(){
							        var self = this;
							        return $.ajax({
											  type: "POST",
											  url: '{{ route('banner.create') }}',
											  data: $("#novo-banner").serialize(),
											  success: function(){
													$.alert({
													    title: 'Sucesso!',
													    content: 'Banner cadastrado com sucesso!',
													    buttons:{
													    	ok:function(){
													    		window.location.href = "{{ route('administrador.banner.index') }}";
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
					            document.location.href = "{{ route('administrador.banner.index') }}"
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