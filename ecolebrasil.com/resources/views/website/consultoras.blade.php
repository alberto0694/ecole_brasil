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
</style>
<div class="row" style="padding: 15px; text-align: center">
	<div class="row">
		<h3 align="center" class="title-pink-begin-text">CONSULTORAS</h3>
	</div>
	<div class="col-md-10 col-md-offset-1" >
		@foreach($consultoras as $consultora)
			<div class="col-md-3" >
				<a target="_blank"  href="{{ $consultora->site }}">
					<div class="cs-item-frame"">
						<div class="item-inside" style="background-image: url({{ asset($consultora->avatar) }})"></div>
					</div>
				</a>
				<h3 style="color: rgba(239, 64, 96, 1);"> {{ $consultora->nome }} </b3><br>
				<h4 > {{ $consultora->cidade }} </h4>
				<div class="row">
					<div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
						<h4 style="text-align: center; background: #ef4060; color: white; padding: 2px; ">
							<a target="_blank" style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="{{ $consultora->site }}">Site</a>
						</h4>
					</div>
				</div>
			</div>
		@endforeach
	</div>

</div>
@endsection