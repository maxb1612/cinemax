<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
</head>
<body>
<div class="navbar-content">
    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li><a href="{{route('index')}}">Головна</a></li>
                @if(Auth::check())
                    <li><a href="{{route('user.private')}}">Профіль</a></li>
                    <li><a href="{{route('tickets')}}">Квитки</a></li>
                    <li><a href="{{route('user.logout')}}">Вийти</a></li>
                @else
                <li><a href="{{route('user.login')}}">Вхід</a></li>
                @endif
            </ul>

        </div>

        <a href="{{route('index')}}" class="logo">
            <img src="{{asset('static/img/logo.svg')}}" alt="logo">
        </a>

    </nav>

</div>

@yield('carousel')

<main>
    @yield('main')
</main>

<footer></footer>
</body>
</html>
