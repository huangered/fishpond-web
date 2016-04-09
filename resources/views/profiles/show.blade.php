@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">
		<div class="four wide column">
			<img class="ui small image" src="/1.jpg">
			<h1 class="ui header">{{ $user->name }}</h1>
			<div class="ui divider"></div>
			<div class="ui list">
  				<div class="item">
    				<i class="users icon"></i>
    				<div class="content">
      					{{ $user->profile->company }}
    				</div>
  				</div>
  				<div class="item">
    				<i class="marker icon"></i>
    				<div class="content">
      					{{ $user->profile->location }}
    				</div>
  				</div>
  				<div class="item">
    				<i class="mail icon"></i>
    				<div class="content">
      					<a href="mailto:{{ $user->email}}">{{ $user->email }}</a>
    				</div>
  				</div>
			</div>
			<div class="ui divider"></div>
		</div>
		<div class="twelve wide column">
			
			<a href="/people/{{ $user->id}}/edit">edit</a>
		</div>
		
	</div>
</div>
@endsection