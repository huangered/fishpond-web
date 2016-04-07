@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">
		<div class="twelve wide column">
			<b>{{ $user->name }}, {{ $user->profile->description}}</b>
			<p>{{ $user->profile->location }}</p>
			<p>{{ $user->profile->job }}</p>
			<a href="/people/edit">edit</a>
		</div>
		<div class="four wide column">
			<p>watcher</p>
			<p>watching</p>
		</div>
	</div>
</div>
@endsection