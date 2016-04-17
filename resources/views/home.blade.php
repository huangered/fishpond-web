@extends('layouts.app')

@section('content')
<div class="ui container" style="padding-top: 5em;">
    <div class="ui grid">
        <div class="twelve wide column">
            @foreach($acts as $act)
                <div>
                    <div>{{ $act->user()->get()->first()->name }} created {{ $act->created_at }} ago</div>

                    <div>{{ $act->action }}</div>
                    <div>{{ $act->good }}</div>
                    <div>{{ $act->bad }}</div>
                </div>
                <hr/>
            @endforeach
        </div>
        <div class="four wide column">

        </div>
    </div>

</div>
@endsection
