<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

    <title>Fishpond</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body >
    <nav class="fp-navbar">
        <ul class="fp-navbar-nav" >
            <li class="fp-li">
                <a href="#" >Fishpond</a>
            </li>
            <li class="fp-li">
                <a href="{{ url('/') }}" >Home</a>
            </li>
            <li class="fp-li">
                <a href="{{ url('/article') }}" >Article</a>
            </li>
            <li class="fp-li">
                <a href="{{ url('/photo') }}" >Photo</a>
            </li>
        </ul>
    </nav>
    
    @yield('content')
   
</body>
</html>
