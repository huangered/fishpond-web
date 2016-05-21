<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

    <title>Fishpond</title>
    <link rel="stylesheet" type="text/css" href="/semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="/css/fishpond.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ url('/semantic/semantic.js') }}"></script>
    <script src="{{ url('/js/vue.min.js') }}"></script>
    @yield('js')
</head>
<body >
    <div class="ui fixed borderless menu">
        <div class="ui container">
            <a href="#" class="header item">
                Fishpond
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
                        @if (Auth::user()->hasRole('admin')) 
                            <a class="item" href="{{ url('/admin') }}">Admin</a>
                        @endif
                        <a class="item" href="{{ url('/help') }}" >Help</a>
                        <a class="item" href="#" >Settings</a>
                        <a class="item" href="{{ url('/logout') }}">Logout</a>
                    </div>
            @endif
            </div>
        </div>
    </div>
    
    @yield('content')
   <footer class="fp-footer">
       <div>
           <span><a href="#">Mobile app</a></span>
           <span><a href="#">Owner</a></span>
           <span><a href="#">Suggestion</a></span>
       </div>
       <div>
           <span><a href="#">Join us</a></span>
           <span><a href="#">Protocol</a></span>
           <span><a href="#">Contact us</a></span>
       </div>
   </footer>
</body>
</html>
