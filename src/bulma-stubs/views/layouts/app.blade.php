<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <nav class="navbar">

            <div class="navbar-brand">
                <nav class="level">
                    <p>&nbsp;&nbsp;{{ config('app.name', 'Laravel') }} {{ app()->version() }}</p>
                </nav>
            </div>

            <div id="navMenuExample" class="navbar-menu">

                <div class="navbar-start">
                </div>

                <div class="navbar-end">

                    @if (Auth::guest())
                        <a class="navbar-item " href="{{ route('login') }}">Login</a>
                        <a class="navbar-item " href="{{ route('register') }}">Register</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">

                            <a class="navbar-item " href="#">{{ Auth::user()->name }}</a>

                            <div class="navbar-dropdown ">
                                <a class="navbar-item " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>

                        </div>
                    @endif

                </div>

            </div>

        </nav>

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
