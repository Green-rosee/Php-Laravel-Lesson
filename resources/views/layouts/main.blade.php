<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("header-title")</title>

    @vite(['resources/css/appA.css',
            'resources/css/appB.css',
            'resources/css/appC.css',
            'resources/js/app.js'])
</head>
<body>
<header class="headerA">
    <div>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Main</a></li>
                <li><a href="{{route("about")}}">About</a></li>
                <li><a href="{{route("contact")}}">Contact</a></li>
                <li><a href="{{route("posts")}}">Post</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="div-a">
    @yield('content')
</div>

<footer class="footerA">
    ...All rights reserved...
</footer>
</body>
</html>
