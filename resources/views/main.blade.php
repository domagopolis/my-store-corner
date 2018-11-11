<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        <div id="main_body">
            <div id="banner">
                <h1>
                    <a href="">My Store Corner @yield('subheading')</a>
                    <span class="desc">Your local business directory</span>
                </h1>
                <ul>
                    <li>
                        <a href="/register" class="button" title="Register your store quickly then set up your catalogue from your account page">Add Your Store</a>
                    </li>
                    <li>
                        <a href="/login" class="button" title="Login directly to your account page">Store Login</a>
                    </li>
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
        @yield('scripts')
    </body>
</html>