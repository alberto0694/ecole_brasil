{{-- <div class="alert alert-danger">
    {{ $slot }}
</div> --}}
<div class="ASAs{{$nameId}} col-sm-6">
	<input class="readFileBase64" type="file" class="col-xs-12 col-sm-6" />
	<input id="{{$nameId}}" name="{{$nameId}}" class="b64_result" type="hidden" value="{{ $src }}"> {{-- <<<----- AQUI TEM UM BASE6						 --}}
	<img class="img_result" height="150" src="{{ $src }}" >								
	{{ $slot }}
</div>