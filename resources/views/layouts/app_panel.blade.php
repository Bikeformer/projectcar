<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/select2.min.css') }}">
    <script src="{{ asset('/js/select2.min.js') }}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">Admin Panel</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="{{ route('motorist.index') }}">Водители</a>
                    <a class="navbar-brand" href="{{ route('car.index') }}">Машины</a>
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
