<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        <div id="main_body">
            <div id="banner">
                <h1>
                    <a href="">{{ $store->name }}</a>
                    <span class="desc">{{ $trade->title }}</span>
                </h1>
            </div>
            @include('partials._navstore')
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