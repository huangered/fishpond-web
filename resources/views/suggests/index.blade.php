@extends('layouts.app')

@section('content')
<div class="ui container" style="padding-top: 5em;">
    <h1>Suggest</h1>
    @foreach($suggests as $s)
    <div>
        <p>{{$s->name}}</p>
        <p>{{$s->email}}</p>
        <p>{{$s->suggest}}</p>
        <p>{{$s->fixed}}</p>
    </div>
    <hr/>
    @endforeach
    <h1>create a suggest</h1>
    <form method="POST" action="{{ url('/suggest') }}">
        {!! csrf_field() !!}
        <input type="text" name="name" placeholder="username" />
        <input type="text" name="email" placeholder="email"/>
        <textarea name="suggest" placeholder="suggest" ></textarea>
        <button type="submit" >Suggest</button>
    </form>
</div>
@endsection
