@extends('layouts.website')
@section('content')
<style type="text/css">
	.cs-item-frame {
	    width: 177px;
	    height: 168px;
	    margin:0 auto;
	    /*position: absolute;*/
	    background: url({{ asset('images/frame-consultants.png') }});
	    z-index: 999;
	    top: 0;
	    left: 0;
	    padding-top: 10px;
	}

	.item-inside{
		    height: 130px;
		    width: 130px;
		    margin-top: 10px;
		    margin-left: 20px;
		    background-repeat: no-repeat;
		    background-clip: border-box;
		    background-size: 100%;
		    border: 3px solid;
		    border-radius: 2px;
	}
    .header-page-content{
        background-image: url('{{ asset('images/consultoras.png')  }}')
    }
</style>
 <div class="row" style="margin: 0; padding: 0">
    <div class="col-md-12 header-page-content" style=""></div>
    <div class="col-md-12 header-page">
        <p class="gray-dark-color bold">CONSULTORAS</p>
    </div>
 </div>
<div class="row padding-20" style="text-align: center">
	<div class="col-md-10 col-md-offset-1" >
		<div class="row row-centered" style="margin-bottom: 30px">
			<div class="col-md-8 col-centered" style="background-color: rgba(239, 64, 96, 1);">
				<form method="GET" action="{{ route('consultoras') }}" class="navbar-form navbar-left" role="search" style="width: 100%">
				  {{ csrf_field() }}
				  <div class="form-group col-md-4">
				    <input name="nome" type="text" class="form-control" placeholder="Nome">
				  </div>
				  <div class="form-group col-md-4">
				    <input name="cidade" type="text" class="form-control" placeholder="Cidade">
				  </div>
				  <button type="submit" class="btn btn-default col-md-4">Pesquisar</button>
				</form>
			</div>
		</div>
		@foreach($consultoras as $consultora)
			<div class="col-md-3" >
				<a target="_blank"  href="{{ $consultora->site }}">
					<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset($consultora->avatar) }})"></div>
					</div>
				</a>
				<h3 class="titulo-padrao bold" style="color: rgba(239, 64, 96, 1);"> {{ $consultora->nome }} </b3><br>
				<h4 class="paragrafo-padrao"> {{ $consultora->cidade }} </h4>
			</div>
		@endforeach
	</div>

</div>
@endsection