@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
  <div class="ui grid">
    <div class="twelve wide column">
        <div>
            <h1>Labels</h1>
            <div class="ui link list">
                @foreach($labels as $label)
                <a class="item" href="{{ url("article/?label=".$label->id) }}">{{ $label->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
  </div>
</div>
@endsection