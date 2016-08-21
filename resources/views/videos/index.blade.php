@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">
		<div class="twelve wide column">
			<div class="">
			@foreach ($videos as $video)
				<a href="{{ url("/video/$video") }}">
					{{$video}}
				</a>
				<br>
			@endforeach
			</div>
		</div>
	</div>
</div>
@endsection