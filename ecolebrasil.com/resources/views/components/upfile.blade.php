{{-- <div class="alert alert-danger">
    {{ $slot }}
</div> --}}
<div class="{{$nameId}} col-sm-6">
	<input type="file" class="readFileBase64 col-xs-12 col-sm-6"  />
	<br><img class="img_result" height="150" src="{{ asset($src) }}" >
	<input id="{{$nameId}}" name="{{$nameId}}" class="b64_result" type="hidden" value="{{ asset($src) }}">
	{{ $slot }}
</div>
