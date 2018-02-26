@extends('layouts.administrador')
@section('content')
@component('components.tutorial')
	teste
@endcomponent

<div class="row">
	<h2 style="margin-left: 20px">Cadastro de Inadimplência</h2>
</div>

<form id="nova-inadimplencia" class="form-horizontal" role="form" style="margin-left: 20px">
	{{ csrf_field() }}
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nome Completo</label>

		<div class="col-sm-6">
			<input id="nome" name="nome" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email </label>

		<div class="col-sm-6">
			<input id="email" name="email" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Valor </label>
		<div class="col-sm-6">
			<input id="valor" name="valor" type="text" class="col-xs-12 col-sm-6" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Vencimento </label>
		<div class="col-sm-6">
			<input id="vencimento" name="vencimento" type="text" class="col-xs-12 col-sm-6 date-picker"  />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Restrigir pagamento até a data de vencimento:</label>
		<div class="col-sm-6">
			<select id="pagar_data" name="pagar_data" class="col-xs-12 col-sm-6" id="form-field-select-3">
					<option selected="" value="S">Sim</option>
					<option value="N">Não</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tipo de Transanção </label>

		<div class="col-sm-6">
			<select id="transacao" name="transacao" class="col-xs-12 col-sm-6" id="form-field-select-3">
				<option selected value="04">À Vista</option>
				<option value="06">Parcelado Emissor</option>
				<option value="08">Parcelado Estabelecimento</option>
				<option value="39">IATA à vista</option>
				<option value="40">IATA parcelado</option>
			</select>
		</div>
	</div>
	<div class="form-group parcelas-class" style="display: none">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Número Máximo de Parcelas </label>

		<div class="col-sm-6">
			<select id="max_parcelas" name="max_parcelas" class="col-xs-12 col-sm-6" id="form-field-select-3">
				<option value="0" style="display: none"></option>
				<option value="2">2x</option>
				<option value="3">3x</option>
				<option value="4">4x</option>
				<option value="5">5x</option>
				<option value="6">6x</option>
				<option value="7">7x</option>
				<option value="8">8x</option>
				<option value="9">9x</option>
				<option value="10">10x</option>
			</select>
		</div>
	</div>
	<div class="form-group" >
		<div class="col-sm-9">
			<h4 class="header clearfix">
				Motivo Pagamento
			</h4>
			<textarea id="razao_pagamento" name="razao_pagamento" class="col-xs-12 col-sm-6"></textarea>
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
        	$("#max_parcelas").val("0");

        	$("#transacao").change(function(){
        		if( ($(this).val() != '04') && ($(this).val() != '39')){
        			$(".parcelas-class").show();
        		}else{
        			$(".parcelas-class").hide();
        			$("#max_parcelas").val("0");
        		}
        	});

			$('#valor').priceFormat({
			    prefix: '',
			    thousandsSeparator: '',
			    clearOnEmpty: false
			});

        	//VALIDATOR JQUERY
        	$("#nova-inadimplencia").validate({
				rules: {},
				messages: {},
				submitHandler: function(form) {
					let arr = [
						{ element:$("input[name=nome]"), type:'text' },
						{ element:$("input[name=email]"), type:'email' },
						{ element:$("input[name=valor]"), type:'text' },
						{ element:$("input[name=vencimento]"), type:'text' },
						{ element:$("#pagar_data"), type:'select' },
						{ element:$("#max_parcelas"), type:'select' },
						{ element:$("#transacao"), type:'select' },
						{ element:$("#razao_pagamento"), type:'textarea' }];
					let response = validateFields(arr);
					if(response.status){
						$.confirm({
						    content: function(){
						        var self = this;
						        return $.ajax({
										  type: "POST",
										  url: '{{ route('inadimplencia.create') }}',
										  data: $("#nova-inadimplencia").serialize(),
										  success: function(){
												$.alert({
												    title: 'Sucesso!',
												    content: 'Inadimplência cadastrada com sucesso!',
												    buttons:{
												    	ok:function(){
												    		window.location.href = "{{ route('administrador.inadimplencia.index') }}";
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
					            document.location.href = "{{ route('administrador.inadimplencia.index') }}"
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