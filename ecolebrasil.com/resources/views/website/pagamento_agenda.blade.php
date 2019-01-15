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

.nav-pills li{
  width: 50%;
  text-align: center;
}

.nav-pills li a{
  min-height: 50px;
  vertical-align: middle;
}

.nav-pills>li+li {
    margin-left: 0px;
}

#cartao-credito, #boleto{
  margin-top: 20px;
}

.header-page-content{
    background-image: url('{{ asset('images/inscricao.png')  }}');
}

.tab-content{
  min-height: 200px;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #ef4060;
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
      @if($agendas->count() > 0)
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
                              <input required disabled maxlength="100" name="nome_curso" id="nome_curso" type="text"  class="form-control" placeholder="Informe o nome do aluno" value="{{ $curso->nome }}"  />
                          </div>
                      </div>
                  </div>
                  <div class="row" style="padding-left: 15px; margin-bottom: 10px">
                      <div class="form-group">
                          <div class="row" style="padding-left: 15px">
                            <label class="control-label">Cidade</label>
                          </div>

                          <div class="col-md-12" style="padding: 0">
                              <select class="col-md-3 form-control" name="agenda_id" id="agenda_id">
                                  @foreach($agendas as $agenda)
                                    <option value="{{$agenda->id}}">{{ $agenda->cidade }} - {{ $agenda->formatedDate }}</option>
                                  @endforeach
                              </select>

                          </div>
                      </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">Nome do Aluno</label>
                      <input required  maxlength="100" name="nome_aluno" id="nome_aluno" type="text"  class="form-control" placeholder="Informe o nome do aluno"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">Sobrenome do Aluno</label>
                      <input required  maxlength="100" name="sobrenome_aluno" id="sobrenome_aluno" type="text"  class="form-control" placeholder="Informe o sobrenome aluno"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label" for="form-field-1"> Data de Nascimento (DD/MM/AAAA) </label>
                        <input required id="nascimento" name="nascimento" type="text" class="form-control date-picker"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 0px; ">
                    <div class="col-md-12">
                      <label class="control-label">Endereco</label>
                    </div>
                    <div class="col-md-12 col-xs-12">
                      <div class="form-group">
                        <input required name="endereco_cep" id="endereco_cep" type="number"  class="form-control" placeholder="CEP"  />
                      </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                      <div class="form-group">
                        <input required name="endereco_rua" id="endereco_rua" type="text"  class="form-control" placeholder="Rua"  />
                      </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                      <div class="form-group">
                        <input required name="endereco_numero" id="endereco_numero" type="text"  class="form-control" placeholder="Número"  />
                      </div>
                    </div>
                    <div class="col-md-7 col-xs-12">
                      <div class="form-group">
                        <input required name="endereco_bairro" id="endereco_bairro" type="text"  class="form-control" placeholder="Bairro"  />
                      </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <div class="form-group">
                        <input required name="endereco_cidade" id="endereco_cidade" type="text"  class="form-control" placeholder="Cidade"  />
                      </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                      <div class="row" style="padding-left: 15px">
                        <label class="control-label">Estado</label>
                      </div>
                      <div class="form-group">
                        <select required name="endereco_estado" id="endereco_estado" name="estado" class="form-control" >
                            <option value="ac">Acre</option>
                            <option value="al">Alagoas</option>
                            <option value="am">Amazonas</option>
                            <option value="ap">Amapá</option>
                            <option value="ba">Bahia</option>
                            <option value="ce">Ceará</option>
                            <option value="df">Distrito Federal</option>
                            <option value="es">Espírito Santo</option>
                            <option value="go">Goiás</option>
                            <option value="ma">Maranhão</option>
                            <option value="mt">Mato Grosso</option>
                            <option value="ms">Mato Grosso do Sul</option>
                            <option value="mg">Minas Gerais</option>
                            <option value="pa">Pará</option>
                            <option value="pb">Paraíba</option>
                            <option value="pr">Paraná</option>
                            <option value="pe">Pernambuco</option>
                            <option value="pi">Piauí</option>
                            <option value="rj">Rio de Janeiro</option>
                            <option value="rn">Rio Grande do Norte</option>
                            <option value="ro">Rondônia</option>
                            <option value="rs">Rio Grande do Sul</option>
                            <option value="rr">Roraima</option>
                            <option value="sc">Santa Catarina</option>
                            <option value="se">Sergipe</option>
                            <option value="sp">São Paulo</option>
                            <option value="to">Tocantins</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">CPF</label>
                      <input required  maxlength="11" name="cpf" id="cpf" type="number"  class="form-control" placeholder="CPF do aluno"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">R.G.</label>
                      <input required  maxlength="19" name="rg" id="rg" type="text"  class="form-control" placeholder="RG do aluno"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">Estado Civil</label>
                      <input required name="estado_civil" id="estado_civil" type="text"  class="form-control" placeholder="Estado civil do aluno"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">Nome da Mãe</label>
                      <input required name="nome_mae" id="nome_mae" type="text"  class="form-control" placeholder="Nome da mãe do aluno"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">Telefone</label>
                      <input required maxlength="9" name="telefone" id="telefone" type="text"  class="form-control" placeholder="Telefone do aluno"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">Código de Área do Telefone</label>
                      <input required maxlength="2" name="telefone_area" id="telefone_area" type="text"  class="form-control" placeholder="Código de área do telefone"  />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <label class="control-label">Email</label>
                      <input required maxlength="100" name="email" id="email" type="email"  class="form-control" placeholder="Informe um e-mail para receber os acessos e criar seu login" />
                    </div>
                  </div>
                  <div class="row" style="padding-left: 15px; ">
                    <div class="form-group">
                      <a target="_blank" href="{{ asset($curso->contrato_curso) }}">Ler termos do contrato.</a><br>
                      <input style="width: auto; float: left; margin-top: -8px" name="acordo_contrato" id="acordo_contrato" class="form-control" type="checkbox">
                      &nbsp;&nbsp;Concordo com os termos apresentados
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
                    @if(!$request->exists('meio_pagamento'))
                      <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="tab" href="#cartao-credito">Cartão de Crédito</a></li>
                        <li><a data-toggle="tab" href="#boleto">Boleto</a></li>
                      </ul>
                    @endif

                    <div class="tab-content">
                      <div id="cartao-credito" class="tab-pane fade <?php echo $meio_pagamento == 'credit_card' ? 'in active' : ''; ?>">
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
                            <label class="control-label">Nome Completo do Titular do cartão</label>
                            <label class="control-label"><h6>(OBS: O nome precisa ser escrito sem abreviações)</h6></label>
                            <input required name="nome_cartao" id="nome_cartao" maxlength="100" type="text"  class="form-control" placeholder="Informe o nome completo do titular do cartão"  />
                          </div>
                        </div>
                        <div class="row" style="padding-left: 15px; ">
                          <div class="form-group">
                            <label class="control-label">CPF do Titular do cartão</label>
                            <input required  maxlength="11" name="cpf_titular" id="cpf_titular" type="number"  class="form-control" placeholder="CPF do Titular do cartão"  />
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
                        <input required type="hidden" name="transacao" id="transacao" value="00">
                        <input required type="hidden" name="modelo" id="modelo" value="D">
                        <button class="btn btn-success btn-lg pull-right" type="button" id="comprar_curso_credito">Comprar o Curso</button>
                      </div>
                      <div id="boleto" class="tab-pane fade <?php echo $meio_pagamento == 'boleto' ? 'in active' : ''; ?>">
                        <div class="row" style="padding-left: 15px">
                          <div class="form-group">
                              <div class="row" style="padding-left: 15px">
                                <label class="control-label">Valor do Curso</label>
                              </div>

                              <div class="col-md-12" style="padding: 0">
                                  <input required name="valor_curso_boleto" id="valor_curso_boleto" type="text" class="form-control" disabled="" name="" value="">
                              </div>
                          </div>
                        </div>
                        <div class="row" style="padding-left: 15px; margin-top: 10px">
                          <div class="form-group">
                            <label class="control-label">Nome Completo do Pagante</label>
                            <input required name="nome_pagante" id="nome_pagante" maxlength="100" type="text"  class="form-control" placeholder="Informe o nome completo do pagante"  />
                          </div>
                        </div>
                        <div class="row" style="padding-left: 15px; ">
                          <div class="form-group">
                            <label class="control-label">CPF</label>
                            <input required  maxlength="11" name="cpf_boleto" id="cpf_boleto" type="number"  class="form-control" placeholder="CPF do Titular"  />
                          </div>
                        </div>
                        <button class="btn btn-success btn-lg pull-right" type="button" id="comprar_curso_boleto">Gerar boleto</button>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </form>
      @else
          <div class="row">
            <h3 align="center">Desculpe, mas não temos turma para este curso ainda, <a href="{{ route('contato') }}">entre em contato</a> conosco ou confira nossa <a href="{{ route('agenda') }}">agenda completa!</a></h3>
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
              <h3 style="text-align: center; background: #ef4060; color: white; padding: 2px; ">
                <a style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="{{ route('contato') }}">Entre em contato</a>
              </h3>
            </div>
          </div>
          <div class="row">
            <hr style="margin-top: 50px">
            <h3 style="text-align: center; margin-top: -50px"><a href="{{route('agenda')}}">
              <img src="{{asset('images/agenda-button.png')}}">
            </a></h3>
          </div>
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
var status_pay = false;
function  getAgenda(){
  $.ajax({
    type: "GET",
    url: '{{ route('agenda.parcelas') }}',
    data: { agenda_id : $("#agenda_id").val() },
    success: function(data){
        var jsonArr = data;
        $("#valor_curso").val(jsonArr.valor);
        $("#valor_curso_boleto").val(jsonArr.valorComDesconto);
        $('#valor_curso').priceFormat({
            prefix: 'R$: ',
            thousandsSeparator: '',
            clearOnEmpty: false
        });
        $('#valor_curso_boleto').priceFormat({
            prefix: 'R$: ',
            thousandsSeparator: '',
            clearOnEmpty: false
        });
        $("#modelo").val(jsonArr.modelo);

        $('#num_parcelas').find('option').remove();
        let max = parseInt(jsonArr.max_parcelas);
        if(max > 1){
          $(".parcelas-class").show();
          $('#num_parcelas').append('<option value="1">1 (Á vista) </option>')
          for(var i = 2; i <= max; i++){
              $('#num_parcelas').append('<option value="'+ i +'">'+ i +' </option>');
          }
          $('#num_parcelas').val("0");
        }else{
          $('#num_parcelas').append('<option selected value="1">1</option>');
          $(".parcelas-class").hide();
        }
    }
  });
}



$(window).bind('onbeforeunload', function (){
  if( !status_pay && (($("#email").val() != '') || ($("#telefone").val() != '')) ) {
      $.ajax({
        async: false,
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        url: '{{ route('site.compra_nao_finalizada') }}',
        // url: 'http://localhost:81/index.php',
        data: {
            nome_aluno: $("#nome_aluno").val(),
            sobrenome_aluno: $('#sobrenome_aluno').val(),
            agenda_id:$("#agenda_id").val(),
            agenda_text: $("#agenda_id option:selected").text(),
            curso: $("#nome_curso").val(),
            cpf:$("#cpf").val(),
            email: $("#email").val(),
            nascimento: $("#nascimento").val(),
            telefone: $("#telefone").val(),
            cep: $("#endereco_cep").val(),
            rua: $("#endereco_rua").val(),
            cidade: $("#endereco_cidade").val(),
            estado: $("#endereco_estado").val(),
            numero: $("#endereco_numero").val(),
            estado_civil: $("#estado_civil").val(),
            nome_mae: $("#nome_mae").val(),
            telefone_area: $("#telefone_area").val()
        }
      }).done(function(data) {
          console.log('complete');
      });;
  }
  // e.preventDefault(); //per the standard
  // e.returnValue = '1'; //required for Chrome
});

$(window).on('load',function(){
    getAgenda();
});

// $( window ).unload(compra_nao_finalizada());

$(document).ready(function () {
    $("#agenda_id").change(function(){
      getAgenda();
    });

    $("#comprar_curso_boleto").click(function(){

          $.dialog({
              title: '',
              columnClass: 'col-md-6 col-md-offset-3',
              content: function(){
                  var self = this;
                  return $.ajax({
                      type: "POST",
                      headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                      },
                      url: '{{ route('pagamento', ['meio_pagamento' => 'boleto']) }}',
                      data: {
                          ano:$("#ano_cartao").val(),
                          cvc2:$("#seguranca_cartao").val(),
                          mes:$("#mes_cartao").val(),
                          nrcartao:$("#numero_cartao").val(),
                          parcelas:$("#num_parcelas").val(),
                          portador:$("#nome_pagante").val(),
                          agenda_id:$("#agenda_id").val(),
                          cpf_titular:$("#cpf_boleto").val(),
                          email: $("#email").val(),
                          telefone: $("#telefone").val(),
                          cep: $("#endereco_cep").val(),
                          rua: $("#endereco_rua").val(),
                          cidade: $("#endereco_cidade").val(),
                          estado: $("#endereco_estado").val(),
                          numero: $("#endereco_numero").val(),
                          telefone_area: $("#telefone_area").val()
                      }
                  }).done(function (response) {});
              },
              contentLoaded: function(data, status, request){
                  var self = this;
                  self.setContent('<div class="col-md-10 col-md-offset-1" style="color:#ed3656;"><label style="text-align: center; width: 100%"><b>Boleto gerado com sucesso!</b></label><br><label style="text-align: center; width: 100%"><b>Gerando seu acesso aguarde...</b></label><br></div>');
                  if(request != null){
                      if(request.responseJSON != null){ //SUCESSO
                          if(request.responseJSON.status != null){ //SUCESSO
                              if(request.responseJSON.status == "waiting_payment"){ //SUCESSO
                                    var data = $("#pagamento-aluno").serializeJSON();
                                    data = { ...data, meio_pagamento: 'boleto', reference_id: request.responseJSON.nsu };
                                    data = { ...data, boleto_url: request.responseJSON.boleto_url };
                                    $.ajax({
                                      type: "POST",
                                      data,
                                      headers: {
                                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                      },
                                      url: '{{ route('pagamento.agenda') }}',

                                      success: function(data, status, request){
                                          if(request.responseJSON.status == 'success'){
                                              status_pay = true;
                                              self.setContent('<div class="col-md-10 col-md-offset-1" style="color:#ed3656;"><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole.png') }}"><label style="text-align: center; width: 100%">Bem vindo à Ecole!</label><br><label style="text-align: center; width: 100%">Enviamos às informações para o seguinte endereço de email:</label><br><label style="text-align: center; font-size:15pt; width: 100%"><b>'+$("#email").val()+'</b></label><br></div>');
                                          }else{
                                              self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar gerar o boleto! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                                          }
                                      }
                                    });
                              }else{
                                self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar gerar o boleto! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                              }
                          }else{
                            self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar gerar o boleto! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                          }
                      }else{
                        self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar gerar o boleto! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                      }
                  }else{
                    self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar gerar o boleto! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                  }
              },
              onContentReady: function(){
                  // this.setContentAppend('<div>Content ready!</div>');
              },
              onClose: function () {
                  // before the modal is hidden.
                  if(status_pay){
                    if($("#modelo").val() == 'D'){
                        window.location.href = '{{ route('ead.login') }}';
                    }else{
                        window.location.href = '{{ route('restrito') }}';
                    }
                  }else{
                    location.reload();
                  }
              }
          });
    });

    $("#comprar_curso_credito").click(function(){
          var status_pay = false;
          $.dialog({
              title: '',
              columnClass: 'col-md-6 col-md-offset-3',
              content: function(){
                  var self = this;
                  return $.ajax({
                      type: "POST",
                      headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                      },
                      url: '{{ route('pagamento', ['meio_pagamento' => 'credit_card']) }}',
                      data: {
                          ano:$("#ano_cartao").val(),
                          cvc2:$("#seguranca_cartao").val(),
                          mes:$("#mes_cartao").val(),
                          nrcartao:$("#numero_cartao").val(),
                          parcelas:$("#num_parcelas").val(),
                          portador:$("#nome_cartao").val(),
                          agenda_id:$("#agenda_id").val(),
                          cpf_titular:$("#cpf_titular").val(),
                          email: $("#email").val(),
                          telefone: $("#telefone").val(),
                          cep: $("#endereco_cep").val(),
                          rua: $("#endereco_rua").val(),
                          cidade: $("#endereco_cidade").val(),
                          estado: $("#endereco_estado").val(),
                          numero: $("#endereco_numero").val(),
                          telefone_area: $("#telefone_area").val()
                      }
                  }).done(function (response) {});
              },
              contentLoaded: function(data, status, request){
                  var self = this;
                  self.setContent('<div class="col-md-10 col-md-offset-1" style="color:#ed3656;"><label style="text-align: center; width: 100%"><b>Pagamento Efetuado!</b></label><br><label style="text-align: center; width: 100%"><b>Gerando seu acesso aguarde...</b></label><br></div>');
                  if(request != null){
                      if(request.responseJSON != null){ //SUCESSO
                          if(request.responseJSON.status != null){ //SUCESSO
                              if(request.responseJSON.status == "paid"){ //SUCESSO
                                    var data = $("#pagamento-aluno").serializeJSON();
                                    data = { ...data, meio_pagamento: 'credit_card', reference_id: request.responseJSON.nsu };
                                    $.ajax({
                                      type: "POST",
                                      headers: {
                                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                      },
                                      url: '{{ route('pagamento.agenda') }}',
                                      data,
                                      success: function(data, status, request){
                                          if(request.responseJSON.status == 'success'){
                                              status_pay = true;
                                              self.setContent('<div class="col-md-10 col-md-offset-1" style="color:#ed3656;"><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole.png') }}"><label style="text-align: center; width: 100%">Bem vindo à Ecole!</label><br><label style="text-align: center; width: 100%">Enviamos às informações para o seguinte endereço de email:</label><br><label style="text-align: center; font-size:15pt; width: 100%"><b>'+$("#email").val()+'</b></label><br></div>');
                                          }else{
                                              self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                                          }
                                      }
                                    });
                              }else{
                                self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                              }
                          }else{
                            self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                          }
                      }else{
                        self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                      }
                  }else{
                    self.setContent('<div class="col-md-10 col-md-offset-1" style="color:rgb(169, 0, 31);"><label style="text-align: center; font-size:15pt; width: 100%"><b>Erro ao tentar efetuar o pagamento! verifique os dados novamente.</b></label><br><img style="width: 30%; display: block; margin: 0 auto" src="{{ asset('/images/logo-ecole-error.png') }}"></div>');
                  }
              },
              onContentReady: function(){
                  // this.setContentAppend('<div>Content ready!</div>');
              },
              onClose: function () {
                  // before the modal is hidden.
                  if(status_pay){
                    if($("#modelo").val() == 'D'){
                        window.location.href = '{{ route('ead.login') }}';
                    }else{
                        window.location.href = '{{ route('restrito') }}';
                    }
                  }else{
                    location.reload();
                  }
              }
          });
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
      if(isValid){
        curInputs = curStep.find("input[type='password']");
        let value;
        for(var i=0; i<curInputs.length; i++){
          if(i == 0){
            value = curInputs[i].value;
          }else{
            isValid = (value == curInputs[i].value) && isValid;
            if(!isValid){
              alert('As senhas precisam ser iguais');
            }
          }
        }
      }
      if (isValid){
          isValid = $('input[name="acordo_contrato"]:checked').length > 0;
          if(!isValid){
            alert('Você precisa concordar com os termos!');
          }
      }
      if (isValid){
        nextStepWizard.removeAttr('disabled').trigger('click');
      }
  });
  $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
<script type="text/javascript" src="{{asset('js/jquery.serializejson.min.js')}}"></script>
@endsection
