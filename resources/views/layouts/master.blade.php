<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="icon" href="/favicon-100.png" sizes="100x100">
    <title>@yield('title', config('app.name'))</title>
    <!-- Page level Styles -->
    @yield('page_styles', '')
            <!-- Page level Scripts -->
    @yield('scripts', '')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 1em 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            margin-bottom: 1em;
        }
        .links {
            padding:1em 0;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .logo {
            width:162px;
            opacity:0.8;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            <div><img class="logo" src="/i/Bug.png"></div>
        </div>
        <div class="links">
            <a href="/">Home</a>
            <a href="/artists">Artists</a>
            <a href="/events">Events</a>
        </div>
        <div class="title m-b-md">
            Creative Minds Gallery
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</div>
<div style="float:right; margin:1em;">
    Creative Minds Art Gallery, LLC<br>
    #F1, 123 North Beach Road<br>
    Eastsound, WA<br>
    98245</div>
</body>
</html>