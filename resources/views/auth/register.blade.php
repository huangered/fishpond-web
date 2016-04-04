@extends('layouts.app')

@section('content')
<div class="ui middle aligned center aligned grid" >
    <div class="row" style="padding-top:10em">
        <h2 class="ui teal image header">
            <div class="content">
                Register
            </div>
        </h2>
    </div>
    <form class="ui large form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}
        <div class="ui stacked segment">
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon" ></i>
                    <input type="text" name="name" placeholder="username" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                    <strong>{{ $errors->first('name') }}</strong>
                    @endif

                </div>
            </div>
            <div class="field">
                <div class="ui left icon input">
                    <i class="mail icon"></i>
                    <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
            </div>
            <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password_confirmation" placeholder="password">
                        @if ($errors->has('password_confirmation'))
                        <span class="">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button type="submit" class="ui fluid large teal submit button">Register</button>
        </div>
    </form>
</div>
@endsection
