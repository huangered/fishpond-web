@extends('layouts.app')
@section('content')

<h1>Docs</h1>

<a href="/article/create" >New</a>
@if($docs->count() > 0)
	<h1>we have {{$docs->count()}} articles</h1>
  <div>
    @foreach ($docs as $doc)
    <p>{{$doc->id}}</p>
      <p>{{$doc->title}}</p>
      <p>{{$doc->author}}</p>
      <p>{{$doc->content}}</p>
       <a href="/article/{{$doc->id}}" >edit</a>
    @endforeach
  </div>
@else
  <p>
    No lists found!
  <p>
@endif
@endsection