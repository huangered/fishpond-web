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
      @else
        <h1>
          No lists found!
        </h1>
      @endif
      @foreach ($docs as $doc)
      <div class="doc">
        <div class="body">
          <div class="label">
            <div class="user">{{ $doc->author }}</div>
            <div class="time" >created at {{ $doc->created_at }}</div>
            <div class="title" >
                <a href="/article/{{$doc->id}}">{{$doc->title}}</a>
            </div>
          </div>
          <div class="content">
            <p>{{$doc->content}}</p>
          </div>
            <div class="readmore">
                <a href="/article/{{$doc->id}}">Read more</a>
            </div>
            <div class="favour">
                <p>like 100</p>
            </div>
        </div>

        <a href="/article/{{$doc->id}}" >edit</a>
      </div>
      @endforeach
    </div>
    <div class="four wide column">
      <a href="/article/create" >New</a>
    </div>
  </div>
</div>
@endsection