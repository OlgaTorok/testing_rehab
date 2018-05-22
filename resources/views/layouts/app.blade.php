<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'NRH') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/874dbadbd7.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'NRH') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav mr-auto">
                        <!-- &nbsp; -->
                        <!-- <form class="form-inline my-2 my-lg-0" action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <input class="form-control mr-sm-2" type="search" name="find" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            @if (Auth::user()->hasRole('admin'))
                            <!-- Added in the order they need to be added -->
                                <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-user" aria-hidden="true"></i> Users </a></li>
                                <li><a href="{{ route('admin.activities.index') }}"><i class="fa fa-child" aria-hidden="true"></i> Activities </a></li>
                                <li><a href="{{ route('admin.steps.index') }}"><i class="fa fa-clone" aria-hidden="true"></i> Steps </a></li>
                                <li><a href="{{ route('admin.tips.index') }}"><i class="fa fa-edit" aria-hidden="true"></i> Tips </a></li>
                                <li><a href="{{ route('admin.categories.index') }}"><i class="fa fa-book" aria-hidden="true"></i> Categories </a></li>
                                <li><a href="{{ route('admin.levels.index') }}"><i class="fa fa-server" aria-hidden="true"></i> Levels </a></li>
                                <!-- <li><a href="{{ route('admin.ratings.index') }}"><i class="fa fa-child" aria-hidden="true"></i> Ratings </a></li> -->
                                <!-- <li><a href="{{ route('admin.emojis.index') }}"><i class="fa fa-child" aria-hidden="true"></i> Emoji </a></li> -->

                            @elseif (Auth::user()->hasRole('user'))
                                <li><a href="{{ route('user.activities.index') }}"><i class="fa fa-child" aria-hidden="true"></i> Activities </a></li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
