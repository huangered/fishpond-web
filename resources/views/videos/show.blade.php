@extends('layouts.app')
@section('css')
	<link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
@endsection
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">
		<div class="twelve wide column">
			<div class="">
				<h1>{{$name}}</h1>

				<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
					   poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
					<source src="/{{$name}}" type='video/mp4'>
					<p class="vjs-no-js">
						To view this video please enable JavaScript, and consider upgrading to a web browser that
						<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
					</p>
				</video>

				<script src="http://vjs.zencdn.net/5.8.8/video.js"></script>
			</div>
		</div>
	</div>
</div>
@endsection