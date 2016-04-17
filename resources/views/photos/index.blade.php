@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<a class="ui primary button" href="/photo/create">Upload new picture</a>
	<div class="ui small images">
	@foreach ($photos as $photo)
		<a href="{{$photo->path}}" class="ui small image">
			<img src="{{$photo->path}}">
		</a>
	@endforeach
	</div>
</div>
@endsection