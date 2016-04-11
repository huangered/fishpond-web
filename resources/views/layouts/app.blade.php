<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

    <title>Clam</title>
    <link rel="stylesheet" type="text/css" href="/semantic/semantic.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/semantic/semantic.js"></script>
    @yield('js')
</head>
<body >
    <div class="ui fixed borderless menu">
        <div class="ui container">
            <a href="#" class="header item">
                Clam
            </a>
            <a href="{{ url('/') }}" class="item">Home</a>
            <a href="{{ url('/article') }}" class="item">Article</a>
            <a href="{{ url('/photo') }}" class="item">Photo</a>
            @if (Auth::guest())
            <div class="right menu">
                <a href="{{ url('/login') }} " class="item " >Login</a>
                <a href="{{ url('/register') }}" class="item ">Register</a>
             </div>
            @else
                <div class="ui simple right floated dropdown item">
                    {{ Auth::user()->name }}
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item" href="/people/{{ Auth::user()->id }}" >Your profile</a>
                        <a class="item" href="/help" >Help</a>
                        <a class="item" href="#" >Settings</a>
                        <a class="item" href="{{ url('/logout') }}">Logout</a>
                    </div>
            @endif
            </div>
        </div>
    </div>
    
    @yield('content')
   
</body>
</html>
