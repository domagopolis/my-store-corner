<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('stylesheets')
</head>
<body>
    <div id="main_body">
        <div id="banner">
            <h1>
                <a href="">{{ config('app.name', 'Laravel') }} @yield('subheading')</a>
                <span class="desc">Your local business directory</span>
            </h1>
            <ul>
                @guest
                <li>
                    <a href="/register" class="button" title="Register your store quickly then set up your catalogue from your account page">Add Your Store</a>
                </li>
                <li>
                    <a href="/login" class="button" title="Login directly to your account page">Store Login</a>
                </li>
                @endguest
            </ul>
        </div>
        @include('partials._nav')
        <div id="content">
            @include('partials._messages')
            @yield('content')
        </div>
        <div id="footer">
            <p id="trade_mark">&copy; <a href="http://www.joshdomagala.com" target="_blank">Josh Domagala</a> <?php echo date('Y'); ?></p>
            <p id="designed">ABN: 69336456487</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
