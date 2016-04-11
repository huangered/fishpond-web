@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="row">
		<h1>Upload picture</h1>

	{!! Form::open(array('route'=>'photo.store', 'class'=>'form', 'files'=>true))!!}
	{!! Form::label('picture')!!}
<input name="photo" id="photo" type="file" />	
	{!! Form::submit('ok') !!}
	{!! Form::close() !!}
	</div>
</div>
@endsection
