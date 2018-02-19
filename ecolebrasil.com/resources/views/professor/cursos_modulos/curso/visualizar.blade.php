@extends('layouts.administrador')
@section('content')
								<!-- PAGE CONTENT BEGINS -->

				<form class="form-horizontal" role="form" style="margin-left: 20px">
					<div class="form-group" >						
						<a href="{{ route('administrador.curso.editar', $curso->id) }}">
    						<button class="btn" type="button">
    							<i class="ace-icon fa fa-pencil align-top bigger-125"></i>
    							Editar
    						</button>		
                        </a>				
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1"> Nome do Curso </label>
						<h5><b>{{ $curso->nome }}</b></h5>
					</div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1"> Link de Vídeo </label>

                        <div class="col-sm-8">
                            <h5><b>{{ $curso->link_video }}</b></h5>
                        </div>
                        <iframe src="{{ $curso->link_video }}"></iframe>
                    </div>
{{--                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1"> Data de Início </label>

                        <div class="col-sm-8">
                            <h5><b>{{ $curso->formatedDate }}</b></h5>
                        </div>
                    </div> --}}
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1"> Imagem de Background </label>
						<div class="col-sm-8">
							<img src="{{ $curso->background_img }}" height="150">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1"> Carga Horária </label>

						<div class="col-sm-8">
							<h5><b>{{ $curso->carga_horaria }}</b></h5>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1"> Card do Curso </label>

						<div class="col-sm-8">
							<img src="{{ $curso->card }}" height="150">
						</div>
					</div>					
{{-- 					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1"> Investimento (Descrição do Valor) </label>

						<div class="col-sm-8">
							<h5><b>{{ $curso->investimento }}</b></h5>
						</div>
					</div> --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1"> Formação</label>
                        <div class="col-sm-8">
                            <h5><b>{{ $curso->formacao->nome }}</b></h5>
                        </div>
                    </div>
{{--                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1"> Modelo do Curso</label>
                        <div class="col-sm-8">
                        	@if($curso->modelo == "P")
                        		<h5><b>Presencial</b></h5>
                        	@else
                        		<h5><b>À Distância</b></h5>
                        	@endif
                            
                        </div>
                    </div> --}}	
{{-- 					<hr>
					<div class="form-group" >
                        <div class="col-sm-9">
                                <h4 class="header clearfix">
                                    Ministrantes
                                </h4>

                                {!! $curso->ministrantes !!}                          
                        </div>
					</div> --}}
					<hr>
					<div class="form-group" >
                        <div class="col-sm-9">
                                <h4 class="header clearfix">
                                    Conteúdos Abordados                                
                                </h4>

                                {!! $curso->conteudo !!}                                                   
                        </div>
					</div>	
					<hr>
					<div class="form-group" >
                        <div class="col-sm-9">
                                <h4 class="header clearfix">
                                    Material Didático                                 
                                </h4>

                                {!! $curso->material !!}                                                  
                        </div>  
					</div>					

					<div class="form-group">
						<div class="col-sm-9">
								<h4 class="header clearfix">
									Apresentação do Curso									
								</h4>

								{!! $curso->apresentacao !!}                         							
						</div>	
					</div>	
					<div class="form-group">
						<div class="col-sm-9">
								<h4 class="header clearfix">
									Objetivos da Formação									
								</h4>

					           {!! $curso->objetivos !!}                       
						</div>	
					</div>	
				</form>							
@endsection
@section('last-body')
        <script type="text/javascript">
                jQuery(function($){


                });                      

        </script>
@endsection