<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Sample') - Laravel 学习日记</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    {{-- <header class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                <a href="/" id="logo">Laravel</a>
                <nav>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/help">帮助</a></li>
                        <li><a href="/about">关于</a></li>
                        <li><a href="/">登录</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header> --}}

    @include('layouts._header')
    <div class="container">
    @yield('content')
    @include('layouts._footer')
    </div>
</body>
</html>