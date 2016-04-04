@extends('layouts.master')
@section('content')
<h1>Create TODOParrot</h1>
{!!Form::open(array('route'=>'lists.store', 'class'=>'form'))!!}
<div>
	{!! Form::label('Your name')!!}
	{!! Form::text('name',null,array('required')) !!}
	{!! Form::label('description')!!}
	{!! Form::text('description',null,array('required')) !!}
	{!! Form::submit('ok') !!}
	{!! Form::close() !!}
</div>