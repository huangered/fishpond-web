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
			<style>

			</style>
			<a class="ui primary button" href="/photo/create">Upload new picture</a>

			<div class="ui divider"></div>
			<div>
				<div class="fp-heading-content">
					<span class="fp-heading-title">Best photos in this week</span>
				</div>
				<div class="ui list">
					<a class="item">photo 1</a>
					<a class="item">photo 2</a>
					<a class="item">photo 3</a>
				</div>
			</div>
			<div class="ui divider"></div>

			<div>
				<div class="fp-heading-content">
					<span class="fp-heading-title">Best photoers in this week</span>
				</div>
				<div class="ui list">
					<a class="item">photoer 1</a>
					<a class="item">photoer 2</a>
					<a class="item">photoer 3</a>
				</div>
			</div>
			<div class="ui divider"></div>
			<div>
				<div class="fp-heading-content">
					<span class="fp-heading-title">Tags you follow</span>
				</div>
				<div class="ui link list">
					@foreach($labels as $label)
						<a class="item" href="{{ url("article/?label=".$label->id) }}">{{ $label->name }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection