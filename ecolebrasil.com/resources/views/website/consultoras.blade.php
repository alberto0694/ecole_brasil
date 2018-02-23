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
        background-image: url('{{ asset('images/certificacaointernacional.png')  }}')
    }
</style>
 <div class="row" style="margin: 0; padding: 0">
    <div class="col-md-12 header-page-content" style=""></div>
    <div class="col-md-12 header-page">
        <p class="gray-dark-color bold">CONSULTORAS</p>
    </div>
 </div>
<div class="row padding-20 margin-top" style="text-align: center">
	<div class="col-md-10 col-md-offset-1" >
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