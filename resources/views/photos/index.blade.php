@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">
		<div class="twelve wide column">
			<div class="ui small images">
			@foreach ($photos as $photo)
				<a href="{{ url("/photo/".$photo->id) }}" class="ui small image">
					<img src="{{$photo->path}}">
				</a>
			@endforeach
			</div>
		</div>
		<div class="four wide column">
			<a class="ui primary button" href="/photo/create">Upload new picture</a>
			<div>
				<h1>Labels</h1>
				<div class="ui link list">
					@foreach($labels as $label)
						<a class="item" href="{{ url("article/?label=".$label->id) }}">{{ $label->name }}</a>
					@endforeach
				</div>
				<a href="/label" >See all...</a>
			</div>
			<div class="ui divider"></div>
			<div>
				<h1>Best photo in this week</h1>
				<div class="ui list">
					<a class="item">photo 1</a>
					<a class="item">photo 2</a>
					<a class="item">photo 3</a>
				</div>
			</div>
			<div class="ui divider"></div>
			<div>
				<h1>Best photoers in this week</h1>
				<div class="ui list">
					<a class="item">photoer 1</a>
					<a class="item">photoer 2</a>
					<a class="item">photoer 3</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection