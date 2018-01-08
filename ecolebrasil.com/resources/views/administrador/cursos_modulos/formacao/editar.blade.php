@extends('layouts.administrador')
@section('content')

				@component('components.tutorial')
					teste
				@endcomponent
										
				<form id="novo-formacao" class="form-horizontal" role="form" style="margin-left: 20px" >
					{{ csrf_field() }}
					<input name="_method" type="hidden" value="PUT">
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tipo de Curso </label>

						<div class="col-sm-6">
							<input id="nome" name="nome" type="text" class="col-xs-12 col-sm-6" value="{{ $formacao->nome }}"/>
						</div>
					</div>

					<div class="form-group" >
						<div class="col-sm-9">
								<h4 class="header clearfix">
									Descrição								
								</h4>
								<textarea id="descricao_html" name="descricao_html" class="col-xs-12 col-sm-6">
									{{ $formacao->descricao_html }}
								</textarea>							
						</div>	
					</div>
					<hr>
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Cadastrar
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								Cancelar
							</button>
						</div>
					</div>
				</form>							
@endsection
@section('last-body')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/ckeditor/adapters/jquery.js')}} "></script>
        <script type="text/javascript">
                jQuery(function($){
                	$('textarea').ckeditor();
                	
                	//VALIDATOR JQUERY
                	$("#novo-formacao").validate({
								rules: {
									nome: {
										required: true,
										minlength: 2
									},
									descricao_html: {
										required: true
									}
								},
								messages: {
									nome: "Por Favor, informe o nome do curso",
									descricao_html: "Por Favor, informe o modo do curso"
								},
								submitHandler: function(form) {
									$.confirm({
									    content: function(){
									        var self = this;
									        return	$.ajax({
													  type: "POST",
													  url: '{{ route('formacao.update', $formacao->id) }}',
													  data: $("#novo-formacao").serialize(),
													  success: function(){
															$.alert({
															    title: 'Sucesso!',
															    content: 'Tipo de Curso de código " {{ $formacao->id }} " atualizada com sucesso!',
															    buttons:{
															    	ok:function(){
															    		window.location.href = "{{ route('administrador.formacao.index') }}";
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


                });                      

        </script>
@endsection