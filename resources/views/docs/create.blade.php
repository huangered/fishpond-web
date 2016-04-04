@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<h1>Create TODOParrot</h1>

	{!! Form::open(array('route'=>'article.store', 'class'=>'form'))!!}
	{!! Form::label('Your title')!!}
	{!! Form::text('title',null,array('required')) !!}
	{!! Form::label('author')!!}
	{!! Form::text('author',null,array('required')) !!}
	{!! Form::label('content')!!}
	{!! Form::textarea('content',null,array('required')) !!}
	{!! Form::submit('ok') !!}
	{!! Form::close() !!}
	</div>
</div>
@endsection