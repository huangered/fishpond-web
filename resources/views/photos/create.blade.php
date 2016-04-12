@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="row">
		<h1>Upload picture</h1>
	/*
	 * https://laravelcollective.com/docs/5.2/html#
	 * /
	{!! Form::open(array('route'=>'photo.store', 'class'=>'form', 'files'=>true))!!}
	{!! Form::label('picture')!!}
	{!! Form::file('photo') !!}
	{!! Form::submit('ok') !!}
	{!! Form::close() !!}
	</div>
</div>
@endsection
