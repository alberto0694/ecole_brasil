@extends('layouts.website')
@section('content')
<style type="text/css">
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

@media screen and (max-width: 768px) {

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }
}
</style>
	<div class="row" style="margin-top: 10px">
		<div class="col-md-2 col-md-offset-5 col-xs-12" align="center" style="text-align:center">
		</div>
	</div>
  <div class="row" style="padding-left: 45px">
    <div class="col-md-6 col-xs-12 col-md-offset-3">
      <div class="row">
            <h3 align="center">Verifique seus dados!</h3>
            <div class="form-group">
                <div class="row" style="padding-left: 15px">
                  <label class="control-label">Nome Completo</label>
                </div>

                <div class="col-md-12" style="padding: 0">
                    <label class="control-label">{{ $inadimplencia->nome }}</label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row" style="padding-left: 15px">
                  <label class="control-label">E-mail</label>
                </div>

                <div class="col-md-12" style="padding: 0">
                    <label class="control-label">{{ $inadimplencia->email }}</label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row" style="padding-left: 15px">
                  <label class="control-label">Valor total</label>
                </div>

                <div class="col-md-12" style="padding: 0">
                    <label class="control-label">{{ $inadimplencia->valor }}</label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row" style="padding-left: 15px">
                  <label class="control-label">Descrição</label>
                </div>

                <div class="col-md-12" style="padding: 0">
                    <label class="control-label">{!! $inadimplencia->razao_pagamento !!}</label>
                </div>
            </div>
      </div>
    </div>
  </div>
  <hr>


  <div class="row" style="margin: 5px; margin-top: 20px">
      @if($inadimplencia->canPay)
      <h3 align="center">Informações para efetuar o pagamento</h3>
        <form id="pagamento-aluno" role="form" action="" method="post">
          <div class="row " id="step-1">
            <div class="col-md-6 col-xs-12 col-md-offset-3">
              <div class="col-md-12">
                @if($inadimplencia->max_parcelas > 0)
  	              <div class="row parcelas-class" style="padding-left: 15px">
  	                  <div class="form-group">
  	                      <div class="row" style="padding-left: 15px; margin-top: 10px">
  	                        <label class="control-label">Parcelar em:</label>
  	                      </div>

  	                      <div class="col-md-12" style="padding: 0">
  	                          <select class="col-md-3 form-control" name="num_parcelas" id="num_parcelas">
  	                          	<?php $array = array(2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10); ?>
                                <option value="00" > Á vista </option>
  	                          	@foreach($array as $item)
  	                          		@if($inadimplencia->max_parcelas >= $item)
  	                          			<option value="{{ $item }}" > {{ $item }}x </option>
  	                          		@endif
  	                          	@endforeach
  	                          </select>

  	                      </div>
  	                  </div>
  	              </div>
  	          @else
  	          	<input type="hidden" name="num_parcelas" id="num_parcelas" value="00">
  	          @endif
                <div class="row" style="padding-left: 15px; margin-top: 10px">
                  <div class="form-group">
                    <label class="control-label">Nome Completo</label>
                    <input required name="nome_cartao" id="nome_cartao" maxlength="100" type="text"  class="form-control" placeholder="Informe o nome completo do titular do cartão"  />
                  </div>
                </div>
                <div class="row" style="padding-left: 15px; margin-bottom: 10px">
                  <div class="form-group">
                    <label class="control-label">Número do Cartão</label>
                    <input required name="numero_cartao" id="numero_cartao" maxlength="100" type="number"  class="form-control" placeholder="Informe o número do cartão"  />
                  </div>
                </div>
                <div class="row" style="padding-left: 15px; margin-bottom: 10px">
                  <div class="col-md-4 form-group" style="padding: 0">
                    <label class="control-label">Códido de segurança do Cartão</label>
                    <input required name="seguranca_cartao" id="seguranca_cartao" maxlength="100" type="number"  class="form-control" placeholder="CVV"  />
                  </div>
                </div>
                <div class="row" style="padding-left: 15px; margin-bottom: 10px">
                    <div class="form-group">
                        <div class="row" style="padding-left: 15px">
                          <label class="control-label">Mês</label>
                        </div>

                        <div class="col-md-4" style="padding: 0">
                            <select class="col-md-3 form-control" name="mes_cartao" id="mes_cartao">
                              <option value="01">Janeiro (01)</option>
                              <option value="02">Feveveiro (02)</option>
                              <option value="03">Março (03)</option>
                              <option value="04">Abril (04)</option>
                              <option value="05">Maio (05)</option>
                              <option value="06">Junho (06)</option>
                              <option value="07">Julho (07)</option>
                              <option value="08">Agosto (08)</option>
                              <option value="09">Setembro (09)</option>
                              <option value="10">Outubro (10)</option>
                              <option value="11">Novembro (11)</option>
                              <option value="12">Dezembro (12)</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row" style="padding-left: 15px">
                    <div class="form-group">
                        <div class="row" style="padding-left: 15px">
                          <label class="control-label">Ano</label>
                        </div>

                        <div class="col-md-4" style="padding: 0">
                            <select class="col-md-3 form-control" name="ano_cartao" id="ano_cartao">
                              <option value="2018">2018</option>
                              <option value="2019">2019</option>
                              <option value="2020">2020</option>
                              <option value="2021">2021</option>
                              <option value="2022">2022</option>
                              <option value="2023">2023</option>
                              <option value="2024">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>
                              <option value="2029">2029</option>
                              <option value="2030">2030</option>
                              <option value="2031">2031</option>
                            </select>

                        </div>
                    </div>
                </div>
                <input required type="hidden" name="transacao" id="transacao" value="04">
                <input required type="hidden" name="inadimplencia_id" id="inadimplencia_id" value="{{ $inadimplencia->id }}">
                {{ csrf_field() }}
                <button class="btn btn-success btn-lg pull-right" type="button" id="comprar_curso">Efetuar pagamento</button>
              </div>
            </div>
          </div>
        </form>
      @else
        <h3 align="center">Pendência se encontra quitada!</h3><br>
      @endif
    </div>
  </div>
<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
<script src="{{ asset('assets/js/ace.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-price-format/jquery.priceformat.min.js') }}"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function () {
    $(".navbar-brand").html('');
    $(".navbar-nav").html('<h3>Quitação de Pendências<h3>');
    $('#valor_curso').priceFormat({
        prefix: '',
        thousandsSeparator: '',
        clearOnEmpty: false
    });
    $("#num_parcelas").change(function(){
      if( ($(this).val() > 0)){
        $("#transacao").val('{{ $inadimplencia->transacao }}');
      }else{
        $("#transacao").val('04');
      }
    });
    $("#comprar_curso").click(function(){
          $.dialog({
              title: '',
              columnClass: 'col-md-6 col-md-offset-3',
              content: function(){
                  var self = this;
                  return $.ajax({
                      type: "POST",
                      url:  '{{ route('pagamento') }}',
                      headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                      },
                      data: {
                          ano:$("#ano_cartao").val(),
                          cvc2:$("#seguranca_cartao").val(),
                          mes:$("#mes_cartao").val(),
                          nrcartao:$("#numero_cartao").val(),
                          parcelas:$("#num_parcelas").val(),
                          portador:$("#nome_cartao").val(),
                          inadimplencia_id:$("#inadimplencia_id").val(),
                          transacao:$("#transacao").val()
                      }
                  }).done(function (response) {});
              },
              contentLoaded: function(data, status, request){
                  var self = this;
                  if(request != null){
                      if(request.responseJSON != null){ //SUCESSO
                          if(request.responseJSON.codret != null){ //SUCESSO
                              if(request.responseJSON.codret == 0){ //SUCESSO
                                  $.ajax({
                                      type: "POST",
                                      url:  '{{ route('pagamento.inadimplencia', $inadimplencia->id) }}',
                                      headers: {
                                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                      }
                                  }).done(function (response) {});
                                  self.setContent('<div class="col-md-10 col-md-offset-1" style="color:#ed3656;"><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole.png') }}"><label style="text-align: center; width: 100%">Ecole Brasil!</label><br><label style="text-align: center; width: 100%">Muito obrigado, esta pendência foi quitada!</label><br><label style="text-align: center; font-size:15pt; width: 100%"><b></b></label><br></div>');
                              }else{
                                self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! Tente mais tarde.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                              }
                          }else{
                            self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! Tente mais tarde.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                          }
                      }else{
                        self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! Tente mais tarde.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                      }
                  }else{
                    self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! Tente mais tarde.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                  }
              },
              onContentReady: function(){},
              onClose: function () {
                  window.location.href = '{{ route('regulariza.inadimplencia', $inadimplencia->id) }}';
              }
          });
    });

  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.attr('disabled')) {
          // debugger;
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='password'], input[type='number'],input[type='email'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }
      curInputs = curStep.find("input[type='email']");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid || !validateEmail(curInputs[i].value)){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }
      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });
  $('div.setup-panel div a.btn-primary').trigger('click');
});

</script>
@endsection
