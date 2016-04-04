@extends('layouts.app')

@section('content')
<div class="ui middle aligned center aligned grid">
    <div class="row" style="padding-top:10em">
        <h2 class="ui teal image header">
            <div class="content">
                Login into your account
            </div>
        </h2>
    </div>
    <form class="ui large form" method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}
        <div class="ui stacked segment">
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}">
                </div>
                <div class="ui left">
                    @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                    @endif
                </div>
            </div>
            <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="ui left">
                    @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                    @endif
                </div>
            </div>
            <div class="ui checkbox">
                <input type="checkbox" name="remember">
                <label>Remember Me</label>
            </div>
       
            <button type="submit" class="ui fluid large teal submit button">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>
</div>
@endsection
