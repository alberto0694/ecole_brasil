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
          <hr>
          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Valor </label>

            <div class="col-sm-6">
              <input value="{{ $ebook->valor }}" id="valor" name="valor" type="text" class="col-xs-12 col-sm-6" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Número Máximo de Parcelas </label>

            <div class="col-sm-6">
              <input value="{{ $ebook->max_parcelas }}" id="max_parcelas" name="max_parcelas" type="text" class="col-xs-12 col-sm-6" />
            </div>
          </div>

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
    <script type="text/javascript">
        jQuery(function($){

          //VALIDATOR JQUERY
          $("#novo-ebook").validate({
            rules: {
              // nome: {
              //  required: true,
              //  minlength: 2
              // },
              // modo: {
              //  required: true
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
