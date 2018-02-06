@extends('layouts.website')
@section('content')
<style type="text/css">
	.video-index{
		margin: 0; padding: 0; border: none; margin-top: -1px; border-radius: 0px;
	}
</style>
<div class="row" style="margin: 0; padding: 0">
	  <div class="col-md-12" style="margin: 0; padding: 0">
	    <a href="#" class="video-index thumbnail ">
	    	<div style="position: absolute; background-color: rgba(255, 255, 255, 0.5); width: 100%; height: 100%" ></div>
	      <img src="{{ asset('images/banner-blog.png') }}" alt="...">
	    </a>
	  </div>
</div>
<div class="row" style="margin-top: 30px; margin-bottom: 30px">
	<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
		<div class="row" style="margin-top: 30px">
			<h3 class="title-pink-begin-text">{{ $blog->titulo }}</h3>
      <p>{!! $blog->descricao_html !!}</p>
		</div>
	</div>
</div>
@endsection
