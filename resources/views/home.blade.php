@extends('layouts.app')

@section('content')
<div class="ui container" style="padding-top: 5em;">
    <div class="ui centered grid">
        <div class="twelve wide column">
            <div class="alert">
                <div class="alert body">Latest activities</div>
            </div>
            @foreach($acts as $act)
                <div class="alert">
                    <div class="body">
                        <div class="time">{{ $act->user()->get()->first()->name }} created. {{ $act->created_at }} ago</div>
                        <div class="text">
                            {{ $act->description }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="four wide column">
            <div class="ui list">
                <div class="item">
                    <i class="bookmark icon"></i>
                    <div class="content" >
                        <a class="header">my collection</a>
                    </div>
                </div>
                <div class="item">
                    <i class="exchange icon"></i>
                    <div class="content" >
                        <a class="header">my start</a>
                    </div>
                </div>
                <div class="item">
                    <i class="ban icon"></i>
                    <div class="content" >
                        <a class="header">my follower</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
