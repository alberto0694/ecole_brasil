@extends('layouts.website')
@section('content')
<style type="text/css">
	.item {
		height: 380px;
	}
	video{
	    display: block;
	    margin: 0 auto;
	}

	.carousel-control, .carousel-control:hover{
		color: rgba(239, 64, 96, 1);
	}

	.media-body, .media-left, .media-right {
		vertical-align: middle;
	}

	@media screen and (max-width: 768px) {
	    video {
	    	    width: 90%;
	    	    margin-left: 5%;
	    }
	}

	.header-page-content{
		background-image:  url('{{ asset('images/depoimentos.png')  }}')
	}
</style>
 <div class="row" style="margin: 0; padding: 0">
	<div class="col-md-12 header-page-content" style=""></div>
	<div class="col-md-12 header-page">
		<p class="gray-dark-color">QUEM FEZ APROVA</p>
	</div>
 </div>

 <div class="row margin-top">

 	<div class="col-md-10 col-md-offset-1 ">
		@if($depoimentosVideo->count() > 0)
			<div class="row" >
				<div class="container" >
					<div id="carousel-videos" class="carousel slide" >
						<div class="carousel-inner" style="min-height: 380px">
							<?php
								$i = 0;
								$class = "active";
							?>
						  	@foreach($depoimentosVideo as $depoimento)
						  		@if($depoimento->video != '0')
								    @if($i > 0)
								    	<?php $class = ""; ?>
								    @endif
								    <?php $i++; ?>
								    <div class="item <?php echo $class; ?>">
									    @if($depoimento->video != '')
											<iframe src="{{ $depoimento->video }}" align="center" width="100%" height="450"  frameborder="0" allowfullscreen=""></iframe>
									    @endif
								    </div>
								@endif
							  @endforeach
						</div>
						<a class="left carousel-control" href="#carousel-videos" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-videos" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		@endif

		<br>
 		<div class="container">
 			@foreach($depoimentos as $depoimento)
 					@if($depoimento->apenas_video != 'on')
						<div class="col-md-12" style="margin-top: 15px">
								<div class="media-left">
									  <div class="media-left">
										      <img style="width: 250px;" class="media-object" src="{{asset($depoimento->avatar)}}" alt="{{ $depoimento->autor }}">
									  </div>
									  <div class="media-body">
										    <h5 class="paragrafo-padrao media-heading hidden-xs hidden-sm" style=" word-spacing: 8px; line-height: 20px; text-align: justify; margin-left: 25px">{{ $depoimento->descricao_html }}</h5>
										    <i class="hidden-xs hidden-sm bold" style="margin-left: 25px; font-weight: bold">{{$depoimento->autor}}</i>
										    <hr style=" border: .1pt solid; ">
									  </div>
									  <h5 class="paragrafo-padrao media-heading hidden-md hidden-lg" style=" word-spacing: 8px; line-height: 20px; text-align: justify;">{{ $depoimento->descricao_html }}</h5>
									  <i class="hidden-md hidden-lg" style="margin-right: 60px">{{$depoimento->autor}}</i>
								</div>
								<hr style="border-top: 1px solid #c7c7c7">
						</div>
					@endif
			@endforeach
		</div>
	</div>
 </div>
 <div class="row" style="margin-top: 30px">&nbsp;</div>
@endsection
