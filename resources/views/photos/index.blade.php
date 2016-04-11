@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<a class="ui primary button" href="/photo/create">Upload new picture</a>
	<div class="ui grid">
	@foreach ($photos as $photo)
		<div class="two wide column">
			<p>{{$photo->path}}</p>
			<a href="{{$photo->path}}" class="ui medium image">
				<img src="/1.jpg">
			</a>
		</div>

	@endforeach
	</div>
</div>
@endsection