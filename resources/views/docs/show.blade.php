@extends('layouts.app')
@section('content')

<h1>{{ $doc->title}}</h1>
<p>
Created on: {{$doc->created_at}}
Last modified: {{$doc->updated_at}}<br/>
</p>
{{$doc->author}}
<p>
{{$doc->content}}
</p>
@endsection