@extends('layouts.website')
<style type="text/css">
	.desc-agenda{
		color:rgba(239, 64, 96, 1);
	}
	.bold{
		font-weight: bold;
		margin-bottom: 0;
	}
	.desc-agenda-prof{
		color: gray;
	}
</style>
@section('content')
<div class="row">
	<div class="col-md-12 col-md-offset-0">
	<h3 align="center" class="title-pink-begin-text">E-Shop</h3>
</div>

<div class="row">
<h3 align="center">Em breve. <br><a href="{{ route('contato') }}">Entre em contato conosco</a></h3>
</div>

@endsection
