@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
  <div class="ui grid">
    <div class="twelve wide column">
      @if($message)
      <div class="ui message">
        <div class="header">
          {{$message->title()}}
        </div>
        <p>{{$message->content()}}</p>
      </div> 
      @endif
      @if($docs->count() > 0)
        <h1>we have {{$docs->count()}} articles</h1>
        <div>
          @foreach ($docs as $doc)
          <p>{{$doc->id}}</p>
          <p>{{$doc->title}}</p>
          <p>{{$doc->author}}</p>
          <p>{{$doc->content}}</p>
          <a href="/article/{{$doc->id}}" >edit</a>
          <hr/>
          @endforeach
        </div>
      @else
        <p>
          No lists found!
        <p>
      @endif
    </div>
    <div class="four wide column">
      <a href="/article/create" >New</a>
    </div>
  </div>
</div>
@endsection