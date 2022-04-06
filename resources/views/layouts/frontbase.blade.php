<html>
    <head>
        <title>@yield('title')</title>
        @yield('head')
    </head>
    <body>


        <h1>Header</h1>
        @section('menus')
            This is the master menus.
        @show

        <br><br>

        @section('slider')
            This is the master slider.
        @show


        @yield('content')


        @section('foot')
            This is the Footer.
        @show
        
    </body>
</html>
