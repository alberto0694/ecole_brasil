@extends('layouts.website')
@section('content')
<style type="text/css">
	.video-index{
		padding: 0;
		margin: 0;
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
 <div class="row"></div>
 <br><br><br>
 <div class="row">
 	<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	 	<h2 align="center" class="title-pink-begin-text">EU SOU ECOLE</h2>
	 	<h2 style="text-align: justify;" class="gray-text">Queremos ver nossos alunos irem cada vez mais longe. Queremos que sejam cada vez mais felizes e realizados em suas atuações. Que tenham todas as ferramentas para aplicar o melhor de si. </h2>
		<h2 style="text-align: justify;" class="gray-text" style="margin-top: 0;">Para isso, criamos o projeto <b style="color: rgba(239, 64, 96, 1);" >EU SOU ECOLE</b>. Para conectar, para divulgar, para trocar! Você já faz parte da Ecole. </h2>
		<h2 align="center" class="gray-text" style="margin-top: 0;">Venha crescer conosco!</h2>
 	</div>
 </div> 
 <div class="row"></div>
 <div class="row" style="margin-top: 70px;">
 	<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	 	<h4 align="center" class="title-pink-begin-text" style="font-style: normal; color: rgba(255, 255, 255, 1);"><a href="#">CONHEÇA NOSSO PROJETO</a></h4>
	 	{{-- <h3 align="center" class="gray-text">Queremos ver nossos alunos irem cada vez mais longe. Queremos que sejam cada vez mais felizes e realizados em suas atuações. Que tenham todas as ferramentas para aplicar o melhor de si. Para isso, criamos o projeto <b style="color: rgba(239, 64, 96, 1);" >EU SOU ECOLE</b>. Para conectar, para divulgar, para trocar! Você já faz parte da Ecole. Venha crescer conosco!</h3> --}}
 	</div>
 </div> 
 <br><br><br>
@endsection