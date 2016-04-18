@extends('layouts.app')
@section('js')
	<script src="/js/medium/js/medium-editor.js"></script>
	<link rel="stylesheet" href="/js/medium/css/medium-editor.css">
	<link rel="stylesheet" href="/js/medium/css/themes/default.css">

@endsection
@section('content')
	<p style="padding-top: 5em;">djsljf</p>
	<div>
		<div class="editable"></div>
		<script>var editor = new MediumEditor('.editable');</script>
	</div>
<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">

		<div class="ui form">
			{!! Form::open(array('route'=>'article.store', 'class'=>'form'))!!}
			<div class="field">
				<label>Title:</label>
			{!! Form::text('title', null,array('required','aaa')) !!}
			</div>
			<div class="field">
				<label>Content:</label>
			{!! Form::textarea('content',null,array('required')) !!}
			</div>
			{!! Form::submit('Publish') !!}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
