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

  <div class="row" style="margin: 5px; margin-top: 20px">
    <div class="container">
      <div class="stepwizard col-md-offset-3">
          <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
              <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
              <p>Dados do Aluno</p>
            </div>
            <div class="stepwizard-step">
              <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
              <p>Dados de Compra</p>
            </div>
{{--             <div class="stepwizard-step">
              <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
              <p>Pagamento</p>
            </div> --}}
          </div>
      </div>

      <form id="pagamento-aluno" role="form" action="" method="post">
        <div class="row setup-content" id="step-1">
          <div class="col-md-6 col-xs-12 col-md-offset-3">
            <div class="col-md-12">
              <h3> Dados do Aluno</h3>
              <div class="row" style="padding-left: 15px; margin-bottom: 10px">
                  <div class="form-group">
                      <div class="row" style="padding-left: 15px">
                        <label class="control-label">Curso</label>    
                      </div>
                    
                      <div class="col-md-12" style="padding: 0">
                          <select class="col-md-3 form-control" name="agenda_id" id="agenda_id">
                              @foreach($agendas as $agenda)
                                <option value="{{$agenda->id}}">{{$agenda->curso->nome}} - {{ $agenda->cidade }}</option>
                              @endforeach
                          </select>                
                        
                      </div>
                  </div>                 
              </div>        
              <div class="row" style="padding-left: 15px; ">
                <div class="form-group">
                  <label class="control-label">Nome</label>
                  <input required  maxlength="100" name="nome_aluno" id="nome_aluno" type="text"  class="form-control" placeholder="Informe o nome do aluno"  />
                </div>                
              </div>      
              <div class="row" style="padding-left: 15px; ">
                <div class="form-group">
                  <label class="control-label">Sobrenome</label>
                  <input required  maxlength="100" name="sobrenome_aluno" id="sobrenome_aluno" type="text"  class="form-control" placeholder="Informe o sobrenome aluno"  />
                </div>                
              </div>              
              <div class="row" style="padding-left: 15px; ">
                <div class="form-group">
                  <label class="control-label" for="form-field-1"> Data de Nascimento </label>
                    <input required id="nascimento" name="nascimento" type="text" class="form-control date-picker"  />             
                </div>
              </div>
              <div class="row" style="padding-left: 15px; ">
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input required maxlength="100" name="email" id="email" type="text"  class="form-control" placeholder="Informe um e-mail para receber os acessos" />
                </div>
              </div>
              <div class="row" style="padding-left: 15px; ">
                <div class="form-group">
                  <label class="control-label">Senha</label>
                  <input required name="password" id="password" class="form-control" placeholder="Informe uma senha" type="password">
                </div>
              </div>
              <div class="row" style="padding-left: 15px; ">
                <div class="form-group">
                  <label class="control-label">Confirmar Senha</label>
                  <input required name="repeat_password" id="repeat_password" class="form-control" placeholder="Repita a senha" type="password">
                </div>              
              </div>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>
            </div>
          </div>
        </div>
        <div class="row setup-content" id="step-2">
          <div class="col-md-6 col-xs-12 col-md-offset-3">
            <div class="col-md-12">
              <h3> Compra</h3>
     
              <div class="row" style="padding-left: 15px">
                  <div class="form-group">
                      <div class="row" style="padding-left: 15px">
                        <label class="control-label">Valor do Curso</label>    
                      </div>
                    
                      <div class="col-md-12" style="padding: 0">
                          <input required name="valor_curso" id="valor_curso" type="text" class="form-control" disabled="" name="" value="">
                      </div>
                  </div>                 
              </div>
              <div class="row parcelas-class" style="padding-left: 15px">
                  <div class="form-group">
                      <div class="row" style="padding-left: 15px; margin-top: 10px">
                        <label class="control-label">Parcelar em:</label>    
                      </div>
                    
                      <div class="col-md-12" style="padding: 0">
                          <select class="col-md-3 form-control" name="num_parcelas" id="num_parcelas">
                          </select>                
                        
                      </div>
                  </div>                 
              </div>              
              <div class="row" style="padding-left: 15px; margin-top: 10px">
                <div class="form-group">
                  <label class="control-label">Nome Completo</label>
                  <input required name="nome_cartao" id="nome_cartao" maxlength="100" type="text"  class="form-control" placeholder="Informe o nome completo do titular do cartão"  />
                </div>
              </div>
              <div class="row" style="padding-left: 15px; margin-bottom: 10px">
                <div class="form-group">
                  <label class="control-label">Número do Cartão</label>
                  <input required name="numero_cartao" id="numero_cartao" maxlength="100" type="text"  class="form-control" placeholder="Informe o número do cartão"  />
                </div>  
              </div>
              <div class="row" style="padding-left: 15px; margin-bottom: 10px">
                <div class="col-md-4 form-group" style="padding: 0">
                  <label class="control-label">Códido de segurança do Cartão</label>
                  <input required name="seguranca_cartao" id="seguranca_cartao" maxlength="100" type="text"  class="form-control" placeholder="CVV"  />
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
                            <option value="18">2018</option>
                            <option value="19">2019</option>
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>
                            <option value="25">2025</option>
                            <option value="26">2026</option>
                            <option value="27">2027</option>
                            <option value="28">2028</option>
                            <option value="29">2029</option>
                            <option value="30">2030</option>
                            <option value="31">2031</option>
                          </select>                
                        
                      </div>
                  </div>                
              </div>
              <input required type="hidden" name="transacao" id="transacao" value="00">
              <input required type="hidden" name="modelo" id="modelo" value="D">
              {{ csrf_field() }}
              <button class="btn btn-success btn-lg pull-right" type="button" id="comprar_curso">Comprar o Curso</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>  
<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
<script src="{{ asset('assets/js/ace.min.js') }}"></script>  
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript" charset="utf-8">
function  getAgenda(){
          $.ajax({
            type: "GET",
            url: '{{ route('agenda.parcelas') }}',
            data: { agenda_id : $("#agenda_id").val() },
            success: function(data){
                var jsonArr = JSON.parse( data );
                $("#valor_curso").val(jsonArr[0].valor);
                $("#transacao").val(jsonArr[0].transacao);
                $("#modelo").val(jsonArr[0].modelo);

                $('#num_parcelas').find('option').remove();
                let max = parseInt(jsonArr[0].max_parcelas);
                if(max > 1){
                  $(".parcelas-class").show();                
                  $('#num_parcelas').append('<option value="0">1 (Á vista) </option>')
                  for(var i = 2; i <= max; i++){
                      $('#num_parcelas').append('<option value="'+ i +'">'+ i +' </option>');
                  }
                  $('#num_parcelas').val("0");                            
                }else{
                  $('#num_parcelas').append('<option selected value="0">0</option>');
                  $(".parcelas-class").hide();
                }
            }   
          });             
}
$(window).on('load',function(){
    getAgenda();
});

$(document).ready(function () {    
    $("#agenda_id").change(function(){
          getAgenda();
    });

    $("#comprar_curso").click(function(){
          
          $.dialog({
              title: '',
              columnClass: 'col-md-6 col-md-offset-3',
              content: function(){
                  var self = this;

                  // self.setContent('Checking callback flow');
                  return $.ajax({
                      type: "POST",
                      dataType: 'json',
                      // jsonp: true,
                      headers: {
                          'Access-Control-Allow-Methods': 'GET, POST, OPTIONS',
                          'Access-Control-Allow-Origin': '*',
                          'Access-Control-Allow-Headers': '*',
                          'Access-Control-Allow-Credentials': 'true'
                      },                      
                      crossDomain: true,
                      contentType: "application/json",
                      url: 'https://kyadevelopers.com.br/api/erede/services/ServicesController?servicename=Komerci$GetAuthorizedSP',
                      data: JSON.stringify({
                            
                            ano:parseInt($("#ano_cartao").val()),
                            conftxn:"S",
                            cvc2:parseInt($("#seguranca_cartao").val()),
                            filiacao:74450930,
                            mes:parseInt($("#mes_cartao").val()),
                            nrcartao:$("#numero_cartao").val(),
                            numpedido:1,
                            parcelas:parseInt($("#num_parcelas").val()),
                            portador:$("#nome_cartao").val(),
                            total:parseFloat($("#valor_curso").val()),
                            transacao:parseInt($("#transacao").val())
                      })                      
                  }).done(function (response) {
                      // self.setContentAppend('<div>Pagamento confirmado!</div>');
                      // self.setContentAppend('<div>Gerando Acessos...</div>');
                  });
              },
              contentLoaded: function(data, status, request){
                  var self = this;
                  if(request != null){
                      if(request.responseJSON != null){ //SUCESSO
                          if(request.responseJSON.codret != null){ //SUCESSO
                              if(request.responseJSON.codret == 0){ //SUCESSO
                                    $.ajax({
                                      type: "POST",
                                      url: '{{ route('pagamento.email') }}',
                                      data: $("#pagamento-aluno").serialize(),
                                      success: function(data, status, request){
                                          // debugger;
                                          if(request.responseJSON.status == 'success'){
                                              self.setContent('<div class="col-md-10 col-md-offset-1"><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole.png') }}"><label style="text-align: center; width: 100%">Bem vindo à Ecole!</label><br><label style="text-align: center; width: 100%">Enviamos às informações no seguinte endereço de email:</label><br><label style="text-align: center; width: 100%">'+ $("#email").val() +'</label><br></div>');
                                          }else if(request.responseJSON.status == 'user_exists'){
                                                self.setContent('este usuário já existe! Se já for aluno, compre ');
                                          }
                                      }                   
                                    }); 
                              }
                          }
                      }                  
                  }
              },
              onContentReady: function(){
                  // this.setContentAppend('<div>Content ready!</div>');
              },
              onClose: function () {
                  // before the modal is hidden.
                  if($("#modelo").val() == 'D'){
                      window.location.href = '{{ route('ead.login') }}';
                  }else{
                      window.location.href = '{{ route('restrito') }}';
                  }                  
              }
          });

          // $.ajax({
          //   type: "POST",
          //   dataType: 'json',
          //   // crossDomain: true,
          //   contentType: "application/json",
          //   url: 'https://kyadevelopers.com.br/api/erede/services/ServicesController?servicename=Komerci$GetAuthorizedSP',
          //   data: JSON.stringify({
                  
          //         ano:parseInt($("#ano_cartao").val()),
          //         conftxn:"S",
          //         cvc2:parseInt($("#seguranca_cartao").val()),
          //         filiacao:74450930,
          //         mes:parseInt($("#mes_cartao").val()),
          //         nrcartao:$("#numero_cartao").val(),
          //         numpedido:1,
          //         parcelas:parseInt($("#num_parcelas").val()),
          //         portador:$("#nome_cartao").val(),
          //         total:parseFloat($("#valor_curso").val()),
          //         transacao:parseInt($("#transacao").val())
          //   }),
          //   success: function(data, status, request){                  
          //       if(request != null){
          //           if(request.responseJSON != null){ //SUCESSO
          //               if(request.responseJSON.codret != null){ //SUCESSO
          //                   if(request.responseJSON.codret == 0){ //SUCESSO
          //                         $.ajax({
          //                           type: "POST",
          //                           url: '{{ route('pagamento.email') }}',
          //                           data: $("#pagamento-aluno").serialize(),
          //                           success: function(data, status, request){
          //                               debugger;
          //                               if(request.responseJSON.status == 'success'){

          //                               }
          //                           }                   
          //                         }); 
          //                   }
          //               }
          //           }                  
          //       }

          //   //retorno de sucesso
          //   // {
          //   //     "confmsgret": "CONFIRMACAO COM SUCESSO",
          //   //     "codret": 0,
          //   //     "numsqn": 5010978,
          //   //     "data": "20180107",
          //   //     "numautent": 93390,
          //   //     "msgret": "Autorizado+com+sucesso",
          //   //     "numautor": "885044",
          //   //     "origembin": "BR",
          //   //     "numcv": 5010978,
          //   //     "numpedido": 1
          //   // }
          //   }                   
          // }); 
    });
    
    $('.date-picker').datepicker({
      autoclose: true,
      todayHighlight: true,
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        weekStart: 0        
    }).next().on(ace.click_event, function(){
      $(this).prev().focus();
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
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
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
