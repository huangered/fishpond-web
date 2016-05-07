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
			<div class="ui top attached tabular menu">
				<a class="item active" data-tab="first">Article</a>
				<a class="item" data-tab="second">Picture</a>
				<a class="item" data-tab="third">
					<i class="rss icon"></i>Public Activity</a>
			</div>
			<div class="ui bottom attached tab segment active" data-tab="first">
				@foreach($user->documents()->get() as $doc)
				<div>
					<p>{{$doc->id}}  {{$doc->title}}</p>
				</div>
				@endforeach
			</div>
			<div class="ui bottom attached tab segment" data-tab="second">
				@foreach($user->images()->get() as $image)
					<div>
						<p>{{$image->id}}</p>
					</div>
				@endforeach
			</div>
			<div class="ui bottom attached tab segment" data-tab="third">
				@foreach($acts as $act)
					<div>
						<div>{{ $act->created_at }} ago</div>
						<div>{{ $act->action }}</div>
						<div>{{ $act->good }}</div>
						<div>{{ $act->bad }}</div>
					</div>
					<hr/>
				@endforeach
			</div>
			<script>
				$('.menu .item')
					.tab()
				;
			</script>
		</div>
	</div>
</div>
@endsection