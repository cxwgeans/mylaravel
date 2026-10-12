<html>
    <head>
        <title>@yield('title')</title>
        <style>
            ht {background-color:#999999; color:#ffffff; padding:5px 10px;}
            td {border:solid 1px #aaaaaa; color:#999999; padding:5px 10px;}
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            <p>※メニュー</p>
            <li>@show</li>
        </ul>
        <hr>
        @yield('content')
        @yield('footer')
    </body>
</html>