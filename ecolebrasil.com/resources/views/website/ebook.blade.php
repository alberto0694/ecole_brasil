@extends('layouts.website')
@section('content')
<div class="row">
	<h3 align="center" class="title-pink-begin-text">EBOOKS</h3>
</div>
<div class="row">
	@foreach($ebooks as $ebook)
		<div class="col-md-4 col-xs-12">
			<a href="{{ route('ebook_pagamento', $ebook->id) }}">
				<img style=" margin: 0 auto; display: block; width: 65%; " src="{{ $ebook->card }}">
				<label align="center"> {{ $ebook->titulo }} </label>
			</a>
			<div class="row">
				<div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
					<h3 style="text-align: center; background: #ef4060; color: white; padding: 2px; ">
						<a style="text-decoration: none; color: white; font-style: italic; font-weight: bold" href="#">Comprar</a>
					</h3>
				</div>
			</div>
		</div>
	@endforeach
</div>
@endsection