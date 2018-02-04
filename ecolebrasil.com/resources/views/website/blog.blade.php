@extends('layouts.website')

@section('content')
	<div class="row" style="margin: 0; padding: 0">
		  <div class="col-md-12" style="margin: 0; padding: 0">
		    <a href="#" class="video-index thumbnail ">
		    	<div style="position: absolute; background-color: rgba(255, 255, 255, 0.5); width: 100%; height: 100%" ></div>
		      <img src="{{ asset('images/banner-blog.png') }}" alt="...">
		    </a>
		  </div>
	 </div>
	<div class="row" style="margin-top: 30px; margin-bottom: 30px">
		@foreach($blogs as $blog)
					<div class="row" style="margin-top: 30px; margin-bottom: 30px">
						<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
							<div class="row" style="margin-top: 30px">
								<h3 class="title-pink-begin-text">{{ $blog->titulo }}</h3>
								{{-- <i><label>POR ANDREA FUCHTER</label></i> --}}
				                <p class="gray-text">
									{{ $blog->descricao }}                	
				                </p>
				                <a  class="title-pink-begin-text" target="_blank" href="{{ route('post_blog', $blog->id) }}"><i>Matéria Completa...</i></a>
				                <hr>					
							</div>	
										

						</div>
					</div>
			@endforeach
	</div>
@endsection