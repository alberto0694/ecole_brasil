@extends('layouts.administrador')
@section('content')
        @component('components.tutorial')
          teste
        @endcomponent

        <div class="row">
          <h2 style="margin-left: 20px">Edição de Ebook</h2>
        </div>

        <form id="novo-ebook" class="form-horizontal" role="form" style="margin-left: 20px">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="PUT">
          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Titulo </label>

            <div class="col-sm-6">
              <input value="{{ $ebook->titulo }}" id="titulo" name="titulo" type="text" class="col-xs-12 col-sm-6" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Card </label>
            @component('components.upfile', ['nameId' => 'card', 'src' => $ebook->card])
            @endcomponent
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Valor </label>

            <div class="col-sm-6">
              <input value="{{ $ebook->valor }}" id="valor" name="valor" type="text" class="col-xs-12 col-sm-6" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tipo de Transanção </label>

            <div class="col-sm-6">
              <select id="transacao" name="transacao" class="col-xs-12 col-sm-6" id="form-field-select-3">
                @if($ebook->transacao == 4)
                  <option selected value="04">À Vista</option>
                  <option value="06">Parcelado Emissor</option>
                  <option value="08">Parcelado Estabelecimento</option>
                  <option value="39">IATA à vista</option>
                  <option value="40">IATA parcelado</option>
                @endif
                @if($ebook->transacao == 6)
                  <option  value="04">À Vista</option>
                  <option selected value="06">Parcelado Emissor</option>
                  <option value="08">Parcelado Estabelecimento</option>
                  <option value="39">IATA à vista</option>
                  <option value="40">IATA parcelado</option>
                @endif
                @if($ebook->transacao == 8)
                  <option  value="04">À Vista</option>
                  <option value="06">Parcelado Emissor</option>
                  <option selected value="08">Parcelado Estabelecimento</option>
                  <option value="39">IATA à vista</option>
                  <option value="40">IATA parcelado</option>
                @endif
                @if($ebook->transacao == 39)
                  <option  value="04">À Vista</option>
                  <option value="06">Parcelado Emissor</option>
                  <option value="08">Parcelado Estabelecimento</option>
                  <option selected value="39">IATA à vista</option>
                  <option value="40">IATA parcelado</option>
                @endif
                @if($ebook->transacao == 40)
                  <option value="04">À Vista</option>
                  <option value="06">Parcelado Emissor</option>
                  <option value="08">Parcelado Estabelecimento</option>
                  <option value="39">IATA à vista</option>
                  <option selected value="40">IATA parcelado</option>
                @endif
              </select>
            </div>
          </div>
          @if($ebook->transacao != 4 && $ebook->transacao != 39)
            <div class="form-group parcelas-class">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Número de Parcelas </label>

              <div class="col-sm-6">
                <select id="max_parcelas" name="max_parcelas" class="col-xs-12 col-sm-6" id="form-field-select-3">
                  <option value="0" style="display: none"></option>
                  <?php $array = array(2=>2, 3=>3, 4=>4, 5=>5, 6=>6); ?>
                  @foreach($array as $num)
                    @if($num == $ebook->max_parcelas)
                      <option selected value="{{$num}}">{{ $num }}x</option>
                    @else
                      <option value="{{$num}}">{{ $num }}x</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>
          @else
            <div class="form-group parcelas-class" style="display: none">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Número de Parcelas </label>

              <div class="col-sm-6">
                <select id="max_parcelas" name="max_parcelas" class="col-xs-12 col-sm-6" id="form-field-select-3">
                  <option value="0" style="display: none"></option>
                  <option value="2">2x</option>
                  <option value="3">3x</option>
                  <option value="4">4x</option>
                  <option value="5">5x</option>
                  <option value="6">6x</option>
                </select>
              </div>
            </div>
          @endif

          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Arquivo</label>
            @component('components.upfile', ['nameId' => 'file', 'src' => $ebook->file])
            @endcomponent
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
    <script type="text/javascript" src="{{ asset('js/jquery-price-format/jquery.priceformat.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(function($){
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
          $("#novo-ebook").validate({
            rules: {},
            messages: {},
            submitHandler: function(form) {
              $.confirm({
                  content: function(){
                      var self = this;
                      return $.ajax({
                        type: "POST",
                        url: '{{ route('ebook.update', $ebook->id) }}',
                        data: $("#novo-ebook").serialize(),
                        success: function(){
                          $.alert({
                              title: 'Sucesso!',
                              content: 'Ebook cadastrado com sucesso!',
                              buttons:{
                                ok:function(){
                                  window.location.href = "{{ route('administrador.ebook.index') }}";
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
                        document.location.href = "{{ route('administrador.ebook.index') }}"
                    },
                    Nao:{
                      text:"Não"
                    }
                }
            });
          });
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
